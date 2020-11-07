<?php  
require_once './libs/ketnoiCSDL.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <!--Bootstrap-->
    <link
      rel="stylesheet"
      href="css/bootstrap.min.css"      
    /> 
    <link
      rel="stylesheet"
      href="css/bootstrap.css"      
    /> 
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/test.css" />
  </head>


  <body>
    <div class="wrapper">

      <div class="container-header">  <!--div class="container-header"-->
        <nav class="navbar navbar-expand-lg navbar-light bg-green">
          <a class="navbar-brand" href="01.php">Home</a>
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
                <a class="nav-link" href="#">Sản phẩm hot</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Linh tinh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Tin tức</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php">Đăng nhập</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0"action="timkiem.php" method="post">
              <input
                class="form-control mr-sm-2"
                type="search"
                name="tutimkiem"
                placeholder="Search"
                aria-label="Search"
              />
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
                name="timkiem"
              >
                Search
              </button>
            </form>
          </div>
        </nav>
      </div> <!--div class="container-header"-->
      
      <!--content-->
      <div class="content row">