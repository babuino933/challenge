<!DOCTYPE html>
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
  include_once("includes/banco_de_dados.php");
  $arrayUsuarios = select("SELECT * FROM jogadores");
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["email"] == $_SESSION["email_logado"]) {
      $arrayQuestoes = select("SELECT * FROM questoes WHERE provas_id = '{$value['nmr_prova']}'");
      $arrayProvas = select("SELECT * FROM provas WHERE id='{$value['nmr_prova']}'");
    }
  }
  ?>
  <body>

    <div id="prova">

      <form id="questionario" name ="questionario" method = "post" action="" style="color:white;">
        <?php foreach ($arrayProvas as $key => $value) {
          echo $value["nome"],"<br>";
        }
        $nmrquestao = 0;

        foreach ($arrayQuestoes as $key => $value){
          $nmrquestao += 1;
            echo  $nmrquestao,')',$value["enunciado"]; ?>
          <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="<?php  $value["id"]; ?>" value="a" >
              <label class="form-check-label" for="<?php  $value["id"]; ?>">
                <xmp><?php echo $value["alternativa_a"]; ?> </xmp>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="<?php  $value["id"]; ?>" value="b">
              <label class="form-check-label" for="<?php  $value["id"]; ?>">
                <xmp><?php echo $value["alternativa_b"]; ?> </xmp>

              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="<?php  $value["id"]; ?>" value="c" >
              <label class="form-check-label" for="<?php  $value["id"]; ?>">
                <xmp><?php echo $value["alternativa_c"]; ?> </xmp>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="<?php  $value["id"]; ?>" value="d" >
              <label class="form-check-label" for="<?php  $value["id"]; ?>">
                <xmp><?php echo $value["alternativa_d"]; ?> </xmp>
              </label>
            </div>
            <?php } ?>
            <button type="button" id="finalizaprova" class="btn btn-secondary" onclick="fechaprova()">Finalizar</button>
          </div>
  </body>
</html>
