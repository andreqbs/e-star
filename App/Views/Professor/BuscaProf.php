<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>BuscaProf</title>
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

<div class="container-fluid"><!--Conteudo-->


  <div class="content"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
     <div class="box"><!-- Inicio do conteudo da tabela de notificações  -->
     <div class="box-header "><!-- Inicio cabeçalho -->
      <h1 class="box-title">
        Professor 
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
                            
                      <div class=col-md-10> 
                        <div class=input-group> 
                            <div class=input-group-btn> 
                              <button type=button class="btn btn-default">Título</button> 

                                <button type=button class="btn btn-default dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false> 
                                  <span class=caret></span> 
                                    <span class=sr-only>Toggle Dropdown</span> 
                                </button> 

                                <ul class=dropdown-menu> 
                                  <li><a href="#">Professor</a></li>
                                  <li><a href="#">orientandos ativos</a></li> 
                                  <li><a href="#">orientandos totais</a></li> 
                                  <li><a href="#">Linha de Pesquisa</a></li>
                                </ul>

                            </div> 

                           <input class=form-control aria-label="Text input with segmented button dropdown">

                        </div> 
                      </div>

                        <button class="btn btn-default" type="submit">
                          <i class="fa fa-search"></i>
                        </button>
                        
                </form>
              </div><!-- Fim da busca -->




               <br>
               <br>

                    

        <div class="box-body no-padding"><!-- Inicio da tabela  -->

          <table class="table table-bordered table-hover table-responsive">

          <thead>
            <tr><!-- LinhaTitulo  -->
              <th style="width: 80px">Professor</th><!-- Coluna  -->
              <th style="width: 40px">Quantidade de orientandos ativos</th><!-- Coluna  -->
              <th style="width: 40px">Quantidade de orientandos totais</th><!-- Coluna  -->
              <th style="width: 40px">Linha de Pesquisa</th><!-- Coluna  -->
              <th style="width: 100px">Ações</th><!-- Coluna  -->          
            </tr>
          </thead>

            <tr><!-- Linha01  -->     
              <td>Ipsum Ipsum Ipsum Ipsum</td>       
              <td>Lorem Ipsum</td>
              <td>André Lorem Ipsum Lorem Ipsum</td>
              <td>Ipsum</td>
              <td>
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalBuscaProf"> Visualizar </a>
                  <a href="#" class="btn btn-warning btn-xs"><i class="label label-warning"></i> Editar </a>

                  <a href="#" class="btn btn-danger btn-xs" > Excluir </a>
              </td>
            </tr>

            

            <tr><!-- Linha02  --> 
             <td>Ipsum</td>       
              <td>Lorem Ipsum</td>
              <td>André</td>
              <td>Ipsum</td>
              <td>
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalBuscaProf"> Visualizar </a>
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
    <div class="modal modal-success" id="myModalBuscaProf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal-header" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">PROFESSOR</h4>
          </div>
           <div class="box box-body">
                                   
                                       
                                                                           
                                          <div class="col-xs-12 form-group">

                                            <label class="col-xs control-label">PROFESSOR:</label>

                                            <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
                                
                                          </div>

                                            <div class="col-xs-6 form-group">

                                            <label class="col-xs control-label">ORIENTANDOS ATIVOS:</label>

                                            <input class="form-control" type="text" disabled="" placeholder="666 orientandos">
                                
                                          </div>  

                                          <div class="col-xs-6 form-group">

                                            <label class="col-xs control-label"> ORIENTANDOS TOTAIS:</label>

                                            <input class="form-control" type="text" disabled="" placeholder="66666 orientandos">
                                
                                          </div>                                   
                                         
                                            <div class="col-xs-12 form-group">

                                            <label class="col-xs control-label">LINHA DE PESQUISA:</label>

                                            <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
                                
                                          </div>

                                          <div class="col-xs-12 form-group">

                                            <label class="col-xs control-label">ÀREA DE CONCENTRAÇÃO:</label>

                                            <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
                                
                                          </div>
                                           </div> <div class="modal-footer">
                                          
                                        </div> <!--Fim da Modal Vizualisar TCC-->




<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>



</body>
</html>