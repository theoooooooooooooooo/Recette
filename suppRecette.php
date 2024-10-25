<?php
require_once "db_connexion.php";
    $idRecette = $_GET['idRecette'];
    $sql = "DELETE FROM Recette WHERE id = $idRecette";
    if ($connexion->exec($sql)) {
        header("Location: index.php?Message=supprime");
        exit();
    } else {
        echo "Erreur : Impossible de supprimer la recette.";
    }
?>
