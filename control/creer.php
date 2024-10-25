<?php
    require_once "../db_connexion.php";
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $duree = $_POST["duree"];
    $image = $_POST["image"];

    $sql = "INSERT INTO Recette (nom, description, duree, image) VALUES ('$nom', '$description', $duree, '$image')";
    if($connexion->exec($sql)){
        header("Location: ../index.php?Message=creer");
    } else {
        echo "Erreur lors de la modification";
    }
?>