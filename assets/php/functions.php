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
	    $medidas = ['P','M','G'];
	    $medida = $medidas[$i];
	    $cores = ['Azul', 'Branco', 'Cinza', 'Dourado', 'Esmeralda'];
	    $cor = $cores[$i];


	    // ## INFORMAÇÕES SOBRE VALORES DO PRODUTO
	    $valorTotal = 499;
	    $valorParcelas = 12;
	    $valorParcela = number_format((float)$valorTotal/$valorParcelas, 2, ',', '');;
	    $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";

    // # BANNERS

    // ## CTA - BANNER HORIZONTAL
    $bannerHorizontal = "Banner Horizontal para Promoções! Acesse já!";
?>