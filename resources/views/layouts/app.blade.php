<!DOCTYPE html>
<html lang="en">

@include('partials/_head')

<body id="app-layout">

  <div class="wrapper">
    @include('partials/_nav')
    @yield('content')
    @include('partials/_footer')
  </div>
  
  @include('partials/_javascript')

</body>
</html>
