<?php
session_start();
include ("inc/head.php");
include ("inc/header_deslogado.php");
include ("classes/Login.php");
$_SESSION["logado"]=false;
$db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8mb4','root', '');
if ($_POST) {
  $login = new Login($_POST["email-login"],$_POST["senha-login"],$db);
  $login->validacao();
}
?>
<div class="altura">
  <div id="log-subtitulo">
    <h2>Login</h2>
  </div>
  <form class="login" action="login.php" method="post">
    <div class="form-group">
      <input class="caixa-login" type="email" name="email-login" placeholder="E-mail">
    </div>
    <div class="form-group">
      <input class="caixa-login" type="password" name="senha-login" placeholder="Senha">
        </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input checkbox">
        <label class="form-check-label logado"> Permanecer logado</label>
    </div>
    <div>
      <input class="btn btn-primary botao-logar" type="submit" name="enviar" value="Logar">
    </div>

  <p class="ou">ou</p>
    <button class="botao-entrar" type="button" name="button">Entrar com Facebook</button><br>
    <a class="criar-conta"href="register.php">Criar uma conta</a>
  </form>
<div class="footer-links">
  <a href="FAQ.php">FAQ</a>
  <span>|</span>
  <a href="contato.php">Contatos</a>
  <span>|</span>
  <a href="#">Políticas de Troca e Devolução</a>
  <span>|</span>
  <a href="políticas-e-termos.php">Políticas de Privacidade</a>
</div>
<div class="copyright">
  ©2018 Digital-Grupo, INC. TODOS OS DIREITOS RESERVADOS A Hector Queiróz.
</div>
</div>
</body>
</head>
