<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Demo-Online Shop </title>
    </head>
    <body>
        <!-- ################################################################################## -->
        <div id="navbar1">
            <?php
            function redirect($url)
            {
                if (!headers_sent()){
                    header("Location: $url");
                }else{
                   echo "<script type='text/javascript'>window.location.href='$url'</script>";
                   echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
                }
                exit;
                } ?>           
            <nav style="color:white;" class="navbar navbar-expand-lg navbar-light bg-dark text-light">
            <div class="container-fluid ">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand text-warning bg-dark " href="#">Software engenniering Project</a>
              <div class="collapse navbar-collapse text-light" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto    mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="loginPage.php">Sing In</a>
                  </li>
                  <li class="nav-item">                   
                     <a class="nav-link text-light" href="paper.php">Papers</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled text-light" href="" tabindex="-1" aria-disabled="true">About US</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2 my-5" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-5" type="submit">Search</button>
                  <p style="height: 100px;">
                  <p id="A7" class="nav-link text-light bg-dark ">
                        <?php 
                        session_start();
                        if(isset($_SESSION['userd'])) {
                            echo "Welcome th the site".$_SESSION['userd'];
                            echo "<a id='btnExit' href='http://localhost/myNewPHP/unSetSession.php' class='btn btn-outline-success' type='button'>Exit</a>";
                        }
                        else{
                            echo "Guest";
                        }
                        ?>                           
                      </p>
                </p>                
                  <script>function pico(){<?php ?>}</script>
                </form>
              </div>
            </div>
          </nav>
        </div>
        <!-- ################################################################################## -->
        <div id="Slider" class="row bg-dark">
            <div class="col-3 bg-dark">
                <div class="list-group bg-dark list-group-dark">
                    <a href="#" class="list-group-item list-group-item-action px-3 border-0 active ripple list-group-item-dark"  aria-current="true">Category</a>
                    <a href="#" class="list-group-item list-group-item-action px-3 border-0 ripple list-group-item-dark" >All In One</a>
                    <a href="#" class="list-group-item list-group-item-action px-3 border-0 ripple list-group-item-dark">Note Books</a>
                    <a href="#" class="list-group-item list-group-item-action px-3 border-0 ripple list-group-item-dark">Ultra Books</a>
                </div>
            </div>
            <div class="col-9">
            <div id="carouselExampleDark" class="carousel carousel-secendry slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="Images/11.jpg" class="d-block w-100" alt="not available">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First</h5>
                      <p> We are a team and it is a Demo !</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="Images/2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second</h5>
                      <p> We are a team and it is a Demo !</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/3.pnj.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third</h5>
                      <p> We are a team and it is a Demo !</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>              
        </div>
<!--         ################################################################################## -->
<div id="CardsAndSpace" class="row bg-dark">
            <div class="col-3">

            </div>
            <div class="col-9" style="margin-top:10px;">
                <div class="card bg-dark text-light my-3" style="width: 24rem;float:left;">
                <img src="Images/12.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Arian Shahbazian</h5>
                  <p class="card-text">Im a Programmer and I Design AI Search Enging in this project </p>
                  <a href="#" class="btn btn-primary">add to my basket</a>
                </div>
              </div>
                 <div class="card bg-dark text-light my-3" style="width: 24rem;float:left;margin-left: 10px;">
                <img src="Images/13.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sarvenaz Vazirifar & Sara Yousefzade</h5>
                  <p class="card-text">We are Frontend designer of this web page and We help to write Project Diagrams</p>
                  <a href="#" class="btn btn-primary">add to my basket</a>
                </div>
              </div>
                <div class="card bg-dark text-light my-3" style="width: 24rem;margin-left: 10px;">
                    <img src="Images/14.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Arshia Mostafaei</h5>
                        <p class="card-text">Im a Backend Developer and i code Backend with other members in Pure php !</p>
                        <a href="#" class="btn btn-primary">add to my basket</a>
                    </div>
              </div>
    </body>
</html>
