@extends('layouts.main')

@section('title', '| Create New Project')

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Project</h1>
      <hr>

      {!! Form::open(array('route' => 'projects.store')) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control inout-lg')) }}

        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug', null, array('class' => 'form-control')) }}

        {{ Form::label('course_id', 'Course:') }}
        <select class="form-control" name="course_id">
          @foreach($courses as $course)
            <option value="Select Course">Select Course</option>
            <option value="{{ $course->id }}">{{ $course->name }}</option>
          @endforeach
        </select>

        {{ Form::label('description', 'Project Description:') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}

        {{ Form:: submit('Create Project', array('class' => 'btn btn-success btn-large btn-block', 'style' => 'margin-top:20px')) }}
      {!! Form::close() !!}
    </div>
  </div>

@endsection
