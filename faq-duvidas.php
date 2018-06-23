<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,user-scalable=no">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-produtos-marcelo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php include_once("assets/php/functions.php") ?>
    <meta name="title" content="<?php echo $titulo ?>">
    <meta name="author" content="Digital Grupo">
    <meta name="decription" content="Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil">
    <meta name="keywords" content="html, css, php, js, digital house, digital grupo, projeto integrador">
    <link rel="icon" type="image/png" sizes="96x96" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/favicon-96x96.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title><?php echo $tituloFaq ?></title>
  </head>
<body>
<!-- HEADER -->
<?php
include_once ("inc/header.php");
?>





  <!-- # CONTÂINER DO CONTEÚDO PRINCIPAL # -->
  <main class="container-fluid">

    <!-- ## TOPO DA PÁGINA (PADRÃO ENTRE TODAS) ## -->
    <section class="top row">
      <article class="top-title col-12">
        <h1><?php echo $tituloFaq ?></h1>
        <h4><?php echo $subtituloFaq ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="http://digitalgrupo.provisorio.ws/" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <?php echo $tituloFaq ?>
      </p>
    </section>

    <!-- ## COLUNA DO MENU DE CATEGORIAS E DO BANNER PROMOCIONAL ## -->
    <section class="faq row">
      <aside class="col-12 col-md-3 faqMenu">
        <nav class="row">
          <h4>Categorias FAQ<i class="fas fa-caret-down"></i></h4>
          <ul class="col-12 faqCat">
            <li><a href="#faqcat01">Categoria FAQ 01 <i class="fas fa-caret-left"></i></a></li>
            <li><a href="#faqcat02">Categoria FAQ 02 <i class="fas fa-caret-right"></i></a></li>
            <li><a href="#faqcat03">Categoria FAQ 03 <i class="fas fa-caret-right"></i></a></li>
            <li><a href="#faqcat04">Categoria FAQ 04 <i class="fas fa-caret-right"></i></a></li>
          </ul>
        <span class="cta-banner-horizontal mobileOnly"><a href="#"><strong><?php echo $bannerHorizontal ?></strong></a></span>
        </nav>
      </aside>
      <span class="espacadorMobile col-12"> </span>
      <!-- ## COLUNA DO CONTEÚDO PRINICPAL - ACOORDION COM DÚVIDAS E RESPOSTAS (FAQ) -->
      <section class="col-12 offset-md-3 col-md-9 faqListas">
        <div class="row">
          <article class="faqLista" id="faqcat01">
            <h4>Categoria FAQ 01</h4>
            <div class="faqDuvidaEResposta">
              <h6 class="faqDuvida" id="faqpergunta01">Por que é necessário fazer tal coisa antes de usar o produto?</h6>
              <p class="faqResposta" id="faqresposta01">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
          </article>
          <article class="faqLista" id="faqcat02">
            <h4>Categoria FAQ 02</h4>
            <div class="faqDuvidaEResposta">
              <h6 class="faqDuvida" id="faqpergunta02">Por que é necessário fazer tal coisa antes de usar o produto?</h6>
              <p class="faqResposta" id="faqresposta02">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
          </article>
          <article class="faqLista" id="faqcat03">
            <h4>Categoria FAQ 03</h4>
            <div class="faqDuvidaEResposta">
              <h6 class="faqDuvida" id="faqpergunta03">Por que é necessário fazer tal coisa antes de usar o produto?</h6>
              <p class="faqResposta" id="faqresposta03">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
          </article>
          <article class="faqLista" id="faqcat03">
            <h4>Categoria FAQ 04</h4>
            <div class="faqDuvidaEResposta">
              <h6 class="faqDuvida" id="faqpergunta04">Por que é necessário fazer tal coisa antes de usar o produto?</h6>
              <p class="faqResposta" id="faqresposta04">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
          </article>
        </div>
      </section>
    </section>
    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">

      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal desktopOnly"><a href="#"><strong><?php echo $bannerHorizontal ?></strong></a></span>

      <!-- ### AGRUPAMENTO DE 4 ARTICLES/CARDS DE PRODUTOS -->
      <h4 class="col-12">Produtos em Destaque</h4>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="#">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="#">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="#">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="#">Ver Mais</a></button>
        </div>
      </article>
    </section>
  
</main>
<?php
include ("inc/footer.php");
 ?>
