<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Defesa TCC Aluno</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../../../css/style.css">
  
  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/plugins/datepicker/datepicker3.css">

  

</head>



<body>

<div class="container=fluid"> 
<div class="content">    

        <section class="content-header">
          <form class="form-horizontal">
            <div class="box box-pessoais">
             <div class="box-header with-border">              
              <div class="col-md-5"></div><h3 class="box-title">Defesa de TCC</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            
              <div class="box-body" >
                                                 
                          <div class="row">
                                        <div class="col-md-10">
                                        <label class="control-label">Título TCC:</label>
                                          <input type="text" class="form-control" placeholder="Título do TCC" disabled="">
                                        </div>
                          </div>
                          <div class="row"> 
                                        <div class="col-md-8">
                                        <label>Aluno(a): </label>
                                        <input type="text" class="form-control"  placeholder="Titulo do TCC">
                                        </div>
                                        <div class="col-md-2">
                                        <label>Matrícula: </label>
                                        <input type="text" id="matricula" class="form-control">
                                        </div>
                          </div>
                          <div class="row">
                                        <div class="col-md-8">
                                        <label>Postura / Comentário:</label>
                                         <textarea class="form-control"  style="resize: none"  placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="col-md-2">
                                        <label>Nota da postura: </label>
                                        <input type="number" max="10" min="0" class="form-control">
                                        </div>
                         </div>
                          <div class="row"> 
                                        <div class="col-md-8">
                                        <label>Comunicação / Comentário:</label>
                                         <textarea class="form-control"  style="resize: none"  placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="col-md-2">
                                        <label>Nota da comunicação: </label>
                                        <input type="number" max="10" min="0" class="form-control">
                                        </div>
                          </div>
                          <div class="row"> 
                                        <div class="col-md-8">
                                        <label>Clareza / Comentário:</label>
                                         <textarea class="form-control"  style="resize: none"  placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="col-md-2">
                                        <label>Nota da clareza: </label>
                                        <input type="number" max="10" min="0" class="form-control">
                                        </div>
                          </div>
                          <div class="row"> 
                                        <div class="col-md-8">
                                        <label>Domínio / Comentário:</label>
                                         <textarea class="form-control"  style="resize: none"  placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="col-md-2">
                                        <label>Nota do domínio: </label>
                                        <input type="number" max="10" min="0" class="form-control">
                                        </div>
                          </div>
                          <div class="row"> 
                                        <div class="col-md-8"></div>
                                        <div class="col-md-2">
                                        <label>Nota total: </label> 
                                        <input type="number" class="form-control" placeholder="Soma das notas" disabled=""> 
                                        </div>
                          </div>

              </div><!-- /.box-body -->
             
          </div><!-- /.box geral-->

          <div class="form-group">      
             <div class="col-md-offset-10">
              <button class="btn btn-default">Cancelar</button>
              <button class="btn btn-primary">Salvar</button>
              </div>
          </div><!-- form group  button-->
          </form>
        </section>

</div> <!-- Fim content -->
</div> <!-- Fim container fluid -->

<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>
<script src="../../../Public/bower_components/jQuery-Mask-Plugin/dist/jquery.mask.js"></script> 
<!-- Função para campo de entrada da data -->
<script>$(document).ready(function(){
    $('#matricula').mask('000000000');
</script>
</body>
</html>
