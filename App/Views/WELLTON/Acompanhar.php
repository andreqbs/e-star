<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Acompanhar</title>
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
            <li class="active"><a href="cadastrotcc.php"><i class="fa fa-file-o"></i>Cadastrar TCC</a></li>

          </ul>
        </li><!--Fim da aba cadastro-->
                

        
      </ul><!--Fim do menu de navegação-->

    </section>

  </aside><!-- Fim da coluna do lado esquerdo -->

  
  <div class="content-wrapper"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
     <div class="box"><!-- Inicio do conteudo da tabela de notificações  -->
     <div class="box-header"><!-- Inicio cabeçalho -->
      <h1 class="box-title">
        Acompanhar  
      </h1><!-- Fim do cabeçalho -->
      
      <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>

        </div><!-- Fim do cabeçalho -->
        
      <br>
      <br>


        <div class="box-body no-padding"> <!-- Inicio da tabela  -->
              <table id="Tabela1" class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                  <th>O que?</th>
                  <th>Por que?</th>
                  <th>Onde?</th>
                  <th>Quando?</th>
                  <th>Quem?</th>
                  <th>Como?</th>
                  <th>Quanto?</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>Seminário orientacional</td>
                  <td>Apresentar Normas de TCC</td>
                  <td>Sala de aula</td>
                  <td>22 a 26/fev</td>
                  <td>Equipe Start-e</td>
                  <td>Slide Start-e</td>
                  <td>2h por grupo</td>
                </tr>
                <tr>
                  <td>Submissão proposta de trabalho</td>
                  <td>Formalizar proposta</td>
                  <td>e-Labora</td>
                  <td>21 a 25/mar</td>
                  <td>Alunos (com orientador)</td>
                  <td>Formulário Start-e</td>
                  <td>5d</td>
                </tr>
                <tr>
                  <td>Aprovação e termo de orientação</td>
                  <td>Formalizar orientação</td>
                  <td>e-Labora</td>
                  <td>28/mar a 01/abr</td>
                  <td>Orientador (com alunos)</td>
                  <td>Formulário Start-e</td>
                  <td>5d</td>
                </tr>
                <tr>
                  <td>Seminário metodológico</td>
                  <td>Reforçar normas de TCC</td>
                  <td>Sala de aula</td>
                  <td>28/mar a 01/abr</td>
                  <td>Equipe Start-e</td>
                  <td>Slide Start-e</td>
                  <td>2h por grupo</td>
                </tr>
                <tr>
                  <td>Relatório parcial c/ ficha de freq.</td>
                  <td>Avaliação U1</td>
                  <td>e-Labora</td>
                  <td>18 a 22/abr</td>
                  <td>Aluno</td>
                  <td>Formulário Start-e + TCC</td>
                  <td>5d</td>
                </tr>
                <tr>
                  <td>Avaliação parcial</td>
                  <td>Avaliação U1</td>
                  <td>e-Labora</td>
                  <td>06 a 10/jun</td>
                  <td>Aluno</td>
                  <td>Formulário Start-e + TCC</td>
                  <td>5d</td>
                </tr>
                <tr>
                  <td>Seminário metodológico</td>
                  <td>Apoio metodológico</td>
                  <td>Sala de aula</td>
                  <td>25 a 29/abr</td>
                  <td>Orientador</td>
                  <td>Formulário Start-e</td>
                  <td>5d</td>
                </tr>
                <tr>
                  <td>Relatório final c/ ficha de freq.</td>
                  <td>Avaliação U2</td>
                  <td>e-Labora</td>
                  <td>02 a 06/mai</td>
                  <td>Equipe Start-e</td>
                  <td>Slide Start-e</td>
                  <td>2h por grupo</td>
                </tr>
                <tr>
                  <td>Avaliação final</td>
                  <td>Avaliação U2</td>
                  <td>e-Labora</td>
                  <td>13 a 24/jun</td>
                  <td>Orientador</td>
                  <td>Formulário Start-e</td>
                  <td>10d</td>
                </tr>
                
                </tbody>

               
              </table>

           </div><!-- Fim da tabela  -->       
        </div><!-- Fim do conteudo da tabela de notificações  -->
    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->




<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>


</body>
</html>
