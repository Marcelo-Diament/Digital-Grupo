<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt-br" dir="ltr">
  <head>
    <!-- SCRIPTS E INCLUDES (PHP, JQUERY E ENTÃO JS) -->
    <?php include_once("assets/php/functions.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- DADOS ESTRUTURADOS - SCHEMA.ORG -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "http://digitalgrupo.provisorio.ws",
        "logo": "http://digitalgrupo.provisorio.ws/assets/images/logo.png",
        "description": "Digital Grupo é o projeto integrado de conclusão do curso de Desenvolvimento Full Stack da Digital House Brasil (TN01)",
        "additionalType": "http://www.productontology.org/doc/Web_design",
        "telephone" : "+55-11-97605-2723",
        "email" : "contato@djament.com.br",
        "address" : {
          "@type" : "PostalAddress",
          "streetAddress" : "Rua Guaipá, 223, Vila Leopoldina",
          "addressLocality" : "São Paulo",
          "addressRegion" : "São Paulo",
          "postalCode" : "05089-001"
        },
        "sameAs" : [ "https://www.facebook.com/digitalgrupo", "https://www.youtube.com/channel/digitalgrupo", "https://pinterest.com/digitalgrupo/", "https://twitter.com/digitalgrupo", "https://vimeo.com/digitalgrupo" ]  
      }
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+55-11-97605-2723",
          "contactType": "customer service"
        }]
      }
    </script>
    <!-- INFORMAÇÕES GERAIS BÁSICAS -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,user-scalable=no">
    <title><?php echo $tituloHome ?></title>
    <!-- ESTILOS, FONTES... -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-produtos-marcelo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="icon" type="image/png" sizes="96x96" href="http://digitalgrupo.provisorio.ws/assets/images/logo.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- META DATA (SEO) / OG -->
    <meta name="title" content="<?php echo $metaTitleHome ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDescHome ?>">
    <meta name="keywords" content="<?php echo $metaKeyWordsHome ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitleHome ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescHome ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrlHome ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocalHome ?>" />
    <meta property="og:type" content="<?php echo $metaOgTypeHome ?>" />
    <meta property="og:image" content="<?php echo $metaOgImageHome ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAltHome ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrlHome ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageTypeHome ?>" />
  </head>
<body>
<!-- HEADER -->
<?php
include_once ("inc/header.php");
?>
  <!-- # CONTÂINER DO CONTEÚDO PRINCIPAL # -->
  <main class="container-fluid">
    <!-- ## BANNER -->
    <section class="row">
      <!-- SCRIPT PARA PEGAR TODOS OS BANNERS E INSERIR - DEPOIS PODEMOS TENTAR IMPLEMENTAR UM SLIDER HORIZONTAL -->
      <?php
        foreach ($banners as $banner => $conteudo) {
          echo "
            <article class='col-12' id='bannerHome' style='background-image: url(assets/images/".$banner.")';>
              <h2>".$conteudo['title']."</h2>
              <h4>".$conteudo['subtitle']."</h4>
              <button class='home-btn'><a title='".$conteudo['atitle']."' name='bannerHome' alt='".$conteudo['aalt']."' href='".$conteudo['aurl']."'>Ver Mais</a></button>
            </article>
          ";
        } 
      ?>
    </section>
    <!-- ## DESTAQUES -->
    <section class="row">
      <article class="col-12 destHome">
        <div class="col-4">
          <a title="Frete para todo o Brasil" name="destHome1" alt="Clique e veja todos os nossos produtos" href="produtos.php">
            <i class="fas fa-shipping-fast"></i>
            <h5 class="">Atendemos todo Brasil</h5>
          </a>
        </div>
        <div class="col-4">
          <a title="Parcelas de até 12 vezes sem juros" name="destHome2" alt="Clique e veja todos os nossos produtos" href="produtos.php">
            <i class="far fa-credit-card"></i>
            <h5 class="">12x sem juros</h5>
          </a>
        </div>
        <div class="col-4">
          <a title="Produtos Customizados" name="destHome3" alt="Entre em contato e saiba como solicitar seu produto customizado" href="contato.php">
            <i class="fas fa-paint-brush"></i>
            <h5 class="">Sob Medida</h5>
          </a>
        </div>
      </article>
    </section>
    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">
      <h4 class="col-12">Produtos em Destaque</h4>
      <!-- ### AGRUPAMENTO DE 8 ARTICLES/CARDS DE PRODUTOS -->
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome1" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome2" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome3" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome4" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome5" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome6" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome7" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome8" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome9" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome10" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome11" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique para ver os detalhes desse produto" hreflang="pt-br" alt="Clique para ver os detalhes do produto" name="pdtCardHome12" href="produto.php">Ver Mais</a></button>
        </div>
      </article>
    </section>
  </main>
<?php
include ("inc/footer.php");
 ?>