@extends('layouts.default')
@section('title', '重置密码')

@section('content')
    <div class="flex justify-center">
        <div class="w-96">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-xl font-bold">重置密码</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" method="POST" action="{{ route('password.email') }}" class="space-y-4">
                        @csrf

                        <div class="mb-4{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="form-control-label">邮箱地址：</label>

                            <input id="email" type="email" class="form-input w-full" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="form-text">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">
                                发送密码重置邮件
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
