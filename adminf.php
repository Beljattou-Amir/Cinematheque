<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Film;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'titre'=> $_POST['nom'],
    'pays'=> $_POST['prenom'],
    'duree'=> $_POST['email'],
    'date_sortie'=> $_POST['date_naiss'],
    'synopsis'=> $_POST['mdp'],
    'type'=> $_POST['type'],
    'critique'=> $_POST['critique'],
);
foreach ($film2 as $item) {
    if($item['titre'] == $_POST['nom']){
        $collection2->updateOne(
            [ 'titre' => $_POST['nom'] ],
            [ '$set' => [ 'pays' => $_POST['prenom']]]
            );
         $collection2->updateOne(
            [ 'titre' => $_POST['nom'] ],
            [ '$set' => [ 'duree' => $_POST['email']]]
            );
        $collection2->updateOne(
            [ 'titre' => $_POST['nom'] ],
            [ '$set' => [ 'date_sortie' => $_POST['date_naiss']]]
            );
        $collection2->updateOne(
            [ 'titre' => $_POST['nom'] ],
             [ '$set' => [ 'synopsis' => $_POST['mdp']]]
             );
         $collection2->updateOne(
             [ 'titre' => $_POST['nom'] ],
             [ '$set' => [ 'type' => $_POST['type']]]
             );
        $collection2->updateOne(
             [ 'titre' => $_POST['nom'] ],
             [ '$set' => [ 'critique' => $_POST['critique']]]
              );
       
        header('Location: admin-film.php');
    }else{
        echo $_POST['test'];
    }
}
}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>