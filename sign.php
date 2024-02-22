<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="sign.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
     </style>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname" placeholder="Enter username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpass" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="M"id="dot-1">
          <input type="radio" name="gender"  value="F" id="dot-2">
          <input type="radio" name="gender" value="non" id="dot-3">
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
          <input type="submit" name="save" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<?php
include "db.php";
// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"]; // Hash the password
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $gender = $_POST["gender"];

    // Insert user into database
    $sql = "INSERT INTO logers
            VALUES ('$name', '$uname', '$email', '$phone', '$pass', '$cpass','$gender')";
    if ($conn->query($sql) === TRUE) {
        // Store username in a session variable\
        $_SESSION['uname'] = $uname;
        // Redirect to index.html
        header('location:login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

