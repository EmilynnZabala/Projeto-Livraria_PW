<?php

    $servidor = "Localhost";
    $usuario = "loja_virtual";
    $senha = "12345678";
    $banco = "db_loja_virtual";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);


?>