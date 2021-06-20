<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Film;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'titre'=> $_POST['titre'],
);
foreach ($film2 as $item) {
    if($item['titre'] == $_POST['titre']){
        $collection2->deleteOne($supp);
    }else{
        header('Location: movies.php');
    }
}
}
/*$collection2->deleteOne($supp);
header('Location: movies.php');é
*/
?>