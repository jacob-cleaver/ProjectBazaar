@extends('layouts.main')

<!-- The use of "" over '' allows for variables to interpolated -->
@section('title', "| $project->title")

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>{{ $project->title }}</h1>
      <p>{{ $project->description }}</p>
      <hr>
      <p>Course: {{ $project->course->name }}</p>
    </div>
  </div>

  <div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2">
      {{ Form::open(['route' => ['comments.store', $project->id], 'method' => 'POST']) }}

        <div class="row">
          <div class="col-md-6">
            {{ Form::label('name', "Name:") }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
          </div>

          <div class="col-md-6">
            {{ Form::label('email', "Email:") }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
          </div>

          <div class="col-md-12">
            {{ Form::label('comment', "Comment:") }}
            {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

            {{ Form::submit('Add Comment', ['class' =>  'btn btn-primary btn-block']) }}
          </div>
        </div>
      {{ Form::close() }}
    </div>
  </div>

@endsection
