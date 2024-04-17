<!DOCTYPE html>
<!-- Designed by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Kanishka Broadband/Sign-In</title>
  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" href="sign.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
  <?php
include "db.php";

// Initialize variables to hold error messages
$name_err = $uname_err = $email_err = $phone_err = $pass_err = $cpass_err = '';

// Process registration form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your full name.";
    } else {
        $name = trim($_POST["name"]);
        // Check if name matches the regular expression
        if (!preg_match('/^[a-zA-Z\s\'-]+$/', $name)) {
            $name_err = "Invalid name format. Only letters, spaces, hyphens, and apostrophes are allowed.";
        }
    }

    // Validate username
    if (empty(trim($_POST["uname"]))) {
        $uname_err = "Please enter a username.";
    } else {
        $uname = trim($_POST["uname"]);
        // Check if username matches the regular expression
        if (!preg_match('/^[a-zA-Z0-9_-]+$/', $uname)) {
            $uname_err = "Invalid username format. Only letters, numbers, hyphens, and underscores are allowed.";
        } else {
            // Check if username already exists in the database
            $sql = "SELECT * FROM logers WHERE uname = '$uname'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $uname_err = "This username is already taken.";
            }
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        $email = trim($_POST["email"]);
        // Check if email matches the regular expression
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    }

    // Validate phone number
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Please enter your phone number.";
    } else {
        $phone = trim($_POST["phone"]);
        // Define regular expression for phone number
        $phone_regex = '/^\d{10}$/'; // Assuming 10 digit phone number format
        // Check if phone number matches the regular expression
        if (!preg_match($phone_regex, $phone)) {
            $phone_err = "Invalid phone number format. Please enter a 10-digit phone number.";
        }
    }

    $pass =$_POST["pass"];
    $cpass =$_POST["cpass"];
    
    $gen =$_POST["gender"];
    // If there are no errors, proceed to insert data into the database
    if (empty($name_err) && empty($uname_err) && empty($email_err) && empty($phone_err) && empty($pass_err) && empty($cpass_err)) {
        // Insert user into database
        $sql = "INSERT INTO logers (name, uname, email, phone, pass,cpass,gender) VALUES (?, ?, ?, ?, ? ,? ,?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssssss", $name, $uname, $email, $phone, $pass,$cpass,$gen);
            if ($stmt->execute()) {
                // Store username in a session variable
                session_start();
                $_SESSION['uname'] = $uname;
                // Redirect to login.php or any other page
                header('location: login.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        }
    }
    // Close connection
    $conn->close();
}
?>
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
          <div class="error"><?php echo $name_err; ?></div>
        </div>
        <div class="input-box">
          <span class="details">Username</span>
          <input type="text" name="uname" placeholder="Enter username" required>
          <div class="error"><?php echo $uname_err; ?></div>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="email" placeholder="Enter your email" required>
          <div class="error"><?php echo $email_err; ?></div>
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" name="phone" placeholder="Enter your number" required>
          <div class="error"><?php echo $phone_err; ?></div>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" name="pass" placeholder="Enter your password" required>
          <div class="error"><?php echo $pass_err; ?></div>
        </div>
        <div class="input-box">
          <span class="details">Confirm Password</span>
          <input type="password" name="cpass" placeholder="Confirm your password" required>
          <div class="error"><?php echo $cpass_err; ?></div>
        </div>
      </div>
      <div class="gender-details">
        <input type="radio" name="gender" value="M"id="dot-1">
        <input type="radio" name="gender" value="F" id="dot-2">
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

