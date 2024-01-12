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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completando informações de perfil</title>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
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

<br><br>
<div class="usu-conf">
<h3>Termine a configuração de seu perfil de cliente, é rápidinho!</h3>

<div class="form-usu">
<form action="insertinfo.php" method="post" enctype="multipart/form-data">
<?php echo " <input type='hidden' name='coddec' value='$coddec'>"; ?>
<?php echo " <input type='hidden' name='idusuario' value='$idusuario'>"; ?>

<div class="info-section">
<p> Qual o seu nome?</p> 
<input type="text" name="txtnome"> 

<p> Que tal uma foto de perfil?</p> 
<input type="file" name="arq" id="arq">

<p> Fale sobre você: </p>
<input type="text-box" name="biografia">

<p> Agora, seu cpf: </p> 
<input type="text" name="txtcpf">

<p> Por fim, qual seu número de telefone?</p> 
 <input type="text" name="txtnumero"> 
 </div>

</div>
</div>

<div class="adress-info">
<h3>Informações de endereço:</h3>

<p>Qual seu CEP?</p>
<input type="text" name="txtcep" onblur="getDadosEnderecoPorCEP(this.value)" placeholder="CEP"> 

<div class="add-info-end">

<input type="text" name="txtrua" class="form-control" placeholder="Rua"  id="endereco" />

<input type="text" name="txtbairro" class="form-control" placeholder="Bairro"  id="bairro" />

<input type="text" name="txtnumeroend" placeholder="Número">
		
<input type="text" name="txtcid" class="form-control" placeholder="Cidade"  id="cidade" />
			
<input type="text" name="txtuf" class="form-control" placeholder="UF"  id="uf" />

</div>
				
</div>

<input type="submit" class="perf-conf" value="Concluir"><i class="	fas fa-angle-double-right"></i>
</form>
</div>
</div>

<footer>
        <div>
             <span class="">Breshop</span>
        </div>
 
        <div class="row">
             <div class="col-3">
                 <span class="footer-cat">Solution</span>
                 <ul class="footer-cat-links">
                     <li><a href=""><span>Interprise App Development</span></a></li>
                     <li><a href=""><span>Android App Development</span></a></li>
                     <li><a href=""><span>ios App Development</span></a></li>
                 </ul>
             </div>
             <div class="col-3">
                 <span class="footer-cat">Criadoras</span>
                 <ul class="footer-cat-links">
                     <li><a href="https://www.instagram.com/camspedroza/"><span>Camila Pedroza</span></a></li>
                     <li><a href="https://www.instagram.com/llfernandesb/"><span>Laura Fernandes</span></a></li>
                     <li><a href="https://www.instagram.com/rafafranlemos/"><span>Rafaela Lemos</span></a></li>
                     <li><a href="https://www.instagram.com/bellarodguez/"><span>Isabella Rodrigues</span></a></li>
                     <li><a href="https://www.instagram.com/godoysofis/"><span>Sofia Godoy</span></a></li>
                     <li><a href="https://www.instagram.com/mariaheloizasc/"><span>Maria Heloiza Sales</span></a></li>
                 </ul>
             </div>
             <div class="col-3">
                 <span class="footer-cat">Acesso rápido</span>
                 <ul class="footer-cat-links">
                     <li><a href=""><span>Feedbacks</span></a></li>
                     <li><a href=""><span>Termos & Condições</span></a></li>
                     <li><a href=""><span>Disclaimer</span></a></li>
                 </ul>
             </div>
             <div class="col-3" id="newsletter">
                 <span class="footer-cat">Inscreva-se em nossa NewsLetter:</span>
                 <form id="subscribe">
                     <input type="email" id="subscriber-email" placeholder="Enter Email Address"/>
                     <input type="submit" value="Inscrever" id="btn-scribe"/>
                 </form>
                 
                 <div id="address">
                     <span class="footer-cat">Onde nos encontrar</span>
                     <ul>
                         <li>
                             <i class="far fa-building"></i>
                             <div>Brasil<br/>
                             Etec Lauro Gomes, São Bernardo do Campo</div>
                         </li>
                     </ul>
                 </div>
                 
             </div>
             <div class="social-links social-1 col-6">
                 <a href=""><i class="fab fa-facebook-f"></i></a>
                 <a href=""><i class="fab fa-twitter"></i></a>
                 <a href=""><i class="fab fa-linkedin-in"></i></a>
                 <a href=""><i class="fab fa-instagram"></i></a>
             </div>
        </div>
        <div id="copyright">
            &copy; Todos os direitos reservados - 2021-2023
        </div>
  
        <a href="#topHeader" id="gotop">Topo</a>
     </footer>
 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="java.js"></script>
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