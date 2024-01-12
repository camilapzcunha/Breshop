<?php
include "conexao.php";
session_start(); 

if (isset($_POST['email_usuario']) && isset($_POST['senha_usuario'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

$email_usuario = validate($_POST['email_usuario']);
$senha_usuario = validate($_POST['senha_usuario']);

	if (empty($email_usuario)) {
        header("Location: log.php?error=E-mail é obrigatório");
        exit();
    }else if(empty($senha_usuario)){
        header("Location: log.php?error=Senha é obrigatória");
	    exit();
    }

    else{
    $sql = "SELECT * FROM usuarios WHERE email_usuario='$email_usuario' AND senha_usuario='$senha_usuario'";
	$resultado = mysqli_query($con, $sql);

    if(mysqli_num_rows($resultado) === 1){
    $linha = mysqli_fetch_assoc($resultado);

    if($linha['email_usuario']=== $email_usuario && $linha['senha_usuario'] === $senha_usuario) {

    $_SESSION['email_usuario'] = $linha['email_usuario'];
    $_SESSION['idusuario'] = $linha['idusuario'];
    header("Location: verificar.php?id=".$_SESSION['idusuario']);

    exit(); }}

    else{
    header("Location: log.php?error=E-mail ou Senha estão incorretos");
        exit();
    }}}

    else{
        header("Location: log.php");
        exit();
} 


?>