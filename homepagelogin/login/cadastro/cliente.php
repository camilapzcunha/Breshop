<?php
include "conexao.php";
session_start();
$idusuario = $_SESSION['idusuario'];
$coddec = $_SESSION['dec']; 
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8'); 
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Completando informações de perfil</title>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/styleinfo.css">

</head>
<body>
<header id="topHeader">
        <ul id="topInfo">
            <li>+55 11 98765432</li>
            <li>breshop@tccinfonet.com</li>
        </ul>
        
        <nav>
            <span class="logo">BRESHOP</span>
            <div class="mainMenu">
               <span>Configurando sua conta!</span>
            </div class="mainMenu">
        </nav>
    </header>

<div class="form-usu">
<form action="insertinfo.php" method="post" enctype="multipart/form-data" id="msform">
<?php echo " <input type='hidden' name='coddec' value='$coddec'>"; ?>
<?php echo " <input type='hidden' name='idusuario' value='$idusuario'>"; ?>

  <ul id="progressbar">
    <li class="active">Informações pessoais</li>
    <li>Redes Sociais</li>
    <li>Informações de endereco</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Complete suas informações</h2>
    <h3 class="fs-subtitle">Passo 1</h3>
    <input type="text" name="txtnome" placeholder="Nome completo" />
    <input type="text" name="txtcpf" placeholder="Número de CPF" />
    <input type="text" name="txtnumero" placeholder="Número de telefone" />
    <textarea name="biografia" placeholder="Fale um pouco sobre você"></textarea>
    <input type="file" name="arq" id="arq"    >
    <input type="button" name="next" class="next action-button" value="Próximo" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Redes Sociais</h2>
    <h3 class="fs-subtitle"> Sua carinha na Internet</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="button" name="next" class="next action-button" value="Próximo" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Detalhes de endereço</h2>
    <h3 class="fs-subtitle">Nós nunca iremos vendê-los</h3>
    <input type="text" name="txtcep" onblur="getDadosEnderecoPorCEP(this.value)" placeholder="CEP"> 
    <input type="text" name="txtrua" class="form-control" placeholder="Rua"  id="endereco" />

<input type="text" name="txtbairro" class="form-control" placeholder="Bairro"  id="bairro" />

<input type="text" name="txtnumeroend" placeholder="Número">
		
<input type="text" name="txtcid" class="form-control" placeholder="Cidade"  id="cidade" />
			
<input type="text" name="txtuf" class="form-control" placeholder="UF"  id="uf" />

    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input class="submit action-button" value="Enviar" type="submit" target="_top">
  </fieldset>
</form>
<br>
<br>
<br>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>
<script>
function getDadosEnderecoPorCEP(cep) {
				let url = 'https://viacep.com.br/ws/'+cep+'/json/'

				let xmlHttp = new XMLHttpRequest()
				xmlHttp.open('GET', url)

				xmlHttp.onreadystatechange = () => {
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
						let dadosJSONText = xmlHttp.responseText
						let dadosJSONObj = JSON.parse(dadosJSONText)

						document.getElementById('endereco').value = dadosJSONObj.logradouro
						document.getElementById('bairro').value = dadosJSONObj.bairro
						document.getElementById('cidade').value = dadosJSONObj.localidade
						document.getElementById('uf').value = dadosJSONObj.uf
						
							
					}
				}

				xmlHttp.send()
			}
		</script>

</body>
</html>