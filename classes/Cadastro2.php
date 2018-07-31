<?php

class Cadastro2{

  private $cidade;
  private $db;

  public function __construct($cidade,$db){
    $this->cidade = $cidade;
    $this->db = $db;
  }

  public function Inserir(){
    try {
          $query = $this->db->prepare("SELECT nome, id from cidades where UFs = :estado");
          $teste = $query->execute([
            ":estado" => $_SESSION["estado"]
          ]);
          $_SESSION["array"] = $query->fetchAll(PDO::FETCH_ASSOC);
          $usuarios = $this->db->prepare("SELECT id from usuarios where cpf = :cpf");
          $usuarios->execute([
            ":cpf"=>$_SESSION["cpf"]
          ]);
          $array2 = $usuarios->fetch(PDO::FETCH_ASSOC);
          $id = $array2["id"];
            if ($_POST) {
              $update = $this->db->prepare("UPDATE usuarios set cidades_fk = :cidade where id = :id");
              $update->execute([
                ":cidade"=>$this->cidade,
                ":id"=>$id
              ]);
              $_SESSION["logado"] = true;
              $_SESSION["visitado"] = 1;
              header ("Location: index.php");
            }
        }catch (PDOException $Exception) {
          echo $Exception->getMessage;
      }
    }
}

?>
