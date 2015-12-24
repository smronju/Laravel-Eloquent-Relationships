@extends('layouts.master')

@section('title', 'Users Post')

@section('content')

	<h1>Details of: {{ $product->name }}</h1>

	<hr/>

	<div class="row">
		<div class="col-md-6">
			<h1>Product details</h1>

			<hr/>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th>Name</th>
					<td>{{ $product->name }}</td>
				</tr>
				<tr>
					<th>Price</th>
					<td>${{ $product->price }}</td>
				</tr>
			</table>

		</div>

		<div class="col-md-6">
			<h1>Product Photos <small>({{ count($product->photos) }})</small></h1>

			<hr/>

			<table class="table table-striped">
				<tr>
					<th>Photo path</th>
				</tr>
				
				@foreach ($product->photos as $photo)
					<tr>
						<td><strong>{{ $photo->path }}</strong></td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>

@endsection