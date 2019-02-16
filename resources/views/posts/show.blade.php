@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>

    <h1 style="font-weight:bold;">{{$post->title}}</h1>
    <small>written at {{$post->created_at}}</small>

    <div class="well" style="padding:30px;">
            <p> {!!$post->body!!} </p>
        </div>
    
@endsection