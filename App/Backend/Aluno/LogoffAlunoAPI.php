<?php 

session_start();
session_destroy();

unset($_SESSION['idAluno']);
unset($_SESSION['nome']);
unset($_SESSION['matricula']);
unset($_SESSION['login']);


 ?>