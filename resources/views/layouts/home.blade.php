<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>@yield('title')</title>

      <link rel="icon" href="img/murangotango.ico"/>

      <!--Fonte do Google -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
       
      <!-- CSS Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <style>
        body {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            margin: 0;
            color:#0F244A;
        }

        footer {
          background-color: #4169E1;
          color: #FFFFFF;
          padding: 45px 0;
          text-align: center;
          font-size: 1.2rem;

        }

        #nav {
          background-color: #4169E1;
        }

        #nav .navbar-nav .nav-link {            
            color: #FFFFFF;
        }
      </style>

  </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-md bg-sm pl-5 pr-5 mb-5 px-4 p-4" id="nav">
        <a href="#" class="btn btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M4 6l16 0"></path>
            <path d="M4 12l16 0"></path>
            <path d="M4 18l16 0"></path>
         </svg>
        </a>
        <div class="col-4">
          <img src={{ asset('img/murangotango.ico') }} alt="Logo" class="img-fluid w-25">
        </div>
        <div class="container text-align-start">
        <a href="/" class="navbar-brand"> MurangotangoShop </a>
          <div class="collapse navbar-collapse">
            <div class="navbar-nav fw-bold text-white">
              <a href="/" class="nav-link">Home</a>
              <a href="/" class="nav-link">Categorias</a> 
              <a href="/" class="nav-link">Cadastrar</a>
            </div>
          </div>
          <div class="container text-center">
          <div class="row align-self-center">
            <div class="col-md-8">
              <input class="form-control form-control-lg"
                  type="text" role= "search"
                  placeholder="Busque aqui">
            </div>
          </div>
        </div>
          <a href="#" class="btn btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
              <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
              <path d="M17 17h-11v-14h-2"></path>
              <path d="M6 5l14 1l-1 7h-13"></path>
            </svg>
          </a>
        </div>
      </nav>
      
      @yield('content')

    <footer>
      <p>Events &copy; 2023</p>
    </footer>
      <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>