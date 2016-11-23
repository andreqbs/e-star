<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cadastro box-tcc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../../..//css/style.css">
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
            <div class="box box-tcc">
            <div class="box-header with-border">
              <div class="col-md-5"></div><h3 class="box-title">Dados TCC</h3>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
              </div>
            </div><!-- /.box-header -->

            <form class="form-horizontal">
              <div class="box-body">
                <div class="row"> <!-- Inicio Linha 04 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Pesquisa:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <select class="form-control select1">
                        <option selected>Selecione uma linha de pesquisa</option>
                        <option>Automação e Controle</option>
                        <option>Computação de Alto Desempenho</option>
                        <option>Inteligência Computacional</option>
                        <option>Metaheurística</option>
                        <option>Robótica</option>
                        <option>Sistemas Embarcados</option>
                        <option>Visão Computacional</option>
                      </select>
                    </div>
                  </div> <!-- form group -->
                </div> <!-- Fim Linha 04 -->
              <div class="row"> <!-- Inicio Linha 05 -->
                  <div class="form-group">
                  <label class="col-md-1 col-sm-1 col-xs-2 control-label">Título:</label>
                  <div class="col-md-10 col-sm-10 col-xs-9">
                    <input type="text" class="form-control" placeholder="Título do trabalho">
                  </div>                
                  </div><!-- form group -->
                </div><!-- Fim Linha 05 -->
                <div class="row"> <!-- Inicio Linha 04 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Tipo:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <select class="form-control select1">
                        <option selected>Selecione o tipo do TCC</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                  </div> <!-- form group -->
                </div> <!-- Fim Linha 04 -->

                <div class="row"> <!-- Inicio Linha 06 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Resumo:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <textarea class="form-control" style="resize: none" placeholder="Escreva seu resumo"></textarea>
                    </div>
                  </div><!-- form group -->
                </div> <!-- Fim Linha 06 -->
                 <div class="row"> <!-- Inicio Linha 04 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Status:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <select class="form-control select1">
                        <option selected>Selecione os status</option>
                        <option>Finalizado</option>
                        <option>Pendente</option>
                        <option>Negado</option>
                        <option>Aceito</option>
                      </select>
                    </div>
                  </div> <!-- form group -->
                </div> <!-- Fim Linha 04 -->

                <div class="row"> <!-- Inicio Linha 06 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Objetivos:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <textarea class="form-control" style="resize: none" placeholder="Escreva seus objetivos"></textarea>
                    </div>
                  </div><!-- form group -->
                </div> <!-- Fim Linha 06 -->

                <div class="row"> <!-- Inicio Linha 06 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Justificativas:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <textarea class="form-control" style="resize: none" placeholder="Escreva suas justificativas"></textarea>
                      </div>
                    </div><!-- form group -->
                  </div> <!-- Fim Linha 06 -->
                </div> <!-- Fim do Box body -->
                </form>
              </div> <!-- box info(linha com o nome da tabela e botão +) -->
          <div class="form-group">      
                  <div class="col-md-offset-10 col-sm-offset-10 col-xs-offset-10"">
                    <button class="btn btn-default">Cancelar</button>
                    <button class="btn btn-primary">Salvar</button>
                  </div>
                </div><!-- form group  button-->
        </div>
    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->



<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>


</body>
</html>
