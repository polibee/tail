@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="flex justify-center">
        <div class="w-1/2">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h5 class="text-lg font-bold mb-4">注册</h5>

                @include('shared._errors')

                <form method="POST" action="{{ route('users.store') }}">
                    {{ csrf_field() }}

                    <div class="mb-4">
                        <label for="name" class="block mb-2">名称：</label>
                        <input type="text" name="name" class="border border-gray-300 rounded-md px-3 py-2 w-full" value="{{ old('name') }}">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block mb-2">邮箱：</label>
                        <input type="text" name="email" class="border border-gray-300 rounded-md px-3 py-2 w-full" value="{{ old('email') }}">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block mb-2">密码：</label>
                        <input type="password" name="password" class="border border-gray-300 rounded-md px-3 py-2 w-full" value="{{ old('password') }}">
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block mb-2">确认密码：</label>
                        <input type="password" name="password_confirmation" class="border border-gray-300 rounded-md px-3 py-2 w-full" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop
