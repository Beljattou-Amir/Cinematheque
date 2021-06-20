<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$collection = $client->Cinema->Critique;
if($_POST) {
$insert= array(
    'nonC'=> $_POST['nonC'],
    'emailC'=> $_POST['emailC'],
    'critique'=> $_POST['critique'],
);

if($collection->insertOne($insert))
{
    header('Location: index.php');  
}else{
    header('Location: 404.php'); 
}
}
?>