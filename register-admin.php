<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register-admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Register</title>

</head>

<body>
    <div class="cointainer">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <div class="register-box text-center">
                    <div class="box2-register">
                        <div>
                            <img class="img-register" src="./images/4865683.png" alt="">
                        </div>
                        <div class="register-title">
                            <p>Registro</p>
                        </div>
                    </div>

                    <div class="form-register">
                        <form method="POST" action="register-admin-function.php">
                            <label for="uname" class="input-font">Nombre</label>
                            <div class="d-flex justify-content-center">
                                <input style="width: 70%;" type="text" class="input-form input-font" id="uname"
                                    name="uname" required>
                            </div>
                            <label for="lastname" class="input-font">Apellido</label>
                            <div class="d-flex justify-content-center">
                                <input style="width: 70%;" type="text" class="input-form input-font" id="lastname"
                                    name="lastname" required>
                            </div>
                            <label for="pass" class="input-font">Correo electronico</label>
                            <div class="d-flex justify-content-center">
                                <input style="width: 70%;" type="email" class="input-form input-font" id="email"
                                    name="email" required>
                            </div>
                            <label for="pass" class="input-font">Contraseña</label>
                            <div class="d-flex justify-content-center">
                                <input style="width: 70%;" type="password" class="input-form input-font" id="pass"
                                    name="pass" required>
                            </div>
                            <label for="pass" class="input-font">Rol</label>
                            <div class="d-flex justify-content-center">
                                <input style="width: 70%;" readonly value="Administrador" type="text"
                                    class="input-form input-font text-center" placeholder="Administrador">
                            </div>
                    </div>
                    <button type="submit" class="btn-login">Hecho</button>
                    </form>
                    <div class="register-link">
                        <p>Si tienes una cuenta, <a href="login.php">Ingresa aqui!</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>

</html>