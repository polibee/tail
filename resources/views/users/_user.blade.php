<div class="list-group-item flex items-center">
    <img class="me-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width="32">
    <a href="{{ route('users.show', $user) }}" class="text-blue-500 hover:underline">
        {{ $user->name }}
    </a>
    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="post" class="ml-auto">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>

        </form>
    @endcan
</div>
