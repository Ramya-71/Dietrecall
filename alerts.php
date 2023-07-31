<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: userlogin1.php");
    exit;}
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Diet Recall Alert</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script>
    function setAlert() {
      // Get user inputs for meal and time
      var meal = document.getElementById("meal").value;
      var time = document.getElementById("time").value;

      // Create a Date object for the input time
      var alertTime = new Date(time);

      // Set up the alert message
      var message = "Time to eat " + meal + "!";

      // Set up the alert using setTimeout
      setTimeout(function() {
        alert(message);
      }, alertTime.getTime() - Date.now());
    }
  </script>
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
                <li><a href="diet.php">Diet</a><li>
                  <li><a href="alerts.php">alerts</a><li>
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

        

  </div>
  <h1>Diet Recall Alert</h1>
  <form>
    <label for="meal">Meal:</label>
    <input type="text" id="meal" name="meal"><br><br>
    <label for="time">Time:</label>
    <input type="time" id="time" name="time"><br><br>
    <button type="button" onclick="setAlert()">Set Alert</button>
  </form>
</body>
</html>
