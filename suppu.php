<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Utilisateur;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'nom'=> $_POST['test'],
);
foreach ($film2 as $item) {
    if($item['nom'] == $_POST['test']){
        $collection2->deleteOne($supp);
        header('Location: admin-utilisateur.php');
    }else{
        echo $_POST['test'];
    }
}
}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>