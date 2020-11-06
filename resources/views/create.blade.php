@extends('layout')

@section("content")
	<div class="container">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	<h2>Add New Recipe</h2>
	<form method="POST" action="/recipe">
		{{ csrf_field() }}
		<form>
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
		  </div>
		  <div class="form-group">
		    <label>Ingredients</label>
		    <input type="text" class="form-control" name="ingredients" value="{{ old('ingredients') }}" required >
		  </div>
		  <div class="form-group">
		    <label>Category</label>
		    <input type="text" class="form-control" name="category" value="{{ old('category') }}" required >
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection