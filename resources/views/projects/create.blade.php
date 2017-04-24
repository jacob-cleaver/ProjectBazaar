@extends('layouts.main')

@section('title', '| Create New Project')

@section('stylesheets')
  <!-- WYSIWYG Editor -->
  <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>

  <script>
    tinymce.init({
      selector: 'textarea'
    });
  </script>
@endsection

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <!-- Creating a new project using the store within the projects controller. Posting to the store request is the title, slug course ID and description -->
      <h1>Create New Project</h1>
      <hr>

      {!! Form::open(array('route' => 'projects.store')) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control input-lg', 'placeholder' => 'Title')) }}

        {{ Form::label('slug', 'URL Slug:') }}
        {{ Form::text('slug', null, array('class' => 'form-control')) }}

        {{ Form::label('course_id', 'Course:') }}
        <select class="form-control" name="course_id">
          <option value="" disabled selected>Please select a course</option>
          <!-- For each course search database for the ID -->
          @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
          @endforeach
        </select>

        {{ Form::label('description', 'Project Description:') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}

        {{ Form::submit('Create Project', array('class' => 'btn btn-success btn-large btn-block', 'style' => 'margin-top:20px')) }}
      {!! Form::close() !!}
    </div>
  </div>

@endsection
