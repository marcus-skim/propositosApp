<?php
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
    <link rel="stylesheet" href="./css/admin-panel.css">
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




    <!-- Consulta para sacar el total de usuarios registrados -->
    <?php
    include 'db.php';
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);

    ?>



    <div class="container-fluid dashboard text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="box">
                    <div class="icon">
                        <img class="icon-image" src="./icons/grid.svg" alt="">
                    </div>
                    <div class="info">
                        <a class="info-title" href="./view-users.php">Ver usuarios.</a>
                        <div class="info-subtitle">Total registrados</div>
                        <?php
                        if ($row > 0) { ?>
                        <div class="data-circle">
                            <div class="data-php text-center"><?php echo $row ?></div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="box2">
                    <div class="icon d-flex align-self-center">
                        <img class="icon-image" src="./icons/user-plus.svg" alt="">
                    </div>
                    <div class="info d-flex align-self-center">
                        <a class="info-title" href="./register-admin.php">Añadir usuario administrador</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="box3">
                    <div class="icon">
                        <img class="icon-image" src="./icons/users3.svg" alt="">
                    </div>
                    <div class="info ">
                        <div class="info-title ">Funcion 3</div>

                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="box4">
                    <div class="icon">
                        <img class="icon-image" src="./icons/users4.svg" alt="">
                    </div>
                    <div class="info">
                        <div class="info-title">Funcion 4</div>

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