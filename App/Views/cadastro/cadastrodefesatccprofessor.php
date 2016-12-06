<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Defesa TCC Professor</title>
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
      <form class="form-horizontal" id="formCadastroDefesaTccProfessor">
          <div class="box box-pessoais">
            <div class="box-header with-border">
              <div class="col-md-5"></div><h3 class="box-title">Defesa do TCC</h3>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

                <div class="row">  
                        <div class="col-md-6">
                        <label class="control-label">Título:</label>
                        <input id="TituloTcc" type="text" class="form-control" placeholder="Título do TCC" disabled="">
                        </div>
                      
                </div>

                <div class="row">               
                        <div class="col-md-6">             
                        <label class="control-label">Aluno(a):</label>
                        <input id="NomeAluno1" type="text" class="form-control" placeholder="Nome do Aluno(a)" disabled="">
                        </div>
                      
                </div>

                <div class="row">               
                        <div class="col-md-6">
                        <label class="control-label">Aluno(a):</label>
                        <input id="NomeAluno2" type="text" class="form-control" placeholder="Nome do Aluno(a)" disabled="">
                        </div>
                      
                </div>      

                <div class="row">              
                        <div class="col-md-6">
                        <label class="control-label">Orientador:</label>
                        <input id="NomeOrientador" type="text" class="form-control" placeholder="Nome do orientador" disabled="">
                        </div>
                      
                </div>                     
                  
                <div class="row">                   
                        <div class="col-md-2">
                        <label class="control-label">Data:</label>
                        <input type="text" id="data" class="form-control" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="col-md-2">
                        <label class="control-label">Horário:</label>
                        <input type="text" id="hora" class="form-control" placeholder="--:--">
                        </div>
                        <div class="col-md-2">
                        <label class="control-label">Sala:</label>
                        <input type="text" id="NomeSala" class="form-control" placeholder="Reserva de sala">
                        </div>
                      
                </div>
                <script>
                   function duplicarCampos(){
                    var clone = document.getElementById('divProfessor').cloneNode(true);
                    var destino = document.getElementById('destino');
                    destino.appendChild (clone);
                    var camposClonados = clone.getElementsByTagName('input');
                    for(i=0; i<camposClonados.length;i++){
                      camposClonados[i].value = '';
                    }
                  }
                  function removerCampos(id){
                    var node1 = document.getElementById('destino');
                    node1.removeChild(node1.childNodes[0]);
                  }
                  </script>
                <div class="row" id=divProfessor> 
                          
                        <div class="col-md-6">
                        <label class="control-label">Professor:</label>
                        <input id="NomeProfessor1" type="text" class="form-control" placeholder="Professor avaliador">
                        </div>
                </div>
                <div id="destino"></div>
                <div class="row">        
                        <div class="col-md-offset-6" style="">
                          <a class="btn btn-default" onclick="duplicarCampos();"><i class="fa fa-plus"></i></a>
                          <a id="botaoremover" class="btn btn-default" onclick="removerCampos(this);"><i class="fa fa-minus"></i></a>
                        </div>  
                </div>  

                  
                </div> <!-- Box body -->
              
             </div> <!-- Box pessoais -->  
           <br/>
          <div class="form-group">      
                  <div class="col-md-offset-10">
                    <button class="btn btn-default" type="reset">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Salvar</button>
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
    $('#data').mask('00/00/0000');
    $('#hora').mask('00:00');   
});
</script>

</body>
</html>
