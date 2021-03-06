@extends('layouts.main')

@section('title', '| Edit Project')

@section('content')

<div class="row">
  <!-- Telling the form which project to pull in (model object binding to form)-->
  <!-- "php artisan route:list" shows that for projects.update the method is either PATCH or PUT -->
  {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'PUT']) !!}
  <div class="col-md-8">
    {{ Form::label('title', 'Project Title:') }}
    {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

    {{ Form::label('slug', 'Slug:') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}

    {{ Form::label('course_id', 'Course:') }}
    <select class="form-control" name="course_id">
      @foreach($courses as $course)
        <option value="{{ $course->id }}">{{ $course->name }}</option>
      @endforeach
    </select>

    {{ Form::label('description', 'Description:')}}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
  </div>

  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizontal">
        <label>Created At: </label>
        <!-- REFERENCE TO PHP TIME AND DATE WEBSITE -->
        <p>{{ date('M j Y H:i', strtotime($project->created_at)) }}</p>
      </dl>

      <dl class="dl-horizontal">
        <label>Last Updated At: </label>
        <p>{{ date('M j Y H:i', strtotime($project->updated_at)) }}</p>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          {!! Html::linkRoute('projects.show', 'Cancel', array($project->id), array('class' => 'btn btn-danger btn-block')) !!}
        </div>
        <div class="col-sm-6">
          {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
</div><!-- end of row (form) -->

@endsection
