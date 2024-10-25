<?php
    require_once "../db_connexion.php";
    $id = $_POST["idRecette"];
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $duree = $_POST["duree"];
    $image = $_POST["image"];

    $sql = "UPDATE Recette SET nom = '$nom', description = '$description', duree = $duree, image = '$image' WHERE id = $id";
    $requet = $connexion->exec($sql);
    header("Location: ../index.php?Message=modif");
?>