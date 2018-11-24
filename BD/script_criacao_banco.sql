-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: PETADOPT
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `Cadastro_Pet`
--

DROP TABLE IF EXISTS `Cadastro_Pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cadastro_Pet` (
  `idCadastro_Pet` int(11) NOT NULL AUTO_INCREMENT,
  `pet` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`idCadastro_Pet`),
  KEY `fk_Cadastro_Pet_Usr` (`usuario`),
  KEY `fk_Cadastro_Pet_Pet` (`pet`),
  CONSTRAINT `fk_Cadastro_Pet_Pet` FOREIGN KEY (`pet`) REFERENCES `Pet` (`idPet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cadastro_Pet_Usr` FOREIGN KEY (`usuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cadastro_Pet`
--

LOCK TABLES `Cadastro_Pet` WRITE;
/*!40000 ALTER TABLE `Cadastro_Pet` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cadastro_Pet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contato_Usuario`
--

DROP TABLE IF EXISTS `Contato_Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contato_Usuario` (
  `idContato_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `tipo_telefone` varchar(20) NOT NULL,
  `dono_telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`idContato_Usuario`),
  KEY `fk_Contato_Usuario` (`usuario`),
  CONSTRAINT `fk_Contato_Usuario` FOREIGN KEY (`usuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contato_Usuario`
--

LOCK TABLES `Contato_Usuario` WRITE;
/*!40000 ALTER TABLE `Contato_Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Contato_Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Endereco_Usuario`
--

DROP TABLE IF EXISTS `Endereco_Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Endereco_Usuario` (
  `idEndereco_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `UF` char(2) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `logradouro` varchar(15) NOT NULL,
  `nome_logradouro` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idEndereco_Usuario`),
  KEY `fk_Endereco_Usuario` (`usuario`),
  CONSTRAINT `fk_Endereco_Usuario` FOREIGN KEY (`usuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Endereco_Usuario`
--

LOCK TABLES `Endereco_Usuario` WRITE;
/*!40000 ALTER TABLE `Endereco_Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Endereco_Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pet`
--

DROP TABLE IF EXISTS `Pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pet` (
  `idPet` int(11) NOT NULL AUTO_INCREMENT,
  `dono` int(11) NOT NULL,
  `nome_provisorio` varchar(30) NOT NULL,
  `especie` varchar(12) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `porte` char(1) NOT NULL,
  PRIMARY KEY (`idPet`),
  KEY `fk_Pet_Dono` (`dono`),
  CONSTRAINT `fk_Pet_Dono` FOREIGN KEY (`dono`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pet`
--

LOCK TABLES `Pet` WRITE;
/*!40000 ALTER TABLE `Pet` DISABLE KEYS */;
/*!40000 ALTER TABLE `Pet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(75) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-18 15:57:33
