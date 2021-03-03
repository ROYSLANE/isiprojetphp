<?php
    require_once 'db.php';


    function login($email,$pwd){
        $sql="SELECT * FROM USER WHERE email='$email' AND password = '$pwd'";
        global $db;
        return $db->query($sql)->fetch();
    }

    function findUserbyID($id){
        $sql="SELECT * FROM USER WHERE email='$id'";
        global $db;
        return $db->query($sql)->fetch();
    }
?>
