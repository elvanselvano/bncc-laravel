<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get("/", function() {
    return view("welcome");
});

Route::get("/db", "ArticleController@index");

Route::get("/article", 'ViewController@viewHome');
Route::post('/article/create', 'ArticleController@create')->name('createArticle');

Route::get("/article/{id}/edit", "ArticleController@edit");
Route::post("/article/{id}/update", "ArticleController@update");

Route::get("/article/{id}/delete", "ArticleController@delete");
