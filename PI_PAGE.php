<?php 
session_start();

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="PI_PAGE.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

    <div class="bg-img">
      <div class="container">
        <div class="title">Personal Information</div>
        <div class="content">
          <form action="PI_PAGE_DATABASE.php" method="POST" >
            <div class="user-details">
              <div class="input-box">
                <span class="details">Height</span>
                <input
                  type="text"
                  placeholder="Enter your Height (Cm)"
                  required
                  name="height"
                />  
              </div>
              <div class="input-box">
                <span class="details">Weight</span>
                <input type="text" placeholder="Enter your Weight" name="weight" required />
              </div>
              <div class="input-box">
                <span class="details">Age</span>
                <input type="text" placeholder="Enter your Age" name="Age" required />
              </div>
              <div class="input-box">
                <span class="details">Amount of Sleep</span>
                <input type="text" placeholder="Sleep (Hrs)" name="Sleep" required />
              </div>
              <div class="input-box">
                <span class="details">Water Intake</span>
                <input
                  type="text"
                  placeholder="Enter your water intake (lt)"
                  required
                  name="water"
                />
              </div>
              <div class="input-box">
                <span class="details">Body Mass Index <a href="bmi.html">Calculate here</a></span>
                <input type="text" placeholder="Enter your BMI" required  name="BMI"/>
              </div>
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" id="dot-1" value="male" />
              <input type="radio" name="gender" id="dot-2" value="female" />
              <input type="radio" name="gender" id="dot-3"  value="LGBT"/>
              <span class="gender-title">Gender</span>
              <div class="category">
                <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                  <span class="dot three"></span>
                  <span class="gender">Prefer not to say</span>
                </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" name="save_this" value="Submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
