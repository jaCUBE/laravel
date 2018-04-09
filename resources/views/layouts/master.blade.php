<!doctype html>

<html>
    <head>
      <meta charset="utf-8">
      <title>Laravel Test</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css" />    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>     
      
      <link  rel="stylesheet" type="text/css" href="http://laravel.local/css/app.css?v=<?= time() ?>" />  
    </head>
    
    
    
    <body>      
      @include('layouts.nav')
      
      <div class="container">
        @include('layouts.header')
        
        <div class="row">
          <div class="col-md-8">
            @yield('content')
          </div>
          <div class="col-md-4">
            @include('layouts.sidebar')
          </div>
        </div>
        
      </div>
             
      @include('layouts.footer')
    </body>
    
    
</html>