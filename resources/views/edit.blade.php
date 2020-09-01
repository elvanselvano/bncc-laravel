@extends("layouts.app")

@section('title', 'dashboard')

@section("content")
<div class="article-form p-5">
    <h2 class="article-submission m-4">Article Edit</h2>
    <form class="px-4 py-3" action="/article/{{$article->id}}/update" method="POST" enctype="multipart/form-data"">
        @csrf
        <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Author</label>
            <input name="author" value="{{$article->author}}" type="text" class="form-control" placeholder="Enter author">
          </div>
          <div class="form-group">
            <label>Article Title</label>
            <input name="title" value="{{$article->title}}" type="text" class="form-control" placeholder="Enter title">
          </div>
          <label>Content</label><br>
          <div class="input-group">
            <textarea name="content" value="{{$article->content}}" class="form-control" aria-label="With textarea"
              placeholder="Write your content here..."></textarea>
          </div>
        </div>

        <!-- Heading Image -->
        <div class="form-group col-md-8">
          <label>Heading Image</label><br>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input name="image" type="file" class="custom-file-input" id="inputGroupFile02">
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
