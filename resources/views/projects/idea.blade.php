@extends('layouts.main')

<!-- The use of "" over '' allows for variables to interpolated -->
@section('title', "| $project->title")

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>{{ $project->title }}</h1>
      <p>{{ $project->description }}</p>
      <hr>
      <p>Category: {{ $project->category->name }}</p>
    </div>
  </div>

@endsection
