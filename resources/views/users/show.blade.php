@extends('layouts.default')
@section('title',$user->name)
@section('content')
    <div class="container mx-auto p-6">
        <div class="md:flex md:justify-center">
            <div class="md:w-3/4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>$user])
                </section>
            </div>
        </div>
    </div>
    {{$user->name}}-{{$user->email}}
    @stop
