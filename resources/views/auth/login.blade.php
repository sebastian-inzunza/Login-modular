<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Login</title>
</head>
<!-- <body>
    <form action="/login" method="post">
    @csrf
        username/email
        <input type="text" name="name">
        password
        <input type="password" name="password">

        <input type="submit" value="enviar">
        

    </form>
</body> -->
 
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action ="/login" method="post">
                    @csrf
                    <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="name" class="form-control form-control-lg" />
                            <label class="form-label fw-bold" for="form1Example13">Correo electronico o username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password"class="form-control form-control-lg" />
                            <label class="form-label fw-bold" for="form1Example23">Contraseña</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <a href="#!">Olvidaste tu contraseña?</a>
                            <a href="#!">No tienes cuenta?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-secondary btn-lg btn-block">Entrar</button>

                        

                    </form>
                </div>
            </div>
        </div>
    </section>
</html>