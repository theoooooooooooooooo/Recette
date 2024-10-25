<?php
    require_once "db_connexion.php";
    $id = $_GET['idRecette'];
    $sql = "SELECT * FROM Recette WHERE id = $id";
    $result = $connexion->query($sql);
    $ligne=$result->fetch();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Modification Recette</title>
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
                <form action="control/modif.php" method="post">
                <input type="hidden" name="idRecette" value="<?php echo $ligne["id"] ?>" /><br>
                    <div class="mb-3">
                        <label for="" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" id="" value="<?php echo $ligne["nom"] ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="" value="<?php echo $ligne["description"] ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Durée</label>
                        <input type="text" class="form-control"name="duree" id="" value="<?php echo $ligne["duree"] ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Choisir une image</label>
                        <input type="file" class="form-control" name="image" id="" value="<?php echo $ligne["image"] ?>"/>
                    </div>
                    <button type="submit" class="btn btn-succees">Enregistrer</button>
                </form>
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
