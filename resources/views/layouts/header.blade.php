
          @if (Auth::check()) 
          <div class="container">
  <div class="row">
    <div class="col-12">
      <span class="name"> {{ Auth::user()->name }} </span>
      <a href="/login" class="btn btn-success">Logout</a>
      @endif