<?php
include ("inc/head.php");
//include ("inc/header.php");
?>
<div class="conteiner-login">
<form class="login" action="informacoes.php" method="post">
  <input type="email" name="email" placeholder="E-mail"><br>
  <input type="password" name="senha" placeholder="Senha"><br>
  <input type="submit" name="enviar" value="Logar"><br>
</form>
<p>ou
</p>
  <button type="button" name="button">Entrar com Facebook</button>
</div>

<?php include("inc/footer.php") ?>
