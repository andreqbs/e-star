<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Etart</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../CSS/style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="bower_components/AdminLTE/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


</head>
<body class="body">
<div class="login-box">

  <div class="animated bounceInDown">
    <img class="img-responsive center-block" src="../Imagens/logo05.png" width="200" height="150"/>
  </div>
  <!-- /.login-logo -->
  
  <div class="login-box-body formulario animated fadeInUp">


    


    <form class="" id="formLoginUsuario" data-toggle="validator">

      <p class="login-box-msg">Login</p>

      <div class="form-group has-feedback">
        <input id="usuarioLogin" type="text" class="form-control" placeholder="usuario" required="true">
      </div>

      <div class="form-group has-feedback">
        <input id="senhaLogin" type="password" class="form-control" id="senha" placeholder="senha" required="true" data-minlength="8" data-error="senha tem que ter no minimo 8 caracteres!">
        <small class="help-block with-errors"></small>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-info btn-block btn-flat"><h5>CRIAR</h4></button>
          <br>
          <p class="abrir">Já está registrado?  <a href="#">Entre aqui</a></p>
        </div>

      </div>

    </form>



    <form class="" id="formCadastroUsuario" data-toggle="validator">
      <p class="login-box-msg">Cadastro</p>
      
      <div class="form-group has-feedback">
        <input id="nomeCompleto"  type="text" class="form-control" placeholder="nome completo" data-minlength="4" required="true">
      </div>
      <div class="form-group has-feedback">
        <input id="matricula" type="text" class="form-control" placeholder="matricula" required="true">
      </div>
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control" placeholder="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
        <small class="help-block with-errors"></small>
      </div>
      <div class="form-group has-feedback">
          <select class="form-control select1" required="true">
            <option selected>Selecione um vínculo</option>
            <option>Aluno(a)</option>
            <option>Professor(a)</option>
          </select>
      </div>
      <div class="form-group has-feedback">
          <select class="form-control select1" required="true">
            <option>Selecione um curso</option>
            <option>Engenharia Civil</option>
            <option>Engenharia da Computação</option>
            <option>Engenharia de Petróleo e Gás</option>
            <option>Sistemas de Informação</option>
          </select>
      </div>
      <div class="form-group has-feedback">
        <input id="usuario" type="text" class="form-control" placeholder="usuario" required="true">
      </div>
      <div class="form-group has-feedback">
        <input id="senha" type="password" class="form-control" id="senha" placeholder="senha" required="true" data-minlength="8" data-error="senha tem que ter no minimo 8 caracteres!">
        <small class="help-block with-errors"></small>
      </div>
       <div class="form-group has-feedback">
        <input id="repetirSenha" type="password" class="form-control" placeholder="repetir senha" required="true" data-match="#senha" data-error="senha tem que ser igual!">
        <small class="help-block with-errors"></small>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-info btn-block btn-flat"><h5>ENTRAR</h4></button>
          <br>
          <p class="abrir">Não está registrado? <a href="#">Crie uma conta</a></p>
        </div>

      </div>

    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 2.2.3 -->
<script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="bower_components/AdminLTE/plugins/iCheck/icheck.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

<script src="bower_components/jQuery-Mask-Plugin/dist/jquery.mask.js"></script> 
<!-- Função para campo de entrada da data -->
<script>$(document).ready(function(){
    $('#matricula').mask('000000000');   
});
</script>

</body>
</html>
