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


    <p class="login-box-msg">Login</p>


    <form class="" data-toggle="validator">

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
        <small class="help-block with-errors"></small>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="senha" placeholder="senha" required="true" data-minlength="8" data-error="senha tem que ter no minimo 8 caracteres!">
        <small class="help-block with-errors"></small>
      </div>
       <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="repetir senha" required="true" data-match="#senha" data-error="senha tem que ser igual!">
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




    <form>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-info btn-block btn-flat"><h5>CRIAR</h4></button>
          <br>
          <p class="abrir">Já está registrado?  <a href="#">Entre aqui</a></p>
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

</body>
</html>
