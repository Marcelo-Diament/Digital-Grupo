<?php

	// # VARIÁVEIS (ENQUANTO NÃO INTEGRAMOS AO BANCO DE DADOS)
		

		// ## INFORMAÇÕES SOBRE O DESENVOLVEDOR
		$autores = "Digital Grupo";


		// ## INFORMAÇÕES SOBRE AS PÁGINAS (PARA O TOPO DAS PÁGINAS, TÍTULOS, SUBTÍTULOS E BREAD CRUMBS)
		$nomeNegocio = "Digital Grupo";
		$siteNegocio = "http://digitalgrupo.provisorio.ws";
		$metaOgSiteName = $nomeNegocio;
		    

		    // ### HOMEPAGE (PÁGINA INICIAL)
		    $tituloHome = "Digital Grupo | eCommerce Template";
		    $subtituloHome = "Descrição da Homepage";
		    $metaTitleHome = $tituloHome;
		    $metaDescHome = "Home | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsHome ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleHome = $tituloHome;
		    $metaOgDescHome = $metaDescHome;
		    $metaOgUrlHome = "http://digitalgrupo.provisorio.ws/index.php";
		    $metaOgLocalHome = "pt-BR";
		    $metaOgTypeHome = "website";
		    $metaOgImageHome = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltHome = "Digital Grupo";
		    $metaOgImageUrlHome = $metaOgImage;
		    $metaOgImageTypeHome = "image/gif";



			// ### PRODUTOS (VITRINE DE PRODUTOS, CATEGORIAS)
		    $tituloCategoria = "Categoria 01";
		    $subtituloCategoria = "Produtos pertencentes à ".$tituloCategoria;
		    $metaTitleCategoria = $tituloCategoria;
		    $metaDescCategoria = "Categoria 01 | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsCategoria ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleCategoria = $tituloCategoria;
		    $metaOgDescCategoria = $metaDescCategoria;
		    $metaOgUrlCategoria = "http://digitalgrupo.provisorio.ws/produtos.php";
		    $metaOgLocalCategoria = "pt-BR";
		    $metaOgTypeCategoria = "website";
		    $metaOgImageCategoria = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltCategoria = "Digital Grupo";
		    $metaOgImageUrlCategoria = $metaOgImage;
		    $metaOgImageTypeCategoria = "image/gif";
		    

		    // ### PRODUTO (DETALHES)

			    // #### INFORMAÇÕES GERAIS SOBRE O PRODUTO
			    $nomeProduto = "Produto XYZ";
			    $descricaoProduto = "O produto é excelente, confira a seguir todos os detalhes!";
			    $metaTitleProduto = $nomeProduto;
		    	$metaDescProduto = "Produto XYZ | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    	$metaKeyWordsProduto ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
			    $metaOgTitleProduto = $tituloProduto;
			    $metaOgDescProduto = $metaDescProduto;
			    $metaOgUrlProduto = "http://digitalgrupo.provisorio.ws/produto.php";
			    $metaOgLocalProduto = "pt-BR";
			    $metaOgTypeProduto = "website";
			    $metaOgImageProduto = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
			    $metaOgImageAltProduto = "Digital Grupo";
			    $metaOgImageUrlProduto = $metaOgImage;
			    $metaOgImageTypeProduto = "image/gif";
			    
			    // #### DESCRIÇÃO (DETALHES, ESPECIFICAÇÕES DO PRODUTO)
			    $pdtMateriais = "Aço inox, fibra de carbono e fita crepe";
			    $tamanhos = ['PP - Extrapequeno' => 'PP - Extrapequeno', 'P - Pequeno'=>'P - Pequeno','M - Médio'=>'M - Médio','G - Grande'=>'G - Grande', 'GG - Extragrande' =>'GG - Extragrande'];
			    $tamanho = 'A grade de tamanhos de nossos produtos segue as normativas da ABNT e incluem os tamanhos P, M e G. Para confecção dos produtos sobmedida, entre em contato conosco.';
			    $cores = ['Azul' => 'Azul', 'Branco' => 'Branco', 'Cinza' => 'Cinza', 'Dourado' => 'Dourado', 'Esmeralda' => 'Esmeralda'];
			    $cor = 'Trabalhamos com qualquer cor disponível no mercado. Se a cor não pertencer ao nosso catálogo padrão será acrescida uma taxa ao valor total do pedido.';

			    // #### FINANCEIRO INFORMAÇÕES SOBRE VALORES E PARCELAMENTO DO PRODUTO
			    $valorTotal = 899;
			    $valorDesc = 110.01;
			    $valorReal = ($valorTotal - $valorDesc);
			    $valorParcelas = 12;
			    $valorParcela = number_format((float)$valorTotal/$valorParcelas, 2, ',', '');;
			    $valorProdutoCompleto = $valorParcelas."x de R$ ".$valorParcela." sem juros";

			    // #### VIDEO YOUTUBE
			    /*$larguraMobile = */


			// ### SOBRE (QUEM SOMOS)	
		    $tituloSobre = "Sobre a ".$nomeNegocio;
		    $subtituloSobre = "Conheça melhor o nosso negócio, faça parte dessa história";
		    $metaTitleSobre = $tituloSobre;
		    $metaDescSobre = "Sobre | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsSobre ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleSobre = $tituloSobre;
		    $metaOgDescSobre = $metaDescSobre;
		    $metaOgUrlSobre = "http://digitalgrupo.provisorio.ws/sobre.php";
		    $metaOgLocalSobre = "pt-BR";
		    $metaOgTypeSobre = "website";
		    $metaOgImageSobre = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltSobre = "Digital Grupo";
		    $metaOgImageUrlSobre = $metaOgImage;
		    $metaOgImageTypeSobre = "image/gif";


		    // ### FAQ (PERGUNTAS FREQUENTES)
		    $tituloFaq = "FAQ";
		    $subtituloFaq = "Se não encontrar o que busca, entre em contato com a gente!";
		    $metaTitleFaq = $tituloFaq;
		    $metaDescFaq = "FAQ | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsFaq ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleFaq = $tituloFaq;
		    $metaOgDescFaq = $metaDescFaq;
		    $metaOgUrlFaq = "http://digitalgrupo.provisorio.ws/faq-duvidas.php";
		    $metaOgLocalFaq = "pt-BR";
		    $metaOgTypeFaq = "website";
		    $metaOgImageFaq = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltFaq = "Digital Grupo";
		    $metaOgImageUrlFaq = $metaOgImage;
		    $metaOgImageTypeFaq = "image/gif";
		    

		    // ### CONTATO (E DADOS DE CONTATO EM GERAL)
		    $tituloContato = "Contato";
		    $subtituloContato = "Envie sua mensagem, teremos prazer em te ajudar!";
		    $metaTitleContato = $tituloContato;
		    $metaDescContato = "Contato | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsContato ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleContato = $tituloContato;
		    $metaOgDescContato = $metaDescContato;
		    $metaOgUrlContato = "http://digitalgrupo.provisorio.ws/contato.php";
		    $metaOgLocalContato = "pt-BR";
		    $metaOgTypeContato = "website";
		    $metaOgImageContato = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltContato = "Digital Grupo";
		    $metaOgImageUrlContato = $metaOgImage;
		    $metaOgImageTypeContato = "image/gif";
		    
				
				// #### TELEFONES / WHATSAPP
				$telefoneFixo = "(11) 2345 6789";
				$telefoneCelular = "(11) 98765 4321";

				// #### EMAILS
				$emailContato = "contato@djament.com.br";

		    	// #### REDES SOCIAIS
				$instaUser = "@digitalgrupo";
				$instaUrl = "https://instagram.com/digitalgrupo";


		    // ### POLÍTICAS E TERMOS (PRIVACIDADE, TROCA, USO, DEVOLUÇÃO, AUTORAL...)
		    $tituloTermos = "Políticas e Termos";
		    $subtituloTermos = "Confira aqui as regras e políticas de nossa marca. Em caso de dúvidas, entre em contato!";
		    $metaTitleTermos = $tituloTermos;
		    $metaDescTermos = "Políticas e Termos | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsTermos ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleTermos = $tituloTermos;
		    $metaOgDescTermos = $metaDescTermos;
		    $metaOgUrlTermos = "http://digitalgrupo.provisorio.ws/index.php";
		    $metaOgLocalTermos = "pt-BR";
		    $metaOgTypeTermos = "website";
		    $metaOgImageTermos = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltTermos = "Digital Grupo";
		    $metaOgImageUrlTermos = $metaOgImage;
		    $metaOgImageTypeTermos = "image/gif";



		// ## ADITIVOS (BANNERS, POP UPS, ALERTAS, MODAIS...)
		    
		    // ### BANNERS
			$bannerHorizontal = "Banner Horizontal para Promoções! Acesse já!";

?>