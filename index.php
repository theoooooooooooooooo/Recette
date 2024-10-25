<!doctype html>
<html lang="en">
<head>
    <title>Accueil</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="style/styleIndex.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>

<body>
    <header>
        <!-- Example navigation (optional) -->
    </header>
    <main>
        <div class="container">
        <?php
            if (!empty($_GET["Message"])){
                $message = $_GET['Message'];
                if($message == "creer"){
                    echo "<script>alert(\"L'utilisateur a bien été créé\")</script>";
                } else if($message == "modif"){
                    echo "<script>alert(\"L'utilisateur a bien été modifié\")</script>";
                } else if ($message == "supprime") {
                    echo "<script>alert(\"La recette a été supprimée avec succès.\")</script>";
                }
                header("Location: index.php");
            }
        ?>
            <div class="row">
                <div class="col-9"> <h1 class="my-4">Recettes</h1></div>
                <div class="col-3"><a class="btn btn-primary mb-3" href="creerRecette.php" role="button">Nouvelle recette</a></div>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-light table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Durée</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once "db_connexion.php";
                        $sql = "SELECT * FROM Recette";
                        $result = $connexion->query($sql);
                        while($ligne=$result->fetch()){
                            echo "<tr>
                                    <td><img src=\"img/".$ligne["image"]."\" class=\"rounded\" width=\"120px\" height=\"100px\"/></td>
                                    <td>".$ligne["nom"]."</td>
                                    <td>".$ligne["description"]."</td>
                                    <td>".$ligne["duree"]." min</td>
                                    <td>
                                        <a href=\"modifRecette.php?idRecette=".$ligne['id']."\" class=\"btn btn-sm btn-warning\">
                                            <img src=\"img/crayon.png\" width=\"20px\" />
                                        </a>
                                    </td>
                                    <td>
                                        <a href=\"suppRecette.php?idRecette=".$ligne['id']."\" class=\"btn btn-sm btn-danger\">
                                            <img src=\"img/suppression.png\" width=\"20px\" />
                                        </a>
                                    </td>
                                </tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </main>
    <footer>
        <!-- Place footer here -->
    </footer>

    <!-- jQuery cdn script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <!-- Bootstrap cdn script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
