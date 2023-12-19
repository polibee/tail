@extends('layouts.default')
@section('title', '登录')

@section('content')
    <div class="mx-auto mt-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <h5 class="text-xl font-bold">登录</h5>
            </div>
            <div>
                @include('shared._errors')

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">邮箱：</label>
                        <input type="text" name="email" class="form-input mt-1 block w-full" value="{{ old('email') }}">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">密码：</label>
                        <input type="password" name="password" class="form-input mt-1 block w-full" value="{{ old('password') }}">
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">登录</button>
                </form>

                <hr class="my-4">

                <p>还没账号？<a href="{{ route('signup') }}" class="text-blue-500">现在注册！</a></p>
            </div>
        </div>
    </div>
@stop
