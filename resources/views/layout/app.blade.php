<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{config('app.name', 'laravelApp')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container" style="margin-top:80px">
            @include('inc.messages')
            @yield('content')
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
