<?php
session_start();
include "conexao.php";
if (isset($_POST['email_usuario']) && isset($_POST['senha_usuario'])
 && isset($_POST['cf_senha'])) {

	function validate($data){
    $data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}

    $email_usuario = validate($_POST['email_usuario']);
	$senha_usuario = validate($_POST['senha_usuario']);
	$cf_senha = validate($_POST['cf_senha']);
    $user_data = 'email_usuario='. $email_usuario;

	if (empty($email_usuario)) {
		header("Location: log.php?error1=Preencha o campo de e-mail&$user_data");
	    exit();

	}else if(empty($senha_usuario)){
        header("Location: log.php?error1=Preencha o campo senha&$user_data");
	    exit();
	}
	else if(empty($cf_senha)){
        header("Location: log.php?error1= Confirme sua senha&$user_data");
	    exit();
	}

	else if($senha_usuario !== $cf_senha){
        header("Location: log.php?error1= As senhas não correspondem&$user_data");
	    exit();
	}

	else{

		// hashing the password
        //$senha_usuario = md5($senha_usuario);
	    $sql = "SELECT * FROM usuarios WHERE email_usuario='$email_usuario'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: log.php?error=O e-mail já está cadastrado. Efetue Login!&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO usuarios (email_usuario, senha_usuario) VALUES('$email_usuario', '$senha_usuario')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	header("Location: cadastro/caminho.php");
			 $linha = mysqli_fetch_assoc(mysqli_query($con, "select * from usuarios where email_usuario = '$email_usuario'"));
			 $_SESSION['email_usuario']= $linha['email_usuario'];
			 $_SESSION['idusuario']= $linha['idusuario'];
	         exit();
           }else {
	           	header("Location: log.php?error=Ocorreu um erro!&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}



?>