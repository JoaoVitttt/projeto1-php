<?php
    //include_once("/dao/manipuladados.php");
    include_once("../dao/manipuladados.php");

    $nomejogos = $_POST["txtNome"];
    $descricao = $_POST["txtDesc"];
    $duracao = $_POST["txtDuracao"];

    
    echo "Nome: ".$nomejogos."<br/>Descrição: ".$descricao."<br/>Duração: ".$duracao;

    $manipula = new manipuladados();
    //$manipula = new manipuladados();
    $manipula->setTable("tb_personagens");
    $manipula->setFields("nome,descricao,duracao");
    $manipula->setDados("'$nomejogos','$descricao','$duracao'");
    $manipula->insert();

    echo $manipula->getStatus();
?>