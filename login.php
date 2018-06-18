<?php
include ("inc/head.php");
include ("inc/header.php");
?>
<form class="login" action="informacoes.php" method="post">
  <div class="form-group">
    <input type="email" name="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <input type="password" name="senha" placeholder="Senha">
    <small class="form-text text-muted">Vamos roubar a sua senha</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">Permanecer logado</label>
  </div>
  <div>
    <input class="btn btn-primary" type="submit" name="enviar" value="Logar">
  </div>
</form>
<p>ou</p>
  <button type="button" name="button">Entrar com Facebook</button><br>
  <a href="register.php">Criar uma conta</a>
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
</body>
</head>
