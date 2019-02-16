@extends('layout.app')

@section('content')
    <h1 style="margin-bottom:30px; font-weight:bold;">Welcome to the Blog</h1>

    @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                            <h3 style="margin:0px;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>written at {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @endif
    
@endsection