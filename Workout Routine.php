<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: userlogin1.php");
    exit;}
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Diet recall : Workout Routine</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="static/scripts/responses.js"></script>
  <script src="static/scripts/chat.js"></script>
  
    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
img {
    display: inline-block;
}
</style>
  </head>
  <body> 
  <div class="chat-bar-collapsible">
      <button id="chat-button" type="button" class="collapsible">Chat with us!
          <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
      </button>
      <div class="content">
          <div class="full-chat-block">
              <!-- Message Container -->
                  <div class="chat-container">
                      <!-- Messages -->
                      <div id="chatbox">
                          <h5 id="chat-timestamp"></h5>
                          <p id="botStarterMessage" class="botText"><span>Hi I am Mac:)</span></p>
                      </div>

                      <!-- User input box -->
                      <div class="chat-bar-input-block">
                          <div id="userInput">
                              <input id="textInput" class="input-box" type="text" name="msg"
                                  placeholder="Tap 'Enter' to send a message">
                              <p></p>
                          </div>

                          <div class="chat-bar-icons">
                              <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                  onclick="heartButton()"></i>
                              <i id="chat-icon" style="color:brown;" class="fa fa-fw fa-send"
                                  onclick="sendButton()"></i>
                          </div>
                      </div>

                      <div id="chat-bar-bottom">
                          <p></p>
                      </div>

                  </div>
              </div>
              </div>
          </div>


  </div>
 
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
          <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
              <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#"><?php echo $_SESSION['username']; ?> </a>
              <a class="login modal-form"  href="signout.php"> Sign Out </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->

  <!-- Start login modal window -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
             <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span></label>
              <button class="btn signin-btn" type="button">SIGN IN</button>
            </div>                    
          </form>
        </div>
        <div class="modal-footer footer-box">
          <a href="#">Forgot password ?</a>
          <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
              <button class="btn signin-btn" type="button">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php">DIET RECALL</a>              
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->                    
        </div>

          <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">HOME</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">BASIC <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">              
               
                <li><a href="Terminolgies.php">Terminologies</a></li>          
              </ul>
            </li>
            <!--<li><a href="service.html">Service</a></li>-->
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">WORKOUT <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">              
                
                <li><a href="Calorie-Calculator.php">Calorie-Calculator</a></li>
                   </ul>
              </li>
            <li><a href="Plant%20Protein.php">PLANT PROTEIN</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PLANS <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
<!--                <li><a href="blog-archive.html">Blog Archive</a></li>                -->
                <li><a href="Vegan%20Diet%20Plan.php">Vegan Diet Plan</a></li>
                <li><a href="Workout%20Routine.php">Workout Routine</a></li>
<!--                <li><a href="blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>           -->
              </ul>
            </li>
              <li><a href="BMI-calc.php">BMI CAL</a></li>
            <li><a href="Stories.php">STORIES</a></li>               
            <li><a href="Ebooks.php">EBOOKS</a></li>
          </ul>                     
        </div>
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
  
 <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Workout Plan</h2>
                <p><blockquote>"Fitness is not about being better that someone else...<br>Its about being than you used to be"</blockquote></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">PLANS</li>
                  <li class="active">Workout Routine</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      
      <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
<!--            <h2 class="title">Features</h2>-->
         
            <p>Tighten Your Body From Head to Toe! Want to tone your body from head to toe
                you can give yourself a total body makeover— tightening those glutes, blasting that fat, and toning your legs and arms</p>
                
                 <span class="line"></span>
          </div>
        </div>
<!--
  <!-- End single page header -->
  <!-- Start error section  -->
  <section id="error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="errror-page-area">
<!--            <h1 class="error-title"><span class="fa fa-bug"></span></h1>-->
            <div class="error-content">
<!--              <span>Opps!</span>-->
                 <img src="assets/images/workout plan.jpg" alt="Workout Plan" width="820" height="700">
                 <h3>Day 1: Legs, shoulders, and abs</h3>
                 <ul><li><strong>Legs:</strong> <a href="https://www.youtube.com/watch?v=v_c67Omje48" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell squats</a> — 3 sets of 6–8 reps</li><li><strong>Shoulders:</strong> <a href="https://www.youtube.com/watch?v=M2rwvNhTOu0" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">standing shoulder press</a> — 3 sets of 6–8 reps</li><li><strong>Legs:</strong> <a href="https://www.youtube.com/watch?v=D7KaRcUTQeE" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell lunge</a> — 2 sets of 8–10 reps per leg</li><li><strong>Shoulders:</strong> <a href="https://www.youtube.com/watch?v=SO_nHq52a8o" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell upright rows</a> — 2 sets of 8–10 reps</li><li><strong>Hamstrings:</strong> <a href="https://www.youtube.com/watch?v=FQKfr1YDhEk" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">Romanian dumbbell deadlift</a> — 2 sets of 6–8 reps</li><li><strong>Shoulders:</strong> <a href="https://www.youtube.com/watch?v=g_7iXXBrCkY" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">lateral raises</a> — 3 sets of 8–10 reps</li><li><strong>Calves:</strong> <a href="https://www.youtube.com/watch?v=JbyjNymZOt0" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">seated calf raises</a> — 4 sets of 10–12 reps</li><li><strong>Abs:</strong> <a href="https://www.youtube.com/watch?v=4EJy-v6K0B0" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">crunches with legs elevated</a> — 3 sets of 10–12 reps</li></ul>
                 <h3>Day 2: Chest and back</h3>
                 <ul><li><strong>Chest:</strong> <a href="https://www.youtube.com/watch?v=Vc63DPUoA40" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell bench press</a> or <a href="https://www.youtube.com/watch?v=uUGDRwge4F8" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">floor press</a> — 3 sets of 6–8 reps</li><li><strong>Back:</strong> <a href="https://www.youtube.com/watch?v=--gDUDFKx6Q" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell bent-over rows</a> — 3 sets of 6–8 reps</li><li><strong>Chest:</strong> <a href="https://www.youtube.com/watch?v=QwuUZ5wgQOk" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell fly</a> — 3 sets of 8–10 reps</li><li><strong>Back:</strong> <a href="https://www.youtube.com/watch?v=PgpQ4-jHiq4" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">one-arm dumbbell rows</a> — 3 sets of 6–8 reps</li><li><strong>Chest:</strong> <a href="https://www.youtube.com/watch?v=XIHO5t_VBPQ" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">pushups</a> — 3 sets of 10–12 reps</li><li><strong>Back/chest:</strong> <a href="https://www.youtube.com/watch?v=4B-BrBH17uM" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell pullovers</a> — 3 sets of 10–12 reps</li></ul>
                 <h3>Day 3: Arms and abs</h3>
                 <ul><li><strong>Biceps:</strong> <a href="https://www.youtube.com/watch?v=sAq_ocpRh_I" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">alternating biceps curls</a> — 3 sets of 8–10 reps per arm</li><li><strong>Triceps: </strong><a href="https://www.youtube.com/watch?v=mRozZKkGIfg" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">overhead triceps extensions</a> — 3 sets of 8–10 reps </li><li><strong>Biceps:</strong> <a href="https://www.youtube.com/watch?v=soxrZlIl35U" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">seated dumbbell curls</a> — 2 sets of 10–12 reps per arm</li><li><strong>Triceps:</strong> <a href="https://www.youtube.com/watch?v=c3ZGl4pAwZ4" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">bench dips</a> — 2 sets of 10–12 reps</li><li><strong>Biceps:</strong> <a href="https://www.youtube.com/watch?v=ZcU2hN76UyA" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">concentration curls</a> — 3 sets of 10–12 reps</li><li><strong>Triceps:</strong> <a href="https://www.youtube.com/watch?v=HyqTb_jE_oI" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">dumbbell kickbacks</a> — 3 sets of 8–10 reps per arm</li><li><strong>Abs:</strong> <a href="https://www.youtube.com/watch?v=tgbrMdfuGJA" target="_blank" rel="noopener noreferrer" class="content-link css-5r4717">planks</a> — 3 sets of 30-second holds</li></ul>
<!--              <a class="error-home" href="index.html">Home Page</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End error section  -->

  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Subscribe Newsletter</h2>
              <form action="" class="subscrib-form">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="index.html"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>