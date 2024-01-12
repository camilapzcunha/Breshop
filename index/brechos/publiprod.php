<?php
include "conexao.php";
session_start();
$codusu=$_SESSION['idusuario'];
$nomeprod=$_POST['nomeprod'];
$cat=$_POST['cat'];
$idbrecho = $_SESSION['idbrecho'];
$desc=$_POST['descprod'];
$valor=$_POST['value'];
$target_dir = "C:\wamp64\www\oficial\img/";
$target_file = $target_dir . basename($_FILES["arq"]["name"]);
$nomearq = htmlspecialchars( basename( $_FILES["arq"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$comando = "INSERT INTO produtos(idproduto,idcategoria,idbrecho,nome_produto,
desc_produto,valor_prod,status_produto,sub_categoria,id_marca,img_prod) VALUES(NULL,'$cat','$idbrecho','$nomeprod','$desc',
'$valor','À Venda','Vestidos',1,'$nomearq')";

//::::::IMAGEM::::::

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["arq"]["tmp_name"]);
  if($check !== false) {
    echo "ARQUIVO É IMAGEM - " ;
    $uploadOk = 1;
  } else {
    echo "ARQUIVO NÃO EXISTE.";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) {
  echo "ARQUIVO EXISTE.";
  $uploadOk = 0;
}

// CHECA TAMANHO
if ($_FILES["arq"]["size"] > 500000) {
  echo "ARQUIVO MUITO GRANDE.";
  $uploadOk = 0;
}

// CERTIFICA FORMATO
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "SOMENTE JPG, JPEG, PNG & GIF .";
  $uploadOk = 0;
}

// ChECA SE TEM ERRO
if ($uploadOk == 0) {
  echo "ARQUIVO NÃO PODE SER ENVIADO.";

} else {
  if (move_uploaded_file($_FILES["arq"]["tmp_name"], $target_file)) {
    $nomearq = htmlspecialchars( basename( $_FILES["arq"]["name"]));
    echo "O ARQUIVO ".$nomearq. " ENVIO OK.";
    mysqli_query($con,$comando);
    header("Location:http://localhost/oficial/index/brechos/indexbre.php");



  } else {
    echo "ERRO DE ENVIO.";
  }
}

?>



?>