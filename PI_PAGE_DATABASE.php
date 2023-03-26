<?php

session_start();
// MySQL database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpmyadmin";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the signup form has been submitted
if (isset($_POST['save_this'])) {
  
  // Retrieve user data from the signup form
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $age = $_POST['Age'];
  $sleep = $_POST['Sleep'];
  $water = $_POST['water'];
  $BMI = $_POST['BMI'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];

  // Hash the password before storing it in the database
//   $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // SQL query to insert user data into the database
  $sql = "INSERT INTO  userinfo (HEIGHT,WEIGHT, AGE ,SLEEP_HOUR ,WATER_INTAKE,BMI,GENDER,EMAIL) VALUES ('$height', '$weight', '$age' ,'$sleep' ,'$water' ,'$BMI','$gender','$email')";

  if ($conn->query($sql) === TRUE) {
    echo "INFORMATION ADDED";
    header('location:index.html');

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


// Close database connection
$conn->close();

?>