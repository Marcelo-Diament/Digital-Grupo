<?php
include ("inc/head.php");
include ("inc/header.php");
?>

<div class="categorias-faq">
  <p class="botao_categorias"><b>Categorias</b></p>
  <ul class="breadcrumb1">
  <li id="home-faq"><a href="index.php">Home	&shy;</a></li>
  <li><a href="#">&gt; FAQ</a></li>
</ul>
</div>

<article class="prod-destaque">
  <div class="textos">
  <h2>Nome do produto</h2>
    <p><b>12x </b>de R$499,99 <b>sem juros</b></p>
    <p><a class="comprar">Comprar</a></p>
  </div>
</article>

<div class="perguntas">
  <p><b>Cupons de Desconto</b></p><br>
  <button class="accordion">Os cupons de desconto têm validade?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
  <button class="accordion">Há limite de valor para utilizar os cupons?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
  <button class="accordion">Os cupons são cumulativos?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
  <button class="accordion">A partir de quantas peças passa a valer o cupom?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
  <button class="accordion">Ganhei um cupom de aniversário mas já expirou... como posso usar esse cupom novamente? É possível?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
  <button class="accordion">Posso enviar um cupom de presente para um amigo?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
  <button class="accordion">Posso usar mais de um cupom na mesma compra?</button>
  <div class="panel">
    <p>Resposta</p>
  </div>
</div>
<div class="prod-dest-faq"><p><b>Produtos em Destaque</b></p>
</div>
<article class="produto-faq">
  <h3>Nome do Produto</h3>
  <p><b>12x </b>$499,99 <b>sem juros</b></p>
  <p><a class="vermais-prod-faq">Ver Mais</a></p>
</article>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
    }
  </script>

<?php
include ("inc/footer.php");
?>
