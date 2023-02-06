@extends('layouts.dashboard.layout')

@section('dashboard')
<section class="container posts_tabel">
    <h1>All Posts</h1>
    @if (session()->has('success'))
        <h4 style="color:green">{{session('success')}}</h4>
    @else
        <h4 style="color:red">{{session('danger')}}</h4>        
    @endif
    <div class="section_tabel">
        <table class="data_tabel">
            <tr>
              <th>Title</th>
              <th>Category</th>
              <th>Excerpt</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->category->name}}</td>
              <td>{{$post->excerpt}}</td>
              <td>{{$post->created_at}}</td>
              <td>
                <a href="/p/{{$post->slug}}" target="_blank">Open</a> |
                <a href="/dashboard/posts/{{$post->slug}}/edit">Edit</a> |
                <form action="/dashboard/posts/{{$post->slug}}" method="POST" id="form-delete">
                  @method('DELETE')
                  @csrf
                  <a type="submit" href="javascript:{}" onclick="confirm('Are you sure?') && deleteAlert()">
                    Delete
                  </a>
                </form>
            </td>
            </tr>
            @endforeach
          </table>
    </div>
</section>
<script>
  function deleteAlert(){
    return document.getElementById('form-delete').submit();
  }
</script>
@endsection