<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Rating;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id){
        $book = Book::find($id);

        $ratings = Rating::where('book_id',$book->id)->get();
        $rating_sum = Rating::where('book_id',$book->id)->sum('star_rated');

        $rating_count = $ratings->count() === 0 ? 1 : $ratings->count();

        $rating_value = $rating_sum/$rating_count;

        $book->update(['rating' => $rating_value]);


        return view('frontend.details.detail',compact('book','rating_value'));
    }
}
