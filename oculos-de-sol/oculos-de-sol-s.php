<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt-br" dir="ltr">
  <head>
    <!-- SCRIPTS E INCLUDES (PHP, JQUERY E ENTÃO JS) -->
    <?php include_once("../assets/php/functions.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <?php $idProduto = 42; ?>
    <!-- RESPOSTA AO FORMULÁRIO DE FAVORITAR/ADICIONAR/FINALIZAR -->
    <?php
      if (isset($_POST['submit']) && $_POST['submit'] === 'Finalizar'){
                    header("location: http://digitalgrupo.provisorio.ws/carrinho.php");exit;
                  }
    ?>
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
    <title><?php echo $produtos[$idProduto]['nome']; ?></title>
    <!-- ESTILOS, FONTES... -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-produtos-marcelo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CCSS DO W3 SCHOOLS É IMPORTANTE POIS FAZ FUNCIONAR O MODAL DO ZOOM, ANTES DE REMOVER É NECESSÁRIO REPRODUZIR O MESMO ESTILO NO NOSSO STYLE -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" type="image/png" sizes="96x96" href="http://digitalgrupo.provisorio.ws/assets/images/logo.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- META DATA (SEO) / OG -->
    <meta name="title" content="<?php echo $produtos[$idProduto]['metaTitle']; ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $produtos[$idProduto]['metaDesc']; ?>">
    <meta name="keywords" content="<?php echo $produtos[$idProduto]['metaKeyWords']; ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $produtos[$idProduto]['metaOgTitle']; ?>" />
    <meta property="og:description" content="<?php echo $produtos[$idProduto]['metaOgDesc']; ?>" />
    <meta property="og:url" content="<?php echo $produtos[$idProduto]['metaOgUrl']; ?>" />
    <meta property="og:locale" content="<?php echo $produtos[$idProduto]['metaOgLocal']; ?>" />
    <meta property="og:type" content="<?php echo $produtos[$idProduto]['metaOgType']; ?>" />
    <meta property="og:image" content="<?php echo $produtos[$idProduto]['metaOgImage']; ?>" />
    <meta property="og:image:alt" content="<?php echo $produtos[$idProduto]['metaOgImageAlt'] ?>" />
    <meta property="og:image:url" content="<?php echo $produtos[$idProduto]['metaOgImageUrl']; ?>" />
    <meta property="og:image:type" content="<?php echo $produtos[$idProduto]['metaOgImageType']; ?>" />
  </head>
<body>
<!-- HEADER -->
<?php
include_once ("../inc/header.php");
?>

<!-- SLIDER W3 JS -->

  <style>
    .pdt-det-img {display:none}
    .pdt-det-img-zoom {cursor:pointer}
  </style>

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
  <main class="container-fluid" itemscope itemtype="http://schema.org/Product">

    <!-- ## TOPO DA PÁGINA (PADRÃO ENTRE TODAS) ## -->
    <section class="top row">
      <article class="top-title col-12">
        <h1 itemprop="name"><?php echo $produtos[$idProduto]['nome']; ?></h1>
        <h4 itemprop="description"><?php echo $produtos[$idProduto]['metaDesc']; ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Produtos" name="produtos" hreflang='pt-br' alt='Clique para ver todos os produtos' href="http://digitalgrupo.provisorio.ws/produtos.php" itemprop="url"> <span itemprop="title">Produtos</span> </a> › </span>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="<?php echo $tituloCategoria ?>" name="categoria" hreflang='pt-br' alt='Clique para ver todos os produtos dessa categoria' href="http://digitalgrupo.provisorio.ws/oculos-de-sol.php" itemprop="url"> <span itemprop="title"><?php echo $produtos[$idProduto]['categoria']; ?></span> </a> › </span>
        <?php echo $produtos[$idProduto]['nome']; ?>
      </p>
    </section>

    <section class="pdt-det">
      <article class="row">
        <div class="col-12 col-md-5">
          <div class="w3-content">
            <!--<a href="#" alt="Clique para ver a próxima imagem"><i class="slider-seta fas fa-angle-left"></i></a>-->

            <img itemprop="image" id="pdt-det-img1" src="<?php echo $produtos[$idProduto]['imagens']['Óculos 01']; ?>" alt="Cor 01" title="Cor 01" class="pdt-det-img" style="width:100%;max-width:500px;">
            <img itemprop="image" id="pdt-det-img2" src="<?php echo $produtos[$idProduto]['imagens']['Óculos 02']; ?>" alt="Cor 02" title="Cor 02" class="pdt-det-img" style="width:100%;max-width:500px;">
            <img itemprop="image" id="pdt-det-img" src="<?php echo $produtos[$idProduto]['imagens']['Óculos 03']; ?>" alt="Cor 03" title="Cor 03" class="pdt-det-img" style="width:100%;max-width:500px;">

            <div class="w3-row-padding w3-section">
              <div class="w3-col s4">
                <img itemprop="image" alt="Cor 01" title="Cor 01" class="pdt-det-img-zoom w3-opacity w3-hover-opacity-off" src="<?php echo $produtos[$idProduto]['imagens']['Óculos 01']; ?>" style="width:100%" onclick="currentDiv(1)">
              </div>
              <div class="w3-col s4">
                <img itemprop="image" alt="Cor 02" title="Cor 02" class="pdt-det-img-zoom w3-opacity w3-hover-opacity-off" src="<?php echo $produtos[$idProduto]['imagens']['Óculos 02']; ?>" style="width:100%" onclick="currentDiv(2)">
              </div>
              <div class="w3-col s4">
                <img itemprop="image" alt="Cor 03" title="Cor 03" class="pdt-det-img-zoom w3-opacity w3-hover-opacity-off" src="<?php echo $produtos[$idProduto]['imagens']['Óculos 03']; ?>" style="width:100%" onclick="currentDiv(3)">
              </div>
            </div>
            
            <!--<a href="#" alt="Clique para ver a próxima imagem"><i class="slider-seta fas fa-angle-right"></i></a>-->
          </div>

          <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
              showDivs(slideIndex += n);
            }

            function currentDiv(n) {
              showDivs(slideIndex = n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("pdt-det-img");
              var dots = document.getElementsByClassName("pdt-det-img-zoom");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
              }
              x[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " w3-opacity-off";
            }
          
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var i;
            var x = document.getElementsByClassName("pdt-det-img");
            for (i = 0; i < x.length; ++i) {
            var img = x[i];
            var modalImg = document.getElementById('pdt-det-img-zoom');
            var captionText = document.getElementById("caption");
              img.onclick = function(){
                  modal.style.display = "block";
                  modalImg.src = this.src;
                  captionText.innerHTML = this.alt;
              }
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
              modal.style.display = "none";
            }
          </script>
          

          <!-- <div class="review col-12">
            <h3>Reviews</h3>

            <div class="reviewdet col-12">
                <p><i>"Esse produto é um produto feito especialmente para você. A ideia é que você o use sempre - de dia, à noite, à tarde, de manhã... Não importa quando, use o produto! Aproveite nossas promoções para compras acima de mil reais - promoção por tempo limitado!"</i></p>
                <p class="review_author"><b>Fulano de Tal</b>, São Paulo/SP</p>
          </div>

          <div class="reviewdet col-12">
               <p><i>"Esse produto é um produto feito especialmente para você. A ideia é que você o use sempre - de dia, à noite, à tarde, de manhã... Não importa quando, use o produto! Aproveite nossas promoções para compras acima de mil reais - promoção por tempo limitado!"</i></p>
               <p class="review_author"><b>Ciclano de Tal</b>, São Paulo/SP</p>
          </div>
        </div> -->
<style>
    /*.reviewdet { display: inline-block; position: absolute; opacity:1; transition: all .5s ease-in-out; } .reviewdet + .reviewdet { opacity: 0;}*/
</style>
<script>
    /*var current = 0, slides = document.getElementsByClassName("reviewdet"); 
    setInterval(function() { 
      for (var i = 0; i < slides.length; i++) { 
        slides[i].style.opacity = 0; 
        setTimeout(function() {
          slides[i].style.display = 'none';
        },1000) 
      } 
      
      current = (current != slides.length - 1) ? current + 1 : 0; 
      slides[current].style.opacity = 1;
      setTimeout(function() {
        slides[current].style.display = 'inline-block';
      },1000)
    }, 5000);*/
</script>

          <span class="col-12" id="paginacao">
            <div class="col-4">
              <!-- <a href="#" title="Primeira Review" name="frstReview" hreflang="pt-br" alt="Clique para ver a review 1"><i class="fas fa-angle-double-left"></i></a>
              <a href="#" title="Review Anterior" name="prvReview" hreflang="pt-br"  alt="Clique para ver a review anterior"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
              1 de 6
              </div>
            <div class="col-4">
              <a href="#" title="Próxima Review" name="nxtReview" hreflang="pt-br"  alt="Clique para ver a próxima review"><i class="fas fa-angle-right"></i></a>
              <a href="#" title="Última Review" name="lstReview" hreflang="pt-br"  alt="Clique para ver a última review"><i class="fas fa-angle-double-right"></i></a> -->
            </div>
        </span>
        </div>
        <div class="pdt-info col-12 col-md-7">
          <?php
          // Cálculo de desconto
            $valorTotal = $produtos[$idProduto]['valores']['valorTotal'];
            $valorDesc = $produtos[$idProduto]['valores']['valorDesc'];
            $valorReal = ($valorTotal - $valorDesc);
            $valorParcelas = 12;
            $valorParcela = number_format((float)$valorTotal/$valorParcelas, 2, ',', '');
            $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";
          ?>
          <h3>Descrição do Produto</h3>
          <p><?php echo $produtos[$idProduto]['descricao']; ?></p>
          <div class="row">
            <div class="comprar col-12 col-sm-6" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="BRL" />
              <form action="" method="post">
                <small>de R$ <?php echo $valorTotal ?> por</small>
                <legend><b>R$ <span itemprop="price"><?php echo $valorReal; ?></span></b> à vista</legend>
                <p>ou <?php echo $valorProdutoCompleto; ?></p>
                <label for="tamanhos">Tamanho</label>
                <select name="tamanhos">
                  <option name='tamanho' value='' disabled>Selecione seu tamanho</option>
                  <!--<option value=""></option>-->
                  <?php 
                    
                    // CARREGAR OPÇÃO ANTERIOR CASO HAJA
                    if (isset($_POST['tamanhos'])){
                      echo "<option selected='selected' value='".$_POST['tamanhos']."'>".$_POST['tamanhos']."</option>";
                    }
                    
                    foreach ($tamanhos as $key => $value) {
                      echo "<option name='tamanho' value='".$key."'>".$value."</option>";
                    }
                  ?>
                </select>
                <br/>
                <label for="cores">Cor</label>
                <select name="cores">
                  <option name='cor' value='' disabled>Selecione sua cor</option>
                  <?php 

                    // CARREGAR OPÇÃO ANTERIOR CASO HAJA
                    if (isset($_POST['cores'])){
                      echo "<option selected='selected' value='".$_POST['cores']."'>".$_POST['cores']."</option>";
                    }

                    foreach ($produtos[$idProduto]['estoque']['cores'] as $key => $value) {
                      echo "<option name='cor' value='".$key."'>".$value."</option>";
                    }
                  ?>
                </select>
                <br/>
                <label for="qnt">Quantidade</label>
                <input type="number" min="1" value="1" name="qnt" id="qnt">
                <br/>
                <fieldset>
                  <input type="submit" value="Favoritar" name="submit" title="Adicionar aos Favoritos" alt="Clique para adicionar aos Favoritos" class="pdt-det-btn buy col-12 col-md-4"></input>
                  <input type="submit" value="Adicionar" name="submit" title="Adicionar ao carrinho e continuar comprando" alt="Clique para Adicionar ao carrinho" class="pdt-det-btn buy col-12 col-md-4"></input>
                  <input type="submit" value="Finalizar" name="submit" title="Adicionar ao carrinho e Finalizar a compra" alt="Clique para incluir na compra e ir para o Carrinho" class="pdt-det-btn buy col-12 col-md-4"></input>
                </fieldset>
              </form>
              <?php
                // SE ALGUM DOS BOTÕES NA PÁGINA DE PRODUTO FOI CLICADO
                if (isset($_POST['submit'])) {



                  // E SE O VALUE DO SUBMIT FOR FAVORITAR
                  if ($_POST['submit'] === 'Favoritar'){

                      // E SE NÃO HOUVER COR NEM TAMANHO DEFINIDOS:
                      if (empty($_POST['cores']) && empty($_POST['tamanhos'])){
                        echo "<p class='faltaInfo alertando'>Adicionamos o item ".$nomeProduto." na sua lista de favoritos! =)</p>";

                      // OU, SE SÓ TIVER COR SELECIONADA
                      } elseif (isset($_POST['cores']) && empty($_POST['tamanhos'])){
                        $corEscolhida = $_POST['cores'];
                        echo "<p class='faltaInfo alertando'>Adicionamos o item ".$nomeProduto." (cor ".$corEscolhida.") na sua lista de favoritos! =)</p>";

                      // OU, SE SÓ TIVER TAMANHO SELECIONADO
                      } elseif (empty($_POST['cores']) && isset($_POST['tamanhos'])){
                        $tamanhoEscolhido = $_POST['tamanhos'];
                        //$corEscolhida = "";
                        echo "<p class='faltaInfo alertando'>Adicionamos o item ".$nomeProduto." (tamanho ".$tamanhoEscolhido.") na sua lista de favoritos! =)</p>";

                      // OU, SE TIVER COR E TAMANHO SELECIONADOS:
                      }else /*if (isset($_POST['cores']) && isset($_POST['tamanhos']))*/{
                        $corEscolhida = $_POST['cores'];
                        $tamanhoEscolhido = $_POST['tamanhos'];
                        echo "<p class='adicionado alertando'>Adicionamos o item ".$nomeProduto." (tamanho ".$tamanhoEscolhido." e cor ".$corEscolhida.") na sua lista de favoritos! =)</p>";}

                    // E TAMBÉM - SE NÃO HOUVER USER ID
                    if (empty($_POST['userID'])){
                    echo "<br/><p class='alertando alerta'>Para atualizar seus favoritos é necessário fazer login.</p>";
                    }
                  }


                  // JÁ SE O VALUE DO SUBMIT FOR ADICIONAR    
                  if ($_POST['submit'] === 'Adicionar'){

                    // SE NÃO HOUVER COR NEM TAMANHO DEFINIDOS:
                    if (empty($_POST['cores']) && empty($_POST['tamanhos'])){
                      echo "<p class='faltaInfo alertando'>Selecione uma cor e um tamanho para o seu ".$nomeProduto.", por favor  :P</p>";

                    // OU, SE SÓ TIVER COR SELECIONADA
                    } elseif (isset($_POST['cores']) && empty($_POST['tamanhos'])){
                      $corEscolhida = $_POST['cores'];
                      echo "<p class='faltaInfo alertando'>Qual tamanho do seu ".$nomeProduto." (cor ".$corEscolhida.") você deseja?</p>";
                      return $corEscolhida;

                    // SÓ TIVER TAMANHO SELECIONADO
                    } elseif (empty($_POST['cores']) && isset($_POST['tamanhos'])){
                      $tamanhoEscolhido = $_POST['tamanhos'];
                      $corEscolhida = "";
                      echo "<p class='faltaInfo alertando'>De que cor você quer o seu ".$nomeProduto." (tamanho:".$tamanhoEscolhido.")?</p>";

                    // OU, SE TIVER COR E TAMANHO SELECIONADOS:
                    }else /*if (isset($_POST['cores']) && isset($_POST['tamanhos']))*/{
                      $corEscolhida = $_POST['cores'];
                      $tamanhoEscolhido = $_POST['tamanhos'];
                      $qntEscolhida = $_POST['qnt'];
                      // MAS - SE NÃO HOUVER QUANTIDADE INSERIDA
                      if (empty($_POST['qnt'])){
                        echo "<br/><p class='alertando faltaInfo'> Quantos ".$nomeProduto." você deseja adicionar ao carrinho?</p>";
                      // JÁ, SE HOUVER QUANTIDADE DEFINIDA (PADRÃO É 1)
                      } else {
                        echo "<p class='adicionado alertando'>Adicionamos ".$qntEscolhida." item(ns) ".$nomeProduto." (tamanho ".$tamanhoEscolhido." e cor ".$corEscolhida.") ao carrinho!</p>";
                      }
                    }
                  }
                }
              ?>
            </div>
            <div class="col-12 col-sm-6">
              <h4>Compartilhe esse produto!</h4>
              <div class="social-share col-12">
                <ul class="row">
                  <li class="col-3"><a name="socialShareFacebook" alt="Clique para compartilhar esse produto no Face" title="Compartilhar esse produto no Facebook" href="http://www.facebook.com/sharer.php?u=http://digitalgrupo.provisorio.ws/produto.php" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a></li>
                  <li class="col-3"><a name="socialSharePinterest" alt="Clique para pinar esse produto no Pinterest" title="Pinar esse produto no Pinterest" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fab fa-pinterest-square"></i></a></li>
                  <li class="col-3"><a name="socialShareGooglePlus" alt="Clique para compartilhar esse produto no Google+" title="Compartilhar esse produto no GooglePlus" href="https://plus.google.com/share?url=http://digitalgrupo.provisorio.ws/produto.php" target="_blank" rel="noopener"><i class="fab fa-google-plus"></i></a></li>
                  <li class="col-3"><a name="socialShareEmail" alt="Clique para compartilhar esse produto por email" title="Compartilhar esse produto por Email" href="mailto:marcelo@djament.com.br?Subject=Veja esse produto da Digital Grupo!&Body=Veja essse produto! Lembrei de você!" target="_blank" rel="noopener"><i class="fas fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <ul>
            <li>
              <ul itemprop="material">
                <li><strong>Materiais:</strong> </li>
                <li><?php echo $produtos[$idProduto]['detalhes']['Materiais']; ?></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><strong>Tamanho:</strong> </li>
                <li><?php echo $tamanho ?></li>
              </ul>
            </li>
            <li>
              <ul itemprop="color">
                <li><strong>Cor:</strong> </li>
                <li><?php echo $cor ?></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><strong>Garantia:</strong> </li>
                <li><?php echo $produtos[$idProduto]['detalhes']['Garantia']; ?></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><strong>Sob Medida:</strong> </li>
                <li><?php echo $produtos[$idProduto]['detalhes']['Sob Medida']; ?></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
      <article class="row justify-content-center video">
        <div class="mobileOnly col-12">
          <iframe title="Assistir ao video do Produto" name="pdtVideoMobile" alt="Clique para assistir ao filme" width="300" height="169" src="https://www.youtube.com/embed/rRVcPVZgksA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="desktopOnly col-12">
          <iframe title="Assistir ao video do Produto" name="pdtVideoDesktop" alt="Clique para assistir ao filme" width="560" height="315" src="https://www.youtube.com/embed/rRVcPVZgksA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </article>
    </section>

    <!-- ## VIRTINE DE PRODUTOS ## -->
    <section class="pdt-vitrine row">
      <!-- ### BANNER PROMOCIONAL HORIZONTAL (IGUAL AO DA VITRINE DE PRODUTOS) -->
      <span class="cta-banner-horizontal"><a title="Banner Vitrine de Produto" alt="Clique para ver os detalhes desse produto" name="bannerPdt" href="http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php" hreflang="pt-br" itemprop="isRelatedTo"><strong><?php echo $bannerHorizontal ?></strong></a></span>
      <!-- ### AGRUPAMENTO DE 4 ARTICLES/CARDS DE PRODUTOS -->
      <h4 class="col-12">Produtos Relacionados</h4>
      <!--<article class="pdt-card col-12 col-sm-6 col-md-3" itemprop="isRelatedTo">
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
include ("../inc/footer.php");
 ?>
