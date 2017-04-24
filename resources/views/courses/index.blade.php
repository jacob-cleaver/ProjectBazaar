@extends('layouts.main')

@section('title', '| Courses')

@section('content')

  <div class="row"><!-- start row -->
    <div class="col-md-8"><!-- start col -->
      <h1>Courses</h1>
      <table class="table"><!-- table of courses -->
        <thread>
          <tr>
            <th>#</th>
            <th>Name</th>

          </tr>
        </thread>

        <tbody><!-- For each course list the courses ID, name within the table -->
          @foreach ($courses as $course)
          <tr>
            <th>{{ $course->id }}</th>
            <td>{{ $course->name }}</td>
            <td><a href="{{ route('courses.delete', $course->id) }}" class="btn btn-xs btn-danger fa fa-trash"></a></td>
          </tr>
          @endforeach
        </tbody>
      </table><!-- end table -->
    </div> <!-- end of col-md-8 -->

    <div class="col-md-3"><!-- start col -->
      <div class="well"><!-- start well -->
        {!! Form::open(['route' => 'courses.store']) !!}
        <h2>New Course</h2>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        {{Form::submit('Create New Course', ['class' => 'btn btn-primary btn-block']) }}
      </div><!-- end well -->
    </div> <!-- end of col-md-3 -->
  </div> <!-- end of row -->


@endsection
