<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Weibo')-Laravel新手项目</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
@include('layouts._header')
<div class="container mx-auto p-6">
    <div class="md:mx-auto md:flex md:flex-col md:w-full md:max-w-s-screen-md">
        <div class="md:mx-auto md:w-full md:flex md:flex-col md:items-center md:justify-center">
            <div class="w-full md:w-2/3">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts._footer')
</div>


</body>
</html>
