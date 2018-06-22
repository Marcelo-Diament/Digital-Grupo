<?php

	// # GERAL

		// ## INFORMAÇÕES SOBRE A PÁGINA (PARA O TOPO DA PÁGINA, TÍTULO, SUBTÍTULO E BREAD CRUMB)

	    $titulo = "Categoria 01";
	    $subtitulo = "Produtos pertencentes à ".$titulo;

    // # PRODUTOS


	    // ## INFORMAÇÕES GERAIS SOBRE O PRODUTO
	    $i = 0;
	    $nomeProduto = "Nome do Produto";
	    $descricaoProduto = "O produto é excelente, confira a seguir todos os detalhes!";
	    $pdtMateriais = "Aço inox, fibra de carbono e fita crepe";
	    $tamanhos = ['extrapequeno' => 'PP', 'pequeno'=>'P','medio'=>'M','grande'=>'G', 'extragrande' => 'GG'];
	    $tamanho = 'A grade de tamanhos de nossos produtos segue as normativas da ABNT e incluem os tamanhos P, M e G. Para confecção dos produtos sobmedida, entre em contato conosco.';
	    $cores = ['azul' => 'Azul', 'branco' => 'Branco', 'cinza' => 'Cinza', 'dourado' => 'Dourado', 'esmeralda' => 'Esmeralda'];
	    $cor = 'Trabalhamos com qualquer cor disponível no mercado. Se a cor não pertencer ao nosso catálogo padrão será acrescida uma taxa ao valor total do pedido.';


	    // ## INFORMAÇÕES SOBRE VALORES DO PRODUTO
	    $valorTotal = 499;
	    $valorDesc = 99.01;
	    $valorReal = ($valorTotal - $valorDesc);
	    $valorParcelas = 12;
	    $valorParcela = number_format((float)$valorTotal/$valorParcelas, 2, ',', '');;
	    $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";

	    // ## VIDEO YOUTUBE
	    $larguraMobile = 

    // # BANNERS

    // ## CTA - BANNER HORIZONTAL
    $bannerHorizontal = "Banner Horizontal para Promoções! Acesse já!";
?>