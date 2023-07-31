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
    <title>Diet Recall : Ebooks</title>
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
#blocking {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
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
            <li class="active"><a href="index.php">Home</a></li>
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
        <!-- search icon -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
  <!-- END MENU -->  
  
  <!-- Start single page header -->
  <section id="single-page-header8">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Ebooks</h2>
                <p><blockquote>"A Book is a gift you can open again and again because reading a good book is taking a journey!"</blockquote>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">EBOOKS</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->

        
        <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">DIET BOOKS</h2>
            <span class="line"></span>
            <p>We have free ebooks and pdfs for you ! Read it , grab some know-how and become one of these Hunks !!</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-leaf feature-icon"></i>
                  <h4 class="feat-title">Creative Design</h4>
-->
                  <p><img alt="download ebook" src="assets/images/Strength%20Training%20Anatomy.jpg" width="200" height="200" /></p>
                    <br/>
                  
                  <a href="assets/Ebooks/This%20is%20Your%20Brain%20on%20Food.pdf" id="blocking">This is Your Brain on Food</a>
                    
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-mobile feature-icon"></i>
                  <h4 class="feat-title">Responsive Layouts</h4>
-->
                 <p><img alt="download ebook" src="assets/images/arnold%20training%20chest.jpg" width="200" height="200" /></p>
                        
                        <br/>
                        
                        
                           <a href="assets/Ebooks/pdfcoffee.com_eating-in-the-age-of-dieting-by-rujuta-diwekar-z-liborgpdf-pdf-free.pdf id="blocking">Eating in the age of Dieting</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-thumbs-o-up feature-icon"></i>
                  <h4 class="feat-title">Great Features</h4>
-->
                  <p><img alt="download ebook" src="assets/images/arnold%20training%20delts%20arm.jpg" width="200" height="200" /></p>
                        <br/>
                        
                        
                           <a href="assets/Ebooks/GentleNutrition-BalancedMeals&Snacks-2022.pdf" id="blocking">GentleNutrition-BalancedMeals&Snacks</a>
                
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-gears feature-icon"></i>
                  <h4 class="feat-title">Multiple Options</h4>
-->
                  <p><img alt="download ebook" src="assets/images/arnold%20training%20back%20legs%20abs.jpg" width="200" height="200" />
                        </p>
                     <br/>
                        
                        
                           <a href="assets/Ebooks/fundamentals-of-foodnutrition-and-diet-therapy.pdf" id="blocking">fundamentals of foodnutrition and diet therapy</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
-->
                  <p><img alt="download ebook" src="assets/images/Men's%20Health%20-%20Total%20Body%20Muscle%20Plan.jpg" width="200" height="200" />
                        </p>
                    <br/>
                        
                           <a href="assets/Ebooks/Prescription%20for%20Nutritional%20Healing%203rd%20Ed.%20(%20PDFDrive%20).pdf" id="blocking">Prescription for Nutritional Healing</a>
                </div>
              </div>
                <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
-->
                   <p> <img alt="download ebook" src="assets/images/Lyle%20McDonald%20-%20A%20Guide%20to%20Flexible%20Dieting.jpg" width="200" height="200" /></p>
                     <br/>
                        
                        
                           <a href="assets/Ebooks/Lyle%20McDonald%20-%20A%20Guide%20to%20Flexible%20Dieting.pdf" id="blocking">Lyle McDonald - A Guide to Flexible Dieting</a>
                </div>
              </div>
                <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
-->
                 <p> <img alt="download ebook" src="assets/images/Brink's%20Bodybuilding%20Revealed.jpg" width="200" height="200" /></p>
                      <br/>
                        
                        
                           <a href="assets/Ebooks/Indian%20superfoods%20(%20PDFDrive%20).pdf" id="blocking">Indian superfoods</a>
                </div>
              </div>
                <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
-->
                   <p>   <img alt="download ebook" src="assets/images/Christopher%20Gerriero%20-%20Maximize%20Your%20Metabolism.jpg" width="200" height="200" /></p>
                      <br/>
                        
                           <a href="assets/Ebooks/Christopher%20Gerriero%20-%20Maximize%20Your%20Metabolism.pdf" id="blocking">Christopher Gerriero - Maximize Your Metabolism</a>
                </div>
              </div>
                <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
-->
                  <p>  <img alt="download ebook" src="assets/images/Kevin%20Trudeau%20-%20Natural%20Cures%20-%20Jan.%202006%20ebook.jpg" width="200" height="200" /></p>
                     <br/>
                        
                        
                            <a href="assets/Ebooks/Kevin%20Trudeau%20-%20Natural%20Cures%20-%20Jan.%202006%20ebook.pdf" id="blocking">Kevin Trudeau - Natural Cures - Jan. 2006 ebook</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
<!--
                  <i class="fa fa-smile-o feature-icon"></i>
                  <h4 class="feat-title">Awesome Support</h4>
-->
                  <p><img alt="download ebook" src="assets/images/Mackie%20Shilstone%20-%20The%20Fat-Burning%20Bible.jpg" width="200" height="200" /></p>
                    <br/>
                        
                        
                            <a href="assets/Ebooks/Mackie%20Shilstone%20-%20The%20Fat-Burning%20Bible.pdf" id="blocking">Kevin Trudeau - Natural Cures - Jan. 2006 ebook</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->
        
        
        
        
        

                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                              <span class="fa fa-tags"></span>
                              <a href="#">Workout,</a>
                              <a href="#">Gym,</a>
                              <a href="#">Exercise</a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="blog-single-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Start blog navigation -->
                  <div class="blog-navigation-area">
                    <div class="blog-navigation-prev">
                      <a href="#">
                        <h5>Books</h5>
                        <span>Previous Post</span>
                      </a>
                    </div>
                    <div class="blog-navigation-next">
                      <a href="#">
                        <h5>All about friends story</h5>
                        <span>Next Post</span>
                      </a>
                    </div>
                  </div>
                  <!-- Start Comment box -->
                  <div class="comments-box-area">
                    <h2>Leave a Comment</h2>
                    <p>Your email address will not be published.</p>
                    <form action="" class="comments-form">
                       <div class="form-group">                        
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">                        
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                       <div class="form-group">                        
                        <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                      </div>
                      <button class="comment-btn">Submit Comment</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4 visible-sm visible-xs">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <!-- Start blog search -->
                    <form>                    
                      <div class="search-group">                        
                        <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                        <input type="search" placeholder="Search">
                      </div>                    
                    </form>
                    <!-- End blog search -->                                
                  </div>
  <!-- End blog archive -->

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