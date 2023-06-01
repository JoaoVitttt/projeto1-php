<?php

//include_once("/dao/manipuladados.php");
include_once("../dao/manipuladados.php");

$id = $_POST["id"];
$manipula = new manipuladados();
$manipula->setTable("tb_personagens");
$manipula->setFieldId('id');
$manipula->setValueId("$id");
$manipula->delete();

echo $manipula->getStatus();
//$status = $manipula->getStatus();

?>