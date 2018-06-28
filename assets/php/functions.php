<?php

	// # GERAL

		// ## LINKS E CONTATOS
		$nomeNegocio = "Digital Grupo";
		$siteNegocio = "www.digitalgrupo.provisorio.ws";
		$instaUser = "@digitalgrupo";
		$instaUrl = "https://instagram.com/digitalgrupo";
		$telefoneFixo = "(11) 2345 6789";
		$telefoneCelular = "(11) 98765 4321";
		$emailContato = "contato@djament.com.br";
		// ## INFORMAÇÕES SOBRE AS PÁGINAS (PARA O TOPO DAS PÁGINAS, TÍTULOS, SUBTÍTULOS E BREAD CRUMBS)
	    $titulo = "Categoria 01";
	    $subtitulo = "Produtos pertencentes à ".$titulo;
	    $tituloFaq = "FAQ";
	    $subtituloFaq = "Se não encontrar o que busca, entre em contato com a gente!";
	    $tituloHome = "Digital Grupo | eCommerce Template";
	    $subtituloHome = "Descrição da Homepage";
	    $tituloContato = "Contato";
	    $subtituloContato = "Envie sua mensagem, teremos prazer em te ajudar!";
	    $tituloSobre = "Sobre a ".$nomeNegocio;
	    $subtituloSobre = "Conheça melhor o nosso negócio, faça parte dessa história";
	    $tituloPoliticas = "Políticas e Termos";
	    $subtituloPoliticas = "Confira aqui as regras e políticas de nossa marca. Em caso de dúvidas, entre em contato!";

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