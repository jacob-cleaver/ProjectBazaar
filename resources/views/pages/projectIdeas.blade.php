@extends('layouts.main')

@section('title', '| Projects')

@section('content')
<div class="container">
  <!-- <div class="row">
    <div class="col-md-12">
      <div class="jumbotron" style="background-color:rgba(245, 245, 245, .2); color:#fff;">
        <h1>Project Ideas!</h1>
        <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
      </div>
    </div>
  </div> -->

  <div class="row">
    @foreach($projects as $project)
      <a href="{{ url('project-bazaar', $project->slug) }}" class="col-md-8 col-md-offset-2 projects">
        <h3>{{ $project->title }}</h3>
        <p>{{ substr($project->description, 0, 300) }}{{ strlen($project->description) > 300 ? "..." : "" }}</p>
      </a>
    @endforeach
  </div>

  <!-- Pagination -->
  <div class="text-center">
    {!! $projects->links() !!}
  </div>
</div><!-- End of container -->

@endsection
