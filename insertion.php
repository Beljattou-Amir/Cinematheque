<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection = $client->Cinema->Utilisateur;
$collection2 = $client->Cinema->Film;
if($_POST) {
$insert= array(
    'nom'=> $_POST['nom'],
    'prenom'=> $_POST['prenom'],
    'email'=> $_POST['email'],
    'mdp'=> $_POST['mdp'],
    'date_naiss'=> $_POST['date_naiss'],
);

if($collection->insertOne($insert))
{
    echo"données rentré";

    $test = $collection2->find();

    foreach($test as $item){
    echo $item['titre'];
}
}else{
    echo"problème";
}
}
else{
    echo "pas de donnée ";
}

/*if($_POST) {
$test2 = $collection->find();

foreach ($test2 as $item) {
    if($item['nom'] == $_POST['nom'] && $item['prenom'] == $_POST['prenom']){
        echo "bien vu chakal";
    }
}
}
*/
?>