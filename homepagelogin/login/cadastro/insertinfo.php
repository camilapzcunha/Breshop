<?php
include "conexao.php";
session_start();
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8'); 
$idusuario = $_POST['idusuario'];
$_SESSION['idusuario']=$idusuario;
$coddec = $_POST['coddec'];
$nome=$_POST['txtnome'];
$nomebre=$_POST['txtnomebre'];
$biografia=$_POST['biografia'];
$cpf=$_POST['txtcpf'];
$nmr=$_POST['txtnumero'];
$target_dir = "C:\wamp64\www\oficial\img\perf/";
$target_file = $target_dir . basename($_FILES["arq"]["name"]);
$nomearq = htmlspecialchars( basename( $_FILES["arq"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$comandocli = "INSERT INTO `clientes` (`idcliente`, `idusuario`, `nome_cliente`, `cpf_cliente`, `fone_cliente`, `dta_cadastro_cliente`, `foto_perfil`, `foto_header`, `biografia`) VALUES 
(NULL, '$idusuario', '$nome', '$cpf', '$nmr', '2023-09-28', '$nomearq', 'fotoheader', '$biografia'); ";

$comandobre = "INSERT INTO `brechos` (`idbrecho`, `idusuario`, `nome_brecho`, `fone_vendedor`, `nome_vendedor`, `cpf_vendedor`, `dta_cadastro_vendedor`, `foto_perfil`, 
`foto_header`, `biografia`) VALUES (NULL, '$idusuario', '$nomebre', '$nmr', '$nome', '$cpf', '2023-09-28', '$nomearq', 'fotoheader', '$biografia');";

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
      mysqli_query($con,$comandobre);
      echo "O ARQUIVO ".$nomearq. " ENVIO OK.";
  
    } else {
      echo "ERRO DE ENVIO.";
    }
  };


$cep = $_POST['txtcep'];
$rua = $_POST['txtrua'];
$nmro = $_POST['txtnumeroend'];
$bairro = $_POST['txtbairro'];
$cid = $_POST['txtcid'];
$uf = $_POST['txtuf'];
$comandoend = "INSERT INTO `endereco_usuario` (`idendereco`, `idusuario`, `rua_endereco`, 
`num_endereco`, `comp_endereco`, `bairro_endereco`, `cidade_endereco`, `uf_endereco`, `cep_endereco`)
 VALUES (NULL, '$idusuario', '$rua', '$nmro', '', '$bairro', '$cid', '$uf', '$cep')";

  if($coddec==='cli'){
    $txtnomebre=0;
    $insere1= mysqli_query($con,$comandocli);
    $insereend = mysqli_query($con,$comandoend);
    if($insere1 && $insereend){
        $_SESSION['idusuario']=$idusuario;
        header('Location:http://localhost/oficial/index/clientes/index.php');
    };
  }

elseif($coddec==='bre'){
    $insere2= mysqli_query($con,$comandobre);
    $insereend = mysqli_query($con,$comandoend);
    if($insere2 && $insereend){
        $_SESSION['idsuario']=$idusuario;
        header('Location:http://localhost/oficial/index/brechos/indexbre.php');
    };
  }

  else{
    echo"deu ruim";
  }


?>