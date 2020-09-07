@extends('app')

@section('content')

<div class="row">
    
    @foreach($blogs as $blog)



    <div class="col  ">
        <div class="card mt-4">
            <div class="card-header">
                <a href="{{ route('blog_path', [ $blog->id])}}">{{ $blog->title}}</a>
               
            </div>
            <div class="card-body ">
                {{ $blog->content}}
                <p class="lead"> {{ $blog->created_at }} </p>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection
