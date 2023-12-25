@extends('layouts.default')

@section('content')
    @if (Auth::check())
        <div class="flex flex-row">
            <div class="w-8/12">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h4 class="text-2xl font-bold mt-6">微博列表</h4>
                <hr class="my-4">
                @include('shared._feed')
            </div>
            <aside class="w-4/12 ml-6">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="bg-gray-100 p-6 rounded">
            <h1 class="text-4xl font-bold">Hello Laravel</h1>
            <p class="text-lg mt-4">
                你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training" class="text-blue-500">Laravel 入门教程</a> 的示例项目主页。
            </p>
            <p class="text-lg mt-2">
                一切，将从这里开始。
            </p>
            <p class="mt-4">
                <a class="inline-block px-6 py-3 bg-green-500 text-white rounded-full font-bold text-lg hover:bg-green-600" href="{{ route('signup') }}" role="button">现在注册</a>
            </p>
        </div>
    @endif
@stop
