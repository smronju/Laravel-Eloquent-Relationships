@extends('layouts.master')

@section('title', 'Users Post')

@section('content')

	<h1>Viewing {{ $staff->name }}</h1>

	<hr/>

	<div class="row">
		<div class="col-md-6">
			<h1>{{ $staff->name }}'s details</h1>

			<hr/>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th>Name</th>
					<td>{{ $staff->name }}</td>
				</tr>
			</table>

		</div>

		<div class="col-md-6">
			<h1>{{ $staff->name }}'s Photos <small>({{ count($staff->photos) }})</small></h1>

			<hr/>

			<table class="table table-striped">
				<tr>
					<th>Photo path</th>
				</tr>
				
				@foreach ($staff->photos as $photo)
					<tr>
						<td><strong>{{ $photo->path }}</strong></td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>

@endsection