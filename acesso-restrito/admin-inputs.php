<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,user-scalable=no">
    <link rel="stylesheet" href="../assets/css/style-produtos-marcelo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php include_once("../assets/php/functions.php") ?>
    <meta name="title" content="Inputs">
    <meta name="author" content="Digital Grupo">
    <meta name="decription" content="Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil">
    <meta name="keywords" content="html, css, php, js, digital house, digital grupo, projeto integrador">
    <link rel="icon" type="image/png" sizes="96x96" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/favicon-96x96.png">
    <meta name="theme-color" content="#4285f4">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <title>Inputs</title>
  </head>
<body>
<!-- HEADER -->
<?php
include_once ("admin-header.php");
?>
  <!-- # CONTÂINER DO CONTEÚDO PRINCIPAL # -->
  <main class="container-fluid">

    <!-- ## TOPO DA PÁGINA (PADRÃO ENTRE TODAS) ## -->
    <section class="top row">
      <article class="top-title col-12">
        <h1>Inputs</h1>
        <h4>Insira as informações solicitadas e clique em enviar para atualizar seu eCommerce</h4>
      </article>
      <p><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="http://digitalgrupo.provisorio.ws/" itemprop="url"><span itemprop="title">Home</span></a> › </span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://digitalgrupo.provisorio.ws/produtos/" itemprop="url"> <span itemprop="title">Acesso Restrito</span> </a> › </span>Input</p>
    </section>
    
    <!-- ## FORMULÁRIO ## -->
    <form action="#" method="post">
      <div>
        <label for="pdt-titulo">Título do Produto</label>
        <input type="text" id="pdt-titulo" name="pdt-titulo" value="" placeholder="Insira aqui o Título do Produto">
      </div>
      <input type="submit" value="Enviar">
    </form>

  </main>
<?php
include ("../inc/footer.php");
 ?>
