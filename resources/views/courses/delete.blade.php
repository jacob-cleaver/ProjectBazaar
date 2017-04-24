@extends('layouts.main')

@section('title', '| Delete Course')

@section('content')

  <div class="row"><!-- start row -->
    <div class="col-md-8 col-md-offset-2"><!-- start col -->
      <h1>ARE YOU SURE YOU WANT TO DELETE THIS COURSE?</h1>
      <p>{{ $course->name }}</p>
      <!-- Using courses controller and the destory part of CRUD -->
      {{ Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'DELETE']) }}
        {{ Form::submit('YES DELETE THIS COURSE', ['class' => 'btn btn-lg btn-block btn-danger']) }}
      {{ Form::close() }}
    </div><!-- end col -->
  </div><!-- end row -->

@endsection
