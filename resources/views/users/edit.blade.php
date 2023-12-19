@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card ">
            <div class="card-header">
                <h5 class="text-xl font-semibold">更新个人资料</h5>
            </div>
            <div class="card-body">

                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar w-24 h-24 rounded-full mb-4" />
                    </a>
                </div>

                <form method="POST" action="{{ route('users.update', $user->id )}}">
                    @method('PATCH')
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block mb-2">名称：</label>
                        <input type="text" name="name" class="form-input w-full" value="{{ $user->name }}">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block mb-2">邮箱：</label>
                        <input type="text" name="email" class="form-input w-full" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block mb-2">密码：</label>
                        <input type="password" name="password" class="form-input w-full" value="{{ old('password') }}">
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block mb-2">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-input w-full" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>
@endsection
