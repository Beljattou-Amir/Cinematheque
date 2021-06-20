<!DOCTYPE html>
<?php
require 'critique.php';
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
                  <div class="row">
                     <div class="col-xl-12 col-lg-12">
                        <div class="cover-pic">
                           <div class="position-absolute bg-white shadow-sm rounded text-center p-2 m-4 love-box">
                              <h6 class="text-gray-900 mb-0 font-weight-bold"><i class="fas fa-heart text-danger"></i> 50%</h6>
                              <small class="text-muted">8,784</small>
                           </div>
                           <img src="img/cover3.jpg" class="img-fluid" alt="...">
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3">
                        <div class="bg-white p-3 widget shadow rounded mb-4">
                           <img src="img/m1.jpg" class="img-fluid rounded" alt="...">
                           <h1 class="h6 mb-0 mt-3 font-weight-bold text-gray-900">Director</h1>
                           <p>Jon Watts</p>
                           <h1 class="h6 mb-0 mt-3 font-weight-bold text-gray-900">Writers</h1>
                           <p>Erik Sommers,Stan Lee,Chris McKenna</p>
                           <h1 class="h6 mb-0 mt-3 font-weight-bold text-gray-900">Cast</h1>
                           <p>Tom Holland,Jake Gyllenhaal,Zendaya</p>
                           <h1 class="h6 mb-0 mt-3 font-weight-bold text-gray-900">Plot</h1>
                           <p class="mb-0">Peter Parker and his friends go on a summer trip to Europe. However, they will hardly be able to rest - Peter.</p>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9">
                        <div class="bg-white info-header shadow rounded mb-4">
                           <div class="row d-flex align-items-center justify-content-between p-3 border-bottom">
                              <div class="col-lg-7 m-b-4">
                                 <h3 class="text-gray-900 mb-0 mt-0 font-weight-bold">The Fate of the Furious <small>2019</small></h3>
                                 <p class="mb-0 text-gray-800"><small class="text-muted"><i class="fas fa-film fa-fw fa-sm mr-1"></i> Action / Adventure / Science Fiction / 3D</small></p>
                              </div>
                              <div class="col-lg-5 text-right">
                                 <a href="#" class="d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-share-alt"></i></a>
                                 <a href="#" class="d-sm-inline-block btn btn-danger shadow-sm"> Add to Watchlist <i class="fas fa-plus fa-sm  ml-1"></i></a>
                              </div>
                           </div>
                           <div class="row d-flex align-items-center justify-content-between py-3 px-4">
                              <div class="col-lg-6 m-b-4">
                                 <p class="mb-0 text-gray-900"><i class="fas fa-money-bill fa-sm fa-fw mr-1"></i> BUDGET - <span class="text-white rounded px-2 py-1 bg-info">$160,000,000</span></p>
                              </div>
                              <div class="col-lg-6 text-right">
                                 <a href="#" class="btn btn-sm btn-primary btn-circle">
                                 <i class="fab fa-facebook-f"></i>
                                 </a>
                                 <a href="#" class="btn btn-sm btn-danger btn-circle">
                                 <i class="fab fa-youtube"></i>
                                 </a>
                                 <a href="#" class="btn btn-sm btn-warning btn-circle">
                                 <i class="fab fa-snapchat-ghost"></i>
                                 </a>
                                 <a href="#" class="btn btn-sm btn-info btn-circle">
                                 <i class="fab fa-twitter"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="bg-white p-3 widget shadow rounded mb-4">
                           <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Summary</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cast
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Videos
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <h5 class="mt-0 mb-3">New Year's Eve on the Waterfront</h5>
                                 <p>Boston Harbor Now in partnership with the Friends of Christopher Columbus Park, the Wharf District Council and the City of Boston is proud to announce the New Year's Eve Midnight Harbor Fireworks! This beloved nearly 40-year old tradition is made possible by the generous support of local waterfront organizations and businesses and the support of the City of Boston and the Office of Mayor Marty Walsh.</p>
                                 <p>Join us as we ring in the New Year with a dazzling display over Boston Harbor. Public viewing is free and available from the Harborwalk of these suggested viewing locations:</p>
                                 <ul>
                                    <li>Christopher Columbus Park, North End</li>
                                    <li>Fan Pier, Seaport District</li>
                                    <li>East Boston Harborwalk</li>
                                 </ul>
                                 <p>The show will begin promptly at midnight.</p>
                                 <p>Register here for a reminder and updates about the harbor fireworks and other waterfront public programs as they become available. Be the first to be notified for popular waterfront New Year's Eve public activities.</p>
								 <p class="mb-2">Register here for a reminder and updates about the harbor fireworks and other waterfront public programs as they become available. Be the first to be notified for popular waterfront New Year's Eve public activities.</p>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                       <h5 class="h6 mt-0 mb-3 font-weight-bold text-gray-900">CAST</h5>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s1.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Carla Gugino</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s2.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Sylvester Stallone</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s3.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Rose Byrne</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s4.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Jason Statham</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                       <h5 class="h6 mt-0 mb-3 font-weight-bold text-gray-900">CREW</h5>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s3.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Rose Byrne</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s4.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Jason Statham</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s1.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Carla Gugino</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s2.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Sylvester Stallone</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                       <h5 class="h6 mt-0 mb-3 font-weight-bold text-gray-900">Support</h5>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s1.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Carla Gugino</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s2.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Sylvester Stallone</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s3.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Rose Byrne</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="artist-list mb-3">
                                          <a class="d-flex align-items-center" href="#">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="img/s4.png" alt="">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">Jason Statham</div>
                                                <div class="small text-gray-500">Acting</div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                       <div class="mb-4">
                                          <iframe width="100%" height="215" src="https://www.youtube.com/embed/uNppTCoYdWI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                       <div class="mb-4">
                                          <iframe width="100%" height="215" src="https://www.youtube.com/embed/XkT6uwHFUKY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                       <div class="mb-4">
                                          <iframe width="100%" height="215" src="https://www.youtube.com/embed/uNppTCoYdWI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                       <div class="mb-4">
                                          <iframe width="100%" height="215" src="https://www.youtube.com/embed/XkT6uwHFUKY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                 <div class="card-body p-0 reviews-card">
                                    <div class="media mb-4">
                                       <img class="d-flex mr-3 rounded-circle" src="img/s1.png" alt="">
                                       <div class="media-body">
                                          <div class="mt-0 mb-1">
                                             <?php
                                             $test = $collection->find();

                                             foreach($test as $item){
                                         
                                             ?>
                                             <span class="h6 mr-2 font-weight-bold text-gray-900"><?php echo $item['nonC']; ?></span> <span><i class="fa fa-calendar"></i> <?php echo $item['emailC']; ?></span>
                                             <div class="stars-rating float-right"> <i class="fa fa-star active"></i>
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  <span class="rounded bg-warning text-dark pl-1 pr-1">5/3</span>
                                             </div>
                                          </div>
                                          <p><?php echo $item['critique']; ?></p>
                                       </div>
                                    </div>
                                    <?php } ?>
                                    <div class="media">
                                       <img class="d-flex mr-3 rounded-circle" src="img/s2.png" alt="">
                                       <div class="media-body">
                                          <div class="mt-0 mb-1">
                                             <span class="h6 mr-2 font-weight-bold text-gray-900">Mark Smith</span> <span><i class="fa fa-calendar"></i> Feb 12, 2018</span>
                                             <div class="stars-rating float-right"> <i class="fa fa-star active"></i>
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  <span class="rounded bg-warning text-dark pl-1 pr-1">5/3</span>
                                             </div>
                                          </div>
                                          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                          <div class="media mt-4">
                                             <img class="d-flex mr-3 rounded-circle" src="img/s3.png" alt="">
                                             <div class="media-body">
                                                <div class="mt-0 mb-1">
                                                   <span class="h6 mr-2 font-weight-bold text-gray-900">Ryan Printz</span> <span><i class="fa fa-calendar"></i> Feb 12, 2018</span>
                                                   <div class="stars-rating float-right"> <i class="fa fa-star active"></i>
                                                      <i class="fa fa-star active"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>  <span class="rounded bg-warning text-dark pl-1 pr-1">5/3</span>
                                                   </div>
                                                </div>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="media mt-4">
                                       <img class="d-flex mr-3 rounded-circle" src="img/s4.png" alt="">
                                       <div class="media-body">
                                          <div class="mt-0 mb-1">
                                             <span class="h6 mr-2 font-weight-bold text-gray-900">Stave Mark</span> <span><i class="fa fa-calendar"></i> Feb 12, 2018</span>
                                             <div class="stars-rating float-right"> <i class="fa fa-star active"></i>
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  <span class="rounded bg-warning text-dark pl-1 pr-1">5/3</span>
                                             </div>
                                          </div>
                                          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="p-4 bg-light rounded mt-4">
                                    <h5 class="card-title mb-4">Leave a Review</h5>
                                    <form action="critique.php" method="post" name="sentMessage">
                                       <div class="row">
                                          <div class="control-group form-group col-lg-4 col-md-4">
                                             <div class="controls">
                                                <label>Your Name <span class="text-danger">*</span></label>
                                                <input type="text" name="nonC" class="form-control" required="">
                                             </div>
                                          </div>
                                          <div class="control-group form-group col-lg-4 col-md-4">
                                             <div class="controls">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <input type="email" name="emailC" class="form-control" required="">
                                             </div>
                                          </div>
                                          <div class="control-group form-group col-lg-4 col-md-4">
                                             <div class="controls">
                                                <label>Rating <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select">
                                                   <option>1 Star</option>
                                                   <option>2 Star</option>
                                                   <option>3 Star</option>
                                                   <option>4 Star</option>
                                                   <option>5 Star</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="control-group form-group">
                                          <div class="controls">
                                             <label>Review <span class="text-danger">*</span></label>
                                             <textarea rows="3" cols="100" name="critique" class="form-control"></textarea>
                                          </div>
                                       </div>
                                       <div class="text-right">
                                          <button type="submit" nam="button" class="btn btn-primary">Envoyer</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
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