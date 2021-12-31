@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img src="/storage/cover_images/{{$post->cover_image}}" alt="No Image" style="width: 30%; padding: 10px 50px;" />
        </div>
    </div>
    <p>{{$post->description}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <br><br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => "btn btn-danger"])}}
            {!!Form::close() !!}
        @endif
    @endif
@endsection
