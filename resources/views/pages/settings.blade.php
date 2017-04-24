@extends('layouts.main')

@section('title', '| Settings')

@section('content')
<div class="container"><!-- start container -->
    <div class="row"><!-- start row -->
        <div class="col-sm-12">
            <div class="panel panel-default" style="margin-top:180px;">
                <div class="panel-body">
                  <div class="col-sm-10 col-sm-offset-1">
                    <!-- show profile picture/avatar -->
                      <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                      <form enctype="multipart/form-data" action="/settings" method="POST" style="width:150px; float:left; margin-top:30px;">
                          <label>Update Profile Picture</label>
                          <input type="file" name="avatar"></input>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                          <input type="submit" class="btn btn-sm btn-turquoise" style="margin-top:10px;"></input>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end container -->
@endsection
