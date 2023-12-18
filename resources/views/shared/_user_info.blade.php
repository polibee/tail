<div class="flex items-center space-x-4">
    <a href="{{route('users.show',$user->id)}}"
       <img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="rounded-full w-20 h-20">
</a>
    <h1 class="text-2x1 front-bold">{{$user->name}}</h1>
</div>
