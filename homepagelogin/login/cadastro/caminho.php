<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definição de perfil</title>
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

<section class="decision">
<div class="main">
    
<h2> Seja bem-vindo(a) à família Breshop!</h2>
<h4>É um prazer ter você conosco.</h4>
<p>Estamos extremamente felizes por você ter escolhido fazer parte da nossa comunidade de moda consciente. Aqui, você não está apenas entrando em uma plataforma de compras, mas sim em um movimento global que acredita no poder da sustentabilidade, na redução do desperdício e no cuidado com o nosso planeta.
</p>
<br><br>
   

<form action="dec.php" method="post">
<input type="hidden" name="codusu" value="<?php $_SESSION['idusuario']?>

<div class="main-container">
<h2>Por qual caminho você deseja seguir?</h2>
    <h3>Escolha apenas uma opção. Mas não se preocupe, você pode criar uma conta para cada objetivo!</h3>
  <div class="radio-buttons">
    <label class="custom-radio">
      <input type="radio" name="radio" name="check" value="cli" checked>
      <span class="radio-btn"><i class="las la-check"></i>
        <div class="hobbies-icon">
          <img src="https://image.freepik.com/free-vector/woman-buying-clothes_94753-703.jpg">
          <h3 class="">Cliente</h3>
        </div>
      </span>
    </label>
    <label class="custom-radio">
      <input type="radio" name="radio" value="bre">
      <span class="radio-btn"><i class="las la-check"></i>
        <div class="hobbies-icon">
                       <img src="https://cdni.iconscout.com/illustration/premium/thumb/man-shopping-during-sale-8710309-7018035.png">
          <h3 class="">Vendedor</h3>
        </div>
      </span>
</label>
  </div>
  
</div>
<input type="submit" value="Prosseguir" style="color:darkgreen; background-color:white; border:none; font-family: 'Karla', sans-serif; font-size: 20px; cursor: pointer;">
</form>

</div>
</section>


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

</body>
</html>