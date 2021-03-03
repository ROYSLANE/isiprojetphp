<?php
include '../../../header.php'
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
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="produitC">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" placeholder="Entre le nom du produit">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Référence</label>
                <input type="text" class="form-control" id="ref" name="ref" placeholder="Entrer la référence du produit">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Quantité</label>
                <input type="text" name="qte" class="form-control" id="qte" placeholder="Entrer la référence du produit">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="valider">Submit</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
include '../../../footer.php'
?>
