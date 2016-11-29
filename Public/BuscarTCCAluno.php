<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>BuscarTCCAluno</title>
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
    <a href="BuscarTCCAluno.php" class="logo">
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
     <div class="box-header "><!-- Inicio cabeçalho -->
      <h1 class="box-title">
        TCC  
      </h1><!-- Fim do cabeçalho -->
      
        </div><!-- Fim do cabeçalho -->

      <br>
      <br>

      

                  <div class="container"><!-- Inicio da busca -->
                    <form class="form-horizontal">  
                      <div class="col-md-2">
                        <label><h4>Buscar TCC</h4></label>
                      </div>


                        <div class="col-md-8">
                          <input type="text" class="form-control"  placeholder="Palavra Chave">
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
                <label >Linha de pesquisa</label>
                            
                <select autocomplete="off" class="advanced-search-customFacet" id="linha-de-pesquisa" name="pesquisa" value="">
                <option value="">Software</option>
                <option value="">tecnologia</option>
                </select>
              </p>
              </div><!-- Fim da linha de pesquisa  -->

              <div class="col-md-3"><!-- Inicio do Curso  -->
                <p>
                    <label for="advanced-search-category-38388fb404">Curso</label>
                    <select autocomplete="off" class="advanced-search-category" id="Curso" name="Cursos" value="">
                    <option value="">Eng Computação</option>
                    <option value="">Eng Produção</option>
                    </select>
                </p>
                </div><!-- IFim do Curso  -->

                <div class="col-md-2"><!-- Inicio do ano  -->
                   <p> 
                  <label for="advanced-search-customFacet-38388fb404">Ano</label>
                              
                  <select autocomplete="off" class="advanced-search-customFacet" id="ano" name="Anos" value="">
                  <option value="">2009</option>
                  <option value="">2010</option>
                  <option value="">2011</option>
                  <option value="">2012</option>
                  <option value="">2013</option>
                  </select>
                  </p>
                  </div><!-- Fim do ano  -->


                  <div class="col-md-3"><!-- Inicio do Orientador  -->
              <p>
                <label >Orientador</label>
                            
                <select autocomplete="off" class="advanced-search-customFacet" id="Orientador" name="Orientadores" value="">
                <option value="">André</option>
                <option value="">André</option>
                </select>
              </p>
              </div><!-- Fim do Orientador  -->

                </form>


        </div> <!-- Fim do Filtro  -->
                 

            <div class="box-body no-padding"><!-- Inicio da tabela  -->
              <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                  <th>Título</th>
                  <th>Linha Pesquisa</th>
                  <th>Curso</th>
                  <th>Ano</th>
                  <th>Orientador</th>
                  <th>Aluno 1</th>
                  <th>Aluno 2</th>
                  <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr">
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                <tr>
                  <td>Testeeee</td>
                  <td>Sofware</td>
                  <td>Eng Comp</td>
                  <td>2018</td>
                  <td>André</td>
                  <td>Spencer</td>
                  <td>Pavao</td>
                  <td><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a></td>
                </tr>
                
                </tbody>

               
              </table>
                  <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  </div><!-- Fim da tabela  -->

  </div><!-- Fim do conteudo da tabela de notificações  -->

  </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->




                      <!-- Inicio da modal informações --> 
                            <div class="modal fade" id="myModalTCC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                              <div class="modal-dialog " role="document">

                                <div class="modal-content">

                                  <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">TCC</h4>
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






<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="bower_components/AdminLTE/dist/js/app.min.js"></script>


</body>
</html>
