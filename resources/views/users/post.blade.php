@extends('layouts.layout')

@section('content')
<div class="content">
    <section class="services">
        @foreach ($posts as $post)
        <div class="service">
            <h3><a href="/p/{{$post->slug}}">{{ $post->title }}</a></h3>
            <h4><a href="/c/{{$post->category->slug}}">{{ $post->category->name }}</a></h4>
            <p>{{ $post->excerpt }}</p>
        </div>
        @endforeach
    </section>
@endsection