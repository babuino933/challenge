<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
    <link rel="stylesheet" type="text/css" href="css/cadastrostyle.css"/>
  <link rel="icon" href="imgs/logo_jDA_icon.ico">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <meta charset="utf-8">
  <title></title>
  <style media="screen">


  body {
    background-image: url("imgs/fundocadastro.png");
    background-repeat: no-repeat;
    }

  </style>
</head>
<body class="text-center">
  <form class="form-signin" action="verificcadastro.php" method="post">
    <br>
    <br>




    <div class="form-group row">
      <label for="inputnome" id="nome_cadastro" class="col-2  col-form-label newFont">Nome</label>
      <div class="col-10">
        <input type="text" id="inputnome" class="form-control inputForm" name="inputnome" autofocus>
      </div>
    </div>


      <div class="form-group row">
      <label for="inputsobrenome" id="sobrenome_cadastro" class="col-2 col-form-label newFont">Sobrenome</label>
      <div class="col-10">
      <input type="text" id="inputsobrenome" class="form-control inputForm" name="inputsobrenome" autofocus>
      </div>
      </div>

    <div class="form-group row">
    <label id="sexo_cadastro" class="col-2 col-form-label newFont">Sexo</label>
    <div class="col-10">
    <input type="text" id="inputsexo" class="form-control inputForm" name="inputsexo" autofocus>
    </div>
    </div>

<div id="masc_radio">
    <div class="form-check form-check-inline" >
    <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label newFont" for="inlineRadio1">Masculino</label>
  </div>
  <div class="form-check form-check-inline" id="fem_radio">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label newFont" for="inlineRadio2">Feminino</label>
  </div>
</div>







    <div class="form-group row">
        <label for="inputusuario" id="usuario_cadastro" class="col-2 col-form-label newFont">Usuário</label>
      <div class="col-10">
        <input type="text" id="inputusuario" class="form-control inputForm" name="inputusuario" autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputemail" id="email_cadastro" class="col-5 col-form-label newFont">E-mail</label>
      <div class="col-7">
        <input type="email" id="inputemail" class="form-control inputForm" name="inputemail" autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputsenha" id= "senha_cadastro" class="col-2 col-form-label newFont">Senha</label>
      <div class="col-10">
        <input type="password" id="inputsenha" class="form-control inputForm" name="inputsenha" autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputcsenha" id= "csenha_cadastro" class="col-5 col-form-label newFont">Confirmar senha</label>
      <div class="col-7 ">
        <input type="password" id="inputcsenha" class="form-control inputForm" name="inputcsenha" autofocus>
      </div>
    </div>


    <div class="form-group row">
      <label for="inputdatanasc" id="dnasc_cadastro" class="col-6 col-form-label newFont">Data de nascimento</label>
      <div class="col-6">
        <input type="date" id="inputdatanasc" class="form-control inputForm" name="inputdatanasc" autofocus>
      </div>
    </div>
<br>

    <button id= "botao_cadastrar" class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
  </form>
</body>
</html>
