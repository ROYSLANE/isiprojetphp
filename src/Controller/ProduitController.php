<?php

session_start();
require_once '../Model/UserDB.php';
require_once '../Model/ProduitDB.php';
require_once '../Entities/User.php';
require_once '../Entities/Produit.php';

if(isset($_POST['valider'])){
    extract($_POST);

    session_start();

    $user = new User();

    $result = findUserbyID($_SESSION['id']);

    $user->setId($result[0]);
    $user->setNom($result[1]);
    $user->setPrenom($result[2]);
    $user->setEmail($result[3]);
    $user->setPassword($result[4]);
    $user->setEtat($result[5]);


}
?>