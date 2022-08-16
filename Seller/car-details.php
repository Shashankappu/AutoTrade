<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>AutoTrade | Free Vehicles Dealer Website </title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="SellerIndex.php" class="logo">Auto<em>Trade</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="SellerIndex.php">Home</a></li>
                            <li><a href="cars.php" class="active">Add Vehicles</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.php">About Us</a>
                                    <a class="dropdown-item" href="blog.php">Blog</a>
                                    <a class="dropdown-item" href="team.php">Team</a>
                                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                    <a class="dropdown-item" href="faq.php">FAQ</a>
                                    <a class="dropdown-item" href="terms.php">Terms</a>
                                </div>
                            </li>
                            <li><a href="contact.php">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <?php 
                    require '../DatabaseConnection/dbcon.php';
                    $mod=$_REQUEST['myVar'];
                    $result=$conn->query("SELECT * from vehicle where model_no=$mod") or die($conn->error);
                    $row=$result->fetch_array();
                ?>
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/<?php echo $row['image'] ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        
                        <h2> <em>₹ <?php echo $row['price'] ?>/-</em></h2>
                        <p><?php echo $row['model_name'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/<?php echo $row['image'] ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/<?php echo $row['image'] ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/<?php echo $row['image'] ?>" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-cog"></i> Vehicle Specs</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Vehicle Description</a></li>
                  <!-- <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Vehicle Extras</a></li> -->
                  <li><a href='#tabs-4'><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Vehicle Specs</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Owner Type</label>
                       
                            <p><?php echo $row['owner_type'] ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Manufacturing year</label>
                       
                            <p><?php echo $row['manf_year'] ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label> Model No</label>
                       
                            <p><?php echo $row['model_no'] ?></p>
                       </div>
                       <div class="col-sm-6">
                        <label> Model Name</label>
                   
                        <p><?php echo $row['model_name'] ?></p>
                   </div>

                       <div class="col-sm-6">
                            <label>Odometer Reading</label>
                       
                            <p><?php echo $row['odometer'] ?>km</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Fuel Type</label>
                       
                            <p><?php echo $row['fuel_type'] ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Engine size</label>
                       
                            <p><?php echo $row['engine_size'] ?> hp/cc</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Mileage</label>
                       
                            <p>~<?php echo $row['mileage'] ?>kmpl</p>
                       </div>

                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Vehicle Description</h4>
                    
                    <p>- Colour coded bumpers <br> - Tinted glass <br> - Immobiliser <br> - Central locking - remote <br> - Passenger airbag <br> - Electric windows <br> - Rear head rests <br> - Radio <br> - CD player <br> - Ideal first car <br> - Warranty <br> - High level brake light <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat                     cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                   </article>

                  <article id='tabs-4'>
                    <h4>Contact Details</h4>
                  <?php 
                  $row2=$conn->query("select * from seller s,link l where l.model_no=$mod and l.sel_id=s.sel_id")->fetch_array() or die($conn->error);
                  ?>
                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Name</label>

                            <p><?php echo $row2['name'] ?></p>
                        </div>
                        
                        <div class="col-sm-6">
                            <label>Mobile phone</label>
                            <p><?php echo $row2['ph_no'] ?> </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#"><?php echo $row2['email'] ?></a></p>
                        </div>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 AutoTrade
                        - Website by: <a href="https://www.SSSS.com/">SSSS.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>