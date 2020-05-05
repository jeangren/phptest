<!doctype html>
<html lang="en">

<head>
    <title>IMMOBILIER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$request = "SELECT * FROM immobilier.logement";
$response = $bdd->query($request);
$logements = $response->fetchAll(PDO::FETCH_ASSOC);
var_dump($logements);
?>

<body>

    <header>

        <h2 class="display-4 pt-5 text-center">JeanGren Immobilier</h2>

    </header>
    
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <form action="create.php" method="post" enctype="multipart/form-data">
                            <!-- sont : titre, adresse, ville, code postal, surface, prix, type -->
                            <div class="form-group">
                                <h5>Renseignez les détails du logmement</h5>
                                <label for="titre">Titre</label>
                                <input name="titre" type="text" class="form-control" placeholder="titre" />
                                <label for="adresse">Adresse</label>
                                <input name="adresse" type="text" class="form-control" placeholder="adresse" />
                                <label for="ville">Ville</label>
                                <input name="ville" type="text" class="form-control" placeholder="ville" />
                                <label for="codepostal">Code postal</label>
                                <input name="codepostal" type="number" class="form-control" placeholder="69009" />
                                <label for="surface">Surface (en m2)</label>
                                <input name="surface" type="number" class="form-control" placeholder="120" />
                                <label for="prix">Prix (en €)</label>
                                <input name="prix" type="number" class="form-control" placeholder="ex : 250000" />
                                <label for="description">Description du bien</label>
                                <input name="description" type="text" class="form-control" placeholder="description..." />
                            </div>
                            <div class="form-group">
                                Photo du bien (max 1MO):<br />
                                <input type="file" name="monfichier" /><br />
                            </div>
                            <input type="submit" class="btn btn-primary" value="Envoyer">
                        </form>
                       
                        
                       
                       
                        <div class="card-deck col-md-3 m-4">
                <div class="card">
                <?php foreach ($logements as $logement) : ?>
                        <p class="card-text"><?= "by ". $logement['titre']?></p>
                        <img src="img/<?=$logement['img_src']?>" class="card-img-top" alt="log">
                        <?php endforeach ?>
         
                    </div>
                </div>
            </div>
                        

                    </div>
                </div>
            </div>
        </div>












                        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>