<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Validation Form</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

    <!-- Navbar -->
    <nav class=" col-12 -main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="listeProduit" class="nav-link">Liste des produits</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="addProd" class="nav-link">Ajouter un produit</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">

                <div class="row" style="color: white">
                   <?php
                        echo "<p>".$_SESSION['nom']."</p>";
                   ?>
                </div>
                <a class="btn btn-primary"  href="index" role="button">
                   Déconnexion
                </a>
            </li>
        </ul>
    </nav>

</body>
</html>