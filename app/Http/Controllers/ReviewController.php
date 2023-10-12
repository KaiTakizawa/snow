<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function review(Review $review)
    {
        return view('reviews/review')->with(['reviews' => $review->get()]);
    }
    
     public function storeReview(Request $request, Review $review)
    {
       $input = $request['review'];
       $review->fill($input)->save();
       return redirect('/reviews');
    }
}
