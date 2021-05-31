<!doctype html>
<html lang="en">
   <head>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/owl.carousel.min.css'?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/owl.theme.default.min.css'?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/other.css'?>">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <title>FOODSHALA</title>
   </head>
   <body>
      <div class="header" id="topheader">
      <nav class="navbar navbar-expand-lg navbar-dark">
         <div class="container text-uppercase p-2">
         <a class="navbar-brand" href="<?php echo base_url();?>">FOODSHALA</a> 
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase">
            <?php if(isset($_SESSION['user'])) : ?>
            <li class="nav-item">
               <p class="nav-link">Hello <?php echo $_SESSION['user']['username'] ?></p>
            </li>
            <?php endif; ?>
            <?php if(!isset($_SESSION['user'])) : ?>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url().'login';?>">LOGIN</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url().'register/add';?>">REGISTER</a>
            </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_cust']==1) : ?>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url().'custorder';?>">VIEW ORDERS</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url();?>">VIEW MENU</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url().'dashboard/signout';?>">LOGOUT</a>
            </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_cust']==0) : ?>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url().'dashboard';?>">DASHBOARD</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url().'dashboard/signout';?>">LOGOUT</a>
            </li>
            <?php endif; ?>
      </nav>
      <section class="header-section">
      <div class="center-div">
      <p>Your Favourite Food at doorstep</p>
      </div>
      </section>
      <ul class="box-area">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      </ul>
      </div>
      </section>