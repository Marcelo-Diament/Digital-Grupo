<?php include ("inc/head.php");
include ("inc/header.php") ?>
  <form class="" action="informacoes.php" method="post">
    <section>
      <label>Nome Completo: </label>
      <input placeholder="Nome Completo" type="text" name="Nome" required><br>
      <label>CPF: </label>
      <input placeholder="111.222.333-44" type="number" name="CPF" required><br>
      <label>E-mail: </label>
      <input placeholder="seu-email@email.com" type="email" name="E-mail" required><br>
      <label>Telefone: </label>
      <input placeholder="(11)99999-9999" type="tel" name="Telefone" required><br>
      <label>Senha: </label>
      <input placeholder="*********" type="password" name="Senha" required><br>
      <label>Sexo: </label><br>
      <input type="radio" name="Sexo" value="Masculino">
      <label>Masculino </label>
      <input type="radio" name="Sexo" value="Feminino">
      <label>Feminino </label><br>
      <input type="checkbox" name="promocoes">
      <label>Desejo receber novidades sobre as promoções</label><br>
      <input type="submit" name="enviar" value="Finalizar Cadastro">
      <input type="reset" name="limpar" value="Limpar"><br
      <label>Possui uma conta? </label>
      <a href="login.php">Entrar</a>
    </section>
  </form>
<?php include ("inc/footer.php") ?>
