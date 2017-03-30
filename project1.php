<?php
  session_start();
  require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html >
<head>
<link rel="icon" type="image/gif" href="favicon.ico" />

  <meta charset="UTF-8">
  <title> The Top Eleven </title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="lcss/style.css">

  
  
</head>

<body> 
<link rel="stylesheet" href="css/style.css">

<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navrbar">

    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
               <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
        <a href="project1.php" class="navbar-brand">THE TOP ELEVEN</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">

      <a href="" class="btn btn-success navbar-btn navbar-right">Download App from Play Store</a>


            <ul class="nav navbar-nav">
              <li> <a href="feedback.php"> Feedback</a>
                <li> <a href="about.php"> About us </a>
          </ul>
      
      </div>
    </div>
  </nav>


<div>
      <h3>
      <br>
        Welcome To  <br>
        <strong> The Top Eleven </strong>
        <img src="logo.png">
      </h3>
 </div>


  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">
          <form action="project1.php"  method="post">
           <div class="field-wrap">
            
            <label>Username</label>
            <input type="text" name="username" required>
            </br>
            </br>

            <label>Password</label>
            <input type="text" name="password" required>

            </br>
            </br>

            <label>Re- Password</label>
            <input type="text" name="cpassword" required>
            </br>
            </br>
            
            <label>Email address</label>
            <input type="email" name="email" required>
            </br>
            </br>


          </div>
          
          
          <input type="submit" name="register_btn" class="button button-block" value="Sign Up">
          
          </form>

        </div>

        
        <div id="login"> 
          
          <form action="project1.php" method="post">
          
            <div class="field-wrap">
            
            <label>Username</label>
            <input type="text" name="username" required>
            </br>
            </br>

            <label>Password</label>
            <input type="text" name="password" required>
            </br>
            </br>

            <label>Re- Password</label>
            <input type="text" name="cpassword" required>
            </br>
            </br>

          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          

          <a href="mainpage.php">
               <input type="submit" name="login_btn" class="button button-block" value="Log in">
          </a>
          
          </form>



<?php


  if (isset($_POST['register_btn']))
   {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword  = $_POST['cpassword'];
    $email = $_POST['email'];

    if ($password == $cpassword)
     {

          $query = "select * from userinfotable where username='$username'";

      $query_run = mysqli_query($con,$query);

      if (mysqli_num_rows($query_run)>0) 
          {
            echo ' <script type="text/javascript" > alert("Username already exist") </script>';
       
          }
          else
            {
              $query = " insert into userinfotable values('$username','$password','$email')";
              $query_run = mysqli_query($con, $query);

              if ($query_run) 
              {
                echo ' <script type="text/javascript" > alert("User Register. Login Now") </script>';
              }
              else
              {
                echo ' <script type="text/javascript" > alert("Error!!") </script>';
              }
            }


      }
      else
        {
          echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
        }

      
  }

  if (isset($_POST['login_btn'])) 
  {

    // echo ' <script type="text/javascript" > alert("Clicked") </script>';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword  = $_POST['cpassword'];

    if ($password == $cpassword)
     {

          $query = "select * from userinfotable WHERE username='$username' AND password= '$password'";
          $query_run = mysqli_query($con,$query);

        if (mysqli_num_rows($query_run)>0) 
          {
            $_SESSION['username'] = $username;
            header('location:mainpage.php');
          }
          else
          {

            //invalid
             echo ' <script type="text/javascript" > alert("invalid username password") </script>';

          }

  }
   else
        {
          echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
        }
}



  ?>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->  

    <div id="h">
    <div>
    Connect with us

    </div>
            <div id="c">
              <div id="c4"> Facebook </div>
              <div id="c5"> Google+  </div>
              <div id="c6"> Twitter </div>
              </div>
            </div>
    </div>

     <div id="l">
     Thank you for visiting our page..
    </div>


  

<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="js/index.js"></script>
    <script src="ljs/index.js"></script>

</body>
</html>
