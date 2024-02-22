<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kanishka Broadband</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Navbar CDN BT link--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--Navbar CDN JQ link--><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--Navbar CDN BT link--><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
    height: 500px;
}
body{
    font-family:Comic Sans MS;
    background: #0c192c;
    background-size: cover;
    max-height: 400px;
}
#a{
    margin-top: 0px;
    margin-left: 0px;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    font-family: Comic Sans MS;
    font-size: 3rem;
    padding: 10px;
}
.lgtext{
    font-weight:070;
    font-size:20px;
    color: white;    
    font-family: Comic Sans MS;
}
.lgtext:hover{
    text-decoration: none;
    color: red;
}
.navbar{
    backface-visibility: initial;
    background-image: url(logo.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #000000;
    font-family: 'Bitter', serif;
    width: 100%;
}
#a .logo{
    height: 60px;
}
#a .logo:hover{
    mix-blend-mode:lighten;
}
.icon-bar{
    background-color: red;
}
li{
    padding: 10px 10px;
    font-size: 14px;
}
li a{
    color: white;
    font-family: Comic Sans MS;
    font-size: 15px;
}
li a:hover{
    color: red;
    border-radius: 20px;
}
.nav{
    padding: 10px;
}
.sec1{
    display:flex;
    margin: 35px;
    justify-content: center;
    width: 90%;
}
.name{
    margin: 5px 60px;
    max-width: fit-content;
}
.name .main{
    font-size: 100px;
    color: #fff;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.name #sp{
    font-size: 40px;
    color: #aeaeae;
    margin-left: 400px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    white-space: nowrap;
}
.name .text{
    position: relative;
    margin-bottom: 40px;
    color: #fff;
    width: 10ch;
    overflow: hidden;
    white-space: nowrap;
    animation: typing 3s steps(9) alternate infinite ;
    font-size: 40px;
}
@keyframes typing {
    0%{
        width: 0ch;
    }
    50%{
        width: 10ch;
    }
}
.img img{
    margin: 10px 30px;
}
.img{
    animation: updown;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    animation-timing-function: ease;
    transition: all .3s;
}
@keyframes updown{
    0%{
        transform: translateY(0px);
    }
    40%{
        transform: translateY(-15px);
    }
    100%{
        transform: translateY(0px);
    }
}
@media (max-width:1000px){
    body{   
    overflow-y: scroll;
    }
    .sec1{
        width: 90%;
        display:block;
    }
    .name .main{
        font-size: 80px;
    }
    .name #sp{
        font-size: 20px;
    }
}
@media (max-width:600px){
    .img img {
        width: 290px;
        height: 290px;
    }
    .navbar{
        padding:0px;
        width: 100%;
    }
    #a .logo{
        height: 60px;
    }
    li{
    padding: 0px 0px;
    font-size: 14px;
    }
    #a{
        margin-top: 0px;
        margin-left: 0px;
        color: #fff;
        text-decoration: none;
        display: inline-block;
        font-family: Comic Sans MS;
        font-size: 2rem;
        padding: 5px;
    }
    .sec1{
    display:block;
    margin: 25px;
    }
    .name .text{
        font-size:17px;
    }
    .name .main{
        font-size: 47px;
    }
    .name #sp{
        display: none;
    }
}
.part{
    background-color:#DCDCDC;
    display: block;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 15px;

    height: 100%;
    padding: 20px;
    
    width: 90%;
    margin: 60px;
    display: flex;
}
.card{
    margin: 30px;
    position: relative;
    height: 300px;
    width: 350px;
}
.card .ban{
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 10px;
    overflow: hidden;
    transition: .5s;   
    margin: 10px;
}
.card .banner1{
    transform: perspective(600px) rotateY(0deg);
    box-shadow: 0 5px 10px #000;
}
.card .banner1 img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.card .banner2 {
    transform: perspective(600px) rotateY(180deg);
    background: rgb(3,35,54);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: space-between ;
    text-align: center;
}
.card:hover .banner1{
    transform: perspective(600px) rotateY(180deg);

}
.card:hover .banner2{
    transform: perspective(600px) rotateY(360deg);
}
.text1{
    font-size: 30px;
    margin-top: 10px ;
    color :rgb(0, 0, 0);
}
.text2{
    font-size: 31px;
    margin: 20px 0;
    color :rgb(255, 0, 0);
}
.text3{
    font-size: 22px;
    color: black;
}
a.btn{
    margin: 20px;
    width: 130px;
    padding: 20px;
    border-radius: 50px;
    font-size: 16px;
}
a.btn-first{
    position:relative;
    top:50%;
    background-color: black;
    color:white;
    text-emphasis: none;
    text-align: center;
}
a.btn:hover{
    background-color:#ffffff ;
    color: red; 
}
.sec1{
    width: 90%;

}
.info-container{
    background-color:#DCDCDC;
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    margin: 60px;
    padding: 50px;
    height: 80%;
}
.info-container p{
    font-size: 19px;
    margin: 20px;
}
.info-container .vis,.mis,.ach{
    display: block;
    width: 360px;
    height: calc(45%-3rem);

}
.info-container #head{
    font-size: large;
    align-items: center;
    top: 0;
    color: red;
}
footer {
    font-family: Comic Sans MS;
	background: #000000;
	padding: 38.4px 0;
}
.single-box img{
	text-align: center;
	padding: 10px 0;
    width: 200px;
    height: 200px;
}
.single-box p {
	color: #ffffff;
    font-size: 14px;
}
.single-box h3{
	font-size: 20px;
	font-weight: 700;
	color: #fff;
}
.single-box .card-area i {
	color: #ffffff;
	font-size: 10px;
	margin-right: 5px;
}
.single-box ul {
	list-style: none;
	padding: 0;
    margin-right: 5px;
}
.single-box ul li a {
	text-decoration: none;
	color: #fff;
	line-height: 2.5;
	font-weight: 70;
    font-size: 14px;
}
@media screen and (max-width:767px){
    
    .part{
        width: 90%;
        margin: 25px;
        height: 100%;
    }
    .navbar,.nav{
        width: 100%;
    }
    .card{
        width: 80%;
    }
    .info-container{
        width: 90%;
        display: block;
        margin: 25px;
        padding: 10px;
        height: 100%;
    }
    .info-container #head{
        font-size:medium;
    }
    .info-container p{
        font-size: 17px;
        margin: 10px;
    }
    .info-container .vis,.mis,.ach{
    display: block;
    width: 80%;
    height: 25%;
    margin: 30px;
    }
    .info-container #head{
    font-size: large;
    align-items: center;
    top: 0;
    color: red;
    }
    #single-box{
        display: flex;
    }
    .single-box img
    {
    justify-self: first baseline;
	padding: 10px 0;
    width: 150px;
    height: 150px;
    }
    .single-box p {
	color: #ffffff;
    font-size: 14px;
    align-self: center;
    width: 300px;
}
}
</style>
</head>
<body>
    <div class="header">
    <nav class="navbar navbar-style">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a id="a" href=""><img class="logo" src="logo.png">KANISHKA BROADBAND</a>
          </div>
          <div class="collapse navbar-collapse" id="micon">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">Home</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="plan.php">Plans</a></li>
              <li><a href="payment.html">Payment</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a  onclick="openM()">Meter</a></li>
              <li><a href="profile.php">Profile</a></li>
          </ul>
          </div>
        </div>
      </nav>
    <div class="sec1">
        <div class="name">
        <h3 class="text">Welcome to</h3>
        <h1 class="main">KANISHKA<br>BROADBAND</h1>
        <span id="sp">easy to surfing....</span>
        </div>
        <div class="img">
            <img src="anim1.png" alt="">
        </div>
    </div>
        <div class="container part">
            <div class="row part1">
              <div class="col-sm-6 col-lg-6 col-md-6"><br><br><br><br>
                <h1 class="text1">Welcome To</h1>
                  <p class="text2">Kanishka Broadband</p>
                <h3 class="text3">easy to surfing.....</h3>
                  <a class="btn btn-first" href="Services.php">Services</a>
                  <a class="btn btn-first" href="ContactUs.php">Contact Us</a>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">  
                <div class="card">
                <div class="ban banner1">
                    <img src="photo.png" >
                </div>
                <div class="ban banner2"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.3782830552277!2d73.02000907498008!3d19.178673182047124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf71c92f5edb%3A0x7590424ba2ed2048!2sMumbai%20-%20Pune%20Rd%2C%20Narayan%20Nagar%2C%20Mumbra%2C%20Thane%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1705221312749!5m2!1sen!2sin" width="1450" height="450" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>
              </div>
            </div>
          </div>
        <div class="info-container">
            <div class="vis">
            <b id="head">VISION:</b>
                <br>
                    <p>
                    Our vision is to be among the top internet service providers globally, providing reliable and affordable internet services to customers.</p>
            </div>
            <div class="mis">
            <b id="head">MISSION:</b>
                <br>
                    <p>
                    To offer high-quality internet services with consistent connectivity, speed, and reliability. We aim to exceed customer expectations by delivering exceptional customer support, personalized service, and innovative technology </p>
            </div>
            <div class="ach">
            <b id="head">ACHIEVEMENT:</b>
            <br>
            <p>
            1. We have expanded our services to multiple locations, serving thousands of satisfied customers.
            <br>
            2. Our customer retention rate is consistently high due to our exceptional customer support and reliable internet services.<br>
            3. We have introduced innovative and affordable internet plans to cater to the diverse needs of our customers.
            <br>
            </p>
            </div>
        </div>
        <footer>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div id="single-box" class="single-box">
                      <img src="logo.png" alt="kanisha service">
                      <p><br>KANISHKA BROADBAND service,currently operating in Kalwa.
                         <br>We provide customized internet service to the users at kalwa.</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-box">
                  <center>
                    <h3>Social Media</h3>
                  </center>
                  <ul>
                  <center>
                    <li><a href="#">Instagram</a></li>
                  </center>
                  <center>
                    <li><a href="#">Facebook</a></li>
                  </center>
                  <center>
                    <li><a href="#">www.kanishkabroadband.com</a></li>
                  </center>
                  <center>
                    <li><a href="http:wa.me/+919594242427">Whatsapp</a></li>
                  </center>
                  </ul>
                </div>
              </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box">
                      <center>
                        <h3>Checkout Links</h3>
                      </center>
                      <ul>
                      <center>
                          <li><a href="plan.html">Plans</a></li>
                      </center>
                      <center>
                          <li><a href="contact.html">Contact Us</a></li>
                      </center>
                      <center>
                          <li><a href="#about">About</a></li>
                      </center>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-box">
                      <center>
                        <h3>Reach Us</h3>
                      </center>
                    <ul>
                    <center>
                      <li><a href=""><span class="glyphicon glyphicon-map-marker"></span> Kalwa,Thane(W)-400605</a></li>
                      <li><a href="tel:+919594242427"><span class="glyphicon glyphicon-phone"></span>+91 9594242427</a></li>
                      <li><a href="mailto:kanishkabroadband12@gmail.com"><span class="glyphicon glyphicon-envelope"></span> kanishkabroadband12@gmail.com</a></li>
                    </center>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
</div>
</body>
</html>
<script>
    var $card = $('.card');
    var $banner1 = $('.card .banner1');
    var $banner2 = $('.card .banner2');
    
    var $win = $(window);

    $win.on('scroll', function(){
        var top = $win.scrollTop();
        if(top>=500){
        $banner1.css('transform','perspective(600px) rotateY(180deg)');
        $banner2.css('transform','perspective(600px) rotateY(360deg)');
        }
        if(top<=500){
        $banner1.css('transform','perspective(600px) rotateY(360deg)');
        $banner2.css('transform','perspective(600px) rotateY(180deg)');
        }
        
    });
</script>
