<?php


    $host = '127.0.0.1';
    $mysqluser = 'root';
    $mysqlpassword = '';
    $dbname = 'suivistock';

    $dsn = "mysql:host=".$host.";dbname=".$dbname;

    // dns = data source name
    // permet de specifier la base a selectionner

    try{
        $db = new PDO($dsn,  $mysqluser, $mysqlpassword);
    }catch (\Throwable $th){
        throw $th;
    }

?>