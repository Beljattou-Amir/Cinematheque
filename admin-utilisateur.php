<!DOCTYPE html>
<?php
require 'adminu.php';
require 'adminaddu.php';
require 'suppu.php';

?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="img/logo-icon.png">
      <title>Bookishow - Movies, Events, Sports Website HTML Template</title>
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon">
                  <img src="img/logo-icon.png" alt="">
               </div>
               <div class="sidebar-brand-text mx-3"><img src="img/logo.png" alt=""></div>
            </a>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
               <a class="nav-link" href="movies.html">
               <i class="fas fa-fw fa-film"></i>
               <span>Films</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="events.html">
               <i class="fas fa-fw fa-glass-cheers"></i>
               <span>Evénements</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="people.html">
               <i class="fas fa-fw fa-users"></i>
               <span>Acteurs</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">Admin</div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-fw fa-pager"></i>
               <span>Pages</span>
               </a>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Pages</h6>
                     <a class="collapse-item" href="admin-utilisateur.html">Utilisateurs</a>
                     <a class="collapse-item" href="admin-acteurs.html">Acteurs</a>
                     <a class="collapse-item" href="admin-evenements.html">Evenements</a>
                     
                  </div>
               </div>
            </li>
           
         </ul>
         <!-- End of Sidebar -->
         
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-dark topbar mb-4 pl-0 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
                     <div class="input-group">
                        <input type="text" class="form-control bg-white border-0 small" placeholder="Search for Movies, Events, Plays, Sports and Activities..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <button class="btn bg-white" type="button">
                           <i class="fas fa-search fa-sm"></i>
                           </button>
                        </div>
                     </div>
                  </form>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                           <form class="form-inline mr-auto w-100 navbar-search">
                              <div class="input-group">
                                 <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </li>
                     <!-- Nav Item - Alerts -->
                     <li class="nav-item no-arrow mx-1">
                        <a class="nav-link" href="offers.html">
                           <i class="fas fa-fire fa-fw"></i>
                           <!-- Counter - Alerts -->
                           <span class="badge badge-danger bg-gradient-danger">Nouveauté</span>
                        </a>
                     </li>
                     <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-bell fa-fw"></i>
                           <!-- Counter - Alerts -->
                           
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                          
                        </div>
                     </li>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Profile</span>
                        <img class="img-profile rounded-circle" src="img/s4.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="profile.html">
                           <i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profile
                           </a>
                           <a class="dropdown-item" href="profile.html">
                           <i class="fas fa-heart fa-sm fa-fw mr-2 text-gray-400"></i>
                           Watchlist
                           </a>
                           <a class="dropdown-item" href="profile.html">
                           <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Ma liste
                           </a>
                           <a class="dropdown-item" href="profile.html">
                           <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                           Paramétres
                           </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Déconnection
                           </a>
                        </div>
                     </li>
                  </ul>
               </nav>
               <!-- End of Topbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <div >
                  <!-- class="d-sm-flex align-items-center justify-content-between mt-4 mb-3"> -->
                     <h1>Utilisateurs</h1>
                    <!-- class="h5 mb-0 text-gray-900" -->
                    
                        <table border="1">
                           <tr>
                              
                              <td>Nom Utilisateur</td>
                              <td>Prenom Utilisateur</td>
                              <td>Date de naissance</td>
                              <td>Mail</td>
                              <td>Mot de passe</td>
                              
                              
                        
                        
                           </tr>
                           <?php
                              $utilisateur = $collection2->find();

                              foreach($utilisateur as $item){
                                         
                           ?>
                           <tr>
                              
                              <td><?php echo $item['nom']; ?></td>
                              <td><?php echo $item['prenom']; ?></td>
                              <td><?php echo $item['email']; ?></td>
                              <td><?php echo $item['date_naiss']; ?></td>
                              <td><?php echo $item['mdp']; ?></td>
                              
 
                           </tr>
                           <?php
                              }
                           ?>
                           <br>
                           
                           <form action="adminaddu.php" method="post" method="post">
                           <input required type="text" name="nom" value=" ">
                           <input required type="text" name="prenom" value=" ">
                           <input required type="text" name="email" value=" ">
                           <input required type="date" name="date_naiss" value=" ">
                           <input required type="text" name="mdp" value=" ">
                           <button type="submit" name="button">Ajouter</button>
                           
                            </form>
                            <form method="post" action="suppu.php">
                            <select name="test">
                            <?php
                              $utilisateur2 = $collection2->find();

                              foreach($utilisateur2 as $item){
                                         
                           ?>
                                <option value="<?php echo $item['nom']; ?>"><?php echo $item['nom']; ?></option>

                                <?php
                              }
                           ?>
                                
                            </select>
                            <button type="submit" name="button">Supprimer</button>
                            </form>
                            <form action="adminu.php" method="post" method="post">
                           <input required type="text" name="nom" value=" ">
                           <input required type="text" name="prenom" value=" ">
                           <input required type="text" name="email" value=" ">
                           <input required type="date" name="date_naiss" value=" ">
                           <input required type="text" name="mdp" value=" ">
                           <button type="submit" name="button">Modifier</button>
                           
                            </form>
                  </div>
                  
               <!-- /.container-fluid -->

               
              
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Projet BDD | Made with <i class="fas fa-heart fa-fw text-danger"></i> by <a target="_blank">Bachelor 2021</a></span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
       <!-- Scroll to Top Button-->
       <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
         </a>
         <!-- Logout Modal-->
         <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Prêt a partir?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">Selectionner "Se Déconnecter" si vous voulez fermer votre session actuelle.</div>
                  <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                     <a class="btn btn-primary" href="login.html">Se Déconnecter</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Bootstrap core JavaScript-->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         <!-- Core plugin JavaScript-->
         <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
         <!-- slick Slider JS-->
         <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
         <!-- Custom scripts for all pages-->
         <script src="js/osahan.min.js"></script>
   </body>
</html>