<!DOCTYPE html>
<html lang="pt-Br">
<head>

	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>E-Start</title>
	
	<link rel="stylesheet" href="../CSS/style.css">

	<link rel="stylesheet" href="bower_components/AdminLTE/bootstrap/css/bootstrap.css">    


  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  	<link rel="stylesheet" href="bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

</head>

<body class="fundobg">
	


<!--Inicio do Container-->
<div class="container-fluid">

	<div class="row">
	<!--Inicio do menu-->
		<nav class="navbar navbar-static-top fundo-barra">

	      <div class="container ">

	        <div class="col-md-2 ">            
	              
	              <img id="logo" src="../Imagens/Start.jpg" width="70" class="img-responsive img-rounded" alt="Responsive image">
	              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
	                <i class="fa fa-bars"></i>
	              </button>
	           
	        </div>


	        <div class="col-md-5 col-md-push-7 collapse navbar-collapse pull-left" id="navbar-collapse">
				    
				<ul class="posicao-menu" >
	                                    
	                <!--<li><a href="cadastro.php"><button type="button"  class="btn btn-warning  btn-lg">Cadastre-se</button></a>
	                </li>-->
	                <li class="active" data-toggle="modal" data-target="#myModalCad"><a href="#"><button type="button"  class="btn btn-warning  btn-lg">Cadastre-se</button></a>
	                </li>

	                <li class="active" data-toggle="modal" data-target="#myModal"><a href="#"><button type="button"  class="btn btn-warning  btn-lg">Login</button></a>
	                </li>


	                  
	            </ul>

	        </div>

	      </div>

	    </nav>

	</div>
	<!--Fim do menu-->

	<!--Inicio Conteudo-->
	<div class="row">

		<!--Inicio da modal Login-->
		<div class="modal  " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

          	<div class="modal-dialog fundo-transparente" >

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="glyphicon glyphicon-user" > Login </i>
              </div>

              <div class="container-fluid">
                
	            <!-- Inicio do Login-->
	            <div  class="col-sm-6 col-md-10 col-md-push-1 " >

	                <div >
	                  <p class="fonte-centro">Faça login para começar sua sessão</p>

	                  <form action="#" method="post">

	                    <div class="form-group has-feedback">
	                      <input type="email" class="form-control" placeholder="Email">
	                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	                    </div>

	                    <div class="form-group has-feedback">
	                      <input type="password" class="form-control" placeholder="Senha">
	                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	                    </div>
	                    <div class="row">
	                      

		                    <div class="col-xs-8">
		                        <div class="checkbox icheck">
		                          <label>
		                            <input type="checkbox"> Lembrar-me
		                          </label>
		                        </div>
		                    </div>

		                    <div class="col-xs-4">
		                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
		                    </div>
	                      
	                    </div>

	                  </form>

	                  <a href="#" class="cor-branca">Esqueci minha senha</a><br>
	                  
	                </div>

	              </div>

	            </div><!--Fim do Login-->  
              
              </div>     

            </div>

                     
        </div><!--Fim da modal Login -->


		<!--Inicio da modal Cadastro-->
		<div class="modal  " id="myModalCad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

          	<div class="modal-dialog fundo-transparente" >

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class=" glyphicon glyphicon-pencil" > Cadastro </i>
              </div>

              <div class="container-fluid">
                
	            <!-- Inicio do Cadastro-->
	            <div  class="col-sm-6 col-md-10 col-md-push-1 " >

	                <div >
	                  <p class="fonte-centro">Efetue seu cadastro para começar a utilizar o serviço</p>

	                  <form action="#" method="post">
	                    
						<div class="form-group has-feedback">
					        <input type="text" class="form-control" placeholder="Nome">
					        <span class="glyphicon glyphicon-user form-control-feedback"></span>
					      </div>
					    
					      <div class="form-group has-feedback">
					        <input type="email" class="form-control" placeholder="E-mail">
					        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					      </div>

					      <div class="form-group has-feedback">
					        <input type="number" class="form-control" placeholder="Matrícula">
					        <span class="glyphicon glyphicon-user form-control-feedback"></span>
					      </div>   

					      <div class="form-group has-feedback">
					        <input type="text" class="form-control" placeholder="Curso">
					        <span class="glyphicon glyphicon-user form-control-feedback"></span>
					      </div> 

					      <div class="form-group has-feedback">
					        <input type="password" class="form-control" placeholder="Senha">
					        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
					    </div>

	                    <div class="row">

	                      <div class="col-xs-4 col-xs-push-4">
	                        
							<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModalTermo">
					            Cadastrar
					        </button>

	                      </div>
	                      
	                    </div>
	                  </form>

	                  
	                </div>

	              </div>

	            </div><!--Fim do Cadastro-->  
              
              </div>     

            </div>

                     
        </div><!--Fim da modal Cadastro -->


        <!-- Inicio da modal Termos de Uso -->
        <div class="modal fade" id="myModalTermo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Termos de Uso</h4>
                </div>
                <div class="modal-body">
                  
                <p>O que é Lorem Ipsum?

                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
                Porque nós o usamos?

                É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).

                De onde ele vem?

                Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Recusar</button>
                  <button type="button" class="btn btn-primary">Aceitar</button>
                </div>
              </div>
            </div>
        </div><!--Fim dos Termos de uso-->


    </div><!--Fim do Conteudo-->

</div><!--Fim do container-->

<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="bower_components/AdminLTE/dist/js/demo.js"></script>

</body>
</html>