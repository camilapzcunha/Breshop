<?php
include "conexao.php";
session_start();
$login=$_SESSION['idusuario'];
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8'); 
$comandoprod="SELECT * FROM produtos LIMIT 6";
$resulta = mysqli_query($con,$comandoprod);
$nome = mysqli_query($con,"select * from clientes where idusuario='$login'");
while ($n = mysqli_fetch_array($nome)){
$nomeusu = $n[2];
  $_SESSION['nomedousuario'] = $nomeusu;
};



?>  

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage Breshop</title>
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Glide js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.css">
    
        <!-- CSS customizado -->
        <link rel="stylesheet" href="css/styles.css" >
    
        <!--Bootstrap-->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Karla:wght@300&family=Nunito&display=swap"  rel="stylesheet">
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<header>
  <!-- Rede de contato -->
  <div class="header-content-top">
  <div class="content">
  <span><i class="fas fa-phone-square-alt"></i> (00)0000-0000</span>
  <span><i class="fas fa-envelope-square"></i>breshop@tccinfonet.com</span>
  </div>
  </div>

  <div class="container">
    <!-- logo -->
    <strong class="logo"><img src="http://localhost/oficial/img/logo1.png" style="height: 70px; width: 70px;"></strong>

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
    <!-- Barra de navegação -->
    <ul class="nav-content-list">
    <li class="nav-content-item account-login">
    <label class="open-menu-login-account" for="open-menu-login-account">

    <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

    <i class="fas fa-user-circle"></i><span class="login-text">Olá, <?php echo $nomeusu;?> 
    <strong>Informações de Perfil</strong></span> <span class="item-arrow"></span>

    <!-- submenu -->
    <ul class="login-list">
    <li class="login-list-item"><a href="meuperfil.php">Minha conta</a></li>
    <li class="login-list-item"><a href="homepagelogin/homepage.html">Sair</a></li>
    </label>
    </ul>
    </li>

    <li class="nav-content-item"><a class="nav-content-link" href="favoritos.php"><i class="fas fa-heart"></i></a></li>
    <li class="nav-content-item"><a class="nav-content-link" href="vercarrinho.php"><i class="fas fa-shopping-cart"></i></a></li>
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
      
          <li class="all-category-list-item"><a href="pags/feminino.php" class="all-category-list-link">Moda Feminina<i class="fas fa-angle-right"></i></a>
            <div class="category-second-list">
              <ul class="category-second-list-ul">
                <li class="category-second-item"><a href="pags/feminino.php">Camisetas/regatas</a></li>
                <li class="category-second-item"><a href=>Vestidos</a></li>
                <li class="category-second-item"><a href=>Saias e Shorts </a></li>
                <li class="category-second-item"><a href=>Calçados </a></li>
                <li class="category-second-item"><a href=>Acessórios</a></li>
                <li class="category-second-item"><a href=>Bolsas </a></li>
              </ul>

              <div class="img-product-menu"><img src=""></div>
              </div>
          </li>
          <li class="all-category-list-item"><a href="pags/masculino.php" class="all-category-list-link">Moda Masculina <i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="pags/kids.php" class="all-category-list-link">Moda Infantil<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="pags/acess.php" class="all-category-list-link">Acessórios no Geral<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="pags/calcados.php" class="all-category-list-link">Calçados no Geral<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="pags/brinquedos.php" class="all-category-list-link">Brinquedos<i class="fas fa-angle-right"></i></a></li>

        </ul>

      </label>

    </nav>
    <nav class="featured-category">
      <ul class="nav-row">
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Novidades</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Em promoção!</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Nunca utilizados</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Marcas famosas</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Brinquedos</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Brechós parceiros</a></li>
      </ul>
    </nav>
  </div>
  </header>

  <div id="resultado">
  <?php
   /* $x = isset($_POST['txtnome']) ? $_POST['txtnome'] : false;
 // if (isset($x)&$x!="")
{
     
include "pesquisar.php";
}
*/
?>

  <!-- SLIDER -->
  <br><br>
  <div class="hero">
  <div class="glide" id="glide_1">
  <div class="glide__track" data-glide-el="track">
  <ul class="glide__slides">
  <li class="glide__slide">
  <div class="center">
  <div class="left">
  <span class="">Novas Inpirações 2024</span>
  <h1 class="">BRECHÓS NOVINHOS</h1>
  <p>Veja as carinhas novas que estão arrasando na parada!</p>
  <a href="#" class="hero-btn">NOVIDADES</a>
  </div>
  
  <div class="right">
  <img class="img1" src="img/x.png" alt="">
  </div>
  </div>
  </li>

  <li class="glide__slide">
   <div class="center">
   <div class="left">
   <span>Saiba um pouco sobre a equipe Breshop!</span>
   <h1>NAVEGUE POR NOSSOS POSTS</h1>
   <p>Conheça nossa causa e seus benefícios!</p>
   <a href="sobrenos.html" class="hero-btn"> SOBRE NÓS </a>
   </div>
   <div class="right">
   <img class="img2" src="img/x1.png" alt="">
   </div>
   </div>
   </li>
   </ul>
   </div>
   </div>
   </div> 
 

<!-- Vitrine -->
<div class="products">
<h2 style="text-align: center;">Veja nossos produtos!</h2>
<?php
echo "<table class='vitrine-prods'>";
echo "<tr>";
$cont=0;
while ($registro = mysqli_fetch_array($resulta))
{$cont++;

if ($cont>3)
{ echo "</tr>";
echo "<tr>";
$cont=1;
}

echo "<td>";
echo "<form name=fox action=detalheprod.php  method=POST>"; 
echo "<input name=codx id=codx  type=hidden value=$registro[0]>";
echo "<div class='row'>";
echo "<div class='col-4'>";
echo "<button type=submit style='all:unset; cursor:pointer; outline:revert;'>";
echo "<img src= http://localhost/oficial/img/$registro[9] style='width:300px; height:300px'> <br>";
echo "</button> <br>";
echo "<p> R$"; print($registro[5]); echo"</p>";
echo "</div>";  
echo "</div>";
echo "</form>";}
?>
</table>
</div>

 <!-- Contato -->
<section class="section contact">
<div class="row">
<div class="col">
<h2> Precisa de suporte? Envie sua mensagem.</h2>
<p>Fale conosco a qualquer hora, em qualquer lugar!</p>
 </div>
<div class="col"> 
<form action="phpcontato.php" method="post">
<input type="text" placeholder="Insira seu nome" name="nomeID"> <br><br>
<input type="email" placeholder="Endereço de E-mail" name="emailID"> <br><br>
<input type="text-box" placeholder="Escreva sua mensagem" name="msg"> <br><br>
<input type="submit" class="btn btn-1" value="Contate-nos!">
</div>
</form>
</div>
</div>
</section>


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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="java.js"></script>

</body>
<script src="https://apis.google.com/js/platform.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>