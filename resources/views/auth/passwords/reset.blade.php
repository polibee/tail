@extends('layouts.default')
@section('title', '更新密码')

@section('content')
    <div class="offset-md-1 col-md-10">
        <div class="card">
            <div class="card-header">
                <h5 class="text-lg font-bold">更新密码</h5>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email" class="block mb-1">Email 地址</label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @error('email')
                        <span class="text-red-500 text-sm" role="alert">
            <strong>{{ $message }}</strong>
          </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block mb-1">密码</label>

                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required>

                        @error('password')
                        <span class="text-red-500 text-sm" role="alert">
            <strong>{{ $message }}</strong>
          </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block mb-1">确认密码</label>

                        <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required>
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            重置密码
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
