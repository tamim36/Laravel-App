@extends('layout.app')

@section('content')
    <h1 style="margin-bottom:30px; font-weight:bold;">Welcome to the Blog</h1>

    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="well" style="height:100px; border:1px grey dotted; border-radius:15px;padding:10px;">
                <h3 style="margin:0px;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>written at {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @endif
    
@endsection