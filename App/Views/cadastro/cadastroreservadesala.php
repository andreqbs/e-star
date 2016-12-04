<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cadastrar Reservas</title>
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
      <form class="form-horizontal" id="formCadastroReservaSala">
          <div class="box box-pessoais">
            <div class="box-header with-border">
              <div class="col-md-5"></div><h3 class="box-title">Reservas de Salas</h3>
              <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

              <div class="col-md-3"></div>
                <div class="row"> <!-- Inicio Linha 01 -->
                  <div class="form-group">
                    <label class="col-md-1 control-label">Data:</label>
                    <div class="col-md-3">
                      <input type="text" id="data" class="form-control" placeholder="dd/mm/aaaa">
                    </div>
                  </div><!-- form group-->
                </div> <!-- Fim Linha 01 -->

                <div class="col-md-3"></div>
                <div class="row"> <!-- Inicio Linha 02 -->
                  <div class="form-group">
                    <label class="col-md-1 control-label">Hora:</label>
                    <div class="col-md-3">
                      <input type="text" id="hora" class="form-control" placeholder="--:--">
                    </div>
                  </div><!-- form group-->
                </div> <!-- Fim Linha 02 -->

                <div class="col-md-3"></div>
                  <div class="row">
                    <div class="form-group">
                      <label class="col-md-1 control-label">Professor:</label>
                      <div class="col-md-3">
                        <input id="NomeProfessor" type="text" class="form-control" placeholder="Professor que deseja reservar a sala">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="row">
                    <div class="form-group">
                      <label class="col-md-1 control-label">Sala:</label>
                      <div class="col-md-3">
                        <input id="NomeSala" type="text" class="form-control" placeholder="Sala reservada">
                      </div>
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

<script src="../../../Js/ajaxFunctions.js"></script>

<!-- Função para campo de entrada da data -->
<script>$(document).ready(function(){
    $('#data').mask('00/00/0000');
    $('#hora').mask('00:00');   
});
</script>
<?php session_start() ?>
<script>
  $('#formCadastroReservaSala').on('submit', function(){
     // e.preventDefault();  //prevent form from submitting
                    var data = document.getElementById('data').value;
                    var hora = document.getElementById('hora').value;
                    var NomeProfessor = document.getElementById('NomeProfessor').value;
                    var NomeSala = document.getElementById('NomeSala').value;


                    var dataString = $("#formCadastroReservaSala").serialize();
                    dataString += '&data='+data+'&hora='+hora+'&NomeProfessor='+NomeProfessor+'&NomeSala='+NomeSala;
                    alert(dataString);
                   
                    var minhaSessionP = '<?php echo $_SESSION['idProfessor']; ?>';

                    var minhaSessionA = '<?php echo $_SESSION['idAluno']; ?>';

                    alert("aluno");
                    alert(minhaSessionA);
                    alert("Professor");
                    alert(minhaSessionP);
                    if(minhaSessionP > 0){
                     alert("ProfessorRedi");                   
                     ajaxPostRedirect(dataString,"../../../App/Backend/Reserva/CadastrarReservaAPI.php","../../../App/Views/usuario/principalProfessor.php");
                    }
                    else if(minhaSessionA > 0){
                     alert("AlunoRedi");                     
                     ajaxPostRedirect(dataString,"../../../App/Backend/Reserva/CadastrarReservaAPI.php","../../../App/Views/usuario/principalAluno.php");
                    }                    
                     
        return false;
    }); 
</script>

</body>
</html>
