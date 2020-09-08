@extends('layouts.app')

@section('title', 'dashboard')

@section("content")

    <div class="ml-4 card-body">
        <h1>{{ $article->title }}</h1>
        <div class="text-secondary">
            <p>Written by {{ $article->author }} &middot; {{ $article->created_at->format("d F, Y") }}</p>
        </div>
        <img src="{{ asset("storage/" . $article->image) }}">
        <p>{{ $article->content }}</p>
        <div class="card-body">
            <p>Comments</p>
        </div>
    </div>

@endsection
