<?php
SESSION_START();
include "conexao.php";
$_SESSION['idusuario']=$_GET['id'];
$idusu=$_SESSION['idusuario'];

$dec=mysqli_query($con,"SELECT idusuario FROM `brechos` where idusuario = $idusu");
$d=mysqli_fetch_array($dec);

if ($idusu=$d[0]){
header('Location: http://localhost/oficial/index/brechos/indexbre.php');
}

elseif($idusu=!$d[0]) {
header('Location: http://localhost/oficial/index/clientes/index.php');
}

else
{echo "<script> alert('login ou senha invalida');</script>";
}

$fechar=mysqli_close($con);

?>