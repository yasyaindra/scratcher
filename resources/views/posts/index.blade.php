@extends('layouts.layout')

@section('content')
<div class="content">
    <form action="/posts" class="contact_form grid">
        @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
        @else
            <input type="hidden" name="user" value="{{request('user')}}">
        @endif
        <div class="contact_inputs grid">
            <h1>{{$title}}</h1>
            <div class="contact_content">
                <label for="" class="contact_label">Cari</label>
                <div class="search_container">
                    <button type="submit" class="button button--flex">
                        <i class="uil uil-search"></i>
                    </button>
                    <input type="text" class="contact_input" name="search" placeholder="What are you searching?" value="{{request('search')}}">
                </div>
            </div>
        </div>
    </form>
    <section class="services">
        @foreach ($posts as $post)
        <div class="service">
            <h3><a href="/p/{{$post->slug}}">{{ $post->title }}</a></h3><small>
                <a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a>
                <h5>
                    {{$post->created_at->diffForHumans()}}
                </h5>
                oleh <a href="/posts?user={{$post->user->username}}">{{$post->user->name}}</a></small>
                <p>{{ $post->excerpt }}</p>
            </div>
            @endforeach
        </section>
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
@endsection