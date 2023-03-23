@php
$user_name= Auth::user()->name
@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <body>

 
    
<!-- Inicio Dashboard -->

<!-- Nav -->

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('home')}}" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="{{ route('aboutus')}}" class="nav-link px-2 text-white">Nosotros</a></li>
          <li><a href="{{ route('price')}}" class="nav-link px-2 text-white">Precios</a></li>
          <li><a href="{{ route('articles')}}" class="nav-link px-2 text-white">Articulos</a></li>
          <li><a href="{{ route('contact')}}" class="nav-link px-2 text-white">Contactenos</a></li>
        </ul>

        <!-- Buscador

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

      -->
      @auth                
      
      <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{$user_name}}
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">profile</a></li>
          <li><a class="dropdown-item" href="#">Otra cosa</a></li>
          <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
        </ul>
      </div>
      
      @else
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
          </div>
      @endauth
        
      </div>
    </div>
  </header>


  <!-- end  Nav -->

  
  <livewire:dashboard-menu>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    

  </body>
</html>