<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "" ;
    $banco = "db_ead2";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>