-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `id_imgs` varchar(999) DEFAULT NULL,
  `descricao` varchar(9999) DEFAULT NULL,
  `subcategoria_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorias_ibfk_1` (`subcategoria_fk`),
  CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`subcategoria_fk`) REFERENCES `sub_categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidades`
--

DROP TABLE IF EXISTS `cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `DDD` tinyint(2) DEFAULT NULL,
  `UFs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UFs` (`UFs`),
  CONSTRAINT `cidades_ibfk_1` FOREIGN KEY (`UFs`) REFERENCES `ufs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidades`
--

LOCK TABLES `cidades` WRITE;
/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
INSERT INTO `cidades` VALUES (1,'Rio Branco',68,1),(2,'Maceió',82,2),(3,'Macapá',96,3),(4,'Manaus',92,4),(5,'Salvador',71,5),(6,'Fortaleza',85,6),(7,'Brasília',61,7),(8,'Vitória',27,8),(9,'Goiania',62,9),(10,'São Luís',98,10),(11,'Cuiabá',65,11),(12,'Campo Grande',67,12),(13,'Belo Horizonte',31,13),(14,'Belém',91,14),(15,'João Pessoa',83,15),(16,'Curitiba',41,16),(17,'Recife',81,17),(18,'Teresina',86,18),(19,'Rio de Janeiro',21,19),(20,'Natal',84,20),(21,'Porto Alegre',51,21),(22,'Porto Velho',69,22),(23,'Boa Vista',95,23),(24,'Florianópolis',48,24),(25,'São Paulo',11,25),(26,'Aracaju',79,26),(27,'Palmas',63,27);
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_fk` int(11) DEFAULT NULL,
  `produtos_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_fk` (`produtos_fk`),
  KEY `favoritos_ibfk_1` (`user_id_fk`),
  CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`produtos_fk`) REFERENCES `produto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoritos`
--

LOCK TABLES `favoritos` WRITE;
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico`
--

DROP TABLE IF EXISTS `historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_fk` int(11) DEFAULT NULL,
  `horario_compra` datetime DEFAULT NULL,
  `id_pagamento` int(11) DEFAULT NULL,
  `status_pagamento` varchar(50) DEFAULT NULL,
  `produtos_id_fk` int(11) DEFAULT NULL,
  `valor` decimal(6,2) DEFAULT NULL,
  `desconto` decimal(6,2) DEFAULT NULL,
  `cupom` varchar(50) DEFAULT NULL,
  `valor_final` decimal(6,2) DEFAULT NULL,
  `codigo_acompanhamento` varchar(50) DEFAULT NULL,
  `frete` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id_fk`),
  KEY `produtos_id` (`produtos_id_fk`),
  CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `historico_ibfk_2` FOREIGN KEY (`produtos_id_fk`) REFERENCES `produto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico`
--

LOCK TABLES `historico` WRITE;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(999) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meios`
--

DROP TABLE IF EXISTS `meios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `taxa_transacao` decimal(6,2) DEFAULT NULL,
  `taxa_parcela` int(3) DEFAULT NULL,
  `taxa_outras` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meios`
--

LOCK TABLES `meios` WRITE;
/*!40000 ALTER TABLE `meios` DISABLE KEYS */;
/*!40000 ALTER TABLE `meios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id_fk` int(11) DEFAULT NULL,
  `parcelas` tinyint(2) NOT NULL,
  `horario_transacao` datetime NOT NULL,
  `status_fk` int(11) DEFAULT NULL,
  `id_transacao` varchar(20) NOT NULL,
  `lucro_liquido` decimal(6,2) NOT NULL,
  `forma` varchar(50) NOT NULL,
  `id_meio_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ligacao_pagamentos_status` (`status_fk`),
  KEY `ligacao_pagamentos_meios` (`id_meio_fk`),
  CONSTRAINT `ligacao_pagamentos_meios` FOREIGN KEY (`id_meio_fk`) REFERENCES `meios` (`id`),
  CONSTRAINT `ligacao_pagamentos_status` FOREIGN KEY (`status_fk`) REFERENCES `status_tabela` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamentos`
--

LOCK TABLES `pagamentos` WRITE;
/*!40000 ALTER TABLE `pagamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cor` varchar(50) DEFAULT NULL,
  `tamanho` varchar(50) DEFAULT NULL,
  `preco` decimal(6,2) DEFAULT NULL,
  `estoque` tinyint(3) DEFAULT NULL,
  `id_imgs` varchar(999) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` varchar(9999) DEFAULT NULL,
  `categoria_fk` int(11) DEFAULT NULL,
  `subcategoria_fk` int(11) DEFAULT NULL,
  `marcas_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_fk` (`categoria_fk`),
  KEY `subcategoria_fk` (`subcategoria_fk`),
  KEY `marcas_fk` (`marcas_fk`),
  CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`categoria_fk`) REFERENCES `categorias` (`id`),
  CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`subcategoria_fk`) REFERENCES `sub_categoria` (`id`),
  CONSTRAINT `produto_ibfk_3` FOREIGN KEY (`marcas_fk`) REFERENCES `marcas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_tabela`
--

DROP TABLE IF EXISTS `status_tabela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_tabela` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_tabela`
--

LOCK TABLES `status_tabela` WRITE;
/*!40000 ALTER TABLE `status_tabela` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_tabela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categoria`
--

DROP TABLE IF EXISTS `sub_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(999) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categoria`
--

LOCK TABLES `sub_categoria` WRITE;
/*!40000 ALTER TABLE `sub_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ufs`
--

DROP TABLE IF EXISTS `ufs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ufs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sigla` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ufs`
--

LOCK TABLES `ufs` WRITE;
/*!40000 ALTER TABLE `ufs` DISABLE KEYS */;
INSERT INTO `ufs` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amapá','AP'),(4,'Amazonas','AM'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Espirito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Mato Grosso','MT'),(12,'Mato Grosso do Sul','MS'),(13,'Minas Gerais','MG'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Paraná','PR'),(17,'Pernambuco','PE'),(18,'Piauí','PI'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rio Grande do Sul','RS'),(22,'Rondônia','RO'),(23,'Roraima','RR'),(24,'Santa Catarina','SC'),(25,'São Paulo','SP'),(26,'Sergipe','SE'),(27,'Tocantins','TO');
/*!40000 ALTER TABLE `ufs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` tinyint(10) unsigned DEFAULT NULL,
  `celular` tinyint(11) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_recup` varchar(50) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `cpf` tinyint(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` tinyint(5) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `CEP` tinyint(10) NOT NULL,
  `cidades_fk` int(11) DEFAULT NULL,
  `uf_fk` int(11) DEFAULT NULL,
  `favoritos_fk` int(11) DEFAULT NULL,
  `historico_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_recup` (`email_recup`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `cidades_fk` (`cidades_fk`),
  KEY `uf_fk` (`uf_fk`),
  KEY `favoritos_fk` (`favoritos_fk`),
  KEY `historico_fk` (`historico_fk`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cidades_fk`) REFERENCES `cidades` (`id`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`uf_fk`) REFERENCES `ufs` (`id`),
  CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`favoritos_fk`) REFERENCES `favoritos` (`id`),
  CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`historico_fk`) REFERENCES `historico` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-18 15:51:33
