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
    <script src="assets/js/script.js"></script>
    <title>Produto Exemplo</title>
  </head>
<body>
<!-- HEADER -->
<?php
include_once ("inc/header.php");
?>

<!-- MODAL DO ZOOM DA IMAGEM -->
<!-- Só consegui que ficasse corretamente posicionado iniciando o HTML com ele... -->
  <!-- The Modal -->
  <div id="myModal" class="modal">
  
    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="pdt-det-img-zoom">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>


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
          <div>
            <a href="#" alt="Clique para ver a próxima imagem"><i class="slider-seta fas fa-angle-left"></i></a>
            

            <img id="pdt-det-img" src="assets/images/pdt.png" alt="" class="pdt-det-img" style="width:100%;max-width:500px;">
            
            <a href="#" alt="Clique para ver a próxima imagem"><i class="slider-seta fas fa-angle-right"></i></a>
          </div>
          

          <div class="col-12">
            <h3>Reviews</h3>
            <p><i>"Esse produto é um produto feito especialmente para você. A ideia é que você o use sempre - de dia, à noite, à tarde, de manhã... Não importa quando, use o produto! Aproveite nossas promoções para compras acima de mil reais - promoção por tempo limitado!"</i></p>
            <p class="review_author"><b>Fulano de Tal</b>, São Paulo/SP</p>
          </div>
          <span class="col-12" id="paginacao">
            <div class="col-4">
              <a href="#" alt="Clique para ver a review 1"><i class="fas fa-angle-double-left"></i></a>
              <a href="#" alt="Clique para ver a review anterior"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
              24 de 96
              </div>
            <div class="col-4">
              <a href="#" alt="Clique para ver a próxima review"><i class="fas fa-angle-right"></i></a>
              <a href="#" alt="Clique para ver a última review"><i class="fas fa-angle-double-right"></i></a>
            </div>
        </span>
        </div>
        <div class="pdt-info col-12 col-md-7">
          <h3>Descrição do Produto</h3>
          <p>Esse produto é um produto feito especialmente para você. A ideia é que você o use sempre - de dia, à noite, à tarde, de manhã... Não importa quando, use o produto! Aproveite nossas promoções para compras acima de mil reais - promoção por tempo limitado!</p>
          <div class="row">
            <div class="comprar col-12 col-sm-6">
              <form action="#" method="post">
                <small>de R$ <?php echo $valorTotal ?> por</small>
                <legend><b>R$ <?php echo $valorReal; ?></b> à vista</legend>
                <p>ou <?php echo $valorProdutoCompleto; ?></p>
                <label for="tam">Tamanho</label>
                <select>
                  <?php 
                    foreach ($tamanhos as $key => $value) {
                      echo "<option value='".$key."'>".$value."</option>";
                    }
                  ?>
                </select>
                <br/>
                <label for="qnt">Cor</label>
                <select>
                  <?php 
                    foreach ($cores as $key => $value) {
                      echo "<option value='".$key."'>".$value."</option>";
                    }
                  ?>
                </select>
                <br/>
                <label for="qnt">Quantidade</label>
                <input type="number" min="1" value="1" name="qnt" id="qnt">
                <br/>
                <fieldset>
                  <input type="submit" value="Favoritar" class="pdt-det-btn buy col-12 col-md-4"></input>
                  <input type="submit" value="Adicionar" class="pdt-det-btn buy col-12 col-md-4"></input>
                  <input type="submit" value="Finalizar" class="pdt-det-btn buy col-12 col-md-4"></input>
                </fieldset>
              </form>
            </div>
            <div class="col-12 col-sm-6">
              <h4>Compartilhe esse produto!</h4>
              <div class="social-share col-12">
                <ul class="row">
                  <li class="col-3"><a href="http://www.facebook.com/sharer.php?u=http://digitalgrupo.provisorio.ws/produto.php" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                  <li class="col-3"><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fab fa-pinterest-square"></i></a></li>
                  <li class="col-3"><a href="https://plus.google.com/share?url=http://digitalgrupo.provisorio.ws/produto.php" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                  <li class="col-3"><a href="mailto:marcelo@djament.com.br?Subject=Veja esse produto da Digital Grupo!&Body=Veja essse produto! Lembrei de você!"><i class="fas fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <ul>
            <li>
              <ul>
                <li><strong>Materiais:</strong> </li>
                <li><?php echo $pdtMateriais ?></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><strong>Tamanho:</strong> </li>
                <li><?php echo $tamanho ?></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><strong>Cor:</strong> </li>
                <li><?php echo $cor ?></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
      <article class="row justify-content-center video">
        <div class="mobileOnly col-12">
          <iframe width="300" height="169" src="https://www.youtube.com/embed/rRVcPVZgksA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="desktopOnly col-12">
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
    <script>
    // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('pdt-det-img');
var modalImg = document.getElementById("pdt-det-img-zoom");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
  </main>
<?php
include ("inc/footer.php");
 ?>
