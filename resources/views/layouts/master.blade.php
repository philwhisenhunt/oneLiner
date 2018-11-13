<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>OneLiner: Make a story with friends</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="/css/master.css" rel="stylesheet">
  </head>

  <body class="bg-light">
  <div class="container">
        <div class="py-5 text-center">
              <a href="/"><h2>OneLiner</h2></a>

        <p class="lead">Collaborate with strangers one sentence at a time.</p>
        </div>
      </div>

    <div class="halfsize col-md-6">
        
              
        
            @yield ('content')

        
        </div>

         <div class="halfsize-2 col-md-6">
            @yield ('second-content')
           </div>




      </div>

  <div class="footer-space col-md-12">
      @include ('layouts.footer')
  </div>
    </body>

  </html>

  