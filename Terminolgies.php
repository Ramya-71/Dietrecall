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
    <title>DIET RECALL : Terminologies</title>
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

-->
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
  <section id="single-page-header2">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Terminologies</h2>
                <p><blockquote>"When diet is wrong, medicine is of no use. When diet is correct, medicine is of no need."</blockquote>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                  <li class="active">BASICS</li>
                <li class="active">Terminologies</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-title">
                      <h2>All about Terminologies</h2>
                    <div class="blog-news-details blog-single-details">
                        <h2>Terminologies</h2><br>
                        <ul>
                            <li><strong>Amino Acids</strong>Amino acids are the building blocks of proteins. The body produces many amino acids and others come from food. The body absorbs amino acids through the small intestine into the blood. Then the blood carries them throughout the body.
                            </li><br><br>
                            <li>
                                <strong>Blood Glucose</strong>Glucose — also called blood sugar — is the main sugar found in the blood and the main source of energy for your body.
                            </li><br><br>
                            <li>
                                <strong>Calories</strong> A unit of energy in food. Carbohydrates, fats, protein, and alcohol in the foods and drinks we eat provide food energy or "calories."
                            </li><br><br>
                            <li>
                                <strong>Carbohydrates</strong>Carbohydrates are one of the main types of nutrients. Your digestive system changes carbohydrates into glucose (blood sugar). Your body uses this sugar for energy for your cells, tissues and organs. It stores any extra sugar in your liver and muscles for when it is needed. There are two types of carbohydrates: simple and complex. Simple carbohydrates include natural and added sugars. Complex carbohydrates include whole grain breads and cereals, starchy vegetables and legumes.
                            </li><br><br>
                            <li>
                                <strong>Cholesterol</strong>Cholesterol is a waxy, fat-like substance that's found in all cells of the body. Your body needs some cholesterol to make hormones, vitamin D, and substances that help you digest foods. Your body makes all the cholesterol it needs. However, cholesterol also is found in some of the foods you eat. High levels of cholesterol in the blood can increase your risk of heart disease.
                            </li><br><br>
                            <li>
                                <strong>Diet</strong> Your diet is made up of what you eat and drink. There are many different types of diets, such as vegetarian diets, weight loss diets, and diets for people with certain health problems.
                            </li><br><br>
                            <li>
                                <strong>Fiber</strong>Fiber is a substance in plants. Dietary fiber is the kind you eat. It's a type of carbohydrate. You may also see it listed on a food label as soluble fiber or insoluble fiber. Both types have important health benefits. Fiber makes you feel full faster, and stay full for a longer time. That can help you control your weight. It helps digestion and helps prevent constipation.
                            </li><br><br>
                            <li>
                                <strong>Metabolism</strong>Metabolism is the process your body uses to get or make energy from the food you eat.
                            </li><br><br>
                            <li>
                                <strong>Nutrition</strong>This field of study focuses on foods and substances in foods that help animals (and plants) to grow and stay healthy. Nutrition science also includes behaviors and social factors related to food choices. The foods we eat provide energy (calories) and nutrients such as protein, fat, carbohydrate, vitamins, minerals, and water. Eating healthy foods in the right amounts gives your body energy to perform daily activities, helps you to maintain a healthy body weight, and can lower your risk for certain diseases such as diabetes and heart disease.
                            </li><br><br>
                            <li>
                                <strong>Protein</strong>Protein is in every living cell in the body. Your body needs protein from the foods you eat to build and maintain bones, muscles, and skin. You get proteins in your diet from meat, dairy products, nuts, and certain grains and beans. Proteins from meat and other animal products are complete proteins. This means they supply all of the amino acids the body can't make on its own. Plant proteins are incomplete. You must combine different types of plant proteins to get all of the amino acids your body needs. You need to eat protein every day, because your body doesn't store it the way it stores fats or carbohydrates.
                            </li>
                                <strong>Body Mass Index (BMI)</strong>- Measure of the relationship between height and weight; calculated by dividing weight in kilograms by height in centimeters squared.
                            </li><br><br>
                        </ul>
                        
                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                              <span class="fa fa-tags"></span>
                              <a href="#">FOOD,</a>
                              <a href="#">HEALTH,</a>
                              <a href="#">EXERCISE</a>
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
                        <h5>All about Terminologies</h5>
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
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="widget-catg">                      
                      <li><a href="#">Photoshop</a></li>
                      <li><a href="#">Web Design</a></li>
                      <li><a href="#">Web Development</a></li>
                      <li><a href="#">UI Design</a></li>
                      <li><a href="#">Photography</a></li>
                    </ul>
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Text Widget</h4>
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tag-cloud">
                      <a href="#">Responsive</a>
                      <a href="#">Design</a>
                      <a href="#">Modern</a>
                      <a href="#">Business</a>
                      <a href="#">Software</a>
                      <a href="#">Photoshop</a>
                      <a href="#">Fashion</a>                      
                      <a href="#">News</a>
                      <a href="#">Health</a>
                      <a href="#">Education</a>
                    </div>
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Archive</h4>
                    <ul class="widget-archive">
                      <li><a href="#">November 2015<span>(35)</span></a></li>
                      <li><a href="#">October 2015<span>(55)</span></a></li>
                      <li><a href="#">September 2015<span>(65)</span></a></li>
                      <li><a href="#">August 2015<span>(75)</span></a></li>
                      <li><a href="#">July 2015<span>(105)</span></a></li>
                    </ul>
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Important Links</h4>
                    <ul>
                      <li><a href="#">Link 1</a></li>
                      <li><a href="#">Link 2</a></li>
                      <li><a href="#">Link 3</a></li>
                      <li><a href="#">Link 4</a></li>
                    </ul>
                  </div>
                </aside>
              </div>             
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
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