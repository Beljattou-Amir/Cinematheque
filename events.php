<!DOCTYPE html>
<?php
require 'evenement.php';
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
                           <span class="badge badge-danger badge-counter">8+</span>
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
                           Ma Liste
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
                  <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-3">
                     <h1 class="h5 mb-0 text-gray-900">Events</h1>
                    
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <div class="col-xl-3 col-lg-4">
                        <div class="filters mobile-filters shadow rounded bg-white mb-4 d-none d-block d-md-none">
                           <div class="border-bottom">
                              <a class="h6 font-weight-bold text-dark d-block m-0 p-3" data-toggle="collapse" href="#mobile-filters" role="button" aria-expanded="false" aria-controls="mobile-filters">Filter By <i class="fas fa-angle-down float-right mt-1"></i></a>
                           </div>
                           <div id="mobile-filters" class="filters-body collapse multi-collapse">
                              <div id="accordion">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="filters shadow rounded bg-white mb-3 d-none d-sm-none d-md-block">
                           <div class="filters-header border-bottom p-3">
                              <h6 class="m-0 text-dark">Filtrer par</h6>
                           </div>
                           <div class="filters-body">
                              <div id="accordion">
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-8">
                        <div class="row">
                           <div class="col-xl-4 col-md-6 mb-4">
                              <div class="card e-card shadow border-0">
                                 <a href="events-detail.html">
                                    <div class="m-card-cover">
                                       <img src="img/e1.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body p-0">
                                       <div class="row no-gutters align-items-center">
                                          <div class="col-2 auto py-3 pl-3">
                                             <div class="bg-white rounded text-center">
                                                <h6 class="text-danger mb-0 font-weight-bold"></h6>
                                                <small class="text-muted"></small>
                                             </div>
                                          </div>
                                          <div class="col-10 p-3">
                                             <p class="card-text text-gray-900 mb-1"></p>
                                             <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> </small></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <?php
                              $event = $collection2->find();

                              foreach($event as $item){
                                         
                           ?>
                           <div class="col-xl-4 col-md-6 mb-4">
                              <div class="card e-card shadow border-0">
                                 <a href="events-detail.html">
                                    <div class="m-card-cover">
                                       <img src="img/<?php echo $item['fileName']; ?>" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body p-0">
                                       <div class="row no-gutters align-items-center">
                                          <div class="col-2 auto py-3 pl-3">
                                             <div class="bg-white rounded text-center">
                                                <h6 class="text-danger mb-0 font-weight-bold"><?php echo $item['date_debut']; ?></h6>
                                                <small class="text-muted"></small>
                                             </div>
                                          </div>
                                          <div class="col-10 p-3">
                                             <p class="card-text text-gray-900 mb-1"><?php echo $item['nomE']; ?></p>
                                             <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> <?php echo $item['lieu']; ?></small></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <?php
                              }
                           ?>
                        </div>
                       
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Projet BDD | Made with <i class="fas fa-heart fa-fw text-danger"></i> by <a target="_blank" href="#">Bachelor 2021</a></span>
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