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
    <title><?php echo $categorias['Rodas de Skate']['titulo'] ?></title>
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
    <meta name="title" content="<?php echo $categorias['Rodas de Skate']['metaTitle'] ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $categorias['Rodas de Skate']['metaDesc'] ?>">
    <meta name="keywords" content="<?php echo $categorias['Rodas de Skate']['metaKeyWords'] ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $categorias['Rodas de Skate']['metaOgTitle'] ?>" />
    <meta property="og:description" content="<?php echo $categorias['Rodas de Skate']['metaOgDesc'] ?>" />
    <meta property="og:url" content="<?php echo $categorias['Rodas de Skate']['metaOgUrl'] ?>" />
    <meta property="og:locale" content="<?php echo $categorias['Rodas de Skate']['metaOgLocal'] ?>" />
    <meta property="og:type" content="<?php echo $categorias['Rodas de Skate']['metaOgType'] ?>" />
    <meta property="og:image" content="<?php echo $categorias['Rodas de Skate']['metaOgImage'] ?>" />
    <meta property="og:image:alt" content="<?php echo $categorias['Rodas de Skate']['metaOgImageAlt'] ?>" />
    <meta property="og:image:url" content="<?php echo $categorias['Rodas de Skate']['metaOgImageUrl'] ?>" />
    <meta property="og:image:type" content="<?php echo $categorias['Rodas de Skate']['metaOgImageType'] ?>" />
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
        <h1><?php echo $categorias['Rodas de Skate']['titulo'] ?></h1>
        <h4><?php echo $categorias['Rodas de Skate']['subtitulo'] ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Produtos" name="produtos" hreflang='pt-br' alt='Clique para ver todos os produtos' href="http://digitalgrupo.provisorio.ws/produtos.php" itemprop="url"> <span itemprop="title">Produtos</span> </a> › </span>
        <?php echo $tituloCategoria ?>
      </p>
    </section>

    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">

      <!-- ### AGRUPAMENTO DE 8 ARTICLES/CARDS DE PRODUTOS -->
      <!--<article class="pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique e veja os detalhes desse produto!" alt="Clique para ver os detalhes desse produto" name="produto" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br">Ver Mais</a></button>
        </div>
      </article>-->
      <?php
        if (isset($produtos)){
          for ($i = 0; $i < 12; $i++){
            $valorTotal = $produtos[$i]['valores']['valorTotal'];
            $valorDesc = $produtos[$i]['valores']['valorDesc'];
            $valorReal = ($valorTotal - $valorDesc);
            $valorParcelas = $produtos[$i]['valores']['parcelas'];
            $valorParcela = number_format((float)$valorReal/$valorParcelas, 2, ',', '');;
            $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";

            echo "
              <article class='pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
                <div style='background-image:url(".$produtos[$i]['imagemDestaque'].");'>
                  <h3 class='pdt-card-title'><strong>".$produtos[$i]['nome']."</strong></h3>
                  <div class='pdt-card-price'>".$valorProdutoCompleto."</div>
                  <button class='pdt-card-btn'><a title='Clique e veja os detalhes desse produto!' alt='Clique para ver os detalhes desse produto' name='".$produtos[$i]['nome']."' href='".$produtos[$i]['url']."' hreflang='pt-br'>Ver Mais</a></button>
                </div>
              </article>
            ";
          }
        }
      ?>


      <span class="cta-banner-horizontal"><a title="Clique e saiba mais!" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br"><strong><?php echo $bannerHorizontal ?></strong></a></span>


      <?php
        if (isset($produtos)){
          for ($i = 12; $i < 24; $i++){
            $valorTotal = $produtos[$i]['valores']['valorTotal'];
            $valorDesc = $produtos[$i]['valores']['valorDesc'];
            $valorReal = ($valorTotal - $valorDesc);
            $valorParcelas = $produtos[$i]['valores']['parcelas'];
            $valorParcela = number_format((float)$valorReal/$valorParcelas, 2, ',', '');;
            $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";

            echo "
              <article class='pdt-card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
                <div style='background-image:url(".$produtos[$i]['imagemDestaque'].");'>
                  <h3 class='pdt-card-title'><strong>".$produtos[$i]['nome']."</strong></h3>
                  <div class='pdt-card-price'>".$valorProdutoCompleto."</div>
                  <button class='pdt-card-btn'><a title='Clique e veja os detalhes desse produto!' alt='Clique para ver os detalhes desse produto' name='".$produtos[$i]['nome']."' href='".$produtos[$i]['url']."' hreflang='pt-br'>Ver Mais</a></button>
                </div>
              </article>
            ";
          }
        }
      ?>

      <span class="col-12" id="paginacao">
        <!--<div class="col-4">-->
          <a href="#" hreflang="pt-br" alt="Clique para ver a página 1" title="Início dos Produtos"><i class="fas fa-angle-double-left"></i></a>
          <a href="#" hreflang="pt-br" alt="Clique para ver a página anterior" title="Página de Produtos Anterior"><i class="fas fa-angle-left"></i></a>
        <!--</div>
        <div class="col-4">-->
          48 de 96
          <!--</div>
        <div class="col-4">-->
          <a href="#" hreflang="pt-br" alt="Clique para ver a próxima página" title="Página de Produtos Seguinte"><i class="fas fa-angle-right"></i></a>
          <a href="#" hreflang="pt-br" alt="Clique para ver a última página" title="Final dos Produtos"><i class="fas fa-angle-double-right"></i></a>
        <!--</div>-->
      </span>
    </section>
  </main>
<?php
include ("inc/footer.php");
 ?>