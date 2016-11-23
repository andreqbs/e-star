<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cadastro Eventos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../../../css/style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

</head>



<body class="">

<div class="container-fluid"><!--Conteudo-->  
<div class="content"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
      
          <div class="box box-pessoais">
            <div class="box-header with-border">
              <div class="col-md-5"></div><h3 class="box-title">Dados do evento</h3>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <div class="col-md-3"></div>
                <div class="row"> <!-- Inicio Linha 01 -->
                  <div class="form-group">
                    <label class="col-md-1 control-label">Evento:</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Nome do Evento">
                    </div>
                  </div><!-- form group-->
                </div> <!-- Fim Linha 01 -->
                <div class="col-md-3"></div>
                  <div class="row">
                    <div class="form-group">
                      <label class="col-md-1 control-label">Data:</label>
                      <div class="col-md-3">
                        <input type="date" class="form-control" placeholder="Data do evento">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="row">
                    <div class="form-group">
                      <label class="col-md-1 control-label">Horário:</label>
                      <div class="col-md-3">
                        <input type="time" class="form-control" placeholder="Horário do evento">
                      </div>
                    </div>
                  </div>
                <div class="col-md-3"></div>
                <div class="row"> <!-- Inicio Linha 03 -->
                  <div class="form-group">
                    <label class="col-md-1 control-label">Local:</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Local do Evento">
                    </div>
                  </div> <!-- form group -->
                </div>
                <div class="col-md-3"></div>
                <div class="row"> <!-- Inicio Linha 03 -->
                  <div class="form-group">
                    <label class="col-md-1 control-label">Professor:</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Nome do Professor">
                    </div>
                  </div> <!-- form group -->
                </div>
                <div class="col-md-3"></div>
                <div class="row"> <!-- Inicio Linha 01 -->
                  <div class="form-group">
                    <label class="col-md-1 control-label">Curso:</label>

                    <div class="col-md-3">
                      <select class="form-control select1">
                        <option selected>Selecione um curso</option>
                        <option>Arquitetura e Urbanismo</option>
                        <option>Engenharia Civil</option>
                        <option>Engenharia da Computação</option>
                        <option>Engenharia de Petróleo e Gás</option>
                        <option>Sistemas de Informação</option>
                      </select>
                    </div> <!-- col -->
                  </div> <!-- form group-->
                </div> <!-- Fim Linha 01-->

                
                
                </div>
              </form>
            </div>  
           <br/>           
          </div>
          <div class="form-group">      
                  <div class="col-md-offset-10">
                    <button class="btn btn-default">Cancelar</button>
                    <button class="btn btn-primary">Salvar</button>
                  </div>
          </div><!-- form group  button-->
        
    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->



<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>


</body>
</html>
