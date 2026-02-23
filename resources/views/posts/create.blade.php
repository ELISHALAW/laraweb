<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post 😐</title>
</head>
<body>
    <h1>Create New Posts</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" required>
        <textarea name="body" placeholder="Content" required>{{ old('body') }}</textarea>
        <button type="submit">Create Post</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

</body>
</html>