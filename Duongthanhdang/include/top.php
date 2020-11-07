
<?php
session_start();
if (!isset($_SESSION['admin'])) {
  echo'<script>location.href="login.php";</script>';
}
require_once 'libs/ketnoiCSDL.php';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quản lý bán hàng</title>
    
    <link
      rel="stylesheet"
      href="css/bootstrap.min.css"      
    />
    <link rel="stylesheet" href="css/test.css" />
  </head>

  <body>    

    <div class="wrapper">  <!-- class="wrapper" -->

      <!--header-->
      <div class="container-header">        
        <nav class="navbar navbar-expand-lg navbar-light bg-green">
          <a class="navbar-brand" href="#">Home</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Quản lý</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>                        
            </ul>            
          </div>
        </nav>
      </div>
      <!--END: header-->

      <!--content-->
      <div class="content row">