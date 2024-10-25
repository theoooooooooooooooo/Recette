-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_recette
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `recette`
--

DROP TABLE IF EXISTS `recette`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `recette` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duree` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recette`
--

LOCK TABLES `recette` WRITE;
/*!40000 ALTER TABLE `recette` DISABLE KEYS */;
INSERT INTO `recette` VALUES (1,'Spaghetti Bolognese','Étape 1 : Faire cuire les spaghetti selon les instructions du paquet.\nÉtape 2 : Faire revenir l\'oignon et l\'ail dans l\'huile d\'olive.\nÉtape 3 : Ajouter la viande hachée et cuire jusqu\'à ce qu\'elle soit dorée.\nÉtape 4 : Incorporer les tomates, assaisonner et laisser mijoter pendant 20 minutes.',45,'spaghetti.jpg'),(2,'Gâteau au chocolat','Étape 1 : Préchauffer le four à 180°C.\nÉtape 2 : Faire fondre le chocolat et le beurre ensemble.\nÉtape 3 : Dans un bol, battre les œufs et le sucre, puis ajouter le mélange chocolat-beurre.\nÉtape 4 : Incorporer la farine, mélanger et verser dans un moule.\nÉtape 5 : Cuire au four pendant 25 minutes.',60,'choco_cake.jpg'),(3,'Salade César','Étape 1 : Préparer la vinaigrette en mélangeant le jaune d\'œuf, la moutarde, le vinaigre et l\'huile d\'olive.\nÉtape 2 : Dans un grand saladier, ajouter la laitue, le poulet et les croûtons.\nÉtape 3 : Verser la vinaigrette sur la salade, mélanger et servir avec du parmesan râpé.',20,'cesar_salad.jpg'),(4,'Poulet au curry','Étape 1 : Faire revenir le poulet dans une poêle.\nÉtape 2 : Ajouter les épices et le lait de coco.\nÉtape 3 : Laisser mijoter pendant 30 minutes.',50,'chicken_curry.jpg'),(5,'Tacos','Étape 1 : Préparer la viande avec les épices.\nÉtape 2 : Monter les tacos avec les garnitures de votre choix.',30,'tacos.jpg'),(6,'Ratatouille','Étape 1 : Couper les légumes en dés.\nÉtape 2 : Faire revenir dans l\'huile d\'olive et cuire à feu doux pendant 40 minutes.',90,'ratatouille.jpg'),(7,'Lasagnes','Étape 1 : Préparer la sauce bolognaise.\nÉtape 2 : Monter les lasagnes en couches avec du fromage.\nÉtape 3 : Cuire au four pendant 45 minutes.',70,'lasagna.jpg'),(8,'Pizza Margherita','Étape 1 : Préparer la pâte à pizza.\nÉtape 2 : Ajouter les tomates, la mozzarella et le basilic.\nÉtape 3 : Cuire au four à 220°C pendant 15-20 minutes.',40,'pizza_margherita.jpg'),(9,'Mousse au chocolat','Étape 1 : Faire fondre le chocolat.\nÉtape 2 : Battre les blancs d\'œuf en neige.\nÉtape 3 : Incorporer le chocolat fondu et réfrigérer.',25,'chocolate_mousse.jpg'),(10,'Sushi','Étape 1 : Préparer le riz à sushi.\nÉtape 2 : Rouler les sushis avec les ingrédients choisis.',50,'sushi.jpg'),(11,'Crêpes','Étape 1 : Mélanger la pâte avec de la farine, des œufs, et du lait.\nÉtape 2 : Cuire les crêpes dans une poêle chaude.',30,'crepes.jpg'),(12,'Pâtes Carbonara','Étape 1 : Cuire les pâtes al dente.\nÉtape 2 : Préparer la sauce avec des œufs et du fromage parmesan.\nÉtape 3 : Mélanger avec les pâtes.',25,'carbonara.jpg'),(13,'Chili con carne','Étape 1 : Faire revenir la viande dans une grande casserole.\nÉtape 2 : Ajouter des haricots, des tomates et des épices, puis laisser mijoter.',45,'chili_con_carne.jpg'),(14,'Brioche','Étape 1 : Pétrir la pâte à brioche.\nÉtape 2 : Laisser lever la pâte, puis cuire au four pendant 30 minutes.',120,'brioche.jpg'),(15,'Soupe à l’oignon','Étape 1 : Faire caraméliser les oignons.\nÉtape 2 : Ajouter le bouillon et cuire à feu doux.',60,'onion_soup.jpg'),(16,'Boeuf Bourguignon','Étape 1 : Faire revenir le boeuf en cubes.\nÉtape 2 : Ajouter les oignons, l’ail, et le vin rouge.\nÉtape 3 : Laisser mijoter 2 heures.',120,'beef_bourguignon.jpg'),(17,'Quiche Lorraine','Étape 1 : Préparer la pâte brisée.\nÉtape 2 : Mélanger crème, œufs, et lardons.\nÉtape 3 : Cuire au four jusqu’à doré.',45,'quiche_lorraine.jpg'),(18,'Moussaka','Étape 1 : Préparer les légumes et la viande hachée.\nÉtape 2 : Monter la moussaka en couches.\nÉtape 3 : Cuire au four jusqu’à ce que le dessus soit doré.',90,'moussaka.jpg'),(19,'test3','test3',303,'');
/*!40000 ALTER TABLE `recette` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_recette'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-25 15:10:58
