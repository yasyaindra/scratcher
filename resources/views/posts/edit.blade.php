@extends('layouts.dashboard.layout')

@section('dashboard')
<section class="container posts_tabel">
    <h1>Add New Post</h1>
    <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="contact_form grid" id="create-form-post">
        @method('PUT')
        @csrf
        <div class="contact_inputs grid">
            <div class="contact_content">
                <label for="" class="contact_label">Title
                    @error('title')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </label>
                <input type="text" id="title" class="contact_input" placeholder="What's the title?" name="title" value="{{old('title', $post->title)}}">
            </div>
            <div class="contact_content">
                <label for="" class="contact_label">Slug
                    @error('slug')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </label>
                <input type="text" id="slug" class="contact_input" placeholder="The slug is automatically filled based on the title" name="slug" value="{{old('slug', $post->slug)}}">
            </div>
        </div>
        <div class="contact_content">
            <label for="" class="contact_label">Category</label>
            <select type="text" class="contact_input" name="category_id">
                <option disabled>--Choose One--</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$category->name == $post->category->name ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="contact_content">
            <label for="" class="contact_label">Content
                @error('body')
                <small style="color:red">{{$message}}</small>
                @enderror
            </label>
            {{-- <textarea name="body" id="" cols="0" rows="7" class="contact_input"></textarea> --}}
            <input id="x" type="hidden" name="body" value="{{old('body', $post->body)}}">
            <trix-editor input="x" cols="0" rows="7" class="contact_input" placeholder="Write something in your mind"></trix-editor>
        </div>
    
        <div>
            <a class="button button--flex" type="submit" href="javascript:{}" onclick="document.getElementById('create-form-post').submit();">
                Send
                <i class='bx bx-send nav__icon' ></i>
            </a>
        </div>
    </form>

</section>

<script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', () => {
        fetch('/dashboard/posts/checkSlug?title='+title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

</script>

@endsection