<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Login</title>

</head>

<body>
    <div class="cointainer">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <div class="login-box text-center">
                    <div class="box2-login">
                        <div>
                            <img class="img-login" src="./images/4865683.png" alt="">
                        </div>
                        <div class="login-title">
                            <p>INICIO DE SESION</p>
                        </div>
                    </div>

                    <div class="form-login">
                        <form method="POST" action="login-function.php">
                            <label class="input-font" for="email">Email</label>
                            <div class="d-flex justify-content-center  ">
                                <input style="width: 80%;" type="email" class="input-form input-font" id="email"
                                    name="email" required>
                            </div>
                            <label class="input-font" for="pass">Password</label>
                            <div class="d-flex justify-content-center">
                                <input style="width: 80%;" type="password" class="input-form input-font" id="pass"
                                    name="pass" required>
                            </div>
                    </div>
                    <button type="submit" class="btn-login">Hecho</button>
                    </form>

                    <div class="register-link">
                        <p>Si no tienes una cuenta, <a href="register.php">registrate aqui!</a></p>
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