<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function add(Request $request){
        $user_id = Auth::user()->id;
        $book_id = $request->book_id;
        $star_rated = $request->product_rating;

        $existing_rating = Rating::where('user_id',Auth::id())->where('book_id',$book_id)->first();

        if ($existing_rating){
            $existing_rating->star_rated = $star_rated;
            $existing_rating->update();
        }else{
            Rating::create([
                'user_id' => $user_id,
                'book_id' => $book_id,
                'star_rated' => $star_rated
            ]);
        }

        return redirect()->back()->with('done','Thanks for your rating');
    }
}
