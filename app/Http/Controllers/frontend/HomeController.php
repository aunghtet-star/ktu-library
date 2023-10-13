<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index(){
            $books = Book::all();

            foreach ($books as $book){
                $short_stories = $book->where('article_id',1)->get();
            }

            return view('welcome',compact('books','short_stories'));
        }

        public function search(Request $request){

            $searchData = '%'.$request->search.'%';
            $articles =Article::all();
            $books = Book::where('name','like',$searchData)
                ->orwhere('author','like',$searchData)
//                ->orWhereHas('articles',function ($articles) use ($searchData) {
//                    $articles->where('name','like',$searchData);
//                })
                ->simplepaginate(10);

            $short_stories = Book::all();

            return view('welcome',compact('articles','books','short_stories'));


        }
}
