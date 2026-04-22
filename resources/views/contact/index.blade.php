<x-app-layout>
    <h1>All messages</h1>
    <ul>
        @foreach($messages as $message)
            <li>
                <h2>Name: {{ $message->name }}</h2>
                <p>Email: {{ $message->email }}</p>
                <p>Content: {{ $message->content }}</p>
            </li>
        @endforeach
    </ul>
</x-app-layout>
