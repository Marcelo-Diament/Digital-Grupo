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
  `telefone` int(10) unsigned NOT NULL,
  `celular` int(11) unsigned DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `email_recup` varchar(50) DEFAULT NULL,
  `senha` varchar(8) NOT NULL,
  `cpf` int(12) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` tinyint(5) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `CEP` int(11) NOT NULL,
  `cidades_fk` int(11) DEFAULT NULL,
  `uf_fk` int(11) DEFAULT NULL,
  `favoritos_fk` int(11) DEFAULT NULL,
  `historico_fk` int(11) DEFAULT NULL,
  `genero` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email_recup` (`email_recup`),
  KEY `cidades_fk` (`cidades_fk`),
  KEY `uf_fk` (`uf_fk`),
  KEY `favoritos_fk` (`favoritos_fk`),
  KEY `historico_fk` (`historico_fk`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cidades_fk`) REFERENCES `cidades` (`id`),
  CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`favoritos_fk`) REFERENCES `favoritos` (`id`),
  CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`historico_fk`) REFERENCES `historico` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (31,'Hector','Queiróz','0000-00-00',123,NULL,'hectorqrs@gmail.com',NULL,'213',123,NULL,123,NULL,'123',123,NULL,17,NULL,NULL,'Masculino'),(33,'Lucas','1234','2018-07-16',12334,NULL,'1221@email.com',NULL,'123',1234,NULL,54,NULL,'Vila',765,NULL,8,NULL,NULL,'Masculino');
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

-- Dump completed on 2018-07-18 22:25:03
