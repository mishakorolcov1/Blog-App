  
@extends('app')

@section('content')
<div class="row">

    <div class="col-md-12">
        <h3>{{ $blog->title}}</h3>
        <hr>
        <p class="lead">
            {{ $blog->content}}
        </p>
        <div class="row">
        
        <a href="{{route('edit_blog_path', $blog->id)}}" class="btn btn-outline-info mt-4 mr-md-3">Edit</a>
        <a href="{{ route('blogs_path')}}" class="btn btn-outline-secondary mt-4 mr-md-3">Back</a>

        <form action="{{ route('delete_blog_path',  $blog->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger mt-4">Delete</button>
        </form>
    </div>
    </div>
</div>
@endsection