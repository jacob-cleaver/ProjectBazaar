@extends('layouts.app')

@section('title', '| Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default" style="margin-top:180px;">
                <div class="panel-heading"><h2>{{ $user->first.' '.$user->last}}'s Profile</h2></div>
                <!-- <div class="panel-body">
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
