@extends('layouts.master')

@section('title', 'Country Posts')

@section('content')
	
	<h1>Posts made in {{ $country->name }}</h1>

	<hr/>

	@foreach ($country->posts as $post)
		<h4><a href="{{ route('post::show', $post->id) }}"> {{ $post->title }}</a></h4>
		<small><strong>Author:</strong> {{ $post->user->name }}</small>

		<p>{{ $post->body }}</p>
	@endforeach

@endsection