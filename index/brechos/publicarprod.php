
<?php
include "conexao.php";
session_start();
$idusu=$_SESSION['idusuario'];
$idbrecho = $_SESSION['idbrecho'];
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8'); 
$comandobre = mysqli_query($con,"select * from brechos where idusuario = '$idusu'");
$p = mysqli_fetch_array($comandobre);
$prods=mysqli_query($con,"select * from produtos where idbrecho = '$p[1]'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Brechó</title>
    <link rel="stylesheet" href="css/indexbre.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Karla:wght@300&family=Nunito&display=swap"  rel="stylesheet">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    
    </head> 
   
<body style="font-family: 'Karla', sans-serif;">

<header>
  <!-- Rede de contato -->
  <div class="header2-content-top">
  <div class="content">
  <span><i class="fas fa-phone-square-alt"></i> (00)0000-0000</span>
  <span><i class="fas fa-envelope-square"></i>breshop@tccinfonet.com</span>
  </div>
  </div>

  <div class="container-header">
    <!-- logo -->
    <strong class="logo"><img src="http://localhost/oficial/img/logo1.png" style="height: 70px; width: 70px;"></strong>
    <h2 class="logo">Vendas</h2>
 <!--Barra de Busca -->
 <label class="open-search" for="open-search">
    <i class="fas fa-search"></i>
    <input class="input-open-search" id="open-search" type="checkbox" name="menu" />
    <div class="search">
    <form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="txtnome" placeholder="O que você procura?" class="input-search"/>
    <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
    </div>
    </form>
    </label>


    <nav class="nav-content">
    <ul class="nav-content-list">
    <li class="nav-content-item account-login">
    <label class="open-menu-login-account" for="open-menu-login-account">

    <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

    <i class="fas fa-user-circle"></i><span class="login-text">Olá, <?php echo $p[2];?> 
    <strong>Informações de Perfil</strong></span> <span class="item-arrow"></span>

    <!-- submenu -->
    <ul class="login-list">
    <li class="login-list-item"><a href="meuperfil.php">Minha conta</a></li>
    <li class="login-list-item"><a href="homepagelogin/homepage.html">Sair</a></li>
    </label>
    </ul>
    </li>
    </ul>
    </nav>
    </div>

      <!-- nav navigation commerce -->
  <div class="nav-container">
    <nav class="all-category-nav">
      <label class="open-menu-all" for="open-menu-all">
        <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open" />
        <span class="all-navigator"><i class="fas fa-bars"></i> <span>Todas as categorias</span> <i class="fas fa-angle-down"></i>
          <i class="fas fa-angle-up"></i>
        </span>

        <ul class="all-category-list">
          <li class="all-category-list-item"><a href="feminino.php" class="all-category-list-link">Moda Feminina<i class="fas fa-angle-right"></i></a>
            <div class="category-second-list">
              <ul class="category-second-list-ul">
                <li class="category-second-item""><a href="feminino.php">Camisetas/regatas</a></li>
                <li class="category-second-item"><a href="">Vestidos</a></li>
                <li class="category-second-item"><a href="">Saias e Shorts </a></li>
                <li class="category-second-item"><a href="">Calçados </a></li>
                <li class="category-second-item"><a href="">Acessórios</a></li>
                <li class="category-second-item"><a href="">Bolsas </a></li>
              </ul>

              <div class="img-product-menu"><img src=""></div>
              </div>
          </li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Vendedores parceiros <i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Moda Infantil<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Acessórios no Geral<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Calçados no Geral<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Brinquedos<i class="fas fa-angle-right"></i></a></li>

        </ul>
      </label>

    </nav>
    <nav class="featured-category">
      <ul class="nav-row">
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Contribua!    </a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Dúvidas de venda</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Impulsionar publicações</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Posts Interessantes</a></li>
      </ul>
    </nav>
  </div>
  </header>


<br><br>
<div class="product-insert" style="margin-left: 50px;" >
<h3> Oba! Vamos publicar um produto?</h3>

<h5>Se é sua primeira vez publicando, <a style="color:#4b793f" href="">clique aqui</a> para receber suporte.</h5>

<form action="publiprod.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php $idbrecho ?>" name="idbrecho">
<h6 class="name-product"> Qual o nome do seu produto? <br><input type="text" name="nomeprod"></h6>

<div class="category-product">
<h6>A qual categoria ele se assemelha melhor?</h6> 
<select name="cat" id="">
    <option value="0">Selecione uma opção </option>
    <option value="1">Feminino</option>
    <option value="2">Masculino</option>
    <option value="3">Infantil</option>
    <option value="4">Acessórios</option>
</select>
</div>
<br>

<div class="description-product" >
<h6>Descreva seu produto em algumas palavras:</h6>
<textarea name="descprod"></textarea>
</div>
<br>

<div class="value-product">
<h6>Qual será seu valor?</h6>
<p style="font-size:small">Dúvidas para escolher um valor justo? <a style="color:#4b793f" href="">Clique aqui.</a></p>
<input type="text" name="value">
</div>

<br>

<div class="insert-pic">
<h6>Por fim, adicione uma foto!</h6>
<input type="file" name="arq" id="arq">
<input type="submit" name="" id="">
</div>

 </form>
 </div>
<br><br><br><br>
 <!-- Rodapé -->
<footer>

<div>
     <span class="logo">Breshop</span>
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
             <input type="email" id="subscriber-email" placeholder="Insira seu endereço de e-mail"/>
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

    
</body>
</html>
