<?php
require_once('./import/base.php');
require_once('./categorie.php'); 

// Vérifiez si l'ID de la catégorie est défini dans les données GET
if(isset($_GET['id'])) {
    // Récupérer l'ID de la catégorie à supprimer à partir des données GET
    $categoryId = $_GET['id'];

    // Créez une instance de la classe de catégorie
    $categorie = new categories();
    
    // Définir l'ID de la catégorie à supprimer
    $categorie->setid($categoryId);
    
    // Supprimer la catégorie de la base de données
    $deleted = $categorie->delete();
    header("Location: ../categorie_affichage.php?action=success");

}
?>