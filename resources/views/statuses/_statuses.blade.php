<li class="flex mt-4 mb-4">
    <a href="{{ route('users.show', $user->id) }}" class="flex-shrink-0">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="me-1 gravatar" />
    </a>
    <div class="flex-grow-1 ms-3">
        <h5 class="mt-0 mb-1 text-sm font-bold">{{ $user->name }} <small class="text-gray-500"> / {{ $status->created_at->diffForHumans() }}</small></h5>
        <p class="text-gray-700">{{ $status->content }}</p>
    </div>

    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status->id) }}" method="POST" class="ml-auto">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-red status-delete-btn">删除</button>
        </form>
    @endcan
</li>
