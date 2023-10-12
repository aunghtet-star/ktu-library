<?php

use App\Http\Controllers\backend\ArticleController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\StudentController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\RatingController;
use App\Http\Controllers\ProfileController;
use App\Models\Book;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $books = Book::all();



    return view('welcome',compact('books'));
});

Route::middleware('auth')->group(function (){
    Route::get('/details/{id}',[DetailController::class,'detail']);
    Route::post('/rating',[RatingController::class,'add']);
});



Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('/dashboard',[HomeController::class,'home'])->name('admin.dashboard');

    Route::resource('/articles',ArticleController::class);
    Route::get('/articles/datatables/ssd',[ArticleController::class,'ssd']);

    Route::resource('/students',StudentController::class);
    Route::get('/students/datatables/ssd',[StudentController::class,'ssd']);

    Route::resource('/books',BookController::class);
    Route::get('/books/datatables/ssd',[BookController::class,'ssd']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
