<x-app-layout>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>