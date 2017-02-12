@extends('layouts.main')

@section('title', '| Projects')

@section('content')
  <div class="row">
    <div class="col-md-10">
      <h1>Projects</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('projects.create') }}" class="btn btn-large btn-block btn-primary btn-h1-spacing">Create New Project</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div> <!-- end of .row -->

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Decription</th>
          <th>Created At</th>
          <th></th>
        </thead>

        <tbody>
          @foreach ($projects as $project)
            <tr>
              <th>{{ $project->id }}</th>
              <td>{{ $project->title }}</td>
              <!-- This is pulling in the project description from the databse and setting the description length to -->
              <!-- 50 characters to be displayed -->
              <td>{{ substr($project->description, 0, 300) }}{{ strlen($project->description) > 300 ? "..." : "" }}</td>
              <!-- This is formating the timestamp into date and 24hr time -->
              <td>{{ date('M j Y H:i', strtotime($project->created_at)) }}</td>
              <td>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-default btn-sm">View</a>
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-default btn-sm">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- Pagination -->
      <div class="text-center">
        {!! $projects->links() !!}
      </div>
    </div>
  </div> <!-- end of .row -->

@endsection
