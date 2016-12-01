<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Professor</title>
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
<body>

<div class="container-fluid"><!--Conteudo-->  
<div class="content"><!-- Contém o conteúdo da página -->

    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
      <br>
      <br>
          <div class="box box-pessoais">
            <div class="box-header with-border">
              <div class="col-md-5"></div><h3 class="box-title">Cadastro de Professor</h3>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>
            </div><!-- /.box-header -->           
            <form class="form-horizontal" id="formCadastroProfessor"><!-- form start -->
              <div class="box-body">
              <div class="row">
                <div class="col-md-12">

                      <div class="col-md-1"></div>
                      <div class="row"> <!-- Inicio Linha 01 -->
                        <div class="form-group">
                          <label class="col-md-1 control-label">Nome:</label>
                          <div class="col-md-5">
                            <input type="text" id="NomeProfessor"class="form-control" placeholder="Digite aqui seu nome">
                          </div>
                          <label class="col-md-1 control-label">Matrícula:</label>
                          <div class="col-md-2">
                            <input type="text" id="MatriculaProfessor" class="form-control" placeholder="Digite sua matrícula">
                          </div>
                        </div><!-- form group-->
                      </div> <!-- Fim Linha 01 -->

                      <div class="col-md-1"></div>
                      <div class="row"> <!-- Inicio Linha 02 -->
                        <div class="form-group">
                          <label class="col-md-1 control-label">E-mail:</label>
                          <div class="col-md-8">
                            <input type="text" id="EmailProfessor" class="form-control" placeholder="Digite aqui seu e-mail">
                          </div>
                        </div>
                      </div> <!--Fim Linha 02 -->

                      <div class="col-md-1"></div>
                      <div class="row"> <!-- Inicio Linha 03 -->
                        <div class="form-group">
                          <label class="col-md-1 control-label">Login:</label>
                          <div class="col-md-4">
                            <input type="text" id="LoginProfessor" class="form-control" placeholder="Defina seu login">
                          </div>
                          <label class="col-md-1 control-label">Senha:</label>
                          <div class="col-md-3">
                            <input type="password" id="SenhaProfessor"class="form-control" placeholder="Máximo 20 caracteres">
                          </div>
                        </div>
                      </div> <!--Fim Linha 02 -->

                   </div>   <!-- Colunas da linha(col-md-12) -->
                  </div>   <!-- Linha principal -->      
                </div>    <!-- Box body -->
                <div class="col-md-offset-10">
                  <button class="btn btn-default">Cancelar</button>
                  <button class="btn btn-primary" type="submit">Salvar</button>
                </div>                
               </form>
              </div>  <!-- Box pessoais -->
           <br>           
        
    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
</div><!--Fim do Conteudo-->



<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>

<script src="../../../Public/bower_components/jQuery-Mask-Plugin/dist/jquery.mask.js"></script> 

<script src="../../../Js/ajaxFunctions.js"></script>
<!-- Função para campo de entrada da data -->
<script>$(document).ready(function(){
    $('#matricula').mask('000000000');   
});
</script>

<script>
  $('#formCadastroProfessor').on('submit', function(){
                    var NomeProfessor = document.getElementById('NomeProfessor').value;
                    var MatriculaProfessor = document.getElementById('MatriculaProfessor').value;
                    var EmailProfessor = document.getElementById('EmailProfessor').value;
                    var LoginProfessor = document.getElementById('LoginProfessor').value;
                    var SenhaProfessor = document.getElementById('SenhaProfessor').value;

                    var dataString = $("#formCadastroProfessor").serialize();
                    dataString += '&NomeProfessor='+NomeProfessor+'&MatriculaProfessor='+MatriculaProfessor+'&EmailProfessor='+EmailProfessor+'&LoginProfessor='+LoginProfessor+'&SenhaProfessor='+SenhaProfessor;
                    alert(dataString);

                     ajaxPostRedirect(dataString,"../../../App/Backend/Professor/CadastrarProfessorAPI.php", "../../../App/Views/cadastro/cadastroprofessor.php");
                     alert("Cadastrado");
        
        return false;
    }); 

</script>
</body>
</html>
