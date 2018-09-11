<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
    <title></title>
    <style media="screen">
      #tutorial{
        margin-left: 400px;

      }
      body{
        background-image: url("imgs/fundojogo.jpg");

        background-repeat: no-repeat;
      }
      #botaofinalizartutorial{
        margin-left: 269px;
      }
    </style>
<script type="text/javascript">
function fechatutorial()
{
window.location="http://localhost/challenge/avc.php"; 
}
</script>
    </script>
  </head>
  <body>
    <div id="tutorial" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/tutorialmovimento.png" alt="1o slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/tutorialsaladeaula.png" alt="2o slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/tutorialbiblioteca.png" alt="3o slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/tutorialsaladeprova.png" alt="4o slide">
<button type="button" id="botaofinalizartutorial" class="btn btn-success" onclick="fechatutorial();">Finalizar tutorial</button>    </div>
  </div>
  <a class="carousel-control-prev" href="#tutorial" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#tutorial" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </body>
</html>
