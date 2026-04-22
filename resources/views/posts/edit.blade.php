<x-app-layout>
    
    @if ($errors->any())
        <hr>
            @foreach ($errors->all() as $err)
                {{ $err }}
            @endforeach
        <hr>
    @endif

    <h1>Edit post</h1>

    <form action="{{ route('update', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="@if($errors->any()){{ old('title') }}@else{{ $post->title }}@endif">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">@if($errors->any()){{ old('content') }}@else{{ $post->content }}@endif</textarea>
        <br>
        <input type="submit" value="Update">
    </form>
</x-app-layout>
