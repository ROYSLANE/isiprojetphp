<?php

session_start();
require_once '../Model/UserDB.php';
require_once '../Model/ProduitDB.php';
require_once '../Entities/User.php';
require_once '../Entities/Produit.php';

if(isset($_POST['valider'])){
    extract($_POST);

    $user = new User();

    $result = findUserbyID($_SESSION['id']);


    $user->setId($result[0]);
    $user->setNom($result[1]);
    $user->setPrenom($result[2]);
    $user->setEmail($result[3]);
    $user->setPassword($result[4]);
    $user->setEtat($result[5]);

    var_dump($user);
    if(addProduit($user->getId(),$_POST['nom'],$_POST['ref'],$_POST['qte'])!=0){
        header('location:listeProduit');
    }else{
        echo "erreur d'ajout";
    }
}
?>