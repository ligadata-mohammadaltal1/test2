@extends('layouts.app')

@section('content')
<div class="container">

        <h1>Create Project Page</h1>

        
		<form action="/projects" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
		  </div>

		  <div class="form-group">
		    <label for="slug">Slug:</label>
		    <input type="text" class="form-control" placeholder="Enter slug" id="name" name="slug">
		  </div>

		  <div class="form-group">
		    <label for="description">Description:</label>
		    <textarea class="form-control" name="description"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="background_image_url">Background Image:</label>
		    <input type="file" name="background_image_url" class="form-control">
		  </div>


		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
        

</div>
@endsection
