@extends('layouts.layout')

@section('content')
<div class="content">
    <section class="services">
        @foreach ($categories as $category)
        <div class="service">
            <h3><a href="/posts?category={{$category->slug}}">{{$category->name}}</a></h3>
        </div>
        @endforeach
    </section>
@endsection