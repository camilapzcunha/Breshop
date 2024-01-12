<?php
SESSION_START();
include "conexao.php";
echo "<script> history.forward(1);</script>";
$codx=$_POST["txtcod2"];
$valor=$_POST["valor"];
$brecho=$_POST["brecho"];
$loginy=$_SESSION['nomedousuario'];
$codpedy=$_SESSION['codpedf'];
$codusuario= $_SESSION['idusuario'];

if ($codpedy==0)
{
$comando3="Insert into controle(codcliente,idbrecho,frete) values
($codusuario,$brecho,'xxx')";
$resulta3 = mysqli_query($con,$comando3);
$comando3="select  max(codpedido) as codpedidoat from controle where codcliente=$codusuario";
$resulta3 = mysqli_query($con,$comando3);
while ($registro3= mysqli_fetch_array($resulta3))
{$codpedy=$registro3[0];
}}
if ($codusuario!=0)
{

$comando= "Insert into pedido(codpedido,codcliente,codprod,preco) values ($codpedy,$codusuario,$codx,$valor)";
$resulta = mysqli_query($con,$comando);

if ($resulta!=0) {
    echo "<script> alert('inclusão ok');</script>";


$close = mysqli_close($con);
$_SESSION['codpedf']=$codpedy;

header('Location: vercarrinho.php');
}


else
  {  echo "<script> alert('erro de inclusão');</script>";}

}
else
{echo "<script> alert('Voce não esta logado');</script>";

}

?>

