@extends('layouts.default')
@section('title', '登录')

@section('content')
    <div class="flex justify-center">
        <div class="w-96">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-xl font-bold">登录</h5>
                </div>
                <div class="card-body">
                    @include('shared._errors')

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label for="email" class="block mb-1">邮箱：</label>
                            <input type="text" name="email" class="form-input w-full" value="{{ old('email') }}">
                        </div>

                        <div>
                            <label for="password" class="block mb-1">密码（<a href="{{ route('password.request') }}" class="text-blue-500">忘记密码</a>）：</label>
                            <input type="password" name="password" class="form-input w-full" value="{{ old('password') }}">
                        </div>

                        <div>
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox" name="remember" id="remember">
                                <label class="ml-2" for="remember">记住我</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">登录</button>
                    </form>

                    <hr class="my-4">

                    <p>还没账号？<a href="{{ route('signup') }}" class="text-blue-500">现在注册！</a></p>
                </div>
            </div>
        </div>
    </div>
@stop
