
<<?php session_start(); ?>>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="css/csestyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/provastyle.css"/>
  <link rel="icon" href="imgs/logo_jDA_icon.ico">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <meta charset="UTF-8" />
  <title>A Vida Cobra os Estudos</title>

  <script src="js/collide.js"></script>
  <script src="js/sprite.js"></script>
  <script src="js/jogador.js"></script>
  <script src="js/script.js"></script>
  <script src="js/parede.js"></script>
  <script src="js/teleport.js"></script>
  <script src="js/camera.js"></script>
  <script src="js/cseteste.js"></script>
  <script src="js/prova.js"></script>

  <style media="screen">

  #tela{

    margin-left: 300px;
    margin-top: 100px;
        top: 0px;
        position: absolute;
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
 include_once("montaprova.php");
include_once("csebody.php");
?>

<body>
        <canvas id="tela" width="800" height="600" style="z-index:-1;"></canvas>

      </body>
      </html>
