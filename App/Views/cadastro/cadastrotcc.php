<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proposta de Trabalho</title>
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
      <form> <!-- Form geral -->
          <div class="box box-pessoais">
            <div class="box-header with-border">
              <div class="col-md-5"></div><h3 class="box-title">Dados pessoais</h3>
              <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div> <!-- /.box-header -->
            
            <form class="form-horizontal"><!-- form start -->
              <div class="box-body">

              <div class="row"> <!-- Inicio Linha 01 -->
                    <div class="col-md-1"></div> 
                    <div class="col-md-7">
                    <label class="control-label">Curso:</label>
                      <select class="form-control select1">
                        <option selected>Selecione um curso</option>
                        <option>Arquitetura e
                        <option>Engenharia Civil</option>
                        <option>Engenharia da Computação</option>
                        <option>Engenharia de Petróleo e Gás</option>
                        <option>Sistemas de Informação</option>
                      </select>
                    </div> <!-- col --> 
                    <div class="col-md-2">
                    <label class="control-label">Série:</label>
                      <select class="form-control select1">
                        <option selected>Selecione sua série</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                </div> <!-- Fim Linha 01-->

                <div class="row"> <!-- Inicio Linha 02 -->
                <div class="col-md-1"></div>
                    <div class="col-md-7">
                    <label class="control-label">Aluno(a):</label>
                      <input type="text" class="form-control" placeholder="Nome do Aluno(a)">
                    </div> 
                    <div class="col-md-2">
                    <label class="control-label">Matrícula</label>
                      <input type="text" id="matriculaaluno" class="form-control" placeholder="Matrícula">
                    </div>
                </div> <!-- Fim Linha 02 -->

                <div class="row"> <!-- Inicio Linha 03 -->
                <div class="col-md-1"></div>   
                    <div class="col-md-7">
                    <label class="control-label">Aluno(a):</label>
                      <input type="text" class="form-control" placeholder="Nome do Aluno(a)">
                    </div>
                    <div class="col-md-2">
                    <label class="control-label">Matrícula:</label>
                      <input type="text" id="matriculaaluno2" class="form-control" placeholder="Matrícula">
                    </div>   
                </div>  <!-- Fim Linha 03 -->

                <div class="row"> <!-- Inicio Linha 04 -->
                <div class="col-md-1"></div>
                    <div class="col-md-7">
                    <label class="control-label">Orientador(a):</label>
                      <input type="text" class="form-control"  placeholder="Nome do Orientador(a)">
                    </div> 
                    <div class="col-md-2">
                    <label class="control-label">Matrícula:</label>
                      <input type="text" id="matriculaorientador" class="form-control" placeholder="Matrícula">
                    </div>
                
                </div>  <!-- Fim Linha 04 -->

              </div><!-- box body -->
             </form> 

            </div> <!-- Box pessoais -->
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
                <div class="col-md-1"></div>
                    <div class="col-md-9">
                      <label class="control-label">Curso:</label>
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
                </div> <!-- Fim Linha 04 -->
                <div class="row"> <!-- Inicio Linha 05 -->
                <div class="col-md-1"></div> 
                  <div class="col-md-9">
                    <label class="control-label">Título:</label>
                    <input type="text" class="form-control" placeholder="Título do trabalho">
                  </div>                
                </div><!-- Fim Linha 05 -->
                <div class="row"> <!-- Inicio Linha 06 -->
                <div class="col-md-1"></div>
                    <div class="col-md-9">
                      <label class="control-label">Resumo:</label>
                      <textarea class="form-control" style="resize: none" placeholder="Escreva seu resumo"></textarea>
                    </div>
                </div> <!-- Fim Linha 06 -->
                <div class="row"> <!-- Inicio Linha 06 -->
                <div class="col-md-1"></div>    
                    <div class="col-md-9">
                      <label class="control-label">Objetivos:</label>
                      <textarea class="form-control" style="resize: none" placeholder="Escreva seus objetivos"></textarea>
                    </div>
                </div> <!-- Fim Linha 06 -->

                <div class="row"> <!-- Inicio Linha 06 -->
                <div class="col-md-1"></div> 
                    <div class="col-md-9">
                      <label class="control-label">Justificativas:</label>
                      <textarea class="form-control" style="resize: none" placeholder="Escreva suas justificativas"></textarea>
                      </div>
                  </div> <!-- Fim Linha 06 -->

                </div> <!-- Fim do Box body -->
               </form>
              </div> <!-- box tcc -->

                <div class="box box-cronograma">
                <div class="box-header with-border">
                  <div class="col-md-5"></div><h3 class="box-title">Cronograma</h3>
                  <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
            <form class="form-horizontal">
            <div class="box-body">
              <div class="box-tools pull-right">
                    <div> <!-- Início da Modal -->
                            <!-- Botão  -->
                            <a href="#myModal" class="btn btn-default" data-toggle="modal">Nova atividade</a>
                           <!-- Conteúdo da Modal  -->
                            <div id="myModal" class="modal modal-success">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"> <!-- Cabeçalho -->
                                            <div class="col-md-3"></div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Agendamento de atividades</h4>
                                        </div>
                                        <br><br>
                                        <div class="body"> <!-- Conteúdo -->
                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Mês:</label>
                                                      <div class="col-md-7">
                                                    <select class="form-control select1">
                                                      <option selected>Selecione o mês referente a atividade</option>
                                                      <option>Mês 1</option>
                                                      <option>Mês 2</option>
                                                      <option>Mês 3</option>
                                                      <option>Mês 4</option>
                                                      <option>Mês 5</option>
                                                    </select>
                                                      </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-2 control-label">Atividade: </label>
                                                <div class="col-md-7">
                                                  <input type="text" class="form-control" placeholder="Nome da atividade">
                                                </div>
                                              </div><!-- form group-->  
                                              <br>        
                                        </div>
                                       
                                        <div class="modal-footer"> <!-- Area dos botões -->
                                          <button class="btn btn-default">Cancelar</button>
                                          <button class="btn btn-outline"><i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fim do contéudo Modal -->
                        </div> <!-- Fim Modal -->
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Atividades</th>
                  <th>MÊS 1</th>
                  <th>MÊS 2</th>
                  <th>MÊS 3</th>
                  <th>MÊS 4</th>
                  <th>MÊS 5</th>
                </tr><tr>
                  <td>atividade 1</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr><tr>
                  <td>atividade 2</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr><tr>
                  <td>atividade 3</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr><tr>
                  <td>atividade 4</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr>
              </tbody></table>
            </div><!-- table /.box-body -->
           </form>
                     
          </div> <!-- Box cronograma -->
          <div class="form-group">      
                  <div class="col-md-offset-10">
                    <button class="btn btn-default">Cancelar</button>
                    <button class="btn btn-primary">Salvar</button>
                  </div>
          </div><!-- form group  button-->
      </form>    
    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
</div><!--Fim do Conteudo-->



<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>

<script src="../../../Public/bower_components/jQuery-Mask-Plugin/dist/jquery.mask.js"></script> 
<!-- Função para campo de entrada da data -->
<script>$(document).ready(function(){
    $('#matriculaaluno').mask('000000000');
    $('#matriculaaluno2').mask('000000000');
    $('#matriculaorientador').mask('000000000');   
});
</script>
</body>
</html>
