<?php

class Login{

  private $email;
  private $senha;
  private $db;

  public function __construct($email, $senha,$db){
    $this->email = $email;
    $this->senha = $senha;
    $this->db = $db;
  }

  public function Validacao(){
    try {
      $id = $this->db->prepare("SELECT id, nome FROM usuarios where email = :email");
      $id->execute([
          ":email" => $this->email
      ]);
      $ids = $id->fetch(PDO::FETCH_ASSOC);
      $_SESSION["nome"] = $ids["nome"];
        if ($id->rowCount() > 0) {
          $senha = $this->db->prepare("SELECT senha FROM usuarios where id= :id");
          $senha->execute([
            ":id" => $ids["id"]
          ]);
          $senhas = $senha->fetch(PDO::FETCH_ASSOC);
          if ($senha->rowCount() > 0) {
            if (password_verify($this->senha,$senhas["senha"])) {
              $_SESSION["visitado"] = 1;
              $_SESSION["logado"]= true;
              header('Location: index.php');
            }else{?>
              <div class="alerta alert alert-warning" role="alert">
                Senha inválida.
              </div>
              <?php
            }
          }
        }else{?>
            <div class="alerta alert alert-warning" role="alert">
              E-mail Inválido.
            </div>
        <?php
        };
    } catch (PDOException $Exception) {
      echo $Exception->getMessage();
    }
  }

}
?>
