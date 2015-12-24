@extends('layouts.master')

@section('title', 'Staff List')

@section('content')

	<h1>Product lists</h1>

	<a href="#" class="btn btn-primary">Add New Product <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

	<hr/>

	<table class="table table-striped table-condensed">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach ($products as $product)
			<tr>
				<td>{{ $product->name }}</td>
				<td>${{ $product->price }}</td>
				<td><a href="{{ route('product::show', $product->id) }}"><span class="glyphicon glyphicon-search"></span></a></td>
				<td><a href="#"><span class="glyphicon glyphicon-pencil"></span></td>
				<td><a href="#"><span class="glyphicon glyphicon-remove"></span></td>
			</tr>
		@endforeach
	</table>

	{!! $products->render() !!}

@endsection