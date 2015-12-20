@extends('layouts.master')

@section('title', 'Users Post')

@section('content')

	<h1>Viewing {{ $user->name }}</h1>

	<hr/>

	<table class="table table-striped table-condensed">
		<tr>
			<th>Name</th>
			<td>{{ $user->name }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{ $user->email }}</td>
		</tr>
	</table>
	
	<hr/>

	<h1>User Posts <small>({{ count($user->posts) }})</small></h1>

	<hr/>

	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Actions</th>
		</tr>
		@foreach ($user->posts as $post)
			<tr>
				<td><strong>{{ $post->title }}</strong></td>
				<td>{{ $post->body }}</td>
				<td><a href="{{ route('post::show', $post->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			</tr>
		@endforeach
	</table>

@endsection