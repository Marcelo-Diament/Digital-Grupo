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
    <title><?php echo $tituloFaq ?></title>
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
    <meta name="title" content="<?php echo $metaTitleFaq ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDescFaq ?>">
    <meta name="keywords" content="<?php echo $metaKeyWordsFaq ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitleFaq ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescFaq ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrlFaq ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocalFaq ?>" />
    <meta property="og:type" content="<?php echo $metaOgTypeFaq ?>" />
    <meta property="og:image" content="<?php echo $metaOgImageFaq ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAltFaq ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrlFaq ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageTypeFaq ?>" />
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
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <?php echo $tituloFaq ?>
      </p>
    </section>

    <!-- ## COLUNA DO MENU DE CATEGORIAS E DO BANNER PROMOCIONAL ## -->
    <section class="faq row">
      <aside class="col-12 col-md-3 faqMenu">
        <nav class="row dropdown">
          <input type="checkbox" id="toogleDropdown">
          <label for="toogleDropdown" class="animate" id="menuFaqCat">Categorias FAQ<i class="fas fa-caret-down"></i></label>
          <!--<div class="submenuFaq animate">-->
            <ul class="col-12 faqCat animate">
              <?php
                if (isset($faqCategorias)) {
                  foreach ($faqCategorias as $faqUrl => $faqCat) {
                    echo "
                      <li><a class='animate dropli' href='#".$faqUrl."'>".$faqCat." <i class='fas fa-caret-right'></i></a></li>
                    ";
                  }
                }
              ?>
              <!--<li><a class="animate dropli" title="FAQ - Garantia" name="FAQ - Garantia" alt="Clique para acessar as perguntas desse tema" href="#faqcat01">Garantia <i class="fas fa-caret-left"></i></a></li>
              <li><a class="animate dropli" title="FAQ - Frete e Entrega" name="FAQ - Frete e Entrega" alt="Clique para acessar as perguntas desse tema" href="#faqcat02">Frete e Entrega <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" title="FAQ - Trocas e Devoluções" name="FAQ - Trocas e Devoluções" alt="Clique para acessar as perguntas desse tema" href="#faqcat03">Trocas e Devoluções <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" title="Encomendas Especiais" name="Encomendas Especiais" alt="Clique para acessar as perguntas desse tema" href="#faqcat04">Encomendas Especiais <i class="fas fa-caret-right"></i></a></li>-->
            </ul>
            <h6 class="animate">Ainda com dúvidas?<br/><a href="/contato.php" title="Dúvidas" alt="Clique para tirar suas dúvidas conosco!" name="FAQ-duvidas" target="_blank">Entre em contato</a> e envie sua dúvida</h6>
            <span class="animate cta-banner-horizontal mobileOnly"><a title="Banner Vitrine de Produto" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br"><strong><?php echo $bannerHorizontal ?></strong></a></span>
            <!-- SCRIPT PARA FECHAR O ACCORDION DO MENU DE CATEGORIAS QUANDO SE CLICA EM ALGUMA -->
            <script>
              $('a.dropli').click(function() {
                $('input[type="checkbox"]').click();
                  });;
            </script>
          <!--</div>-->
        </nav>
      </aside>
      <span class="espacadorMobile col-12"> </span>
      <!-- ## COLUNA DO CONTEÚDO PRINICPAL - ACOORDION COM DÚVIDAS E RESPOSTAS (FAQ) -->
      <section class="col-12 offset-md-3 col-md-9 faqListas">
        <div class="row">
          <small>Clique nas perguntas a seguir para visualizar a resposta</small>
          <?php
            if (isset($faqPerguntas)){
              $length = count($faqPerguntas)/8;
              for ($i = 0; $i < $length; $i++){
                
                foreach ($faqPerguntas as $idCategoria => $arrayPerguntas) {
                  
                  echo "
                    <article class='faqLista' >
                      <div class='destino' id='".$idCategoria."'></div>
                      <h4>".$faqCategorias[$idCategoria]."</h4>
                  ";
                  
                  foreach ($arrayPerguntas as $pergunta => $resposta) {
                    echo "
                      <button class='faqDuvida' id='faqpergunta0101'>".$pergunta."</button>
                      <div class='faqDuvidaEResposta'>
                        <p class='faqResposta' id='faqresposta0101'>".$resposta."</p>
                      </div>
                    ";
                  }

                  echo "
                    </article>
                  ";
                }
              }
            }
          ?>
          <!--<article class="faqLista" >
            <div class="destino" id="faqcat03"></div>
            <h4>Trocas e Devoluções</h4>
            <button class="faqDuvida" id="faqpergunta0301">Por que é necessário fazer tal coisa antes de usar o produto?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0301">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
          </article>-->
        </div>
      </section>
    </section>
    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">

      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal desktopOnly"><a title="Banner Vitrine de Produto" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br"><strong><?php echo $bannerHorizontal ?></strong></a></span>

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
    <!-- SCRIPT ACCORDION JS COPIADO DA PÁGINA FAQ ANTERIOR MAS ADAPTADO, FOI FEITO NO COLEARNING -->
    <script>
    var acc = document.getElementsByClassName("faqDuvida");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.height === "120px") {
            panel.style.height = "0%";
        } else {
            panel.style.height = "120px";
        }
        if (panel.style.opacity === 1) {
            panel.style.opacity = 0;
        } else {
            panel.style.opacity = 1;
        }
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
        var panelB = this.nextElementSibling.firstElementChild;
        if (panelB.style.display === "block") {
            panelB.style.display = "none";
        } else {
            panelB.style.display = "block";
        }
    });
    }
    </script>
</main>
<?php
include ("inc/footer.php");
 ?>