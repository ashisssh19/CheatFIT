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
if (isset($_POST['signup'])) {
  
  // Retrieve user data from the signup form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password before storing it in the database
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // SQL query to insert user data into the database
  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

  if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
    header('location:PI_PAGE.php');

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Check if the login form has been submitted
if (isset($_POST['login'])) {
  
  // Retrieve user data from the login form
  $email = $_POST['login_email'];
  $password = $_POST['login_password'];

  // SQL query to retrieve the user data from the database
  $sql = "SELECT * FROM users WHERE email='$email'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      echo "Login successful!";
      header('location:account.php');
    } else {
      echo "Incorrect password!";
    }
  } else {
    echo "User not found!";
  }
}

// Close database connection
$conn->close();

?>