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
    <title><?php echo $tituloSobre ?></title>
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
    <meta name="title" content="<?php echo $metaTitleSobre ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDescSobre ?>">
    <meta name="keywords" content="<?php echo $metaKeyWordsSobre ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitleSobre ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescSobre ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrlSobre ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocalSobre ?>" />
    <meta property="og:type" content="<?php echo $metaOgTypeSobre ?>" />
    <meta property="og:image" content="<?php echo $metaOgImageSobre ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAltSobre ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrlSobre ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageTypeSobre ?>" />
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
        <h1><?php echo $tituloSobre ?></h1>
        <h4><?php echo $subtituloSobre ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <?php echo $tituloSobre ?>
      </p>
    </section>

    <section class="pdt-det">
      <article class="row justify-content-center video">
        <div class="mobileOnly col-12">
          <iframe title="Video sobre a empresa" name="aboutVideoMobile" alt="Clique para assistir nosso vídeo" width="300" height="169" src="https://www.youtube.com/embed/rRVcPVZgksA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="desktopOnly col-12 col-md-6">
          <iframe title="Video sobre a empresa" name="aboutVideoDesktop" alt="Clique para assistir nosso vídeo" width="560" height="315" src="https://www.youtube.com/embed/rRVcPVZgksA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="pdt-info col-12 col-md-5">
          <h3>Quem Somos</h3>
          <p><?php echo $sobreQuemSomos ?></p>
          <p class="cta-visita">Quer conhecer nosso negócio de perto? Entre em contato clicando <a class="cta-visita" title="Contato" alt="Clique para entrar em contato e agendar sua visita" name="contatoVisita" href="contato.php" target="_blank">aqui</a> e agende sua visita!</p>
        </div>
      </article>
      <article class="row">
        <div class="col-12 col-md-8">
          <h3>Depoimentos</h3>
          <p><i>"<?php echo $depoimentos['depoimento'] ?>"</i></p>
          <p class="review_author"><b><?php echo $depoimentos['depoente'] ?></b>, <?php echo $depoimentos['cargoDepoente'] ?></p>
        </div>
        <div class="col-12 col-md-4">
          <h4>Compartilhe nosso site!</h4>
          <div class="social-share col-12">
            <ul class="row">
              <li class="col-3"><a name="socialShareFacebook" alt="Clique para compartilhar nosso site no Face" title="Clique para compartilhar nosso site no Face" href="http://www.facebook.com/sharer.php?u=http://digitalgrupo.provisorio.ws/produto.php" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a></li>
              <li class="col-3"><a name="socialSharePinterest" alt="Clique para pinar nosso site no Pinterest" title="Clique para pinar nosso site no Pinterest" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fab fa-pinterest-square"></i></a></li>
              <li class="col-3"><a name="socialShareGooglePlus" alt="Clique para compartilhar nosso site no Google+" title="Clique para compartilhar nosso site no Google+" href="https://plus.google.com/share?url=http://digitalgrupo.provisorio.ws/produto.php" target="_blank" rel="noopener"><i class="fab fa-google-plus"></i></a></li>
              <li class="col-3"><a name="socialShareEmail" alt="Clique para compartilhar nosso site por email" title="Clique para compartilhar nosso site por email" href="mailto:marcelo@djament.com.br?Subject=Veja esse site da Digital Grupo!&Body=Veja essse site! Lembrei de você!" target="_blank" rel="noopener"><i class="fas fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </article>
    </section>

    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">
      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal"><a title="Banner Vitrine de Produto" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br"><strong><?php echo $bannerHorizontal ?></strong></a></span>
      <!-- ### AGRUPAMENTO DE 4 ARTICLES/CARDS DE PRODUTOS -->
      <h4 class="col-12">Lançamentos</h4>
      <!--<article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique e veja os detalhes desse produto!" alt="Clique para ver os detalhes desse produto" name="produto" href="produto.php" hreflang="pt-br">Ver Mais</a></button>
        </div>
      </article>-->
      <?php
        if (isset($produtos)){
          for ($i = 0; $i < 6; $i++){
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
      <?php
        if (isset($produtos)){
          for ($i = 42; $i < 48; $i++){
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
    </section>
  </main>
<?php
include ("inc/footer.php");
 ?>