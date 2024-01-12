<?php
include "conexao.php";
session_start();
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8'); 
$idusuario = $_SESSION['idusuario'];
$comentario = $_POST['txtcomentario'];
$bre = $_SESSION['brecho'];
$inserir="INSERT INTO `comentarios_brechos` (`idcoment`, `idbrecho`, `idcliente`, `mensagem`) VALUES (NULL, '$bre', '$idusuario', '$comentario')";

if ($comentario){
    mysqli_query($con,$inserir);
    header('Location:http://localhost/oficial/index/clientes/comentariosbre.php');
}



?>