<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'bd_minhas_despesas');//Nome do Database: cadastro no MySQL
    // self::connect();
    // echo "Conectadooooooooooo";

    $conn = new mysqli(HOST,USER,PASS,BASE);
?>