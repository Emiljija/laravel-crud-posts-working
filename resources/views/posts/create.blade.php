<x-app-layout>

    @if ($errors->any())
        <hr>
            @foreach ($errors->all() as $err)
                {{ $err }}
            @endforeach
        <hr>
    @endif

    <h1>Create post</h1>

    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>
