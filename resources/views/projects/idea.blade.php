@extends('layouts.main')

<!-- The use of "" over '' allows for variables to interpolated -->
@section('title', "| $project->title")

@section('content')

<!-- <div class="row">
  <div class="col-md-12">
    <div class="jumbotron" style="background-color:rgba(245, 245, 245, .2); color:#fff;">
      <h1>Project Ideas!</h1>
      <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
    </div>
  </div>
</div> -->

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>{{ $project->title }}</h1>
      <p>{{ $project->description }}</p>
      <br/>
      <p>Course: {{ $project->course->name }}</p>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h3 class="comment-title"><span class="fa fa-comments"></span> {{ $project->comments()->count() }} Comments</h3>
      <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2">
          {{ Form::open(['route' => ['comments.store', $project->id], 'method' => 'POST']) }}

            <div class="row">
              <div class="col-md-12">
                {{ Form::label('comment', "Comment:") }}
                {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('name', "Name:") }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('email', "Email:") }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}

                {{ Form::submit('Add Comment', ['class' =>  'btn btn-primary btn-block']) }}
              </div>
            </div>
          {{ Form::close() }}
        </div>
      </div>
      @foreach($project->comments as $comment)
        <div class="comment">
          <div>
            <!-- Setting the comments image for the author using gravatar setting the size using the s=50 and default image using d=mm -->
            <!-- If the user has a gravatar account it will use their picture via the email inputted -->
            <!-- If they dont it will show a default mystery user icon -->
            <img src={{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=mm" }} class="author-image">
            <div class="author-name">
              <h4>{{ $comment->name }}</h4>
              <p class="author-time">{{ date('l jS F Y', strtotime($comment->created_at)) }}</p>
            </div>
          </div>

          <div class="comment-content">
            {{ $comment->comment }}
          </div>
        </div>
      @endforeach


    </div>
  </div>

@endsection
