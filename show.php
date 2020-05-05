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

?>

<body>

    <header>
        <h2 class="display-4 text-center m-4">JeanGren Immobilier</h2>


        <a class="btn btn-danger btn-lg m-4" href="show.php" role="button">Nos logements disponibles!</a>



    </header>

    <div class="album py-5 bg-light">
        <div class="container">



            <div class="row">

                <div class="card-deck col-md-8 p-4 m-4 text-center">
                    <div class="card">
                        <?php foreach ($logements as $logement) : ?>
                            <h5 class="card-text"><?= $logement['titre'] ?></h5>
                            <p class="card-text"><?= "Situé à " . $logement['ville'] . " Code postal " . $logement['cp'] ?></p>
                            <p class="card-text"><?= "Surface " . $logement['surface'] . "m2". " Prix " . $logement['prix'] . "€" ?></p>
                            <img src="img/<?= $logement['img_src'] ?>" class="card-img-top" alt="log">
                            <p>Contacter notre agence de <?= $logement['ville'] ?> pour plus de détails<p>

                                <?php endforeach ?>

                    </div>
                </div>




            </div>
        </div>
    </div>
    </div>


    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="index.php">back home</a>
            </p>
        </div>
            
    </footer>









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>