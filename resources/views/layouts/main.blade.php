<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>

<body>
  @include('partials._nav')
  @include('partials._messages')
  @yield('content')
  <div class="container">
    @include('partials._footer')
    @include('partials._javascript')
    @yield('scripts')
  </div>
</body>
</html>
