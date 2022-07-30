<?php
require '../DatabaseConnection/dbcon.php';
 session_start();
if(ISSET($_SESSION['ph_no'])){ 
    $mobile=$_SESSION['ph_no'];
    #### 2Factor API Setting
    $APIKey='73b3eab2-0ea4-11ed-9c12-0200cd936042';
    $OTPMessage="<p>We have sent an OTP to $mobile,<br>Please enter the same below</p>";
    #### Custom Logic
    $otpValue=(( isset($_REQUEST['otp']) AND $_REQUEST['otp']<>'' ) ? $_REQUEST['otp'] : '' );
    if ( ( $mobile =='' OR strlen($mobile) <>10 OR substr($mobile,0,2) < 60) )
    {
        echo "<script type='text/javascript'> alert('Please enter valid mobile number');window.location='../index.php'; </script>";
         die();
     }
    else if ( $otpValue <> '') ### OTP value entered by user
    {
        ### Check if OTP is matching or not
        $VerificationSessionId=$_REQUEST['VerificationSessionId'];
        $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/VERIFY/$VerificationSessionId/$otpValue"),false);
        $VerificationStatus= $API_Response_json->Details; 
            ### Check if OTP is matching
            if ( $VerificationStatus =='OTP Matched')
            {?>
                <script>
                alert("Phone Number was Successfully Verified \n Please proceed to Login ");
                </script><?php
                $user_type=$_SESSION['user_type'];
                $name=$_SESSION['name'];
                $email=$_SESSION['email'];
                $pass=$_SESSION['password'];
                if($user_type=='Customer'){
                    $conn->query("INSERT into customer values(' ','$name','$email','$mobile','".md5($pass)."')");
                }
                else{
                    $conn->query("INSERT into seller values(' ','$name','$email','$mobile','".md5($pass)."')");
                }
                session_destroy();?><script>window.location='../index.php'</script><?php

            }
            else
            {
                echo "<script type='text/javascript'>alert('Sorry, OTP entered was incorrect.We have sent it again. Please enter correct OTP');  window.history.back();  </script>";
                die();
            }  
    }
    else
    {    
            ### Send OTP
            $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/$mobile/AUTOGEN"),false);
            if($API_Response_json==NULL){?>
            <script>alert('Server Error');window.location='../index.php'</script> 
            <?php }
            else{
            $VerificationSessionId= $API_Response_json->Details;
          }
    }
  }
  else{?>
  <script>
    window.location='index.php';
    </script>
    <?php }?>

<!--HTML Part-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="static/loginpage.css">
        <link rel="stylesheet" href="'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'" type="text/css">
      <title>otp</title>
  </head>
  <body>
  <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Verify Account</h1>
                    <input type="text" id='otp' name="otp" maxlength="6" placeholder="Enter OTP"  required="required">
                    <input type="hidden"  name="VerificationSessionId" value="<?php echo $VerificationSessionId; ?>" >
                    <input type="hidden"  name="phone" value="<?php echo $mobile; ?>" >
                    <!-- <input type="submit" id="log" class="fadeIn fourth" value="Login"> -->
                    
                    <input type="submit" name="save" value="Verify" class="but" style="border-radius: 20px;
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
  </div>
    
</body>
</html>