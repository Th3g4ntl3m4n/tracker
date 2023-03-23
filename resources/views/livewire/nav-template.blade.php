<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
     <!-- <a class="navbar-brand" href="#">Navbar</a>  -->
        <a href="index.html"><img src="{{ asset('images/icons/logo-tracker.png')}}" alt="LOGO"></a>
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-white" aria-current="page" href="{{ route('home')}}">Home</a>
          <a class="nav-link text-white" href="{{ route('aboutus')}}">Nosotros</a>
          <a class="nav-link text-white" href="{{ route('price')}}">Precios</a>
          <a class="nav-link text-white" href="{{ route('articles')}}">Articulos</a>
          <a class="nav-link text-white" href="{{ route('contact')}}">Contactenos</a>
        </div>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
