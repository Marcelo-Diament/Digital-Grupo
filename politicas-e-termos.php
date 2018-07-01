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
              <li><a class="animate dropli" href="#faqcat01">Termos de Uso <i class="fas fa-caret-left"></i></a></li>
              <li><a class="animate dropli" href="#faqcat02">Trocas, Devoluções e Arrependimento <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat03">Prazos de Entrega e Frete <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat04">Políticas de Privacidade <i class="fas fa-caret-right"></i></a></li>
              <li><a class="animate dropli" href="#faqcat05">Direitos Autorais e de Imagem <i class="fas fa-caret-right"></i></a></li>
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
          <article class="faqLista" >
            <div class="destino" id="faqcat01"></div>
            <h4>Termos de Uso</h4>
            <button class="faqDuvida" id="faqpergunta0101">Disposições Gerais sobre Termos de Uso</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0101">A plataforma <?php echo $siteNegocio ?> e todas as páginas, módulos e funcionalidades a ela relacionados, incluindo, mas não se limitando, a página do eCommerce (tudo em conjunto denominado simplesmente "Plataforma"), pertence à <?php echo $nomeNegocio ?> S.A. ("<?php echo $nomeNegocio ?>" ou "Nós").</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0102">Ciência dos Termos</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0102">Ao acessar ou visitar, de qualquer forma, a Plataforma, todos seus clientes da <?php echo $nomeNegocio ?> e visitantes ou usuários da Plataforma, sejam pessoas físicas ou jurídicas (em conjuntando denominados simplesmente "Clientes") deverão estar de acordo com estes Termos de Uso da Plataforma ("Termos de Uso") e obedecer todas as regras aqui constantes. Portanto, se você não estiver de acordo com este documento, você não deverá, de qualquer forma, acessar a Plataforma ou quaisquer de seus conteúdos e/ou serviços.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0103">Sobre o uso dos serviços</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0103">1. O acesso à Plataforma e/ou a utilização dos serviços poderá se dar por meio de computadores e dispositivos móveis, incluindo smartphones, tablets ou qualquer outro dispositivo relacionado ou assemelhado, seja por meio de aplicações/aplicativos específicos ou não.
              <br/>
              2. Para que você possa acessar determinados conteúdos ou serviços na Plataforma, você poderá ser requisitado a fornecer informações em formulários ou cookies e a criar uma Conta, o que poderá se dar de forma gratuita ou onerosa, conforme informação disponível na Plataforma. Você declara e garante que todas as informações prestadas serão verdadeiras, exatas, atuais e completas e serão mantidas em tais condições durante sua permanência como usuário da Plataforma.
              <br/>
              3. Você não poderá permitir que terceiros utilizem sua Conta, sob pena de se responsabilizar integralmente pelas atividades desenvolvidas através de sua Conta, inclusive por eventuais danos causado a Nós ou a terceiros. Você é o único e exclusivo responsável pela guarda e sigilo das informações e senha de acesso à sua Conta. Em caso de perda de dados, violação de segurança ou uso não autorizado de sua Conta, você deverá notificar a <?php echo $nomeNegocio ?> imediatamente, por meio dos canais de comunicação indicados na Plataforma.
              <br/>
              4. Você autoriza a <?php echo $nomeNegocio ?> a utilizar os dados que você tenha disponibilizado, conforme regras e disposições da Política de Privacidade da Plataforma, também disponível na página inicial <?php echo $siteNegocio ?>. Recomendamos que você leia esse documento e, em caso de dúvidas, entre em contato conosco.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0104">Sobre o uso do conteúdo</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0104">1. Para os fins destes Termos de Uso, "Conteúdo" inclui, mas não se limita a sons, vídeos, imagens, textos, gráficos, fotos, combinações audiovisuais, recursos interativos, comentários, propagandas, anúncios publicitários, software e aplicativos, dentre outros materiais que você poderá, por meio da Plataforma, ter acesso e/ou utilizar. 
              <br/>
              2. "Conteúdo Vedado" consiste em qualquer Conteúdo que (a) seja contrário às leis e regulamentos locais, nacionais e internacionais; (b) contenham qualquer material que viole direitos de terceiros, incluindo direito autoral ou de propriedade intelectual; (c) seja abusivo, como textos, fotos ou imagens que tenham caráter discriminatório, difamatório, obsceno ou que contenha pornografia, e demais conteúdos congêneres; (d) que viole a intimidade, a vida privada, a honra, a imagem, o nome ou quaisquer direitos dos demais Clientes e de qualquer terceiro (inclusive de pessoa jurídicas, entidades e organizações e ela equiparadas); (e) que contenha material publicitário, de propaganda ou promocional, de qualquer espécie; (f) que provoque, por suas características (como extensões e formatos de arquivos) danos ao sistema que permite a utilização da Plataforma ou de quaisquer de seus serviços.
              <br/>
              3. A Plataforma dispõe de determinadas funcionalidades que permitem com que os Clientes enviem ou publiquem materiais, textos e/ou outros conteúdos. Neste sentido, você entende, aceita, reconhece e se compromete a:
              <br/>
              (A) não compartilhar, transmitir, enviar, disponibilizar, exibir ou publicar na Plataforma qualquer Conteúdo que consista em propriedade intelectual de terceiros ou que esteja protegido por direitos autorais, por segredo de negócio ou por qualquer outra forma de proteção de direitos de titularidade de terceiros;
              (b) não compartilhar, transmitir, enviar, disponibilizar, exibir ou publicar na Plataforma qualquer Conteúdo Vedado;
              (c) não realizar o download de qualquer Conteúdo, a menos que tal opção esteja expressamente liberada na Plataforma;
              (d) não reproduzir, distribuir, transmitir, exibir, vender, licenciar ou explorar comercialmente qualquer Conteúdo;
              (e) não fraudar, desativar ou de qualquer forma interferir em características relacionadas à segurança da Plataforma e dos Conteúdos.
              <br/>
              4. Você declara, garante e reconhece que:
              <br/>
              (a) será o único e exclusivo responsável pelo Conteúdo que eventualmente compartilhar, transmitir, enviar, disponibilizar, exibir ou publicar na Plataforma, bem como por eventuais consequências ou reclamações de terceiros, ficando obrigado a indenizar e manter indene a <?php echo $nomeNegocio ?>;
              (b) ao utilizar e/ou acessar a Plataforma, você poderá se expor a Conteúdos ou outros materiais que foram enviados e pertencem a terceiros ou outros Clientes, de forma que a <?php echo $nomeNegocio ?> não endossa nem garantirá qualquer Conteúdo, opinião ou comentário disponibilizado, exibido ou publicado na Plataforma por outros Clientes, renunciando e estando isenta de qualquer responsabilidade neste sentido;
              (c) ao utilizar e/ou acessar a Plataforma você renuncia a qualquer direito de indenização, presente ou futura, contra a <?php echo $nomeNegocio ?> em relação a eventuais violações de direitos de terceiros ou outros Clientes;
              (d) todo e qualquer conteúdo e material, incluindo as marcas e os nomes de domínios, que sejam disponibilizados diretamente pela <?php echo $nomeNegocio ?> na Plataforma pertencem exclusivamente à <?php echo $nomeNegocio ?> sob reserva de direitos autorais e outros direitos de propriedade intelectual nos termos da lei. Esses conteúdos próprios da <?php echo $nomeNegocio ?> não se confundem com os "Conteúdos", conforme definido no item 5 acima, que podem ser disponibilizados pelos Clientes, na forma do item 7 acima, e sobre os quais a <?php echo $nomeNegocio ?> não possui qualquer controle ou direitos de propriedade intelectual. Em caso de dúvidas, você deverá contatar a <?php echo $nomeNegocio ?>, por meio da Plataforma.
              <br/>
              5. Você admite e concorda que a <?php echo $nomeNegocio ?> poderá disponibilizar na Plataforma a opção de download de documentos de seu interesse. Em tal hipótese, você não deverá utilizar tais documentos em outras mídias a não ser na memória do computador em que tenha efetuado o download. Qualquer exceção a essa regra deverá estar expressamente indicada na Plataforma.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0105">Denúncioa a conteúdo vetado</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0105">Caso você identifique na Plataforma qualquer Conteúdo que seja considerado Conteúdo Vedado, incluindo por violar seus direitos autorais e/ou de propriedade intelectual, você poderá promover uma denúncia por meio do e-mail <?php $emailContato ?>. Após apuração das informações, a <?php echo $nomeNegocio ?> poderá, a seu exclusivo critério, remover o Conteúdo denunciado.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0106">Suas obrigações ao acessar a plataforma</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0106">1. Você não poderá reproduzir, modificar, realizar engenharia reversa, compilar, descompilar, transmitir, publicar, sublicenciar, permitir, autorizar, alugar, vender, distribuir, ou, de qualquer outra forma, utilizar qualquer conteúdo, funcionalidade, software ou material da Plataforma de forma não permitida nesses Termos de Uso, sem prévia e expressa autorização, por escrito, da <?php echo $nomeNegocio ?> ou dos terceiros titulares dos direitos, quando for o caso.
              <br/>
              2. Você declara e garante que não registrará nem tentará registrar nomes de domínio na internet, perante quaisquer entidades, nacionais ou estrangeiras, contendo marcas, nomes e/ou elementos pertencentes à <?php echo $nomeNegocio ?>, ou relacionados a esta Plataforma ou a seus produtos e serviços.
              <br/>
              3. Você se compromete a respeitar as marcas da <?php echo $nomeNegocio ?>, não devendo utilizá-las sem prévia autorização, por escrito, da <?php echo $nomeNegocio ?>, nem praticar atos que possam denegrir tais marcas.
              <br/>
              4. Ainda, você se concorda e se compromete a: 
              <br/>
              (a) não explorar ou utilizar comercialmente, por qualquer meio, qualquer parte dos serviços ou dos conteúdos da Plataforma. Para os fins do presente, exploração ou utilização com finalidade comercial inclui, mas não se limita a (i) venda ou disponibilização, mediante recebimento de retribuição ou benefício, de acesso a esses serviços e/ou conteúdos, (ii) a venda ou comercialização de publicidade, patrocínios ou promoções associados a esses serviços ou conteúdos;
              (b) não alterar nem modificar qualquer parte dos serviços ou dos conteúdos disponibilizados na Plataforma;
              (c) não reivindicar ou buscar obter registro ou proteção de quaisquer direitos de propriedade intelectual ou direitos autorais sobre os Conteúdos de titularidade de terceiros ou sobre Conteúdos pertencentes à <?php echo $nomeNegocio ?>;
              (d) não utilizar qualquer sistema automatizado (incluindo "robôs", "spiders" ou "offline readers") que permita o acesso à Plataforma de forma automática e com quantidade e velocidade superiores ao que seria possível de fosse feito por pessoas naturais;
              (e) não coletar e/ou utilizar qualquer informação pessoal de outros Clientes;
              (f) não utilizar os sistemas de comunicação fornecidos pela Plataforma com finalidade comercial de qualquer espécie e/ou de forma que se caracterize concorrência desleal contra a <?php echo $nomeNegocio ?>;
              (g) cumprir com todas as leis, normas e regulamentos aplicáveis, no Brasil ou no exterior.</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat02"></div>
            <h4>Troca, Devolução e Arrependimento</h4>
            <button class="faqDuvida" id="faqpergunta0201">Termos e Condições Gerais</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0201">A <?php echo $nomeNegocio ?> utiliza tecnologia de ponta para a fabricação de seus produtos, primando pela qualidade e satisfação de seus clientes. Pelo respeito e para que seja mantida a credibilidade conquistada junto aos seus consumidores, a empresa criou uma política de troca e devolução de acordo com o Código de Defesa do Consumidor, e pensando na facilidade para que você (cliente) obtenha uma negociação eficaz, ágil e principalmente satisfatória desenvolvemos a troca e devolução automática.
              <br/>
              O processo é simples, basta se logar e acessar a página TROCA E DEVOLUÇÃO localizado em SUA CONTA. Para se logar <a href="login.php" target="_blank"><b>CLIQUE AQUI</b></a>!
              <br/>
              Os pedidos elegíveis para a troca/devolução ficam no campo "Pedidos Disponíveis Para a Troca ou Devolução".
              <br/>
              IMPORTANTE! A disponibilização para a troca/devolução pode ocorrer em até 48h após a entrega do seu pedido.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0202">Devolução por Arrependimento ou Desistência</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0202">Se ao receber o produto, você resolver devolvê-lo por arrependimento, deverá fazê-lo em até sete dias corridos, a contar da data de recebimento. Observando as seguintes condições:
              <br/>
              1. O produto não poderá ter indícios de uso.
              <br/>
              2. O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota fiscal, etiquetas, tag's (etiqueta com código de referência do produto) devidamente fixada no produto e todos os seus acessórios.
              <br/>
              3. Ao efetuar o processo de devolução o cliente deverá no verso da nota fiscal a ser devolvida, informar o motivo da recusa/devolução, o nome de quem está devolvendo, CPF e a data da devolução.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0203">Produtos com Defeito ou Avaria</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0203">Se ao receber o produto, você identificar qualquer defeito comunique imediatamente nosso Serviço de Atendimento ao Consumidor (SAC) através do e-mail <?php echo $emailContato ?> ou se preferir, pelo número <?php echo $telefoneFixo ?> de segunda à sexta das 08h00 às 18h00. Para efetuar a troca ou devolução do produto com defeito, deverão ser observadas as seguintes condições:
              <br/>
              1. O produto não poderá ter indícios de uso.
              <br/>
              2. O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota fiscal, etiquetas, tag's (etiqueta com código de referência do produto) devidamente fixada no produto e todos os seus acessórios.
              <br/>
              3. Ao efetuar o processo de devolução o cliente deverá no verso da nota fiscal a ser devolvida, informar o motivo da recusa/devolução, o nome de quem está devolvendo, CPF e a data da devolução.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0204">Troca de Produto</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0204">A troca poderá ser efetuada por produtos de mesma referência (modelo). O prazo para solicitação de troca do produto é de trinta (30) dias corridos após o recebimento.
              <br/>
              <b>*ATENÇÃO:</b> Para efetuar o processo de troca é necessário estar logado. Para se logar <a href="login.php" taget="_blank"><b>CLIQUE AQUI</b></a>!</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat03"></div>
            <h4>Prazos de Entrega e Frete</h4>
            <button class="faqDuvida" id="faqpergunta0301">Prazo de Entrega</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0301">O prazo de entrega depende da localidade do endereço de entrega do seu pedido. Não esqueça! Nós começamos a contar a data da entrega a partir da data de confirmação de pagamento do seu pedido pela instituição financeira ou compensação de seu boleto bancário e após a confirmação dos seus dados cadastrais.
              <br/>
              No caso de pagamento via boleto bancário, o prazo de confirmação pode levar até 3-4 dias úteis.
              <br/>
              Alguns fatores climáticos ou situações adversas podem interferir na entrega de suas compras. Nesses casos, verifique se ocorreram greves, paralisações ou acidentes em sua localidade.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0302">Regras e Restrições de Entrega</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0302">As entregas são realizadas de segunda a sexta das 9h às 18h, exceto feriados. Toda entrega deverá ter o comprovante assinado pelo recebedor com preenchimento de data, nome legível e número do RG.
              <br/>
              Locais de destino com baixa população, de difícil acesso ou distantes das capitais podem necessitar de mais prazo para a entrega ou serem retirados na agência dos Correios mais próxima.
              <br/>
              Locais de destino sujeito a prazo diferenciado pelos Correios, com possibilidade de acréscimo de até 7 dias úteis para a entrega ou serem retirados na agência dos Correios mais próxima.
              <br/>
              As entregas são realizadas apenas dentro do território nacional. Não haverá reembolso do frete ao cliente em caso de uma segunda troca dos mesmos produtos ou pedido. Em caso de dúvidas ou esclarecimentos, por favor, contate nosso serviço de Atendimento ao Cliente através do telefone <?php echo $emailContato ?>.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0303">Ausência no Momento da Entrega</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0303">Para o sucesso de sua entrega, é imprescindível que as informações de endereço e telefone do seu cadastro estejam atualizadas. No caso de insucesso de entrega provocado por: cliente ausente, dados cadastrais incorretos ou mudança de endereço, o pedido será devolvido a nossa central de distribuição e seu pedido será cancelado e reembolsado.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0304">Ausência no Momento da Entrega</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0304">Você pode acompanhar o seu pedido acessando o link Status do Pedido, situado no menu da página principal. Insira o número do pedido e o email cadastrado no ato da compra e clique em "ver pedido".
              <br/>
              Você também receberá passo a passo de seu pedido através do email cadastrado. Clique na palavra "rastrear" do email recebido "Seu pedido foi postado" para visualizar o rastreamento e obter as informações atualizadas diretamente com a transportadora.
              <br/>
              A informação do status de entrega estará disponível no site da transportadora um dia após o envio do e-mail.
              <br/>
              Alguns pedidos são embalados em mais de uma caixa. Nesses casos, cada caixa terá um número de postagem diferente para acompanhamento de entrega.</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat04"></div>
            <h4>Políticas de Privacidade</h4>
            <button class="faqDuvida" id="faqpergunta0401">Disposições Gerais</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0401">Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o mais produtiva e agradável possível.
              <br/>
              A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o <?php $nomeNegocio ?>.
              <br/>
              Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o <?php $nomeNegocio ?> serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).
              <br/>
              A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de nascimento e/ou outros.
              <br/>
              O uso do <?php $nomeNegocio ?> pressupõe a aceitação deste Acordo de privacidade. A equipa do <?php $nomeNegocio ?> reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0402">Sobre os Anúncios</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0402">Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0403">Cookies e Web Beacons</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0403">Utilizamos cookies para armazenar informação, tais como as suas preferências pessoas quando visita o nosso website. Isto poderá incluir um simples popup, ou uma ligação em vários serviços que providenciamos, tais como fóruns.
              <br/>
              Em adição também utilizamos publicidade de terceiros no nosso website para suportar os custos de manutenção. Alguns destes publicitários, poderão utilizar tecnologias como os cookies e/ou web beacons quando publicitam no nosso website, o que fará com que esses publicitários (como o Google através do Google AdSense) também recebam a sua informação pessoal, como o endereço IP, o seu ISP, o seu browser, etc. Esta função é geralmente utilizada para geotargeting (mostrar publicidade de São Paulo apenas aos leitores oriundos de São Paulo por exemplo) ou apresentar publicidade direcionada a um tipo de utilizador (como mostrar publicidade de restaurante a um utilizador que visita sites de culinária regularmente, por exemplo).
              <br/>
              Você detém o poder de desligar os seus cookies, nas opções do seu browser, ou efetuando alterações nas ferramentas de programas Anti-Virus, como o Norton Internet Security. No entanto, isso poderá alterar a forma como interage com o nosso website, ou outros websites. Isso poderá afetar ou não permitir que faça logins em programas, sites ou fóruns da nossa e de outras redes.</p>
            </div>
            <button class="faqDuvida" id="faqpergunta0404">Ligações a Sites de Terceiros</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0404">O <?php echo $nomeNegocio ?> possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.
              <br/>
              Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</p>
            </div>
          </article>
          <article class="faqLista" >
            <div class="destino" id="faqcat05"></div>
            <h4>Direitos Autorais e de Imagem</h4>
            <button class="faqDuvida" id="faqpergunta0501">Disposições Gerais</button>
            <div class="faqDuvidaEResposta">
              <p class="faqResposta" id="faqresposta0501">Este site observa a Lei de Direitos Autorais nº 9.610, de 19.02.98, do Governo Federal Brasileiro.
              <br/>
              Por favor não copie o conteúdo deste site. Possuímos um sistema de rastreamento (Copyscape) para sermos notificados assim que uma cópia do nosso texto for publicado na internet.
              <br/>
              Todo o conteúdo deste site é registrado legalmente com certificado (ICP Brasil) válido em todos os tribunais e assinado por autoridade competente.
              <br/>
              Os direitos autorais de todo o material apresentado neste site como imagens, fotografias still, fotos 360 graus, tour virtuais, artigos e textos são propriedade da <?php echo $nomeNegocio ?>. A reprodução, adaptação, modificação ou utilização do conteúdo disponibilizado neste site, parcial ou integralmente, é permitida somente com autorização prévia por escrito da <?php echo $nomeNegocio ?> ou do titular dos direitos autorais.
              <br/>
              Qualquer uso não autorizado de qualquer material incluído neste site pode constituir uma violação das leis de direitos autorais, das leis de marcas comerciais, das leis de privacidade e publicidade e das leis e regras de comunicações.</p>
            </div>
          </article>
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