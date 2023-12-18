@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert @if($msg === 'danger') bg-red-500 text-white @elseif($msg === 'warning') bg-yellow-500 text-black @elseif($msg === 'success') bg-green-500 text-white @elseif($msg === 'info') bg-blue-500 text-white @endif">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach
