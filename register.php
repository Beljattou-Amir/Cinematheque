<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="img/logo-icon.png">
      <title>Bookishow - Movies, Events, Sports Website HTML Template</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.min.css" rel="stylesheet">
   </head>
   <body class="bg-gradient-primary">
      <div class="container">
         <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                  <div class="col-lg-7">
                     <div class="p-5">
                        <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Inscrivez vous!</h1>
                        </div>
                        <?php
                        require_once "vendor/autoload.php";
                        $client = new MongoDB\Client("mongodb+srv://julien_parrot:azerty1234@cluster0.hsa5d.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");
                        $dataBase 	= $client->selectDatabase('Cinema');
                        $collection = $dataBase->selectCollection('Utilisateur');
                        if(isset($_POST['create'])) {
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
                              header('Location: login.php'); 
                           } else {
                              
                           }
                        }
                        ?>
                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                           <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                 <input type="text" name="nom" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                              </div>
                              <div class="col-sm-6">
                                 <input type="text" name="prenom"class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                              </div>
                           </div>
                           <div class="form-group">
                              <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                 <input type="password"  name="mdp" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                              </div>
                              <div class="col-sm-6">
                                 <input type="date" name="date_naiss" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                              </div>
                            
                           </div>
                           <div class="form-group" id="fileInput">
						         <label class="col-md-12" for="file">Selectionner votre avatar</label>  
						         <div class="col-md-12">
						          <input id="file" name="file" type="file" placeholder="" class="form-control input-md">
						         </div>
						         </div>
                           <input type="hidden" name="aid" id="aid">
                           <a href="login.html" class="btn btn-primary btn-user btn-block">
                           <button id="create" name="create" class="btn btn-primary">S'inscrire</button>
                           </a>
                           <hr>
                     </form>
                      
                        <hr>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/osahan.min.js"></script>
</html>