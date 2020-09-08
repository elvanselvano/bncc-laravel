<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get("/", 'ViewController@viewHome');
Route::get("/article", 'ViewController@articleCreation');

// Create
Route::post('/article/create', 'ArticleController@create')->name('createArticle');

// Read
Route::get("/db", "ArticleController@index");

// Edit and Update
Route::get("/article/{id}/edit", "ArticleController@edit");
Route::patch("/article/{id}/update", "ArticleController@update");

// Delete
Route::delete("/article/{id}/delete", "ArticleController@delete");

// Read an article
Route::get("/article/{id}", "ArticleController@getArticle")->name("getArticle");

// Register
Route::get("/register", "ViewController@viewRegister");
Route::post("/user/create", "UserTempController@create")->name("createUser");

// Login
Route::get("/login", "ViewController@viewLogin");
Route::post("/user/login", "UserTempController@login")->name("loginUser");

// Newsletter
Route::get("/newsletter", function () {
    return view("newsletter-main");
});
