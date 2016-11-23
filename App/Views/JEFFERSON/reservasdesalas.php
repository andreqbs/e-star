<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Reservas de Salas</title>
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


    <div class="content-header"><!-- Inicio do conteudo da pagina-->
       
      

       <div class="col-md-12">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"> Reservas de Salas</h3>
              

             
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                          <div class="col-md-12"><!-- Coluna calendario-->
                            <div class="box box-default box-solid ">
                                    <div class="box-header with-border">
                                          <h3 class="box-title">Cadastrar Sala</h3>
                                            <div class="box-tools pull-right">
                                                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                                      </button>
                                            </div>

                                        </div>
                                        
                                            <div class="box-body"> <!--Coluna Nome da ala-->
                                              <div class="col-xs-11 form-group">

                                                <label class="col-xs-1 control-label">Nome:</label>

                                                <div class="col-xs-4">
                                                  <input type="text" class="form-control"  placeholder="Nome da Sala">
                                                </div>

                                                <label class="col-xs-1 control-label">Setor:</label>

                                                  <div class="col-xs-2">
                                                    <input type="text" class="form-control"  placeholder="Nome do Setor">
                                                  </div> 
                                                  <label class="col-xs-1 control-label">Capacidade:</label>

                                                  <div class="col-xs-2">
                                                    <input type="text" class="form-control"  placeholder="Nome do Setor">
                                                  </div>   
                                              </div>                                                  
                                            </div><!--Fim da Coluna Nome da ala-->

                                               

                                                  
                                                  <div class="box-footer">
                                                      <button type="submit" class="btn btn-default pull-right">Cadastrar</button>
                                                  </div>

                                    </div>

                              </div> <!-- Fim - Coluna Cadastrar Sala -->

                                <div class="col-md-4"><!-- Coluna Reservas-->
                                      <div class="box box-default box-solid ">
                                              <div class="box-header with-border">
                                                    <h3 class="box-title">Nova Reserva</h3>                                                               

                                                    <div class="box-tools pull-right">
                                                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                                      </button>
                                                    </div>
                                               
                                                </div>
                                          
                                                <div class="box-body"> <!--Inicio da caixa calendario-->
                                                    <div>
                                                      <form>  <!--Calendario-->
                                                         <h4>Dia:</h4>   
                                                          <input  style="width: 300px" type="date" name="bday">

                                                      </form>
                                                    </div>
                                                    <div class="container">
                                                      <label class="checkbox">
                                                        <div>
                                                        <input type="checkbox" value="">
                                                        Replicar reserva para mais dias
                                                        </div>
                                                      </label>

                                                      <label class="checkbox">
                                                        <div>
                                                        <input type="checkbox" value="">
                                                         Notificar por Email 
                                                        </div>
                                                      </label>

                                                    </div>
                                                    <div>
                                                      <form>
                                                        <h4>Horario de inicio e termino:</h4>
                                                        <input style="width: 130px" type="time" name="usr_time"> ás <input style="width: 130px" type="time" name="usr_time">
                                                      </form>
                                                    </div>
                                                    <div>
                                                      <label>Motivos:</label><br>
                            
                                                        <div class="col-xs-12">
                                                           <textarea class="form-control"  placeholder="Escreva os motivos"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="box-footer">
                                                      <button type="submit" class="btn btn-default pull-right">Cadastrar</button>
                                                    </div>

                                                   

                                                </div>                           
                                        </div>

                                </div> <!-- Fim - Coluna Reservas-->

                                    <div class="col-md-8"><!-- Coluna Minhas reservas -->
                                          <div class="box box-default box-solid ">
                                                  <div class="box-header with-border">
                                                        <h3 class="box-title">Minhas Reservas</h3>

                                                         <div class="box-tools pull-right">
                                                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                                            </button>
                                                          </div>

                                                        
                                                   
                                                          </div>
                                                      
                                                          <div class="box-body">
                                                                <div class="container"><!-- Inicio da busca -->
                                                                <form class="form-horizontal">  
                                                                  <div class="col-md-2">
                                                                    <label><h4>Buscar Reserva</h4></label>
                                                                  </div>
                                                                  <div class="col-md-5">
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

                                                                <table class="table table-hover"> <!-- Tabela de busca -->
                                                                  <tr>
                                                                    <th>Título do TCC</th>
                                                                    <th>Professor</th>
                                                                    <th>Aluno 01</th>
                                                                    <th>aluno 02</th>
                                                                    <th>Sala</th>
                                                                    <th>Horario e Dia</th>
                                                                    <th>Dia</th>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Programação Robotica</td>
                                                                    <td>André</td>
                                                                    <td>Alguém</td>
                                                                    <td>Alguém</td>
                                                                    <td>A 101</td>
                                                                    <td>13:00 às 15:30</td>
                                                                    <td>20/12/2016</td>
                                                                  </tr>  
                                                       
                                                                </table>
                                                          </div>
                                                     
                                                  </div>

                                            </div> <!-- Fim - Coluna Minhas reservas-->
                                          </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                  </div>     
                  

   
      

   
    
  </div><!-- Fim do conteúdo da página -->
  







<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="bower_components/AdminLTE/dist/js/app.min.js"></script>



</body>
</html>
