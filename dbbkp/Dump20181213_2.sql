-- MySQL dump 10.13  Distrib 5.7.23, for osx10.9 (x86_64)
--
-- Host: localhost    Database: connectify
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Table structure for table `competencias`
--

DROP TABLE IF EXISTS `competencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `competencia` varchar(50) NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  UNIQUE KEY `competencia_UNIQUE` (`competencia`),
  KEY `id_idx` (`id_usuario`),
  KEY `id_usuario_idx` (`id`),
  CONSTRAINT `FK id usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competencias`
--

LOCK TABLES `competencias` WRITE;
/*!40000 ALTER TABLE `competencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `competencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyecto_usuario`
--

DROP TABLE IF EXISTS `proyecto_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyecto_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned DEFAULT NULL,
  `id_proyecto` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aproyecto_idx` (`id_proyecto`),
  KEY `fk_ausuario_idx` (`id_usuario`),
  CONSTRAINT `fk_aproyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ausuario_II` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyecto_usuario`
--

LOCK TABLES `proyecto_usuario` WRITE;
/*!40000 ALTER TABLE `proyecto_usuario` DISABLE KEYS */;
INSERT INTO `proyecto_usuario` VALUES (5,12,8),(6,13,7),(7,14,6);
/*!40000 ALTER TABLE `proyecto_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  `cant_participantes` int(10) unsigned NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo_UNIQUE` (`nombre`),
  KEY `id_idx` (`id_usuario`),
  CONSTRAINT `fk_ausuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (6,'Argentina Trabaja','Proyecto que busca brindar oportunidades de trabajo a personas de bajos recursos',12,1,'2018-12-11 15:27:46','2018-12-11 15:27:46'),(7,'Salvemos a las Ballenas','Tiene como finalidad organizar grupos de ayuda en el mar del cairo',12,1,'2018-12-11 15:28:30','2018-12-11 15:28:30'),(8,'Cachorros en Adopción','Recuperar cachorros de la calle',13,2,'2018-12-11 15:29:10','2018-12-11 15:29:10'),(9,'Otro Proyecto de Prueba','Este es un proyecto de prueba',12,1,'2018-12-13 14:37:16','2018-12-13 14:37:16');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecnac` date NOT NULL,
  `pais` varchar(100) NOT NULL,
  `genero` char(1) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (5,'Pablo','Gomez','pgomez@gmail.com','$2y$10$R3VehftsRb3Z6/zatwwGjuYR8RVv4kljmFs8Y6oJQ3TS6GNEUHK5a','1970-12-01','Argentina','m','pgomez@gmail.com.jpg','2018-10-18 09:33:48','2018-10-18 09:33:48',NULL),(6,'Dario','Sus','dario@digital.com','$2y$10$AGesuEc9QNxSLYorpUAnNO6hF8.fU5VVV7wO4UJ4DKIj9mUs7uQ0q','1997-06-16','Argentina','m','dario@digital.com.jpg','2018-10-23 02:37:53','2018-10-23 02:37:53',NULL),(7,'pepe','pepe','pepe@pepe.com','$2y$10$NW3FsnBYzgFKX.hxdRXss.i96W.2CaAf2w3BUafsIOOXVBSqqBnz2','1973-09-02','Argentina','m','pepe@pepe.com.jpg','2018-10-23 02:52:59','2018-10-23 02:52:59',NULL),(8,'juan','juan','juan@juan.com','$2y$10$r8Ww/wguS27Vget5CGgYOOWC4U4SIz6upM4I5Je739wE5hECuBYAu','1973-12-01','Argentina','m','juan@juan.com.jpg','2018-10-23 02:58:04','2018-10-23 02:58:04',NULL),(9,'pepegrillo','pepegrillo','pepegrillo@gmail.com','$2y$10$tREhAY1/.luM8gxlnU.LX.aefNd3xlEZTfjp77pE1XgBa52G/a4sq','1970-12-01','Argentina','m','pepegrillo@gmail.com.jpg','2018-10-23 03:13:01','2018-10-23 03:13:01',NULL),(10,'juancho','juancho','juancho@gmail.com','$2y$10$/ord42QjJTYumz7FR1Wo5.nlI6NLaxt47V56upDIlON78ostQCmCm','1960-10-10','Argentina','m','juancho@gmail.com.png','2018-10-23 03:17:38','2018-10-23 03:17:38',NULL),(12,'Hernan','Racciatti','hracciatti@gmail.com','$2y$10$DlPr3D4tKqXinVo9ExLdeO0Ykw3Koa/sgY.eFNGHFswKyQEihLaSW','1973-12-01','Argentina','m','wJdO35EqserwxAgMlTkiKmFJ715PELvGoe3pn7Eu.jpeg','2018-12-04 14:59:32','2018-12-04 14:59:32','NwbhZ3TZa4GQ8IARRTB20RT9OIGzbeCI1T7ZlEAorcDsGPJEXYQuTX8JHkgk'),(13,'Consuelo','Luque','consuluque@hotmail.com','$2y$10$NbJM7zZMwnlP6YcTXZaqceZ1aZCMAy0zPzuEAi7dq1VeoBlq5JA62','1995-12-08','Argentina','f','Ntdv9jAlnb1v0A6ntNldkOZc78yJvNOrGoweXV5J.jpeg','2018-12-11 13:10:58','2018-12-11 13:10:58','CFKfBDPlnblUv2rdPk3tWthS55JUE0nhhwPTE6I13KiFWqEDwLmXJ41w999p'),(14,'Federico','Rojas','fede@gmail.com','$2y$10$O4ZNoqli5WjFjU4dLvflYOcoYpgtbc6nB0qzGLJbtVxdoVIew/vwS','2000-01-29','Argentina','m','PievYVvQIqMsISmWhkw7LrFNFbKbqcTseIYy8Hy8.jpeg','2018-12-13 15:13:36','2018-12-13 15:13:36',NULL);
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

-- Dump completed on 2018-12-13 12:17:51
