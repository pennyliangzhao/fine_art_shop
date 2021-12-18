-- MySQL dump 10.16  Distrib 10.1.41-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	10.1.41-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `coaches`
--

DROP TABLE IF EXISTS `coaches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coaches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coaches`
--

LOCK TABLES `coaches` WRITE;
/*!40000 ALTER TABLE `coaches` DISABLE KEYS */;
INSERT INTO `coaches` VALUES (1,'Kristy Keppich-Birrell');
INSERT INTO `coaches` VALUES (2,'Tanya Dearns');
INSERT INTO `coaches` VALUES (3,'Sue Hawkins');
INSERT INTO `coaches` VALUES (4,'Simone McKinnis');
INSERT INTO `coaches` VALUES (5,'Rob Wright');
INSERT INTO `coaches` VALUES (6,'Debbie Fuller');
INSERT INTO `coaches` VALUES (7,'Roselee Jencke');
INSERT INTO `coaches` VALUES (8,'Noeline Taurua');
INSERT INTO `coaches` VALUES (9,'Julie Fitzgerald');
INSERT INTO `coaches` VALUES (10,'Stacey Rosman');
/*!40000 ALTER TABLE `coaches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `home_id` int(11) DEFAULT NULL,
  `away_id` int(11) DEFAULT NULL,
  `home_score` int(11) DEFAULT NULL,
  `away_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (6,8,57,58);
INSERT INTO `games` VALUES (7,3,70,55);
INSERT INTO `games` VALUES (10,1,63,44);
INSERT INTO `games` VALUES (5,4,57,42);
INSERT INTO `games` VALUES (2,9,57,56);
INSERT INTO `games` VALUES (5,9,78,50);
INSERT INTO `games` VALUES (1,4,44,59);
INSERT INTO `games` VALUES (8,3,58,58);
INSERT INTO `games` VALUES (6,10,44,54);
INSERT INTO `games` VALUES (7,2,61,45);
INSERT INTO `games` VALUES (4,7,47,58);
INSERT INTO `games` VALUES (5,1,68,44);
INSERT INTO `games` VALUES (10,3,64,50);
INSERT INTO `games` VALUES (9,8,53,63);
INSERT INTO `games` VALUES (2,6,52,52);
INSERT INTO `games` VALUES (1,7,46,58);
INSERT INTO `games` VALUES (10,5,52,63);
INSERT INTO `games` VALUES (8,2,67,54);
INSERT INTO `games` VALUES (3,6,56,55);
INSERT INTO `games` VALUES (8,10,69,62);
INSERT INTO `games` VALUES (7,5,61,51);
INSERT INTO `games` VALUES (4,9,57,34);
INSERT INTO `games` VALUES (2,3,57,58);
INSERT INTO `games` VALUES (6,1,52,49);
INSERT INTO `games` VALUES (7,6,70,42);
INSERT INTO `games` VALUES (5,2,79,41);
INSERT INTO `games` VALUES (1,8,54,69);
INSERT INTO `games` VALUES (3,4,48,69);
INSERT INTO `games` VALUES (9,10,44,58);
INSERT INTO `games` VALUES (10,7,52,61);
INSERT INTO `games` VALUES (4,5,51,59);
INSERT INTO `games` VALUES (3,9,57,58);
INSERT INTO `games` VALUES (6,2,55,53);
INSERT INTO `games` VALUES (9,6,49,45);
INSERT INTO `games` VALUES (10,4,53,54);
INSERT INTO `games` VALUES (7,1,62,51);
INSERT INTO `games` VALUES (3,5,52,73);
INSERT INTO `games` VALUES (2,8,63,67);
INSERT INTO `games` VALUES (4,1,57,51);
INSERT INTO `games` VALUES (5,7,58,54);
INSERT INTO `games` VALUES (8,6,66,60);
INSERT INTO `games` VALUES (9,2,54,44);
INSERT INTO `games` VALUES (7,4,56,44);
INSERT INTO `games` VALUES (1,10,51,63);
INSERT INTO `games` VALUES (3,8,51,81);
INSERT INTO `games` VALUES (6,9,51,54);
INSERT INTO `games` VALUES (8,7,66,51);
INSERT INTO `games` VALUES (5,10,57,58);
INSERT INTO `games` VALUES (4,6,69,46);
INSERT INTO `games` VALUES (2,1,46,60);
INSERT INTO `games` VALUES (9,3,56,55);
INSERT INTO `games` VALUES (1,5,53,67);
INSERT INTO `games` VALUES (4,10,60,55);
INSERT INTO `games` VALUES (8,9,64,54);
INSERT INTO `games` VALUES (3,2,59,64);
INSERT INTO `games` VALUES (8,4,65,56);
INSERT INTO `games` VALUES (10,2,70,47);
INSERT INTO `games` VALUES (1,3,58,55);
INSERT INTO `games` VALUES (6,5,53,59);
INSERT INTO `games` VALUES (9,7,47,71);
INSERT INTO `games` VALUES (6,3,62,54);
INSERT INTO `games` VALUES (5,8,59,59);
INSERT INTO `games` VALUES (7,10,63,52);
INSERT INTO `games` VALUES (9,1,56,55);
INSERT INTO `games` VALUES (2,4,53,66);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `match_teams`
--

DROP TABLE IF EXISTS `match_teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `match_teams` (
  `match_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match_teams`
--

LOCK TABLES `match_teams` WRITE;
/*!40000 ALTER TABLE `match_teams` DISABLE KEYS */;
INSERT INTO `match_teams` VALUES (1,6,57);
INSERT INTO `match_teams` VALUES (1,8,58);
INSERT INTO `match_teams` VALUES (2,7,70);
INSERT INTO `match_teams` VALUES (2,3,55);
INSERT INTO `match_teams` VALUES (3,10,63);
INSERT INTO `match_teams` VALUES (3,1,44);
INSERT INTO `match_teams` VALUES (4,5,57);
INSERT INTO `match_teams` VALUES (4,4,42);
INSERT INTO `match_teams` VALUES (5,2,57);
INSERT INTO `match_teams` VALUES (5,9,56);
INSERT INTO `match_teams` VALUES (6,5,78);
INSERT INTO `match_teams` VALUES (6,9,50);
INSERT INTO `match_teams` VALUES (7,1,44);
INSERT INTO `match_teams` VALUES (7,4,59);
INSERT INTO `match_teams` VALUES (8,8,58);
INSERT INTO `match_teams` VALUES (8,3,58);
INSERT INTO `match_teams` VALUES (9,6,44);
INSERT INTO `match_teams` VALUES (9,10,54);
INSERT INTO `match_teams` VALUES (10,7,61);
INSERT INTO `match_teams` VALUES (10,2,45);
INSERT INTO `match_teams` VALUES (11,4,47);
INSERT INTO `match_teams` VALUES (11,7,58);
INSERT INTO `match_teams` VALUES (12,5,68);
INSERT INTO `match_teams` VALUES (12,1,44);
INSERT INTO `match_teams` VALUES (13,10,64);
INSERT INTO `match_teams` VALUES (13,3,50);
INSERT INTO `match_teams` VALUES (14,9,53);
INSERT INTO `match_teams` VALUES (14,8,63);
INSERT INTO `match_teams` VALUES (15,2,52);
INSERT INTO `match_teams` VALUES (15,6,52);
INSERT INTO `match_teams` VALUES (16,1,46);
INSERT INTO `match_teams` VALUES (16,7,58);
INSERT INTO `match_teams` VALUES (17,10,52);
INSERT INTO `match_teams` VALUES (17,5,63);
INSERT INTO `match_teams` VALUES (18,8,67);
INSERT INTO `match_teams` VALUES (18,2,54);
INSERT INTO `match_teams` VALUES (19,3,56);
INSERT INTO `match_teams` VALUES (19,6,55);
INSERT INTO `match_teams` VALUES (20,8,69);
INSERT INTO `match_teams` VALUES (20,10,62);
INSERT INTO `match_teams` VALUES (21,7,61);
INSERT INTO `match_teams` VALUES (21,5,51);
INSERT INTO `match_teams` VALUES (22,4,57);
INSERT INTO `match_teams` VALUES (22,9,34);
INSERT INTO `match_teams` VALUES (23,2,57);
INSERT INTO `match_teams` VALUES (23,3,58);
INSERT INTO `match_teams` VALUES (24,6,52);
INSERT INTO `match_teams` VALUES (24,1,49);
INSERT INTO `match_teams` VALUES (25,7,70);
INSERT INTO `match_teams` VALUES (25,6,42);
INSERT INTO `match_teams` VALUES (26,5,79);
INSERT INTO `match_teams` VALUES (26,2,41);
INSERT INTO `match_teams` VALUES (27,1,54);
INSERT INTO `match_teams` VALUES (27,8,69);
INSERT INTO `match_teams` VALUES (28,3,48);
INSERT INTO `match_teams` VALUES (28,4,69);
INSERT INTO `match_teams` VALUES (29,9,44);
INSERT INTO `match_teams` VALUES (29,10,58);
INSERT INTO `match_teams` VALUES (30,10,52);
INSERT INTO `match_teams` VALUES (30,7,61);
INSERT INTO `match_teams` VALUES (31,4,51);
INSERT INTO `match_teams` VALUES (31,5,59);
INSERT INTO `match_teams` VALUES (32,3,57);
INSERT INTO `match_teams` VALUES (32,9,58);
INSERT INTO `match_teams` VALUES (33,6,55);
INSERT INTO `match_teams` VALUES (33,2,53);
INSERT INTO `match_teams` VALUES (34,9,49);
INSERT INTO `match_teams` VALUES (34,6,45);
INSERT INTO `match_teams` VALUES (35,10,53);
INSERT INTO `match_teams` VALUES (35,4,54);
INSERT INTO `match_teams` VALUES (36,7,62);
INSERT INTO `match_teams` VALUES (36,1,51);
INSERT INTO `match_teams` VALUES (37,3,52);
INSERT INTO `match_teams` VALUES (37,5,73);
INSERT INTO `match_teams` VALUES (38,2,63);
INSERT INTO `match_teams` VALUES (38,8,67);
INSERT INTO `match_teams` VALUES (39,4,57);
INSERT INTO `match_teams` VALUES (39,1,51);
INSERT INTO `match_teams` VALUES (40,5,58);
INSERT INTO `match_teams` VALUES (40,7,54);
INSERT INTO `match_teams` VALUES (41,8,66);
INSERT INTO `match_teams` VALUES (41,6,60);
INSERT INTO `match_teams` VALUES (42,9,54);
INSERT INTO `match_teams` VALUES (42,2,44);
INSERT INTO `match_teams` VALUES (43,7,56);
INSERT INTO `match_teams` VALUES (43,4,44);
INSERT INTO `match_teams` VALUES (44,1,51);
INSERT INTO `match_teams` VALUES (44,10,63);
INSERT INTO `match_teams` VALUES (45,3,51);
INSERT INTO `match_teams` VALUES (45,8,81);
INSERT INTO `match_teams` VALUES (46,6,51);
INSERT INTO `match_teams` VALUES (46,9,54);
INSERT INTO `match_teams` VALUES (47,8,66);
INSERT INTO `match_teams` VALUES (47,7,51);
INSERT INTO `match_teams` VALUES (48,5,57);
INSERT INTO `match_teams` VALUES (48,10,58);
INSERT INTO `match_teams` VALUES (49,4,69);
INSERT INTO `match_teams` VALUES (49,6,46);
INSERT INTO `match_teams` VALUES (50,2,46);
INSERT INTO `match_teams` VALUES (50,1,60);
INSERT INTO `match_teams` VALUES (51,9,56);
INSERT INTO `match_teams` VALUES (51,3,55);
INSERT INTO `match_teams` VALUES (52,1,53);
INSERT INTO `match_teams` VALUES (52,5,67);
INSERT INTO `match_teams` VALUES (53,4,60);
INSERT INTO `match_teams` VALUES (53,10,55);
INSERT INTO `match_teams` VALUES (54,8,64);
INSERT INTO `match_teams` VALUES (54,9,54);
INSERT INTO `match_teams` VALUES (55,3,59);
INSERT INTO `match_teams` VALUES (55,2,64);
INSERT INTO `match_teams` VALUES (56,8,65);
INSERT INTO `match_teams` VALUES (56,4,56);
INSERT INTO `match_teams` VALUES (57,10,70);
INSERT INTO `match_teams` VALUES (57,2,47);
INSERT INTO `match_teams` VALUES (58,1,58);
INSERT INTO `match_teams` VALUES (58,3,55);
INSERT INTO `match_teams` VALUES (59,6,53);
INSERT INTO `match_teams` VALUES (59,5,59);
INSERT INTO `match_teams` VALUES (60,9,47);
INSERT INTO `match_teams` VALUES (60,7,71);
INSERT INTO `match_teams` VALUES (61,6,62);
INSERT INTO `match_teams` VALUES (61,3,54);
INSERT INTO `match_teams` VALUES (62,5,59);
INSERT INTO `match_teams` VALUES (62,8,59);
INSERT INTO `match_teams` VALUES (63,7,63);
INSERT INTO `match_teams` VALUES (63,10,52);
INSERT INTO `match_teams` VALUES (64,9,56);
INSERT INTO `match_teams` VALUES (64,1,55);
INSERT INTO `match_teams` VALUES (65,2,53);
INSERT INTO `match_teams` VALUES (65,4,66);
/*!40000 ALTER TABLE `match_teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `at_team` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matches`
--

LOCK TABLES `matches` WRITE;
/*!40000 ALTER TABLE `matches` DISABLE KEYS */;
INSERT INTO `matches` VALUES (1,6);
INSERT INTO `matches` VALUES (2,7);
INSERT INTO `matches` VALUES (3,10);
INSERT INTO `matches` VALUES (4,5);
INSERT INTO `matches` VALUES (5,2);
INSERT INTO `matches` VALUES (6,5);
INSERT INTO `matches` VALUES (7,1);
INSERT INTO `matches` VALUES (8,8);
INSERT INTO `matches` VALUES (9,6);
INSERT INTO `matches` VALUES (10,7);
INSERT INTO `matches` VALUES (11,4);
INSERT INTO `matches` VALUES (12,5);
INSERT INTO `matches` VALUES (13,10);
INSERT INTO `matches` VALUES (14,9);
INSERT INTO `matches` VALUES (15,2);
INSERT INTO `matches` VALUES (16,1);
INSERT INTO `matches` VALUES (17,10);
INSERT INTO `matches` VALUES (18,8);
INSERT INTO `matches` VALUES (19,3);
INSERT INTO `matches` VALUES (20,8);
INSERT INTO `matches` VALUES (21,7);
INSERT INTO `matches` VALUES (22,4);
INSERT INTO `matches` VALUES (23,2);
INSERT INTO `matches` VALUES (24,6);
INSERT INTO `matches` VALUES (25,7);
INSERT INTO `matches` VALUES (26,5);
INSERT INTO `matches` VALUES (27,1);
INSERT INTO `matches` VALUES (28,3);
INSERT INTO `matches` VALUES (29,9);
INSERT INTO `matches` VALUES (30,10);
INSERT INTO `matches` VALUES (31,4);
INSERT INTO `matches` VALUES (32,3);
INSERT INTO `matches` VALUES (33,6);
INSERT INTO `matches` VALUES (34,9);
INSERT INTO `matches` VALUES (35,10);
INSERT INTO `matches` VALUES (36,7);
INSERT INTO `matches` VALUES (37,3);
INSERT INTO `matches` VALUES (38,2);
INSERT INTO `matches` VALUES (39,4);
INSERT INTO `matches` VALUES (40,5);
INSERT INTO `matches` VALUES (41,8);
INSERT INTO `matches` VALUES (42,9);
INSERT INTO `matches` VALUES (43,7);
INSERT INTO `matches` VALUES (44,1);
INSERT INTO `matches` VALUES (45,3);
INSERT INTO `matches` VALUES (46,6);
INSERT INTO `matches` VALUES (47,8);
INSERT INTO `matches` VALUES (48,5);
INSERT INTO `matches` VALUES (49,4);
INSERT INTO `matches` VALUES (50,2);
INSERT INTO `matches` VALUES (51,9);
INSERT INTO `matches` VALUES (52,1);
INSERT INTO `matches` VALUES (53,4);
INSERT INTO `matches` VALUES (54,8);
INSERT INTO `matches` VALUES (55,3);
INSERT INTO `matches` VALUES (56,8);
INSERT INTO `matches` VALUES (57,10);
INSERT INTO `matches` VALUES (58,1);
INSERT INTO `matches` VALUES (59,6);
INSERT INTO `matches` VALUES (60,9);
INSERT INTO `matches` VALUES (61,6);
INSERT INTO `matches` VALUES (62,5);
INSERT INTO `matches` VALUES (63,7);
INSERT INTO `matches` VALUES (64,9);
INSERT INTO `matches` VALUES (65,2);
/*!40000 ALTER TABLE `matches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_positions`
--

DROP TABLE IF EXISTS `player_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player_positions` (
  `player_id` int(11) DEFAULT NULL,
  `position` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_positions`
--

LOCK TABLES `player_positions` WRITE;
/*!40000 ALTER TABLE `player_positions` DISABLE KEYS */;
INSERT INTO `player_positions` VALUES (1,'WA');
INSERT INTO `player_positions` VALUES (1,'C');
INSERT INTO `player_positions` VALUES (2,'GA');
INSERT INTO `player_positions` VALUES (2,'WA');
INSERT INTO `player_positions` VALUES (2,'GS');
INSERT INTO `player_positions` VALUES (3,'GA');
INSERT INTO `player_positions` VALUES (3,'GS');
INSERT INTO `player_positions` VALUES (4,'GK');
INSERT INTO `player_positions` VALUES (4,'GD');
INSERT INTO `player_positions` VALUES (5,'C');
INSERT INTO `player_positions` VALUES (5,'WA');
INSERT INTO `player_positions` VALUES (6,'GK');
INSERT INTO `player_positions` VALUES (6,'GD');
INSERT INTO `player_positions` VALUES (7,'WA');
INSERT INTO `player_positions` VALUES (7,'C');
INSERT INTO `player_positions` VALUES (7,'WD');
INSERT INTO `player_positions` VALUES (8,'GD');
INSERT INTO `player_positions` VALUES (8,'GK');
INSERT INTO `player_positions` VALUES (8,'WD');
INSERT INTO `player_positions` VALUES (9,'GA');
INSERT INTO `player_positions` VALUES (9,'GS');
INSERT INTO `player_positions` VALUES (10,'C');
INSERT INTO `player_positions` VALUES (10,'WA');
INSERT INTO `player_positions` VALUES (11,'GK');
INSERT INTO `player_positions` VALUES (11,'GD');
INSERT INTO `player_positions` VALUES (12,'WD');
INSERT INTO `player_positions` VALUES (12,'C');
INSERT INTO `player_positions` VALUES (12,'WA');
INSERT INTO `player_positions` VALUES (13,'GD');
INSERT INTO `player_positions` VALUES (13,'GK');
INSERT INTO `player_positions` VALUES (14,'GA');
INSERT INTO `player_positions` VALUES (14,'GS');
INSERT INTO `player_positions` VALUES (15,'GS');
INSERT INTO `player_positions` VALUES (15,'GA');
INSERT INTO `player_positions` VALUES (16,'GK');
INSERT INTO `player_positions` VALUES (16,'GD');
INSERT INTO `player_positions` VALUES (16,'GS');
INSERT INTO `player_positions` VALUES (17,'WD');
INSERT INTO `player_positions` VALUES (17,'C');
INSERT INTO `player_positions` VALUES (18,'WA');
INSERT INTO `player_positions` VALUES (18,'C');
INSERT INTO `player_positions` VALUES (18,'GA');
INSERT INTO `player_positions` VALUES (19,'GA');
INSERT INTO `player_positions` VALUES (19,'GS');
INSERT INTO `player_positions` VALUES (20,'GK');
INSERT INTO `player_positions` VALUES (20,'GD');
INSERT INTO `player_positions` VALUES (21,'C');
INSERT INTO `player_positions` VALUES (21,'WD');
INSERT INTO `player_positions` VALUES (22,'WA');
INSERT INTO `player_positions` VALUES (22,'C');
INSERT INTO `player_positions` VALUES (22,'GA');
INSERT INTO `player_positions` VALUES (23,'WD');
INSERT INTO `player_positions` VALUES (24,'GS');
INSERT INTO `player_positions` VALUES (25,'GA');
INSERT INTO `player_positions` VALUES (25,'WA');
INSERT INTO `player_positions` VALUES (25,'GS');
INSERT INTO `player_positions` VALUES (26,'WA');
INSERT INTO `player_positions` VALUES (26,'GS');
INSERT INTO `player_positions` VALUES (26,'GA');
INSERT INTO `player_positions` VALUES (27,'GA');
INSERT INTO `player_positions` VALUES (27,'WA');
INSERT INTO `player_positions` VALUES (27,'C');
INSERT INTO `player_positions` VALUES (28,'GS');
INSERT INTO `player_positions` VALUES (28,'GA');
INSERT INTO `player_positions` VALUES (29,'WA');
INSERT INTO `player_positions` VALUES (29,'C');
INSERT INTO `player_positions` VALUES (30,'GK');
INSERT INTO `player_positions` VALUES (30,'GD');
INSERT INTO `player_positions` VALUES (31,'WD');
INSERT INTO `player_positions` VALUES (31,'C');
INSERT INTO `player_positions` VALUES (31,'WA');
INSERT INTO `player_positions` VALUES (32,'WD');
INSERT INTO `player_positions` VALUES (32,'C');
INSERT INTO `player_positions` VALUES (33,'GK');
INSERT INTO `player_positions` VALUES (33,'GD');
INSERT INTO `player_positions` VALUES (33,'WD');
INSERT INTO `player_positions` VALUES (34,'GK');
INSERT INTO `player_positions` VALUES (34,'GD');
INSERT INTO `player_positions` VALUES (34,'WD');
INSERT INTO `player_positions` VALUES (35,'WD');
INSERT INTO `player_positions` VALUES (35,'C');
INSERT INTO `player_positions` VALUES (36,'GK');
INSERT INTO `player_positions` VALUES (37,'GA');
INSERT INTO `player_positions` VALUES (37,'GS');
INSERT INTO `player_positions` VALUES (38,'GS');
INSERT INTO `player_positions` VALUES (38,'GA');
INSERT INTO `player_positions` VALUES (39,'GK');
INSERT INTO `player_positions` VALUES (39,'GD');
INSERT INTO `player_positions` VALUES (40,'GK');
INSERT INTO `player_positions` VALUES (40,'GD');
INSERT INTO `player_positions` VALUES (40,'WD');
INSERT INTO `player_positions` VALUES (41,'WD');
INSERT INTO `player_positions` VALUES (41,'C');
INSERT INTO `player_positions` VALUES (42,'WA');
INSERT INTO `player_positions` VALUES (42,'C');
INSERT INTO `player_positions` VALUES (43,'GD');
INSERT INTO `player_positions` VALUES (43,'WD');
INSERT INTO `player_positions` VALUES (44,'C');
INSERT INTO `player_positions` VALUES (44,'WA');
INSERT INTO `player_positions` VALUES (45,'GD');
INSERT INTO `player_positions` VALUES (45,'GK');
INSERT INTO `player_positions` VALUES (45,'WD');
INSERT INTO `player_positions` VALUES (46,'WA');
INSERT INTO `player_positions` VALUES (47,'GS');
INSERT INTO `player_positions` VALUES (47,'GA');
INSERT INTO `player_positions` VALUES (48,'C');
INSERT INTO `player_positions` VALUES (48,'WA');
INSERT INTO `player_positions` VALUES (49,'C');
INSERT INTO `player_positions` VALUES (49,'WA');
INSERT INTO `player_positions` VALUES (49,'WD');
INSERT INTO `player_positions` VALUES (50,'GK');
INSERT INTO `player_positions` VALUES (50,'GD');
INSERT INTO `player_positions` VALUES (50,'WD');
INSERT INTO `player_positions` VALUES (51,'WD');
INSERT INTO `player_positions` VALUES (51,'C');
INSERT INTO `player_positions` VALUES (52,'GA');
INSERT INTO `player_positions` VALUES (52,'GS');
INSERT INTO `player_positions` VALUES (53,'GS');
INSERT INTO `player_positions` VALUES (54,'GA');
INSERT INTO `player_positions` VALUES (54,'GS');
INSERT INTO `player_positions` VALUES (54,'WA');
INSERT INTO `player_positions` VALUES (55,'C');
INSERT INTO `player_positions` VALUES (55,'WD');
INSERT INTO `player_positions` VALUES (55,'WA');
INSERT INTO `player_positions` VALUES (56,'WA');
INSERT INTO `player_positions` VALUES (56,'C');
INSERT INTO `player_positions` VALUES (57,'GD');
INSERT INTO `player_positions` VALUES (58,'GS');
INSERT INTO `player_positions` VALUES (59,'GD');
INSERT INTO `player_positions` VALUES (60,'GD');
INSERT INTO `player_positions` VALUES (60,'WD');
INSERT INTO `player_positions` VALUES (60,'C');
INSERT INTO `player_positions` VALUES (60,'WA');
INSERT INTO `player_positions` VALUES (61,'GD');
INSERT INTO `player_positions` VALUES (61,'GK');
INSERT INTO `player_positions` VALUES (62,'C');
INSERT INTO `player_positions` VALUES (62,'WD');
INSERT INTO `player_positions` VALUES (63,'GS');
INSERT INTO `player_positions` VALUES (63,'GA');
INSERT INTO `player_positions` VALUES (64,'WD');
INSERT INTO `player_positions` VALUES (64,'C');
INSERT INTO `player_positions` VALUES (65,'GK');
INSERT INTO `player_positions` VALUES (65,'GD');
INSERT INTO `player_positions` VALUES (66,'GA');
INSERT INTO `player_positions` VALUES (66,'GS');
INSERT INTO `player_positions` VALUES (67,'GS');
INSERT INTO `player_positions` VALUES (68,'GD');
INSERT INTO `player_positions` VALUES (68,'GK');
INSERT INTO `player_positions` VALUES (69,'GK');
INSERT INTO `player_positions` VALUES (69,'GD');
INSERT INTO `player_positions` VALUES (69,'WD');
INSERT INTO `player_positions` VALUES (70,'GD');
INSERT INTO `player_positions` VALUES (70,'WD');
INSERT INTO `player_positions` VALUES (71,'C');
INSERT INTO `player_positions` VALUES (71,'WD');
INSERT INTO `player_positions` VALUES (72,'GS');
INSERT INTO `player_positions` VALUES (73,'GK');
INSERT INTO `player_positions` VALUES (73,'GD');
INSERT INTO `player_positions` VALUES (74,'GS');
INSERT INTO `player_positions` VALUES (74,'GA');
INSERT INTO `player_positions` VALUES (75,'GK');
INSERT INTO `player_positions` VALUES (75,'GD');
INSERT INTO `player_positions` VALUES (76,'GD');
INSERT INTO `player_positions` VALUES (76,'WD');
INSERT INTO `player_positions` VALUES (77,'WA');
INSERT INTO `player_positions` VALUES (77,'C');
INSERT INTO `player_positions` VALUES (77,'WD');
INSERT INTO `player_positions` VALUES (78,'C');
INSERT INTO `player_positions` VALUES (78,'WD');
INSERT INTO `player_positions` VALUES (78,'WA');
INSERT INTO `player_positions` VALUES (79,'WD');
INSERT INTO `player_positions` VALUES (79,'C');
INSERT INTO `player_positions` VALUES (79,'GD');
INSERT INTO `player_positions` VALUES (80,'GA');
INSERT INTO `player_positions` VALUES (80,'GS');
INSERT INTO `player_positions` VALUES (81,'C');
INSERT INTO `player_positions` VALUES (81,'WA');
INSERT INTO `player_positions` VALUES (82,'GD');
INSERT INTO `player_positions` VALUES (82,'WD');
INSERT INTO `player_positions` VALUES (83,'GA');
INSERT INTO `player_positions` VALUES (83,'GS');
INSERT INTO `player_positions` VALUES (83,'WA');
INSERT INTO `player_positions` VALUES (84,'GK');
INSERT INTO `player_positions` VALUES (84,'GD');
INSERT INTO `player_positions` VALUES (85,'WA');
INSERT INTO `player_positions` VALUES (85,'C');
INSERT INTO `player_positions` VALUES (86,'GS');
INSERT INTO `player_positions` VALUES (87,'C');
INSERT INTO `player_positions` VALUES (87,'WA');
INSERT INTO `player_positions` VALUES (88,'WD');
INSERT INTO `player_positions` VALUES (88,'C');
INSERT INTO `player_positions` VALUES (88,'WA');
INSERT INTO `player_positions` VALUES (89,'GA');
INSERT INTO `player_positions` VALUES (89,'GS');
INSERT INTO `player_positions` VALUES (90,'WD');
INSERT INTO `player_positions` VALUES (90,'C');
INSERT INTO `player_positions` VALUES (91,'GD');
INSERT INTO `player_positions` VALUES (91,'GK');
INSERT INTO `player_positions` VALUES (92,'GS');
INSERT INTO `player_positions` VALUES (92,'GA');
INSERT INTO `player_positions` VALUES (93,'GK');
INSERT INTO `player_positions` VALUES (93,'GD');
INSERT INTO `player_positions` VALUES (93,'WD');
INSERT INTO `player_positions` VALUES (94,'GK');
INSERT INTO `player_positions` VALUES (94,'GD');
INSERT INTO `player_positions` VALUES (95,'GA');
INSERT INTO `player_positions` VALUES (95,'GS');
INSERT INTO `player_positions` VALUES (96,'GD');
INSERT INTO `player_positions` VALUES (96,'GK');
INSERT INTO `player_positions` VALUES (97,'GS');
INSERT INTO `player_positions` VALUES (97,'GA');
INSERT INTO `player_positions` VALUES (98,'GS');
INSERT INTO `player_positions` VALUES (98,'GA');
INSERT INTO `player_positions` VALUES (99,'GD');
INSERT INTO `player_positions` VALUES (99,'GK');
INSERT INTO `player_positions` VALUES (100,'GD');
INSERT INTO `player_positions` VALUES (100,'GK');
INSERT INTO `player_positions` VALUES (101,'GS');
INSERT INTO `player_positions` VALUES (101,'GA');
INSERT INTO `player_positions` VALUES (102,'GD');
INSERT INTO `player_positions` VALUES (102,'WD');
INSERT INTO `player_positions` VALUES (103,'GA');
INSERT INTO `player_positions` VALUES (103,'WA');
INSERT INTO `player_positions` VALUES (104,'C');
INSERT INTO `player_positions` VALUES (104,'WA');
INSERT INTO `player_positions` VALUES (104,'WD');
INSERT INTO `player_positions` VALUES (105,'C');
INSERT INTO `player_positions` VALUES (105,'WA');
INSERT INTO `player_positions` VALUES (106,'WD');
INSERT INTO `player_positions` VALUES (106,'GD');
INSERT INTO `player_positions` VALUES (107,'GA');
INSERT INTO `player_positions` VALUES (107,'GS');
INSERT INTO `player_positions` VALUES (108,'WA');
INSERT INTO `player_positions` VALUES (108,'C');
INSERT INTO `player_positions` VALUES (109,'GS');
INSERT INTO `player_positions` VALUES (110,'GS');
INSERT INTO `player_positions` VALUES (110,'GA');
INSERT INTO `player_positions` VALUES (111,'C');
INSERT INTO `player_positions` VALUES (111,'WD');
INSERT INTO `player_positions` VALUES (112,'C');
INSERT INTO `player_positions` VALUES (112,'WA');
INSERT INTO `player_positions` VALUES (112,'WD');
INSERT INTO `player_positions` VALUES (113,'GD');
INSERT INTO `player_positions` VALUES (113,'GK');
INSERT INTO `player_positions` VALUES (114,'C');
INSERT INTO `player_positions` VALUES (114,'WA');
INSERT INTO `player_positions` VALUES (115,'GD');
INSERT INTO `player_positions` VALUES (115,'GK');
INSERT INTO `player_positions` VALUES (116,'GK');
INSERT INTO `player_positions` VALUES (116,'GD');
INSERT INTO `player_positions` VALUES (117,'GA');
INSERT INTO `player_positions` VALUES (117,'GS');
INSERT INTO `player_positions` VALUES (118,'GK');
INSERT INTO `player_positions` VALUES (118,'GD');
INSERT INTO `player_positions` VALUES (119,'GS');
INSERT INTO `player_positions` VALUES (119,'GA');
/*!40000 ALTER TABLE `player_positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `hometown` varchar(90) DEFAULT NULL,
  `team` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (1,'Emily Beaton',180,'Loxton, SA',1);
INSERT INTO `players` VALUES (2,'Erin Bell',178,'Sydney, NSW',1);
INSERT INTO `players` VALUES (3,'Stephanie Puopolo',181,'Melbourne, Victoria',1);
INSERT INTO `players` VALUES (4,'Samantha Poolman',189,'Newcastle, NSW',1);
INSERT INTO `players` VALUES (5,'Madeleine Proud',174,'Adelaide, SA',1);
INSERT INTO `players` VALUES (6,'Kate Shimmin',186,'Adelaide, SA',1);
INSERT INTO `players` VALUES (7,'Khao Watts',170,'Millicent, South Australia',1);
INSERT INTO `players` VALUES (8,'Amy Steel',190,'Melbourne, VIC',1);
INSERT INTO `players` VALUES (9,'Carla Borrego',193,'Jamaica',1);
INSERT INTO `players` VALUES (10,'Hannah Petty',177,'Adelaide, South Australia',1);
INSERT INTO `players` VALUES (11,'Sarah Klau',190,'null',1);
INSERT INTO `players` VALUES (12,'Jade Clarke',174,'Manchester, England',1);
INSERT INTO `players` VALUES (13,'Katrina Grant',186,'Papakura, NZ',2);
INSERT INTO `players` VALUES (14,'Jodi Brown',185,'Whanganui, NZ',2);
INSERT INTO `players` VALUES (15,'Ameliaranne Wells',186,'Bundaberg, QLD',2);
INSERT INTO `players` VALUES (16,'Phoenix Karaka',186,'Auckland, New Zealand',2);
INSERT INTO `players` VALUES (17,'Elias Scheres',178,'Tokoroa, NZ',2);
INSERT INTO `players` VALUES (18,'Whitney Souness',174,'Porirua, NZ',2);
INSERT INTO `players` VALUES (19,'Blaze Leslie',180,'Karratha, Western Australia',2);
INSERT INTO `players` VALUES (20,'Jacinta Messer',184,'Brisbane, Queensland',2);
INSERT INTO `players` VALUES (21,'Samon Nathan',178,'Waitakere, New Zealand',2);
INSERT INTO `players` VALUES (22,'Chelsea Locke',181,'Paddington, New South Wales',2);
INSERT INTO `players` VALUES (23,'Kate Wells',176,'Stratford, New Zealand',2);
INSERT INTO `players` VALUES (24,'Maia Wilson',189,'Auckland, New Zealand',2);
INSERT INTO `players` VALUES (25,'Anna Thompson',175,'Christchurch, NZ',3);
INSERT INTO `players` VALUES (26,'Bailey Mes',187,'Auckland, NZ',3);
INSERT INTO `players` VALUES (27,'Gemma Hazeldine',170,'Christchurch, NZ',3);
INSERT INTO `players` VALUES (28,'Mwai Kumwenda',183,'Mzimba, MAW',3);
INSERT INTO `players` VALUES (29,'Nicola Mackle',169,'Timaru, New Zealand',3);
INSERT INTO `players` VALUES (30,'Jess Moulds',188,'Helensville, NZ',3);
INSERT INTO `players` VALUES (31,'Erikana Pedersen',173,'Auckland, NZ',3);
INSERT INTO `players` VALUES (32,' Hayley Saunders',179,'Gore, NZ',3);
INSERT INTO `players` VALUES (33,'Louise Thayer',185,'Invercargill, NZ',3);
INSERT INTO `players` VALUES (34,'Zoe Walker',183,'Nelson, NZ',3);
INSERT INTO `players` VALUES (35,'Charlotte Elley',174,'Westport, New Zealand',3);
INSERT INTO `players` VALUES (36,'Olivia Coughlan',188,'Palmerston North',3);
INSERT INTO `players` VALUES (37,'Alice Teague-Neeld',183,'Bundoora, VIC',4);
INSERT INTO `players` VALUES (38,'Karyn Bailey',193,'Williamstown, VIC',4);
INSERT INTO `players` VALUES (39,'Emily Mannix',187,'Geelong, VIC',4);
INSERT INTO `players` VALUES (40,'Geva Mentor',188,'Bournemouth, ENG',4);
INSERT INTO `players` VALUES (41,'Kate Moloney',177,'Greensborough, VIC',4);
INSERT INTO `players` VALUES (42,'Madison Robinson',168,'Geelong, Victoria',4);
INSERT INTO `players` VALUES (43,'Chloe Watson',183,'Fitzroy, VIC',4);
INSERT INTO `players` VALUES (44,'Elizabeth Watson',178,'Carlton, VIC',4);
INSERT INTO `players` VALUES (45,'Joanna Weston',188,'Corowa, VIC',4);
INSERT INTO `players` VALUES (46,'Kelsey Browne',164,'Geelong, VIC',4);
INSERT INTO `players` VALUES (47,'Emma Ryde',197,'Dandenong, Victoria',4);
INSERT INTO `players` VALUES (48,'Kimberlee Green',176,'Sydney, New South Wales',5);
INSERT INTO `players` VALUES (49,'Paige Hadley',173,'Sydney, New South Wales',5);
INSERT INTO `players` VALUES (50,'Sharni Layton',187,'Melbourne, Victoria',5);
INSERT INTO `players` VALUES (51,'Abbey McCulloch',178,'Sydney, NSW',5);
INSERT INTO `players` VALUES (52,'Susan Pettitt',180,'Canberra, ACT',5);
INSERT INTO `players` VALUES (53,'Caitlin Thwaites',188,'Bendigo, VIC',5);
INSERT INTO `players` VALUES (54,'Stephanie Wood',175,'Hyde Park, Queensland',5);
INSERT INTO `players` VALUES (55,'Laura Langman',173,'Waikato, New Zealand',5);
INSERT INTO `players` VALUES (56,'Kaitlyn Bryce',170,'Nowra, New South Wales',5);
INSERT INTO `players` VALUES (57,'Lauren Moore',184,'Sydney, New South Wales',5);
INSERT INTO `players` VALUES (58,'Amy Sommerville',180,'Sydney, New South Wales',5);
INSERT INTO `players` VALUES (59,'Maddy Turner',183,'Adelaide, South Australia',5);
INSERT INTO `players` VALUES (60,'Kayla Cullen',185,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (61,'Temalisi Fakahokotau',182,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (62,'Serena Guthrie',180,'Jersey, United Kingdom',6);
INSERT INTO `players` VALUES (63,'Cathrine Tuivaiti',189,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (64,'Nadia Loveday',171,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (65,'Sulu Fitzpatrick',188,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (66,'Maria Tutaia',188,'Tokoroa, New Zealand',6);
INSERT INTO `players` VALUES (67,'Megan Craig',203,'Lower Hutt, New Zealand',6);
INSERT INTO `players` VALUES (68,'Holly Fowler',182,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (69,'Anna Harrison',190,'Westport, New Zealand',6);
INSERT INTO `players` VALUES (70,'Michaela Sokolich-Beatson',183,'Auckland, New Zealand',6);
INSERT INTO `players` VALUES (71,'Fa\'amu Ioane',172,'Apia, Samoa',6);
INSERT INTO `players` VALUES (72,'Romelda Aiken',196,'Jamaica',7);
INSERT INTO `players` VALUES (73,'Laura Clemesha',190,'Toowoomba, Queensland',7);
INSERT INTO `players` VALUES (74,'Beryl Friday',184,'Ingham, Queensland',7);
INSERT INTO `players` VALUES (75,'Laura Geitz',185,'Ipswich, Queensland',7);
INSERT INTO `players` VALUES (76,'Clare McMeniman',185,'Brisbane, Queensland',7);
INSERT INTO `players` VALUES (77,'Caitlyn Nevins',173,'Echuca, Victoria',7);
INSERT INTO `players` VALUES (78,'Kimberley Ravaillion',176,'Strathfield, New South Wales',7);
INSERT INTO `players` VALUES (79,'Gabrielle Simpson',176,'Sydney, New South Wales',7);
INSERT INTO `players` VALUES (80,'Gretel Tippett',192,'Gold Coast, Queensland',7);
INSERT INTO `players` VALUES (81,'Mahalia Cassidy',173,'Redcliffe, Queensland',7);
INSERT INTO `players` VALUES (82,'Hulita Haukinima',178,'Logan, Queensland',7);
INSERT INTO `players` VALUES (83,'Chelsea Lemke',182,'Gawler, South Australia',7);
INSERT INTO `players` VALUES (84,'Te Huinga Reo Selby-Rickit',184,'Hamilton, NZ',8);
INSERT INTO `players` VALUES (85,'Gina Crampton',174,'Hamilton, New Zealand',8);
INSERT INTO `players` VALUES (86,'Jhaniele Fowler-Reid',198,'Montego Bay, Jamaica',8);
INSERT INTO `players` VALUES (87,'Shannon Francois',178,'Motueka, New Zealand',8);
INSERT INTO `players` VALUES (88,'Wendy Frew',174,'Invercargill, New Zealand',8);
INSERT INTO `players` VALUES (89,'Brooke Leaver',183,'Auckland, New Zealand',8);
INSERT INTO `players` VALUES (90,'Stacey Peeters',173,'Matamata, New Zealand',8);
INSERT INTO `players` VALUES (91,'Storm Purvis',186,'Christchurch, New Zealand',8);
INSERT INTO `players` VALUES (92,'Te Paea Selby-Rickit',188,'Otaki, New Zealand',8);
INSERT INTO `players` VALUES (93,'Jane Watson',181,'Christchurch, New Zealand',8);
INSERT INTO `players` VALUES (94,'Abby Erwood',181,'Dunedin, New Zealand',8);
INSERT INTO `players` VALUES (95,'Jamie Hume',182,'Clyde, New Zealand',8);
INSERT INTO `players` VALUES (96,'Leana de Bruin',190,'Bethlehem, South Africa',9);
INSERT INTO `players` VALUES (97,'Ellen Halpenny',185,'Napier, New Zealand',9);
INSERT INTO `players` VALUES (98,'Joanne Harten',188,'Essex, ENG',9);
INSERT INTO `players` VALUES (99,'Kelly Jury',192,'Stratford, New Zealand',9);
INSERT INTO `players` VALUES (100,'Kristiana Manu\'a',182,'Wellington, New Zealand',9);
INSERT INTO `players` VALUES (101,'Malia Paseka',183,'Auckland, New Zealand',9);
INSERT INTO `players` VALUES (102,'Jamie-Lee Price',179,'Sydney, New South Wales',9);
INSERT INTO `players` VALUES (103,'Grace Rasmussen',177,'Auckland, New Zealand',9);
INSERT INTO `players` VALUES (104,'Samantha Sinclair',171,'Rotorua, New Zealand',9);
INSERT INTO `players` VALUES (105,' Courtney Tairi',180,'Sydney, New South Wales',9);
INSERT INTO `players` VALUES (106,'Katherine Coffin',182,'Hamilton, New Zealand',9);
INSERT INTO `players` VALUES (107,'Paula Griffin',1,'Auckland, New Zealand',9);
INSERT INTO `players` VALUES (108,'Verity Simmons',170,'Liverpool, New South Wales',10);
INSERT INTO `players` VALUES (109,'Cailtin Bassett',193,'Perth, Western Australia',10);
INSERT INTO `players` VALUES (110,'Kate Beveridge',193,'Perth, Western Australia',10);
INSERT INTO `players` VALUES (111,'Ashleigh Brazill',175,'Campbelltown, NSW',10);
INSERT INTO `players` VALUES (112,'Shae Brown',181,'Melbourne, Victoria',10);
INSERT INTO `players` VALUES (113,'Courtney Bruce',189,'Gosnells, Western Australia',10);
INSERT INTO `players` VALUES (114,'Ingrid Colyer',165,'Karridale, Western Australia',10);
INSERT INTO `players` VALUES (115,'Josie Janz-Dawson',185,'Thursday Island, Queensland',10);
INSERT INTO `players` VALUES (116,'April Brandley',185,'Nowra, New South Wales',10);
INSERT INTO `players` VALUES (117,'Natalie Medhurst',175,'Warracknabeal, Victoria',10);
INSERT INTO `players` VALUES (118,'Erena Mikaere',193,'Rotorua, New Zealand',10);
INSERT INTO `players` VALUES (119,'Kaylia Stanton',189,'Perth, Western Australia',10);
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `coach` int(11) DEFAULT NULL,
  `captain` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Thunderbirds',1,2);
INSERT INTO `teams` VALUES (2,'Pulse',2,13);
INSERT INTO `teams` VALUES (3,'Tactix',3,25);
INSERT INTO `teams` VALUES (4,'Vixens',4,42);
INSERT INTO `teams` VALUES (5,'Swifts',5,55);
INSERT INTO `teams` VALUES (6,'Mystics',6,66);
INSERT INTO `teams` VALUES (7,'Firebirds',7,75);
INSERT INTO `teams` VALUES (8,'Steel',8,88);
INSERT INTO `teams` VALUES (9,'Magic',9,96);
INSERT INTO `teams` VALUES (10,'Fever',10,111);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-15 15:19:33
