@extends('layouts.main')

@section('container')
	<h1>About Page</h1>
	<h3>{{ $name }}</h3>
	<p> {{  $email }}</p>
	<img src="img/{{ $image }}" alt="{{  $name  }}" width="120" height="160" class="img-thumbnail rounded-circle">
@endsection