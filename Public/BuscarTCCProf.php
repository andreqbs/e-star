<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>BuscarTCCProf</title>
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
    <a href="BuscarTCCProf.php" class="logo">
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
     <div class="box-header "><!-- Inicio cabeçalho -->
      <h1 class="box-title">
        TCC  
      </h1><!-- Fim do cabeçalho -->
      
      <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>

        </div><!-- Fim do cabeçalho -->
        
      <br>
      <br>

      

              <div class="container"> <!-- Inicio da busca -->
                <form class="form-horizontal">  
                  <div class="col-md-2">
                    <label><h4>Buscar TCC</h4></label>
                  </div>


                    <div class="col-md-8">
                      <input type="text" class="form-control"  placeholder="TCC">
                    </div>
                      <div class="col-md-2">
                        <button class="btn btn-default" type="submit">
                          <i class="fa fa-search">
                          </i>
                        </button>
                      </div>
                  

                </form>
              </div><!-- Fim da busca -->



          <div class="container"><!-- Inicio do Filtro  -->
                    <form class="form-horizontal"> 
              
             <div class="col-md-4"><!-- Inicio da linha de pesquisa  -->
              <p>
                <label >Título</label>
                            
                <select autocomplete="off" class="advanced-search-customFacet" id="Linha-de-pesquisa" name="pesquisa" value="">
                <option value="">Software</option>
                <option value="">tecnologia</option>
                </select>
              </p>
              </div><!-- Fim da linha de pesquisa  -->

            

                <div class="col-md-4"><!-- Inicio do ano  -->
                   <p> 
                  <label >Linha de Pesquisa</label>
                              
                  <select autocomplete="off" class="advanced-search-customFacet" id="Ano" name="anos" value="" >
                  <option value="">Software</option>
                  <option value="">Tecnologia</option>
                  
                  </select>
                  </p>
                  </div><!-- Fim do ano  -->

                

                  <div class="col-md-4"><!-- Inicio do Curso  -->
                <p>
                    <label >Curso</label>
                    <select autocomplete="off" class="advanced-search-category" id="Curso" name="cursos" value="">
                    <option value="">Eng Computação</option>
                    <option value="">Eng Produção</option>
                    </select>
                </p>
                </div><!-- IFim do Curso  -->


             </form>   
          </div> <!-- Fim do Filtro  -->


                      

        <div class="box-body no-padding"><!-- Inicio da tabela  -->

          <table class="table table-bordered table-hover table-responsive">

          <thead>
            <tr><!-- LinhaTitulo  -->
              <th style="width: 20px">ID</th>
              <th style="width: 300px">Título</th><!-- Coluna  -->
              <th style="width: 40px">Linha de Pesquisa</th>
              <th style="width: 40px">Curso</th>
              <th style="width: 150px">Ações</th>              
            </tr>
          </thead>

            <tr><!-- Linha01  -->     
              <td>1001</td>       
              <td data-toggle="modal" data-target="#myModal">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</td>
              <td>Ipsum</td>
              <td>Ipsum</td>
              <td>
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a>
                  <a href="#" class="btn btn-warning btn-xs"><i class="label label-warning"></i> Editar </a>

                  <a href="#" class="btn btn-danger btn-xs" > Excluir </a>
              </td>
            </tr>

            

            <tr><!-- Linha02  --> 
              <td>1002</td>            
              <td data-toggle="modal" data-target="#myModal">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</td>
              <td>Comsectetur</td>
               <td>Comsectetur</td>
              <td>
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a>
                  <a href="#" class="btn btn-warning btn-xs"><i class="label label-warning"></i> Editar </a>

                  <a href="#" class="btn btn-danger btn-xs" > Excluir </a>
                  
              </td>
            </tr>

          </table>

        </div><!-- Fim da tabela  -->

      
      </div><!-- Fim do conteudo da tabela de notificações  -->

    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->



    <!-- Modal Vizualisar TCC-->
    <div class="modal fade" id="myModalTCC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">TCC</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div> <!--Fim da Modal Vizualisar TCC-->




<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="bower_components/AdminLTE/dist/js/app.min.js"></script>



</body>
</html>