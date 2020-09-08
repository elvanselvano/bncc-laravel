@extends("layouts.app")

@section('title', 'dashboard')

@section("content")

<div class="article-form p-5">
    <h2 class="article-submission m-4">Article Edit</h2>
    <form class="px-4 py-3" action="/article/{{$article->id}}/update" method="POST" enctype="multipart/form-data"">
        @method("patch")
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Author</label>
                    <input name="author" value={{ old("author") ?? $article->author }} type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Enter author">
                    @error('author')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Article Title</label>
                    <input name="title" value={{ old("title") ?? $article->title }} type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <label>Content</label><br>
                <div class="input-group">
                    <textarea name="content" value={{ old("content") ?? $article->content }} class="form-control @error('content') is-invalid @enderror" aria-label="With textarea"
                    placeholder="Write your content here..."></textarea>

                    @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                </div>

                <!-- Heading Image -->
                @include("./layouts/image")
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
