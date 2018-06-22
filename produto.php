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
    <meta name="title" content="Produto Exemplo">
    <meta name="author" content="Digital Grupo">
    <meta name="decription" content="Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil">
    <meta name="keywords" content="html, css, php, js, digital house, digital grupo, projeto integrador">
    <link rel="icon" type="image/png" sizes="96x96" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/favicon-96x96.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <title>Produto Exemplo</title>
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
        <h1><?php echo $nomeProduto ?></h1>
        <h4><?php echo $descricaoProduto ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="http://digitalgrupo.provisorio.ws/" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="http://digitalgrupo.provisorio.ws/produtos.php" itemprop="url"><span itemprop="title">Produtos</span></a> › </span>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://digitalgrupo.provisorio.ws/produtos.php" itemprop="url"> <span itemprop="title">Categoria 01</span> </a> › </span><?php echo $nomeProduto ?>
      </p>
    </section>

    <section class="pdt-det">
      <article class="row">
        <div class="col-12 col-md-5">
          <a href="#" alt="Clique para ver a próxima imagem"><i class="slider-seta fas fa-angle-left"></i></a>
          <img src="assets/images/pdt.png" alt="" class="pdt-det-img">
          <a href="#" alt="Clique para ver a próxima imagem"><i class="slider-seta fas fa-angle-right"></i></a>
        </div>
        <div class="pdt-info col-12 col-md-7">
          <h3>Descrição do Produto</h3>
          <p>Esse produto é um produto feito especialmente para você. A ideia é que você o use sempre - de dia, à noite, à tarde, de manhã... Não importa quando, use o produto! Aproveite nossas promoções para compras acima de mil reais - promoção por tempo limitado!</p>
          <ul>
            <li>
              <ul>
                <li>Materiais: </li>
                <li><strong><?php echo $pdtMateriais ?></strong></li>
              </ul>
            </li>
            <li>
              <ul>
                <li>Tamanho: </li>
                <li><strong><?php echo $medida ?></strong></li>
              </ul>
            </li>
            <li>
              <ul>
                <li>Cor: </li>
                <li><strong><?php echo $cor ?></strong></li>
              </ul>
            </li>
          </ul>
          <h3>Reviews</h3>
          <p><i>"Esse produto é um produto feito especialmente para você. A ideia é que você o use sempre - de dia, à noite, à tarde, de manhã... Não importa quando, use o produto! Aproveite nossas promoções para compras acima de mil reais - promoção por tempo limitado!"</i></p>
          <p class="review_author"><b>Fulano de Tal</b>, São Paulo/SP</p>
        </div>
      </article>
      <article class="row col-12 col-md-6 col-lg-4">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rRVcPVZgksA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </article>
    </section>

    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">
      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal"><a href="#"><strong><?php echo $bannerHorizontal ?></strong></a></span>
      <!-- ### AGRUPAMENTO DE 4 ARTICLES/CARDS DE PRODUTOS -->
      <h4 class="col-12">Produtos Relacionados</h4>
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
