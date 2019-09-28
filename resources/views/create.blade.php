@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/subjects/store">
			@csrf
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection