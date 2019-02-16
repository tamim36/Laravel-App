@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>

    <h1 style="font-weight:bold;">{{$post->title}}</h1>
    <small>written at {{$post->created_at}}</small>

    <div class="well" style="padding:30px;">
            <p> {!!$post->body!!} </p>
        </div>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit Post </a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', "class" => "pull-right"])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}    
    
@endsection