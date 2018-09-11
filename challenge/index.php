

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/signin.css"/>
    <link rel="stylesheet" type="text/css" href="css/rankingstyle.css"/>
    <link rel="icon" href="imgs/logo_jDA_icon.ico">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="description" content="pagina de jogo online">
    <meta name="author" content="senaigames">
    <title>Login</title>
    <style media="screen">
    body {
      background-image: url("imgs/cadernologin.png");
      background-repeat: no-repeat;
      background-position: center;

      }
      #login{

      }
    </style>
<?php include_once("ranking.php") ?>
<script type="text/javascript">
  function abreranking() {
    document.getElementById('divranking').style.visibility="visible";
    document.getElementById('botaosairranking').style.visibility="visible"


  }
</script>
  </head>
  <body class="text-center" >


    <form class="form-signin" method="post" action="includes/verificcadastro.php">
          <img class="mb-4" src="imgs/logo.png" alt="" width="150" height="180">
          <h1 class="h3 mb-3 font-weight-normal" style="color:white;">LOGIN</h1>
          <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
          <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          <a href="cadastro.php">Ainda não sou cadastrado</a><br>

          <img src="imgs/livrodourado.png" id="rankingopen" onclick="abreranking()">
          <p class="mt-5 mb-3 text-muted">copelraite 2017-2018</p>
        </form>
  </body>
</html>
