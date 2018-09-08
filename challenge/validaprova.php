<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <script type="text/javascript">

  </script>
</head>
<body>
  <?php
  include_once("includes/banco_de_dados.php");
  //tava dando erro com o numero da prova
  $arrayUsuarios = select("SELECT * FROM jogadores WHERE id = {$_SESSION['usuario']['id']}");
  foreach ($arrayUsuarios as $key => $value) {
      $_SESSION["usuario"] = $value;
    }
  foreach($_SESSION["questoes"] as $key=>$value){
    $escolha = @$_POST['provaradio_'.$value["id"]]; // Usado @, já que vai ser testado em seguida.
    if ($escolha == 'a') {
      $resposta = 'A';
    }else if($escolha == 'b') {
      $resposta = 'B';
    }else if ($escolha == 'c') {
      $resposta = 'C';
    }else if ($escolha == 'd'){
      $resposta = 'D';
    }
    $prova_finalizada = php_insert("INSERT INTO jogadores_has_questoes VALUES ({$_SESSION["usuario"]["id"]},{$value["id"]}, '{$resposta}')");
    if ($resposta == $value["correta"]) {

        $_SESSION["usuario"]["pontuacao"] = ( (1  + $_SESSION["usuario"]["pontuacao"] ) / ($_SESSION["usuario"]["nmr_prova"] * $_SESSION["usuario"]["nivel_prova"] ) );
       $pontuacao = sql_delete_update("UPDATE jogadores SET pontuacao = {$_SESSION["usuario"]["pontuacao"]} WHERE id = {$_SESSION['usuario']['id']}");
    }
  }
  if ($prova_finalizada == 1) {
    $nmr_prova_atual = $_SESSION["usuario"]["nmr_prova"];
    $nivel_prova_atual = $_SESSION["usuario"]["nivel_prova"];
    $usuario_provas_feitas = $_SESSION["usuario"]["provas_feitas"];
    $usuario_provas_feitas += 1;
    if($usuario_provas_feitas == 3 ){
      $nivel_prova_atual += 1 ;
      $nmr_prova_atual += 1;
      $usuario_provas_feitas = 0;
      $mudar_nivel = sql_delete_update("UPDATE jogadores SET nivel_prova= {$nivel_prova_atual}, nmr_prova = {$nmr_prova_atual}, provas_feitas = {$usuario_provas_feitas} WHERE id = {$_SESSION['usuario']['id']}");

    }else if($usuario_provas_feitas != 3){
      $nmr_prova_atual += 1;
      $mudar_nivel = sql_delete_update("UPDATE jogadores SET nmr_prova = {$nmr_prova_atual},provas_feitas = {$usuario_provas_feitas} WHERE id = {$_SESSION['usuario']['id']}");
      }

    header("Location: http://localhost/challenge/avc.php");
  }
  ?>

</body>
</html>
