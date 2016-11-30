<?php 
session_start();

if(!$_SESSION['idProfessor']){
  // echo "não entre";

header("HTTP/1.1 301 Moved Permanently");

header("location:  ../../../Public/login.php");

} else {


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Principal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="estart/css/style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">


</head>

<body class="hold-transition skin-blue-light sidebar-mini">

<div class="wrapper"><!--Conteudo-->



  <header class="main-header">
  
    <!-- Logo -->
    <a href="Professorprincipal.php" class="logo">
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
              <img src="../../../Imagens/Start.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador</span>
            </a>

            <!-- Inicio do dropdown usuario -->
            <ul class="dropdown-menu">
              <!-- Inicio da imagem do usuario -->
              <li class="user-header">
                <img src="../../../Imagens/Start.jpg" class="img-circle" alt="User Image">
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
      
      <div id="menu">
      <!--Inicio do menu de navegação-->
      <ul class="sidebar-menu">
        <li class="header">MENU NAVEGAÇÃO</li>

        <li class="treeview"><!--Inicio da aba ALUNO-->
          <a href="#">
            <i class="fa fa-user"></i> <span>ALUNO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a onclick="carregar('../pages/Acompanhar.php')" href="#"><i class="fa fa-eye"></i>Acompanhar</a></li>
            <li><a onclick="carregar('../busca/BuscaProf.php')" href="#"><i class="fa fa-search"></i>Buscar</a></li>
            

          </ul>
        </li><!--Fim da aba ALUNO-->

        <li class="treeview"><!--Inicio da aba PROFESSOR-->
          <a href="#">
            <i class="fa fa-user"></i> <span>PROFESSOR</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a onclick="carregar('../pages/notificacaoProf.php')" href="#"><i class="fa fa-bell"></i>Notificações</a></li>
            <li><a onclick="carregar('../busca/BuscaAluno.php')" href="#"><i class="fa fa-search"></i>Buscar</a></li>
            

          </ul>
        </li><!--Fim da aba PROFESSOR-->

        <li class="treeview"><!--Inicio da aba TCC-->
          <a href="#">
            <i class="fa fa-graduation-cap"></i> <span>TCC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a onclick="carregar('../cadastro/cadastrotcc.php')" href="#"><i class="fa fa-floppy-o"></i>Cadastrar</a></li>
            <li><a onclick="carregar('../busca/BuscaTCC.php')" href="#"><i class="fa fa-search"></i>Buscar</a></li>
            

          </ul>
        </li><!--Fim da aba TCC-->

        <li class="treeview"><!--Inicio da aba Eventos-->
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Eventos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a onclick="carregar('../pages/reservasdesalas.php')" href="#"><i class="fa fa-search"></i>Reserva de Sala</a></li>
            <li><a onclick="carregar('../cadastro/cadastroeventos.php')" href="#"><i class="fa fa-search"></i>Cadastrar Eventos</a></li>
            <li><a onclick="carregar('../busca/BuscaEventos.php')" href="#"><i class="fa fa-search"></i>Buscar</a></li>
            

          </ul>
        </li><!--Fim da aba Eventos-->

        <li class="treeview"><!--Inicio da aba Defesa de TCC-->
          <a href="#">
            <i class="fa fa-shield"></i> <span>Defesa de TCC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a onclick="carregar('../cadastro/cadastrodefesatccaluno.php')" href="#"><i class="fa fa-search"></i>Cadastrar Aluno</a></li>
            <li><a onclick="carregar('../cadastro/cadastrodefesatccprofessor.php')" href="#"><i class="fa fa-search"></i>Cadastrar Professor</a></li>
            <li><a onclick="carregar('../busca/BuscaDefTCC.php')" href="#"><i class="fa fa-search"></i>Buscar</a></li>
            

          </ul>
        </li><!--Fim da aba Defesa de TCC-->

        <li class="treeview"><!--Inicio da aba Relatórios de TCC-->
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Relatórios de TCC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a onclick="carregar('/../cadastro/cadastroRelTCC.php')" href="#"><i class="fa fa-floppy-o"></i>Cadastrar</a>
            <li><a onclick="carregar('../busca/BuscaRelatTCC.php')" href="#"><i class="fa fa-search"></i>Buscar</a></li>
            
          </ul>
        </li><!--Fim da aba Repositório de TCCs-->


        
                        
      </ul><!--Fim do menu de navegação-->

      </div>

    </section>

  </aside><!-- Fim da coluna do lado esquerdo -->

  
  <div class="content-wrapper"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
           
      <div id="conteudo">
        
        <!-- CONTEUDO DA PAGINA PRINCIPAL -->

      </div>


    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->




<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/plugins/jQueryUI/jquery-ui.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>

<script>
    function carregar(pagina){

        $("#conteudo").load(pagina);
        
    }
</script>


</body>
</html>

<?php 
}
?>