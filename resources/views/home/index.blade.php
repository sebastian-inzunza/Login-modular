<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <p>Hola</p>
<!-- Para la condicion se usa dole signo  valor1 ?? valor2 -->
    @auth
    <p>Bienvenido {{auth()->user()->name}} a la pagina</p>
    <p><a href="/logout">logout</a></p>
    @endauth

    @guest
    <p>Para ver el copntenido inicia sesion <a href="/login">login</a></p>
    @endguest


</body>
</html>