<?php

	// # GERAL

		// ## INFORMAÇÕES SOBRE A PÁGINA (PARA O TOPO DA PÁGINA, TÍTULO, SUBTÍTULO E BREAD CRUMB)

	    $titulo = "Categoria 01";
	    $subtitulo = "Produtos pertencentes à ".$titulo;
	    $tituloFaq = "FAQ";
	    $subtituloFaq = "Se não encontrar o que busca, entre em contato com a gente!";

    // # PRODUTOS


	    // ## INFORMAÇÕES GERAIS SOBRE O PRODUTO
	    $nomeProduto = "Produto XYZ";
	    $descricaoProduto = "O produto é excelente, confira a seguir todos os detalhes!";
	    $pdtMateriais = "Aço inox, fibra de carbono e fita crepe";
	    $tamanhos = ['PP - Extrapequeno' => 'PP - Extrapequeno', 'P - Pequeno'=>'P - Pequeno','M - Médio'=>'M - Médio','G - Grande'=>'G - Grande', 'GG - Extragrande' =>'GG - Extragrande'];
	    $tamanho = 'A grade de tamanhos de nossos produtos segue as normativas da ABNT e incluem os tamanhos P, M e G. Para confecção dos produtos sobmedida, entre em contato conosco.';
	    $cores = ['Azul' => 'Azul', 'Branco' => 'Branco', 'Cinza' => 'Cinza', 'Dourado' => 'Dourado', 'Esmeralda' => 'Esmeralda'];
	    $cor = 'Trabalhamos com qualquer cor disponível no mercado. Se a cor não pertencer ao nosso catálogo padrão será acrescida uma taxa ao valor total do pedido.';


	    // ## INFORMAÇÕES SOBRE VALORES DO PRODUTO
	    $valorTotal = 899;
	    $valorDesc = 110.01;
	    $valorReal = ($valorTotal - $valorDesc);
	    $valorParcelas = 12;
	    $valorParcela = number_format((float)$valorTotal/$valorParcelas, 2, ',', '');;
	    $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";

	    // ## VIDEO YOUTUBE
	    /*$larguraMobile = */

// # FAQ

	

    // # BANNERS

    // ## CTA - BANNER HORIZONTAL
    $bannerHorizontal = "Banner Horizontal para Promoções! Acesse já!";
?>