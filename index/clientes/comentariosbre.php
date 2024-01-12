<?php
include "conexao.php";
session_start();
$nomeusu = $_SESSION['nomedousuario'];
$bre = $_SESSION['brecho'];
$idusu=$_SESSION['idusuario'];
mysqli_query($con,"SET NAMES 'utf8'");  
mysqli_query($con,'SET character_set_connection=utf8');  
mysqli_query($con,'SET character_set_client=utf8');  
mysqli_query($con,'SET character_set_results=utf8'); 
//COMANDO DE INFORMAÇÕES
$comandobre = mysqli_query($con,"select * from brechos where idbrecho = '$bre'");
$p = mysqli_fetch_array($comandobre);
$comandoend = mysqli_query($con,"select * from endereco_usuario where idusuario = '$p[1]'");
$e = mysqli_fetch_array($comandoend);
$coments=mysqli_query($con,"select * from comentarios_brechos where idbrecho = '$p[0]'");

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


<br><br>


<div id="content" class="container p-0">
    <div class="profile-header">
        <div class="profile-header-cover"></div>
        <div class="profile-header-content">
            <div class="profile-header-img">
            <img src="http://localhost/oficial/img/perf/<?php echo $p[7]; ?>">
            </div>
            <div class="profile-header-info">
                <h4 class="m-t-sm"> <?php echo $p[2]; ?> </h4>
                <p class="m-b-sm">Brechó certificado BRESHOP!</p>
            </div>
     
        </div>

                  <ul class="profile-header-tab nav nav-tabs">
                     <li class="nav-item"><a href="comentariosbre.php" target="__blank" class="nav-link_ active show">COMENTÁRIOS</a></li>
                     <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/bs4-profile-about" target="__blank" class="nav-link_">SOBRE</a></li>
                     <li class="nav-item"><a href="pagbre.php" target="__blank" class="nav-link_   ">PRODUTOS PUBLICADOS</a></li>
                  </ul>
    </div>

    <div class="profile-container">
        <div class="row row-space-20">
            <div class="col-md-8">
                <div class="tab-content p-0">
                    
                    <div class="tab-pane active show" id="profile-photos">
                        <div class="m-b-10"><b>Principais comentários</b></div>
                    

                        <form action="inserircoment.php" method="post">
                        <input type="hidden" value="<?php $idusu?>" name="idusuario">
                        <div class="form__group">
                        <input type="text" class="form__input" name="txtcomentario" placeholder="Inserir comentário" required="" style="
                        background-color: whitesmoke; width:50rem; height:5rem; border-color:gray;  " />
                        <label for="name" class="form__label">Inserir comentário!</label>
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-xs btn-primary mb-4">
                        </form>
                        <br><br>    
                        <?php 
                    $cont=0;
                    while ($c = mysqli_fetch_array($coments))
                    {

                        $uc = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM clientes where idusuario = $c[2]"));

                        echo "
                        <figure class='snip1533'>
                        <figcaption>
                        <blockquote>
                        <p>$c[3]</p>
                        </blockquote>
                        <h3>$uc[2]</h3>
                        <h4>Cliente Breshop</h4>
                        </figcaption>
                        </figure>";
                         

                        }
                        
                        ?> 


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

