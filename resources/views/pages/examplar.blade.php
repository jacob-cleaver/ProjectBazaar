@extends('layouts.main')

@section('title', '| Examplar')

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Previous Projects</h1>
      <table class="table">
        <thead>
          <th>Title</th>
          <th>Decription</th>
          <th>Year</th>
        </thead>

        <tbody>
            <tr>
              <td>User Experience</td>
              <td>User Experience (UX) is becoming very popular. In this project you need...</td>
              <td>2016</td>
            </tr>
        </tbody>
      </table>
  </div> <!-- end of .row -->

@endsection
