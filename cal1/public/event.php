<?php
require '../src/bdd.php';
require '../Includes/header.php';
require '../src/Calendar/Evenements.php';
$pdo = get_pdo();


$events = new Calendar\Events($pdo);
// si pas d'id -> redirection vers page d'erreur 404
if (!isset($_GET['id'])) {
  header('location: ./404.php');
}
$event = $events->find($_GET['id']);
?>

<h1><?= hentities($event['name']); ?></h1>


  <!--utiliser la fonction hentities pour empecher les injections SQL-->
    Date : <?= hentities((new DateTime($event['start']))->format('d/m/Y')); ?><br>
    <!--utiliser la fonction hentities pour empecher les injections SQL-->
    Début : <?= hentities((new DateTime($event['start']))->format('H:i')); ?><br>
    <!--utiliser la fonction hentities pour empecher les injections SQL-->
    Fin : <?= hentities((new DateTime($event['end']))->format('H:i')); ?><br>
    <!--utiliser la fonction hentities pour empecher les injections SQL-->
    Description : <?= hentities($event['description']); ?>



<?php require '../Includes/footer.php'; ?>
