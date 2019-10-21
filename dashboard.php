<?php 
	require_once 'classes/containerFunctions.php';
	$Container = new ContainerFunctions() ;
?>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Projeto Login</title>
	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body>

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h1>Cadastro do Container</h1>
				<form method="POST">
					<div class="form-row">
						<div class="form-group col-12">
							<input class="form-control" type="text" name="id_container" placeholder="Elementos da Identificação" maxlength="11" >
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-6">
							<input class="form-control" type="text" name="dimensoes" placeholder ="Caracteres das Dimensões" maxlength="4">
						</div>
						<div class="form-group col-6">
							<input class="form-control" type="text" name="paisOrigem" placeholder ="Sigla do País de Origem" maxlength="3">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-6">
							<input class="form-control" type="text" name="paisAprovaçao" placeholder ="País de Aprovação" maxlength="17">	
						</div>
						<div class="form-group col-6">
							<input class="form-control" type="date" name="dataFabricaçao" placeholder="Data de Fabricação">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-6">
							<input class="form-control" type="text" name="idFabricante" placeholder="Identificação fabricante/administração" maxlength="20">
						</div>
						<div class="form-group col-6">
							<input class="form-control" type="number" name="maxPeso" placeholder="Peso Bruto operacional máximo (kg)" maxlength="15">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-6">
							<input class="form-control" type="number" name="maxPesoEmp" placeholder="Peso de empilhamento para 1,8g" maxlength="15">
						</div>
						<div class="form-group col-6">
							<input class="form-control" type="number" name="valorTesteRigidez" placeholder="Valor teste de rigidez transversal (Kg)" maxlength="8">
						</div>
					</div>

					<input class="btn btn-primary" type="submit" value="Cadastrar Container">
					
				</form>

			</div>

		</div>

	

		<?php 
		print_r($_POST);

			if(isset($_POST['id_container']))
			{ 
				$id_container = addslashes($_POST['id_container']);
				$dimensoes = addslashes($_POST['dimensoes']);
				$paisOrigem = addslashes($_POST['paisOrigem']);
				$paisAprovaçao = addslashes($_POST['paisAprovaçao']);
				$dataFabricaçao = addslashes($_POST['dataFabricaçao']);
				$idFabricante = addslashes($_POST['idFabricante']);
				$maxPeso = addslashes($_POST['maxPeso']);
				$maxPesoEmp = addslashes($_POST['maxPesoEmp']);
				$valorTesteRigidez = addslashes($_POST['valorTesteRigidez']);

	/*
			echo $id_container;
			echo $dimensoes;
			echo $paisOrigem;
			echo $paisAprovaçao;
			echo $dataFabricaçao;
			echo $idFabricante;
			echo $maxPeso;
			echo $maxPesoEmp;
			echo $valorTesteRigidez;
	*/
				if ( !empty($id_container) && !empty($dimensoes) && !empty($paisOrigem) && !empty($paisAprovaçao) && !empty($dataFabricaçao) && !empty($idFabricante) && !empty($maxPeso) && !empty($maxPesoEmp) && !empty($valorTesteRigidez)) {
					$checkExists = $Container->checkExistsContainer($id_container); 
					echo $checkExists;
					if ($checkExists) {
					 		$add = $Container->addContainer($id_container,$dimensoes,$paisOrigem,$paisAprovaçao,$dataFabricaçao,$idFabricante,$maxPeso,$maxPesoEmp,
					 			$valorTesteRigidez); //adicionando
					 		echo $add;
					 	if ($add == true) {
					 	  	echo "Cadastrado com sucesso!";
					 	  }else{
					 	  	echo "Erro ao cadastrar";
					 	  }
					 } else {
		 				 	echo "Container já cadastrado no banco de dados!";
		 				 } 
				} else {
					echo "Preencha os campos corretamente";
				}
			}


		?>
		<a class="btn btn-danger" href="index.php" role="button">Sair</a>

	</div>

</body>
</html>