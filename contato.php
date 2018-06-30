<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt-br" dir="ltr">
  <head>
    <!-- SCRIPTS E INCLUDES -->
    <?php include_once("assets/php/functions.php") ?>
    <script src="assets/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
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
    <title><?php echo $tituloContato ?></title>
    <!-- ESTILOS, FONTES... -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-produtos-marcelo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="icon" type="image/png" sizes="96x96" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/favicon-96x96.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- META DATA (SEO) / OG -->
    <meta name="title" content="<?php echo $metaTitleContato ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDescContato ?>">
    <meta name="keywords" content="<?php echo $metaKeyWordsContato ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitleContato ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescContato ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrlContato ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocalContato ?>" />
    <meta property="og:type" content="<?php echo $metaOgTypeContato ?>" />
    <meta property="og:image" content="<?php echo $metaOgImageContato ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAltContato ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrlContato ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageTypeContato ?>" />
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
        <h1><?php echo $tituloContato ?></h1>
        <h4><?php echo $subtituloContato ?></h4>
      </article>
      <p>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a title="Home" name="home" hreflang='pt-br' alt='Clique para acessar a homepage' href="<?php echo $siteNegocio ?>" itemprop="url"><span itemprop="title">Home</span></a> › </span>
        <?php echo $tituloContato ?>
      </p>
    </section>

    <!-- ## FORMULÁRIO DE CONTATO ## -->
    <section class="row contato">
      <article class="formContato col-12 col-md-8">
        <div class="col-12 offset-md-2 col-md-9">

          <?php
            // SE CLICAREM EM ENVIAR
              if (!isset($_POST['submit'])) {

                // Mensagem padrão da página de contato
                echo "<h4>Envie sua Mensagem</h4><p>Tem dúvidas, sugestões, comentários? Envie sua mensagem!</p>";

                // Se o submit for verdadeiro (estiver setado), carrega as informações (POST) e exibe mensagem personalizada
                } else{
                  $nome = $_POST['nome'];
                  $telefoneFixoForm = $_POST['telefoneFixo'];
                  $telefoneCelularForm = $_POST['telefoneCelular'];
                  $emailContatoForm = $_POST['emailContato'];

                  // Ocultação dos 5 primeiros dígitos dos dados de contato
                  $i = 0;
                  while ($i<5) {
                    $emailContatoForm{$i} = "*";
                    $telefoneCelularForm{$i} = "*";
                    $telefoneFixoForm{$i} = "*";
                    $i = $i+1;
                  }

                  // Mensagem personalizada
                  echo "<h4>Obrigado ".$nome.", mensagem enviada!</h4><p>Retornaremos em breve ";
                  if ($_POST['formcontato'] == "Whatsapp") {
                    echo " (através do seu Whatsapp - ".$telefoneCelularForm."). Até logo!</p>";
                  } else if ($_POST['formcontato'] == "email") {
                    echo "(através do email ".$emailContatoForm."). Até logo!</p>";
                  } else if ($_POST['formcontato'] == "Telefone") {
                    echo "(através do telefone ".$telefoneFixoForm."). Até logo!</p>";
                  } else{
                    echo "Até logo!";
                  }
                  // Restante da página após envio da mensagem (dados de contato, share)
                  echo "
                  
                  <article class='dadosContato col-12'>
                    <ul>
                      <br/>
                      <li style='text-align:center;'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='tel:".$telefoneFixo."'><i class='fas fa-phone-volume'></i> ".$telefoneFixo."</a></li>
                      <li style='text-align:center;'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='tel:+55 ".$telefoneCelular."' target='_blank'><i class='fab fa-whatsapp'></i> ".$telefoneCelular."</a></li>
                      <li style='text-align:center;'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='mailto:'".$emailContato."?Subject=Contato via template eCommerce Digital Grupo&Body=Tenho interesse em adquirir um eCommerce com o Digital Grupo' target='_blank'><i class='fas fa-envelope'></i> ".$emailContato."</a></li>
                      <li style='text-align:center;'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='https://goo.gl/maps/BNMCvVriyyt' target='_blank'><i class='fas fa-map-marker-alt'></i> Rua Cardoso de Melo, nº 90</a></li>
                      <li style='text-align:center;'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='https://goo.gl/maps/BNMCvVriyyt' target='_blank'>Vila Olímpia | São Paulo/SP</a></li>
                    </ul>
                    <h4>Compartilhe nossa página!</h4>
                    <br/>
                    <div class='social-share col-12'>
                      <ul class='row'>
                        <li class='col-3'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='http://www.facebook.com/sharer.php?u=http://digitalgrupo.provisorio.ws/index.php' target='_blank'><i class='fab fa-facebook-square'></i></a></li>
                        <li class='col-3'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());'><i class='fab fa-pinterest-square'></i></a></li>
                        <li class='col-3'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='https://plus.google.com/share?url=http://digitalgrupo.provisorio.ws/index.php' target='_blank'><i class='fab fa-google-plus'></i></a></li>
                        <li class='col-3'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='mailto:marcelo@djament.com.br?Subject=Veja esse site da Digital Grupo!&Body=Veja essse site! Lembrei de você!'><i class='fas fa-envelope'></i></a></li>
                      </ul>
                    </div>
                    <article class='insta-card col-12'>
                      <div>
                        <div class='insta-card-subtitle'>acesse nosso insta</div>
                        <h3 class='insta-card-title'><strong>".$instaUser."</strong></h3>
                        <button class='insta-card-btn'><a hreflang='pt-br' alt='Clique e veja mais informações sobre o produto' href='".$instaUrl."' target='_blank'>Visitar</a></button>
                      </div>
                    </article>
                  </article>
                </section>

                  ";
                  exit;
                }
            ?>
          <br/>
        </div>
        <form action="contato.php" method="post" id="contato" class="col-12 offset-md-2 col-md-9">
          <label for="nome">Nome*:</label>
          <input type="text" name="nome" id="nome" placeholder=" Insira seu nome" autofocus required>
          <br/>
          <label for="telefoneCelular">Telefone Celular*:</label>
          <input type="text" name="telefoneCelular" id="telefoneCelular" placeholder=" Insira seu telefone com DDD" required>
          <br/>
          <label for="telefoneFixo">Telefone Fixo*:</label>
          <input type="text" name="telefoneFixo" id="telefoneFixo" placeholder=" Insira seu telefone com DDD">
          <br/>
          <label for="emailContato">email:</label>
          <input type="email" name="emailContato" id="emailContato" placeholder=" Insira seu email" required>
          <br/> 
            <h6>Como prefere que a gente entre em contato? (opcional)</h6><br/>
            <div class="row">
              <div class="col-3 col-md-2 radio">
                <input type="radio" name="formcontato" id="formcontato-tel" value="Telefone" class="col-2">
                <label for="formcontato-tel">Telefone</label>
              </div>
              <div class="col-3 col-md-2 radio">
                <input type="radio" name="formcontato" id="formcontato-email" value="email" class="col-2">
                <label for="formcontato-email">email</label>
              </div>
              <div class="col-3 col-md-2 radio">
                <input type="radio" name="formcontato" id="formcontato-whatsapp" value="Whatsapp" class="col-2">
                <label for="formcontato-whatsapp">Whatsapp</label>
              </div>
            </div>
          <br/>
          <label for="mensagem">Mensagem:</label>
          <textarea name="mensagem" id="mensagem" form="contato" cols="30" rows="10" placeholder=" Envie sua mensagem, teremos prazer em te ajudar!" resize="y"></textarea>
          <input type="submit" value="Enviar" name="submit" class="pdt-det-btn buy col-12 col-md-4">
        </form>
      </article>
      <article class="dadosContato col-12 col-md-4">
        <ul>
          <h4 class="col-12">Dados de Contato</h4>
          <p class="col-12">Se preferir, entre em contato diretamente conosco, será um prazer te ajudar!</p>
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