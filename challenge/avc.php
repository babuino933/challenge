
<<?php session_start(); ?>>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
  <link rel="icon" href="imgs/logo_jDA_icon.ico">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <meta charset="UTF-8" />
  <title>joguenho</title>

  <script src="js/collide.js"></script>
  <script src="js/sprite.js"></script>
  <script src="js/jogador.js"></script>
  <script src="js/script.js"></script>
  <script src="js/parede.js"></script>
  <script src="js/teleport.js"></script>
  <script src="js/camera.js"></script>
  <script src="js/cseteste.js"></script>

  <style media="screen">
  #cse{
    position: fixed;
    margin-top: 450px;
    margin-left: 500px;
    visibility: hidden;
    width: 400px;
  }
  #csebd{
    visibility: hidden;
    margin-left: 300px;
    margin-top: 100px;
    position: fixed;
    background-image: url('imgs/computador.png');
    background-repeat: no-repeat;
    background-position: center;
    width: 800px;
    height: 600px;
        top: 0px;

  }
  #tela{

    margin-left: 300px;
    margin-top: 100px;
        top: 0px;
        position: absolute;
  }
  #prova{
    visibility: visible;
    position: fixed;
    height: 600px;
    width: 800px;
    background-color: black;
    margin-left: 300px;
    margin-top: 100px;
    overflow: overlay;

    padding-left: 25px;
        top: 0px;

  }
  #botaocse{
    float: right;
  }
  </style>
  <script>
  function fechacse() {
    document.getElementById("cse").style.visibility = "hidden";
    document.getElementById("csebd").style.visibility = "hidden";
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
      foreach ($arrayQuestoes as $key => $value){  ?>
        #) <?php echo $value["enunciado"]; ?>
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
        </div>
        <script>

        (function() {
          var cx = '013956736705928351261:dgwo9jpwo6m';
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        })();
        </script>
        <div id="csebd">
          <button type="button" id="botaocse" class="close" aria-label="Close" onclick="fechacse()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="cse">
          <gcse:search ></gcse:search>
        </div>

        <canvas id="tela" width="800" height="600" style="z-index:-1;"></canvas>

      </body>
      </html>
