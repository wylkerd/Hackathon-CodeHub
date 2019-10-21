<!doctype html>
<html lang="pt-br">
  <head>
  	<title>PROJETO HACKATHON</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="style/css/style.css">
    
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

  </head>
  <body>
    

    <nav id="inicio" class="navbar navbar-expand-lg navbar-light bg-light">
		
		<a class="navbar-brand h1 mb-0" href="#">HACKATHON</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSite">
		
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a href="javascript: links('inicio,1000');" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="javascript: links('aplicacao,1000');" class="nav-link">Aplicação</a></li>
        <li class="nav-item"><a href="javascript: links('intuito,1000');" class="nav-link">Intuito</a></li>
        <li class="nav-item"><a href="javascript: links('contato,1000');" class="nav-link">Contato</a></li>
			</ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Social</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Facebook</a>
            <a href="#" class="dropdown-item">Twitter</a>
            <a href="#" class="dropdown-item">Instagram</a>
          </div>

        </li>
      </ul>

      <form action="" class="form-inline ">
        <a href="login.php" class="btn btn-dark ml-4" type="submit" target="_blank">CENTRAL DO FUNCIONÁRIO</a>
      </form>



		</div>

	</nav>



  <div id="carouselSite" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner"> 

        <div class="carousel-item active"> 
            
            <img src="imgs/slide-01.jpg" class="img-fluid" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="">CodeHub</h1>
              <p class="lead">Grupo criado em prol do evento Hackathon, tendo acontecimento na Unip Santos.</p>
            </div>

        </div>


        <div class="carousel-item"> 
            
            <img src="imgs/slide-02.jpg" class="img-fluid" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="">RFID</h1>
              <p class="lead">Conceito de aplicação Desktop para ser apresentado.</p>
            </div>

        </div>


        <div class="carousel-item"> 
            
            <img src="imgs/slide-03.jpg" class="img-fluid" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="">CodeHub</h1>
              <p class="lead">Grupo criado em prol do evento Hackathon, tendo acontecimento na Unip Santos.</p>
            </div>

        </div>


    </div>

    <a href="#carouselSite" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"> </span>
      <span class="sr-only">Anterior</span>
    </a>

    <a href="#carouselSite" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon"> </span>
      <span class="sr-only">Posterior</span>
    </a>

  </div>


  <div class="container">

      <div class="row" id="aplicacao">

          <div class="col-12 text-center my-5">
            
            <h1>CodeHub</h1>
            <p>Interface Web onde o usuário poderá trafegar antes de realizar autenticação.</p>

          </div>

      </div>

    <div class="row mb-5">
      
      <div class="col-sm-6 col-md-4 mb-4">
        
        <nav id="navbarVertical" class="navbar navbar-light bg-light">
          
          <nav class="nav nav-pills flex-column">
            
            <a href="#item1" class="nav-link">Proposta</a>
         
            <a href="#item2" class="nav-link my-2">Características</a>

            <nav class="nav nav-pills flex-column">
              <a href="#item2-1" class="nav-link ml-4 ">Funcionamento</a>
            </nav>

            <a href="#item3" class="nav-link my-2">RFID</a>
          
            <a href="#item4" class="nav-link my-2">Sobre</a>
          
          </nav>

        </nav>

      </div>

      <div class="col-sm-6 col-md-8">
        
        <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">

          <h4 id="item1">Proposta</h4>
          <p>Desenvolver uma aplicação híbrida que permite vincular informações sobre os containers de maneira remota através de um sistema web desenvolvido em php vinculado a um banco de dados.</p>

          <h4 id="item2">Características</h4>
          <p>A aplicação web fornece ao usuário uma familiarização com o ambiente portuário, contando com informações simples desde alguns textos relacionados as notícias do porto até a parte mais importante que é a autenticação para acesso ao CRUD do sistema. As informações são explicativas e abordam a usabilidade do software.</p>

          <h5 id="item2-1">Funcionamento</h5>
          <p> O software foi criado com intuito de tornar mais ágil o processo de registro dos containers, utilizando uma tecnologia já existente para complementar o nosso desenvolvimento, se chama RFID. </p>
          
          <h5 id="item3">RFID</h5>
          <p>A etiqueta RFID possue um código de série específico que facilita a leitura, alteração e gravação de dados. Um usuário autorizado poderia consultar, criar, deletar e atualizar os dados contidos em cada etiqueta RFID, facilitando a relação funcionário e banco de dados. </p>

          <h4 id="item4">Sobre</h4>
          <p>um sistema de autenticação, que torna o acesso aos dados mais seguros e ágeis, e podendo alterá-los caso necessário.</p>

        </div>

      </div>

    </div>

    <div class="row mb-5">
      
      <div class="col-sm-6 col-md-4 mb-3">
        
        <div class="card">
            <img src="imgs/Proposta.jpg" height="200" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Proposta</h4>
              <p class="card-text">Desenvolver uma aplicação híbrida que permite vincular informações sobre os containers de maneira remota através de um sistema web desenvolvido em php vinculado a um banco de dados.</p>
            </div>
                       
            <div class="card-body">
              <a href="#" class="card-link">Acessar</a>
              <a href="#" class="card-link">Saiba Mais</a>
            </div>

        </div>

      </div>

      <div class="col-sm-12 col-md-4">
        
        <div class="card">
            <img src="imgs/RFID001.jpg" height="200" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">RFID</h4>
              <p class="card-text">A etiqueta RFID possue um código de série específico que facilita a leitura, alteração e gravação de dados. Um usuário autorizado poderia consultar, criar, deletar e atualizar os dados contidos em cada etiqueta RFID, facilitando a relação funcionário e banco de dados.</p>
            </div>
      
            <div class="card-body">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Acessar</a>
              <a href="#" class="card-link">Saiba Mais</a>
            </div>

        </div>
        
      </div>

      <div class="col-sm-6 col-md-4 mb-3">
        
        <div class="card">
            <img src="imgs/item-01.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Características</h4>
              <p class="card-text">A aplicação web fornece ao usuário uma familiarização com o ambiente portuário, contando com informações simples desde alguns textos relacionados as notícias do porto até a parte mais importante que é a autenticação para acesso ao CRUD do sistema. As informações são explicativas e abordam a usabilidade do software.</p>
            </div>

            <div class="card-body">
              <a href="#" class="card-link">Acessar</a>
              <a href="#" class="card-link">Saiba Mais</a>
            </div>

        </div>

      </div>

    </div>

  </div>

  <div class="jumbotron jumbotron-fluid">

    <div class="container">
    
      <div id="intuito" class="row">
    
        <div class="col-12 text-center">
            
          <h1 class="display-4">Intuito</h1>
          <p class="lead">Desenvolver uma aplicação aonde terá mais segurança e acessibilidade ao funcionário em relação ao controle de container dentro do Pátio.</p>
          <hr>

        </div>
    
      </div>
    
      <div class="row">
        
        <div class="col-12">
          
          <ul class="nav nav-pills justify-content-center" id="pills-nav" role="tablist">
            
            <li class="nav-item">
              <a href="#nav-item-01" class="nav-link active" id="nav-pills-01" data-toggle="pill">Hackathon</a>
            </li>

            <li class="nav-item">
              <a href="#nav-item-02" class="nav-link" id="nav-pills-02" data-toggle="pill">Hackathon</a>
            </li>

          </ul>

          <div class="tab-content my-4" id="nav-pills-content">

            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel"> 

              <div class="row"> 

                <div class="col-sm-6">  

                    <p>LCL é uma sigla em inglês – Less Container Load – que significa carga menor que o contêiner. Essa modalidade é adequada para exportadores que possuem carga abaixo do indicado para preencher um contêiner inteiro.
                    O serviço possibilita que mais de um importador embarque suas cargas dentro de um mesmo contêiner. Nesta operação, assim que o navio é descarregado, as cargas são desovadas e armazenadas até serem desembaraçadas e encaminhadas ao destino final.</p>

                </div>
                <div class="col-sm-6">      

                    <p>A localização de nossas unidades faz toda a diferença neste processo. Em Santos, estamos estrategicamente posicionados nos armazéns 22 e 23, perto do terminal de passageiros, na região central do porto, uma área nobre, estratégica e de grande movimentação. A empresa oferece armazéns alfandegados e verticalizados para garantir a segurança das cargas dos clientes e para manter agilidade no tempo de carregamento, posicionamento e desova dos produtos.</p>

                </div>

              </div>

            </div>

            <div class="tab-pane fade" id="nav-item-02" role="tabpanel"> 

              <div class="row"> 

                <div class="col-sm-6">  

                   <p>Paragrafo conorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Paragrafo conorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Paragrafo conorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Paragrafo conorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                </div>
                <div class="col-sm-6">      

                    <p>Paragrafo conorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Paragrafo conorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
  
  </div>


  <div class="container">
    
    <div class="row" id="contato">
      
      <div class="col-12 text-center my-4">
        
        <h2><i class="fa fa-paper-plane text-primary"></i> - Nos envie um email com sua pergunta</h2>

      </div>

    </div>

    <div class="row justify-content-center mb-5">
      
      <div class="col-sm-12 col-md-10 col-lg-8">
        
        <form action="">
            
          <div class="form-row">
              
              <div class="form-group col-sm-6">
                
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome">

              </div>
              
              <div class="form-group col-sm-6">
                
                <label for="inputSobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">

              </div>

          </div>

          <div class="form-row">
            
              <div class="form-group col-sm-12">
                
                <label for="inputEnd">Endereço</label>
                <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">

              </div>

          </div>

          <div class="form-row">

              <div class="form-group col-sm-6">
                
                <label for="inputCidade">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" placeholder="Cidade">

              </div>

              <div class="form-group col-sm-4">
                
                <label for="inputEstado">UF</label>
                <select class="form-control" id="inputEstado">
                  <option selected>Selecione um Estado</option>
                  <option value="1">AC</option>
                  <option value="2">AL</option>
                  <option value="3">AM</option>
                  <option value="4">BA</option>
                  <option value="5">CE</option>
                  <option value="6">DF</option>
                  <option value="7">ES</option>
                  <option value="8">GO</option>
                  <option value="9">MA</option>
                  <option value="10">MG</option>
                  <option value="11">MS</option>
                  <option value="12">MT</option>
                  <option value="13">PA</option>
                  <option value="14">PB</option>
                  <option value="15">PE</option>
                  <option value="16">PI</option>
                  <option value="17">PR</option>
                  <option value="18">RJ</option>
                  <option value="19">RN</option>
                  <option value="20">RO</option>
                  <option value="21">RR</option>
                  <option value="22">RS</option>
                  <option value="23">SC</option>
                  <option value="24">SE</option>
                  <option value="25">SP</option>
                  <option value="26">TO</option>
                </select>

              </div>

              <div class="form-group col-sm-2">
                
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP">

              </div>

          </div>

          <div class="form-row">
            
            <div class="form-group col-sm-12">
              
              <div class="form-check">
                  
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Desejo receber informações por e-mail.
                  </label>

              </div>

            </div>

          </div>

          <div class="form-row">
            
            <div class="form-group">
              
              <button class="btn btn-primary" type="submit">Enviar</button>
              <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Texto de Ajuda" data-content="Texto em si da ajuda já">Ajuda</a>

            </div>

          </div>

        </form>

      </div>

    </div>

    <hr><div class="row">
      
      <div class="col-12 mb-3"><br></div>
      <div class="col-sm-4">
          
          <h3>Curso</h3>
          <p>Ciência da computação é a ciência que estuda as técnicas, metodologias e instrumentos computacionais, que automatiza processos e desenvolve soluções baseadas no uso do processamento de dados. Não se restringe apenas ao estudo dos algoritmos, suas aplicações e implementação na forma de software, extrapolando para todo e qualquer conhecimento pautado no computador.</p>

      </div>

      <div class="col-sm-4">
        
        <h3>Menu</h3>
        <div class="list-group text-center">
            <a href="#inicio" class="list-group-item list-group-item-action">Inicio</a>
            <a href="#aplicacao" class="list-group-item list-group-item-action">Aplicação</a>
            <a href="#intuito" class="list-group-item list-group-item-action">Intuito</a>
            <a href="#contato" class="list-group-item list-group-item-action">Contato</a>
        </div>

      </div>

      <div class="col-sm-4 my-4">
        
        <h3>Social</h3>
        <div class="btn-group-vertical btn-block btn-group-lg" role="group">
          <a href="" class="btn btn-outline-primary mb-2"><i class="fa fa-facebook-square text-primary"></i> Facebook</a>
          <a href="" class="btn btn-outline-danger"><i class="fa fa-instagram"></i> Instagram</a>
        </div>

      </div>

      <div class="col-12 mt-5">
        
        <blockquote class="blockquote text-center">
          <p class="mb-0">Prefiro perder a guerra e ganhar a paz</p>
          <footer class="blockquote-footer">Bob Marley</footer>
        </blockquote>

      </div>

    </div>

  </div>

  
  <!-- modal -->
  <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
    
    <div class="modal-dialog modal-lg" role="document">
    
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title">Consectetur Adipiscing</h5>  
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>        
        </div>

        <div class="modal-body">
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
        </div>

      </div>

    </div>

  </div>
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_,modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="classes/scripts.js"></script>

    <script>
      $(function () {

        $('[data-toggle="popover"]').popover()

      })
    </script>
  </body>
</html>
