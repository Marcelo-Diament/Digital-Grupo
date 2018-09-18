<?php

class Cadastro{

  private $nome;
  private $sobrenome;
  private $email;
  private $email_confirm;
  private $senha;
  private $senha_confirm;
  private $cpf;
  private $genero;
  private $telefone;
  private $celular;
  private $cep;
  private $numero;
  private $bairro;
  private $estado;
  private $cidade;
  private $data_nascimento;
  private $db;
  private $validacao;

  public function __construct($nome,$sobrenome,$email,$email_confirm,$senha,$senha_confirm,$cpf,$genero,$telefone,$celular,$cep,$numero,$bairro,$estado,$cidade,$data_nascimento,$db){
    $this->nome = $nome;
    $this->sobrenome =$sobrenome;
    $this->email = $email;
    $this->email_confirm = $email_confirm;
    $this->senha = $senha;
    $this->senha_confirm = $senha_confirm;
    $this->cpf = $cpf;
    $this->genero = $genero;
    $this->telefone = $telefone;
    $this->celular = $celular;
    $this->cep = $cep;
    $this->numero = $numero;
    $this->bairro = $bairro;
    $this->estado = $estado;
    $this->cidade = $cidade;
    $this->data_nascimento = $data_nascimento;
    $this->db = $db;
  }

  public function Validacao(){
    try {
      $_SESSION["nome"] = $this->nome;
      $email = $this->db->prepare("SELECT * from usuarios where email = :email");
      $email->execute([
        ":email" => $this->email
      ]);
      $cpf = $this->db->prepare("SELECT * from usuarios where cpf = :cpf");
      $cpf->execute([
        ":cpf" => $this->cpf
      ]);
        if ($this->genero == null) {?>
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
                if ($this->senha == $this->senha_confirm && $this->email == $this->email_confirm) {
                  $this->validacao = true;
              }else{?>
                <div class="alert alert-warning alerta" role="alert">
                  O email ou senha está diferente de seu reespectivo campo de confirmação
                </div><?php
              }
            }
           }
          }
     }
      catch (PDOException $Exception) {
        echo $Exception->getMessage();
    }
  }

  public function SalvarDados(){
    if ($this->validacao){
      $hash = password_hash($this->senha,PASSWORD_DEFAULT);
      $usuarios = $this->db->prepare("INSERT into usuarios(nome,sobrenome,email,senha,cpf,telefone,genero,CEP,numero,bairro,uf_fk,data_nascimento,celular) values (:nome,:sobrenome,:email,:senha,:cpf,:telefone,:genero,:CEP,:numero,:bairro,:uf_fk,:data,:celular,:cidades_fk)");
      $usuarios->execute([
        ':nome' => $this->nome,
        ":sobrenome" => $this->sobrenome,
        ":email" => $this->email,
        ":senha" => $hash,
        ":cpf" => $this->cpf,
        ":telefone" => $this->telefone,
        ":genero" => $this->genero,
        ":CEP" => $this->cep,
        ":numero" => $this->numero,
        ":bairro" => $this->genero,
        ":uf_fk" => $this->estado,
        ":data" => $this->data_nascimento,
        ":celular" => $this->celular,
        ":cidades_fk" => $this->cidade
      ]);
      $_SESSION["estado"] = $this->estado;
      $_SESSION["cpf"] = $this->cpf;
      $_SESSION["logado"] = true;
      $_SESSION["visitado"] = 1;
      header ("Location: index.php");
  }
 }
}
?>
