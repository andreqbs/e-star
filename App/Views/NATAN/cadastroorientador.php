<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Orientador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="./../../css/style.css">
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
      <h1>
        Orientador  
      </h1>
      <br>
      <br>

          <form class="form-horizontal">
            <div class="container-fluid">
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
                    <label class="col-md-1 col-sm-1 col-xs-2 control-label">Série:</label>
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
                      <input type="text" class="form-control" placeholder="Matrícula">
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
                      <input type="text" class="form-control" placeholder="Matrícula">
                    </div>
                  </div> <!-- form group -->
                </div>  <!-- Fim Linha 03 -->

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

                <div class="row"> <!-- Inicio Linha 06 -->
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-2">Justificativas:</label>
                    <div class="col-md-10 col-sm-10 col-xs-9">
                      <textarea class="form-control"  placeholder="Escreva as justificativas"></textarea>
                    </div>
                  </div><!-- form group -->
                </div> <!-- Fim Linha 06 -->

                <div class="form-group">
                  <br/>
                  <div class="col-md-offset-10 col-sm-offset-10 col-xs-offset-10">
                    <button class="btn btn-primary">Salvar</button>
                  </div>
                </div><!-- form group -->
          </form>

    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->




<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>


</body>
</html>
