<?php
session_start();
$codx = $_POST['codx'];
$_SESSION['codx']=$codx;
$loginy = $_SESSION['nomedousuario'];
include "conexao.php";
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8');

//DADOS DO PRODUTO
$comandoprod="SELECT * FROM produtos where idproduto=$codx";
$resulta = mysqli_query($con,$comandoprod);
$registro = mysqli_fetch_array($resulta);

//INNER JOIN CATEGORIA
$comandocategoria="SELECT C.desc_categoria as Categoria 
FROM produtos P INNER JOIN categoria C ON P.idcategoria = C.idcategoria where idproduto = $codx";
$categoria=mysqli_query($con,$comandocategoria);
$cat=mysqli_fetch_array($categoria);

//INNER JOIN BRECHÓS
$comandobre="SELECT C.nome_brecho from produtos P INNER JOIN brechos C ON P.idbrecho = C.idbrecho where idproduto=$codx";
$brecho=mysqli_query($con,$comandobre);
$bre=mysqli_fetch_array($brecho);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ver mais</title>
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Glide js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.css">
    
        <!-- CSS customizado -->
        <link rel="stylesheet" href="css/styles.css" >
    
    
    </head>
    <body>
    
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Karla:wght@400&family=Nunito&display=swap"  rel="stylesheet">
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
    <button class="button-search"><i class="fas fa-search"></i></button>
    <input type="text" placeholder="O que você procura?" class="input-search"/>
    </div>
    </label>

    <nav class="nav-content">
    <!-- Barra de navegação -->
    <ul class="nav-content-list">
    <li class="nav-content-item account-login">
    <label class="open-menu-login-account" for="open-menu-login-account">

    <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

    <i class="fas fa-user-circle"></i><span class="login-text">Olá, <?php echo $loginy ?> 
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
          <li class="all-category-list-item"><a href="feminino.php" class="all-category-list-link">Moda Feminina<i class="fas fa-angle-right"></i></a>
            <div class="category-second-list">
              <ul class="category-second-list-ul">
                <li class="category-second-item"><a href="feminino.php">Camisetas/regatas</a></li>
                <li class="category-second-item"><a href=>Vestidos</a></li>
                <li class="category-second-item"><a href=>Saias e Shorts </a></li>
                <li class="category-second-item"><a href=>Calçados </a></li>
                <li class="category-second-item"><a href=>Acessórios</a></li>
                <li class="category-second-item"><a href=>Bolsas </a></li>
              </ul>

              <div class="img-product-menu"><img src=""></div>
              </div>
          </li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Moda Masculina <i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Moda Infantil<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Acessórios no Geral<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Calçados no Geral<i class="fas fa-angle-right"></i></a></li>
          <li class="all-category-list-item"><a href="" class="all-category-list-link">Brinquedos<i class="fas fa-angle-right"></i></a></li>

        </ul>
      </label>

    </nav>
    <nav class="featured-category">
      <ul class="nav-row">
      <li class="nav-row-list"><a href="http://localhost/oficial/index/clientes/index.php" class="nav-row-list-link">Página inicial</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Em promoção!</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Nunca utilizados</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Marcas famosas</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Brinquedos</a></li>
        <li class="nav-row-list"><a href="" class="nav-row-list-link">Brechós parceiros</a></li>
      </ul>
    </nav>
  </div>
  </header>
<!-- Detalhes do produto -->
<section class="section product-detail">
    <div class="details container">
    <div class="left image-container">
    <div class="main">
    <img src="http://localhost/oficial/img/<?php echo "$registro[9]";?>" id="zoom">
    </div>
    </div>

    <div class="product-detail">
    <form action="adicionarcarrinho.php" method="post">
    <div class="right">
    <h2><?php echo "$cat[0]";?></h2>
    <?php echo "<p align=center> <input name=txtcod2 id=codx  type=hidden value=$codx></p>";?>
    <?php echo "<h1>"; echo"$registro[3]"; echo "</h1>";?>
    <a href="#"><?php echo"$registro[1]";?></a> <br><br>
    <div class="price"><?php echo"<input name=valor id=valor type=hidden value=$registro[5]> R$ $registro[5]"; ?></div>
    <?php echo "<input name=brecho id=brecho type=hidden value=$registro[2]>";?> <br>
    <input type="submit" class="addCart" value="Adicionar ao Carrinho">
    </form>
    </div>

    <h3>Descrição do produto</h3>
    <p><?php print($registro[4]);?></p>

    <h3>Detalhes e contato do vendedor:</h3>
    <form action="pagbre.php" method="post">
    <?php echo "<input name=brecho id=brecho type=hidden value=$registro[2]>";?> 
    <p><?php echo "$bre[0]";?></p>
    <input type="submit" value="Ver página do brechó" class="addCart">
    </div>
    </form>
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

    
    </body>
    <script src="./js/index.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js"
          integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
          crossorigin="anonymous"></script>

  <script src="js/zoomsl.min.js"></script>
  <script>
  $(function () {
  console.log("hello");
  $("#zoom").imagezoomsl({
  zoomrange: [4, 4],
  });
  });
  </script>
    </html>