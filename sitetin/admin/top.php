<?php
session_start();
if (!isset($_SESSION['admin'])) {
  echo'<script>location.href="login.php";</script>';
}
require_once '../libs/ketnoiCSDL.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    
    <link
      rel="stylesheet"
      href="../css/bootstrap.min.css"      
    />
    <link rel="stylesheet" href="css/test.css" />
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
  </head>

  <body>    

    <div class="wrapper">  <!-- class="wrapper" -->

      <!--header-->
      <div class="container-header">        
        <nav class="navbar navbar-expand-lg navbar-light bg-green">
          <a class="navbar-brand" href="quanlytintuc.php">Home</a>
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
                <a class="nav-link" href="quanlytintuc.php">Quản lý tin tức</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quanlynhomtin.php">Quản lý nhóm tin</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Thoát</a>
              </li>
                        
            </ul>            
          </div>
        </nav>
      </div>
      <!--END: header-->

      <!--content-->
      <div class="content row">