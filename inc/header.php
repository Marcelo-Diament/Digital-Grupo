  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white fixed-top">
    <a title="Clique para acessar a página inicial" alt="Clique para a acessar a página inicial" class="navbar-brand" href="index.php"><img src="http://digitalgrupo.provisorio.ws/assets/images/logo.png" alt="Logo do Digital Grupo" title="Clique para acessar a página inicial" height="50px" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto text-white d-flex justify-content-around">
        <li class="nav-item active">
          <a title="Acessar página inicial" alt="Acessar página inicial" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a title="Conheça melhor o Digital Grupo" alt="Conheça melhor o Digital Grupo" class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
              foreach ($categorias as $categoria) {
                echo "<a class='dropdown-item' href='".$categoria['url']."' title='Clique para ver ".$categoria['titulo']."' alt='Clique para ver ".$categoria['titulo']."'>".$categoria['titulo']."</a>";
              }
            ?>
            <!--<a class="dropdown-item" href="#">Vestidos</a>
            <a class="dropdown-item" href="#">Another action</a>-->
            <div class="dropdown-divider"></div>
            <a title="Clique para ver todos os produtos" alt="Clique para ver todos os produtos" class="dropdown-item" href="produtos.php">Todos os produtos</a>
            <a title="Clique para solicitar seu produto sob encomenda" alt="Clique para solicitar seu produto sob encomenda" class="dropdown-item" href="contato.php">Produtos customizados</a>
          </div>
        </li>

        <li class="nav-item">
          <a title="Clique para ver as perguntas feitas com maior frequência" alt="Clique para ver as perguntas feitas com maior frequência" class="nav-link" href="faq-duvidas.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a title="Clique e faça login" alt="Clique e faça login" class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a title="Faça seu cadastro rapidamente" alt="Faça seu cadastro rapidamente" class="nav-link" href="register.php">Cadastre-se</a>
        </li>
        <li class="nav-item">
          <a title="Conferir carrinho de compras" alt="Conferir carrinho de compras" class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>-->
      </ul>
      <div class="buscaGoogle col-12 col-md-4">
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
      <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>
  </div>
</nav>



<!--<header>
  <div class="div_header">
    <a class="logo" href="index.php">LOGO</a>
    <i class="fas fa-align-justify"></i>
    <i class="fas fa-shopping-cart"></i>
    <div class="header-links">
      <a href="FAQ.php">FAQ</a>
      <a class="header_login" href="login.php">Login</a>
    </div>

    <form class="barra_de_pesquisa" action="index.php" method="post">
      <input type="search" placeholder="Do que você precisa?" class="espaco-pesquisa">
      <input type="submit" name="botao-pesquisa" value="&#xf002;" class="fas fa-search botao-pesquisa">
    </form>
  </div>
</header>
-->
