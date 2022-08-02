<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>AutoTrade| Free Vehicles Dealer Website </title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <?php session_start(); ?>

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
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Vehicles</em></h2>
                        <p>The Best platform to Sell your Old/Used Vehicles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="contact-us"  style="margin-top: 50; position:absolute; left:330px;top:350px; width:1500px ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
                        <form id="contact" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12" >
                              <fieldset>
                                <input name="Ownertype" type="text" id="Ownertype" placeholder="Owner Type*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="Manufacturing_year" type="date" id="Manufacturing year"  placeholder="Manufacturing year*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12" >
                                <fieldset>
                                  <input name="Model_No" type="number" id="Model No" placeholder="Model No*" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input name="Model_Name" type="text" id="Model Name" placeholder="Model Name*" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input name="price" type="text" placeholder="price" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12" >
                                <fieldset>
                                  <input name="Mileage" type="number" id="Mileage" placeholder=" Mileage*" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input name="Odometer_Reading" type="number" id="Odometer Reading "  placeholder="Odometer Reading*" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-6 col-sm-12" >
                                  <fieldset>
                                    <select name="fuel_type">
                                      <option disabled>Fuel Type</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Electric">Electric</option>
                                    </select>
                                  </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <fieldset>
                                    <input name="Engine_Size" type="text" id="Engine Size" placeholder="Engine Size*" required="">
                                  </fieldset>
                                </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="Insurance_Id" type="text" id="Insurance" placeholder="Insurance Id*" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="Insurance_Plan" type="text" id="Insurance Plan" placeholder="Insurance Plan*" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="Insurance_Plan_Type" type="text" id="Insurance Plan Type" placeholder="Insurance Plan Type*" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <fieldset>
                                        <select name="claim">
                                          <option disabled>Insurance Claim Status</option>
                                            <option value="Claimed">Claimed</option>
                                            <option value="Unclaimed">Unclaimed</option>
                                        </select>
                                      </fieldset>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-md ">
                                    <fieldset>
                                      <input name="image" type="file">
                                    </fieldset>
                                  </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button name="save" type="submit" class="main-button">Add Vehicle</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                        <?php
                        require '../DatabaseConnection/dbcon.php';
                        
                        if(isset($_POST['save'])){
                          $own=$_POST['Ownertype'];
                          $mdno=$_POST['Model_No'];
                          $date=$_POST['Manufacturing_year'];
                          $mdnam=$_POST['Model_Name'];
                          $mil=$_POST['Mileage'];
                          $price=$_POST['price'];
                          $od=$_POST['Odometer_Reading'];
                          $fue=$_POST['fuel_type'];
                          $eng=$_POST['Engine_Size'];
                          $ind=$_POST['Insurance_Id'];
                          $indp=$_POST['Insurance_Plan'];
                          $indpt=$_POST['Insurance_Plan_Type'];
                          $claim=$_POST['claim'];
                          $img=$_POST['image'];
                          $sel_id=$_SESSION['id'];
                          $conn->query("INSERT into vehicle values('$mdno','$mdnam','$price','$own','$date','$mil','$od','$fue','$eng','$img')") or die($conn->error);
                          $conn->query("INSERT into insurance values('$ind','$mdno','$indp','$indpt','$claim')") or die($conn->error);
                          $conn->query("INSERT into link values('$sel_id','$mdno')") or die($conn->error);
                          ?><script>alert("Vehicle added successfully");window.location='SellerIndex.php';</script>
                          <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020  AutoTrade
                        - Website by: <a href="https://www.SSSS.com/">SSSS.com</a>
                    </p>
                </div>
            </div>
        </div>
   
    </section>
    <!-- ***** Fleet Ends ***** -->

    <!-- ***** Footer Start ***** -->
    

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