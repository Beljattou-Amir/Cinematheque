<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Evenement;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'nomE'=> $_POST['nom'],
    'date_debut'=> $_POST['prenom'],
    'date_fin'=> $_POST['email'],
    'lieu'=> $_POST['date_naiss'],
    'commentaire'=> $_POST['mdp'],
);
foreach ($film2 as $item) {
    if($item['nomE'] == $_POST['nom']){
        $collection2->updateOne(
            [ 'nomE' => $_POST['nom'] ],
            [ '$set' => [ 'date_debut' => $_POST['prenom']]]
            );
         $collection2->updateOne(
            [ 'nomE' => $_POST['nom'] ],
            [ '$set' => [ 'date_fin' => $_POST['email']]]
            );
        $collection2->updateOne(
            [ 'nomE' => $_POST['nom'] ],
            [ '$set' => [ 'lieu' => $_POST['date_naiss']]]
            );
        $collection2->updateOne(
            [ 'nomE' => $_POST['nom'] ],
             [ '$set' => [ 'commentaire' => $_POST['mdp']]]
             );
       
        header('Location: admin-evenement.php');
    }else{
        echo $_POST['nomE'];
    }
}
}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>