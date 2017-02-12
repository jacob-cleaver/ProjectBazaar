@extends('layouts.main')

@section('title', "| $project->title")

@section('content')
  <div class="row">
    <div class="col-md-8">
       <h1>{{ $project->title }}</h1>
       <p class="lead">{{ $project->description }}</p>
       <hr>
       <p>Category: {{ $project->category->name }}</p>
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <label>Url: </label>
          <!-- REFERENCE TO PHP TIME AND DATE WEBSITE -->
          <p><a href="{{ url('project-bazaar', $project->slug) }}">{{url('project-bazaar', $project->slug)}}</a></p>
        </dl>

        <dl class="dl-horizontal">
        <label>Category: </label>
        <!-- REFERENCE TO PHP TIME AND DATE WEBSITE -->
        <p>{{ $project->category->name }}</p>
        </dl>

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
            {!! Html::linkRoute('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

            {!! Form::close() !!}
          </div>
          <div class="col-sm-12">
            <a href="{{ route('projects.index') }}" class="btn btn-default btn-block">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
