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

<div class="Event">
  <h1 class="EventTitle"><?= hentities($event['name']); ?></h1>
  <!--utiliser la fonction hentities pour empecher les injections SQL-->
  <div class="EventContent">
    <span class="EventContentSpan">Date : <?= hentities((new DateTime($event['start']))->format('d/m/Y')); ?></span>

    <!--utiliser la fonction hentities pour empecher les injections SQL-->
    <span class="EventContentSpan">Début : <?= hentities((new DateTime($event['start']))->format('H:i')); ?></span>

    <!--utiliser la fonction hentities pour empecher les injections SQL-->
    <span class="EventContentSpan">Fin : <?= hentities((new DateTime($event['end']))->format('H:i')); ?></span>

    <!--utiliser la fonction hentities pour empecher les injections SQL-->
    <span class="EventContentSpan">Description : <?= hentities($event['description']); ?></span>
  </div>
</div>

<?php require '../Includes/footer.php'; ?>
