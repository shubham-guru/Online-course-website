<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zoology Page</title>
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
  article h1, h3{
      color: #455;
  }
  article p{
      margin-right: 5%;
      margin-left: 5%;
  }
  h3,ul{
    margin-left: 5%;
  }
  #button_div{
      margin-bottom: 5%;
  }
  #button{
      color: #6941ED;
      background: #fff;
      padding: 1% 5% 1% 5%;
      border: solid 1px #6941ED;
      border-radius: 100px;
  }
  #button:hover{
      transition: 0.5s;
      color: #fff;
      background: #6941ED;
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
          <h1 align="center" class="col-md-12 text-center section-heading probootstrap-animate" >Zoology</h1>
          <p class="probootstrap-heading probootstrap-animate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis 
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
            <h3>Syllabus</h3>
            <ul>
                <li class="probootstrap-animate" data-animate-effect="fadeInRight">Topic 1</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">Topic 2</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInRight">Topic 3</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">Topic 4</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInRight">Topic 5</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">Topic 6</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInRight">Topic 7</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">Topic 8</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInRight">Topic 9</li>
                <li class="probootstrap-animate" data-animate-effect="fadeInLeft">Topic 10</li>
            </ul>
            <div align="center" id="button_div" class="probootstrap-heading probootstrap-animate">
                <a id="button" href="enroll">ENROLL</a>
            </div>
      </article>
      <footer class="probootstrap-footer probootstrap-bg">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="probootstrap-footer-widget">
                    <h3>About The School</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                    <h3>Social</h3>
                    <ul class="probootstrap-footer-social">
                      <li><a href="#"><i class="icon-twitter"></i></a></li>
                      <li><a href="#"><i class="icon-facebook"></i></a></li>
                      <li><a href="#"><i class="icon-github"></i></a></li>
                      <li><a href="#"><i class="icon-dribbble"></i></a></li>
                      <li><a href="#"><i class="icon-linkedin"></i></a></li>
                      <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-md-push-1">
                  <div class="probootstrap-footer-widget">
                    <h3>Links</h3>
                    <ul>
                      <li><a href="index">Home</a></li>
                      <li><a href="courses">Courses</a></li>
                      <li><a href="teachers">Teachers</a></li>
                      <li><a href="signup">Signup</a></li>
                      <li><a href="account">Account</a></li>
                      <li><a href="contact">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="probootstrap-footer-widget">
                    <h3>Contact Info</h3>
                    <ul class="probootstrap-contact-info">
                      <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                      <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                      <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 probootstrap-back-to-top">
                    <p><a href="#" class="js-backtotop">Back to top<i class="icon-arrow-long-up"></i></a></p>
                </div>
              </div>
            </div>
          </footer>
      <script src="js/scripts.min.js"></script>
      <script src="js/main.min.js"></script>
      <script src="js/custom.js"></script>
  </body>
</html>