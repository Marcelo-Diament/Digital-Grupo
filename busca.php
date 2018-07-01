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
    <title><?php echo $tituloBusca ?></title>
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
    <meta name="title" content="<?php echo $metaTitleBusca ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDescBusca ?>">
    <meta name="keywords" content="<?php echo $metaKeyWordsBusca ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitleBusca ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescBusca ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrlBusca ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocalBusca ?>" />
    <meta property="og:type" content="<?php echo $metaOgTypeBusca ?>" />
    <meta property="og:image" content="<?php echo $metaOgImageBusca ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAltBusca ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrlBusca ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageTypeBusca ?>" />
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
        <h1><?php echo $tituloBusca ?></h1>
        <h4><?php echo $subtituloBusca ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <?php echo $tituloBusca ?>
      </p>
    </section>

    <!-- ## BUSCA DO GOOGLE ## -->
    <section class="row contato">
      <article class="dadosContato col-12 col-md-4">
        <h4 class="col-12">Realize sua busca</h4>
        <div class="col-12">
          <script>
            (function() {
              var cx = '014642095393488901278:3t1tazqpecm';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search>
        </div>
      </article>
    </section>

    <!-- ## DADOS DE CONTATO ## -->
    <section class="row contato">
      <article class="dadosContato col-12">
        <ul>
          <h4 class="col-12">Dados de Contato</h4>
          <p class="col-12">Ainda não encontrou o que buscava? Entre em contato com a gente!</p>
          <br/>
          <li><a title="Ligar" name="tel" hreflang='pt-br' alt='Ligar' target="_blank" rel="noopener" href="tel:<?php echo $telefoneFixo ?>"><i class="fas fa-phone-volume"></i> <?php echo $telefoneFixo ?></a></li>
          <li><a title="Ligar ou enviar Whatsapp" name="whats" hreflang='pt-br' alt='Ligar ou enviar Whatsapp' href="tel:+55 <?php echo $telefoneCelular ?>"  target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> <?php echo $telefoneCelular ?></a></li>
          <li><a title="Enviar email" name="mailto" hreflang='pt-br' alt='Enviar email' href="<?php echo "mailto:".$emailContato."?Subject=Contato via template eCommerce Digital Grupo&Body=Tenho interesse em adquirir um eCommerce com o Digital Grupo"; ?>"  target="_blank" rel="noopener"><i class="fas fa-envelope"></i> <?php echo $emailContato ?></a></li>
          <li><a title="Acessar mapa no Google" name="map" hreflang='pt-br' alt='Acessar mapa no Google' href="https://goo.gl/maps/BNMCvVriyyt"  target="_blank" rel="noopener"><i class="fas fa-map-marker-alt"></i> Rua Cardoso de Melo, nº 90</a></li>
          <li><a title="Acessar mapa no Google" name="map" hreflang='pt-br' alt='Acessar mapa no Google' href="https://goo.gl/maps/BNMCvVriyyt"  target="_blank" rel="noopener">Vila Olímpia | São Paulo/SP</a></li>
          <div class="social-share col-12">
                <ul class="row">
                  <li class="col-3"><a title="Acesse nosso perfil no Facebook" name="socialFacebook" hreflang='pt-br' alt='Acesse nosso perfil no Facebook' href="<?php echo $fanpageUrl ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a></li>
                  <li class="col-3"><a title="Acesse nosso perfil no Pinterest" name="socialPinterest" hreflang='pt-br' alt='Acesse nosso perfil no Pinterest' href="<?php echo $pinterestUrl ?>"><i class="fab fa-pinterest-square"></i></a></li>
                  <li class="col-3"><a title="Acesse nosso perfil no Google Plus" name="socialGoogle Plus" hreflang='pt-br' alt='Acesse nosso perfil no Google Plus' href="<?php echo $googlePlusUrl ?>" target="_blank" rel="noopener"><i class="fab fa-google-plus"></i></a></li>
                  <li class="col-3"><a title="Acesse nosso perfil no Instagram" name="socialInstagram" hreflang='pt-br' alt='Acesse nosso perfil no Instagram' href="<?php echo $instaUrl ?>" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
        </ul>
        <article class="insta-card col-12">
          <div>
            <div class="insta-card-subtitle">acesse nosso insta</div>
            <h3 class="insta-card-title"><strong><?php echo $instaUser ?></strong></h3>
            <button class="insta-card-btn"><a title="Acesse nosso perfil no Instagram" name="socialInstagram" hreflang='pt-br' alt='Acesse nosso perfil no Instagram' href="<?php echo $instaUrl ?>" target="_blank" rel="noopener">Visitar</a></button>
          </div>
        </article>
      </article>
      <article class="col-12 mapa">
        <iframe title="Mapa do Google Maps" name="googleMaps" alt="Mapa do Google Maps" class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.043674454273!2d-46.677478784820366!3d-23.602766569008146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital+House+S%C3%A3o+Paulo!5e0!3m2!1spt-BR!2sbr!4v1530138523816" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </article>
    </section>

    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">

      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal desktopOnly"><a title="Clique e saiba mais!" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br"><strong><?php echo $bannerHorizontal ?></strong></a></span>

      <!-- ### AGRUPAMENTO DE 4 ARTICLES/CARDS DE PRODUTOS -->
      <h4 class="col-12">Produtos em Destaque</h4>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique e veja os detalhes desse produto!" alt="Clique para ver os detalhes desse produto" name="produto" href="produto.php" hreflang="pt-br">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique e veja os detalhes desse produto!" alt="Clique para ver os detalhes desse produto" name="produto" href="produto.php" hreflang="pt-br">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique e veja os detalhes desse produto!" alt="Clique para ver os detalhes desse produto" name="produto" href="produto.php" hreflang="pt-br">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a title="Clique e veja os detalhes desse produto!" alt="Clique para ver os detalhes desse produto" name="produto" href="produto.php" hreflang="pt-br">Ver Mais</a></button>
        </div>
      </article>
    </section>
</main>
<?php
include ("inc/footer.php");
 ?>