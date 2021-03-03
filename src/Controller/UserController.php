<?php

    session_start();
    require_once '../Model/UserDB.php';
    require_once '../Entities/User.php';

    if(isset($_POST['valider'])){
        extract($_POST);

        $email=$_POST['email'];
        $password=$_POST['password'];

        $result = login($email,$password);

        if($result!=null){
            $user = new User();

            $user->setId($result['idU']);
            $user->setNom($result['nom']);
            $user->setPrenom($result['prenom']);
            $user->setPassword($result['password']);
            $user->setEtat($result['etat']);
            if($user->getEtat()==1){
                $_SESSION['nom']= $user->getNom().' - '.$user->getPrenom();
                $_SESSION['id']= $user->getId();
                header('location:accueil');
            }else{
                echo "Le compte n'est pas actif";
            }
        }else{
            header('location:index');
        }

    }
?>