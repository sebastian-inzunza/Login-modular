
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Bienvenida</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0 mt-4">Bienvenido al registro de recolectadora de plastico.</h3>
    </div>
    <div>
        <img src="{{ asset('img/imagen.png') }}" alt="" width= "300px">
    </div>
  </header>

  <main>
    <div class="mb-85">
        <h1>¿Ya estas registrado?</h1>        
    </div>
    

        <div class="row">
            <div class="col">
                <a href="/login" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Iniciar sesion</a>
            </div>
            <div class="col">
                <a href="/register" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Registrarse</a>
            </div>
        </div>
 
    </main>
   
</div>

  </body>
</html>