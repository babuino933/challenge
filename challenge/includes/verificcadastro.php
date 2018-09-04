<?php
session_start();
$jacadastrado = 0;
include_once("banco_de_dados.php");
$arrayUsuarios = select("SELECT * FROM jogadores");
if (isset($_POST["inputusuario"])) {
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["usuario"] == $_POST["inputusuario"] || $value["email"] == $_POST["inputemail"]) {
      $jacadastrado += 1;
      echo "<script>alert('Usuario ja cadastrado')</script>";
      break;
    }
  }
  if ($jacadastrado == 0) {
    $data_atual = date('Y/m/d H:i:s');
    $cadastrou = php_insert("INSERT INTO jogadores VALUES (DEFAULT,'{$_POST['inputnome']}','{$_POST['inputsobrenome']}','{$_POST['inputusuario']}','0','$data_atual','{$_POST['inputemail']}','{$_POST['inputsenha']}','{$_POST['inputdatanasc']}')");
    if ($cadastrou == 1) {
      echo "<script>alert('Cadastrado com sucesso')</script>";
      header("Location: http://localhost/challenge/index.php");
    }else{
      echo "<script>alert('Erro ao cadastrar')</script>";
    }
  }
}
if(isset($_POST["email"])){
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["email"] == $_POST["email"] || $value["senha"] == $_POST["senha"]) {
      $_SESSION["email_logado"] = $_POST["email"];

      header("Location: http://localhost/challenge/avc.php"); /* Redirect browser */
exit();
      break;
    }
  }
}





?>
