<x-app-layout>
    @if (session('status'))
        <hr>
            {{session('status')}}
        <hr>
    @endif

    <h1>All posts</h1>
    <a href="{{ route('create') }}">Create post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('show', $post->id) }}">Show</a>
                    <a href="{{ route('edit', $post->id) }}">Edit</a>
                    <a href="{{ route('status', $post->id) }}">Status</a>
                    <form action="{{ route('destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
