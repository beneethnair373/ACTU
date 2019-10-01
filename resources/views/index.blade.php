@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subject)
					<tr>
						<td>{{ $subject->id }}</td>
						<td>{{ $subject->name }}</td>
						<td>{{ $subject->description }}</td>
						<td><a href="/subjects/{{ $subject->id }}">View</a></td>
						<td><a href="/subjects/{{ $subject->id }}/edit">Edit</a></td>
						<td><a href="/subjects/{{ $subject->id }}/edit">Try</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjects/add'>Add New Subject</a>
	</div>
@endsection