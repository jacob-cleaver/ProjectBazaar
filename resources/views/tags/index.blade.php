@extends('layouts.main')

@section('title', '| Tags')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>Tags</h1>
      <table class="table">
        <thread>
          <tr>
            <th>#</th>
            <th>Name</th>

          </tr>
        </thread>

        <tbody>
          @foreach ($tags as $tag)
          <tr>
            <th>{{ $tag->id }}</th>
            <td>{{ $tag->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> <!-- end of col-md-8 -->

    <div class="col-md-3">
      <div class="well">
        {!! Form::open(['route' => 'tags.store']) !!}
        <h2>New Tag</h2>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        {{Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block']) }}
      </div>
    </div> <!-- end of col-md-3 -->
  </div> <!-- end of row -->


@endsection
