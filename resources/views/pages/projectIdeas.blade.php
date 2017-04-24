@extends('layouts.main')

@section('title', '| Projects')

@section('content')
<div class="container"><!-- start container -->
  <div class="row">
    @foreach($projects as $project)
    <!-- for each project -->
      <a href="{{ url('project-bazaar', $project->slug) }}" class="col-md-8 col-md-offset-2 projects">
        <h3>{{ $project->title }}</h3>
      </a>
    @endforeach
  </div>

  <!-- Pagination -->
  <div class="text-center">
    {!! $projects->links() !!}
  </div>
</div><!-- End of container -->

@endsection
