@extends('layouts.master')

@section('title', 'Users List')

@section('content')

	<h1>Users list</h1>

	<a href="#" class="btn btn-primary">Add New User <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

	<hr/>

	<table class="table table-striped table-condensed">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td><a href="{{ route('user::show', $user->id) }}"><span class="glyphicon glyphicon-search"></span></a></td>
				<td><a href="#"><span class="glyphicon glyphicon-pencil"></span></td>
				<td><a href="#"><span class="glyphicon glyphicon-remove"></span></td>
			</tr>
		@endforeach
	</table>

	{!! $users->render() !!}

@endsection