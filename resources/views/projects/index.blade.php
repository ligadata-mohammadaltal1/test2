@extends('layouts.app')

@section('content')
<div class="container">

    <h1>All Projects Page</h1>

	<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Name</th>
	        <th>Slug</th>
	        <th>Description</th>
	        <th>Control</th>
	      </tr>
	    </thead>
	    <tbody>
	    @foreach($projects as $project)
	      <tr>
	        <td>{{ $project->id }}</td>
	        <td>{{ $project->name }}</td>
	        <td>{{ $project->slug }}</td>
	        <td>{{ $project->description }}</td>
	        <td>
	        	<a href="#" class="btn btn-success">Edit</a>
	        	<a href="/projects/{{$project->id}}/delete" class="btn btn-danger">Delete</a>
	        	<a href="/projects/{{$project->id}}" class="btn btn-warning">Show</a>
	        </td>
	      </tr>
	    @endforeach  
	    </tbody>
	  </table>
</div>
@endsection
