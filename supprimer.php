<?php
/**
 ouverture d'une connexion à la base de donnée
 */
var_dump($toto);
 $objetPdo = new PDO('mysql:host=localhost;dbname=nouvarticle','root','coda');

// preparation de la reqette
$pdoStat = $objetPdo->prepare("DELETE  FROM ID_article WHERE id=:num LIMIT 1");

//LIAISON DU PARAMETTRE NOMMÉ
$pdoStat->bindValue(':num', $_GET['toto'], PDO::PARAM_INT);

//execution de la requette
$executesIsOk =$pdoStat->execute();

if($executesIsOk){
    $message="l'article à été supprimé";
}
else{
    $message = "Échec de la suppression du contact";

};
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>Suppresion</h1>
<p><?= $message ?></p>
</body>
</html>