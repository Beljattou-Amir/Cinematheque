<?php
                        require_once "vendor/autoload.php";
                        $client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
                        $dataBase 	= $client->selectDatabase('Cinema');
                        $collection = $dataBase->selectCollection('Film');
                        if(isset($_POST['create'])) {
                           $data 		= [
                            'titre'=> $_POST['nom'],
                            'pays'=> $_POST['prenom'],
                            'durée'=> $_POST['email'],
                            'date_sortie'=> $_POST['date_naiss'],
                            'synopsis'=> $_POST['mdp'],
                            'type'=> $_POST['type'],
                            'critique'=> $_POST['critique'],
                         
                              
                           
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
                              header('Location: admin-film.php'); 
                           } else {
                              
                           }
                        }
                        ?>