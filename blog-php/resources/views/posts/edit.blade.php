@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'Write your post...'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
