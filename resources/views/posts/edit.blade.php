<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post 🙄</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Method Spoofing to use PUT -->
        <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
        <textarea name="body" required>{{ old('body', $post->body) }}</textarea>
        <button type="submit">Update Post</button>
    </form>
</body>
</html>