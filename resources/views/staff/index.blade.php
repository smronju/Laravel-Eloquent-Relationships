@extends('layouts.master')

@section('title', 'Staff List')

@section('content')

	<h1>Staff list</h1>

	<a href="#" class="btn btn-primary">Add New Staff <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

	<hr/>

	<table class="table table-striped table-condensed">
		<tr>
			<th>Name</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach ($staff as $tmp)
			<tr>
				<td>{{ $tmp->name }}</td>
				<td><a href="{{ route('staff::show', $tmp->id) }}"><span class="glyphicon glyphicon-search"></span></a></td>
				<td><a href="#"><span class="glyphicon glyphicon-pencil"></span></td>
				<td><a href="#"><span class="glyphicon glyphicon-remove"></span></td>
			</tr>
		@endforeach
	</table>

	{!! $staff->render() !!}

@endsection