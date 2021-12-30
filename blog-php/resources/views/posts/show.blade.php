@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->description}}</p>
    <hr>
    <small>Written on {{$post->create_on}</small>
@endsection
