<?php
require 'db.php';
session_start();

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
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- Logo -->
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img class="img-size" src="./images/4865683.png">

                        </a>
                        <div class="d-flex">
                            <div class="p-3 bd-highlight">
                                <a class="username" href="">Bienvenid@, <?php echo $_SESSION['name']; ?></a>
                            </div>

                            <div class="admin-logo"><a href="admin-panel.php" class="admin-logo">Usuario</a></div>

                            <div class="p-2 bd-highlight">
                                <a href="./logout.php" type="submit" class="btn btn-danger btn-logout">Out</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center title">
                <div class="title-home-user">Aplicacion para propositos</div>
            </div>
        </div>
    </div>

    <div class="container-fluid propositos-main">
        <div class="row">
            <div class="col-sm-6">
                <div class="d-flex justify-content-center"><a href="" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><img class="img-proposito" src="./icons/proposito2.svg"
                            alt=""></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-center text-color">
                    <?php
                    $sql = "SELECT * FROM proposito";
                    $resultado = mysqli_query($conn, $sql);
                    $numPropositos = mysqli_num_rows($resultado);
                    $numero = 0;

                    ?>
                    <ul>
                        <?php
                        while ($numPropositos = mysqli_fetch_array($resultado)) {
                            echo "<li>" . $numPropositos['name_proposito'] . "</li>";
                            $numero++;
                        }
                        ?>
                    </ul>
                    <?php
                    ?>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade modal-dialog" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="add-proposito.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar proposito</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label" for="proposito_name">Nombre de proposito</label>
                            <input class="form-control" type="text" name="proposito_name" id="">
                            <label class="form-label" for="description_proposito">Descripcion del proposito</label>
                            <input class="form-control" type="text" name="description_proposito">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>

</html>