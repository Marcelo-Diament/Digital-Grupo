<?php
session_start();
include ("inc/head.php");
include ("inc/header_deslogado.php");
$_SESSION["logado"]=false;
if ($_POST) {
  try {
    $email = $_POST["email-login"];
    $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8mb4','root', '');



    $id = $db->prepare("SELECT id, nome FROM usuarios where email = :email");
    $id->execute([
        ":email" => $email
    ]);
    $ids = $id->fetch(PDO::FETCH_ASSOC);
    $_SESSION["nome"] = $ids["nome"];
      if ($id->rowCount() > 0) {
        $senha = $db->prepare("SELECT senha FROM usuarios where id= :id");
        $senha->execute([
          ":id" => $ids["id"]
        ]);
        $senhas = $senha->fetch(PDO::FETCH_ASSOC);
        if ($senha->rowCount() > 0) {
          if (password_verify($_POST["senha-login"],$senhas["senha"])) {
            header('Location: index.php');
            $_SESSION["logado"]= true;
          }
        }else{
          echo "A senha inserida não está no nosso banco de dados";
        }
      }else{
        echo "O email inserido não está no nosso banco de dados";
      };
  } catch (PDOException $Exception) {
    echo $Exception->getMessage();
  }
}
?>
<div class="altura">
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
