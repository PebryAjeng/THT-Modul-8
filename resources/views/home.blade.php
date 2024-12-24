@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="home-container">
    <div class="home-text">
        <h1>Welcome to Tee's Library!</h1>
        <p>Track your Reading and Build your Library.<br>
           Discover your next Favourite Book.<br>
           Browse from the Largest Collections of Ebooks.<br>
           Read stories from anywhere at anytime.</p>
        <a href="#explore" class="btn">Explore Now</a>
    </div>
    <img src="{{ asset('images/library.png') }}" alt="Library Image" class="home-image">
</div>
@endsection
