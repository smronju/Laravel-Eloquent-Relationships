@extends('layouts.master')

@section('title', 'Posts List')

@section('content')

	<h1>Users list</h1>

	<a href="#" class="btn btn-primary">Add New Post <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

	<hr/>

	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Actions</th>
		</tr>
		@foreach ($posts as $post)
			<tr>
				<td>{{ $post->title }}</td>
				<td>{{ $post->body }}</td>
				<td width="165">
					<div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
						<a href="{{ route('post::show', $post->id) }}" type="button" class="btn btn-success">View</a>
						<a href="#" type="button" class="btn btn-info">Edit</a>
						<a href="#" type="button" class="btn btn-danger">Delete</a>
					</div>
				</td>
			</tr>
		@endforeach
	</table>

	{!! $posts->render() !!}

@endsection