@extends('layouts.main')

@section('title', '| Home')

@section('content')
    <div class="row"><!-- start row -->
        <div class="col-sm-12">
          <div class="transparent-div" style="height:800px;">
            <div id="carousel-example-generic" class="carousel slide col-sm-8 col-sm-offset-2 .visible-xs-* .visible-sm-* .visible-md-* .visible-lg-*" data-ride="carousel" data-interval="6000" style="height:400px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <p style="font-size:100px;">Project Bazaar</p>
                <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              </div>

              <div class="item">
                <p style="font-size:100px;">Project Bazaar</p>
                <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              </div>

              <div class="item">
                <p style="font-size:100px;">Project Bazaar</p>
                <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              </div>

              <div class="item">
                <p style="font-size:100px;">Project Bazaar</p>
                <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div> <!-- Carousel -->
        </div>
        <!-- LEARN MORE -->
        <div class=" row custom-div">
              <p>Project Bazaar</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
        </div>

        <!-- LEARN MORE -->
        <div class="row transparent-div">
              <p>Project Bazaar</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
        </div>

      </div>
  </div><!-- end row -->
@endsection
