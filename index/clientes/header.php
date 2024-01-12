<?php
include "conexao.php";
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
    <strong class="logo"><img src="img/logo1.png" style="height: 70px; width: 70px;"></strong>

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
</body>
</html>