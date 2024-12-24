@extends('layout.app')

@section('title', 'Sign In')

@section('content')
<div class="form-container">
    <h1>Sign In</h1>
    <form action="/signin" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Sign In</button>
    </form>
</div>
@endsection
