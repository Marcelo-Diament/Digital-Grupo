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
    <title><?php echo $tituloTermos ?></title>
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
    <meta name="title" content="<?php echo $metaTitleTermos ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDescTermos ?>">
    <meta name="keywords" content="<?php echo $metaKeyWordsTermos ?>">
    <meta name="robots" content="noindex,nofollow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitleTermos ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescTermos ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrlTermos ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocalTermos ?>" />
    <meta property="og:type" content="<?php echo $metaOgTypeTermos ?>" />
    <meta property="og:image" content="<?php echo $metaOgImageTermos ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAltTermos ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrlTermos ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageTypeTermos ?>" />
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
        <h1><?php echo $tituloTermos ?></h1>
        <h4><?php echo $subtituloTermos ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <?php echo $tituloTermos ?>
      </p>
    </section>

    <!-- ## COLUNA DO MENU DE CATEGORIAS E DO BANNER PROMOCIONAL ## -->
    <section class="faq row">
      <aside class="col-12 col-md-3 faqMenu">
        <nav class="row dropdown">
          <input type="checkbox" id="toogleDropdown">
          <label for="toogleDropdown" class="animate" id="menuFaqCat">Políticas e Termos<i class="fas fa-caret-down"></i></label>
          <!--<div class="submenuFaq animate">-->
            <ul class="col-12 faqCat animate">
              
              <?php
                if (isset($politicasCategorias)) {
                  foreach ($politicasCategorias as $termoUrl => $termoCat) {
                    echo "
                      <li><a class='animate dropli' href='#".$termoUrl."'>".$termoCat." <i class='fas fa-caret-right'></i></a></li>
                    ";
                  }
                }
              ?>
              <!--<li><a class="animate dropli" href="#faqcat01">Termos de Uso <i class="fas fa-caret-left"></i></a></li>
              <li><a class="animate dropli" href="#faqcat02">Trocas, Devoluções e Arrependimento <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat03">Prazos de Entrega e Frete <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat04">Políticas de Privacidade <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat05">Direitos Autorais e de Imagem <i class="fas fa-caret-right"></i></a></li>-->
            </ul>
            <h6 class="animate">Ainda com dúvidas?<br/><a href="/contato.php" target="_blank">Entre em contato</a> e envie sua dúvida</h6>
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
          <small>Clique nos temas a seguir para visualizar os termos e políticas</small>
          

          <?php
            if (isset($politicasPerguntas)){
              $length = count($politicasPerguntas)/8;
              for ($i = 0; $i < $length; $i++){
                
                foreach ($politicasPerguntas as $idCategoria => $arrayPerguntas) {
                  
                  echo "
                    <article class='faqLista' >
                      <div class='destino' id='".$idCategoria."'></div>
                      <h4>".$politicasCategorias[$idCategoria]."</h4>
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
        </div>
      </section>
    </section>
    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">

      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal desktopOnly"><a title="Banner Vitrine de Produto" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/produto.php" hreflang="pt-br"><strong><?php echo $bannerHorizontal ?></strong></a></span>

      <!-- ### AGRUPAMENTO DE 4 ARTICLES/CARDS DE PRODUTOS -->
      <h4 class="col-12">Produtos em Destaque</h4>
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