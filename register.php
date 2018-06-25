<?php include ("inc/head.php");
include ("inc/header.php"); ?>
  <section class="register">
    <form= action="informacoes.php" method="post">
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>Nome: </b></label>
          <input class="form-control" placeholder="Nome" type="text" name="Nome" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Sobrenome: </b></label>
          <input class="form-control" placeholder="Sobrenome" type="text" name="Sobrenome" required>
        </div>
      </article>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>E-mail: </b></label>
          <input class="form-control" placeholder="Ex: seu-email@email.com" type="email" name="E-mail" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Confirme seu e-mail: </b></label>
          <input class="form-control" placeholder="EX: seu-email@email.com" type="email" name="E-mail_confirm" required>
        </div>
      </article>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>Senha: </b></label>
          <input class="form-control" placeholder="*********" type="password" name="Senha" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Confirme sua senha: </b></label>
          <input class="form-control" placeholder="*********" type="password" name="Senha" required>
        </div>
      </article>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>CPF: </b></label>
          <input class="form-control" placeholder="123.456.789-00" type="tel" name="telefone" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Telefone: </b></label>
          <input class="form-control" placeholder="1234-5678" type="number" name="cpf" required>
        </div>
      </article>
      <div class="form-group row">
        <div class="col-sm-1"></div>
        <label><b>Gênero: </b></label>
        <div>
          <label class="radio-inline">
            <input type="radio" name="genero" value="Masculino"> Masculino
          </label>
          <label class="radio-inline">
            <input type="radio" name="genero" value="Feminino"> Feminino
          </label>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-1">
        </div>
        <label><b>Data de Nascimento: </b></label>
        <input type="date" name="nascimento" value="">
      </div>
      <input class="teste" type="submit" name="enviar" value="Finalizar Cadastro">
      <input class="teste" type="reset" name="limpar" value="Limpar"><br>
      <label>Possui uma conta? </label>
      <a href="login.php">Entrar</a>
    </form>
  </section>

<?php include ("inc/footer.php") ?>
