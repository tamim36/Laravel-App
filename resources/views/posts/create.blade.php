@extends('layout.app')

@section('content')
    <h3 style="margin-bottom:30px; font-weight:bold;">Ready to write a blog ? </h3>

    {!! Form::open(["action" => "PostsController@store", "method" => "POST", "class" => "form", 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

        <div class="form-group">
            {{form::file('cover_image')}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection