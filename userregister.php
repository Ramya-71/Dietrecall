<?php

if(empty($_POST["name"])){
    $error = "Name is required";
    header("location: userlogin1.php#Register?error=" . urlencode($error));
}
if(empty($_POST["email"])){
    die("email is required");
}
if(empty($_POST["password"])){
    die("password is required");
}


 if(strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters");

 }

 if(!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter");
 }

 if(!preg_match("/[0-9]/", $_POST["password"])){
     die("Password must contain at least one number");
}

 if($_POST["password"] !== $_POST["password-conform"]){
    die("Passwords must watch");
 }
$password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);

// Include database connection
require_once 'config.php';

    $sql ="INSERT INTO users (name,email,password_hash)
            VALUES (?, ?, ?)";


    $stmt = $conn->stmt_init();


    if(!$stmt->prepare($sql)){
        die("SQL error: " . $conn->error);
    }

    $stmt->bind_param("sss",
                        $_POST["name"],
                        $_POST["email"],
                        $password_hash);

    try{
        $stmt->execute();
        $error1 = "You have successfully registered!";
        header("location: userlogin1.php?error=" . urlencode($error1));
        exit;
    }
    catch(mysqli_sql_exception $ex)
    {
    if ($ex->getCode() == 1062) {
        // handle duplicate entry error
        // for example, display an error message to the user

        $error1 = "The email address is already registered. Try logging in";
        header("location: userlogin1.php?error=" . urlencode($error1));

    } else {
        // handle other MySQL errors
        // for example, display a generic error message to the user
        $error =  "Please try again";
        header("location: userregister.php?error=" . urlencode($error));

    }
}



?>
