@extends('layout\main')
@section('container')
<h1 class="mb-3 text-center"> {{ $title }} </h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-5">
    <form action="/posts">

    @if (request('category'))
    <input type="hidden" name="category" value=" {{ request('category') }}">
    @endif
    @if (request('author'))
    <input type="hidden" name="category" value=" {{ request('author') }}">
    @endif

      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
  <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </div>
  </div>
</div>

@if ($blog_posts->count())
<div class="card mb-3">
  <img src="image/1.jpg" {{ $blog_posts[0]->category->name }}"class="card-img-top" 
  alt="{{ $blog_posts[0]->category->name }}">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/>{{ $blog_posts[0]->slug }}" 
    class="text-decoration-none text-dark">{{ $blog_posts[0]->title }}</a></h3>
    <p>
    <small class="text-muted">
    By. <a href="/posts?author={{ $blog_posts[0]->user->username }}" class="text-decoration-none">
    {{ $blog_posts[0]->user->name }}</a> in <a href="/posts?category={{$blog_posts[0]->category->slug}}"
    class="text-decoration-none">{{ $blog_posts[0]->category->name }}</a> 
    {{ $blog_posts[0]->created_at->diffForHumans() }}
    </small>
    </p>
    <p class="card-text">{{ $blog_posts[0]->excerpt }}</p>

    <a href="/posts/{{ $blog_posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
  </div>
</div>

<div class="container">
  <div class="row">
  @foreach($blog_posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
    <div class="card">
      <div class="position-absolute bg-dark px-3 py-2 text-white"><a href="/posts?category={{ $post->category->slug }}" 
      class="text-white" text-decoration-none> {{ $post->category->name }}</a></div>
  <img src="image/2.jpg" {{ $post->category->name }} class="card-img-top" 
  alt="{{ $post->category->name }}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p>
      By. <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in 
      <a href="/categories/{{$post->category->slug}}"
      class="text-decoration-none">{{ $post->category->name }}</a>
      </p>
    <p class="card-text">{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
  </div>
</div>
    </div>
    @endforeach
  </div>
</div>

@else
<p class="text-center fs-4">No Post found.</p>
@endif

<div class="d-flex justify-content-end">
{{ $blog_posts->links() }}
</div>
@endsection




