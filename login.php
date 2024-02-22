<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="text-box">
            <h1>Kanishka<br>Broadband<h1>
        </div>
        <header>
            <div class="container">
                <h1>Login</h1>
                <div class="left">
                    <div class="g-form">
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
                            <div id="uname">
                            <input type="text" id="t1" name="uname" placeholder="Username">
                                <label>
                                    @gmail.com
                                </label>
                            </div>
                            <span>
                                You can use letter, number & periods
                            </span>
                            <br>
                            <br>
                            <a href="#" >Use my cuurent email address instead</a>
                            <input type="password" id="t2" name="pass" placeholder="Password"
                            required id="pwrd">
                            <span>
                                Use 8 or more character with a mix of letters, numbers & symbols.
                            </span>
                            <br><br>
                            <input type="checkbox" id="c1" name="" class="checkbox" onclick="show()">
                            &nbsp;Show password
                            <div class="b-links">
                                <a href="sign.php">Sign in instead</a>
                                <input type="submit" id="next" value="Next">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <img src="logo2.png">
                    <p>
                        One account. All of Google working for you.
                    </p>
                </div>
            </div>

        </header>     
    </body>
</html>
<?php
    include 'db.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $email = $_POST["uname"];
    $password = $_POST["pass"];
    $sql = "SELECT * FROM logers WHERE uname='$email' AND pass='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows>0) 
    {
        session_start();
        $_SESSION['uname'] = $email;
        header("Location:plan.php");
        exit();
    }
}
?>