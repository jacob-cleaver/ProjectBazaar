@extends('layouts.main')

@section('title', '| About')

@section('content')
<div class="container"><!-- start container -->
    <div class="row"><!-- start row -->
        <div class="col-md-5"><!-- start col -->
            <div class="panel panel-default">
              <!-- display the contact information for the tuors -->
                <div class="panel-heading">Dave Walsh</div>
                <div class="panel-body">
                    <p>david.walsh@edgehill.ac.uk</p>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-5 col-md-offset-2"><!-- start col -->
            <div class="panel panel-default">
                <div class="panel-heading">Mark Hall</div>
                <div class="panel-body">
                    <p>hallmark@edgehill.ac.uk</p>
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->
@endsection
