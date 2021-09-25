-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/09/2021 às 21:33
-- Versão do servidor: 5.6.41-84.1
-- Versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pmnov048_sthepson`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `destaques`
--

CREATE TABLE `destaques` (
  `destaque_id` int(11) NOT NULL,
  `destaque_titulo` varchar(255) NOT NULL,
  `destaque_descricao` text,
  `destaque_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `destaques`
--

INSERT INTO `destaques` (`destaque_id`, `destaque_titulo`, `destaque_descricao`, `destaque_img`) VALUES
(22, ' ', 'Somos uma empresa que atua no mercado desde 2009. Oferecemos uma estrutura especializada e com valores pautados na Ética, Legalidade, Entusiasmo, Compromisso e Transparência em nossas ações', '/public/assets/imagens/carousel/write_bw.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipe`
--

CREATE TABLE `equipe` (
  `membro_id` int(11) NOT NULL,
  `membro_nome` varchar(100) NOT NULL,
  `membro_photo` varchar(255) DEFAULT NULL,
  `membro_descricao` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `equipe`
--

INSERT INTO `equipe` (`membro_id`, `membro_nome`, `membro_photo`, `membro_descricao`) VALUES
(5, 'Danilo Santana', '/public/assets/imagens/equipe/danilo_fw.png', ''),
(6, 'Lucian Xavier', '/public/assets/imagens/equipe/LUCIAN2.jpg', ''),
(7, 'Virginia Celly', '/public/assets/imagens/equipe/VIRGINIA.png', ''),
(8, 'Wytatiana Monteiro', '/public/assets/imagens/equipe/TATIANE.png', ''),
(10, 'Hiene', '/public/assets/imagens/equipe/mulher.png', ''),
(11, 'Eduardo Rabelo', '/public/assets/imagens/equipe/EDUARDO.png', ''),
(12, 'Watson Lira', '/public/assets/imagens/equipe/watson_fw.png', ''),
(14, 'Felipe Cavalcante', '/public/assets/imagens/equipe/felipe.png', ''),
(15, 'Nivaldo Neto', '/public/assets/imagens/equipe/NIVALDO.png', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `parceiro_id` int(11) NOT NULL,
  `parceiro_nome` varchar(255) NOT NULL,
  `parceiro_img` varchar(255) DEFAULT NULL,
  `parceiro_descricao` text,
  `parceiro_url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `parceiros`
--

INSERT INTO `parceiros` (`parceiro_id`, `parceiro_nome`, `parceiro_img`, `parceiro_descricao`, `parceiro_url`) VALUES
(7, 'Prefeitura Municipal de Nova Olinda', '/public/assets/imagens/parceiros/Sem_título.jpg', 'Nova Olinda é um município brasileiro no estado da Paraíba, localizado na Região Metropolitana do Vale do Piancó. De acordo com o IBGE, no ano de 2010 sua população foi estimada em 6.070 habitantes. Área territorial de 84 km²', 'http://novaolinda.pb.gov.br/'),
(8, 'Prefeitura Municipal de Aguiar', '/public/assets/imagens/parceiros/aguiar.jpg', 'Aguiar é um município brasileiro no estado da Paraíba, localizado na Região Metropolitana do Vale do Piancó. De acordo com o IBGE (Instituto Brasileiro de Geografia e Estatística), em 2016 sua população é de 5.567 habitantes. Área territorial de 345 km².', 'https://www.aguiar.pb.gov.br/'),
(9, 'Prefeitura Municipal de Boa Ventura', '/public/assets/imagens/parceiros/boaven.jpg', 'Boa Ventura é um município brasileiro do estado da Paraíba, localizado na Região Metropolitana do Vale do Piancó. De acordo com o IBGE (Instituto Brasileiro de Geografia e Estatística), no ano de 2006 sua população era estimada em 7.045 habitantes. Área territorial de 132 km².\r\n\r\nAté o início da década de 1960, constituía distrito do município de Itaporanga, que, à época, chamava-se Misericórdia. O interventor, à ocasião de sua emancipação, foi Jorge de Freitas, primeiro Prefeito do novo município. Cláudio Cavalcanti de Arruda, comerciante, foi o primeiro prefeito eleito. A economia da cidade se baseia principalmente na agropecuária.', 'http://boaventura.pb.gov.br/'),
(10, 'Prefeitura Municipal de Bonito de Santa Fé', '/public/assets/imagens/parceiros/bonito.jpg', 'Bonito de Santa Fé é um município do estado brasileiro da Paraíba, da Região Geográfica Imediata de Cajazeiras. De acordo com o IBGE, no ano de 2016 sua população era estimada em 11.814 habitantes. Área territorial de 228 km².', 'http://bonitodesantafe.pb.gov.br/'),
(11, 'Prefeitura Municipal de Cacimba de Areia', '/public/assets/imagens/parceiros/cacimba.png', 'Cacimba de Areia é um município brasileiro do estado da Paraíba, localizado na Região Geográfica Imediata de Patos e integrante da Região Metropolitana de Patos. De acordo com o IBGE (Instituto Brasileiro de Geografia e Estatística), no ano de 2017 sua população era estimada em 3.749 habitantes. Área territorial de 233 km².\r\n\r\nO município comemora seu aniversário de emancipação política no dia 30 de dezembro. As cidades de Cacimbas, Patos, Passagem, Quixaba, São José do Bonfim e Texeira, fazem divisa com o município.\r\n\r\nO clima predominante na região é o semiárido, com pouca pluviosidade anual.', 'http://cacimbadeareia.pb.gov.br/'),
(16, 'Prefeitura Municipal de Monte Horebe', '/public/assets/imagens/parceiros/monte.jpg', 'Prefeitura Municipal de Monte Horebe', 'https://montehorebe.pb.gov.br/'),
(17, 'Prefeitura Municipal de Piancó', '/public/assets/imagens/parceiros/pianco.jpg', 'Prefeitura Municipal de Piancó', 'http://pianco.pb.gov.br/'),
(19, 'Prefeitura Municipal de São José de Piranhas', '/public/assets/imagens/parceiros/Sem_título.png', 'Prefeitura Municipal de São José de Piranhas', 'https://saojosedepiranhas.pb.gov.br/'),
(20, 'Prefeitura Municipal de Santana de Mangueira', '/public/assets/imagens/parceiros/sanataaman.jpg', '', 'http://santanademangueira.pb.gov.br/'),
(21, 'Prefeitura Municipal de Santana dos Garrotes', '/public/assets/imagens/parceiros/santanadosga.jpg', '', 'http://santanadosgarrotes.pb.gov.br/'),
(23, 'Prefeitura Municipal de Serra Grande', '/public/assets/imagens/parceiros/serra_grande.jpg', '', 'http://serragrande.pb.gov.br/'),
(24, 'Prefeitura Municipal de Salgadinho', '/public/assets/imagens/parceiros/salgadinho.jpg', 'Salgadinho é um município brasileiro do estado de Pernambuco, localizado na microrregião do Médio Capibaribe. O município é composto pelo distrito sede e pelo povoado de Picarreira.\r\n\r\nAo final do século XVIII, as terras do atual município de Salgadinho era uma fazenda pertencentes à família Alves Camelo, seus primeiros habitantes. Por volta de 1780, o patriarca João Idelfonso Alves Camelo construiu uma capela dedicada a Nossa Senhora das Dores, com uma imagem da pedra, medindo 1,5 m de altura sobre o altar. No entorno desta capela surgiu o povoado e a lenda sobre o sino da igreja. A lenda conta que ao final da construção, faltava o sino. Um grupo de tropeiros com os burros carregados parou no local para descansar, em frente à casa grande e à capela. Ao retomar a viagem, recarregavam os burros quando observaram que o sino que traziam estava muito pesado. Sem conseguir levantar o sino, os tropeiros decidiram vendê-lo à família Alves Camelo. Após a partida dos tropeiros, o sino foi erguido sem dificuldade e conduzido à capela, o que foi considerado um milagre.\r\n\r\nO distrito de Salgadinho era parte do território de Bom Jardim. Com a criação do município de João Alfredo, Salgadinho passou a ser distrito da nova cidade. Foi elevado à categoria de município com a denominação de Salgadinho, pela lei estadual nº 4974,de 20 de dezembro de 1963.\r\n\r\nGeografia\r\nO relevo de Salgadinho participa das Áreas Desgastadas da Província Borborema, formada por maciços altos e outeiros, com altitudes variando de 650 a 1.000 m, ou seja, superfícies onduladas com relevos residuais altos. O relevo é geralmente movimentado, com vales profundos e estreitos. Nas cristas residuais altas predominam os solos litólicos; nos topos e vertentes das ondulações observa-se os solos brunos não cálcicos e nas parte baixa das ondulações estão presentes os planossolos. Os solos são pouco profundos e de fertilidade entre média e alta.\r\n\r\nA vegetação nativa consiste em caatinga hipoxerófila.\r\n\r\nDados da Sudene de precipitação registram uma média anual de 920,70 mm, com um máximo de 1.197,90 mm e um mínimo de 624,80 mm entre 1962-1985.\r\n\r\nO município de Salgadinho encontra-se inserido na bacia hidrográfica do Rio Capibaribe.\r\n\r\nEconomia\r\nA economia do município divide-se entre o comércio local, o turismo, a pecuária, a agricultura e atividades de extrativismo vegetal e silvicultura.\r\n\r\nNa agricultura, destacam-se o tomate, o feijão e a mandioca. Na pecuária, o gado bovino e caprino, bem como a avicultura.\r\n\r\nTurismo\r\nA cidade possui uma fonte termal, permitindo banhos com temperatura média de 38oC. Segundo os pesquisadores, as águas possuem cálcio, magnésio, potássio, sílica, sódio, sulfato etc. São bastante procuradas para banho nas piscinas formadas pela fonte. A água produz um efeito relaxante, sedativo, analgésico e anti-inflamatório, agindo também nos órgãos internos. Pesquisadores ingleses foram até o município e afirmaram conhecer uma água com as mesmas propriedades apenas na França e Inglaterra.\r\n\r\nOutro ponto turístico é a Igreja de Nossa Senhora das Dores, que possui um mirante da região.', 'http://salgadinho.pb.gov.br/'),
(29, 'Prefeitura Municipal de Areia de Baraunas', '/public/assets/imagens/parceiros/Sem_título2.png', 'Areia de Baraúnas é um município brasileiro do estado da Paraíba, localizado na Região Geográfica Imediata de Patos e integrante da Região Metropolitana de Patos. De acordo com o IBGE (Instituto Brasileiro de Geografia e Estatística), no ano 2017 sua população foi estimada em 2.126 habitantes. Área territorial de 96 km².', 'http://areiadebaraunas.pb.gov.br/'),
(28, 'Prefeitura Municipal de Tavares', '/public/assets/imagens/parceiros/tavares.png', 'História\r\nA história do município remonta ao século passado quando o Pe. Francisco Tavares, chegou a região, então habitada por umas 8 de famílias. Ao examinar a fertilidade da terra e suas condições climáticas de um sertão promissor, resolveu fazer paradeiro nesse lugar e lutar pelo ideal de povoar uma vila.\r\n\r\nPor volta de 1870, confrontou-se com o senhor Major Florentino, da região do Mixila (Sítio), que tivera, também, o propósito de formar um vilarejo na região de origem, contra as bênçãos e as ideias do padre, chegando a fundar uma feira livre lá no referido sítio, apressando, dessa maneira, a ação criadora do padre que, debaixo de um Juazeiro, bem no centro de Campina (local onde hoje fica a rua principal) celebrou a primeira missa e edificou um altar improvisado de varas, elevando ao mesmo tempo a imagem do arcanjo São Miguel, que posteriormente recebera do proprietário local, Sr. Manoel Antônio do Nascimento, o qual doou, ainda, quatro hectares de terra como primeiro patrimônio da paróquia de São Miguel. Tal fato teria se dado em 4 de fevereiro de 1874, quando o povoamento do sítio Campina contava apenas com duas residências: uma na fazenda Casa Nova e outra na Lagoa dos Paulinos.\r\n\r\nPara celebrar o seu povoamento o padre Francisco Arcoverde Tavares edificou uma capela com a imagem de São Miguel, na condição de Padroeiro, o qual ficou sendo homenageado por nove noites seguidas, nas segunda quinzena do mês de Setembro.\r\n\r\nA escolha de São Miguel Arcanjo como padroeiro da cidade teria sua razão numa homenagem póstuma, prestada ao filho do doador da imagem e do patrimônio da paróquia, que se chamava Miguel e que teria sido devorado por uma onça nas proximidades da lagoa dos Paulinos. Quanto ao nome Tavares, o mesmo seria uma homenagem ao sacerdote Francisco Tavares, pelos seus relevantes feitos.\r\n\r\nCom a chegada do Padre, foi edificada uma capela em homenagem ao arcanjo São Miguel, atual padroeiro. O município alcançou sua independência político-administrativa, através do Projeto de Lei n.º 2.150, em 10 de Setembro de 1959, sendo que, sua emancipação política e administrativa ocorreu em 17 de Novembro de 1959.\r\n\r\nGeografia\r\nRelevo\r\nEm termos de relevo a cidade localiza-se no Maciço de Teixeira, denominado como zona fisiográfica do Sertão Alto, uma área cristalina elevada de constituição granítica e gnáissica, no centro-sul do município e de constituição filítica e xística, na porção Norte e Noroeste. O município conta com uma altitude de 724 metros, apresentando topografia irregular de relevo forte ondulado e montanhoso na porção norte, tornando-se ondulado na parte central e forte ondulado no Sudeste. Destacam-se a Serra do Cedro e a Serra do Capitão do Norte e Noroeste e, a Serra Vermelha no Sudeste.\r\n\r\nVegetação\r\nA vegetação originária do município era dominada pelas Caatingas que são formações vegetais de porte variáveis, caducifólias de caráter xerófilo com grande quantidade de plantas espinhosas e que possuem formas comuns de resistência à carência de água. Tal vegetação divide-se em dois tipos:\r\n\r\n1.Caatinga hipoxerófila – que predomina nas regiões centro-sul e sudeste, denominada como Caatinga de clima menos seco. Apresenta-se densa e com porte arbóreo, estando a freqüência de cactáceas baixas e bromeliáceas restritas às áreas mais pedregosas e rochosas;\r\n\r\n2.Caatinga hiperxerofila – predominante na porção Norte e Noroeste do município, caracterizada por apresentar grau mais acentuado de xerofitismo. Sua formação é densa e de porte arbóreo baixo ou arbóreo-arbustivo, com pouca concentração de cactáceas e bromeliáceas.\r\n\r\nAs espécies mais encontradas são: Imburana-de-cheiro (Leguminosae), Mororó (Leguminosae), Catingueira (Leguminosae), Canafistula (Leguminosae), Umbunzeiro (Anacardiaceae), Aroeira (Anacardiaceae), Braúna (Anacardiaceae), Juazeiro (Rhamnaceae), Mandacaru (Cactaceae), Facheiro (Cactaceae) e Jurema (Leguminosae).\r\n\r\nHidrografia\r\nO município está localizado na bacia hidrográfica do rio Piancó, sendo cortado por vários ribeirões, dentre eles: Tavares, Canoas, Arara, Mocambo, Catingueira etc.\r\n\r\nClima\r\nO município está incluído na área geográfica de abrangência do semiárido brasileiro, definida pelo Ministério da Integração Nacional em 2005.[7] Esta delimitação tem como critérios o índice pluviométrico, o índice de aridez e o risco de seca.\r\n\r\nApresenta clima quente e semiárido, com chuvas de verão-outono e um período de estiagem de cinco a sete meses, apresentando uma precipitação pluviométrica média anual de 778,2 mm[8], sendo que o período chuvoso compreende, geralmente, os meses de fevereiro a junho, quando, então, se inicia a estação seca, a qual perdura até o mês de novembro, época das primeiras trovoadas. A temperatura média anual varia entre 22 e 23 °C, sendo registradas temperaturas mínimas mensais de 17°C e máximas mensais de 27°C, sendo, geralmente, junho e julho os meses mais frios e dezembro e janeiro os mais quentes.\r\n\r\nPopulação\r\nOs dados dos últimos censos do Instituto Brasileiro de Pesquisa e Estatística – IBGE, apontam que a população majoritária habita as áreas ‘oficialmente’ rurais do município, muito embora, desde a década de 80 do século XX, se observe um declínio desta população e, concomitantemente, o crescimento da população que reside nas áreas urbanas, movimento este que acompanha a tendência regional e que está relacionado à busca de bens e serviços como postos médicos, escolas, bancos etc.; por parte da população rural.\r\n\r\nAinda de acordo com dados do IBGE (Censo Agrícola – 95), o município apresenta uma elevada concentração de imóveis rurais, 99,9%, cujas áreas são inferiores a cinco hectares (gráfico 2), os quais ocupam apenas 0,24 % de toda área municipal, o que nos permite perceber que a concentração de terras, como no restante do país, é um dos problemas que afeta diretamente os pequenos agricultores, que, dessa forma, são “obrigados” a estabelecerem relações de parcerias com médios e grandes proprietários, visando assegurar a produção familiar.\r\n\r\nA pirâmide social no município é assim composta: abaixo, estão os pobres, os despossuídos, os moradores das pontas de ruas; são mulheres chefes do lar, cujos maridos não mais existem, seja por motivo de morte, seja por abandono da casa: são lavadeiras, engomadeiras, as que buscam sustento para si e para os filhos que ficaram, “ajudando” nas casas de “família”, são pais de famílias que vivem do alugado, do bico: ajudante de pedreiro; vendedores de ovos, galinhas; carrinhos de pipoca, confeitos; são os que nada têm,nada possuem e cujos filhos, crianças ainda, passam o dia de porta em porta a mendigar uma comidinha para si e para os seus outros irmãos; são rapazes, os ajudantes de armazéns, das madeireiras, das casas de construção. Um pouco mais acima da pirâmide, ficam os pequenos proprietários, os que possuem um pedaço de terra, mas o qual é tão pequeno, que para alimentarem a família e fazerem a semente para o inverno que de novo há de vir, se Deus quiser, são “obrigados” a entrarem em relação com os médios e grandes proprietários, os quais possuem mais terra e com os quais deixam parte da produção. São esses médios e grandes proprietários, que junto com os grandes comerciantes, funcionários públicos e profissionais liberais formam o topo da pirâmide social.\r\n\r\nPor sua vez, os comerciantes mais solidificados no município foram os que conseguiram firmarem-se como atravessadores, tanto na época do algodão quanto no ciclo do feijão, culturas que tiveram seu ponto alto no município, a primeira, nas primeiras décadas do século XX e, a segunda, nas últimas décadas daquele mesmo século, época em que a cidade era conhecida como a “terra do feijão”.\r\n\r\nComunidades\r\nDe acordo com a metodologia adotada pelo IBGE (Instituto Brasileiro de Geografia e Estatística) para a realização do censo, o município foi dividido em 15 áreas, sendo três (03) na sede do município e doze (12) na zona rural. Dentre as comunidades rurais, merecem destaque: Mocambo, Arara, Inácio Alves, Curisco, Pau d’Arco, Boa Vista, Lagoa, Riacho do Meio, Minadouro, Domingos Ferreira, Queimadas, Bonito, Cacimbinha, Cumbre, Castanheira, Olho d’Água Seco, Pitomba, Lajedo Bonito, Manoel do Mato, Macambira e os distritos de Jurema, Belém e Silvestre.\r\n\r\nEconomia\r\nAlgodão herbáceo, arroz, batata-doce, cana de açúcar, fava, feijão, mamona, mandioca, pão e milho, são as principais lavouras temporárias, presentes na região, sendo que o destaque é sem dúvida para o feijão, o milho e a mandioca. Dentre as culturas permanentes sobressaem-se o algodão arbóreo e as frutas, com destaque para o caju, a goiaba e a manga.\r\n\r\nAs famílias dos pequenos agricultores, com melhores condições financeiras, possuem vacas, cujo leite algumas famílias manufaturam nas próprias casas, obtendo-se então, o queijo e a manteiga, produtos que são consumidos internamente pelas famílias e, também, comercializados nos próprios sítios. São criados, ainda, porcos, caprinos e galinhas, que além de servirem para o consumo familiar, chegam a movimentar um pequeno comércio, o qual vem sendo cada vez mais, ocupado pelos atravessadores.\r\n\r\nO comércio local é composto de pequenas mercearias, casas de construção, madeireiras, bares, boates, clubes dançantes, lojas de roupas. A maioria dos estabelecimentos localizados na área urbana do município é propriedade de funcionários ou de agricultores médios e, ainda, de ex-agricultores, isto é, pessoas que se aposentaram na agricultura, venderam suas terras e se estabeleceram na cidade passando a investir no negócio.\r\n\r\nExistem, ainda, alguns casos de médios e grandes agricultores, que passaram a investir no negócio, sem, contudo, abandonarem a agricultura. Nos sítios o comércio é composto quase que exclusivamente de bares-mercearias, isto é, um mesmo estabelecimento, em geral muito pequeno e ligado à casa do proprietário, onde se vendem bebidas e alguns poucos gêneros alimentícios e materiais de limpeza. Há, também, uma rede de comércio ambulante, portanto, feito de porta em porta, por vendedoras/es de roupas e acessórios como bijuterias, maquiagens, utensílios domésticos etc., e que é movimentada, sobretudo por jovens mulheres. Este tipo de comércio está presente tanto nos sítios e povoados como na sede do município. Ainda nesta rede de comércio ambulante podemos incluir os feirantes, isto é, os vendedores de roupas e bijuterias, cereais, frutas e verduras, animais (bovinos, suínos e ovinos), são os que “fazem as feiras”, que percorrem diferentes praças de mercados1, localizadas nos diferentes municípios da região, em diferentes dias da semana. Em Tavares a feira acontece às segundas-feiras, em Princesa Isabel, Juru e Água Branca, aos sábados; mas, há feiras mais distantes, como as de Afogados e Tabira, municípios pernambucanos, que acontecem, respectivamente, nas quartas e quintas-feiras.\r\n\r\nPelos circuitos das feiras circulam pessoas e mercadorias. O raio que tais fluxos abrangem varia bastante; muitos feirantes ficam apenas na feira local; outros ‘fazem’ também as feiras dos municípios vizinhos; alguns se deslocam para mais longe: Tabira (vendedores/compradores de suínos e bovinos e matérias primas: ferro, couro etc.); Afogados.PE, onde a procura é por gênero alimentício; Patos, Caruaru e Serra, os dois últimos, municípios pernambucanos que se destacam pelo comércio de roupas e acessórios: brincos, maquiagens etc.\r\n\r\nUma parte muito pequena da população é formada por funcionários públicos municipais e estaduais; são professores/as e demais profissionais ligados à educação – merendeiras, secretárias/os, auxiliar de serviços etc. -, ou à saúde – enfermeiras/os, auxiliares de enfermagem, técnicos em laboratórios etc.\r\n\r\nNo setor de serviços sobressaem-se o alugado e a construção civil. O primeiro é um trabalho que beneficia, sobretudo, os jovens do sexo masculino.\r\n\r\nTanto no período de pico da semeadura e da colheita – período da estação chuvosa – como no período do verão, é comum as contratações ou os “chamados” como é denominada na região, de jovens e adolescentes, por pequenos e grandes agricultores. Durante o inverno, os trabalhos mais procurados são: aração, visto que nem todas as famílias possuem bois e arados; plantio e limpa. No verão, são comuns os chamados para “fazer cerca”, isto é, consertar os arames que cercam as roças e/ou os terrenos dos agricultores ou, ainda, preparar o terreno para o plantio.\r\n\r\nJá na construção civil, os serviços mais requisitados são os de pintor e de pedreiro. Tais serviços são realizados por homens adultos, acompanhados muitas vezes de adolescentes e jovens que são denominados de ‘ajudantes’ de pedreiro e/ou de pintor. É bastante comum encontrarmos famílias inteiras que se dedicam a esta atividade e cujos membros acabam sendo conhecidos e reconhecidos na “comunidade” pela sua “arte”, isto é, seu capital cultural adquirido no setor em questão.\r\n\r\nOrganização Popular e Comunitária\r\nEm termos de organizações comunitárias ressalta-se a existência de várias associações comunitárias rurais, ao todo são vinte e duas associações desta natureza, localizadas nos sítios e povoados, algumas destas criadas por políticos locais e outras como resultado de um trabalho de base organizado pela igreja Católica; existem ainda, dois sindicatos, sendo um de trabalhadores rurais e outro de profissionais da educação (Sindicato dos Trabalhadores em Educação do Município de Tavares.PB – SINTEMT), além de uma rádio comunitária (Rádio São Miguel – FM) mantida pela Associação Comunitária São Miguel – ACOSAMI. Outros espaços organizativos e participativos são os conselhos setoriais (da saúde, da criança e do adolescente, tutelar etc.), os times de futebol, as diversas pastorais ligadas à igreja católica e alguns grupos ligados às igrejas evangélicas, a exemplo da Mocidade.\r\n\r\nAparelhos e Instituições Sociais:\r\n\r\nEducação – existe no município uma escola da rede estadual que atende a população urbana e rural, oferecendo educação do ensino fundamental ao segundo grau médio, antigo científico, a mesma funciona na cidade e em um dos três povoados, atendendo aí, alunos do fundamental à oitava série. Existem, ainda, várias escolas rurais que fazem parte do sistema municipal e que oferece educação do fundamental até a oitava série, sendo que as duas últimas fases do primeiro grau – 5ª a 8ª série – são oferecidas apenas nos povoados. Para os que terminam o segundo grau, existe a possibilidade, dependendo das condições familiares, de cursarem um curso nos municípios de Afogados.PE (enfermagem) ou Patos (Computação); fazerem um curso em Serra Talhada.PE, João Pessoa ou, mesmo, Campina Grande. Como se percebe, as trajetórias são múltiplas e as opções variam de acordo com as condições e possibilidades familiares;\r\n\r\nSaúde – A cidade conta com um hospital de pequeno porte e alguns postos de saúde espalhados, todos eles, pela zona urbana (cidade e povoados). O atendimento ainda é precário: os casos de saúde com um grau de seriedade maior são encaminhados para tratamento fora da cidade, em municípios maiores, como Serra Talhada, João Pessoa ou Campina Grande, escolha esta que vai depender de múltiplos fatores, sendo o principal dele a existência de algum familiar nessas localidades.\r\n\r\nCultura\r\nO Município possui três praças centrais, localizadas todas na sede, aproximadamente 5 danceterias (boates) localizadas todas nos sítios e povoados e dois clubes dançantes: Palmerião Clube localizado na sede do município e o Ferreirão (Sítio Domingos Ferreira). Outro espaço de lazer são os bares e campos de futebol existentes tanto na sede quanto nos sítios e povoados.\r\n\r\nEncontram-se, ainda, os campos de vaquejada, esporte muito valorizado no município, cujos vaqueiros, em épocas não tão distantes, décadas de 80, realizava grandes torneios, pelo qual a cidade ficou conhecida na região e, também, fora da região. Era comum, em dias de vaquejadas, a cidade ficar tomada por verdadeiros bandos de vaqueiros oriundos da região e mesmo de locais distantes, como Recife, João Pessoa etc. Todavia, na década de noventa, esse esporte perdeu muito do brilho local, vindo a ressurgir nos dias atuais, em alguns sítios a exemplo do Sítio Minadouro, onde os ruais estão fazendo seus próprios campos e organizando seus próprios eventos (vaquejadas).\r\n\r\nCircuito de festa\r\nO município conta com um calendário festivo, ligado, sobretudo, aos santos do catolicismo popular: último de maio, São João, São Pedro e Padroeiros, tanto da cidade (São Miguel), quanto das várias comunidades, como bem explica o senhor Manoel Leite da Silva (ex-prefeito municipal) Aqui no município de Tavares tem uma tradição de muitas festas…eu mesmo começo dia 19 de janeiro, dia de São Sebastião a quarenta e sete anos que sou noiteiro no dia 19 véspera de São Sebastião no Lajedo Bonito…vem dia de São José, na Macambira que sou noiteiro e tem que ter a presença nessa festa…tem Santo Antônio no Mocambo que a gente tem que tá presente, fazer, levar um conjuntozinho, umas coisas, para fazer aquela festa…e é tantas que a gente nem sabe..tem são Domingos no Domingos Ferreira…Tem São João, lá nas Batingas, aí começa a festa de São Francisco em Jurema, de Nossa Senhora no Belém, tem a do Silvestre, tem a festinha de Nossa Senhora do Carmo que se Deus e São Miguel nos ajudar ela se realiza…dia 16 é a última noite…de julho… vai completar 18 anos, que todo ano eu faço essa festinha de nossa senhora que é uma promessa que eu tenho…(M.L.S, 82 anos)\'\'\r\n\r\nTavares conta com uma das maiores festas da região, o Forrojão.[carece de fontes] A festa é realizada a partir do dia 31 de maio e dura três dias, nesse mesmo dia era realizada uma festa antes que a o então prefeito José Severiano de Paulo Bezerra da Silva decidiu prolongar por mais dois dias criando então a festa do Forrojão, festa em comemoração a safra do feijão.\r\n\r\nReligião\r\nÉ forte a presença da religião, sobretudo do Catolicismo popular, o que também é uma característica das sociedades camponesas. Porém nos últimos anos, vêm se intensificando a presenças das Igrejas evangélicas, embora a população seja predominantemente católica, já existem, em todo o município, quatro instituições religiosas evangélicas que são as Igrejas: Igreja Congregacional, e Assembleia de Deus, Igreja Ação Evangélica e Igreja Batista.', 'http://tavares.pb.gov.br/'),
(27, 'Prefeitura Municipal de São Miguel de Taipu', '/public/assets/imagens/parceiros/Sem_título.png', 'Prefeitura Municipal de São Miguel de Taipu', 'https://www.saomigueldetaipu.pb.gov.br/'),
(30, 'Prefeitura de São José de Caiana', '/public/assets/imagens/parceiros/Sem_título3.png', 'São José de Caiana é um município brasileiro do estado da Paraíba, localizado na Região Metropolitana do Vale do Piancó, sertão da Paraíba. De acordo com o IBGE (Instituto Brasileiro de Geografia e Estatística), no ano de 2009 sua população era estimada em 6.141 habitantes. Área territorial de 176 km².', 'http://saojosedecaiana.pb.gov.br/'),
(31, 'Prefeitura Municipal de Juru', '/public/assets/imagens/parceiros/JURU.png', 'Distante da Capital a 398 km onde tem como ponto turístico a Igreja de Santa Terezinha do menino Jesus, Igreja de São Sebastião, Laje Grande. Emancipação Políticas 24 de dezembro de 1961. A origem de Juru se dá em meados de 1926 no sítio Roça Grande, pertencente a D. Maria Ferreira.\r\n\r\nEram organizadas corridas de cavalo na região que atraiam um grande número de pessoas dos lugares mais distantes e, para aproveitar este movimento, em 1929 começou-se uma feira livre próximo dali, que passou a ser semanal devido a seu sucesso.\r\n\r\nFoi então tomando forma o povoado, com cada vez mais pessoas e prédios residenciais. Entre 1936 e 1937, no município de Princesa surge o distrito de Barra, que no ano seguinte passa a se chamar Ibiapina. Em 31 de dezembro de 1943 o distrito de Ibiapina passa a se chamar Juru – palavra do Tupi-Guarani que significa aves multicores – e assim permanece até 10 de setembro de 1959, quando é anexado ao município de Tavares. O distrito de Juru é elevado à categoria de município no dia 24 de dezembro de 1961, se emancipando politicamente.', 'http://juru.pb.gov.br/'),
(32, 'Prefeitura Municipal de Manaíra', '/public/assets/imagens/parceiros/MANAIRA.png', 'Existem documentos datados de 1787 e 1818, no Museu de Manaíra, que dão conta da existência de \"Alagoa Nova\", vários anos antes dessas datas. Havia habitantes na região de Belém, Algodões, Quixaba, Poço do Cachorro e Olho d´Água. A povoação, ao lado da lagoa, é citada como tendo início em 1840, como desenvolvimento da fazenda “Alagoa Nova” (primeiro topônimo que recebeu a povoação) pertencente aos descendentes de Joaquim Ferreira: Antônia (que casou-se com Manoel Pereira da Silva); Balbina e Catarina (que doaram a parte das terras para constituir o Patrimônio da Capela; Severina e João Ferreira, nessa data citada, já eram falecidos.\r\n\r\nO Sr. Manoel Pereira da Silva, após o casamento com D. Antônia, assumiu o controle da Fazenda e iniciou as primeiras construções do povoado. Na época, adquiriram pequenas faixas de terra e construíram suas casas, os senhores Manoel Pequeno, Severino Benedito e Belarmino Nogueira. Há informações de que o senhor Cândido Soares já residia, à margem da Lagoa, antes de 1840.\r\n\r\nEm 1870, foi construída a primeira capela do local, oferecida a São Sebastião, em terreno doado pelas irmãs “Catarina e Balbina”, da família Ferreira Rabelo Aranha. Posteriormente, no século seguinte, foi construída a igreja atual que hoje serve como Matriz, tendo por padroeiro, inicialmente, o Divino Espírito Santo e, atualmente, a padroeira é Nossa Senhora das Dores.\r\n\r\nEm 1877, o comércio já apresentava bom desenvolvimento e o proprietário da fazenda “ALAGOA NOVA”, Manoel Pereira da Silva, foi seu primeiro comerciante. Ele instalou uma “bulandeira”, engenho primitivo para descaroçar algodão, também utilizado na moagem de cana-de-açúcar para a fabricação de rapadura e aguardente.\r\n\r\nNa divisão administrativa do quinquênio 1939/43, aparece pela primeira vez, com a denominação de Vila de Manaíra.\r\n\r\nO topônimo foi escolhido em homenagem a uma índia de nome Manaíra, vocábulo indígena que significa \"Mel Cheiroso\", segundo o Historiador Coriolano de Medeiros, ou \"Abelha Cheirosa\", variação da toponímia Tupi. Conta a história que ela havia sido prometida por seu pai em casamento ao cacique Piancó, (nome de outro Município Paraibano), chefe da grande tribo dos Corema, mas que fugira com um índio da tribo dos Oitis (de Manaíra), a quem amava. Por conta disso foi perseguida e assassinada por seu pai e índios de sua própria nação indígena, no sítio “Salgada”, vizinho ao sítio \"Oiti\", ambos situados em terras do atual Município de Manaíra. Dessa tragédia romântica originou-se o nome da cidade.\r\n\r\nA emancipação política foi conseguida através da Lei Estadual nº 2.659, de 21 de dezembro de 1961, pela iniciativa do manairense Antônio Antas Diniz, enquanto Presidente da Câmara de Vereadores de Princesa Isabel (PB) e defendida na Assembleia Legislativa pelo Deputado Antônio Nominando Diniz. A instalação oficial ocorreu a 31 do mesmo mês e ano, desmembrado de Princesa Isabel e formado por dois Distritos: O da Sede e o de Pelo Sinal.', 'http://manaira.pb.gov.br/'),
(33, 'Prefeitura Municipal de Olho D\'água', '/public/assets/imagens/parceiros/OLHO.png', 'Olho d\'Água é um município brasileiro do estado da Paraíba, localizado na Região Geográfica Imediata de Patos. De acordo com o Censo 2010 do IBGE (Instituto Brasileiro de Geografia e Estatística), sua população é de 6.931 habitantes, com uma área territorial de 596 km².\r\n\r\nO município apresenta ainda um distrito, localizado a cerca de 30 km da sede, denominado Distrito do Socorro e conhecido popularmente como Barrocão. Sua festa mais tradicional é a Festa de São João Batista, santo padroeiro da cidade.\r\n\r\nSua economia baseia-se principalmente no setor de serviços, responsável por 70% do seu produto interno bruto, PIB, de cerca de 25 milhões de reais registrado no ano de 2008.', 'http://olhodagua.pb.gov.br/'),
(34, 'Prefeitura Municipal de São Vicente do Seridó', '/public/assets/imagens/parceiros/SERIDO.png', 'https://www.saovicentedoserido.pb.gov.br/', 'https://www.saovicentedoserido.pb.gov.br/'),
(35, 'Prefeitura Municipal de Joca Claudino', '/public/assets/imagens/parceiros/JOCA.png', 'https://www.jocaclaudino.pb.gov.br/', 'https://www.jocaclaudino.pb.gov.br/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `servico_id` int(11) NOT NULL,
  `servico_nome` varchar(255) NOT NULL,
  `servico_descricao` text,
  `servico_img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`servico_id`, `servico_nome`, `servico_descricao`, `servico_img`) VALUES
(3, 'ORGANIZAÇÃO ADMINISTRATIVA', '• Censo Funcional<br>\r\n• Digitalização do Arquivo Permanente', '/public/assets/imagens/servicos/orga.png'),
(4, 'RECURSOS HUMANOS – SETOR DE PESSOAL', 'Atualização Cadastral;\r\nIndividualização de FGTS; \r\nAcerto de Vínculos Empregatícios; \r\nIndividualização Previdenciária contemporânea e extemporânea; \r\nrecuperação de abono salarial; \r\nElaboração da Folha de Pagamento;\r\nDeclarações ao MTE', '/public/assets/imagens/servicos/temp.png'),
(5, 'APOIO ADMINISTRATIVO', 'Parcelamentos:  Fazendário e Previdenciário junto à RFB/PGFN; \r\nParcelamentos do IBAMA e INMETRO junto à AGU;\r\nAcompanhamento de Processos Fiscais do Município e seus Entes Vinculados;\r\nPedido de Ajustes de GPS, Restituições e Compensações;\r\nSoluções para emissão de Certidões.\r\nObrigações Acessórias para Caixa, MTE e RFB.', '/public/assets/imagens/servicos/adminis.png'),
(6, 'PREVIDENCIÁRIO', 'Acerto de Vínculos dos Trabalhadores;\r\nInclusão das Remunerações de exercícios anteriores;\r\nAcompanhamento dos Processos junto à Previdência', '/public/assets/imagens/servicos/aposentadoria-inss-previdencia-calculadora-660x372.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `password_hash`, `user_full_name`, `user_email`) VALUES
(1, 'administrador', '$2y$10$RG6GwcbJGlzfyoBk9807K.KENU1qpEal7sPKFrx/L8..j3iMFwI4q', 'Administrador', 'administrador@sthepson.com.br'),
(4, 'murilo_luis', '$2y$10$yiAxJILQuZNEzVIWFLyuJ.2.uq6XmsJL.ULzx7GVnjHEOJptI9Jry', 'Murilo Luis', 'murilo.eta@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`destaque_id`);

--
-- Índices de tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`membro_id`);

--
-- Índices de tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`parceiro_id`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`servico_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `destaque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `membro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `parceiro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `servico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
