<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Acteur;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'nomA'=> $_POST['nom'],
    'prenomA'=> $_POST['prenom'],
    'nationalite'=> $_POST['email'],
    'date_naissance'=> $_POST['date_naiss'],
    'role'=> $_POST['mdp'],
    'prix'=> $_POST['prix'],
    'biographie'=> $_POST['mdp'],
);
foreach ($film2 as $item) {
    if($item['nomA'] == $_POST['nom']){
        $collection2->updateOne(
            [ 'nomA' => $_POST['nom'] ],
            [ '$set' => [ 'prenomA' => $_POST['prenom']]]
            );
         $collection2->updateOne(
            [ 'nomA' => $_POST['nom'] ],
            [ '$set' => [ 'nationalite' => $_POST['email']]]
            );
        $collection2->updateOne(
            [ 'nomA' => $_POST['nom'] ],
            [ '$set' => [ 'date_naissance' => $_POST['date_naiss']]]
            );
        $collection2->updateOne(
            [ 'nomA' => $_POST['nom'] ],
             [ '$set' => [ 'role' => $_POST['mdp']]]
             );
        $collection2->updateOne(
             [ 'nomA' => $_POST['nom'] ],
              [ '$set' => [ 'prix' => $_POST['prix']]]
              );
         $collection2->updateOne(
             [ 'nomA' => $_POST['nom'] ],
              [ '$set' => [ 'biographie' => $_POST['biographie']]]
             );
        header('Location: admin-acteur.php');
    }else{
        header('Location: movies.php');
    }
}
}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>