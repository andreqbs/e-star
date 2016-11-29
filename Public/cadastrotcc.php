<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Teste</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="estart/css/style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

</head>



<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"><!--Conteudo-->



  <header class="main-header">
  
    <!-- Logo -->
    <a href="principal.php" class="logo">
      <!-- mini logo para barra lateral -->
      <span class="logo-mini"><b>E-</b>START</span>
      <!-- logotipo para dispositivos de estado e móveis regulares -->
      <span class="logo-lg"><b>E-</b>START</span>
    </a>

    <!-- Header Navbar: estilo pode ser encontrado em header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
      <!-- Inicio do Menu Superior -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          
          <!-- Inicio do Campo Usuario -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../Imagens/Start.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador</span>
            </a>

            <!-- Inicio do dropdown usuario -->
            <ul class="dropdown-menu">
              <!-- Inicio da imagem do usuario -->
              <li class="user-header">
                <img src="../Imagens/Start.jpg" class="img-circle" alt="User Image">
                <p>
                  Administrador
                </p>
              </li><!-- Fim da imagem do usuario -->


              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Editar</a>
                </div>

                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>

            </ul><!-- Fim do dropdown usuario -->

          </li><!-- Fim do Campo Usuario -->
          
          
        </ul>

      </div>
    </nav>
  </header>

  <!-- Inicio da coluna do lado esquerdo -->
  <aside class="main-sidebar">
    
    <!-- estilo da barra lateral -->
    <section class="sidebar">
  
      <!--Inicio do menu de navegação-->
      <ul class="sidebar-menu">
        <li class="header">MENU NAVEGAÇÃO</li>

        <li class="active treeview"><!--Inicio da aba cadastro-->
          <a href="#">
            <i class="fa fa-graduation-cap"></i> <span>TCC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="formulario.php"><i class="fa fa-file-o"></i>Cadastrar TCC</a></li>

          </ul>
        </li><!--Fim da aba cadastro-->
        


        

        
      </ul><!--Fim do menu de navegação-->

    </section>

  </aside><!-- Fim da coluna do lado esquerdo -->

  
  <div class="content-wrapper"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->

      <h1>
        Proposta de Trabalho  
      </h1>
      <br>
      
    </section><!-- Fim da seção -->


        <form class="form-horizontal">
        <div class="container">
          
          <div class="row"><!--Linha 01-->

            <div class="col-xs-8 form-group">
              
                <label class="col-xs-1 control-label">Curso:</label>

              <div class="col-xs-11">

                <select class="form-control select2"  data-placeholder="Selecione um curso" >
                  <option>Arquitetura e Urbanismo</option>
                  <option>Engenharia Civil</option>
                  <option>Engenharia de Computação</option>
                  <option>Engenharia de Petróleo e Gás</option>
                  <option>Sistemas de Informação</option>
                </select>

              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-xs-3 form-group">

              <label class="col-xs-4 control-label">Série:</label>

              <div class="col-xs-8">
                <input type="text" class="form-control"  placeholder="Série">
              </div>
  
            </div> 

          </div><!--Fim Linha 01-->

                
          <div class="row"> <!--Linha 02-->
                
            <div class="col-xs-8 form-group">

              <label class="col-xs-1 control-label">Aluno(a):</label>

              <div class="col-xs-11">
                <input type="text" class="form-control"  placeholder="Nome do Aluno(a)">
              </div>
  
            </div>

            <div class="col-xs-3 form-group">

              <label class="col-xs-4 control-label">Matrícula:</label>

              <div class="col-xs-8">
                <input type="text" class="form-control"  placeholder="Matrícula">
              </div>
  
            </div> 

          </div><!--Fim Linha 02-->          


          <div class="row"><!--Linha 03-->
                
            <div class="col-sm-8 form-group">

              <label class="col-sm-1 control-label">Aluno(a):</label>

              <div class="col-sm-11">
                <input type="text" class="form-control"  placeholder="Nome do Aluno(a)">
              </div>
  
            </div>

            <div class="col-sm-3 form-group">

              <label class="col-sm-4 control-label">Matrícula:</label>

              <div class="col-sm-8">
                <input type="text" class="form-control"  placeholder="Matrícula">
              </div>
  
            </div> 

          </div><!--Fim Linha 03-->


          <div class="row"><!--Linha 04-->
                
            <div class="col-xs-12 form-group">

              <label class="col-xs-1 control-label">Orientador(a):</label>

              <div class="col-xs-8">
                <input type="text" class="form-control"  placeholder="Nome do Orientador(a)">
              </div>
  
            </div>


          </div><!--Fim Linha 04-->

          <div class="row"><!--Linha 05-->

            <div class="col-xs-12 form-group">
              
                <label class="col-xs-1 ">Linha de Pesquisa:</label>

              <div class="col-xs-8">

                <select class="form-control select2" data-placeholder="Selecione" >
                  <option>Automação e Controle</option>
                  <option>Computação de Alto Desempenho</option>
                  <option>Inteligência Computacional</option>
                  <option>Metaheurística</option>
                  <option>Robótica</option>
                  <option>Sistemas Embarcados</option>
                  <option>Visão Computacional</option>
                </select>

              </div>
              <!-- /.form-group -->
            </div>
          </div><!--Fim Linha 05-->

          <div class="row"><!--Linha 06-->
                
            <div class="col-sm-12 form-group">

              <label class="col-sm-1 ">Título do Trabalho:</label>

              <div class="col-sm-8">
                <input type="text" class="form-control"  placeholder="Título do Trabalho">
              </div>
  
            </div>


          </div><!--Fim Linha 06-->

          <div class="row"><!--Linha 07-->
            
            <div class="col-xs-12 form-group">

              <label class="col-xs-1 ">Resumo da Proposta:</label>
              
              <div class="col-xs-8">
                <textarea class="form-control" rows="2" placeholder="Escreva um resumo da proposta:"></textarea>
              </div>

            </div>

          </div><!--Fim Linha 07-->


          
          <div class="row"><!--Linha 08-->
            
            <div class="col-xs-6 form-group">

              <label class="col-xs-1 ">Objetivos:</label>
              
              <div class="col-xs-12">
                <textarea class="form-control"  placeholder="Escreva os objetivos do trabalho"></textarea>
              </div>

            </div>

            <div class="col-xs-6 form-group">

              <label class="col-xs-1 ">Justificativas:</label>
              
              <div class="col-xs-12">
                <textarea class="form-control"  placeholder="Escreva as justificativas"></textarea>
              </div>

            </div>


          </div><!--Fim Linha 08-->

        
        </div>

          <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Cadastrar</button>
          </div>
        
        </form> 
    
    


    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->



<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="bower_components/AdminLTE/dist/js/app.min.js"></script>


</body>
</html>
