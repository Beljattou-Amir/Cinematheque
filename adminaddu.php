<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Utilisateur;


if($_POST) {
$utilisateur = $collection2->find();
$data= array(
    'nom'=> $_POST['nom'],
    'prenom'=> $_POST['prenom'],
    'email'=> $_POST['email'],
    'date_naiss'=> $_POST['date_naiss'],
    'mdp'=> $_POST['mdp'],
);


$result = $collection2->insertOne($data);
if($result->getInsertedCount()>0) {
    header('Location: admin-utilisateur.php'); 
} else {
    echo "Failed to create Article";
}

}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>