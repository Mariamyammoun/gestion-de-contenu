
<?php
$newName = $_POST['newName'];
echo 'Nouveau nom de catégorie reçu : ' . $newName;
require_once('./categorie.php');

$categorie = new categories();
$success = $categorie->update($newName);
if ($success) {
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
} else {
    // Envoyer une réponse JSON indiquant que la mise à jour a échoué
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Une erreur est survenue lors de la mise à jour de la catégorie.']);
}

?>