
<?php session_start();
include_once("includes/banco_de_dados.php");
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <script>
  function fechaprova() {
    document.getElementById("prova").style.visibility = "hidden";

  }
  </script>
</head>
<?php

$arrayUsuarios = select("SELECT * FROM jogadores");
foreach ($arrayUsuarios as $key => $value) {
  if ($value["email"] == $_SESSION["email_logado"]) {
    $_SESSION["id"] = $value["id"];
    $arrayQuestoes = select("SELECT * FROM questoes WHERE provas_id = '{$value['nmr_prova']}'");
    $arrayProvas = select("SELECT * FROM provas WHERE id='{$value['nmr_prova']}'");
  }
}
?>
<body>

  <div id="prova">

    <form id="questionario" name ="questionario" method = "post" action="validaprova.php" style="color:white;">
      <?php foreach ($arrayProvas as $key => $value) {
        echo $value["nome"],"<br>";
      }
      $nmrquestao = 0;

      foreach ($arrayQuestoes as $key => $value){
        $nmrquestao += 1;?>
        <xmp><?php echo  $nmrquestao,')',$value["enunciado"]; ?> </xmp>
        <br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio" id="aa" value="a" >
          <label class="form-check-label" for="aa">
            <xmp><?php echo "A)",$value["alternativa_a"]; ?> </xmp>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio" id="bb" value="b">
          <label class="form-check-label" for="bb">
            <xmp><?php echo "B)",$value["alternativa_b"]; ?> </xmp>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio" id="cc" value="c" >
          <label class="form-check-label" for="cc">
            <xmp><?php echo "C)",$value["alternativa_c"]; ?> </xmp>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio" id="dd" value="d" >
          <label class="form-check-label" for="dd">
            <xmp><?php echo "D)",$value["alternativa_d"]; ?> </xmp>
          </label>
        </div>
<?php } ?>

        <button type="submit" id="finalizaprova" class="btn btn-secondary" >Finalizar</button>
        //onclick="fechaprova()"
      </div>
    </body>
    </html>
