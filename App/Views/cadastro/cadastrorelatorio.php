<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cadastro Relatório</title>
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
              <div class="col-md-5"></div><h3 class="box-title">Relatório do TCC</h3>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                  <form class="form-horizontal">
                    <div class="box-body">
                    <div class="row"> <!-- Inicio Linha 01 -->
                        <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Curso:</label>

                    <div class="col-md-7 col-sm-7 col-xs-6">
                      <select class="form-control select1">
                        <option selected>Selecione um curso</option>
                        <option>Arquitetura e Urbanismo</option>
                        <option>Engenharia Civil</option>
                        <option>Engenharia da Computação</option>
                        <option>Engenharia de Petróleo e Gás</option>
                        <option>Sistemas de Informação</option>
                      </select>
                    </div> <!-- col -->
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label" style="margin: 0px">Série:</label>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <select class="form-control select1">
                        <option selected>Selecione sua série</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div> <!-- form group-->
                </div> <!-- Fim Linha 01-->
                <div class="row"> <!-- Inicio Linha 02 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Aluno(a):</label>
                    <div class="col-md-7 col-sm-7 col-xs-6">
                      <input type="text" class="form-control" placeholder="Nome do Aluno(a)">
                    </div>
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Matrícula</label>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="number" class="form-control" placeholder="Matrícula">
                    </div>
                  </div><!-- form group-->
                </div> <!-- Fim Linha 02 -->
                <div class="row"> <!-- Inicio Linha 03 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Aluno(a):</label>
                    <div class="col-md-7 col-sm-7 col-xs-6">
                      <input type="text" class="form-control" placeholder="Nome do Aluno(a)">
                    </div>
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Matrícula:</label>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                      <input type="number" class="form-control" placeholder="Matrícula">
                    </div>
                  </div> <!-- form group -->
                </div>  <!-- Fim Linha 03 -->
                <div class="row"> <!-- Inicio Linha 04 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Orientador(a):</label>
                    <div class="col-md-10 col-sm-7 col-xs-6">
                      <input type="text" class="form-control"  placeholder="Nome do Orientador(a)">
                    </div>
                  </div>
                </div>  <!-- Fim Linha 04 -->
                <div class="row"> <!-- Inicio Linha 05 -->
                  <div class="form-group">
                  <label class="col-md-1 col-sm-1 col-xs-2 control-label">Título:</label>
                  <div class="col-md-10 col-sm-10 col-xs-9">
                    <input type="text" class="form-control" placeholder="Título do trabalho">
                  </div>                
                  </div><!-- form group -->
                </div><!-- Fim Linha 05 -->
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
