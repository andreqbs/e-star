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
    <a href="principal_professor.php" class="logo">
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
              <span class="hidden-xs">Professor</span>
            </a>

            <!-- Inicio do dropdown usuario -->
            <ul class="dropdown-menu">
              <!-- Inicio da imagem do usuario -->
              <li class="user-header">
                <img src="../Imagens/Start.jpg" class="img-circle" alt="User Image">
                <p>
                  Professor
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
            <li class="active"><a href="#"><i class="fa fa-file-o"></i>Opção</a></li>

          </ul>
        </li><!--Fim da aba cadastro-->
                

        
      </ul><!--Fim do menu de navegação-->

    </section>

  </aside><!-- Fim da coluna do lado esquerdo -->

  
  <div class="content-wrapper"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
           
      <div class="box"><!-- Inicio do conteudo da tabela de notificações  -->

        <div class="box-header with-border"><!-- Inicio cabeçalho -->
          <h3 class="box-title">Notificações</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>

        </div><!-- Fim do cabeçalho -->
        

        <div class="box-body no-padding"><!-- Inicio da tabela  -->

          <table class="table table-bordered table-hover table-responsive">

            <tr><!-- LinhaTitulo  -->
              <th style="width: 500px">Título do Trabalho</th><!-- Coluna  -->
              <th style="width: 300px">Linha de Pesquisa</th>
              <th style="width: 150px">Status</th>              
            </tr>
         
            <tr><!-- Linha01  -->            
              <td data-toggle="modal" data-target="#myModal">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</td>
              <td>É um fato conhecido de todos que um leitor </td>
              <td>
                  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-o-up"></i> Aceitar </a>

                  <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModalnegar"><i class="fa fa-thumbs-o-down"></i> Negar </a>
              </td>              
            </tr>

            <tr><!-- Linha02  -->            
              <td data-toggle="modal" data-target="#myModal">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</td>
              <td>É um fato conhecido de todos que um leitor </td>
              <td>
                  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-o-up"></i> Aceitar </a>

                  <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModalnegar"><i class="fa fa-thumbs-o-down"></i> Negar </a>
              </td>
            </tr>

          </table><!-- Inicio da tabela  -->

        </div><!-- Fim da tabela  -->


          <!-- Inicio da modal informações --> 
          <div class="modal fade " tabindex="-1" role="dialog" id="myModal">

            <div class="modal-dialog " role="document">

              <div class="modal-content">

                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informações</h4>
                </div>

                <div class="modal-body">
                
                    <div class="row"><!--Linha 01-->

                      <div class="col-xs-8 form-group">
                        
                          <label class="col-xs-1 control-label">Curso:</label>
                          <input class="form-control" type="text" disabled="" placeholder="Arquitetura e Urbanismo">
                        
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-xs-3 form-group">

                        <label class="col-xs-4 control-label">Série:</label>
                        <input class="form-control" type="text" disabled="" placeholder="9º">
            
                      </div> 

                    </div><!--Fim Linha 01-->

                          
                    <div class="row"> <!--Linha 02-->
                          
                      <div class="col-xs-8 form-group">

                        <label class="col-xs-1 control-label">Aluno(a):</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>

                      <div class="col-xs-3 form-group">

                        <label class="col-xs-4 control-label">Matrícula:</label>

                        <input class="form-control" type="text" disabled="" placeholder="201212123">
            
                      </div> 

                    </div><!--Fim Linha 02-->          


                    <div class="row"><!--Linha 03-->
                          
                      <div class="col-sm-8 form-group">

                        <label class="col-sm-1 control-label">Aluno(a):</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>

                      <div class="col-sm-3 form-group">

                        <label class="col-sm-4 control-label">Matrícula:</label>

                        <input class="form-control" type="text" disabled="" placeholder="201212123">
            
                      </div> 

                    </div><!--Fim Linha 03-->


                    <div class="row"><!--Linha 04-->

                      <div class="col-xs-10 form-group">
                        
                          <label class="col-xs-6 ">Linha de Pesquisa:</label>
                          <input class="form-control" type="text" disabled="" placeholder="Automação e Controle">

                      </div>
                    </div><!--Fim Linha 04-->

                    <div class="row"><!--Linha 05-->
                          
                      <div class="col-sm-10 form-group">

                        <label class="col-sm-6 ">Título do Trabalho:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Criação de um sistema para cadastrar TCC">
            
                      </div>


                    </div><!--Fim Linha 05-->

                    <div class="row"><!--Linha 06-->
                      
                      <div class="col-xs-12 form-group">

                        <label class="col-xs-6 ">Resumo da Proposta:</label>
                        
                        <textarea class="form-control" rows="2" placeholder="Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado." disabled="" ></textarea>

                      </div>

                    </div><!--Fim Linha 06-->


                    
                    <div class="row"><!--Linha 07-->
                      
                      <div class="col-xs-6 form-group">

                        <label class="col-xs-1 ">Objetivos:</label>
                        
                        <div class="col-xs-12">
                          <textarea class="form-control"  placeholder="Escreva os objetivos do trabalho" disabled="" ></textarea>
                        </div>

                      </div>

                      <div class="col-xs-6 form-group">

                        <label class="col-xs-1 ">Justificativas:</label>
                        
                        <div class="col-xs-12">
                          <textarea class="form-control"  placeholder="Escreva as justificativas" disabled="" ></textarea>
                        </div>

                      </div>


                    </div><!--Fim Linha 07-->

                </div>

                  <div class="modal-footer">          
                    <button type="button" class="btn btn-primary "><i class="fa fa-thumbs-o-up"></i> Aceitar</button>
                  </div>

              </div><!-- /.modal-content -->

            </div><!-- /.modal-dialog -->

          </div><!-- Fim da modal informações --> 
           

          <!-- Inicio da modal negar -->
          <div class="modal modal-danger " tabindex="-1" role="dialog" id="myModalnegar">
            
            <div class="modal-dialog">

              <div class="modal-content">

                <div class="modal-header"><!-- Topo da modal -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Justificativa</h4>
                </div>

                <div class="modal-body">                   
              
                  <div><!-- Caixa de texto -->
                    <textarea class="form-control"  placeholder="Escreva uma justificativa"></textarea>
                  </div>

                </div>

                <div class="modal-footer"><!-- Rodapé da modal-->
                
                <button type="button" class="btn btn-outline">Enviar</button>
                </div>

              </div>

            </div>

          </div><!-- Fim da modal negar -->         

        </div>
      
      </div><!-- Fim do conteudo da tabela de notificações  -->

    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->




<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="bower_components/AdminLTE/dist/js/app.min.js"></script>



</body>
</html>
