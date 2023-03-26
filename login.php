<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="css/register.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/image1.jpg" alt="">
        <div class="text">
        </div>
      </div>
      <div class="back">
        <img src="images/pasta.avif" alt="">
        <div class="text">
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form action="database_register.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="login_email" id="login_email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="login_password" id="login_password"placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <!-- <input type="submit" value="SUBMIT"> -->
              </div>
              <input type="submit" class="buttons" name="login" value="SUBMIT">
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form action="database_register.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" class="input-field" placeholder="Enter your name" pattern="[a-z]{1,15}" title="Username should only contain lowercase letters. e.g. isha" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" class="input-field" placeholder="Enter your Email-id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="input-field" id="password"  placeholder="Enter Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              </div>
              <div style="color: white;">heyyyyyyyyyyyyyyyy</div>
              
              <input type="submit" class="buttons" name="signup" value="SUBMIT">
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
              <!-- <a href="login.php" class="buttons" target="_blank" style="color: white;">Submit</a> -->
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
