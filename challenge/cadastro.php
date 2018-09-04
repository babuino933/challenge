
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  body {
    background-image: url("imgs/cadernocadastro.png");
    background-repeat: no-repeat;


    }
  </style>
</head>
<body>

  <form action="includes/verificcadastro.php" class="form-signin" method="post">
    <h1 class="h3 mb-3 font-weight-normal">plisignin</h1>
    <br>
    <input type="text" id="inputnome" name="inputnome" placeholder="Nome" autofocus>
    <br>
    <input type="text" id="inputsobrenome" name="inputsobrenome" placeholder="Sobrenome" required>
    <br>
    <input type="text" id="inputusuario" name="inputusuario" placeholder="Usuario" required>
    <br>
    <input type="email" id="inputemail" name="inputemail" placeholder="E-mail" required>
    <br>
    <input type="password" id="inputsenha" name="inputsenha" placeholder="Senha" required>
    <br>
    <input type="date" id="inputdatanasc" name="inputdatanasc" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  </form>
</body>
</html>
