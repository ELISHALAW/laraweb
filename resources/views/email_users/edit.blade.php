<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Email User 🙄</title>
</head>
<body>
    <h1>Edit Email User</h1>

    <form action="{{route('email_users.update',$email_user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $email_user->name) }}">
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username', $email_user->username) }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $email_user->email) }}">
        </div>
        <button type="submit">Update</button>
        <a href="{{route('email_users.index')}}">Back to List</a>
    </form>
</body>
</html>