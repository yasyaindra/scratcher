@extends('layouts.layout')

@section('content')
    <div class="container">
        <header class="header">
            <div class="hero">
                <h2 class="heading">Scratcher</h2>
                <p class="sub-heading">Hoodie & T Shirt</p>
            </div>
            <div class="features feature-1">
                <h4 class="price">IDR 250K</h4>
                <p class="item">Hoodie</p>
            </div>
            <div class="features feature-2">
                <h4 class="price">IDR 150K</h4>
                <p class="item">T Shirt</p>
            </div>
        </header>

        {{-- <nav class="menu">
            <div class="brand">
                <h1>Scratch</h1>
            </div>
            <ul class="menu-list">
                <li><a href="">Home</a></li>
                <li><a href="">Product</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav> --}}

        <div class="content">
            <section class="services">
                <div class="service">
                    <div class="icon">🧑‍💻</div>
                    <h3>Software House</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium alias sunt nisi!</p>
                </div>
                <div class="service">
                    <div class="icon">👕👖</div>
                    <h3>Clothing Line</h3>
                    <p>Laudantium alias sunt nisi! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="service">
                    <div class="icon">🎭</div>
                    <h3>Entertainment</h3>
                    <p>Laudantium alias sunt nisi! Lorem ipsum dolor sit amet.</p>
                </div>
            </section>

            <div class="content">
                <h1 class="headline">Our Team</h1>
                <section class="users">
                    @foreach ($users as $user)
                        <div class="user">
                            <img src="{{ asset('img/default.jpeg') }}" alt="" class="profile_img">
                            <div class="profile_bio">
                                <h3>
                                    <a href="/posts?user={{ $user->username }}">{{ $user->name }}</a>
                                </h3>
                                <p>{{ $user->job }}</p>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>

            {{-- <section class="gallery">
                <h2>Gallery</h2>
            </section> --}}
        </div>
    </div>
@endsection
