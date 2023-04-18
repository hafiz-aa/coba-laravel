@extends('layouts.main')

@section('container')
	<article>
		<h1 class="mb-5">{{ $post->title }}</h1>

		<p>By: Muhammad Hafiz in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

		{{-- mencetak tag html --}}
		{!! $post->body !!}
	</article>

	<a href="/posts">Back to Posts</a>
@endsection