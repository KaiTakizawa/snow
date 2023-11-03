<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Area;
use App\Models\Location;
use Cloudinary;
use App\Models\Image;
use App\Models\Like;


class AreaController extends Controller
{
    public function area(Request $request, Area $area)
    {
        // $user = auth()->user();
        $areas = $area->withCount('likes')->orderByDesc('updated_at')->get();
        return view('areas.index', ['areas' => $areas,]);
        // return view('areas.index')->with(['areas' => $area->get()]);
    }
    
    public function create()
    {
        return view('areas.create');
    }
    
    public function store(Request $request, Area $area, Location $location)
    {  
        $input = $request['area'];
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    
        $input += ['snowmap_url' => $image_url];
        $area->fill($input)->save();
        
         
        foreach($request->file('images') as $url)
        {
            $image = new Image();
            //cloudinaryへ画像を送信し、画像のURLを$images_urlに代入している
            $input['img_url'] = Cloudinary::upload($url->getRealPath())->getSecurePath();
            $input['area_id'] = $area->id;
            $image->fill($input)->save();
        }
        
         $input = $request['location'];
         $input['area_id'] = $area->id;
         $location->fill($input)->save();
        
        return redirect('/areas/' . $area->id);
    }
    
    
    public function show(Area $area)
    {
        return view('/areas/show')->with(['area' => $area, 'location' => $area->location, 'images' => $area->images]);
    }
    
     
    
    
    
    public function delete(Area $area)
    {
        $area->delete();
        return redirect('/');
    }
    
    
    public function search(Request $request)
    {
        $areas = Area::query();
        
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $areas->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('detail', 'LIKE', "%{$keyword}%")
                ->orWhere('address', 'LIKE', "%{$keyword}%")
                ->orWhere('access', 'LIKE', "%{$keyword}%");
        }
        $results = $areas->get();
        return view('areas.index')->with(['areas' => $results]);
    }
    
    public function like(Request $request)
    {
        $user_id = Auth::user()->id; // ログインしているユーザーのidを取得
        $area_id = $request->area_id; // 投稿のidを取得
    
        // すでにいいねがされているか判定するためにlikesテーブルから1件取得
        $already_liked = Like::where('user_id', $user_id)->where('area_id', $area_id)->first(); 
    
        if (!$already_liked) { 
            $like = new Like; // Likeクラスのインスタンスを作成
            $like->area_id = $area_id;
            $like->user_id = $user_id;
            $like->save();
        } else {
            // 既にいいねしてたらdelete 
            Like::where('area_id', $area_id)->where('user_id', $user_id)->delete();
        }
        // 投稿のいいね数を取得
        $area_likes_count = Area::withCount('likes')->findOrFail($area_id)->likes_count;
        $param = [
            'area_likes_count' => $area_likes_count,
        ];
        return response()->json($param); // JSONデータをjQueryに返す
    }
    
    
    
}
