<?php
session_start();
include "inc/head.php";
// include "inc/header_deslogado.php";
try {
  $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8mb4',
'root', '');
  if ($_SESSION) {
    $query = $db->prepare("SELECT nome, id from cidades where UFs = :estado");
    $teste = $query->execute([
      ":estado" => $_SESSION["estado"]
    ]);
    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    $usuarios = $db->prepare("SELECT id from usuarios where cpf = :cpf");
    $usuarios->execute([
      ":cpf"=>$_SESSION["cpf"]
    ]);
    $array2 = $usuarios->fetch(PDO::FETCH_ASSOC);
    // var_dump($array2);
    $id = $array2["id"];
    $update = $db->prepare("UPDATE usuarios set cidades_fk = :cidade where id = :id");
    if ($_POST) {
    $update->execute([
      ":cidade"=>$_POST["cidade"],
      ":id"=>$id
    ]);
  }
    $_SESSION["logado"] = true;
    $_SESSION["visitado"] = 1;
    header ("Location: index.php");
  }
} catch (PDOException $Exception) {
    echo $Exception->getMessage;
}
?>
<div id=register2>
  <form id="form-reg-2" action="register2.php" method="post">
    <fieldset>
    <legend>Cidade:</legend>
    <label>Escolha a sua cidade: </label>
    <select name="cidade">
      <option value="null">Selecione a sua cidade</option>
      <?php foreach ($array as $key => $value): ?>
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
