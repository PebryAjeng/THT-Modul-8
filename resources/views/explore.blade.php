@extends('layout.app')

@section('title', 'Explore Books')

@section('content')
<div class="content-container">
    <h1>Top Trending Books</h1>
    <div class="features-section">
        <h2>Some Of Our Features include:</h2>
        <div class="features">
            <div>
                <img src="{{ asset('images/used-books.png') }}" alt="Used Book Buying">
                <p>Used Book Buying</p>
            </div>
            <div>
                <img src="{{ asset('images/returns.png') }}" alt="Returns & Exchanges">
                <p>Returns & Exchanges</p>
            </div>
            <div>
                <img src="{{ asset('images/online-ordering.png') }}" alt="Online Ordering">
                <p>Online Ordering</p>
            </div>
            <div>
                <img src="{{ asset('images/customer-support.png') }}" alt="24 Hours Customer Support">
                <p>24 Hours Customer Support</p>
            </div>
        </div>
    </div>
    <div class="books-section">
        <h2>Top Trending Books</h2>
        <div class="books">
            <div class="book">
                <img src="{{ asset('images/what-i-learned.png') }}" alt="What I Learned">
                <p>What I Learned</p>
                <button>Borrow</button>
                <button>Add to Cart</button>
            </div>
            <div class="book">
                <img src="{{ asset('images/made-to-stick.png') }}" alt="Made to Stick">
                <p>Made to Stick</p>
                <button>Borrow</button>
                <button>Add to Cart</button>
            </div>
            <div class="book">
                <img src="{{ asset('images/atomic-habits.png') }}" alt="Atomic Habits">
                <p>Atomic Habits</p>
                <button>Borrow</button>
                <button>Add to Cart</button>
            </div>
            <div class="book">
                <img src="{{ asset('images/muscle.png') }}" alt="Muscle">
                <p>Muscle</p>
                <button>Borrow</button>
                <button>Add to Cart</button>
            </div>
            <div class="book">
                <img src="{{ asset('images/happiness-by-design.png') }}" alt="Happiness by Design">
                <p>Happiness by Design</p>
                <button>Borrow</button>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
</div>
@endsection
