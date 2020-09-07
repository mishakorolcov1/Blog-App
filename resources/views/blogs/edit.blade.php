@extends('app')

@section('content')
<form method="{{ route('update_blog_path', $blog->id)}}" method="POST">
  
  @csrf
{{ method_field('PUT') }} 
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $blog->title}}" required>
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control" required>{{$blog->content}}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary ">Edit Blog Post</button>
    <a href="{{ route('blogs_path')}}" class="btn btn-outline-secondary  mr-md-3">Back</a>
  </div>


</form>


@endsection