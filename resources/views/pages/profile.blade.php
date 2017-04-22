@extends('layouts.main')

@section('title', '| Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default" style="margin-top:180px;">
                <div class="panel-heading">
                  <h2>{{ Auth::user()->first.' '.Auth::user()->last }}'s Profile</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
