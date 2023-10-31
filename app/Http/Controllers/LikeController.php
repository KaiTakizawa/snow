<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use Cloudinary;
use App\Models\Image;
use App\Models\Like;
use App\Models\Review;

class LikeController extends Controller
{
    public function likes(Review $review, Like $like)
    {
        return view('/like')->with(['likes' => $like->get()]);
    }
}
