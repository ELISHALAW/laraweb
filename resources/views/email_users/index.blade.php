<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index email_users 😎</title>
</head>
<body>
    <h1>All User Email</h1>

    <a href="{{route('email_users.create')}}">Create Email User</a>

    @foreach($email_users as $email_user)
        <div>
            <h2>{{ $email_user->name }}</h2>
            <p>{{ $email_user->username }}</p>
            <p>{{ $email_user->email }}</p>
            <a href="{{ route('email_users.edit', $email_user->id) }}">Edit</a>
            <form action="{{ route('email_users.destroy', $email_user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this email user?')">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>