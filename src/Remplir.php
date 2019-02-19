<!---------------------------------------------------->
<!--             -temporaire pour remplir la bbd-      -->
<!---------------------------------------------------->


<!-- +ajout de la création de database?-->


<!-- database pas creer donc pensez a la creer pour pouvoir afficher les evenements-->
<!-- database : calendrier-->




<?php
      $mysqli = new mysqli("localhost", "root", "", "calendrier");

      $requete = "CREATE TABLE IF NOT EXISTS `events` (
                   `id` int(11) NOT NULL AUTO_INCREMENT,
                   `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                   `description` text COLLATE utf8mb4_unicode_ci,
                   `start` datetime NOT NULL,
                   `end` datetime NOT NULL,
                   PRIMARY KEY (`id`)
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
      $requete1 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test01', 'une nouvelle réunion', '2019-02-27 07:30:00', '2019-02-27 14:00:00');";
      $requete2 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test02', 'une nouvelle réunion', '2019-02-27 19:00:00', '2019-02-27 20:00:00');";
      $requete3 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test03', 'une nouvelle réunion', '2019-02-13 07:30:00', '2019-02-13 14:00:00');";
      $requete4 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test04', 'une nouvelle réunion', '2019-02-15 07:30:00', '2019-02-15 14:00:00');";
      $requete5 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test05', 'une nouvelle réunion', '2019-02-04 14:00:00', '2019-02-04 14:30:00');";
      $requete6 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test06', 'une nouvelle réunion', '2019-02-05 16:00:00', '2019-02-05 20:00:00');";
      $requete7 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test07', 'une nouvelle réunion', '2019-02-25 16:30:00', '2019-02-25 17:00:00');";
      $requete8 = "INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`)
                        VALUES (NULL, 'test08', 'une nouvelle réunion', '2019-03-15 07:30:00', '2019-03-15 14:00:00');";
      $resultat = $mysqli->query ($requete);
      $resultat = $mysqli->query ($requete1);
      $resultat = $mysqli->query ($requete2);
      $resultat = $mysqli->query ($requete3);
      $resultat = $mysqli->query ($requete4);
      $resultat = $mysqli->query ($requete5);
      $resultat = $mysqli->query ($requete6);
      $resultat = $mysqli->query ($requete7);
      $resultat = $mysqli->query ($requete8);

      header('location:../public/index.php');
?>
