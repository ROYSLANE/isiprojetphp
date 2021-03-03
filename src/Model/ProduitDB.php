<?php
require_once 'db.php';
    function getProduitbyUtilisateur($idUser){
        $sql="SELECT * FROM Produit WHERE user_id='$idUser'";
        global $db;
        return $db->query($sql)->fetchAll();
    }

    function addProduit($idUser,$nom,$ref,$qte){
        $sql = "INSERT INTO PRODUIT VALUES ($idUser,null,'$nom','$ref',$qte)";
        global $db;

        return $db->exec($sql);
    }
?>