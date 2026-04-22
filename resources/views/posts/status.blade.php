<x-app-layout>
    <h1>Edit status</h1>

    <form action="{{ route('update.status', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="status">Status: </label>
        <input type="text" id="status" name="status">
        <br>
        <input type="submit" value="Update">
    </form>
</x-app-layout>
