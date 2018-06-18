<?php
include ("inc/head.php");
include ("inc/header.php");
?>
<main>
<div class="row">
<aside class="col-md-2">
<div class="categorias-faq">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categorias
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Entrega e Freto</button>
    <button class="dropdown-item" type="button">Trocas e Devoluções </button>
    <button class="dropdown-item" type="button">Garantia de Fábrica</button>
    <button class="dropdown-item" type="button">Medidas e Tamanhos</button>
    <button class="dropdown-item" type="button">Cupons de Desconto</button>
    <button class="dropdown-item" type="button">Promoções</button>
    <button class="dropdown-item" type="button">Cookies e Privacidade</button>
  </div>
</div>
  <ul class="breadcrumb1">
  <li id="home-faq"><a href="index.php">Home	&shy;</a></li>
  <li><a href="#">&gt; FAQ</a></li>
</ul>
</div>
<article class="prod-destaque col-sm-12 col-lg-12">
  <div class="textos">
  <h2>Nome do produto</h2>
    <p><b>12x </b>de R$499,99 <b>sem juros</b></p>
    <p><a class="comprar">Comprar</a></p>
  </div>
</article>
</aside>

<div class="perguntas row col-md-10">
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
</div>

<div class="row">
<div class="prod-dest-faq"><p><b>Produtos em Destaque</b></p><br>
</div>
<article class="produto-faq col-lg-3">
  <h3>Nome do Produto</h3>
  <p><b>12x </b>$499,99 <b>sem juros</b></p>
  <p><a class="vermais-prod-faq">Ver Mais</a></p>
</article>
<article class="produto2-faq col-lg-3">
  <h3>Nome do Produto</h3>
  <p><b>12x </b>$499,99 <b>sem juros</b></p>
  <p><a class="vermais-prod2-faq">Ver Mais</a></p>
</article>
<article class="produto3-faq col-lg-3">
  <h3>Nome do Produto</h3>
  <p><b>12x </b>$499,99 <b>sem juros</b></p>
  <p><a class="vermais-prod3-faq">Ver Mais</a></p>
</article>
<article class="produto4-faq col-lg-3">
  <h3>Nome do Produto</h3>
  <p><b>12x </b>$499,99 <b>sem juros</b></p>
  <p><a class="vermais-prod4-faq">Ver Mais</a></p>
</article>
</div>


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
</main>

<?php
include ("inc/footer.php");
?>
