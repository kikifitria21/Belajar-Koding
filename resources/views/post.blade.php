@extends('layout.main')

@section('container')

<div class="container">
	<div class="row justify-content-center mb-5">
		<div class="col-md-8">
		<h1 class="mb-3">{{ $author->title }}</h1>

		
		<p>By.<a href="/authors/{{$post->user->username}}" class="text-decoration-none">{{ $post->user->name}}</a>in
		<a href="/posts?category={{ $post->category->slug}}" class="text-decoration-none">
		{{ $post->category->name }}</a></p>

		<img src="image/1.jpg" {{ $post->category->name }} alt="{{ $post->category->name }}" class="img-fluid">

		<article class="my-3"
		{!! $post->body !!}
		</article>
		<a href="/posts/" class="d-block">Back to Posts</a>

		</div>
	</div>
</div>
@endsection