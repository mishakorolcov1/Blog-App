@extends('app')


@section('content')
<form action="{{ route('store_blog_path') }}" method="POST">

@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control " required>
</div> 

<div class="form-group">
<label for="content">Content</label>
<textarea name="content"  rows="10" class="form-control" required></textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Add Blog Post</button>
</div>
</form>

@endsection

