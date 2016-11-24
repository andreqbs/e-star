<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Relatório</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/plugins/datepicker/datepicker3.css">

  

</head>



<body class="hold-transition ">

    <div id="conteudo">

      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
              <h3 class="box-title">Relatório de TCC</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding" >

              <table class="table table-condensed">
                
                <tr>
                  <td>
                  
                    <div class="box-body">
                    <form class="form-inline">
                      <div class="form-group">
                        <label>Data:</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                    </form>  
                    </div>

                  </td>

                  <td align="right">

                    <div class="box-body">
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="exampleInputName2">ID TCC: </label>
                        <input type="text" class="form-control" disabled="" placeholder="ID">
                      </div>
                    </form>
                    </div>

                  </td>

                </tr>

                <tr>
                  
                  <td>
                    <div class="box-body">
                    
                        
                        <label>Tipo de Relatório: </label>

                        <input type="text" class="form-control" placeholder="Jane Doe">
                      
                    </form>
                    </div>

                  </td>

                </tr>


                <tr>
                  <td class="col-xs-6 col-sm-2 col-md-6 col-lg-6">
                  
                    <div class="box-body" >
                      
                        <label>Apresentação / Comentario</label>
                        <textarea class="form-control"  style="resize: none" rows="3" placeholder="Enter ..."></textarea>
                                         
                    </div>

                    
                    <div class="box-body">
                      <form class="form-inline">
                        <label>Nota da Apresentacao: </label>                        
                        <input type="text" class="form-control" placeholder="Nota">
                      </form>  
                    </div>                    
                    
                  </td>

                  <td class="col-xs-6 col-sm-2 col-md-6 col-lg-6">

                    <div class="box-body">                    
                      
                        <label>Fundamentação / Comentario</label>
                        <textarea class="form-control" style="resize: none" rows="3" placeholder="Enter ..."></textarea>
                                                                
                    </div>  

                    <div class="box-body">
                      <form class="form-inline">
                        <label>Nota da Fundamentação: </label>                        
                        <input type="text" class="form-control" placeholder="Nota">
                      </form>  
                    </div>  

                  </td>

                </tr>

                <tr>
                  
                  <td class="col-xs-6 col-sm-2 col-md-6 col-lg-6">
                    
                    <div class="box-body" >
                    
                        <label>Desenvolvimento / Comentario</label>
                        <textarea class="form-control"  style="resize: none" rows="3" placeholder="Enter ..."></textarea>
                                         
                    </div>

                    
                    <div class="box-body">
                      <form class="form-inline">
                        <label>Nota da Desenvolvimento: </label>                        
                        <input type="text" class="form-control" placeholder="Nota">
                      </form>  
                    </div> 

                  </td>

                  <td class="col-xs-6 col-sm-2 col-md-6 col-lg-6">

                    <div class="box-body" >
                    
                        <label>Resultados / Comentario</label>
                        <textarea class="form-control"  style="resize: none" rows="3" placeholder="Enter ..."></textarea>
                                         
                    </div>

                    
                    <div class="box-body">
                      <form class="form-inline">
                        <label>Nota da Resultados: </label>                        
                        <input type="text" class="form-control" placeholder="Nota">
                      </form>  
                    </div> 
                    
                  </td>

                </tr>



              </table>

              <div class="box-footer">

                <button class="btn btn-info pull-right" type="submit" >Cadastrar</button>
                <button class="btn btn-default pull-right" type="submit" >Cancelar</button>

              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>

    </div>  

<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../../../Public/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>

<script>
  $(function () {
    

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

  });
</script>

</body>
</html>
