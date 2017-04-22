@extends('layouts.main')

@section('title', '| Delete Course')

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>ARE YOU SURE YOU WANT TO DELETE THIS COURSE?</h1>
      <p>{{ $course->name }}</p>

      {{ Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'DELETE']) }}
        {{ Form::submit('YES DELETE THIS COURSE', ['class' => 'btn btn-lg btn-block btn-danger']) }}
      {{ Form::close() }}
    </div>
  </div>

@endsection
