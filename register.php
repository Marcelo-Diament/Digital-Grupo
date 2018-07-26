<?php
session_start();
include ("inc/head.php");
include ("inc/header_deslogado.php");

$db_command = "mysql:host=localhost;dbname=ecommerce;charset=utf8mb4";
$db_user = "root";
$db_password = "";
$db = new PDO($db_command,$db_user,$db_password);
try {
  if($_POST){
  $_SESSION["nome"] = $_POST["nome"];
  $email = $db->prepare("SELECT * from usuarios where email = :email");
  $email->execute([
    ":email" => $_POST["email"]
  ]);
  $cpf = $db->prepare("SELECT * from usuarios where cpf = :cpf");
  $cpf->execute([
    ":cpf" => $_POST["cpf"]
  ]);
  if ($_POST["genero"] == null) {?>
    <div class="alert alert-warning alerta" role="alert">
      Selecione um gênero
    </div>
    <?php
  }else{
    if ($email->rowCount() > 0){?>
      <div class="alert alert-warning alerta" role="alert">
        O email inserido já está cadastrado.
      </div>
      <?php
    }else{
      if($cpf->rowCount() > 0){?>
        <div class="alert alert-warning alerta" role="alert">
          O cpf inserido já está cadastrado.
        </div>
        <?php
      }else{
          if ($_POST["senha"] == $_POST["senha_confirm"] && $_POST["email"] == $_POST["email_confirm"]) {

            $hash = password_hash($_POST["senha"],PASSWORD_DEFAULT);
            $usuarios = $db->prepare("INSERT into usuarios(nome,sobrenome,email,senha,cpf,telefone,genero,CEP,numero,bairro,uf_fk,data_nascimento) values (:nome,:sobrenome,:email,:senha,:cpf,:telefone,:genero,:CEP,:numero,:bairro,:uf_fk,:data)");
            $oi = $usuarios->execute([
              ':nome' => $_POST["nome"],
              ":sobrenome" => $_POST["Sobrenome"],
              ":email" => $_POST["email"],
              ":senha" => $hash,
              ":cpf" => $_POST["cpf"],
              ":telefone" => $_POST["telefone"],
              ":genero" => $_POST["genero"],
              ":CEP" => $_POST["cep"],
              ":numero" => $_POST["number"],
              ":bairro" => $_POST["bairro"],
              ":uf_fk" => $_POST["estado"],
              ":data" => $_POST["nascimento"]
            ]);
            var_dump($oi);
            $_SESSION["estado"] = $_POST["estado"];
            $_SESSION["cpf"] = $_POST["cpf"];
            header('Location: register2.php');
        }else{?>
          <div class="alert alert-warning alerta" role="alert">
            O email ou senha está diferente de seu reespectivo campo de confirmação
          </div><?php
        }
      }
     }
  }
 }
}
  catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
?>
  <section class="register">
    <form action="register.php" method="post">
      <div id="reg-subtitulo">
        <h2>Cadastro</h2>
      </div>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>Nome: </b></label>
          <input class="form-control" placeholder="Nome" type="text" name="nome" required>
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
          <input class="form-control" placeholder="Ex: seu-email@email.com" type="email" name="email" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Confirme seu e-mail: </b></label>
          <input class="form-control" placeholder="EX: seu-email@email.com" type="email" name="email_confirm" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
        </div>
      </article>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>Senha: </b></label>
          <input class="form-control" placeholder="*********" type="password" name="senha" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Confirme sua senha: </b></label>
          <input class="form-control" placeholder="*********" type="password" name="senha_confirm" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
        </div>
      </article>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>CPF: </b></label>
          <input class="form-control" placeholder="123.456.789-00" type="number" name="cpf" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Telefone: </b></label>
          <input class="form-control" placeholder="1234-5678" type="number" name="telefone" required>
        </div>
      </article>
      <article class="row">
        <div class="col-sm-1">
        </div>
        <div class="form-group col-sm-5">
          <label for=""><b>Celular: </b></label>
          <input class="form-control" type="text" name="celular" placeholder="91234-5678">
        </div>
      </article>
      <article class="form-group row gender">
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
      </article>
      <article class="form-group row date">
        <div class="col-sm-1">
        </div>
        <label><b>Data de Nascimento: </b></label>
        <input type="date" name="nascimento" value="">
      </article>

      <h3>Endereçamento</h3>

      <article class="row">
        <div class="col-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>CEP:</b></label>
          <input class="form-control" type="text" name="cep" placeholder="00000-000" required>
          <small><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">Não sei meu CEP</a></small>
        </div>
      </article>
      <article class="row">
        <div class="col-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>Número: </b></label>
          <input class="form-control" type="text" name="number" placeholder="987" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Complemento: </b> (Opcional)</label>
          <input class="form-control" type="text" name="complemento" placeholder="12">
        </div>
      </article>
      <article class="row">
        <div class="col-1">
        </div>
        <div class="form-group col-sm-5">
          <label><b>Bairro: </b></label>
          <input class="form-control" type="text" name="bairro" placeholder="987" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Estado: </b></label>
          <select class="form-control" name="estado" required>
            <option value="null">Selecione seu estado</option>
            <option value="1">Acre</option>
            <option value="2">Alagoas</option>
            <option value="3">Amapá</option>
            <option value="4">Amazonas</option>
            <option value="5">Bahia</option>
            <option value="6">Ceará</option>
            <option value="7">Distrito Federal</option>
            <option value="8">Espírito Santo</option>
            <option value="9">Goiás</option>
            <option value="10">Maranhão</option>
            <option value="11">Mato Grosso</option>
            <option value="12">Mato Grosso do Sul</option>
            <option value="13">Minas Gerais</option>
            <option value="14">Pará</option>
            <option value="15">Paraiba</option>
            <option value="16">Paraná</option>
            <option value="17">Pernambucp</option>
            <option value="18">Piauí</option>
            <option value="19">Rio de Janeiro</option>
            <option value="20">Rio Grande do Norte</option>
            <option value="21">Rio Grande do Sul</option>
            <option value="22">Rondônia</option>
            <option value="23">Roraima</option>
            <option value="24">Santa Catarina</option>
            <option value="25">São Paulo</option>
            <option value="26">Sergipe</option>
            <option value="27">Tocantins</option>
          </select>
        </div>
      </article>
      <div class="check-terms">
        <label>
          <input type="checkbox" name="terms">Aceito reservar todos os meus direitos à Hector Queiróz.
        </label>
      </div>
      <div class="register-buttons">
        <input type="submit" name="enviar" value="Finalizar Cadastro">
        <input type="reset" name="limpar" value="Limpar">
      </div>
      <span>
        <a href="login.php">Já possui uma conta?</a>
      </span>
    </form>
  </section>

<?php include ("inc/footer.php") ?>
