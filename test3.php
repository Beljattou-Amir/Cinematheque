<?php
                        require_once "vendor/autoload.php";
                        $client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
                        $dataBase 	= $client->selectDatabase('Cinema');
                        $collection = $dataBase->selectCollection('Evenement');
                        if(isset($_POST['create'])) {
                           $data 		= [
                            'nomE'=> $_POST['nom'],
                            'date_debut'=> $_POST['prenom'],
                            'date_fin'=> $_POST['email'],
                            'lieu'=> $_POST['date_naiss'],
                            'commentaire'=> $_POST['mdp'],
                         
                              
                           
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
                              header('Location: admin-evenement.php'); 
                           } else {
                              
                           }
                        }
                    ?>