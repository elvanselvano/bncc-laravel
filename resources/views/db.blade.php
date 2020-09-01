@extends('layouts.app')

@section('title', 'dashboard');

@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-4">Trending Articles</h4>

            @foreach($article_data as $article)
            <div class="card mb-3">
                <div class="card-header">
                    {{$article->title}}
                    <br>
                    <a href="/article/{{$article->id}}/edit">Edit</a>
                    <a href="/article/{{$article->id}}/delete">Delete</a>
                </div>
                <div class="card-body">
                    <div>
                        {{$article->content}}
                    </div>
                </div>
            </div>
            @endforeach
            {{$article_data->links()}}
        </div>
    </div>
</div>
@endsection

