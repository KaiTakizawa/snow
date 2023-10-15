<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function review(Review $review)
    {
        return view('reviews/review')->with(['reviews' => $review->get()]);
    }
    
     public function storeReview(Request $request, Review $review)
    {
       $input = $request['review'];
       $input['user_id'] = Auth::id();
       $input['area_id'] = $request->route('area');
       $review->fill($input)->save();
       return redirect('/reviews');
    }
}
