<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index(){
            $books = Book::latest()->paginate(8);

            $education = Book::where('article_id',1)->get();
            $biography = Book::where('article_id',2)->get();
            $business = Book::where('article_id',4)->get();
            $health = Book::where('article_id',5)->get();
            $technology = Book::where('article_id',6)->get();
            $science = Book::where('article_id',8)->get();
            $fiction = Book::where('article_id',9)->get();
            $cartoon = Book::where('article_id',10)->get();
            $history = Book::where('article_id',11)->get();


            return view('welcome',compact('books',
                'education','biography','business','health','technology','science','fiction','cartoon','history'));
        }

        public function search(Request $request){

            $searchData = '%'.$request->search.'%';
            $books = Book::where('name','like',$searchData)
                ->orwhere('author','like',$searchData)
                ->orwhere('description','like',$searchData)
                ->simplepaginate(10);

            return view('frontend.home.search',compact('books'));
        }
}
