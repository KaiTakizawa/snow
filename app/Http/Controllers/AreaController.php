<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use Cloudinary;

class AreaController extends Controller
{
    public function area(Area $area)
    {
        return view('areas/index')->with(['areas' => $area->get()]);
    }
    
    public function create()
    {
        return view('areas.create');
    }
    
    public function store(Request $request, Area $area)
    {
        $input = $request['area'];
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    
        $input += ['image_url' => $image_url];
        $area->fill($input)->save();
        return redirect('/areas/index' . $area->id);
    }
    
    
    public function show(Area $area)
    {
        return view('/areas/show')->with(['area' => $area]);
    }
    
    
    public function delete(Area $area)
    {
        $area->delete();
        return redirect('/');
    }
}
