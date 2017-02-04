<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>

<body id="app-layout">

  <div class="wrapper">
    @include('partials._nav')
    @yield('content')
    @include('partials._footer')
  </div>

  @include('partials._javascript')

</body>
</html>
