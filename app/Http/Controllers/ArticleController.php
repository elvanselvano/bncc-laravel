<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Mail\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ProcessMail;

class ArticleController extends Controller
{

    // change Request to ArticleRequest to use ArticleRequest.php
    public function create(Request $request)
    {
        // bsa jadi param ketiga di validator::make
        // $messages = [
        //     'title.required'  => 'Please insert the title of the article.',
        //     'title.max' => ...
        //     ...
        // ]

        // save based on filesystem in config
        // save in storage/app/public folder
        // php artisan storage:link (muncul storage folder di public)

        // php artisan make:request ArticleRequest (app/http/requests)

        Validator::make(
            $request->all(),
            [
                'author' => 'required',
                'title' => 'required|min:3|max:255',
                'content' => 'required',
                'image' => 'required',
            ]
        )->validate();

        Article::create([
            'author' => $request->author,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image->store('images', 'public'),
        ]);

        return back()->with('success', 'You have successfully posted a new article!');
    }

    public function index()
    {
        $article_data = Article::paginate(2);
        return view("/db", ["article_data" => $article_data]);
    }

    public function edit($id)
    {
        $article_data = Article::find($id);
        return view("/edit", ["article" => $article_data]);
    }

    public function update(Request $request, $id)
    {
        Validator::make(
            $request->all(),
            [
                'author' => 'required',
                'title' => 'required|max:255',
                'content' => 'required',
                'image' => 'required',
            ]
        )->validate();

        $article = Article::find($id);
        Storage::disk('public')->delete($article->image);
        // Storage::delete($article->image);
        $article->update($request->all());
        return back()->with('success', 'You have successfully updated the article!');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        Storage::disk('public')->delete($article->image);
        // Storage::delete($article->image);
        $article->delete();
        return back()->with('success', 'You have deleted an article!');
    }

    public function getArticle($id)
    {
        $article = Article::find($id);
        return view("article", ["article" => $article]);
    }

    public function sendMail()
    {
        // php artisan make:mail Newsletter
        // return (new Newsletter())->render();
        // Mail::send(new Newsletter());
        // Mail::to($request->email)->send();
        $this->dispatch(new ProcessMail());
    }
}
