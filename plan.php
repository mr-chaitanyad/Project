<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Navbar CDN BT link--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--Navbar CDN JQ link--><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--Navbar CDN BT link--><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Title icon link--><link rel="icon" type="image/x-icon" href="logo.png">
  <title>Kanishka Broadband/Plans</title>
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
              <li><a href="contact.html">Contact</a></li>
              <li><a  href="meter1.html">Meter</a></li>
              <li><a href="profile.php">Profile</a></li>
            </ul>
            </div>
          </div>
        </nav>
        <!--Navbar END-->
    <!-- slider section start -->
    
<div class="slider">
    <div class="list">
        <div class="item" width=100%>
            <img src="banner4.jpeg" width="100%" alt="">
        </div>
        <div class="item">
            <img src="banner2.jpeg" width="100%" alt="">
        </div>
        <div class="item">
            <img src="banner3.jpeg" width="100%" alt="">
        </div>
        <div class="item">
          <img src="banner1.jpeg" width="100%" alt="">
      </div>
      <div class="item">
          <img src="banner2.jpeg" width="100%" alt="">
      </div>
    </div>
    <div class="buttons">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
  </div>

<!--Slider End-->  

<section class="product" id="product">

<h1 class="heading"> new plans </h1>

<ul class="box-container">

    <li class="box">
        <span class="discount">10 Mbps + 13 OTT APPS</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="pr1.jpeg" alt="">
        <h3>latest plan</h3>
        
        <div class="quantity">
            <span>Plan ID: </span>
            <input type="number" min="1" disabled  max="100" value="10001">
        </div>
        <div class="price">₹599 <span>+GST</span></div>
        <a class="btn" onclick="viewP(1,'10','10')">View</a>
        <a class="btn" onclick="buy(1,'#10001')">Buy</a>
        
      </li>

    <li class="box">
      <span class="discount">25 Mbps + 13 OTT APPS</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="pr2.jpeg" alt="">
        <h3>latest plan</h3>
        
        <div class="quantity">
            <span>Plan ID: </span>
            <input type="number" min="1" disabled  max="100" value="10002">
        </div>
        <div class="price">₹449<span>+GST</span></div>
        <a href="#" class="btn" onclick="viewP(2,'25','15')">View</a>
        <a href="#" class="btn" onclick="buy(2,'#10002')">Buy</a>
      </li>

    <li class="box">
      <span class="discount">30 Mbps + 13 OTT APPS</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="pr3.jpeg" alt="">
        <h3>latest plan</h3>
        
        <div class="quantity">
            <span>Plan ID:</span>
            <input type="number" min="1" disabled  max="100" value="10003">
        </div>
        <div class="price">₹499 <span>+GST</span></div>
        <a href="#" class="btn" onclick="viewP(3,'30','15')">View</a>
        <a href="#" class="btn" onclick="buy(3,'#10003')">Buy</a>
      </li>

    <li class="box">
      <span class="discount">50 Mbps + 13 OTT APPS</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="pr4.jpeg" alt="">
        <h3>latest plan</h3>
        
        <div class="quantity">
            <span>Plan ID:</span>
            <input type="number" min="1" disabled  max="100" value="10004">
        </div>
        <div class="price">₹799<span>+GST</span></div>
        <a href="#" class="btn" onclick="viewP(4,'50','15')">View</a>
        <a href="#" class="btn" onclick="buy(4,'#10004')">Buy</a>
      </li>

    <li class="box">
      <span class="discount">100 Mbps + 13 OTT APPS</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="pr5.jpeg" alt="">
        <h3>latest plan</h3>
        
        <div class="quantity">
            <span>Plan ID: </span>
            <input type="number" min="1" disabled  max="100" value="10005">
        </div>
        <div class="price">₹649<span>+GST</span></div>
        <a href="#" class="btn" onclick="viewP(5,'100','20')">View</a>
        <a href="#" class="btn" onclick="buy(5,'#10005')">Buy</a>
      </li>

    <li class="box">
      <span class="discount">200 Mbps + 13 OTT APPS</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="pr6.jpeg" alt="">
        <h3>latest plan</h3>
        
        <div class="quantity">
            <span>Plan ID: </span>
            <input type="number" min="1" disabled  max="100" value="10006">
        </div>
        <div class="price">₹699 <span>+GST</span></div>
        <a href="#" class="btn" onclick="viewP(6,'200','20')">View</a>
        <a href="#" class="btn" onclick="buy(6,'#10006')">Buy</a>
      </li>

    </ul>
</section>
<!---Product End-->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">Routers: </h1>
    
    <ul class="box-container">
    
        <li class="box">
            <img src="router1.jpg" alt="">
            <div class="content">
                <h3>100 Mbps</h3>
                <p>A 100 Mbps router is a Wi-Fi device that allows multiple devices to connect and share data at a speed of 100 Mbps, supporting activities like streaming, gaming, and video calls.</p>
            </div>
          </li>
        <li class="box">
            <img src="router2.jpg" alt="">
            <div class="content">
                <h3>500 Mbps</h3>
                <p>A 500 Mbps router is a fast Wi-Fi device, supporting 500 Mbps speed for smooth multi-device usage, high-quality streaming, gaming, and video calls.</p>
            </div>
          </li>
        <li class="box">
            <img src="router3.jpg" alt="">
            <div class="content">
                <h3>1000 Mbps</h3>
                <p>A 1000 Mbps router is a high-speed wireless device for internet access and multi-device connectivity, offering faster data transfer and improved online experiences.</p>
            </div>
          </li>
        <li class="box">
            <img src="router4.jpg" alt="">
            <div class="content">
                <h3>200 Mbps</h3>
                <p>A 200 Mbps router is a wireless device for internet access, enabling multiple devices to connect and share the internet........................

                </p>
            </div>
          </li>
    
        </ul>
    
    </section>
    
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
    
    <!-- category section ends -->
</body>
    <style>
*{
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
}
html{
  scroll-behavior: smooth;
}
body{
    background: #0c192c;
    background-size: cover;
    max-height: 400px;
  font-family:Comic Sans MS;
}

section{
  padding: 1.0rem 2%;
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
  font-family: Comic Sans MS;
}
 #a .logo{
  height: 80px;
}
 #a .logo:hover{
  mix-blend-mode:lighten;
} 
.icon-bar{
  background-color: red;
}
.nav li{
  padding: 10px 10px;
  font-size: 14px;
}
.nav li a{
    color: white;
    font-family: Comic Sans MS;
    font-size: 15px;
}
.nav li a:hover{
    color: red;
    border-radius: 20px;
}
.nav{
    padding: 10px;
}

.btn{
  display: inline-block;
  margin-top: 1rem;
  padding:.8rem 3rem;
  font-size: 1.7rem;
  cursor: pointer;
  background-color: black;
    color:white;
    text-emphasis: none;
    text-align: center;
}

.btn:hover{
    background-color:#ffffff ;
    color: red; 
}

.slider{
    width: 90%;
    height: 400px;
    margin: 60px;
    position: relative;
    overflow: hidden;
    border-radius: 2rem;
    display: flex;
    box-shadow: 0 5px 10px #000;
}
.slider .list{
    position: absolute;
    width: max-content;
    height: 100%;
    left: 0;
    top: 0;
    display: flex;
    transition: 1s;
}
.slider .list img{
    width: 100%;
    height: 100%;
    object-fit:cover;
    background: linear-gradient(135deg,rgb(92, 92, 248),rgb(0,0,0,0));
}
.slider .buttons{
    position: absolute;
    top: 45%;
    left: 5%;
    width: 90%;
    display: flex;
    justify-content: space-between;
}
.slider .buttons button{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: gray;
    color: #fff;
    border: none;
    font-family: monospace;
    font-weight: bold;
}
.slider .dots{
    position: absolute;
    bottom: 10px;
    left: 0;
    color: gray;
    width: 100%;
    margin:0;
    padding: 0;
    display: flex;
    justify-content: center;
}
.slider .dots li{
    list-style: none;
    width: 10px;
    height: 10px;
    background-color: red;
    margin: 10px;
    border-radius: 20px;
    transition: 0.5s;
}
.slider .dots li.active{
    width: 30px;
}
@media screen and (max-width: 768px){
    
.slider{
    width: 95%;
    height: 300px;
    position: relative;
    overflow: hidden;
    margin: 20px;
}
.slider .list{
    position: absolute;
    width: max-content;
    height: 100%;
    left: 0;
    top: 0;
    display: flex;
    transition: 1s;
}
}


  .product .heading ,.category .heading{
  font-size: 3rem;
  color:#fff;
  padding-left: 1rem;
  border-left: .4rem solid white;
  margin-top: .4rem;
  margin-bottom: .4rem;
}

.product .box-container{
  display: flex;
  padding: 30px;
  scroll-snap-type: x mandatory;
overflow-x:scroll;
  gap:2rem;
  list-style-type:none;
}

.product .box-container .box{
  flex: 0 0 400px;
margin: 10px;
  border-radius: 2rem;
  border:.1rem solid rgba(0,0,0,.3);
    box-shadow: 0 5px 10px #000;
  text-align: center;
  position: relative;
  height: 500px;
  flex-direction: column;
  scroll-snap-align: start;
  background: white;

}
.product .box-container::-webkit-scrollbar{
  height: 12px;
}
.product .box-container::-webkit-scrollbar-thumb,
.product .box-container::-webkit-scrollbar-track
{
border-radius: 92px;
}
.product .box-container::-webkit-scrollbar-thumb{
  background: rgb(207, 207, 207);

}

.product .box-container .box img{
  height: 20rem;
  width:100%;
  border-radius: 20px 20px 0 0;
  border-bottom:.1rem solid rgba(0,0,0,.3);
  object-fit: cover;
}

.product .box-container .box .discount{
  position: absolute;
  top:1rem; left:1rem;
  background-color:rgba(86, 119, 160, 0.998);
  color: white;
  font-size: 1.3rem;
  border-radius: 2px;
  padding:.5rem 1rem;
}

.product .box-container .box .icons{
  position: absolute;
  top:1rem; right:-8rem;
  display: flex;
  flex-flow: column;
  background:#fff;
  border-radius: 5rem;
  padding:.5rem;
  display: none;
    box-shadow: 0 5px 10px #000;
}

.product .box-container .box:hover .icons{
  right:1rem;
  display: flex;
}

.product .box-container .box .icons a{
  height: 4rem;
  width:4rem;
  line-height: 4rem;
  font-size: 1.5rem;
  color:#333;
  border-radius: 5rem;
  margin:.1rem;
}

.product .box-container .box .icons a:hover{
  color:#fff;
  background:var(--green);
}

.product .box-container .box h3{
  color:#333;
  font-size: 2.5rem;
  padding:1rem 0;
}


.product .box-container .box .quantity{
  padding:1rem 0;
}

.product .box-container .box .quantity span{
  font-size: 2rem;
}

.product .box-container .box .quantity input{
  font-size: 2rem;
  padding:.5rem;
  text-align: center;
  background:rgba(0,0,0,.1);
}

.product .box-container .box .price{
  font-weight: bolder;
  color:var(--green);
  font-size: 2rem;
  margin: 20px 20px;
}
.product .box-container .box{
  transition: 1.1s;
}
.product .box-container .box:hover{
  transform: scale(1.1);
  z-index: 2;
}


.product .box-container .box .price span{
  color:#999;
  font-size: 1.5rem;
}

.product .box-container .box .btn{
  display: inline;
  margin-top:200px;
  margin-left:20px;
  width: 40%;
  border-radius: 1rem;
}


.category .box-container{
  border-radius: 2rem;
  display: flex;
  padding: 20px;
  scroll-snap-type: x mandatory;
overflow-x:scroll;
  gap:2rem;
  list-style-type:none;
}

.category .box-container .box{
  height: 30rem;
  overflow: hidden;
    width: 200px;
  flex: 0 0 350px;
  border-radius: 2rem;
  border:.1rem solid rgba(0,0,0,.3);
    box-shadow: 0 5px 10px #000;
  text-align: center;
  position: relative;
  flex-direction: column;
  scroll-snap-align: start;
}

.category .box-container::-webkit-scrollbar{
  height: 12px;
}
.category .box-container::-webkit-scrollbar-thumb,
.category .box-container::-webkit-scrollbar-track
{
border-radius: 92px;
}
.category .box-container::-webkit-scrollbar-thumb{
  background: rgb(207, 207, 207);

}


.category .box-container .box img{
  height: 100%;
  width:100%;
  object-fit: cover;
}

.category .box-container .box .content{
  position: absolute;
  bottom: -9rem;
  background: #f7f7f7;
  border-top:.1rem solid rgba(0,0,0,.3);
  text-align: center;
  padding:.5rem 0;
  width:100%;
}

.category .box-container .box:hover img{
    filter: blur(3px);
    -webkit-filter: blur(3px);
}
.category .box-container .box:hover .content{
  bottom:0;
  transition: all .3s linear;
}

.category .box-container .box .content h3{
  color:#333;
  font-size: 2.5rem;
  padding:.5rem 0;
}

.category .box-container .box .content .btn{
  margin-bottom: 1.3rem;
  border-radius: 2rem;
}

@media (max-width:1200px){

html{
  font-size: 55%;
}

}

@media (max-width:991px){


.product{
    margin-top:calc(100%-1000px);
}
section{
  padding:1.5rem;
}
}

@media (max-width:767px){
.product .box-container .box{
  overflow: hidden;
  border:.1rem solid rgba(0,0,0,.3);
    box-shadow: 0 5px 10px #000;
  flex: 0 0 350px;
  border-radius: 2rem;
  border:.1rem solid rgba(0,0,0,.3);
  text-align: center;
  max-width: 300px;
  height: 400px;
}
.product .box-container .box .btn{
  display: inline;
  margin-top: 20px;
  margin-left: 20px;
  width: 40%;
  border-radius: 1rem;
}
#single-box{
        display: flex;
    }
    .container .single-box img{
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

@media (max-width:767px){
  .navbar{
    padding:0px;
  }
  #a .logo{
    height: 60px;
  }
  .nav li{
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
}
@media (max-width:400px){
  .navbar{
    padding:0px;
  }
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

    </style>

    <script>
        
function onClickMenu(){
    document.getElementById("menu").classList.toggle("icon")
    document.getElementById("nav").classList.toggle("change")

}
let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};

function viewP(val,a,b)
{
  if(val==1){
  w1 = window.open('','view','width=500,height=600');
  w1.document.write(`<html><head><link rel='stylesheet' href='viewStyle.css'></head><body><div class='box'><span class='discount'>30 Mbps + 13 OTT APPS</span><div class='icons'><a href='#'' class='fas fa-heart'></a><a href='#' class='fas fa-share'></a> <a href='#' class='fas fa-eye'></a> </div><div class='table'><table border='1'><tr><th>Plan Validity</th> <th> Bill Cycle</th></tr> <tr><td>Speed</td><td> ${a} Mbps (Upload & Download)</td></tr><tr><td>Data</td> <td>Unlimited</td></tr><tr><td>Voice</td><td>Free</td></tr><tr>  <td>On-demand TV</td><td>${b}+ TV Channels</td> </tr></table></div> <div class='stars'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></div><div class='note'><h6> Note:<li>Commercial usage policy applicable on all unlimited plan</li><li>GST additional on applicable components</li> </h6> </div><a href='' class='btn'>Buy</a></div></body></html>`);
  }
  if(val==2){
  w2 = window.open('','view','width=500,height=600');
  w2.document.write(`<html><head><link rel='stylesheet' href='viewStyle.css'></head><body><div class='box'><span class='discount'>30 Mbps + 13 OTT APPS</span><div class='icons'><a href='#'' class='fas fa-heart'></a><a href='#' class='fas fa-share'></a> <a href='#' class='fas fa-eye'></a> </div><div class='table'><table border='1'><tr><th>Plan Validity</th> <th> Bill Cycle</th></tr> <tr><td>Speed</td><td> ${a} Mbps (Upload & Download)</td></tr><tr><td>Data</td> <td>Unlimited</td></tr><tr><td>Voice</td><td>Free</td></tr><tr>  <td>On-demand TV</td><td>${b}+ TV Channels</td> </tr></table></div> <div class='stars'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></div><div class='note'><h6> Note:<li>Commercial usage policy applicable on all unlimited plan</li><li>GST additional on applicable components</li> </h6> </div><a href='' class='btn'>Buy</a></div></body></html>`);
  }
  if(val==3){
  w3 = window.open('','view','width=500,height=600');
  w3.document.write(`<html><head><link rel='stylesheet' href='viewStyle.css'></head><body><div class='box'><span class='discount'>30 Mbps + 13 OTT APPS</span><div class='icons'><a href='#'' class='fas fa-heart'></a><a href='#' class='fas fa-share'></a> <a href='#' class='fas fa-eye'></a> </div><div class='table'><table border='1'><tr><th>Plan Validity</th> <th> Bill Cycle</th></tr> <tr><td>Speed</td><td> ${a} Mbps (Upload & Download)</td></tr><tr><td>Data</td> <td>Unlimited</td></tr><tr><td>Voice</td><td>Free</td></tr><tr>  <td>On-demand TV</td><td>${b}+ TV Channels</td> </tr></table></div> <div class='stars'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></div><div class='note'><h6> Note:<li>Commercial usage policy applicable on all unlimited plan</li><li>GST additional on applicable components</li> </h6> </div><a href='' class='btn'>Buy</a></div></body></html>`);
  }
  if(val==4){
  w4 = window.open('','view','width=500,height=600');
  w4.document.write(`<html><head><link rel='stylesheet' href='viewStyle.css'></head><body><div class='box'><span class='discount'>30 Mbps + 13 OTT APPS</span><div class='icons'><a href='#'' class='fas fa-heart'></a><a href='#' class='fas fa-share'></a> <a href='#' class='fas fa-eye'></a> </div><div class='table'><table border='1'><tr><th>Plan Validity</th> <th> Bill Cycle</th></tr> <tr><td>Speed</td><td> ${a} Mbps (Upload & Download)</td></tr><tr><td>Data</td> <td>Unlimited</td></tr><tr><td>Voice</td><td>Free</td></tr><tr>  <td>On-demand TV</td><td>${b}+ TV Channels</td> </tr></table></div> <div class='stars'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></div><div class='note'><h6> Note:<li>Commercial usage policy applicable on all unlimited plan</li><li>GST additional on applicable components</li> </h6> </div><a href='' class='btn'>Buy</a></div></body></html>`);
  }
  if(val==5){
  w5 = window.open('','view','width=500,height=600');
  w5.document.write(`<html><head><link rel='stylesheet' href='viewStyle.css'></head><body><div class='box'><span class='discount'>30 Mbps + 13 OTT APPS</span><div class='icons'><a href='#'' class='fas fa-heart'></a><a href='#' class='fas fa-share'></a> <a href='#' class='fas fa-eye'></a> </div><div class='table'><table border='1'><tr><th>Plan Validity</th> <th> Bill Cycle</th></tr> <tr><td>Speed</td><td> ${a} Mbps (Upload & Download)</td></tr><tr><td>Data</td> <td>Unlimited</td></tr><tr><td>Voice</td><td>Free</td></tr><tr>  <td>On-demand TV</td><td>${b}+ TV Channels</td> </tr></table></div> <div class='stars'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></div><div class='note'><h6> Note:<li>Commercial usage policy applicable on all unlimited plan</li><li>GST additional on applicable components</li> </h6> </div><a href='' class='btn'>Buy</a></div></body></html>`);
  }
  if(val==6){
  w6 = window.open('','view','width=500,height=600');
  w6.document.write(`<html><head><link rel='stylesheet' href='viewStyle.css'></head><body><div class='box'><span class='discount'>30 Mbps + 13 OTT APPS</span><div class='icons'><a href='#'' class='fas fa-heart'></a><a href='#' class='fas fa-share'></a> <a href='#' class='fas fa-eye'></a> </div><div class='table'><table border='1'><tr><th>Plan Validity</th> <th> Bill Cycle</th></tr> <tr><td>Speed</td><td> ${a} Mbps (Upload & Download)</td></tr><tr><td>Data</td> <td>Unlimited</td></tr><tr><td>Voice</td><td>Free</td></tr><tr>  <td>On-demand TV</td><td>${b}+ TV Channels</td> </tr></table></div> <div class='stars'><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></div><div class='note'><h6> Note:<li>Commercial usage policy applicable on all unlimited plan</li><li>GST additional on applicable components</li> </h6> </div><a href='' class='btn'>Buy</a></div></body></html>`);
  }
}
function buy(val,id)
{
  if(val==1){
  w1 = window.open('','buy','width=500,height=600');
  w1.document.write(`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Add your CSS styles here */
        body {
  font-family:Comic Sans MS;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
        }
    .btn{
        margin: 20px;
  font-family:Comic Sans MS;
        width: 160px;
        padding: 10px;
        border-radius: 50px;
        font-size: 20px; 
        border:none;
        background-color: black;
            color:white;
            text-emphasis: none;
            text-align: center;
        }
        .btn:hover{
        background-color:#ffffff ;
            color: red; 
        }
</style>
</head>
<body>
    <h1>Request to Add plan</h1>
    <form action="https://formsubmit.co/3db559f1c05ee69b2d185c55661a3524" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="<?php if(isset($_SESSION['uname']))echo $_SESSION['uname']; else exit();?>" required>

        <label for="plan">Plan ID:</label>
        <input type="text" id="plan" value=${id} readonly name="Plan ID" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" value="Add Plan" readonly  name="subject">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" class="btn" value="Send Message">
    </form>
</body>
</html>`);
  }
  if(val==2){
  w2 = window.open('','buy','width=500,height=600');
  w2.document.write(`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Add your CSS styles here */
        body {
  font-family:Comic Sans MS;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
        }
    .btn{
        margin: 20px;
        width: 160px;
  font-family:Comic Sans MS;
        padding: 10px;
        border-radius: 50px;
        font-size: 20px; 
        border:none;
        background-color: black;
            color:white;
            text-emphasis: none;
            text-align: center;
        }
        .btn:hover{
        background-color:#ffffff ;
            color: red; 
        }
</style>
</head>
<body>
    <h1>Request to Add plan</h1>
    <form action="https://formsubmit.co/3db559f1c05ee69b2d185c55661a3524" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="<?php if(isset($_SESSION['uname']))echo $_SESSION['uname']; else exit();?>" required>

        <label for="plan">Plan ID:</label>
        <input type="text" id="plan" value=${id} readonly name="Plan ID" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" value="Add Plan" readonly  name="subject">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" class="btn" value="Send Message">
    </form>
</body>
</html>`);
  }
  if(val==3){
  w3 = window.open('','buy','width=500,height=600');
  w3.document.write(`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Add your CSS styles here */
        body {
  font-family:Comic Sans MS;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
        }
    .btn{
        margin: 20px;
        width: 160px;
        padding: 10px;
  font-family:Comic Sans MS;
        border-radius: 50px;
        font-size: 20px; 
        border:none;
        background-color: black;
            color:white;
            text-emphasis: none;
            text-align: center;
        }
        .btn:hover{
        background-color:#ffffff ;
            color: red; 
        }
</style>
</head>
<body>
    <h1>Request to Add plan</h1>
    <form action="https://formsubmit.co/3db559f1c05ee69b2d185c55661a3524" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="<?php if(isset($_SESSION['uname']))echo $_SESSION['uname']; else exit();?>" required>

        <label for="plan">Plan ID:</label>
        <input type="text" id="plan" value=${id} readonly name="Plan ID" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" value="Add Plan" readonly  name="subject">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" class="btn" value="Send Message">
    </form>
</body>
</html>`);
  }
  if(val==4){
  w4 = window.open('','buy','width=500,height=600');
  w4.document.write(`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Add your CSS styles here */
        body {
  font-family:Comic Sans MS;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
        }
    .btn{
  font-family:Comic Sans MS;
        margin: 20px;
        width: 160px;
        padding: 10px;
        border-radius: 50px;
        font-size: 20px; 
        border:none;
        background-color: black;
            color:white;
            text-emphasis: none;
            text-align: center;
        }
        .btn:hover{
        background-color:#ffffff ;
            color: red; 
        }
</style>
</head>
<body>
    <h1>Request to Add plan</h1>  
    <form action="https://formsubmit.co/3db559f1c05ee69b2d185c55661a3524" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="<?php if(isset($_SESSION['uname']))echo $_SESSION['uname']; else exit();?>" required>

        <label for="plan">Plan ID:</label>
        <input type="text" id="plan" value=${id} readonly name="Plan ID" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" value="Add Plan" readonly  name="subject">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit"class="btn" value="Send Message">
    </form>
</body>
</html>`);
  }
  if(val==5){
  w5 = window.open('','buy','width=500,height=600');
  w5.document.write(`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<style>
    /* Add your CSS styles here */
        body {
  font-family:Comic Sans MS;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
        }
    .btn{
        margin: 20px;
  font-family:Comic Sans MS;
        width: 160px;
        padding: 10px;
        border-radius: 50px;
        font-size: 20px; 
        border:none;
        background-color: black;
            color:white;
            text-emphasis: none;
            text-align: center;
        }
        .btn:hover{
        background-color:#ffffff ;
            color: red; 
        }
</style>
</head>
<body>
    <h1>Request to Add plan</h1>
    <form action="https://formsubmit.co/3db559f1c05ee69b2d185c55661a3524" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="<?php if(isset($_SESSION['uname']))echo $_SESSION['uname']; else exit();?>" required>

        <label for="plan">Plan ID:</label>
        <input type="text" id="plan" value=${id} readonly name="Plan ID" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" value="Add Plan" readonly  name="subject">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" class="btn" value="Send Message">
    </form>
</body>
</html>`);
  }
  if(val==6){
  w6 = window.open('','buy','width=500,height=600');
  w6.document.write(`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Add your CSS styles here */
        body {
  font-family:Comic Sans MS;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
        }
    .btn{
        margin: 20px;
  font-family:Comic Sans MS;
        width: 160px;
        padding: 10px;
        border-radius: 50px;
        font-size: 20px; 
        border:none;
        background-color: black;
            color:white;
            text-emphasis: none;
            text-align: center;
        }
        .btn:hover{
        background-color:#ffffff ;
            color: red; 
        }
</style>
</head>
<body>
    <h1>Request to Add plan</h1>
    <form action="https://formsubmit.co/3db559f1c05ee69b2d185c55661a3524" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name"  value="<?php if(isset($_SESSION['uname']))echo $_SESSION['uname']; else exit();?>" required>

        <label for="plan">Plan ID:</label>
        <input type="text" id="plan" value=${id} readonly name="Plan ID" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" value="Add Plan" readonly  name="Subject">

        <label for="message">Message:</label>
        <textarea id="message" name="Message" rows="4" required></textarea>

        <input type="submit" class="btn" value="Send Message">
    </form>
</body>
</html>`);
  }
}
function openM()
{
    window.open('meter1.html','Speed Meter','width=400,height=400,top=200,left=500');
}
    </script>
    </html>