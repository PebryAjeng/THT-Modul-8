@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="home-container">
    <div class="home-text">
        <h1>Welcome to Cozy Library!</h1>
        <p>Your ultimate destination for book lovers. Discover new stories and knowledge at your fingertips.</p>
        <a href="/explore" class="btn">Explore Now</a>
    </div>
    <img src="{{ asset('images/library.png') }}" alt="Library Image" class="home-image">
</div>
@endsection
