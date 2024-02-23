<!doctype html>
<html lang="en">
  <head>
    <title>Laravel-3624 </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <style>
    *{
      background-color: levender;
    }
   </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
        <nav class="navbar navbar-light ">
        <a class="navbar-brand font-weight-bold" href="/" style="font-size: 38px; margin-left:270px;">Projects of User</a>
        </nav>

        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif

    @yield('main-section')

    </body>
</html>