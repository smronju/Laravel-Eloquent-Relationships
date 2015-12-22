@extends('layouts.master')

@section('title', 'Users Post')

@section('content')

	<h1>Viewing {{ $post->title }}</h1>

	<hr/>

	<h4>{{ $post->title }}</h4>
	<small><strong>Author:</strong> {{ $post->user->name }}</small>

	<p>{{ $post->body }}</p>

	<h3>Comments <small>({{ count($post->comments) }})</small></h3>

	<hr/>



	@foreach ($post->comments as $comment)
		<p>{{ $comment->comment }}</p>
	@endforeach
	

@endsection