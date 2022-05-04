<?php
require '../model/modelo_post.php';
$ruta = "";
$MR = new Modelo_post();

$titulo = htmlspecialchars($_POST['titulo'], ENT_QUOTES, 'UTF-8');
$descripcion = htmlspecialchars($_POST['descripcion'], ENT_QUOTES, 'UTF-8');
$lugar = htmlspecialchars($_POST['lugar'], ENT_QUOTES, 'UTF-8');
$imguno = htmlspecialchars($_POST['imguno'], ENT_QUOTES, 'UTF-8');


$consulta = $MR->Registrar_post($titulo, $descripcion, $lugar, $imguno);
echo $consulta;
