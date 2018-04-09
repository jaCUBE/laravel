<!doctype html>

<html>
    <head>
      <meta charset="utf-8">
      <title>Laravel Test</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link  rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/superhero/bootstrap.min.css" />    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>      
    </head>
    
    
    
    <body>      
      @include('layouts.nav')
      
      <div class="container">
        @yield('content')
      </div>
             
      @include('layouts.footer')
    </body>
    
    
</html>