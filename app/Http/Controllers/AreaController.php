<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Location;
use Cloudinary;
use App\Models\Image;

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
}
