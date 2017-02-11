@extends('layouts.main')

@section('title', '| Projects')

@section('content')
  <!-- <div class="container"> -->
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron" style="background-color:rgba(245, 245, 245, .2); color:#fff;">
          <h1>Welcome to My Blog!</h1>
          <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
          <p><a class="btn btn-turquoise btn-lg" href="#" role="button">Popoular Post</a></p>
        </div>
      </div>
    </div><!-- end of row -->

    <div class="row">
      <div class="col-md-8">

        @foreach($projects as $project)


        <div class="post">
          <h3>{{ $project->title }}</h3>
          <p>{{ $project->description}}</p>
          <a href="#" class="btn btn-turquoise">Read More</a>
        </div>

        <hr>

        @endforeach

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
      </div>
    </div><!-- end of row -->
  <!-- </div> end of container -->

@endsection
