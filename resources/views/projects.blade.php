@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default" style="margin-top:120px; margin-right:15px;">
              <?php for ($i = 0; $i < 1 $i++): ?>
                <div class="col-sm-3">
                  <div class="custom-div col-sm-6" style="height: 350px; border:2px solid;">Projects</div>
                  <div class="transparent-div col-sm-6" style="height: 350px; border:2px solid;">Projects</div>
                </div>
              <?php endfor; ?>
            </div>
        </div>
    </div>
@endsection
