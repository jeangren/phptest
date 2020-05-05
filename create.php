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

$request = "INSERT INTO immobilier.logement (titre, adresse, ville, codepostal, surface, prix, description, img_src)
            VALUES (:titre, :adresse, :ville, :codepostal, :surface, :prix, :description, :img_src)";

$response = $bdd->prepare($request);

$response->execute([
    'titre'                 => $_POST['titre'],
    'adresse'               => $_POST['adresse'],
    'ville'                 => $_POST['ville'],
    'codepostal'            => $_POST['codepostal'],
    'surface'               => $_POST['surface'],
    'prix'                  => $_POST['prix'],
    'description'           => $_POST['description'],
    'img_src'               => $_FILES['monfichier']['name'],

]);
?>

<body>
<p>ok</p>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>


<div class="container">
   