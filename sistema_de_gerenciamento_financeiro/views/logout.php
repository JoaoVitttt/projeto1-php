<?php 
    session_start();
    unset($_SESSION["nome"]);
    session_destroy();
    // header("<script>location.href='index.php';</script>");
    header("location: index.php");
    exit;
?>