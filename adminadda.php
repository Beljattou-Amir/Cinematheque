<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Acteur;


if($_POST) {
$utilisateur = $collection2->find();
$data= array(
    'nomA'=> $_POST['nom'],
    'prenomA'=> $_POST['prenom'],
    'nationalite'=> $_POST['email'],
    'date_naissance'=> $_POST['date_naiss'],
    'role'=> $_POST['mdp'],
    'prix'=> $_POST['prix'],
    'biographie'=> $_POST['mdp'],
);


$result = $collection2->insertOne($data);
if($result->getInsertedCount()>0) {
    header('Location: admin-acteur.php'); 
} else {
    echo "Failed to create Article";
}

}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>