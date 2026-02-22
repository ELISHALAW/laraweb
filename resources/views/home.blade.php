<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 😂</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
</head>
<body>
    <h1>Home</h1>

    <form action="{{ route('formsubmitted') }}" method="POST">
    @csrf
    <label for="Fullname">Full name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your full name here" required>
        <br>
        <br>
    <label for="Email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Type your email here" required><br>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    {{-- <a href="{{ route("testpage") }}">Go to test page</a> --}}
</body>
</html>