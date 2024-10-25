<!doctype html>
<html lang="en">
    <head>
        <title>Accueil</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <body>
        <header>
            <nav class="nav justify-content-center  ">
                <a class="nav-link active" href="#" aria-current="page">Active link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#">Disabled link</a>
            </nav>
        </header>
        <main>
            <div class="container">
                <h1>Recette</h1>
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col"></th>
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
                                        <td><img src=\"img/".$ligne["image"]."\" width=\"120px\" height=\"100px\"/></td>
                                        <td> ".$ligne["nom"]." </td>
                                        <td> ".$ligne["description"]." </td>
                                        <td> ".$ligne["duree"]." min </td>
                                        <td> <a href=\"modifRecette.php?idRecette=".$ligne['id']."\"><img src=\"img/crayon.png\"/></a></td>
                                        <td> <a href=\"suppRecette.php?idRecette=".$ligne['id']."\"><img src=\"img/suppression.png\"/></a></td>
                                    </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div> 
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
         <!-- jQuery cdn script -->
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
       <!-- bootstrap cdn script -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
