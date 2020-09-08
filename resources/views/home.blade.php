@extends("layouts.app")

@section('title', 'dashboard')

@section("content")
    {{-- check validation --}}
    {{-- @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}

    <div class="article-form pl-5 pt-2 pb-3 pr-3">
    <h2 class="article-submission mt-0">Article Submission</h2>
    <form class="px-0 py-3" action="{{route('createArticle')}}" method="POST" enctype="multipart/form-data"">
        @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Author</label>
            <input name="author" type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Enter author">
            @error('author')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Article Title</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <label>Content</label><br>
        <div class="input-group">
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" aria-label="With textarea"
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

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
