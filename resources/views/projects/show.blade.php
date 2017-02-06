@extends('layouts.main')

@section('title', '| New Project')

@section('content')
  <div class="row">
    <div class="col-md-8">
       <h1>{{ $project->title }}</h1>
       <p class="lead">{{ $project->description }}</p>
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created At:</dt>
          <!-- REFERENCE TO PHP TIME AND DATE WEBSITE -->
          <dd>{{ date('M j Y H:i', strtotime($project->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last Updated At:</dt>
          <dd>{{ date('M j Y H:i', strtotime($project->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
