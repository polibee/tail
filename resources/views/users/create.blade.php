@extends('layouts.default')

@section('title', '注册')

@section('content')
    <div class="mx-auto mt-8 max-w-md">
        <div class="bg-white p-8 border border-gray-300 rounded shadow-md">
            <h5 class="text-2xl font-semibold mb-4">注册</h5>
            <form method="POST" action="{{ route('users.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">名称：</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">邮箱：</label>
                    <input type="text" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">密码：</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">确认密码：</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">注册</button>
            </form>
        </div>
    </div>
@stop
