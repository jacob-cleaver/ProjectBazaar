@extends('layouts.main')

@section('title', '| Create New Project')

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Project</h1>
      <hr>

      {!! Form::open(array('route' => 'projects.store', 'data-parsley-validate' => '')) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}

        {{ Form::label('description', 'Project Description:') }}
        {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}

        {{ Form:: submit('Create Project', array('class' => 'btn btn-success btn-large btn-block', 'style' => 'margin-top:20px')) }}
      {!! Form::close() !!}
    </div>
  </div>

@endsection

@section('scripts')
  <!-- Adding script for this page alone to improve the validation -->
  {!! Html::script('js/parsley.min.js') !!}

@endsection
