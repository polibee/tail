<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
@include('layouts._header')

<div class="container mx-auto">
    <div class="md:offset-1 md:col-span-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>
