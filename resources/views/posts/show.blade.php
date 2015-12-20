@extends('layouts.master')

@section('title', 'Users Post')

@section('content')

	<h1>Viewing {{ $post->title }}</h1>

	<hr/>

	<h4>{{ $post->title }}</h4>
	<small><strong>Author:</strong> {{ $post->user->name }}</small>

	<p>{{ $post->body }}</p>
	

@endsection