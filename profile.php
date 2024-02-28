<?php 
session_start();
?>
<html>
    <head>
        
    <title>Kanishka Broadband/Profile</title>
        <link rel="icon" type="image/x-icon" href="logo.png">
        <style>
            body{
                padding-top: 70px;
                padding-left: 450px;
                font-family: Comic Sans MS;
            }
            .container{
                width: 600px;
                height: 600px;
                background-color: rgb(255, 141, 141);
                padding: 20px;
                border-radius: 2rem;
            }
            .profile-box{
                width: 500px;
                height: 500px;
                text-align: center;
            }
            .profile-box img{
                width: 170px;
                height: 170px;
            }
            .profile-box .info{
                margin-left: 50px;
                text-align: left;
            }
            
            .profile-box .info span{
                font-family: Comic Sans MS;
                font-size: 25px;
            }
            .profile-box .info strong{
                font-family: Comic Sans MS;
                font-size: 30px;
                margin: 1rem;
            }
                        
            #btn{
                display: inline-block;
                padding:.8rem 1.5rem;
                background:rgb(255, 255, 255);
                color:red;
                font-size: 1.7rem;
                cursor: pointer;           
                text-decoration: none;
                border-radius: 20px;
                margin: 30px;
                border:none;
                font-family: Comic Sans MS;
            }

            #btn:hover{
                color: #fff;
                border-radius: 20px;
                background-color: #000000;
            }
            @media screen and (max-width: 768px){
                body{ 
                    padding: 40px;
                font-family: Comic Sans MS;
                }
                .container{
                    width: 400px;
                height: 500px;
                padding: 20px;
                }
            .profile-box{
                width: 325px;
                height: 300px;
                text-align: center;
                margin: 2rem;
            }
            .profile-box img{
                width: 80px;
                height: 80px;
            }
            .profile-box .info{
                margin: 10px;
                text-align: left;
            }
                
            
            .profile-box .info span{
                font-size: 20px;
            }
            .profile-box .info strong{
                font-family: Comic Sans MS;
                font-size: 20px
            }
                        
            #btn{
                display: inline-block;
                padding:.3rem 1.1rem;
                background:rgb(255, 255, 255);
                color:red;
                font-size: 1.7rem;
                cursor: pointer;       
                margin: 10px;
                border:none;
                font-family: Comic Sans MS;
            }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="profile-box">
                <div class="img">
                    <img src="profile.png" alt="">
                </div>
                <div class="info">
                    <br><br>
                    <span>Name:</span><strong><?php echo $_SESSION['uname'];?></strong><br><br>
                    <span>Username: </span><strong>
                        <?php 
                        include "db.php"; 
                        $sql = "SELECT * FROM logers WHERE uname = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $_SESSION['uname']); // Add a semicolon here
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if ($result->num_rows > 0) 
                        {
                        $logers = $result->fetch_assoc();
                        echo $logers['name'];
                        }
                        ?></strong><br><br>
                    <span>Mail ID:</span><strong>
                        <?php include "db.php"; 
                        $sql = "SELECT * FROM logers WHERE uname = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $_SESSION['uname']); // Add a semicolon here
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if ($result->num_rows >0) 
                        {
                        $logers = $result->fetch_assoc();
                        echo $logers['email'];
                        } 
                        ?>
                    </strong><br><br>
                    <span>Phone:</span><strong>
                        <?php include "db.php"; 
                        $sql = "SELECT * FROM logers WHERE uname = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $_SESSION['uname']); // Add a semicolon here
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if ($result->num_rows > 0) 
                        {
                        $logers = $result->fetch_assoc();
                        echo $logers['phone'];
                        } 
                        ?>
                    </strong>
                </div>
                <a id="btn" href="logout.php">Logout</a>
                <a id="btn">Update</a>
            </div>
        </div>
    </body>
</html>