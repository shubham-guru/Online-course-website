<?php
session_start();
$_SESSION['account_session']=1;
if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
	header("location:http://localhost/enlight/enlight/login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Page</title>
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
      <article>
      <div align="center">WELCOME <div id="username" class="probootstrap-heading probootstrap-animate">
            <b><?php echo $_SESSION['sName'] ?></b></div>
      </div>
     </article>
     <a href="logout">LOGOUT</a>
     <script src="js/scripts.min.js"></script>
      <script src="js/main.min.js"></script>
      <script src="js/custom.js"></script>
  </body>
</html>