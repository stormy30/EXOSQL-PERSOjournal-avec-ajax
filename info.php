<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>infoarticle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <!--<img class="col-sm-4 col-sm-offset-4" src="./images/logo2.png" alt="">-->
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.html">Ajouter un nouvel article</a></li>
            <li><a href="info.php">Liste des articles</a></li>
        </ul>
    </nav>

</header>
<section class="articlerediges">
<h2>LISTE DES ARTICLES</h2>



    <?php
    include("connection.php");
//
    $req = $pdo->prepare("SELECT * FROM listearticle");
    $req->execute();
    $req1 = $req->fetchAll();
//    var_dump($req1);
    foreach ($req1 as $value) {
//
        echo '<h3>'.$value->titre.'</h3><br>';
        echo '<img src=./uploads/'.$value->image.'>';
        echo '<p>'.$value->article.'</p><a  href="supprimer.php?$ID='.$value->ID.'">supprimer article</a>';


        echo '<p> Posté le : '.$value->date.'</p>';

           }
    ?>

</section>

</body>
</html>





