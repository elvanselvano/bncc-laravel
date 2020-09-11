<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);
Auth::routes();

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

// Newsletter
Route::get("/newsletter", function () {
    return view("newsletter-main");
});

// Post Newsletter
Route::get("/mail", "ArticleController@sendMail")->name("sendMail");

Route::get('/home', 'HomeController@index')->name('home');
