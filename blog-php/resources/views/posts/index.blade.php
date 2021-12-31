@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        <div class="card">
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" alt="No Image" style="width: 100%; padding: 10px 50px;" />
                    </div>
                    <div class="col-md-8 mt-4">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <p><small>Written on {{$post->created_at}}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    @else

    @endif
@endsection
