@extends('layouts.default')

@section('content')
    @if (Auth::check())
        <div class="flex">
            <div class="w-8/12">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
            </div>
            <aside class="w-4/12">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="bg-gray-100 p-3 sm:p-5 rounded">
            <h1 class="text-2xl font-bold">Hello Laravel</h1>
            <p class="text-lg">
                你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training" class="text-blue-500">Laravel 入门教程</a> 的示例项目主页。
            </p>
            <p>
                一切，将从这里开始。
            </p>
            <p>
                <a href="{{ route('signup') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg mt-4 inline-block">现在注册</a>
            </p>
        </div>
    @endif
@endsection
