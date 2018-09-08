
<?php session_start();
include_once("mostraprovas.php")
?>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="css/csestyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/provastyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/passounivelstyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/mostraprovastyle.css"/>
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
  #navbar{
    top: -325px;
  left: 300px;
  width: 800px;
  }


  </style>
  <script>
  function fechacse() {
    document.getElementById("cse").style.visibility = "hidden";
    document.getElementById("csebd").style.visibility = "hidden";
  }
// function logout() {
//   session_destroy();
//   window.location = "http://localhost/challenge/index.php";
// }

  </script>
</head>
<?php
 include_once("montaprova.php");
include_once("csebody.php");
include_once("mostraprovas.php");
include_once("passounivel.php");
?>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" id="navbar">
    <a class="navbar-brand" >
      <img src="imgs/logo.png" width="40" height="40" alt="">
    </a>
    <button class="navbar-toggler" type="button"id="navbaricon" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <button class="btn btn-sm btn-outline-secondary" type="button" onclick="mostraprovas();">Smaller button</button>
        </li>
        <!-- <li class="nav-item">
            <img src="imgs/logout.png" width="40" height="40" onclick="logout();" alt="">
        </li> -->
      </ul>
    </div>
  </nav>
        <canvas id="tela" width="800" height="600" style="z-index:-1;"></canvas>

      </body>
      </html>
