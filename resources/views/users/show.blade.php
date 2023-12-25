@extends('layouts.default')
@section('title', $user->name)

@section('content')
    <div class="flex justify-center">
        <div class="w-full sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-5/12">
            <section class="user_info">
                @include('shared._user_info', ['user' => $user])
            </section>
            <section class="status">
                @if ($statuses->count() > 0)
                    <ul class="list-none">
                        @foreach ($statuses as $status)
                            @include('statuses._statuses')
                        @endforeach
                    </ul>
                    <div class="mt-5">
                        {!! $statuses->render() !!}
                    </div>
                @else
                    <p>没有数据！</p>
                @endif
            </section>
        </div>
    </div>
@endsection
