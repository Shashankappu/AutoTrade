<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>AutoTrade | Free Vehicles Dealer Website</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
        <?php session_start();?>
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
                        <a href="CustomerIndex.php" class="logo">Auto<em>Trade</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="CustomerIndex.php" class="active">Home</a></li>
                            <li><a href="cars.php">Vehicles</a></li>
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
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                              <?php
                                require '../DatabaseConnection/dbcon.php';
                                $mail=$_SESSION['email'];
                                $result=mysqli_query($conn,"SELECT `name` from `customer` where `email`='$mail'");
                                $row=mysqli_fetch_array($result);
                              ?>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" ><?php echo $row['name'];?></a>
                                    <a class="dropdown-item" ><?php echo $_SESSION['email'];?></a>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
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

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Bring Home a Brand new  Vehicle</h6>
                <h2>Best <em>Vehicles dealer</em> in the town!</h2>
                <div class="main-button">
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Vehicles</em></h2>
                        <img src="assets/images/line-dec.png"  alt="">
                        <p>The latest additions that not only look great but are also reasonably priced, take a look!</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php 
                    require '../DatabaseConnection/dbcon.php';
                    $result=$conn->query("SELECT * from vehicle") or die($conn->error);
                    while($row=$result->fetch_array()){
                ?>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <img src="assets/images/<?php echo $row['image'];?>" style="height: 250px;width: 360px;" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                &nbsp; <sup>₹ </sup><?php echo $row['price']; ?>/-
                            </span>

                            <h4><?php echo $row['model_name']; ?></h4>

                            <p>
                            <i class="fa fa-dashboard"></i> <?php echo $row['odometer']; ?>km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> <?php echo $row['engine_size'];?> hp/cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i><?php echo $row['fuel_type'];?> &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.php?myVar=<?php echo $row['model_no']; ?>" onclick="POST">+ View Vehicle</a></li>
                            </ul>
                        </div>
                    </div>
                </div><?php }?>
                
            </div>

            <br>

            <div class="main-button text-center">
                <a href="cars.php">View Vehicles</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>We are a multi-channel auto platform with coverage and presence across vehicle types and value-added services. Our platforms operate under the brand of AutoTrade. Through these platforms, we enable used automobile customers, vehicle dealerships, vehicle OEMs and other businesses to buy and sell their vehicles in a simple and efficient manner. Our vision is to create an automotive digital ecosystem which connects automobile customers, OEMs, dealers, banks, insurance companies and other stakeholders.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                    <p>We have one goal: Get the best price for your vehicle. Simple selling experience.</p>
                    <p>Hence we have created a tailor-made platform to provide hassle-free buying and selling experience to customers, all under one roof, AutoTrade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Check out what the editors at our Editorial Team have to say to make your experience here better than ever!.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                <li><a href='#tabs-1'>How To Make Smart Financial Decision When Buying Second Hand Vehicles.</a></li>
                  <li><a href='#tabs-2'>Third Party Car Insurance Explained.</a></li>
                  <li><a href='#tabs-3'>Tips And Tricks For Servicing Your Car.</a></li>
                  <div class="main-rounded-button"><a href="blog.php">Read More</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                    <h4>How To Make Smart Financial Decision When Buying Second Hand Vehicles.</h4>

                    <p><i class="fa fa-user"></i> AutoTrade Editorial Team &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 23.07.2022 09:15 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  23 comments</p>

                    <p>The vehicle exchange market in India is red-hot right now. Every brand worth their manufacturing chops is putting their best products forward in a bid to garner the most of the buyers financial pie during resales.</p>
                    <div class="main-button">
                        <a href="blog-details.php">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                    <h4>Third Party Car Insurance Explained.</h4>
                    <p><i class="fa fa-user"></i> AutoTrade Editorial Team &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.06.2022 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  09 comments</p>
                    <p>The Motor Vehicle Act is the one that governs the use of automobiles in India. While it is typically laden with legalese, breaking it down for purpose of simplicity reveals several key aspects about it.</p>
                    <div class="main-button">
                        <a href="blog-details.php">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                    <h4>Tips And Tricks For Servicing Your Car.</h4>
                    <p><i class="fa fa-user"></i> AutoTrade Editorial Team &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 14.03.2022 12:13 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  10 comments</p>
                    <p>Most owners of vehicles in India remain quite oblivious to the maintenance schedules. They usually go by what the company dealer has directed, but this has a great imact on its resale value.</p>
                    <div class="main-button">
                        <a href="blog-details.php">Continue Reading</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Be it queries or reviews, send them towards us!</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Hundreds of happy customers and counting, read what they have to say!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                            <h4>Alok Bhardwaj</h4>
                                <p><em>"All staff have a very helping attitude. Fully satisfied with the service. The vehicle I purchased had exactly the same condition as was described. Will highly recommend AutoTrade to all."</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                            <h4>Nupur Pandey</h4>
                                <p><em>"I always recommend AutoTrade. Not only have I bought two vehicles through them, but many of my friends have too after I recommended them the same."</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                            <h4>Pranav Gandotra</h4>
                                <p><em>"On the internet, there used to be a huge chaos for used vehicles and non-standardization of prices and warranty was an issue, but since AutoTrade, its just been hassle-free all around"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                            <h4>Sudhanshu Yadav</h4>
                                <p><em>"I really loved the experience with AutoTrade. The staff members were professional and courteous. Their attitude and approach was commendable. They delivered what they promised."</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="testimonials.php">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
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