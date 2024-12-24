@extends('layout.app')

@section('title', 'Sign Up')

@section('content')
<div class="form-container">
    <h1>Sign Up</h1>
    <form action="/signup" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Sign Up</button>
    </form>
</div>
@endsection
