<HEAD><meta charset="UTF-8">
<h2>Compre e venda no precinho, ajude o planeta!</h2>
<link rel="stylesheet" href="css/stylelogin.css">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Karla:wght@400&family=Nunito&display=swap"  rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</HEAD>


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="cadastro.php" method="post">
			<h1>Crie uma conta:</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<?php if (isset($_GET['error1'])) { ?>
     		<p class="error" style="color: red;"><?php echo $_GET['error1']; ?></p>
     	<?php } ?>

			<span>Ou use seu email para registrar</span>
			<input type="email" name="email_usuario" placeholder="Insira um endereço de e-mail válido" />
			<input type="password" name="senha_usuario" placeholder="Crie uma senha" />
			<input type="password" name="cf_senha" placeholder="Repita sua senha" />
			<button type="submit" style="cursor:pointer">Cadastre-me!</button>
		</form>
	</div>
	<div class="form-container sign-in-container">




		<form action="logar.php" method="post">
			<h1>Entre em sua conta existente:</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="color: red;"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		
		 <?php if (isset($_GET['success'])) { ?>
               <p class="success" style="color: red;"><?php echo $_GET['success']; ?></p>
          <?php } ?>

			<span>Ou use sua conta</span>
			<input type="email" name="email_usuario" placeholder="Insira seu e-mail" />
			<input type="password" name="senha_usuario" placeholder="Insira sua senha" />
			<a href="#">Esqueceu sua senha?</a>
			<button type="submit" style="cursor:pointer">Entrar</button>
		</form>
	</div>

	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem vindo de volta!</h1>
				<p>Para manter-se conectado, entre com suas informações pessoais</p>
				<button class="ghost" id="signIn" style="cursor:pointer">Entrar</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Faça parte do nosso clube!</h1>
				<p>Insira suas informações e comece sua jornada conosco</p>
				<button class="ghost" id="signUp" style="cursor:pointer">Cadastrar</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		
	</p>
</footer>

<script> 
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});</script>