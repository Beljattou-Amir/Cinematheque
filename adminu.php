<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Utilisateur;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'nom'=> $_POST['nom'],
    'prenom'=> $_POST['prenom'],
    'email'=> $_POST['email'],
    'date_naiss'=> $_POST['date_naiss'],
    'mdp'=> $_POST['mdp'],
);
foreach ($film2 as $item) {
    if($item['nom'] == $_POST['nom']){
        $collection2->updateOne(
            [ 'nom' => $_POST['nom'] ],
            [ '$set' => [ 'prenom' => $_POST['prenom']]]
            );
         $collection2->updateOne(
            [ 'nom' => $_POST['nom'] ],
            [ '$set' => [ 'email' => $_POST['email']]]
            );
        $collection2->updateOne(
            [ 'nom' => $_POST['nom'] ],
            [ '$set' => [ 'date_naiss' => $_POST['date_naiss']]]
            );
        $collection2->updateOne(
            [ 'nom' => $_POST['nom'] ],
             [ '$set' => [ 'mdp' => $_POST['mdp']]]
             );
        header('Location: admin-utilisateur.php');
    }else{
        header('Location: movies.php');
    }
}
}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>