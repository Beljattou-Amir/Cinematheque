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
               <a class="nav-link" href="movies.php">
               <i class="fas fa-fw fa-film"></i>
               <span>Movies</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="events.html">
               <i class="fas fa-fw fa-glass-cheers"></i>
               <span>Events</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="people.html">
               <i class="fas fa-fw fa-users"></i>
               <span>People</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="sports.html">
               <i class="fas fa-fw fa-futbol"></i>
               <span>Sports</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">Extra</div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-fw fa-pager"></i>
               <span>Pages</span>
               </a>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">All Pages</h6>
                     <a class="collapse-item" href="movies.html">Movies</a>
                     <a class="collapse-item" href="movies-detail.html">Movie Detail</a>
                     <a class="collapse-item" href="events.html">Events</a>
                     <a class="collapse-item" href="events-detail.html">Event Detail</a>
                     <a class="collapse-item" href="people.html">People</a>
                     <a class="collapse-item" href="people-detail.html">People Detail</a>
                     <a class="collapse-item" href="sports.html">Sports</a>
                     <a class="collapse-item" href="sports-detail.html">Sport Detail</a>
                  </div>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="offers.html">
               <i class="fas fa-fw fa-fire"></i>
               <span>Offers</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
               <i class="fas fa-fw fa-clone"></i>
               <span>Extra Pages</span>
               </a>
               <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Login Screens:</h6>
                     <a class="collapse-item" href="login.html">Login</a>
                     <a class="collapse-item" href="register.html">Register</a>
                     <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                     <div class="collapse-divider"></div>
                     <h6 class="collapse-header">Other Pages:</h6>
                     <a class="collapse-item" href="404.html">404 Page</a>
                     <a class="collapse-item" href="blank.html">Blank Page</a>
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
                           <span class="badge badge-danger bg-gradient-danger">NEW</span>
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
                           <h6 class="dropdown-header">
                              Alerts
                           </h6>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="mr-3">
                                 <div class="icon-circle bg-primary text-white">
                                    KN
                                 </div>
                              </div>
                              <div>
                                 <div class="small text-gray-500">December 12, 2019</div>
                                 <span class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                 </span>
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="dropdown-list-image mr-3">
                                 <img class="rounded-circle w-60" src="img/s1.png" alt="">
                                 <div class="status-indicator bg-success"></div>
                              </div>
                              <div>
                                 <div class="text-truncate">Duis vel est sit amet ipsum egestas efficitur.</div>
                                 <div class="small text-gray-500">Gurdeep Osahan · 58m</div>
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="dropdown-list-image mr-3">
                                 <img class="rounded-circle w-60" src="img/s2.png" alt="">
                                 <div class="status-indicator"></div>
                              </div>
                              <div>
                                 <div class="text-truncate">Pellentesque euismod diam sit amet nibh molestie, imperdiet feugiat mi feugiat.</div>
                                 <div class="small text-gray-500">Jae Chun · 1d</div>
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="dropdown-list-image mr-3">
                                 <img class="rounded-circle w-60" src="img/s3.png" alt="">
                                 <div class="status-indicator bg-warning"></div>
                              </div>
                              <div>
                                 <div class="text-truncate">Quisque ac justo bibendum nunc fringilla pharetra nec sit amet mauris.</div>
                                 <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="mr-3">
                                 <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                 </div>
                              </div>
                              <div>
                                 <div class="small text-gray-500">December 7, 2019</div>
                                 Sed aliquet nibh nec odio congue, in condimentum massa dapibus.
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="mr-3">
                                 <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                 </div>
                              </div>
                              <div>
                                 <div class="small text-gray-500">December 2, 2019</div>
                                 Pellentesque sit amet nunc consectetur, porta sapien a, bibendum dolor.
                              </div>
                           </a>
                           <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                     </li>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Askbootstrap</span>
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
                           Your Lists
                           </a>
                           <a class="dropdown-item" href="profile.html">
                           <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                           Account Settings
                           </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                           </a>
                        </div>
                     </li>
                  </ul>
               </nav>
               <!-- End of Topbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <div class="osahan-slider">
                     <div class="osahan-slider-item"><img src="img/slider1.jpg" class="img-fluid rounded" alt="..."></div>
                     <div class="osahan-slider-item"><img src="img/slider2.jpg" class="img-fluid rounded" alt="..."></div>
                     <div class="osahan-slider-item"><img src="img/slider3.jpg" class="img-fluid rounded" alt="..."></div>
                  </div>
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-3">
                     <h1 class="h5 mb-0 text-gray-900">Movies</h1>
                     <a href="movies.html" class="d-none d-sm-inline-block text-xs">View All <i class="fas fa-eye fa-sm"></i></a>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card m-card shadow border-0">
                           <a href="movies-detail.html">
                              <div class="m-card-cover">
                                 <div class="position-absolute bg-white shadow-sm rounded text-center p-2 m-2 love-box">
                                    <h6 class="text-gray-900 mb-0 font-weight-bold"><i class="fas fa-heart text-danger"></i> 88%</h6>
                                    <small class="text-muted">23,421</small>
                                 </div>
                                 <img src="img/m1.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-3">
                                 <h5 class="card-title text-gray-900 mb-1">Jumanji: The Next Level</h5>
                                 <p class="card-text"><small class="text-muted">English</small> <small class="text-danger"><i class="fas fa-calendar-alt fa-sm text-gray-400"></i> 22 AUG</small> </p>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card m-card shadow border-0">
                           <a href="movies-detail.html">
                              <div class="m-card-cover">
                                 <div class="position-absolute bg-white shadow-sm rounded text-center p-2 m-2 love-box">
                                    <h6 class="text-gray-900 mb-0 font-weight-bold"><i class="fas fa-heart text-danger"></i> 50%</h6>
                                    <small class="text-muted">8,784</small>
                                 </div>
                                 <img src="img/m2.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-3">
                                 <h5 class="card-title text-gray-900 mb-1">Gemini Man</h5>
                                 <p class="card-text"><small class="text-muted">English</small> <small class="text-danger"><i class="fas fa-calendar-alt fa-sm text-gray-400"></i> 22 AUG</small> </p>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card m-card shadow border-0">
                           <a href="movies-detail.html">
                              <div class="m-card-cover">
                                 <div class="position-absolute bg-white shadow-sm rounded text-center p-2 m-2 love-box">
                                    <h6 class="text-gray-900 mb-0 font-weight-bold"><i class="fas fa-heart text-danger"></i> 20%</h6>
                                    <small class="text-muted">69,123</small>
                                 </div>
                                 <img src="img/m3.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-3">
                                 <h5 class="card-title text-gray-900 mb-1">The Current War</h5>
                                 <p class="card-text"><small class="text-muted">English</small> <small class="text-danger"><i class="fas fa-calendar-alt fa-sm text-gray-400"></i> 22 AUG</small> </p>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card m-card shadow border-0">
                           <a href="movies-detail.html">
                              <div class="m-card-cover">
                                 <div class="position-absolute bg-white shadow-sm rounded text-center p-2 m-2 love-box">
                                    <h6 class="text-gray-900 mb-0 font-weight-bold"><i class="fas fa-heart text-danger"></i> 74%</h6>
                                    <small class="text-muted">88,865</small>
                                 </div>
                                 <img src="img/m4.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-3">
                                 <h5 class="card-title text-gray-900 mb-1">Charlie's Angels</h5>
                                 <p class="card-text"><small class="text-muted">English</small> <small class="text-danger"><i class="fas fa-calendar-alt fa-sm text-gray-400"></i> 22 AUG</small> </p>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mt-1 mb-3">
                     <h1 class="h5 mb-0 text-gray-900">Collections</h1>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <div class="col-xl-12 col-md-12 mb-4">
                        <div class="collections-slider">
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c1.jpg" class="img-fluid" alt="..."></a>
                           </div>
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c2.jpg" class="img-fluid" alt="..."></a>
                           </div>
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c3.jpg" class="img-fluid" alt="..."></a>
                           </div>
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c4.jpg" class="img-fluid" alt="..."></a>
                           </div>
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c5.jpg" class="img-fluid" alt="..."></a>
                           </div>
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c2.jpg" class="img-fluid" alt="..."></a>
                           </div>
                           <div class="card c-card shadow border-0 overflow-hidden">
                              <a href="#"><img src="img/c3.jpg" class="img-fluid" alt="..."></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mt-1 mb-3">
                     <h1 class="h5 mb-0 text-gray-900">Events</h1>
                     <a href="events.html" class="d-none d-sm-inline-block text-xs">View All <i class="fas fa-eye fa-sm"></i></a>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="events-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/e1.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">07</h6>
                                          <small class="text-muted">OCT</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">Glasgow International Comedy Festival</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> Glasgow, Scotland</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="events-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/e2.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">10</h6>
                                          <small class="text-muted">OCT</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">Vancouver Fashion Week</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> Vancouver, Canada</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="events-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/e3.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">15</h6>
                                          <small class="text-muted">OCT</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">DC Environmental Film Festival</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> Washington DC, USA</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="events-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/e4.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">22</h6>
                                          <small class="text-muted">OCT</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">Cape Town International Jazz Festival</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> Cape Town, South Africa</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mt-1 mb-3">
                     <h1 class="h5 mb-0 text-gray-900">Sports</h1>
                     <a href="sports.html" class="d-none d-sm-inline-block text-xs">View All <i class="fas fa-eye fa-sm"></i></a>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="sports-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/s1.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">25</h6>
                                          <small class="text-muted">OCT</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">The FIFA World Cup</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> Glasgow, Scotland</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="sports-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/s2.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">28</h6>
                                          <small class="text-muted">OCT</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">The Olympic Games</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> United States</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="sports-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/s3.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">12</h6>
                                          <small class="text-muted">NOV</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">The 24 Hours of Le Mans</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> France</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card e-card shadow border-0">
                           <a href="sports-detail.html">
                              <div class="m-card-cover">
                                 <img src="img/s4.jpg" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body p-0">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-2 auto py-3 pl-3">
                                       <div class="bg-white rounded text-center">
                                          <h6 class="text-danger mb-0 font-weight-bold">21</h6>
                                          <small class="text-muted">NOV</small>
                                       </div>
                                    </div>
                                    <div class="col-10 p-3">
                                       <p class="card-text text-gray-900 mb-1">The Super Bowl</p>
                                       <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt fa-sm ml-1"></i> United States</small></p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="text-center mt-1 mb-4">
                     <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
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
                     <span>Copyright &copy; Bookishow 2019 | Made with <i class="fas fa-heart fa-fw text-danger"></i> by <a target="_blank" href="#">Askbootstrap</a></span>
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
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
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