@extends('layouts.layout')

@section('content')
<div class="container">
    <section>
    <h1>{{$post->title}}</h1>
    <h4>By 
        <a href="/posts?user={{ $post->user->username}}">{{$post->user->name}}</a>
         in <a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a></h4> {{$post->created_at->diffForHumans()}}
    <p>{!! $post->body !!}</p>
    <a href="/posts">Back</a>
    </section>
</div>
@endsection