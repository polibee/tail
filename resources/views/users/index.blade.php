@extends('layouts.default')
@section('title', '所有用户')

@section('content')
    <div class="offset-md-2 col-md-8">
        <h2 class="mb-4 text-center text-2xl font-semibold">所有用户</h2>
        <div class="list-group">
            @foreach ($users as $user)
                <div class="list-group-item flex items-center">
                    <img class="mr-3 w-8 h-8 rounded-full" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
                    <a href="{{ route('users.show', $user) }}" class="text-blue-500">
                        {{ $user->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
