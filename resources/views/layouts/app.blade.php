<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <main>
        <hr>
        <a href="{{ route('contact.create') }}">Contact</a>
        <a href="{{ route('index') }}">Posts</a>
        <a href="{{ route('contact.index') }}">Messages</a>
        <a href="{{ route('about') }}">About</a>
        <hr>
    {{ $slot }}
    </main>
</body>
</html>