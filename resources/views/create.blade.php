@extends('layout')

@section("content")
	<div class="container">
	<h2>Add New Recipe</h2>
	<form method="POST" action="/recipe">
		{{ csrf_field() }}
		<form>
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div class="form-group">
		    <label>Ingredients</label>
		    <input type="text" class="form-control" name="ingredients">
		  </div>
		  <div class="form-group">
		    <label>Category</label>
		    <input type="text" class="form-control" name="category">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection