@extends('layout')

@section("content")
	<div class="container">
	<h2>Edit Recipe</h2>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	<form method="POST" action="/recipe/{{ $recipe->id }}">
		{{ method_field("PATCH") }}
		{{ csrf_field() }}
		<form>
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name" value="{{ $recipe->name }}" required >
		  </div>
		  <div class="form-group">
		    <label>Ingredients</label>
		    <input type="text" class="form-control" name="ingredients" value="{{ $recipe->ingredients }}" required >
		  </div>
		  <div class="form-group">
		    <label>Category</label>
		    <input type="text" class="form-control" name="category" value="{{ $recipe->category }}" required >
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection