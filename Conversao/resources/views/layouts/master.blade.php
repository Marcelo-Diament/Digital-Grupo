<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta name="title" content="Nosso Site">
    <meta name="author" content="Digital Grupo">
    <meta name="decription" content="Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil">
    <meta name="keywords" content="html, css, php, js, digital house, digital grupo, projeto integrador">
    <link rel="icon" type="image/png" sizes="96x96" href="http://digitalgrupo.provisorio.ws/assets/images/logo.png">
    <meta name="theme-color" content="#000">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="/Digital-Grupo/assets/css/style.css">
    <link rel="stylesheet" href="/Digital-Grupo/assets/css/style-produtos-marcelo.css">
    <title>Nosso site</title>
  </head>
<body>

  
  @yield('content')




  <footer class="container-fluid">
    <div class="row">
     <div class="newsletter col-md-6">
       <h4>Assine nosso Newsletter</h4>
       <form class="newsletter-box" action="informacoes.php" method="post">
         <label>
         <input type="email" name="email-newsletter" placeholder="Insira seu email aqui">
         <button type="submit" name="submit-newsletter">Ok</button>
         </label>
       </form>
     </div>
     <div class="redes-socias col-md-6">
        <h4>Siga-nos</h4>
        <div class="row">
          <a href="#" class="offset-1 col-2">
            <img src="assets/images/logo-facebook.png" alt="Logo do Facebook" class="img-redes">
          </a>
          <a href="#" class="col-2">
            <img src="assets/images/logo-instagram.png" alt="Logo do Instagram" class="img-redes">
          </a>
          <a href="#" class="col-2">
            <img src="assets/images/logo-linkedin.png" alt="Logo do Linkedin" class="img-redes">
          </a>
          <a href="#" class="col-2">
            <img src="assets/images/logo-twitter.png" alt="Logo do Twitter" class="img-redes">
          </a>
          <a href="#" class="col-2">
            <img src="assets/images/logo-youtube.png" alt="Logo do Youtube" class="img-redes">
          </a>
        </div>
      </div>
    </div>
    <!-- <div class="row"> -->
    <div class="row">
    <div class="categorias col-md-4">
      <h4>Categorias</h4><br>
      <p>Promoções</p>
      <ul>
        <li><a href="#">Categoria #1</a></li>
        <li><a href="#">Categoria #2</a></li>
        <li><a href="#">Categoria #3</a></li>
        <li><a href="#">Categoria #4</a></li>
      </ul>
    </div>
    <!-- <div class="row"> -->
    <div class="institucional col-md-4">
      <h4>Institucional</h4><br>
      <ul>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Políticas de Troca e Devolução</a></li>
        <li><a href="#">Políticas de Privacidade</a></li>
      </ul>
    </div>
  <!-- </div> -->
    <!-- <div class="row"> -->
    <div class="contatos col-md-4">
      <h4>Entre em contato</h4><br>
      <img src="assets/images/logo-whatsapp.png" alt="Logo do Whatsapp">
      <a href="tel:+5511987654321">9 8765-4321</a><br>
      <img src="assets/images/envelope.png" alt="Foto de Envelope">
      <a href="mailto:hectorqrs@gmail.com?Subject=Contato">hectorqrs@gmail.com</a>
    </div>
  </div>
  <!-- </div> -->
    <small style="color: white;">Marca &copy; <?php echo date("Y")?> | CNPJ 99.999.999/0001-99</small>
  </footer>
  </body>
  </html>