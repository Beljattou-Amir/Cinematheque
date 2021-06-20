<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection2 = $client->Cinema->Film;


if($_POST) {
$film2 = $collection2->find();
$supp= array(
    'titre'=> $_POST['test'],
);
foreach ($film2 as $item) {
    if($item['titre'] == $_POST['test']){
        $collection2->deleteOne($supp);
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