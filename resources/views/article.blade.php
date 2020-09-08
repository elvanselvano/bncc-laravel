@extends('layouts.app')

@section('title', 'dashboard')

@section("content")

    <div class="ml-4">
        <h1>{{ $article->title }}</h1>
        <p>Written by {{ $article->author }}</p>
        <img src="{{ asset("storage/" . $article->image) }}">
        <p>{{ $article->content }}</p>
    </div>

@endsection
