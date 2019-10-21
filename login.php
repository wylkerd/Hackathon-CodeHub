<?php
	require_once 'classes/funcionarios.php';
	$fcnarios = new Funcionario() ;
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Central do funcionário</title>
	<!-- <link rel="stylesheet" href="CSS\estilo.css"> -->
	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>

<body>

	<div class="container d-flex justify-content-around" style="height: 100%">

		<div class="row align-self-center col-12">

			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
					<h2 class="text-center"><i class="fa fa-paper-plane text-primary mb-3"></i> CodeHub</h2>
					<form method="POST" class="border bg-light" style="padding: 20px">
						<div class="form-group">
							<input type="email" class="form-control mb-2" name="email" placeholder="Usuário ou email">
							<input type="password" class="form-control" name="senha" placeholder="Senha" maxlength="8">
							<small class="form-text text-muted mb-2" id="senhaHelp">A senha deve conter ao menos 8 caracteres.</small>
							<button type="submit" class="btn btn-primary btn-block mb-1">Entrar</button>
						</div>
						<h6 class="form-text">Não tem acesso?<a href="cadastrar.php"> Cadastre-se!</a></h6>
					</form>

				<?php 

						if(isset($_POST['email'])){
							$email = addslashes($_POST['email']);
							$senha = addslashes($_POST['senha']);
							if(!empty($email) && !empty($senha)){
								$senha = md5($senha);
								$login = $fcnarios->logar($email,$senha);
								if($login){
							      header("Location: dashboard/user.php");
							    }else{
							    	echo '<div class="alert alert-danger" role="alert">
										  	Email ou senha incorreta! Digite os campos corretamente.
										</div>';
							      	}
							}
						}

				?>

			</div>

		</div>

	</div>

</body>

</html>