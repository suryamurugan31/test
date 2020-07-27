<?php

include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Photos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        h1{
            
            text-align: center;
            
        }
        .gallery{
            
            margin-top: 10px;
        }
        .modal.and.carousel {
  position: fixed; // Needed because the carousel overrides the position property
}
    </style>
    
</head>
<body>
<!--
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="images/dhoni-logo.png" width="30px"; height="30px"; alt="M.S.Dhoni">
        </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php">Home</a></li>
      <li><a href="achievements.php">Achievement</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="#">Contact us</a></li>
      <li><a href="#" data-toggle="modal" data-target="#regmodal">Register</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>
</nav>
-->
       <h1>Images</h1>
    <div class="container">
    <div class="row">
         <div class="gallery">
        <div class="col-12">
    <div class="col-md-4">
       
        <a  href="images/dhoni-gal-1.jpg">   <img src="images/dhoni-gal-1.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-2.jpg">   <img src="images/dhoni-gal-2.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-3.jpg">   <img src="images/dhoni-gal-3.jpg"></a>
        </div>
            </div>
    </div>
        </div>
       <div class="row">
           <div class="gallery">
        <div class="col-12">
    <div class="col-md-4">
        <a  href="images/dhoni-gal-4.jpg">   <img src="images/dhoni-gal-4.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-5.jpg">   <img src="images/dhoni-gal-5.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-6.jpg">   <img src="images/dhoni-gal-6.jpg"></a>
        </div>
    </div>
    </div>
    </div>
        <div class="row">
           <div class="gallery">
        <div class="col-12">
    <div class="col-md-4">
        <a href="images/dhoni-gal-7.jpg">   <img src="images/dhoni-gal-7.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-8.jpg">   <img src="images/dhoni-gal-8.jpg"></a>
        </div>
            <div class="col-md-4">
        <a target="_blank" href="images/dhoni-gal-9.jpg">   <img src="images/dhoni-gal-9.jpg"></a>
        </div>
    </div>
    </div>
    </div>
        <div class="row">
           <div class="gallery">
        <div class="col-12">
    <div class="col-md-4">
        <a  href="images/dhoni-gal-10.jpg">   <img src="images/dhoni-gal-10.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-11.jpg">   <img src="images/dhoni-gal-11.jpg"></a>
        </div>
            <div class="col-md-4">
        <a  href="images/dhoni-gal-12.jpg">   <img src="images/dhoni-gal-12.jpg"></a>
        </div>
    </div>
    </div>
    </div>
</div>

    <br>
    <?php
    include "footer.php";
    ?>
</body>
</html>


