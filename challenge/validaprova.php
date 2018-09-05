<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  include_once("includes/banco_de_dados.php");
  $arrayUsuarios = select("SELECT * FROM jogadores");
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["email"] == $_SESSION["email_logado"]) {
      $_SESSION["id"] = $value["id"];
    }
  }
  $escolha = @$_POST['provaradio']; // Usado @, já que vai ser testado em seguida.
  if ($escolha == 'a') {
    $resposta = 'a';
  }else if($escolha == 'b') {
    $resposta= 'b';
  }else if ($escolha == 'c') {
    $resposta= 'c';
  }else if ($escolha == 'd'){
    $resposta= 'd';
  }


 // echo "INSERT INTO jogadores_has_questoes VALUES ('{$_SESSION["id"]}','{$value["id"]}', '{$resposta}')";
  $prova_finalizada = php_insert("INSERT INTO jogadores_has_questoes VALUES ('{$_SESSION["id"]}','{$value["id"]}', '{$resposta}', DEFAULT)");
  if ($prova_finalizada == 1) {
    echo "<script>alert('Finalizada com sucesso')</script>";

  }
  ?>

</body>
</html>
