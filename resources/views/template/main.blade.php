<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>@yield('judul')</title>
  </head>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="{{"/home"}}">Home Page</a>
          <a class="nav-link" href="{{"/pemain"}}">Data Pemain Bola</a>
          <a class="nav-link" href="{{ route('logout') }}">Log Out</a> 
        </div>
      </div>
        <form class="d-flex mt-3" method="GET" action="/pemain">  
          <input name="cari" class="form-control mr-sm-2 mx-2" type="search" placeholder="Search Nama" aria-label="Search" size="50">
          <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
        </form>
    </div>
  </nav>
  </div>
  @yield('konten') 
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>