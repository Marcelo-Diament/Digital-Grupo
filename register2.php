<?php
session_start();
include "inc/head.php";
include "inc/header_deslogado.php";
include "classes/Cadastro2.php";
$db = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8mb4","root","");
  if($_POST){
  $cadastro = new Cadastro2($_POST["cidade"],$db);
  $cadastro->Inserir();
}else{
  $cadastro = new Cadastro2(1,$db);
}
?>
<div id=register2>
  <form id="form-reg-2" action="register2.php" method="post">
    <fieldset>
    <legend>Cidade:</legend>
    <label>Escolha a sua cidade: </label>
    <select name="cidade">
      <option value="null">Selecione a sua cidade</option>
      <?php foreach ($_SESSION["array"] as $key => $value): ?>
        <option value="<?php echo $value["id"]?>"><?php echo $value["nome"]?></option>
      <?php endforeach; ?>
    </select></br>
    <input type="submit" value="Enviar">
  </fieldset>
</form>
</div>

<?php
include "inc/footer.php";
?>
