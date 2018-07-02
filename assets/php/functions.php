<?php

	// # VARIÁVEIS (ENQUANTO NÃO INTEGRAMOS AO BANCO DE DADOS)
		

		// ## INFORMAÇÕES SOBRE O DESENVOLVEDOR
		$autores = "Digital Grupo";


		// ## INFORMAÇÕES SOBRE AS PÁGINAS (PARA O TOPO DAS PÁGINAS, TÍTULOS, SUBTÍTULOS E BREAD CRUMBS)
		$nomeNegocio = "Digital Grupo";
		$siteNegocio = "http://digitalgrupo.provisorio.ws";
		$metaOgSiteName = $nomeNegocio;
		    

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
		    $metaOgImageUrlContato = $metaOgImageContato;
		    $metaOgImageTypeContato = "image/gif";
		    
				
				// #### TELEFONES / WHATSAPP
				$telefoneFixo = "(11) 2345 6789";
				$telefoneCelular = "(11) 98765 4321";

				// #### EMAILS
				$emailContato = "contato@djament.com.br";

		    	// #### REDES SOCIAIS
				$instaUser = "@digitalgrupo";
				$instaUrl = "https://instagram.com/digitalgrupo";
				$googlePlusUrl = "https://plus.google.com/digitalgrupo";
				$fanpageUrl = "http://www.facebook.com/digitalgrupo";
				$pinterestUrl = "https://pinterest.com/digitalgrupo";



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
		    $metaOgImageUrlHome = $metaOgImageHome;
		    $metaOgImageTypeHome = "image/gif";

		    $banners = array(
		    		"banner-rodas-de-skate.jpg" => array(
		    			'title' => 'Rodas de Skate',
		    			'subtitle' => 'Diferentes durezas',
		    			'atitle' => 'Clique para ver todas rodinhas de skate',
		    			'aalt' => 'Clique e veja todas as rodas de skate',
		    			'aurl' => 'rodas-de-skate.php',
		    		),
		    		"banner-oculos-de-sol.jpg" => array(
		    			'title' => 'Óculos de Sol',
		    			'subtitle' => 'Diferentes cores',
		    			'atitle' => 'Clique para ver todos óculos de Sol',
		    			'aalt' => 'Clique e veja todas as cores de óculos de Sol',
		    			'aurl' => 'oculos-de-sol.php',
		    		)
		    	);



			// ### PRODUTOS (VITRINE DE PRODUTOS, CATEGORIAS)
		    // O exemplo abaixo acaba servido para a página Produtos (que mostrará todos os produtos cadastrados)
		    $tituloCategoria = "Todos os produtos";
		    $subtituloCategoria = "Conheça todos os produtos da Digital Grupo";
		    $metaTitleCategoria = $tituloCategoria;
		    $metaDescCategoria = "Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsCategoria ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleCategoria = $tituloCategoria;
		    $metaOgDescCategoria = $metaDescCategoria;
		    $metaOgUrlCategoria = "http://digitalgrupo.provisorio.ws/produtos.php";
		    $metaOgLocalCategoria = "pt-BR";
		    $metaOgTypeCategoria = "website";
		    $metaOgImageCategoria = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltCategoria = "Digital Grupo";
		    $metaOgImageUrlCategoria = $metaOgImageHome;
		    $metaOgImageTypeCategoria = "image/gif";
		    
			    // #### ARRAY DE CATEGORIAS DE PRODUTOS (id_cat e categoria)
		    	$categorias = array(
		    		'Rodas de Skate'=> array(
		    			'idcategoria' => '1',
		    			'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate.php',
		    			'titulo' => 'Rodas de Skate',
		    			'subtitulo' => 'Rodas de Skate para todos os estilos',
					    'metaTitle' => 'Rodas de Skate para Street, Bowl, Half e Slide',
					    'metaDesc' => 'Rodas de Skate de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Rodas de Skate',
					    'metaOgDesc' => 'Rodas de Skate de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/banner-rodas-de-skate.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/banner-rodas-de-skate.jpg',
					    'metaOgImageType' => 'image/jpg'
		    		),
		    		
		    		'Óculos de Sol'=> array(
		    			'idcategoria' => '2',
		    			'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol.php',
		    			'titulo' => 'Óculos de Sol',
		    			'subtitulo' => 'Óculos de Sol de inúmeras cores',
					    'metaTitle' => 'Óculos de Sol de diversas cores',
					    'metaDesc' => 'Óculos de Sol de diferentes cores - óculos azul, óculos amarelo, óculos laranja, óculos roxo, óculos verde e muito mais!',
					    'metaKeyWords' =>'oculos, oculos de sol, oculos amarelo, oculos de sol amarelo, oculos azul, oculos de sol azul, oculos branco, oculos de sol branco, oculos cinza, oculos de sol cinza, oculos verde, oculos de sol verde, oculos rosa, oculos de sol rosa, oculos roxo, oculos de sol roxo, oculos vermelho, oculos de sol vermelho, oculos verde, oculos de sol verde',
					    'metaOgTitle' => 'Óculos de Sol',
					    'metaOgDesc' => 'Óculos de Sol de inúmeras cores! E aí, qual a sua cor predileta?',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/banner-oculos-de-sol.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/banner-oculos-de-sol.jpg',
					    'metaOgImageType' => 'image/jpg'
		    		)
		    	);


		    // ### PRODUTO (DETALHES)

			    // #### INFORMAÇÕES GERAIS SOBRE O PRODUTO
			    $nomeProduto = "Produto XYZ";
			    $descricaoProduto = "O produto é excelente, confira a seguir todos os detalhes!";
			    $metaTitleProduto = $nomeProduto;
		    	$metaDescProduto = "Produto XYZ | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    	$metaKeyWordsProduto ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
			    $metaOgTitleProduto = $nomeProduto;
			    $metaOgDescProduto = $metaDescProduto;
			    $metaOgUrlProduto = "http://digitalgrupo.provisorio.ws/produto.php";
			    $metaOgLocalProduto = "pt-BR";
			    $metaOgTypeProduto = "website";
			    $metaOgImageProduto = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
			    $metaOgImageAltProduto = "Digital Grupo";
			    $metaOgImageUrlProduto = $metaOgImageProduto;
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

			    // FÓRMULA COM VARIÁVEIS
				/*function valorDescontado($a,$b,$c){
					$a = $produtos[$i]['valores']['valorTotal'];
					$b = $produtos[$i]['valores']['valorDesc'];
					$c = $produtos[$i]['valores']['parcelas'];
					$valorComDesconto = $a - $b;
					$valorDaParcela = $valorComDesconto/$c;
					echo $c."x de R$ ".$valorParcela." sem juros";
				}*/

			    // #### VIDEO YOUTUBE
			    /*$larguraMobile = */

			    $produtos = array(
			    	array(
			    		'idProduto' => '1',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate A',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long.',
			    		'metaTitle' => 'Roda de Skate A',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate A',
					    'metaOgDesc' => 'Roda de Skate A de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate A',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 3,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 0,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    		'Branco' => 'Branco',
					    		'Cinza' => 'Cinza',
					    		'Dourado' => 'Dourado',
					    		'Laranja' => 'Laranja',
					    		'Marrom' => 'Marrom',
					    		'Nude' => 'Nude',
					    		'Rosa' => 'Rosa',
					    		'Roxo' => 'Roxo',
					    		'Preto' => 'Preto',
					    		'Verde' => 'Verde',
					    		'Vermelho' => 'Vermelho'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 129,
					    	'valorDesc' => 10.01,
					    	'parcelas' => 3
					    )
			    	),
					array(
			    		'idProduto' => '2',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => false,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate B',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate B',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate B',
					    'metaOgDesc' => 'Roda de Skate B de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 3,
					    		'ABEC-2' => 1,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 4,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 119,
					    	'valorDesc' => 0,
					    	'parcelas' => 4
					    )
			    	),
					array(
			    		'idProduto' => '3',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate C',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate C',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate C',
					    'metaOgDesc' => 'Roda de Skate C de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 1,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 2,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 99,
					    	'valorDesc' => 4.01,
					    	'parcelas' => 2
					    )
			    	),
					array(
			    		'idProduto' => '4',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate D',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate D',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate D',
					    'metaOgDesc' => 'Roda de Skate D de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 5,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Verde' => 'Verde',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 199,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '5',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate A',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate A',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate A',
					    'metaOgDesc' => 'Roda de Skate A de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate A',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 3,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 0,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    		'Branco' => 'Branco',
					    		'Cinza' => 'Cinza',
					    		'Dourado' => 'Dourado',
					    		'Laranja' => 'Laranja',
					    		'Marrom' => 'Marrom',
					    		'Nude' => 'Nude',
					    		'Rosa' => 'Rosa',
					    		'Roxo' => 'Roxo',
					    		'Preto' => 'Preto',
					    		'Verde' => 'Verde',
					    		'Vermelho' => 'Vermelho'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 129,
					    	'valorDesc' => 10.01,
					    	'parcelas' => 3
					    )
			    	),
					array(
			    		'idProduto' => '6',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => false,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate B',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate B',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate B',
					    'metaOgDesc' => 'Roda de Skate B de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 3,
					    		'ABEC-2' => 1,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 4,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 119,
					    	'valorDesc' => 0,
					    	'parcelas' => 4
					    )
			    	),
					array(
			    		'idProduto' => '7',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate C',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate C',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate C',
					    'metaOgDesc' => 'Roda de Skate C de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 1,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 2,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 99,
					    	'valorDesc' => 4.01,
					    	'parcelas' => 2
					    )
			    	),
					array(
			    		'idProduto' => '8',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate D',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate D',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate D',
					    'metaOgDesc' => 'Roda de Skate D de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 5,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Verde' => 'Verde',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 199,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '9',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate A',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate A',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate A',
					    'metaOgDesc' => 'Roda de Skate A de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate A',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 3,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 0,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    		'Branco' => 'Branco',
					    		'Cinza' => 'Cinza',
					    		'Dourado' => 'Dourado',
					    		'Laranja' => 'Laranja',
					    		'Marrom' => 'Marrom',
					    		'Nude' => 'Nude',
					    		'Rosa' => 'Rosa',
					    		'Roxo' => 'Roxo',
					    		'Preto' => 'Preto',
					    		'Verde' => 'Verde',
					    		'Vermelho' => 'Vermelho'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 129,
					    	'valorDesc' => 10.01,
					    	'parcelas' => 3
					    )
			    	),
					array(
			    		'idProduto' => '10',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => false,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate B',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate B',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate B',
					    'metaOgDesc' => 'Roda de Skate B de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 3,
					    		'ABEC-2' => 1,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 4,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 119,
					    	'valorDesc' => 0,
					    	'parcelas' => 4
					    )
			    	),
					array(
			    		'idProduto' => '11',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate C',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate C',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate C',
					    'metaOgDesc' => 'Roda de Skate C de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 1,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 2,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 99,
					    	'valorDesc' => 4.01,
					    	'parcelas' => 2
					    )
			    	),
					array(
			    		'idProduto' => '12',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate D',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate D',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate D',
					    'metaOgDesc' => 'Roda de Skate D de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 5,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Verde' => 'Verde',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 199,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '13',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate A',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate A',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate A',
					    'metaOgDesc' => 'Roda de Skate A de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate A',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 3,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 0,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    		'Branco' => 'Branco',
					    		'Cinza' => 'Cinza',
					    		'Dourado' => 'Dourado',
					    		'Laranja' => 'Laranja',
					    		'Marrom' => 'Marrom',
					    		'Nude' => 'Nude',
					    		'Rosa' => 'Rosa',
					    		'Roxo' => 'Roxo',
					    		'Preto' => 'Preto',
					    		'Verde' => 'Verde',
					    		'Vermelho' => 'Vermelho'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 129,
					    	'valorDesc' => 10.01,
					    	'parcelas' => 3
					    )
			    	),
					array(
			    		'idProduto' => '14',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => false,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate B',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate B',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate B',
					    'metaOgDesc' => 'Roda de Skate B de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 3,
					    		'ABEC-2' => 1,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 4,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 119,
					    	'valorDesc' => 0,
					    	'parcelas' => 4
					    )
			    	),
					array(
			    		'idProduto' => '15',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate C',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate C',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate C',
					    'metaOgDesc' => 'Roda de Skate C de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 1,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 2,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 99,
					    	'valorDesc' => 4.01,
					    	'parcelas' => 2
					    )
			    	),
					array(
			    		'idProduto' => '16',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate D',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate D',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate D',
					    'metaOgDesc' => 'Roda de Skate D de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 5,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Verde' => 'Verde',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 199,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '17',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate A',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate A',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate A',
					    'metaOgDesc' => 'Roda de Skate A de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate A',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 3,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 0,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    		'Branco' => 'Branco',
					    		'Cinza' => 'Cinza',
					    		'Dourado' => 'Dourado',
					    		'Laranja' => 'Laranja',
					    		'Marrom' => 'Marrom',
					    		'Nude' => 'Nude',
					    		'Rosa' => 'Rosa',
					    		'Roxo' => 'Roxo',
					    		'Preto' => 'Preto',
					    		'Verde' => 'Verde',
					    		'Vermelho' => 'Vermelho'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 129,
					    	'valorDesc' => 10.01,
					    	'parcelas' => 3
					    )
			    	),
					array(
			    		'idProduto' => '18',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => false,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate B',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate B',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate B',
					    'metaOgDesc' => 'Roda de Skate B de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 3,
					    		'ABEC-2' => 1,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 4,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 119,
					    	'valorDesc' => 0,
					    	'parcelas' => 4
					    )
			    	),
					array(
			    		'idProduto' => '19',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate C',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate C',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate C',
					    'metaOgDesc' => 'Roda de Skate C de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 1,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 2,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 99,
					    	'valorDesc' => 4.01,
					    	'parcelas' => 2
					    )
			    	),
					array(
			    		'idProduto' => '20',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate D',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate D',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate D',
					    'metaOgDesc' => 'Roda de Skate D de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 5,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Verde' => 'Verde',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 199,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '21',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate A',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate A',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate A',
					    'metaOgDesc' => 'Roda de Skate A de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate A',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-amarela-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 3,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 0,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    		'Branco' => 'Branco',
					    		'Cinza' => 'Cinza',
					    		'Dourado' => 'Dourado',
					    		'Laranja' => 'Laranja',
					    		'Marrom' => 'Marrom',
					    		'Nude' => 'Nude',
					    		'Rosa' => 'Rosa',
					    		'Roxo' => 'Roxo',
					    		'Preto' => 'Preto',
					    		'Verde' => 'Verde',
					    		'Vermelho' => 'Vermelho'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 129,
					    	'valorDesc' => 10.01,
					    	'parcelas' => 3
					    )
			    	),
					array(
			    		'idProduto' => '22',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => false,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate B',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate B',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate B',
					    'metaOgDesc' => 'Roda de Skate B de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 3,
					    		'ABEC-2' => 1,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 4,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 119,
					    	'valorDesc' => 0,
					    	'parcelas' => 4
					    )
			    	),
					array(
			    		'idProduto' => '23',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate C',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate C',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate C',
					    'metaOgDesc' => 'Roda de Skate C de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 1,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 2,
					    		'ABEC-5' => 1
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 99,
					    	'valorDesc' => 4.01,
					    	'parcelas' => 2
					    )
			    	),
					array(
			    		'idProduto' => '24',
			    		'url' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
			    		'idCategoria' => '1',
			    		'categoria' => 'Rodas de Skate',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Roda de Skate D',
			    		'descricao' => 'Roda indicada tanto para skatistas que descem ladeiras fazendo slides mais bruscos quanto para skatistas que andam em half, mini ramp e bowl. As rodas são macias e espessas, possibilitando uma vida útil mais longa para as rodas do seu skatinho ou long',
			    		'metaTitle' => 'Roda de Skate D',
			    		'metaDesc' => 'Roda de Skate especial para slides. Serve tanto para street quanto para pistas inddor e outdoor',
			    		'metaKeyWords' => 'skate, skt, sk8, roda de skt, roda de skate, roda de sk8, rodinha de skate, rodinha de skt, rodinha de sk8, rodinha skate, rodinha skt, rodinha sk8, roda para bowl, rodinha para bowl, roda para street, rodinha para street, roda para mini ramp, rodinha para mini ramp, roda para half, rodinha para half, roda para slide, rodinha para slide',
					    'metaOgTitle' => 'Roda de Skate D',
					    'metaOgDesc' => 'Roda de Skate D de diferentes durezas e para diversos estilos - street skating, skate bowl, skate em half e mini ramp',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/rodas-de-skate/roda-de-skate-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageAlt' => 'Rodas de Skate B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    'imagens' => array(
					    	'Roda 01' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-01.jpg',
					    	'Roda 02' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-02.jpg',
					    	'Roda 03' => 'http://digitalgrupo.provisorio.ws/assets/images/roda-de-skate-verde-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Roda de Skate feita com poliuretano de média densidade D-33 e plástico injetado',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos produtos sob medida também. Quer uma rodinha de skate 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'rolamentos' => array(
					    		'ABEC-1' => 0,
					    		'ABEC-2' => 0,
					    		'ABEC-3' => 2,
					    		'ABEC-4' => 5,
					    		'ABEC-5' => 0
					    	),
					    	'cores' => array(
					    		'Verde' => 'Verde',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 199,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '25',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol A',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol A',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol A',
					    'metaOgDesc' => 'Óculos de Sol A - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 899,
					    	'valorDesc' => 144.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '26',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol B',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol B',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol B',
					    'metaOgDesc' => 'Óculos de Sol B - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 869,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '27',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol C',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol C',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol C',
					    'metaOgDesc' => 'Óculos de Sol C - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol C',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 0,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 5,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 10
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 969,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '28',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol D',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol D',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol D',
					    'metaOgDesc' => 'Óculos de Sol D - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol D',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 20,
					    		'0.05 graus' => 0,
					    		'0.1 grau' => 4,
					    		'0.25 graus' => 0,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Roxo' => 'Roxo',
					    		'Rosa' => 'Rosa'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 669,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '29',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol A',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol A',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol A',
					    'metaOgDesc' => 'Óculos de Sol A - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 899,
					    	'valorDesc' => 144.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '30',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol B',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol B',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol B',
					    'metaOgDesc' => 'Óculos de Sol B - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 869,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '31',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol C',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol C',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol C',
					    'metaOgDesc' => 'Óculos de Sol C - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol C',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 0,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 5,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 10
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 969,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '32',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol D',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol D',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol D',
					    'metaOgDesc' => 'Óculos de Sol D - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol D',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 20,
					    		'0.05 graus' => 0,
					    		'0.1 grau' => 4,
					    		'0.25 graus' => 0,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Roxo' => 'Roxo',
					    		'Rosa' => 'Rosa'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 669,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '33',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol A',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol A',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol A',
					    'metaOgDesc' => 'Óculos de Sol A - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 899,
					    	'valorDesc' => 144.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '34',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol B',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol B',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol B',
					    'metaOgDesc' => 'Óculos de Sol B - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 869,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '35',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol C',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol C',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol C',
					    'metaOgDesc' => 'Óculos de Sol C - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol C',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 0,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 5,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 10
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 969,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '36',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol D',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol D',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol D',
					    'metaOgDesc' => 'Óculos de Sol D - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol D',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 20,
					    		'0.05 graus' => 0,
					    		'0.1 grau' => 4,
					    		'0.25 graus' => 0,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Roxo' => 'Roxo',
					    		'Rosa' => 'Rosa'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 669,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '37',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol A',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol A',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol A',
					    'metaOgDesc' => 'Óculos de Sol A - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 899,
					    	'valorDesc' => 144.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '38',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol B',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol B',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol B',
					    'metaOgDesc' => 'Óculos de Sol B - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 869,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '39',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol C',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol C',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol C',
					    'metaOgDesc' => 'Óculos de Sol C - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol C',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 0,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 5,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 10
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 969,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '40',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol D',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol D',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol D',
					    'metaOgDesc' => 'Óculos de Sol D - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol D',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 20,
					    		'0.05 graus' => 0,
					    		'0.1 grau' => 4,
					    		'0.25 graus' => 0,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Roxo' => 'Roxo',
					    		'Rosa' => 'Rosa'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 669,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '41',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol A',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol A',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol A',
					    'metaOgDesc' => 'Óculos de Sol A - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 899,
					    	'valorDesc' => 144.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '42',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol B',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol B',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol B',
					    'metaOgDesc' => 'Óculos de Sol B - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 869,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '43',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol C',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol C',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol C',
					    'metaOgDesc' => 'Óculos de Sol C - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol C',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 0,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 5,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 10
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 969,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '44',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol D',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol D',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol D',
					    'metaOgDesc' => 'Óculos de Sol D - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol D',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 20,
					    		'0.05 graus' => 0,
					    		'0.1 grau' => 4,
					    		'0.25 graus' => 0,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Roxo' => 'Roxo',
					    		'Rosa' => 'Rosa'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 669,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '45',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol A',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol A',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol A',
					    'metaOgDesc' => 'Óculos de Sol A - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-a.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-amarelo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Amarelo' => 'Amarelo',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 899,
					    	'valorDesc' => 144.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '46',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol B',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol B',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol B',
					    'metaOgDesc' => 'Óculos de Sol B - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-b.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol B',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-azul-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 10,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 2,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Azul' => 'Azul',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 869,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '47',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol C',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol C',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol C',
					    'metaOgDesc' => 'Óculos de Sol C - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-c.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol C',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-laranja-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 0,
					    		'0.05 graus' => 10,
					    		'0.1 grau' => 5,
					    		'0.25 graus' => 5,
					    		'0.5 graus' => 10
					    	),
					    	'cores' => array(
					    		'Laranja' => 'Laranja',
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 969,
					    	'valorDesc' => 114.01,
					    	'parcelas' => 12
					    )
			    	),
					array(
			    		'idProduto' => '48',
			    		'url' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
			    		'idCategoria' => '2',
			    		'categoria' => 'Óculos de Sol',
			    		'promocao' => true,
			    		'dataLancamento' => '2018/07/02',
			    		'nome' => 'Óculos de Sol D',
			    		'descricao' => 'Óculos escuro estiloso, feito para quem gosta de fazer bonito. Sua lente polarizada permite ao dono desse objeto de desejo que fique em ambientes altamente iluminados sem o risco de prejudicar seus olhos nem sua visão. Altamente recomendado para quem joga xadrez, poker ou dominó',
			    		'metaTitle' => 'Óculos de Sol D',
			    		'metaDesc' => 'Óculos de Sol especial para cegos',
			    		'metaKeyWords' => 'óculos, óculos de sol, óculos escuros, óculos de sol, lupa, óculos solar, óculos escuro de grau, óculos solar de grau, óculos de sol de grau',
					    'metaOgTitle' => 'Óculos de Sol D',
					    'metaOgDesc' => 'Óculos de Sol D - feito para cegos que não precisam ver pra crer',
					    'metaOgUrl' => 'http://digitalgrupo.provisorio.ws/oculos-de-sol/oculos-de-sol-d.php',
					    'metaOgLocal' => 'pt-BR',
					    'metaOgType' => 'website',
					    'metaOgImage' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageAlt' => 'Óculos de Sol D',
					    'metaOgImageUrl' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'metaOgImageType' => 'image/jpg',
					    'imagemDestaque' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    'imagens' => array(
					    	'Óculos 01' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-01.jpg',
					    	'Óculos 02' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-02.jpg',
					    	'Óculos 03' => 'http://digitalgrupo.provisorio.ws/assets/images/oculos-escuros-roxo-03.jpg',
					    ),
					    'detalhes' => array(
					    	'Materiais' => 'Óculos escuro feito com fibra de carbono, fibra de vidro e lentes polarizadas com proteção UVA e UVB',
					    	'Garantia' => 'Garantia de até 6 meses após a compra de sua rodinha de skate. Garantia válida somente contra defeitos de fabricação, não cobre mau uso',
					    	'Sob Medida' => 'Desenvolvemos óculos de sol sob medida também. Quer uma lupa 100% customizada? Então entre em contato com a gente e faça sua solicitação hoje mesmo',
					    ),
					    'estoque' => array(
					    	'graus' => array(
					    		'Sem grau' => 20,
					    		'0.05 graus' => 0,
					    		'0.1 grau' => 4,
					    		'0.25 graus' => 0,
					    		'0.5 graus' => 0
					    	),
					    	'cores' => array(
					    		'Roxo' => 'Roxo',
					    		'Rosa' => 'Rosa'
					    	),
					    ),
					    'valores' => array(
					    	'valorTotal' => 669,
					    	'valorDesc' => 44.01,
					    	'parcelas' => 12
					    )
			    	)
			    );


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
		    $metaOgImageUrlSobre = $metaOgImageSobre;
		    $metaOgImageTypeSobre = "image/gif";
		    $sobreQuemSomos = "O Digital Grupo surgiu com apenas uma missão em mente: desenvolver sites que primam pela Experiência do Usuário - seja do lado do visitante, usuário, consumidor final (promovendo uma navegação intuitiva, dinâmica e agradável) ou seja do lado do administrador, cliente, empresário ou comerciante (possibilitando a fácil gestão do conteúdo através de um CMS personalizado e de ferramentas desenvolvidas especialmente para a manutenção do posicionamento da marca na Internet).";
		    $depoimentos = array(
			    	'idDepoimento' => '1',
			    	'depoente' => 'Beltrano Junior',
			    	'cargoDepoente' => 'Diretor Executivo do Digital Grupo',
			    	'depoimento' => 'Nós criamos a Digital Grupo para mostrar que sabemos programar - e muito bem! Desde Maio de 2018 o Digital Grupo vem evoluindo constantemente, otimizando suas soluções, revisando projetos já realizados e alcançando (ou melhor, superando) os resultados desejados!',
		    	);

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
		    $metaOgImageUrlFaq = $metaOgImageFaq;
		    $metaOgImageTypeFaq = "image/gif";
		    
		    	// #### CATEGORIAS DE FAQ
		    	$faqCategorias = array(
		    			'faqcat01' => 'Garantia',
		    			'faqcat02' => 'Frete e Entrega',
		    			'faqcat03' => 'Trocas e Devolução',
		    			'faqcat04' => 'Encomendas Especiais',
		    	);

		    	$faqPerguntas = array(
		    			'faqcat01' => array(
		    					'Por quanto tempo vale a garantia?' => 'A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.',
		    					'A garantia cobre roubo ou furto?' => 'Não, a garantia cobre apenas defeitos de fabricação. Para uma avaliação o produto deverá ser enviado via Correios para os dados de cadastro da empresa - isso após aviso prévio e confirmação do SAC (Serviço de Atendimento ao Cliente). Em caso de dúvida ligue para 0800 987 6543.',
		    					'Se meu produto chegar com defeito, a garantia passa a valer apenas depois da troca?' => 'A garantia é válida a partir da data da compra do produto. Caso haja algum defeito de fabricação comprovado, iremos realizar a troca do produto e a enviaremos uma nova garantia ou uma garantia extendida.',
		    					'É possível comprar a garantira extendida pelo site?' => 'Sim, basta clicar na opção "Garantia Extendida" antes de finalizar a compra. Caso o produto tenha sido comprado a menos de 1 mês (30 dias corridos) será possível realizar a extensão da garantia. Para intervalos maiores de 30 dias já não será possível extender a garantia, pois não temos condições de certificar o bom estado e manutenção do produto.'
		    			),
		    			'faqcat02' => array(
		    					'Em quanto tempo chegará meu pedido?' => 'A estimativa de entrega é considerada com base nos cálculos do Correios, seu CEP e o CEP de remetente (matriz ou filial mais próxima da nossa marca). Também incluímos 2 dias de margem para logística, empacotamento, trâmites burocráticos e envio. Mas lembre-se: esse prazo é apenas uma previsão, podem ocorrer imprevistos. Caso ocorra algum imprevisto, você poderá acompanhar o status do envio de seu pedido através do próprio site do Correios. Em caso de dúvidas, pode ligar para nosso serviço de atendimento ao consumidor tabmém (SAC - 0800 987 6543).',
		    					'Onde posso conferir o prazo?' => 'Você poderá acompanhar o status do envio de seu pedido através do próprio site do Correios. Em caso de dúvidas, pode ligar para nosso serviço de atendimento ao consumidor tabmém (SAC - 0800 987 6543).'
		    			),
		    			'faqcat03' => array(
		    					'Por que é necessário fazer tal coisa antes de usar o produto?' => 'A garantia é válida em todo o território nacional e seu termo é de 1 ano (12 meses) após a data da aquisição do produto (ou seja, da data em que foi comprado). A garantia cobre problemas de caráter técnico e falhas de programação, porém não inclui danos causdos por mal uso ou acidentes. Para saber mais sobre os planos de seguros que oferecemos para nossos produtos consulte a categoria FAQ para Seguros.'
		    			),
		    			'faqcat04' => array(
		    					'Como faço para solicitar um produto customizado? Vendem em grande quantidade/atacado?' => 'Entre em contato com nossa equipe Comercial para solicitar seu projeto especial! Fazemos produtos customizados e sob medida. Também temos condições especiais para pedidos acima de 50 mil unidades. Ligue para 0800 987 6541 (de 2ª a Sábado das 09:00 às 13:00 e das 14:00 às 18:00) ou envie um email para contato@digitalgrupo.provisorio.ws - responderemos em até 48 horas!'
		    			)
		    		);


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
		    $metaOgImageUrlTermos = $metaOgImageTermos;
		    $metaOgImageTypeTermos = "image/gif";

		    	// #### CATEGORIAS DE POLÍTICAS E TERMOS
		    	$politicasCategorias = array(
		    			'faqcat01' => 'Termos de Uso',
		    			'faqcat02' => 'Trocas e Devoluções',
		    			'faqcat03' => 'Entrega e Frete',
		    			'faqcat04' => 'Privacidade',
		    			'faqcat05' => 'Direitos Autorais'
		    		);
		    	$politicasPerguntas = array(
		    			'faqcat01' => array(
		    					'Disposições Gerais sobre Termos de Uso' => 'A plataforma '.$siteNegocio.' e todas as páginas, módulos e funcionalidades a ela relacionados, incluindo, mas não se limitando, a página do eCommerce (tudo em conjunto denominado simplesmente "Plataforma"), pertence à '.$nomeNegocio.' S.A. ('.$nomeNegocio.' ou "Nós").',
		    					'Ciência dos Termos' => 'Ao acessar ou visitar, de qualquer forma, a Plataforma, todos seus clientes da '.$nomeNegocio.' e visitantes ou usuários da Plataforma, sejam pessoas físicas ou jurídicas (em conjuntando denominados simplesmente "Clientes") deverão estar de acordo com estes Termos de Uso da Plataforma ("Termos de Uso") e obedecer todas as regras aqui constantes. Portanto, se você não estiver de acordo com este documento, você não deverá, de qualquer forma, acessar a Plataforma ou quaisquer de seus conteúdos e/ou serviços.',
		    					'Sobre o uso dos serviços' => '1. O acesso à Plataforma e/ou a utilização dos serviços poderá se dar por meio de computadores e dispositivos móveis, incluindo smartphones, tablets ou qualquer outro dispositivo relacionado ou assemelhado, seja por meio de aplicações/aplicativos específicos ou não.<br/>2. Para que você possa acessar determinados conteúdos ou serviços na Plataforma, você poderá ser requisitado a fornecer informações em formulários ou cookies e a criar uma Conta, o que poderá se dar de forma gratuita ou onerosa, conforme informação disponível na Plataforma. Você declara e garante que todas as informações prestadas serão verdadeiras, exatas, atuais e completas e serão mantidas em tais condições durante sua permanência como usuário da Plataforma.<br/>3. Você não poderá permitir que terceiros utilizem sua Conta, sob pena de se responsabilizar integralmente pelas atividades desenvolvidas através de sua Conta, inclusive por eventuais danos causado a Nós ou a terceiros. Você é o único e exclusivo responsável pela guarda e sigilo das informações e senha de acesso à sua Conta. Em caso de perda de dados, violação de segurança ou uso não autorizado de sua Conta, você deverá notificar a '.$nomeNegocio.' imediatamente, por meio dos canais de comunicação indicados na Plataforma.<br/>4. Você autoriza a '.$nomeNegocio.' a utilizar os dados que você tenha disponibilizado, conforme regras e disposições da Política de Privacidade da Plataforma, também disponível na página inicial '.$siteNegocio.'. Recomendamos que você leia esse documento e, em caso de dúvidas, entre em contato conosco.',
		    					'Denúncia de conteúdo vetado' => 'Caso você identifique na Plataforma qualquer Conteúdo que seja considerado Conteúdo Vedado, incluindo por violar seus direitos autorais e/ou de propriedade intelectual, você poderá promover uma denúncia por meio do e-mail <?php $emailContato ?>. Após apuração das informações, a '.$nomeNegocio.' poderá, a seu exclusivo critério, remover o Conteúdo denunciado.',
		    					'Suas obrigações ao acessar a plataforma' => '1. Você não poderá reproduzir, modificar, realizar engenharia reversa, compilar, descompilar, transmitir, publicar, sublicenciar, permitir, autorizar, alugar, vender, distribuir, ou, de qualquer outra forma, utilizar qualquer conteúdo, funcionalidade, software ou material da Plataforma de forma não permitida nesses Termos de Uso, sem prévia e expressa autorização, por escrito, da '.$nomeNegocio.' ou dos terceiros titulares dos direitos, quando for o caso.<br/>2. Você declara e garante que não registrará nem tentará registrar nomes de domínio na internet, perante quaisquer entidades, nacionais ou estrangeiras, contendo marcas, nomes e/ou elementos pertencentes à '.$nomeNegocio.', ou relacionados a esta Plataforma ou a seus produtos e serviços.<br/>3. Você se compromete a respeitar as marcas da '.$nomeNegocio.', não devendo utilizá-las sem prévia autorização, por escrito, da '.$nomeNegocio.', nem praticar atos que possam denegrir tais marcas.<br/>4. Ainda, você se concorda e se compromete a: <br/>(a) não explorar ou utilizar comercialmente, por qualquer meio, qualquer parte dos serviços ou dos conteúdos da Plataforma. Para os fins do presente, exploração ou utilização com finalidade comercial inclui, mas não se limita a (i) venda ou disponibilização, mediante recebimento de retribuição ou benefício, de acesso a esses serviços e/ou conteúdos, (ii) a venda ou comercialização de publicidade, patrocínios ou promoções associados a esses serviços ou conteúdos;(b) não alterar nem modificar qualquer parte dos serviços ou dos conteúdos disponibilizados na Plataforma;(c) não reivindicar ou buscar obter registro ou proteção de quaisquer direitos de propriedade intelectual ou direitos autorais sobre os Conteúdos de titularidade de terceiros ou sobre Conteúdos pertencentes à '.$nomeNegocio.';(d) não utilizar qualquer sistema automatizado (incluindo "robôs", "spiders" ou "offline readers") que permita o acesso à Plataforma de forma automática e com quantidade e velocidade superiores ao que seria possível de fosse feito por pessoas naturais;(e) não coletar e/ou utilizar qualquer informação pessoal de outros Clientes;(f) não utilizar os sistemas de comunicação fornecidos pela Plataforma com finalidade comercial de qualquer espécie e/ou de forma que se caracterize concorrência desleal contra a '.$nomeNegocio.';(g) cumprir com todas as leis, normas e regulamentos aplicáveis, no Brasil ou no exterior.'
		    				),
		    			'faqcat02' => array(
		    					'Termos e Condições Gerais' => 'A '.$nomeNegocio.' utiliza tecnologia de ponta para a fabricação de seus produtos, primando pela qualidade e satisfação de seus clientes. Pelo respeito e para que seja mantida a credibilidade conquistada junto aos seus consumidores, a empresa criou uma política de troca e devolução de acordo com o Código de Defesa do Consumidor, e pensando na facilidade para que você (cliente) obtenha uma negociação eficaz, ágil e principalmente satisfatória desenvolvemos a troca e devolução automática.<br/>O processo é simples, basta se logar e acessar a página TROCA E DEVOLUÇÃO localizado em SUA CONTA. Para se logar <a href="login.php" target="_blank"><b>CLIQUE AQUI</b></a>!<br/>Os pedidos elegíveis para a troca/devolução ficam no campo "Pedidos Disponíveis Para a Troca ou Devolução".<br/>IMPORTANTE! A disponibilização para a troca/devolução pode ocorrer em até 48h após a entrega do seu pedido.',
		    					'Devolução por Arrependimento ou Desistência' => 'Se ao receber o produto, você resolver devolvê-lo por arrependimento, deverá fazê-lo em até sete dias corridos, a contar da data de recebimento. Observando as seguintes condições:<br/>1. O produto não poderá ter indícios de uso.<br/>2. O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota fiscal, etiquetas, tags (etiqueta com código de referência do produto) devidamente fixada no produto e todos os seus acessórios.<br/>3. Ao efetuar o processo de devolução o cliente deverá no verso da nota fiscal a ser devolvida, informar o motivo da recusa/devolução, o nome de quem está devolvendo, CPF e a data da devolução.',
		    					'Produtos com Defeito ou Avaria' => 'Se ao receber o produto, você identificar qualquer defeito comunique imediatamente nosso Serviço de Atendimento ao Consumidor (SAC) através do e-mail '.$emailContato.' ou se preferir, pelo número '.$telefoneFixo.' de segunda à sexta das 08h00 às 18h00. Para efetuar a troca ou devolução do produto com defeito, deverão ser observadas as seguintes condições:<br/>1. O produto não poderá ter indícios de uso.<br/>2. O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota fiscal, etiquetas, tags (etiqueta com código de referência do produto) devidamente fixada no produto e todos os seus acessórios.<br/>3. Ao efetuar o processo de devolução o cliente deverá no verso da nota fiscal a ser devolvida, informar o motivo da recusa/devolução, o nome de quem está devolvendo, CPF e a data da devolução.',
		    					'Troca de Produto' => 'A troca poderá ser efetuada por produtos de mesma referência (modelo). O prazo para solicitação de troca do produto é de trinta (30) dias corridos após o recebimento.<br/><b>*ATENÇÃO:</b> Para efetuar o processo de troca é necessário estar logado. Para se logar <a href="login.php" taget="_blank"><b>CLIQUE AQUI</b></a>!'

		    				),
		    			'faqcat03' => array(
		    					'Prazo de Entrega' => 'O prazo de entrega depende da localidade do endereço de entrega do seu pedido. Não esqueça! Nós começamos a contar a data da entrega a partir da data de confirmação de pagamento do seu pedido pela instituição financeira ou compensação de seu boleto bancário e após a confirmação dos seus dados cadastrais.<br/>No caso de pagamento via boleto bancário, o prazo de confirmação pode levar até 3-4 dias úteis.<br/>Alguns fatores climáticos ou situações adversas podem interferir na entrega de suas compras. Nesses casos, verifique se ocorreram greves, paralisações ou acidentes em sua localidade.',
		    					'Regras e Restrições de Entrega' => 'As entregas são realizadas de segunda a sexta das 9h às 18h, exceto feriados. Toda entrega deverá ter o comprovante assinado pelo recebedor com preenchimento de data, nome legível e número do RG.<br/>Locais de destino com baixa população, de difícil acesso ou distantes das capitais podem necessitar de mais prazo para a entrega ou serem retirados na agência dos Correios mais próxima.<br/>Locais de destino sujeito a prazo diferenciado pelos Correios, com possibilidade de acréscimo de até 7 dias úteis para a entrega ou serem retirados na agência dos Correios mais próxima.<br/>As entregas são realizadas apenas dentro do território nacional. Não haverá reembolso do frete ao cliente em caso de uma segunda troca dos mesmos produtos ou pedido. Em caso de dúvidas ou esclarecimentos, por favor, contate nosso serviço de Atendimento ao Cliente através do telefone '.$emailContato.'.',
		    					'Ausência no Momento da Entrega' => 'Para o sucesso de sua entrega, é imprescindível que as informações de endereço e telefone do seu cadastro estejam atualizadas. No caso de insucesso de entrega provocado por: cliente ausente, dados cadastrais incorretos ou mudança de endereço, o pedido será devolvido a nossa central de distribuição e seu pedido será cancelado e reembolsado.',
		    					'Acompanhamento de Envio' => 'Você pode acompanhar o seu pedido acessando o link Status do Pedido, situado no menu da página principal. Insira o número do pedido e o email cadastrado no ato da compra e clique em "ver pedido".<br/>Você também receberá passo a passo de seu pedido através do email cadastrado. Clique na palavra "rastrear" do email recebido "Seu pedido foi postado" para visualizar o rastreamento e obter as informações atualizadas diretamente com a transportadora.<br/>A informação do status de entrega estará disponível no site da transportadora um dia após o envio do e-mail.<br/>Alguns pedidos são embalados em mais de uma caixa. Nesses casos, cada caixa terá um número de postagem diferente para acompanhamento de entrega.'
		    				),
		    			'faqcat04' => array(
		    					'Disposições Gerais' => 'Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o mais produtiva e agradável possível.<br/>A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o '.$nomeNegocio.'.<br/>Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o '.$nomeNegocio.' serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).<br/>A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de nascimento e/ou outros.<br/>O uso do '.$nomeNegocio.' pressupõe a aceitação deste Acordo de privacidade. A equipa do '.$nomeNegocio.' reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.',
		    					'Sobre os Anúncios' => 'Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.',
		    					'Cookies e Web Beacons' => 'Utilizamos cookies para armazenar informação, tais como as suas preferências pessoas quando visita o nosso website. Isto poderá incluir um simples popup, ou uma ligação em vários serviços que providenciamos, tais como fóruns.<br/>Em adição também utilizamos publicidade de terceiros no nosso website para suportar os custos de manutenção. Alguns destes publicitários, poderão utilizar tecnologias como os cookies e/ou web beacons quando publicitam no nosso website, o que fará com que esses publicitários (como o Google através do Google AdSense) também recebam a sua informação pessoal, como o endereço IP, o seu ISP, o seu browser, etc. Esta função é geralmente utilizada para geotargeting (mostrar publicidade de São Paulo apenas aos leitores oriundos de São Paulo por exemplo) ou apresentar publicidade direcionada a um tipo de utilizador (como mostrar publicidade de restaurante a um utilizador que visita sites de culinária regularmente, por exemplo).<br/>Você detém o poder de desligar os seus cookies, nas opções do seu browser, ou efetuando alterações nas ferramentas de programas Anti-Virus, como o Norton Internet Security. No entanto, isso poderá alterar a forma como interage com o nosso website, ou outros websites. Isso poderá afetar ou não permitir que faça logins em programas, sites ou fóruns da nossa e de outras redes.',
		    					'Ligações a Sites de Terceiros' => 'O '.$nomeNegocio.' possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.<br/>Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.'
		    				),
		    			'faqcat05' => array(
		    					'Disposições Gerais' => 'Este site observa a Lei de Direitos Autorais nº 9.610, de 19.02.98, do Governo Federal Brasileiro.<br/>Por favor não copie o conteúdo deste site. Possuímos um sistema de rastreamento (Copyscape) para sermos notificados assim que uma cópia do nosso texto for publicado na internet.<br/>Todo o conteúdo deste site é registrado legalmente com certificado (ICP Brasil) válido em todos os tribunais e assinado por autoridade competente.<br/>Os direitos autorais de todo o material apresentado neste site como imagens, fotografias still, fotos 360 graus, tour virtuais, artigos e textos são propriedade da '.$nomeNegocio.'. A reprodução, adaptação, modificação ou utilização do conteúdo disponibilizado neste site, parcial ou integralmente, é permitida somente com autorização prévia por escrito da '.$nomeNegocio.' ou do titular dos direitos autorais.<br/>Qualquer uso não autorizado de qualquer material incluído neste site pode constituir uma violação das leis de direitos autorais, das leis de marcas comerciais, das leis de privacidade e publicidade e das leis e regras de comunicações.'
		    				)
		    		);



		    // ### BUSCA (GOOGLE SEARCH CONSOLE - BUSCA PERSONALIZADA)
		    $tituloBusca = "Digital Grupo | Busca por Produto";
		    $subtituloBusca = "Insira o nome ou característica do produto que procura";
		    $metaTitleBusca = $tituloBusca;
		    $metaDescBusca = "Busca | Template de ecommerce desenvolvido com fins didáticos, parte do projeto integrador do curso de Full Stack da Digital House Brasil";
		    $metaKeyWordsBusca ="template de eCommerce, template de loja virtual, template loja, template loja online, eCommerce, loja virtual, loja online, desenvolvimento de eCommerce, desenvolvimento de loja virtual, desenvolvimento de loja online, desenvolvimento de loja, programação de eCommerce, programação de loja virtual, programação de loja online, programação de loja";
		    $metaOgTitleBusca = $tituloBusca;
		    $metaOgDescBusca = $metaDescBusca;
		    $metaOgUrlBusca = "http://digitalgrupo.provisorio.ws/busca.php";
		    $metaOgLocalBusca = "pt-BR";
		    $metaOgTypeBusca = "website";
		    $metaOgImageBusca = "http://digitalgrupo.provisorio.ws/assets/images/insta-card.gif";
		    $metaOgImageAltBusca = "Digital Grupo";
		    $metaOgImageUrlBusca = $metaOgImageBusca;
		    $metaOgImageTypeBusca = "image/gif";

		// ## ADITIVOS (BANNERS, POP UPS, ALERTAS, MODAIS...)
		    
		    // ### BANNERS
			$bannerHorizontal = "Banner Horizontal para Promoções! Acesse já!";

?>