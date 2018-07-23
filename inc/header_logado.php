<header id = "header_logado">
  <img src="assets/images/logo.png" alt="Logo do Digital Grupo" height="75px">
  <ul>
    <li><a href="produtos.php">Produtos</a></li>
    <li><a href="politicas-e-termos.php">Políticas e Termos</a></li>
    <li><a href="sobre.php">Sobre Nós</a></li>
    <li><a href="contato.php">Contato</a></li>
    <span>
      <b>Olá <?php echo $_SESSION["nome"] ?></b>
      <a href="destroy.php">Deslogar</a>
    </span>
  </ul>
  <a href="#"><i class="fas fa-shopping-cart"></i></a>
  <b id="contador">
    <?php
    $_SESSION["numero"] = 0;
    echo $_SESSION["numero"];
    ?>
  </b>
</header>
