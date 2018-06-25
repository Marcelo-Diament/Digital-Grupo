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
    <meta name="title" content="<?php echo $tituloFaq ?>">
    <meta name="author" content="Digital Grupo">
    <meta name="decription" content="Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil">
    <meta name="keywords" content="html, css, php, js, digital house, digital grupo, projeto integrador">
    <link rel="icon" type="image/png" sizes="96x96" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/favicon-96x96.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
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
        <nav class="row dropdown">
          <input type="checkbox" id="toogleDropdown">
          <label for="toogleDropdown" class="animate" id="menuFaqCat">Categorias FAQ<i class="fas fa-caret-down"></i></label>
          <!--<div class="submenuFaq animate">-->
            <ul class="col-12 faqCat animate">
              <li><a class="animate dropli" href="#faqcat01">Garantia <i class="fas fa-caret-left"></i></a></li>
              <li><a class="animate dropli" href="#faqcat02">Frete e Entrega <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat03">Trocas e Devoluções <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat04">Encomendas Especiais <i class="fas fa-caret-right"></i></a></li>
            </ul>
            <h6 class="animate">Ainda com dúvidas?<br/><a href="/contato.php" target="_blank">Entre em contato</a> e envie sua dúvida</h6>
            <span class="animate cta-banner-horizontal mobileOnly"><a href="http://digitalgrupo.provisorio.ws/produto.php"><strong><?php echo $bannerHorizontal ?></strong></a></span>
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
          <article class="faqLista" >
            <div class="destino" id="faqcat01"></div>
            <h4>Garantia</h4>
            <button class="faqDuvida" id="faqpergunta0101">Por quanto tempo vale a garantia?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0101">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0102">A garantia cobre roubo ou furto?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0102">Não, a garantia cobre apenas defeitos de fabricação. Para uma avaliação o produto deverá ser enviado via Correios para os dados de cadastro da empresa - isso após aviso prévio e confirmação do SAC (Serviço de Atendimento ao Cliente). Em caso de dúvida ligue para 0800 987 6543.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0103">Se meu produto chegar com defeito, a garantia passa a valer apenas depois da troca?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0103">A garantia é válida a partir da data da compra do produto. Caso haja algum defeito de fabricação comprovado, iremos realizar a troca do produto e a enviaremos uma nova garantia ou uma garantia extendida.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0104">É possível comprar a garantira extendida pelo site?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0104">Sim, basta clicar na opção 'Garantia Extendida' antes de finalizar a compra. Caso o produto tenha sido comprado a menos de 1 mês (30 dias corridos) será possível realizar a extensão da garantia. Para intervalos maiores de 30 dias já não será possível extender a garantia, pois não temos condições de certificar o bom estado e manutenção do produto.</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat02"></div>
            <h4>Frete e Entrega</h4>
            <button class="faqDuvida" id="faqpergunta0201">Em quanto tempo chegará meu pedido?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0201">A estimativa de entrega é considerada com base nos cálculos do Correios, seu CEP e o CEP de remetente (matriz ou filial mais próxima da nossa marca). Também incluímos 2 dias de margem para logística, empacotamento, trâmites burocráticos e envio. Mas lembre-se: esse prazo é apenas uma previsão, podem ocorrer imprevistos. Caso ocorra algum imprevisto, você poderá acompanhar o status do envio de seu pedido através do próprio site do Correios. Em caso de dúvidas, pode ligar para nosso serviço de atendimento ao consumidor tabmém (SAC - 0800 987 6543).</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0202">Em quanto tempo chegará meu pedido?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0202">A estimativa de entrega é considerada com base nos cálculos do Correios, seu CEP e o CEP de remetente (matriz ou filial mais próxima da nossa marca). Também incluímos 2 dias de margem para logística, empacotamento, trâmites burocráticos e envio. Mas lembre-se: esse prazo é apenas uma previsão, podem ocorrer imprevistos. Caso ocorra algum imprevisto, você poderá acompanhar o status do envio de seu pedido através do próprio site do Correios. Em caso de dúvidas, pode ligar para nosso serviço de atendimento ao consumidor tabmém (SAC - 0800 987 6543).</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat03"></div>
            <h4>Trocas e Devoluções</h4>
            <button class="faqDuvida" id="faqpergunta0301">Por que é necessário fazer tal coisa antes de usar o produto?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0301">A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat04"></div>
            <h4>Encomendas Especiais</h4>
            <button class="faqDuvida" id="faqpergunta0401">Como faço para solicitar um produto customizado? Vendem em grande quantidade/atacado?</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0401">Entre em contato com nossa equipe Comercial para solicitar seu projeto especial! Fazemos produtos customizados e sob medida. Também temos condições especiais para pedidos acima de 50 mil unidades. Ligue para 0800 987 6541 (de 2ª a Sábado das 09:00 às 13:00 e das 14:00 às 18:00) ou envie um email para contato@digitalgrupo.provisorio.ws - responderemos em até 48 horas!</p>
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
          <button class="pdt-card-btn"><a href="http://digitalgrupo.provisorio.ws/produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="http://digitalgrupo.provisorio.ws/produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="http://digitalgrupo.provisorio.ws/produto.php">Ver Mais</a></button>
        </div>
      </article>
      <article class="pdt-card col-12 col-sm-6 col-md-3">
        <div>
          <h3 class="pdt-card-title"><strong><?php echo $nomeProduto ?></strong></h3>
          <div class="pdt-card-price"><?php echo $valorProdutoCompleto ?></div>
          <button class="pdt-card-btn"><a href="http://digitalgrupo.provisorio.ws/produto.php">Ver Mais</a></button>
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
