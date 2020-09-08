@extends('layouts.app')

@section('title', 'dashboard')

@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-4">Trending Articles</h4>

            @foreach($article_data as $article)
            <div class="card mb-3">
                <div class="card-header">
                    <img src="{{ asset('storage/' . $article->image) }}" width="300px" alt="">
                    <br>
                    <strong><a href="{{ route("getArticle", $article->id) }}">{{$article->title}}</a></strong>
                    <br>
                    <p>Written by {{ $article->author }}</p>
                    <button class="btn btn-link text-primary p-0" type="submit">
                        <a href="/article/{{$article->id}}/edit">Edit</a>
                    </button>
                    <form action="/article/{{$article->id}}/delete" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-link text-danger p-0" type="submit">
                            Delete
                        </button>
                    </form>
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

