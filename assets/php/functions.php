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