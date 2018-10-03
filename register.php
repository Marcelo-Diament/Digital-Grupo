<?php
session_start();
include ("inc/head.php");
include ("inc/header_deslogado.php");
include ("classes/Cadastro.php");

$db_command = "mysql:host=digitalgrupo.mysql.dbaas.com.br;dbname=digitalgrupo;charset=utf8mb4";
$db_user = "digitalgrupo";
$db_password = "DG123*";
$db = new PDO($db_command,$db_user,$db_password);
$cidades = $db->query('SELECT * from cidades');
$resultado = $cidades->fetchAll(PDO::FETCH_ASSOC);
if($_POST){
  $cadastro = new Cadastro($_POST["nome"],$_POST["sobrenome"],$_POST["email"],$_POST["email_confirm"],$_POST["senha"],$_POST["senha_confirm"],$_POST["cpf"],$_POST["genero"],$_POST["telefone"],$_POST["celular"],$_POST["cep"],$_POST["numero"],$_POST["bairro"],$_POST["estado"],$_POST["cidade"],$_POST["nascimento"],$db);
  $cadastro->Validacao();
  $cadastro->SalvarDados();
}
?>
  <section class="register">
    <form action="register.php" method="post">
      <div id="reg-subtitulo">
        <h2>Cadastro</h2>
      </div>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>Nome: </b></label>
          <input style="color:#fff !important;" class="form-control" placeholder="EX: Silvio" type="text" name="nome" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Sobrenome: </b></label>
          <input style="color:#fff !important;" class="form-control" placeholder="EX: Santos" type="text" name="sobrenome" required>
        </div>
      </article>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>E-mail: </b></label>
          <input style="color:#fff !important;" class="form-control" placeholder="Ex: seu-email@email.com" type="email" name="email" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Confirme seu e-mail: </b></label>
          <input style="color:#fff !important;" class="form-control" type="email" name="email_confirm" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
        </div>
      </article>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>Senha: </b></label>
          <input style="color:#fff !important;" class="form-control" placeholder="EX:123" type="password" name="senha" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Confirme sua senha: </b></label>
          <input style="color:#fff !important;" class="form-control" type="password" name="senha_confirm" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off>
        </div>
      </article>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>CPF: </b></label>
          <input style="color:#fff !important;" class="form-control" placeholder="EX: 123.456.789-00" type="number" name="cpf" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Telefone: </b></label>
          <input style="color:#fff !important;" class="form-control" placeholder="EX: 1234-5678" type="number" name="telefone" required>
        </div>
      </article>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label for=""><b>Celular: </b></label>
          <input style="color:#fff !important;" class="form-control" type="text" name="celular" placeholder="EX: 91234-5678">
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
        <input style="color:#fff !important;" type="date" name="nascimento">
      </article>

      <h3>Endereçamento</h3>

      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>CEP:</b></label>
          <input style="color:#fff !important;" class="form-control" type="text" name="cep" placeholder="EX: 00000-000" required>
          <small><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">Não sei meu CEP</a></small>
        </div>
        <div class="form-group offset-1 col-sm-5">
          <label><b>Rua:</b></label>
          <input style="color:#fff !important;" class="form-control" type="text" name="rua" placeholder="rua" required>
        </div>
      </article>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>Número: </b></label>
          <input style="color:#fff !important;" class="form-control" type="text" name="numero" placeholder="EX: 123" required>
        </div>
        <div class="form-group col-sm-5">
          <label><b>Complemento: </b> (Opcional)</label>
          <input style="color:#fff !important;" class="form-control" type="text" name="complemento" placeholder="EX: 05">
        </div>
      </article>
      <article class="row">
        <div class="form-group offset-1 col-sm-5">
          <label><b>Bairro: </b></label>
          <input style="color: #fff !important;" class="form-control" type="text" name="bairro" placeholder="EX: Vila Lobo" required>
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
      <div class="form-group offset-1 col-sm-5">
        <label><b>Cidade: </b></label>
        <select class="form-control" name="cidade" required>
          <option value="null">Selecione a sua cidade</option>
          <?php
          foreach ($resultado as $key => $value) {
            echo "<option value=".$value['id'].">".$value['nome']."</option>";
          }
          ?>
        </select>
      </div>
    </article>
      <div class="check-terms">
        <label>
          <input type="checkbox" name="terms" required>Aceito todos os <a href="politicas-e-termos.php"><i>termos e politicas</i></a> dados pelo Digital-Grupo.
        </label><br>
        <label>
          <input type="checkbox" name="terms2" required>Aceito vender a minha alma para este Site.
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

<script>
let input0 = document.forms[0].elements[0]
let place0 = input0.placeholder
let input1 = document.forms[0].elements[1]
let place1 = input1.placeholder
let input2 = document.forms[0].elements[2]
let place2 = input2.placeholder
let input3 = document.forms[0].elements[4]
let place3 = input3.placeholder
let input4 = document.forms[0].elements[6]
let place4 = input4.placeholder
let input5 = document.forms[0].elements[7]
let place5 = input5.placeholder
let input6 = document.forms[0].elements[8]
let place6 = input6.placeholder

let input7 = document.forms[0].elements[12]
let place7 = input7.placeholder
let input8 = document.forms[0].elements[13]
let place8 = input8.placeholder
let input9 = document.forms[0].elements[14]
let place9 = input9.placeholder
let input10 = document.forms[0].elements[15]
let place10 = input10.placeholder


  input0.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input0.addEventListener('blur',function(){
    this.setAttribute('placeholder',place0)
  })

  input1.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input1.addEventListener('blur',function(){
    this.setAttribute('placeholder',place1)
  })

  input2.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input2.addEventListener('blur',function(){
    this.setAttribute('placeholder',place2)
  })

  input3.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input3.addEventListener('blur',function(){
    this.setAttribute('placeholder',place3)
  })

  input4.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input4.addEventListener('blur',function(){
    this.setAttribute('placeholder',place4)
  })

  input5.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input5.addEventListener('blur',function(){
    this.setAttribute('placeholder',place5)
  })

  input6.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input6.addEventListener('blur',function(){
    this.setAttribute('placeholder',place6)
  })

  input7.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input7.addEventListener('blur',function(){
    this.setAttribute('placeholder',place7)
  })

  input8.addEventListener('focus',function(){
    this.setAttribute('placeholder',"")
  })
  input8.addEventListener('blur',function(){
    this.setAttribute('placeholder',place8)
  })

  // input9.addEventListener('focus',function(){
  //   this.setAttribute('placeholder',"")
  // })
  // input9.addEventListener('blur',function(){
  //   this.setAttribute('placeholder',place9)
  // })
  //
  // input10.addEventListener('focus',function(){
  //   this.setAttribute('placeholder',"")
  // })
  // input10.addEventListener('blur',function(){
  //   this.setAttribute('placeholder',place10)
  // })



document.forms[0].elements[16].addEventListener('change',function(){
  let estado = document.forms[0].elements[16].value
let xmlhttp = new XMLHttpRequest()

xmlhttp.onreadystatechange = function(){
  if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
    let resposta = JSON.parse(xmlhttp.textResponse)
    let array = Object.entries(resposta)

    console.log(array)
  }
}

xmlhttp.open('GET','http://localhost:8000/list/'+estado,true)
xmlhttp.send()

</script>
<?php include ("inc/footer.php") ?>
