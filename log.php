<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection = $client->Cinema->Utilisateur;


if($_POST) {
$test2 = $collection->find();

foreach ($test2 as $item) {
    if($item['email'] == $_POST['email'] && $item['mdp'] == $_POST['mdp']){
        header('Location: index.php');  
    }else{
   
    }
}
}

?>