<?php
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
	header("location:http://localhost/enlight/enlight/login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enrollment Page</title>
    <meta name="description" content="Free Education Portal">
    <meta name="keywords">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300&display=swap" rel="stylesheet">
  </head>
  <style>
    body{
    margin: 0;
    padding: 0;
    font-family: 'Josefin Sans', sans-serif;
  }
 #username{
   margin-top: 1%;
   font-size: 1.5em;
   text-transform: uppercase;
 }
 .notes h3{
    color: #555;
    margin: 5%; 
 }
 .notes p{
   margin-left: 6%;
   margin-right: 6%;
 }
 .nav_button{
   margin: 5%;
   padding: 1%;
   font-size: 1.5em;
   color: #49d292;
   border: solid 2px #49d292;
   border-radius: 100px; 
 }
 .nav_button:hover{
  color: #fff;
  background: #49d292;
 }
 #next{
  margin-left: 70%;
 }
  </style>
  <body>
  <nav class="navbar navbar-default probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index" title="uiCookies:Enlight">Enlight</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index">Home</a></li>
            <li><a href="courses">Courses</a></li>
            <li><a href="about">About</a></li>
            <li><a href="signup">Signup</a></li>
            <li><a href="account">Account</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div align="center">
      <b><div class="probootstrap-heading probootstrap-animate" id="username"> <?php echo $_SESSION['sName'] ?></div></b><br><br>
    </div><br><br>
    <div></div>
    <div class="video" align="center">
    <iframe width="700" height="345" src="https://www.youtube.com/embed/yDkSWd_ZbbE">
    </iframe>
    </div>
    <div class="notes">
      <h3 class="probootstrap-heading probootstrap-animate">Notes:</h3>
      <p class="probootstrap-animate" data-animate-effect="fadeInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis 
            explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus
            optio accusantium! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.Sed a repudiandae impedit voluptate nam 
            Deleniti dignissimos perspiciatis nostrum porro nesciunt.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo
            vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus
            optio accusantium! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.Sed a repudiandae impedit voluptate nam 
            Deleniti dignissimos perspiciatis nostrum porro nesciunt.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo
            vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus
            optio accusantium! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.Sed a repudiandae impedit voluptate nam 
            Deleniti dignissimos perspiciatis nostrum porro nesciunt.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo
            vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus
            optio accusantium! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.Sed a repudiandae impedit voluptate nam 
            Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
    </div>
    <a href="#" class="nav_button">Previous</a><a href="#" class="nav_button" id="next">Next</a>
    <a href="logout">LOGOUT</a>
      <script src="js/scripts.min.js"></script>
      <script src="js/main.min.js"></script>
      <script src="js/custom.js"></script>
  </body>
</html>