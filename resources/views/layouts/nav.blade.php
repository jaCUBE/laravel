<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel.local Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <a class="nav-link" href="/">Home</a>

        @if (Auth::check())
          <a class="nav-link" href="/posts/create">New Post</a>
          <a class="nav-link pl-5" href="javascript:void(0)"><b>{{ Auth::user()->name }}</b></a>
          <a class="nav-link" href="/logout"><small>(logout)</small></a>
        @else
          <a class="nav-link" href="/register">Register</a>
          <a class="nav-link pl-5" href="/login">Login</a>
        @endif;
      </ul>
    </div>
  </div>
</nav>