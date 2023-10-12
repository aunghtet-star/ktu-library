<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $students = User::count();
        $articles = Article::count();
        $books = Book::count();
        return view('backend.dashboard',compact('students','articles','books'));
    }
}
