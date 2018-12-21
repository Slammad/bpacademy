<?php
 include 'partials/adminhead.inc.php';
?>
 <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10">
                            <img src=""class="light-logo" />  
                        </b>
                        <span class="logo-text">
                             <img src=""  class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                       
                        
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                
                    <ul class="navbar-nav float-right">
                      
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
    
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
  
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?dashboard=dashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?banner=banner.php" aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu">Banner/Slider</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">FrontEnd Settings </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="dashboard.php?editsite=editsite.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Home Settings</span></a></li>
                                <li class="sidebar-item"><a href="dashboard.php?contents=contents.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Contents</span></a></li>
                                <li class="sidebar-item"><a href="dashboard.php?news=news.php" class="sidebar-link"><i class="mdi mdi-receipt"></i><span class="hide-menu">News</span></a></li>
                                <li class="sidebar-item"><a href="dashboard.php?fees=fees.php" class="sidebar-link"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Fees</span></a></li>
                                <li class="sidebar-item"><a href="asd" class="sidebar-link"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Events</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?gallery=gallery.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Gallery</span></a></li>
                        
                       
                    </ul>
                </nav>
            </div>
        </aside>
       
        <div class="page-wrapper">
          
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
     
            <div class="container-fluid">
                <?php

                        include 'calls/mainbox.php';
                        include 'calls/editsite.php';
                        include 'calls/news.php';
                        include 'calls/contents.php';
                        include 'calls/banner.php';
                        include 'calls/gallery.php';
                        include 'calls/fees.php';
                        
                    
                ?>
            </div>
          
            <footer class="footer text-center">
                All Rights Reserved by BPAcademy. Designed and Developed for BPAcademy
    



<?php
    include 'partials/dashboardscript.php';
    include 'partials/adminfooter.inc.php'
?>