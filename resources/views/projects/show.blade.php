@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Project {{ $project->id }}</h1>
    <h2>Name: {{ $project->name }}</h2>
    <p>{{ $project->description }}</p>
</div>
@endsection
