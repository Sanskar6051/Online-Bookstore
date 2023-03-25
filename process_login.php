<?php
// start session
session_start();

// check if user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: indexf.html");
    exit;
}

// check if form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // validate inputs
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // check if username and password are correct
    if($username === "bookstore" && $password === "password123"){

        // start session and set session variables
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // redirect to welcome page
        header("location: indexf.html");
    } else {
        // display error message
        echo "Invalid username or password.";
    }
}
?>
