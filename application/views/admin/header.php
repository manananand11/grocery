<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>
         Foodshala
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link href="<?php echo base_url().'assets/admin/css/bootstrap.min.css';?>" rel="stylesheet" />
      <link href="<?php echo base_url().'assets/admin/css/now-ui-dashboard.css?v=1.5.0';?>" rel="stylesheet" />
      <link href="<?php echo base_url().'assets/admin/css/jquery.dataTables.min.css';?>" rel="stylesheet" />
   </head>
   <body class="">
      <div class="wrapper ">
      <div class="sidebar" data-color="orange">
         <div class="logo">
            <a href="#" class="simple-text logo-mini">
            FS
            </a>
            <a href="<?php echo base_url()?>" class="simple-text logo-normal">
            Foodshala
            </a>
         </div>
         <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
               <li class="{{'dashboard' == request()->path() ? 'active' : ''}} ">
                  <a href="<?php echo base_url().'dashboard'?>">
                     <i class="now-ui-icons design_app"></i>
                     <p>Dashboard</p>
                  </a>
               </li>
               <li class="{{'collegedetails' == request()->path() ? 'active' : ''}} ">
                  <a href="<?php echo base_url().'menu/add'?>">
                     <i class="now-ui-icons ui-1_simple-add"></i>
                     <p>Add Menu Item</p>
                  </a>
               </li>
               <li class="{{'collegedetails' == request()->path() ? 'active' : ''}} ">
                  <a href="<?php echo base_url().'menu/index'?>">
                     <i class="now-ui-icons education_atom"></i>
                     <p>Edit Menu</p>
                  </a>
               </li>
               <li class="{{'course' == request()->path() ? 'active' : ''}} ">
                  <a href="<?php echo base_url().'order'?>">
                     <i class="now-ui-icons design_bullet-list-67"></i>
                     <p>View Orders</p>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
         <div class="container-fluid">
            <div class="navbar-wrapper">
               <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                  </button>
               </div>
               <a class="navbar-brand" href="#pablo">
                  Hello   
                  <?php 
                     print_r($_SESSION['user']['username']);?>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="now-ui-icons users_single-02"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'dashboard/signout';?>">Logout</a>
            </div>
            </li>
            </ul>
            </div>
         </div>
      </nav>
      <div class="panel-header panel-header-sm">
      </div>