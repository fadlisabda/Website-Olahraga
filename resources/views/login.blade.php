<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Login {{ config('app.name') }}</h1>
            @if(session('message'))
              <div class="alert alert-danger" role="alert">
              {{ session('message') }}   
              </div> 
            @endif
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Input Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Input Password" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            <a class="nav-link" href="{{ route('register') }}">Register</a>   
            <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
          </form>  
  </body>
</html>