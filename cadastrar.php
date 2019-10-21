<?php 
	require_once 'classes/funcionarios.php';
	$fcnarios = new Funcionario() ;

?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro de Funcionário</title>
	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body>

	<div class="container d-flex justify-content-around" style="height: 100%">

		<div class="row align-self-center col-12">

			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">

				<h2 class="text-center"><i class="fa fa-paper-plane text-primary"></i> CodeHub</h2>
				<h4 class="text-center mt-4">Cadastramento de funcionário</h4>
				<form method="POST" class="border bg-light" style="padding: 20px">
					<div class="form-row mt-3">
						<div class="form-group col-8">
							<input class="form-control" type="text" name="nome" placeholder="Nome Completo">	
						</div>
						<div class="form-group col-4">			
							<input class="form-control" type="text" name="telefone" placeholder="Telefone DDD" maxlength="11">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-6">
							<input class="form-control" type="text" name="rg" placeholder="RG" maxlength="9">
							<small class="form-text text-muted my-0">&nbsp;RG sem o dígito, sem pontos e traços.</small>
						</div>
						<div class="form-group col-6">
							<input class="form-control" type="text" name="cpf" placeholder="CPF" maxlength="11">
							<small class="form-text text-muted my-0">&nbsp;Não insira pontos nem traços.</small>	
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-12">
							<input class="form-control" type="email" name="email" placeholder="Email" maxlength="50">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-6">
							<input class="form-control" type="password" name="senha" placeholder="Criar senha" maxlength="8">
						</div>
						<div class="form-group col-6">
							<input class="form-control" type="password" name="confsenha" placeholder="Confirme sua senha" maxlength="8">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-12">
							<small class="form-text text-muted text-center">Você aceita o <a href="#">Contrato do Usuário</a>, a <a href="#">Política de Privacidade</a> e a <a href="#">Política de Cookies</a> do CodeHub.</small>
						</div>
					</div>


					<?php 

						if(isset($_POST['nome']))
						{ 
							$nome = addslashes($_POST['nome']);
							$telefone = addslashes($_POST['telefone']);
							$rg = addslashes($_POST['rg']);
							$cpf = addslashes($_POST['cpf']);
							$email = addslashes($_POST['email']);
							$senha = addslashes($_POST['senha']);
							$confirmarSenha = addslashes($_POST['confsenha']); 
							//verificar se os campos estão preenchidos 
							if(!empty($nome) && !empty($telefone) && !empty($rg) && !empty($cpf) && !empty($email) && !empty($senha) && !empty($confirmarSenha) )
							{  
									$checkExists = $fcnarios->checkExists($email); //adicionando parametro email na function checkExists
									//verificando resultado da consulta, se email ja existe
									if($checkExists){
										echo '<div class="form-row">
												<div class="form-group col-12">
													<div class="alert alert-danger" role="alert">
												 		Este email já está cadastrado.
													</div>
												</div>
											</div>';
									} else{
											//verificando se a senha ta confirmada 
											if($senha == $confirmarSenha) {
												//criptografando a senha
												$senha = md5($senha);
												$add = $fcnarios->add($nome,$telefone,$rg,$cpf,$email,$senha); //adicionando
												//verificando se adicionou 
													if($add){
														echo '<div class="alert alert-success" role="alert">
																  Cadastrado com sucesso!
															  </div>';
													}else{
														echo '<div class="alert alert-danger" role="alert">
																  Cadastrado com sucesso!
															  </div>';
													}
											}else if ($checkExists == false){
												echo '<div class="alert alert-danger" role="alert">
														  Confirmação de senha não confere.
													 </div>';
											}
										
										}	
							}	
						}
						
					?>
					<input class="btn btn-primary" type="submit" value="CADASTRAR">
					<a class="btn btn-danger" href="login.php" role="button">Sair</a>

				</form>

			</div>

		</div>

	</div>

</body>
</html>