<?php
include ("inc/head.php");
include ("inc/header.php");
?>
<div class="altura">
<form class="login" action="informacoes.php" method="post">
  <div class="form-group">
    <input class="caixa-login" type="email" name="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <input class="caixa-login" type="password" name="senha" placeholder="Senha">
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
  <a href="#">FAQ</a>
  <span>|</span>
  <a href="#">Contatos</a>
  <span>|</span>
  <a href="#">Políticas de Troca e Devolução</a>
  <span>|</span>
  <a href="#">Políticas de Privacidade</a>
</div>
<div class="copyright">
  ©2018 Digital-Grupo, INC. TODOS OS DIREITOS RESERVADOS A Hector Queiróz.
</div>
</div>
</body>
</head>
