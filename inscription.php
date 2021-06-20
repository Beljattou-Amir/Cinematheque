<?php
require_once "vendor/autoload.php";
$client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
$dataBase 	= $client->selectDatabase('Cinema');
$collection = $dataBase->selectCollection('Utilisateur');

    $data 		= [
        'nom'=> $_POST['nom'],
        'prenom'=> $_POST['prenom'],
        'email'=> $_POST['email'],
        'mdp'=> $_POST['mdp'],
        'date_naiss'=> $_POST['date_naiss'],
        
    
    ];

    if($_FILES['file']) {
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$_FILES['file']['name'])) {
            $data['fileName'] = $_FILES['file']['name'];
        } else {
            echo "Failed to upload file.";
        }
    }

    $result = $collection->insertOne($data);
    if($result->getInsertedCount()>0) {
        echo "Article is created..";
    } else {
        echo "Failed to create Article";
    }

?>

