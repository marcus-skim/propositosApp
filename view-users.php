<?php
include 'db.php';
session_start();

if ($_SESSION['rol'] > 0) {
    header('location: home-user.php');
}


if (isset($_SESSION['name'])) {
} elseif (!isset($_SESION['name'])) {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/view-users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Panel administrador</title>

</head>

<body">


    <div class="container-fluid navbar-admin">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo-img">
                    <img class="img-size" src="./images/4865683.png" alt="">
                </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-end">
                <div class="logout-btn">
                    <a class="btn btn-danger" href="./logout.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container message">
        <div style="padding: 10px;" class="row">
            <div class="col-sm-11 text-title">
                Bienvenido de nuevo
            </div>
            <div class="btn-rol col-sm-1 d-flex justify-content-center">
                Admin
            </div>
        </div>
    </div>

    <div class="container table-users text-center">
        <div class="col-sm-12">
            <div class="table-title">
                <div>Datos de usuarios registrados.</div>
            </div>
            <div class="user-num">
                <div>Total de usuarios:</div>
            </div>


            <div class="table-users-content text-center">
                <table class="table text-center table-font">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo electronico</th>
                            <th>Permisos</th>
                        </tr>
                    </thead>
                    <tr>

                    </tr>
                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    </body>

</html>