-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: cernf
-- ------------------------------------------------------
-- Server version	5.7.34-log

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
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `codactividad` int(11) NOT NULL AUTO_INCREMENT,
  `actfecha` date NOT NULL,
  `actnumerobimestre` int(11) NOT NULL,
  `actcodasignatura` int(11) DEFAULT NULL,
  `actcodtipoactividades` int(11) DEFAULT NULL,
  PRIMARY KEY (`codactividad`),
  KEY `fk_actcodasignatura` (`actcodasignatura`),
  KEY `fk_actcodtipoactividades` (`actcodtipoactividades`),
  CONSTRAINT `fk_actcodasignatura` FOREIGN KEY (`actcodasignatura`) REFERENCES `asignaturas` (`codasignatura`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_actcodtipoactividades` FOREIGN KEY (`actcodtipoactividades`) REFERENCES `tipoactividades` (`codtipoactividad`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,'2021-01-07',1,1,1),(2,'2021-01-10',1,2,2),(3,'2021-03-08',2,3,3),(4,'2021-10-12',4,4,4),(5,'2021-08-05',3,5,5),(6,'2021-11-01',4,6,2),(7,'2021-11-01',4,6,2),(8,'2021-07-06',3,7,3),(9,'2021-04-09',2,8,4),(10,'2021-02-15',1,9,5);
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acudientes`
--

DROP TABLE IF EXISTS `acudientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acudientes` (
  `codacudiente` int(11) NOT NULL AUTO_INCREMENT,
  `acuidpersona` int(11) DEFAULT NULL,
  PRIMARY KEY (`codacudiente`),
  KEY `fk_acuidpersona` (`acuidpersona`),
  CONSTRAINT `fk_acuidpersona` FOREIGN KEY (`acuidpersona`) REFERENCES `personas` (`idpersona`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acudientes`
--

LOCK TABLES `acudientes` WRITE;
/*!40000 ALTER TABLE `acudientes` DISABLE KEYS */;
INSERT INTO `acudientes` VALUES (10,13472312),(8,16604771),(9,17104772),(11,19394956),(12,19587403),(7,20775658),(5,21040765),(2,21049830),(6,25094567),(4,40383324),(1,51783980),(3,52890123),(14,63489234),(15,64528912),(13,982345103);
/*!40000 ALTER TABLE `acudientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acudientexestudiante`
--

DROP TABLE IF EXISTS `acudientexestudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acudientexestudiante` (
  `codacuest` int(11) NOT NULL,
  `axecodacudiente` int(11) DEFAULT NULL,
  `axecodestudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`codacuest`),
  KEY `fk_axecodacudiente` (`axecodacudiente`),
  KEY `fk_axecodestudiante` (`axecodestudiante`),
  CONSTRAINT `fk_axecodacudiente` FOREIGN KEY (`axecodacudiente`) REFERENCES `acudientes` (`codacudiente`)ON DELETE SET NULL,
  CONSTRAINT `fk_axecodestudiante` FOREIGN KEY (`axecodestudiante`) REFERENCES `estudiantes` (`codestudiante`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acudientexestudiante`
--

LOCK TABLES `acudientexestudiante` WRITE;
/*!40000 ALTER TABLE `acudientexestudiante` DISABLE KEYS */;
INSERT INTO `acudientexestudiante` VALUES (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(7,7,7),(8,8,8),(9,9,9),(10,10,10),(11,11,11),(12,12,12),(13,13,13),(14,14,14),(15,15,15);
/*!40000 ALTER TABLE `acudientexestudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acuerdos`
--

DROP TABLE IF EXISTS `acuerdos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acuerdos` (
  `codacuerdos` int(11) NOT NULL,
  `acutipo` varchar(45) NOT NULL,
  `acuobservacion` tinytext NOT NULL,
  `acucodobservador` int(11) DEFAULT NULL,
  PRIMARY KEY (`codacuerdos`),
  KEY `fk_acucodobservador` (`acucodobservador`),
  CONSTRAINT `fk_acucodobservador` FOREIGN KEY (`acucodobservador`) REFERENCES `observador` (`codobservador`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acuerdos`
--

LOCK TABLES `acuerdos` WRITE;
/*!40000 ALTER TABLE `acuerdos` DISABLE KEYS */;
INSERT INTO `acuerdos` VALUES (1,'Disciplinario','Bueno',3),(2,'Academico','Excelente',4),(3,'Disciplinario','Regular',5);
/*!40000 ALTER TABLE `acuerdos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignaturas` (
  `codasignatura` int(11) NOT NULL AUTO_INCREMENT,
  `asinombre` varchar(45) NOT NULL,
  `asicodgrado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codasignatura`),
  KEY `fk_asicodgrado` (`asicodgrado`),
  CONSTRAINT `fk_asicodgrado` FOREIGN KEY (`asicodgrado`) REFERENCES `grados` (`codgrado`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaturas`
--

LOCK TABLES `asignaturas` WRITE;
/*!40000 ALTER TABLE `asignaturas` DISABLE KEYS */;
INSERT INTO `asignaturas` VALUES (1,'Matematicas',1),(2,'Español',2),(3,'Ciencias',4),(4,'Sociales',2),(5,'Religion',3),(6,'Artisitica',4),(7,'Informatica',5),(8,'Etica y Valores',1),(9,'Educacion Fisica',2);
/*!40000 ALTER TABLE `asignaturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calificaciones` (
  `codcalificacion` int(11) NOT NULL,
  `calfecha` date NOT NULL,
  `calvalor` float NOT NULL,
  `calcoddocente` int(11) DEFAULT NULL,
  `calcodactividad` int(11) DEFAULT NULL,
  `calcodestudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`codcalificacion`),
  KEY `fk_calcoddocente` (`calcoddocente`),
  KEY `fk_calcodactividad` (`calcodactividad`),
  KEY `fk_calcodestudiante` (`calcodestudiante`),
  CONSTRAINT `fk_calcodactividad` FOREIGN KEY (`calcodactividad`) REFERENCES `actividades` (`codactividad`) ON DELETE SET NULL,
  CONSTRAINT `fk_calcoddocente` FOREIGN KEY (`calcoddocente`) REFERENCES `docentes` (`coddocente`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_calcodestudiante` FOREIGN KEY (`calcodestudiante`) REFERENCES `estudiantes` (`codestudiante`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificaciones`
--

LOCK TABLES `calificaciones` WRITE;
/*!40000 ALTER TABLE `calificaciones` DISABLE KEYS */;
INSERT INTO `calificaciones` VALUES (1,'2021-01-07',4,1,1,15),(2,'2021-01-10',4.8,2,2,14),(3,'2021-03-08',3.5,3,3,13),(4,'2021-10-12',2.9,4,4,12),(5,'2021-08-05',3.1,5,5,11),(6,'2021-11-01',1,1,6,10),(7,'2021-07-06',2.6,2,7,9),(8,'2021-04-09',5,3,8,8),(9,'2021-02-15',4.2,4,9,1);
/*!40000 ALTER TABLE `calificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centroseducativos`
--

DROP TABLE IF EXISTS `centroseducativos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centroseducativos` (
  `codcentroeducativo` int(11) NOT NULL,
  `cennit` int(11) DEFAULT NULL,
  `cennombre` varchar(255) NOT NULL,
  `cendireccion` varchar(255) NOT NULL,
  `centelefono` varchar(20) NOT NULL,
  `cencorreo` varchar(255) NOT NULL,
  PRIMARY KEY (`codcentroeducativo`),
  UNIQUE KEY `cennit` (`cennit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centroseducativos`
--

LOCK TABLES `centroseducativos` WRITE;
/*!40000 ALTER TABLE `centroseducativos` DISABLE KEYS */;
INSERT INTO `centroseducativos` VALUES (25,892000351,'CERNF','Vereda EL Encanto Guamal','3204873250','ines.g.h@hotmail.com');
/*!40000 ALTER TABLE `centroseducativos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlasistencias`
--

DROP TABLE IF EXISTS `controlasistencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controlasistencias` (
  `codcontrolasistencia` int(11) NOT NULL,
  `cafechahora` datetime NOT NULL,
  `caestado` char(10) NOT NULL,
  `canumerobimestre` int(11) NOT NULL,
  `caobservacion` varchar(255) NOT NULL,
  `cacodestudiante` int(11) DEFAULT NULL,
  `cacoddocente` int(11) DEFAULT NULL,
  PRIMARY KEY (`codcontrolasistencia`),
  KEY `fk_cacodestudiante` (`cacodestudiante`),
  KEY `fk_cacoddocente` (`cacoddocente`),
  CONSTRAINT `fk_cacoddocente` FOREIGN KEY (`cacoddocente`) REFERENCES `docentes` (`coddocente`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_cacodestudiante` FOREIGN KEY (`cacodestudiante`) REFERENCES `estudiantes` (`codestudiante`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlasistencias`
--

LOCK TABLES `controlasistencias` WRITE;
/*!40000 ALTER TABLE `controlasistencias` DISABLE KEYS */;
INSERT INTO `controlasistencias` VALUES (1,'2021-02-15 10:00:00','Asistio',1,'Excelente',1,1),(2,'2021-02-15 10:00:00','No Asistio',1,'Malo',2,2),(3,'2021-02-15 10:00:00','Excusa',2,'Regula',3,3),(4,'2021-02-15 10:00:00','Permiso',4,'Bueno',4,1),(5,'2021-02-15 10:00:00','Asistio',3,'Excelente',5,2),(6,'2021-02-15 10:00:00','Asistio',4,'Excelente',6,3),(7,'2021-02-15 10:00:00','Asistio',3,'Excelente',7,4),(8,'2021-02-15 10:00:00','Asistio',2,'Excelente',8,5),(9,'2021-02-15 10:00:00','Asistio',1,'Excelente',9,4),(10,'2021-02-15 10:00:00','Asistio',1,'Excelente',10,4),(11,'2021-02-15 10:00:00','Asistio',1,'Excelente',11,5),(12,'2021-02-15 10:00:00','Asistio',2,'Excelente',12,5),(13,'2021-02-15 10:00:00','Asistio',4,'Excelente',13,1),(14,'2021-02-15 10:00:00','Asistio',3,'Excelente',14,1),(15,'2021-02-15 10:00:00','No asistio',4,'Malo',15,1);
/*!40000 ALTER TABLE `controlasistencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `codcurso` int(11) NOT NULL,
  `curnombre` varchar(45) NOT NULL,
  `curcodsede` int(11) DEFAULT NULL,
  `curcodsalon` int(11) DEFAULT NULL,
  `curcodgrado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codcurso`),
  KEY `fk_curcodsede` (`curcodsede`),
  KEY `fk_curcodsalon` (`curcodsalon`),
  KEY `fk_curcodgrado` (`curcodgrado`),
  CONSTRAINT `fk_curcodgrado` FOREIGN KEY (`curcodgrado`) REFERENCES `grados` (`codgrado`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_curcodsalon` FOREIGN KEY (`curcodsalon`) REFERENCES `salones` (`codsalon`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_curcodsede` FOREIGN KEY (`curcodsede`) REFERENCES `sedes` (`codsede`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Trancision Encanto',2501,1,0),(2,'Primero Pio',2502,2,1),(3,'Segundo Dan',2503,3,2),(4,'Tercero San',2504,4,3),(5,'Cuarto Mon',2505,5,4),(6,'Quinto Isl',2506,6,5),(7,'Tercero Nic',2507,7,3),(8,'Qunto Paz',2508,8,5),(9,'Transicion Ret',2509,9,0),(10,'Primero Oro',2510,10,1),(11,'Segundo Ana',2511,11,2);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directora`
--

DROP TABLE IF EXISTS `directora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directora` (
  `coddirectora` int(11) NOT NULL AUTO_INCREMENT,
  `diridpersona` int(11) DEFAULT NULL,
  `dircodcentroeducativo` int(11) DEFAULT NULL,
  `dircodsueldo` int(11) DEFAULT NULL,
  PRIMARY KEY (`coddirectora`),
  KEY `fk_diridpersona` (`diridpersona`),
  KEY `fk_dircodcentroeducativo` (`dircodcentroeducativo`),
  KEY `fk_dircodsueldo` (`dircodsueldo`),
  CONSTRAINT `fk_dircodcentroeducativo` FOREIGN KEY (`dircodcentroeducativo`) REFERENCES `centroseducativos` (`codcentroeducativo`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_dircodsueldo` FOREIGN KEY (`dircodsueldo`) REFERENCES `sueldos` (`codsueldo`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_diridpersona` FOREIGN KEY (`diridpersona`) REFERENCES `personas` (`idpersona`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directora`
--

LOCK TABLES `directora` WRITE;
/*!40000 ALTER TABLE `directora` DISABLE KEYS */;
INSERT INTO `directora` VALUES (1,20383324,25,13);
/*!40000 ALTER TABLE `directora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docentes` (
  `coddocente` int(11) NOT NULL AUTO_INCREMENT,
  `docfechaingreso` date NOT NULL,
  `docvigencia` date NOT NULL,
  `doccodsueldo` int(11) DEFAULT NULL,
  `docidpersona` int(11) DEFAULT NULL,
  PRIMARY KEY (`coddocente`),
  KEY `fk_doccodsueldo` (`doccodsueldo`),
  KEY `fk_docidpersona` (`docidpersona`),
  CONSTRAINT `fk_doccodsueldo` FOREIGN KEY (`doccodsueldo`) REFERENCES `sueldos` (`codsueldo`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_docidpersona` FOREIGN KEY (`docidpersona`) REFERENCES `personas` (`idpersona`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` VALUES (1,'2020-01-01','2021-12-31',1,1009325675),(2,'2019-01-01','2020-01-01',14,51376675),(3,'2018-01-01','2019-01-02',10,40436789),(4,'2017-01-01','2018-01-03',9,30986005),(5,'2016-01-01','2021-12-31',7,30987004);
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentexsede`
--

DROP TABLE IF EXISTS `docentexsede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docentexsede` (
  `coddocentexsede` int(11) NOT NULL,
  `docsedvigencia` year(4) NOT NULL,
  `dxscoddocente` int(11) DEFAULT NULL,
  `dxscodsede` int(11) DEFAULT NULL,
  PRIMARY KEY (`coddocentexsede`),
  KEY `fk_dxscoddocente` (`dxscoddocente`),
  KEY `fk_dxscodsede` (`dxscodsede`),
  CONSTRAINT `fk_dxscoddocente` FOREIGN KEY (`dxscoddocente`) REFERENCES `docentes` (`coddocente`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_dxscodsede` FOREIGN KEY (`dxscodsede`) REFERENCES `sedes` (`codsede`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentexsede`
--

LOCK TABLES `docentexsede` WRITE;
/*!40000 ALTER TABLE `docentexsede` DISABLE KEYS */;
INSERT INTO `docentexsede` VALUES (1,2020,1,2501),(2,2022,2,2502),(3,2021,3,2503),(4,2021,4,2504),(5,2025,5,2505);
/*!40000 ALTER TABLE `docentexsede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `codestudiante` int(11) NOT NULL AUTO_INCREMENT,
  `estidpersona` int(11) DEFAULT NULL,
  PRIMARY KEY (`codestudiante`),
  KEY `fk_estidpersona` (`estidpersona`),
  CONSTRAINT `fk_estidpersona` FOREIGN KEY (`estidpersona`) REFERENCES `personas` (`idpersona`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,1006236738),(3,1006645821),(2,1006765423),(4,1007765980),(5,1007876138),(6,1008456789),(7,1008675432),(8,1008936007),(9,1009467891),(10,1009576890),(11,1010098765),(12,1010122896),(13,1011009006),(14,1011129023),(15,1011635976);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grados`
--

DROP TABLE IF EXISTS `grados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grados` (
  `codgrado` int(11) NOT NULL,
  `granombre` varchar(20) NOT NULL,
  PRIMARY KEY (`codgrado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grados`
--

LOCK TABLES `grados` WRITE;
/*!40000 ALTER TABLE `grados` DISABLE KEYS */;
INSERT INTO `grados` VALUES (0,'Transicion'),(1,'Primero'),(2,'Segundo'),(3,'Tercero'),(4,'Cuarto'),(5,'Quinto');
/*!40000 ALTER TABLE `grados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matriculas` (
  `codmatricula` int(11) NOT NULL AUTO_INCREMENT,
  `matnumero` int(11) DEFAULT NULL,
  `matfecha` date NOT NULL,
  `matanovigencia` year(4) NOT NULL,
  `matcodestudiante` int(11) DEFAULT NULL,
  `matcodsede` int(11) DEFAULT NULL,
  `matcodgrado` int(11) DEFAULT NULL,
  `matcodcurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`codmatricula`),
  UNIQUE KEY `matnumero` (`matnumero`),
  KEY `fk_matcodestudiante` (`matcodestudiante`),
  KEY `fk_matcodsede` (`matcodsede`),
  KEY `fk_matcodgrado` (`matcodgrado`),
  KEY `fk_matcodcurso` (`matcodcurso`),
  CONSTRAINT `fk_matcodcurso` FOREIGN KEY (`matcodcurso`) REFERENCES `cursos` (`codcurso`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_matcodestudiante` FOREIGN KEY (`matcodestudiante`) REFERENCES `estudiantes` (`codestudiante`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_matcodgrado` FOREIGN KEY (`matcodgrado`) REFERENCES `grados` (`codgrado`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_matcodsede` FOREIGN KEY (`matcodsede`) REFERENCES `sedes` (`codsede`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` VALUES (1,2500001,'2020-12-02',2021,1,2501,0,1),(2,2500002,'2020-12-02',2021,2,2502,1,2),(3,2500003,'2020-12-03',2021,3,2503,2,3),(4,2500004,'2020-12-04',2021,4,2504,3,4),(5,2500005,'2020-12-04',2021,5,2505,4,5),(6,2500006,'2020-12-06',2021,6,2506,5,6),(7,2500007,'2020-12-06',2021,7,2507,3,7),(8,2500008,'2020-12-10',2021,8,2508,5,8),(9,2500009,'2020-12-10',2021,9,2509,0,9),(10,2500010,'2020-12-10',2021,10,2510,1,1),(11,2500011,'2020-12-11',2021,11,2511,2,10),(12,2500012,'2020-12-12',2021,12,2501,0,1),(13,2500013,'2020-12-13',2021,13,2502,1,2),(14,2500014,'2020-12-14',2021,14,2503,2,3),(15,2500015,'2020-12-15',2021,15,2504,3,4);
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observador`
--

DROP TABLE IF EXISTS `observador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observador` (
  `codobservador` int(11) NOT NULL,
  `obsfecha` date NOT NULL,
  `obsnumerobimestre` int(11) NOT NULL,
  `obsobservacion` varchar(500) NOT NULL,
  `obscodtipofalta` int(11) DEFAULT NULL,
  `obscodestudiante` int(11) DEFAULT NULL,
  `obscoddocente` int(11) DEFAULT NULL,
  PRIMARY KEY (`codobservador`),
  KEY `fk_obscodtipofalta` (`obscodtipofalta`),
  KEY `fk_obscodestudiantee` (`obscodestudiante`),
  KEY `fk_obscoddocente` (`obscoddocente`),
  CONSTRAINT `fk_obscoddocente` FOREIGN KEY (`obscoddocente`) REFERENCES `docentes` (`coddocente`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_obscodestudiantee` FOREIGN KEY (`obscodestudiante`) REFERENCES `estudiantes` (`codestudiante`)
  ON DELETE SET NULL,
  CONSTRAINT `fk_obscodtipofalta` FOREIGN KEY (`obscodtipofalta`) REFERENCES `tipofaltas` (`codtipofalta`)
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observador`
--

LOCK TABLES `observador` WRITE;
/*!40000 ALTER TABLE `observador` DISABLE KEYS */;
INSERT INTO `observador` VALUES (1,'2021-01-20',1,'Excelente',1,1,3),(2,'2021-04-20',2,'Bueno',1,2,3),(3,'2021-10-10',4,'Normal',2,12,4),(4,'2021-09-09',4,'Regular',2,4,1),(5,'2021-07-07',3,'Malo',2,9,2);
/*!40000 ALTER TABLE `observador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `idpersona` int(11) NOT NULL,
  `pernombre` varchar(45) NOT NULL,
  `perapellido` varchar(45) NOT NULL,
  `perrol` varchar(20) NOT NULL,
  `pergenero` varchar(10) NOT NULL,
  `perfechanacimiento` date NOT NULL,
  `perdireccion` varchar(255) NOT NULL,
  `pertelefono` varchar(20) NOT NULL,
  `percorreo` varchar(255) NOT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (13472312,'maria','munevar','acudiente','femenino','1960-07-11','vereda la isla guamal meta','3103260751','maria01@gmail.com'),(16604771,'luisa','feliciano','acudiente','femenino','1948-01-08',' municipio de guamal barrio estero','3229473798','dfigueroa2@gmail.com'),(17104772,'juan','aranguren','acudiente','masculino','1959-04-10','municipio de guamal fincarosablanca','3151473455','juan02@gmail.com'),(19394956,'juana','bernal','acudiente','femenino','1970-07-04','finca las palmas guamal','3214658765','juana07@gmail.com'),(19587403,'marcos','ordonez','acudiente','masculino','1961-10-04','vereda el encanto','3178550909','marcos02@gmail.com'),(20383324,'ines','galindo','directora','femenino','1965-07-02','vereda el encanto guamal meta','3204873250','ines.g.h@hotmail.com'),(20775658,'pedro','galindo','acudiente','masculino','1926-10-08',' vereda la isla guamal meta','3238960754','avinate07@gmail.com'),(21040765,'sandro','rivas','acudiente','masculino','1944-04-06',' finca las corocoras guamal meta','3216754980','jordonez05@gmail.com'),(21049830,'carmen','duarte','acudiente','femenino','1970-04-07',' municipio de guamal vereda el danubio','3178934567','dfigueroa2@gmail.com'),(25094567,'arturo','zuluaga','acudiente','masculino','1935-07-08',' municipio de gramal finca la trocha 7','3213465987','rvaldez09@gmail.com'),(30986005,'herminsson','arias','docente','masculino','1958-04-04','vereda santa ana guamal meta','3113256789','harias245@gmail.com'),(30987004,'brandon','camacho','docente','masculino','1955-06-27','cubarral meta','3214567098','bcamacho765@gmail.com'),(40383324,'samuel','laspriella','acudiente','masculino','1953-01-04',' vereda la isla guamal meta','3174678239','caranguren09@gmail.com'),(40436789,'hilda','buendia','docente','femenino','1963-03-27','edificio centauros villavicencio','3153789654','hbuendia02@hotmail.com'),(51376675,'felisa','mayorga','docente','femenino','1962-05-17','municipio de acacias barrio catumare','3103568940','fmayorga25@gmail.com'),(51783980,'miguel','vinate','acuudiente','masculino','1977-04-03',' municipio de guamal barrio estero','3104589009','avinate07@gmail.com'),(52890123,'luis','figueroa','acudiente','masculino','1961-10-04',' municipio de guamal fincarosablanca','3114567803','jgalindo04@gmail.com'),(63489234,'alfredo','herrera','acudiente','masculino','1944-04-06','trocha 7 acacias','3115769087','alfredo01@gmail.com'),(64528912,'thomas','valdez','acudiente','masculino','1935-07-08','vereda la isla guamal meta','3219845678','thomas09@gmail.com'),(982345103,'teresa','sepulveda','acudiente','femenino','1953-01-04','cruce tractomulas castilla','3103138709','teresa98@gmail.com'),(1006236738,'argemiro','vinate','estudiante','masculino','2014-02-28','municipio de guamal barrio estero','3104589009','avinate07@gmail.com'),(1006645821,'diana','figueroa','estudiante','femenino','2014-08-25','municipio de guamal vereda el danubio','3178934567','dfigueroa2@gmail.com'),(1006765423,'casimiro','duarte','estudiante','masculino','2014-10-13','municipio de guamal vereda pio xi','3214567990','cduarte43@gmail.com'),(1007765980,'rocio','laspriella','estudiante','femenino','2013-09-01','municipio de guamal cruce tres esquinas','3112345879','rlaspriella23@gmail.com'),(1007876138,'carolina','rivas','estudiante','femenino','2013-10-04','municipio de guamal vereda santa ana','3245670987','crivas07@gmail.com'),(1008456789,'miguel','zuluaga','estudiante','masculino','2012-12-06','municipio de acacias barrio la cumbre','3103456784','mzuluaga89@gmail.com'),(1008675432,'julian ','galindo','estudiante','masculino','2012-08-28','municipio de guamal hacienda rosablanca','3114567803','jgalindo04@gmail.com'),(1008936007,'jose ','feliciano','estudiante','masculino','2012-10-17','municipio de acacias vereda tres cruces','3103254897','jfeliciano29@hotmail.com'),(1009325675,'andrea','soto','docente','femenino','1960-05-31','municipio de guamal barrio la floresta','3159873456','asoto325@gmail.com'),(1009467891,'carlos','aranguren','estudiante','masculino','2013-03-12','vereda la isla guamal meta','3174678239','caranguren09@gmail.com'),(1009576890,'adelina','munevar','estudiante','femenino','2013-08-07','vereda montecristo guamal meta','3119803765','amunevar45@gmail.com'),(1010098765,'clara','bernal','estudiante','femenino','2014-05-01',' vereda montecristo guamal meta','3109876123','cbernal789@gmail.com'),(1010122896,'andres','ordonez','estudiante','masculino','2014-07-01',' finca las corocoras guamal meta','3216754980','jordonez05@gmail.com'),(1011009006,'mario','sepulveda','estudiante','masculino','2015-07-26',' guamal meta barrio el progreso','31123456098','msepulveda034@gmail.com'),(1011129023,'elsa','herrera','estudiante','femenino','2015-12-05',' guamal meta barrio el centro','31436789090','eherrera23@hotmail.com'),(1011635976,'ramon','valdez','estudiante','masculino','2016-06-02',' municipio de gramal finca la trocha 7','32134659876','rvaldez09@gmail.com'),(1024335648,'mauricio','quevedo','docente','masculino','1963-12-13','municipio de guamal barrio popular','3113253655','mquevedo08@gmail.com');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salones`
--

DROP TABLE IF EXISTS `salones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salones` (
  `codsalon` int(11) NOT NULL AUTO_INCREMENT,
  `salnombre` varchar(45) NOT NULL,
  `salcodsede` int(11) DEFAULT NULL,
  PRIMARY KEY (`codsalon`),
  KEY `fk_salcodsede` (`salcodsede`),
  CONSTRAINT `fk_salcodsede` FOREIGN KEY (`salcodsede`) REFERENCES `sedes` (`codsede`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salones`
--

LOCK TABLES `salones` WRITE;
/*!40000 ALTER TABLE `salones` DISABLE KEYS */;
INSERT INTO `salones` VALUES (1,'ARTES Y MUSICA',2501),(2,'MATEMATICAS',2502),(3,'IDIOMAS',2503),(4,'INFORMATICA',2504),(5,'AUDIOVISUALES',2505),(6,'ESPAÑOL',2506),(7,'MATEMATICAS',2507),(8,'ETICA Y VALORES',2508),(9,'RELIGION',2509),(10,'ARTES Y MUSICA',2510),(11,'IDIOMAS',2511);
/*!40000 ALTER TABLE `salones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sedes`
--

DROP TABLE IF EXISTS `sedes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sedes` (
  `codsede` int(11) NOT NULL AUTO_INCREMENT,
  `sednombre` varchar(255) NOT NULL,
  `seddireccion` varchar(255) NOT NULL,
  `sedtelefono` varchar(20) NOT NULL,
  `sedcorreo` varchar(255) NOT NULL,
  `sedcodcentroeducativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`codsede`),
  KEY `fk_sedcodcentroeducativo` (`sedcodcentroeducativo`),
  CONSTRAINT `fk_sedcodcentroeducativo` FOREIGN KEY (`sedcodcentroeducativo`) REFERENCES `centroseducativos` (`codcentroeducativo`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2512 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sedes`
--

LOCK TABLES `sedes` WRITE;
/*!40000 ALTER TABLE `sedes` DISABLE KEYS */;
INSERT INTO `sedes` VALUES (2501,' Escuela El Encanto ',' Vereda El Encanto ','3113253655','mquevedo08@gmail.com',25),(2502,' Escuela Pio XII ',' Vereda Pio XII ','3159873456',' asoto325@gmail.com ',25),(2503,' Escuela El Danubio ',' Vereda El Danubio ','311325678',' fmayorga25@gmail.com ',25),(2504,' Escuela Santa Barbara ',' Vereda Santa Barbara ','3153789654',' hbuendia02@hotmail.com',25),(2505,' Escuela Montecristo ',' Vereda Montecristo ','3113256789',' harias245@gmail.com com',25),(2506,' Escuela La Isla ',' Vereda La Isla ','3214567098',' bcamacho765@gmail.com',25),(2507,' Escuela Nicolas de Federman ',' Vereda Nicolas de Federman ','3140098765','amedina24@gmail.com',25),(2508,' Escuela La Paz ',' Vereda La Paz','3218760983',' fasprilla178@gmail.com',25),(2509,' Escuela El Retiro ',' Vereda El Retiro','3114567980',' lfernandez65@gmail.com',25),(2510,' Escuela Orotoy ',' Vereda Orotoy','3117650083',' lcaicedo87@hotmail.com',25),(2511,' Escuela Santa Ana ',' Vereda Santa Ana','3130987451',' zbuitrago87@gmail.com',25);
/*!40000 ALTER TABLE `sedes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sueldos`
--

DROP TABLE IF EXISTS `sueldos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sueldos` (
  `codsueldo` int(11) NOT NULL AUTO_INCREMENT,
  `suecategoria` int(11) NOT NULL,
  `suevalor` int(11) NOT NULL,
  PRIMARY KEY (`codsueldo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sueldos`
--

LOCK TABLES `sueldos` WRITE;
/*!40000 ALTER TABLE `sueldos` DISABLE KEYS */;
INSERT INTO `sueldos` VALUES (1,1,1500000),(2,2,1600000),(3,3,1700000),(4,4,1800000),(5,5,1900000),(6,6,2000000),(7,7,2100000),(8,8,2400000),(9,9,2800000),(10,10,3000000),(11,11,3300000),(12,12,3500000),(13,13,3700000),(14,14,4000000);
/*!40000 ALTER TABLE `sueldos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoactividades`
--

DROP TABLE IF EXISTS `tipoactividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoactividades` (
  `codtipoactividad` int(11) NOT NULL AUTO_INCREMENT,
  `tipactnombre` varchar(45) NOT NULL,
  `tipactdescripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`codtipoactividad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoactividades`
--

LOCK TABLES `tipoactividades` WRITE;
/*!40000 ALTER TABLE `tipoactividades` DISABLE KEYS */;
INSERT INTO `tipoactividades` VALUES (1,'Exposicion','Grupal'),(2,'Ensayo','Individual'),(3,'Mesa Redonda','Grupal'),(4,'Evaluacion','Individual'),(5,'Cartelera','Grupal');
/*!40000 ALTER TABLE `tipoactividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipofaltas`
--

DROP TABLE IF EXISTS `tipofaltas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipofaltas` (
  `codtipofalta` int(11) NOT NULL AUTO_INCREMENT,
  `tipfalnombre` varchar(45) NOT NULL,
  `tipfaldescripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`codtipofalta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipofaltas`
--

LOCK TABLES `tipofaltas` WRITE;
/*!40000 ALTER TABLE `tipofaltas` DISABLE KEYS */;
INSERT INTO `tipofaltas` VALUES (1,'leves','llamado de atencion'),(2,'graves','suspencion');
/*!40000 ALTER TABLE `tipofaltas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `codusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usunombre` varchar(45) NOT NULL,
  `usucontrasena` varchar(8) NOT NULL,
  `usuidpersona` int(11) DEFAULT NULL,
  PRIMARY KEY (`codusuario`),
  KEY `fk_usuidpersona` (`usuidpersona`),
  CONSTRAINT `fk_usuidpersona` FOREIGN KEY (`usuidpersona`) REFERENCES `personas` (`idpersona`)
  ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Ines1001','10011001',20383324),(2,'Mauricio2001','20012001',1024335648),(3,'Andrea2002','20022002',1009325675),(4,'Felisa2003','20032003',51376675),(5,'Hilda2004','20042004',40436789),(6,'Herminsson2005','20052005',30986005),(7,'Brandon2006','20062006',30987004),(8,'Argemiro3001','30013001',1006236738),(9,'Casimiro3002','30023002',1006765423),(10,'Diana3003','30033003',1006645821),(11,'Rocio3004','30043004',1007765980),(12,'Carolina3005','30053005',1007876138),(13,'Miguel3006','30063006',1008456789),(14,'Julian3007','30073007',1008675432),(15,'Jose 3008','30083008',1008936007),(16,'Carlos3009','30093009',1009467891),(17,'Adelina3010','30103010',1009576890),(18,'Clara3011','30113011',1010098765),(19,'Andres3012','30123012',1010122896),(20,'Mario3013','30133013',1011009006),(21,'Elsa3014','30143014',1011129023),(22,'Ramon3015','30153015',1011635976),(23,'Miguel4001','40014001',51783980),(24,'Carmen4002','40024002',21049830),(25,'Luis4003','40034003',52890123),(26,'Samuel4004','40044004',40383324),(27,'Sandro4005','40054005',21040765),(28,'Arturo4006','40064006',25094567),(29,'Pedro4007','40074007',20775658),(30,'Luisa4008','40084008',16604771),(31,'Juan4009','40094009',17104772),(32,'Maria4010','40104010',13472312),(33,'Juana4011','40114011',19394956),(34,'Marcos4012','40124012',19587403),(35,'Teresa4013','40134013',982345103),(36,'Alfredo4014','40144014',63489234),(37,'Thomas4015','40154015',64528912);
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

-- Dump completed on 2021-07-09 19:40:57
