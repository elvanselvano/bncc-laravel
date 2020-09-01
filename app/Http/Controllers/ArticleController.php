<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(Request $request) {
        Article::create([
            'author' => $request->author,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        return back();
    }

    public function index() {
        $article_data = Article::paginate(3);
        return view("/db", ["article_data" => $article_data]);
    }

    public function edit($id) {
        $article_data = Article::find($id);
        return view("/edit", ["article" => $article_data]);
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->update($request->all());
        return redirect("/db");
    }

    public function delete($id) {
        $article = Article::find($id);
        $article->delete();
        return back();
    }
}
