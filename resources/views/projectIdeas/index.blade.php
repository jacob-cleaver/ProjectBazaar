<!-- @extends('layouts.main')

@section('title', '| Project Ideas')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1>Project Idea</h1>
    </div>
  </div>

@foreach
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>{{ $project->title }}</h2>
      <h5>Publish: {{ date('M j Y', strtotime($project->created_at)) }}</h5>
      <p>{{ substr($project->description, 0, 250) }}{{ strlen($project->description) > 250 ? '...' : "" }}</p>
      <a href="{{ route('project.idea', $project->id) }}">Find Out More</a>
    </div>
  </div>
@endforeach

@endsection -->
