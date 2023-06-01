<?php

include_once("../dao/manipuladados.php");

$id = $_POST["id"];
$nomecurso = $_POST["txtNome"];
$descricao = $_POST["txtDesc"];
$duracao = $_POST["txtDuracao"];

$manipula = new manipuladados();
$manipula->setTable("tb_personagens");
$manipula->setFieldId('id');
$manipula->setFields("nome,descricao,duracao");
$manipula->setValueId("$id");
$manipula->update();

echo  $manipula->getStatus();
//$status = $manipula->getStatus();

?>