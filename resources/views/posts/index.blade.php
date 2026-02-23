<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index 😎</title>
</head>
<body>
    <h1>All post</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>

        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form>
    @endforeach
    
</body>
</html>