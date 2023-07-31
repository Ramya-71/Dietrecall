<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: userlogin1.php");
    exit;}
?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Diet Chart</title>
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="static/scripts/responses.js"></script>
  <script src="static/scripts/chat.js"></script>
  
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DIET RECALL : Home</title>
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
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color --> 
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

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
            <form action="save.php" method="post">
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
<!--            <a class="navbar-brand" href="index.html"><img src="assets/images/New%20LeanNGreen.png" alt="logo" width="200" height="100"></a> -->
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
                
                <li><a href="Calorie-Calculator.php">Anatomy and Exercises</a></li>
                <li><a href="diet.php">diet</a></li>
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
        </div><!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
    <h1>Diet Chart</h1>
    <form method="post" action="process.php">
      <label for="age">Age:</label>
      <input type="number" name="age" id="age" required>
      <br>
      <label for="weight">Weight (in kg):</label>
      <input type="number" name="weight" id="weight" required>
      <br>
      <label for="health-condition">Health Condition:</label>
      <select name="health-condition" id="health-condition" required>
        <option value="">Select a health-condition</option>
        <option value="diabetes">Diabetes</option>
        <option value="hypertension">Hypertension</option>
        <option value="heart-disease">Heart Disease</option>
        <option value="obesity">Obesity</option>
        <option value="none">None<</option>
      </select>
      <br>
      <input type="submit" value="Submit">
    </form>
    <hr>
     <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
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
    <!-- CHAT BAR BLOCK -->
   
    <?php
      // Process the form data here and generate the diet chart
      $images = array(
        "image1.jpg" => array("age" => array("0-10"), "weight" => array("0-30"), "health-condition" => array("none")),
        "image2.jpg" => array("age" => array("10-20"), "weight" => array("30-60"), "health-condition" => array("diabetes")),
        "image3.jpg" => array("age" => array("20-30"), "weight" => array("60-90"), "health-condition" => array("none")),
        "image4.jpg" => array("age" => array("30-40"), "weight" => array("90-120"), "health-condition" => array("hypertension")),
        "image5.jpg" => array("age" => array("40-50"), "weight" => array("120-150"), "health-condition" => array("Obesity")),
        "image6.jpg" => array("age" => array("40-50"), "weight" => array("120-150"), "health-condition" => array("heart-disease")),
      );
      
      // Process the form data
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $healthCondition = $_POST['health-condition'];
        
        // Search for the appropriate image based on the user's input
        $selectedImage = "";
        foreach ($images as $image => $ranges) {
          if (in_array($age, $ranges['age']) && in_array($weight, $ranges['weight']) && in_array($healthCondition, $ranges['health-condition'])) {
            $selectedImage = $image;
            break;
          }
        }
        
        // Display the selected image
        if ($selectedImage !== "") {
          echo '<img src="' . $selectedImage . '" alt="Diet Chart">';
        } else {
          echo 'Sorry, no image is available for your input.';
        }
      }
    ?>
  </body>
</html>
