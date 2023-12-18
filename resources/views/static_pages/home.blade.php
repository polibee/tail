@extends('layouts.default')
@section('content')
    <div class="bg-light p-3 md:p-5 rounded">
    <h1 class="text-3xl md:text-4x1 lg:text-5x1 front-bold mb-3">Hello Laravel</h1>
        <p class="text-lg md:text-x1 lg:text-2x1 leading-relaxed mb-4">
            你现在所看到的是<a href="https://learnku.com/courses/laravel-essential-trainin" class="text-blue-500 hover:underline">
                Laravel入门教程</a>的示例项目主页
            </a>
        </p>
        <p class="text-lg md:text-x1 lg:text-2x1 leading-relaxed mb-4">
            一切将从这里开始。
        </p>
<p>
    <a href="{{route('signup')}}" class="py-2 px-6 bg-blue-500 text-white text-lg front-semibold rounded-full hover:bg-blue-600">现在注册</a>
</p>
    </div>
@stop
