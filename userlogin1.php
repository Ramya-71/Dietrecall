<?php
// Start session
session_start();

// Check if user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('location: index.php');
    exit;
}

// Include database connection
require_once 'config.php';

// Define variables and initialize with empty values
$email = $password = '';
$email_err = $password_err = $err = '';
$is_invalid = 0;

// Processing form data when form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Check if email is empty
    if (empty(trim($_POST['email']))) {
        $email_err = 'Please enter email.';
    } else {
        $email = trim($_POST['email']);
    }

    // Check if password is empty
    if (empty(trim($_POST['password']))) {
        $password_err = 'Please enter your password.';
    } else {
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        $sql = 'SELECT * FROM users WHERE email = ?';

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $param_email);
            $param_email = $email;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                // Check if email exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $username, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION['loggedin'] = true;
                            $_SESSION['email'] = $email;
                            $_SESSION['username'] = $username;
                            echo "sucessfull";
                            // Redirect user to welcome page
                            header('location: index.php');
                        } else {
                            // Password is not valid, display a generic error message
                            $err = 'The password you entered was not valid.';
                            $is_invalid = 1;
                        }
                    }
                } else {
                    // email doesn't exist, display a generic error message
                    $err = 'No account found with that email.';
                    $is_invalid = 1;
                }
            } else {
                echo 'Oops! Something went wrong. Please try again later.';
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login and Registration form</title>
        <link rel="stylesheet" href="userstyle.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()" >Log In</button>
                    <button type="button" class="toggle-btn" onclick="Register()">Register</button>
                </div>
                <form id="login" method="post"  class="input-group">
                        <?php if($is_invalid): ?>
                            <em><?php echo $err ?></em>
                        <?php endif; ?>
                        <?php if (!empty($_GET['error'])) : ?>
                          <div class="error"><?php echo $_GET['error']; ?></div>
                        <?php endif; ?>
                    <input type="email" class="input-field" placeholder="email Id" name="email" required>
                    <input type="password" class="input-field" placeholder="Password" name="password" required>
                   <button type="submit" class="submit-btn">LogIn</button>
                </form>

                <form action="userregister.php" method="post" id="Register" class="input-group" novalidate>
                    <?php if (!empty($_GET['error1'])) : ?>
                      <div class="error"><?php echo $_GET['error1']; ?></div>
                    <?php endif; ?>
                    <input type="text" class="input-field" placeholder="Username" name="name" required>
                    <input type="email" class="input-field" placeholder="Email Id" name="email" required>
                    <input type="password" class="input-field" placeholder="Password" name="password" required>
                    <input type="password" class="input-field" placeholder="Renter-password" name="password-conform" required>
                   <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
        </div>
        <script>
            var x=document.getElementById("login");
            var y=document.getElementById("Register");
            var z=document.getElementById("btn");
            function Register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
        </script>
    </body>
</html>
