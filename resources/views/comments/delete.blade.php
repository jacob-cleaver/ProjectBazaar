@extends('layouts.main')

@section('title', '| Delete Comment')

@section('content')

  <div class="row"><!-- start row -->
    <div class="col-md-8 col-md-offset-2"><!-- start col-->
      <h1>ARE YOU SURE YOU WANT TO DELETE THIS COMMENT?</h1>
      <p>
        <!-- Passing in the comment data -->
        <strong>Name:</strong> {{ $comment->name }}<br>
        <strong>Email:</strong> {{ $comment->email }}<br>
        <strong>Comment:</strong> {{ $comment->comment }}
      </p>

      {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
        {{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger']) }}
      {{ Form::close() }}
    </div><!-- end col -->
  </div><!-- end row -->

@endsection
