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
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Home admin</title>

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
                                <a class="username" href="">Welcome, <?php echo $_SESSION['name']; ?></a>
                            </div>


                            <div class="admin-logo"><a href="admin-panel.php" class="admin-logo">Administrador</a></div>



                            <div class="p-2 bd-highlight">
                                <a href="./logout.php" type="submit" class="btn btn-danger btn-logout">Out</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Pagina principal Administrador</h1>
                </div>
            </div>
        </div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

</body>

</html>