<!DOCTYPE html>
<html lang="en">
<!-- MASTER BLADE to include all partials such as head, nav, messages, footer and javascript -->
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
