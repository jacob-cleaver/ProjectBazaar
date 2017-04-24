<!-- success flash messages using bootstrap alert -->
@if (Session::has('success'))
<!-- success colour is green -->
  <div class="alert alert-success" role="alert">
    <strong>Success:</strong> {{ Session::get('success') }}
  </div>
@endif

@if (count($errors) > 0)
<!-- danger colour is red -->
  <div class="alert alert-danger" role="alert">
    <strong>Error:</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
