
<?php
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
  if ($value["email"] == $_SESSION["usuario"]["email"]) {
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
      $_SESSION["questoes"] = $arrayQuestoes;
      foreach ($arrayQuestoes as $key => $value){
        $nmrquestao += 1;?>
        <xmp><?php echo  $nmrquestao,')',$value["enunciado"]; ?> </xmp>
        <br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio_<?php echo $value["id"]?>" id="aa" value="a" required >
          <label class="form-check-label" for="aa">
            <xmp><?php echo "A)",$value["alternativa_a"]; ?> </xmp>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio_<?php echo $value["id"]?>" id="bb" value="b" required>
          <label class="form-check-label" for="bb">
            <xmp><?php echo "B)",$value["alternativa_b"]; ?> </xmp>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio_<?php echo $value["id"]?>" id="cc" value="c" required>
          <label class="form-check-label" for="cc">
            <xmp><?php echo "C)",$value["alternativa_c"]; ?> </xmp>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="provaradio_<?php echo $value["id"]?>" id="dd" value="d" required>
          <label class="form-check-label" for="dd">
            <xmp><?php echo "D)",$value["alternativa_d"]; ?> </xmp>
          </label>
        </div>
<?php } ?>

        <button type="submit" id="finalizaprova" class="btn btn-secondary" >Finalizar</button>

      </div>
    </body>
    </html>
