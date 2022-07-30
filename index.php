<?php session_start();?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="static/loginpage.css">
        <link rel="stylesheet" href="'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'" type="text/css">

    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Create Account</h1>
                    <select name="user_type">
                        <option disabled>Select User Type</option>
                        <option value="Customer">Customer</option>
                        <option value="Seller">Seller</option>
                    </select>
                    <input type="text" name="name" placeholder="Name" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="text" maxlength="10" name="phonenumber"  placeholder="Phone Number" />
                    <input type="password" name="password" placeholder="Password" /><br>
                    <input type="submit" name="save" value="Sign Up" class="but" style="border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
    ">
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="index.php" method="POST">
                    <h1>Sign in</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span> -->
                    <select name="user_type">
                        <option disabled>Select User Type</option>
                        <option selected value="Customer">Customer</option>
                        <option value="Seller">Seller</option>
                    </select>
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <!-- <a href="#">Forgot your password?</a> -->
                    <input type="submit" name="login" value="Sign In" class="but" style="border-radius: 20px;
                    border: 1px solid #FF4B2B;
                    background-color: #FF4B2B;
                    color: #FFFFFF;
                    font-size: 12px;
                    font-weight: bold;
                    padding: 12px 45px;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    transition: transform 80ms ease-in;
                    ">
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            require 'DatabaseConnection/dbcon.php';
            if(isset($_POST['save'])){
                
                $_SESSION['ph_no']=$_POST['phonenumber'];
                $_SESSION['user_type']=$_POST['user_type'];
                $_SESSION['name']=$_POST['name'];
                $_SESSION['email']=$_POST['email'];
                $_SESSION['password']=$_POST['password'];
                
                ?><script>window.location= 'otp/otp.php';</script><?php
            }
        else if(isset($_POST['login'])){
                $user_type=$_POST['user_type'];
                //$name=$_POST['name'];
                $email=$_POST['email'];
                //$ph_no=$_POST['phonenumber'];
                $pass=$_POST['password'];
                
                $_SESSION['email']=$email;

                $result1=$conn->query("SELECT * from seller WHERE email='$email'") or die(mysqli_errno());
        $row1 = $result1->fetch_array();
        $nummerOfrowsOfmng=$result1->num_rows;
        $result2=$conn->query("SELECT * from customer WHERE email='$email'") or die(mysqli_errno());
        $row2 = $result2->fetch_array();
        $nummerOfrowsOfuser=$result2->num_rows;
        
        if($nummerOfrowsOfmng>0)
        {
          if( $row1['password'] == md5($pass)){
              $_SESSION['id']=$row1['sel_id'];?>
              <script>window.location='Seller/SellerIndex.php'</script><?php
          }
          else{ ?>
          <script>
            alert('Incorrect Password');
            window.location='index.php';
          </script>
        <?php  }
        }
        else if($nummerOfrowsOfuser>0){
          if( $row2['password'] == md5($pass)){
            $_SESSION['id']=$row1['cus_id'];
            ?> <script>window.location='Customer/CustomerIndex.php'</script><?php
        }
        else{ ?>
        <script>
          alert("Incorrect Password");
          window.location="index.php";
        </script>
      <?php  }
        }
      else{
          ?>
          <script type="text/javascript">
          alert('Your account is not registered ');
          window.location='create-account.php';
          </script>
          <?php
        }

      }
            
        ?>
        <script src="static/loginpage.js"></script>
    </body>
</html>