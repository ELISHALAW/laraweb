@extends('layouts.default')

@section('header')
<h2>This is the header</h2>

@endsection

@section('maincontent')
<main>
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
</main>
@endsection

@section('footer')
    <h2>This is the footer</h2>
@endsection
{{-- <a href="{{ route("testpage") }}">Go to test page</a> --}}
