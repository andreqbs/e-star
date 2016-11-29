<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Notificações</title>
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

<body>

<div id="conteudo"><!--Conteudo-->
  
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
                  <a href="#" class="btn btn-success btn-xs"><i class="fa fa-thumbs-o-up"></i> Aceitar </a>

                  <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModalnegar"><i class="fa fa-thumbs-o-down"></i> Negar </a>
              </td>              
            </tr>

            <tr><!-- Linha02  -->            
              <td data-toggle="modal" data-target="#myModal">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</td>
              <td>É um fato conhecido de todos que um leitor </td>
              <td>
                  <a href="#" class="btn btn-success btn-xs"><i class="fa fa-thumbs-o-up"></i> Aceitar </a>

                  <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModalnegar"><i class="fa fa-thumbs-o-down"></i> Negar </a>
              </td>
            </tr>

          </table><!-- Inicio da tabela  -->

        </div><!-- Fim da tabela  -->


          <!-- Inicio da modal informações --> 
          <div class="modal modal-success" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              
              <div class="modal-content">
                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal-header" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Informações</h4>
                </div>

                <div class="box box-body">
              
                   <!--Linha 01-->
                                                     
                      <div class="col-xs-8 form-group">

                        <label class="col-xs control-label">TÍTULO:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>

                        <div class="col-xs-4 form-group">

                        <label class="col-xs control-label">STATUS:</label>

                        <input class="form-control" type="text" disabled="" placeholder="PENDENTE">
            
                      </div>  

                      <div class="col-xs-8 form-group">

                        <label class="col-xs control-label">ORIENTADOR:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>                                   
                      
                       <div class="col-xs-4 form-group">

                        <label class="col-xs control-label">DATA:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>   

                      <div class="col-xs-12 form-group">

                        <label class="col-xs control-label">CURSO:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>  
                    
                      <div class="col-xs-6 form-group">

                        <label class="col-xs control-label">ALUNO 1:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div> 

                        <div class="col-xs-6 form-group">

                        <label class="col-xs control-label">ALUNO 2:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div> 

                        <div class="col-xs-12 form-group">

                        <label class="col-xs control-label">LINHA DE PESQUISA:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div> 

                       <div class="col-xs-12 form-group">

                        <label class="col-xs control-label">RESUMO:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>   

                       <div class="col-xs-12 form-group">

                        <label class="col-xs control-label">JUSTIFICATIVA:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div>     

                      <div class="col-xs-12 form-group">

                        <label class="col-xs control-label">PROPOSTA DE TRABALHO:</label>

                        <input class="form-control" type="text" disabled="" placeholder="Andre Quitiliano">
            
                      </div> 
                </div>

                <div class="modal-footer">

                <button class="btn btn-success pull-right" type="submit" >Aceitar</button>

                </div>

              </div>

            </div>
                                      
            </div>  

          </div> <!-- Fim da modal informações --> 
           

          <!-- Inicio da modal negar -->
          <div class="modal modal-default " tabindex="-1" role="dialog" id="myModalnegar">
            
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
                
                <button type="button" class="btn btn-primary">Enviar</button>
                </div>

              </div>

            </div>

          </div><!-- Fim da modal negar -->         

        </div>
      
      </div><!-- Fim do conteudo da tabela de notificações  -->

    </section><!-- Fim da seção -->
    
</div><!--Fim do Conteudo-->




<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>



</body>
</html>
