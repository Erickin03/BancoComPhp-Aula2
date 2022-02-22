<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "bancodedados";
    $dbname = "cadastro";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if($conn->connect_error){

        echo "Desconectado! Erro: " . $conn->connect_error;
    
    } else {

        echo "Conectado!";

    }