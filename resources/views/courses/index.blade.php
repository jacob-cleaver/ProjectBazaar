@extends('layouts.main')

@section('title', '| Courses')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>Courses</h1>
      <table class="table">
        <thread>
          <tr>
            <th>#</th>
            <th>Name</th>

          </tr>
        </thread>

        <tbody>
          @foreach ($courses as $course)
          <tr>
            <th>{{ $course->id }}</th>
            <td>{{ $course->name }}</td>
            <td><a href="{{ route('courses.delete', $course->id) }}" class="btn btn-xs btn-danger fa fa-trash"></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> <!-- end of col-md-8 -->

    <div class="col-md-3">
      <div class="well">
        {!! Form::open(['route' => 'courses.store']) !!}
        <h2>New Course</h2>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        {{Form::submit('Create New Course', ['class' => 'btn btn-primary btn-block']) }}
      </div>
    </div> <!-- end of col-md-3 -->
  </div> <!-- end of row -->


@endsection
