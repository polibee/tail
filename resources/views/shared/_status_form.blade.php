<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._errors')
    @csrf
    <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="聊聊新鲜事儿..." name="content">{{ old('content') }}</textarea>
    <div class="text-right">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded">发布</button>
    </div>
</form>
