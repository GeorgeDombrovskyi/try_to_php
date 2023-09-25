<?php
// filter data if we have straight connection (postman etc),
//for safety with SQL injection.

//use @ before filter_var - for ignore messages about depriccate method.

$login = @filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$password = @filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

// add to password little key for safety before we'll md5 It.
// Cause we save our Password in DB in this format.
$password = md5($password . "eitforfree");

// Connect to our DB
$mysql = new mysqli('localhost', 'root', 'root', 'eit_db');

// Do SQL acction that we need.
// Try to find User and match his name and password.
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

// If our action work - we'll do...
if ($result) {

    // Check if any rows were returned
    if ($result->num_rows > 0) {

        // Fetch the first row as an associative array
        $row = $result->fetch_assoc();

        // We want user information push to cookie, so before this we REMOVE from this info
        // user email and password. Just in case.
        unset($row['email'], $row['password'] );   

        // Convert data from the $row to a string (example using JSON)
        $dataAsString = json_encode($row);

        // Set cookie for autorization pur user
        setcookie('userAvatar', $dataAsString, time() + 3600, "/");

        // If we have nothing from DB, we do this...
    } else {
        // Go back the phrase, that give a signal to show message
        // about "we dont found this user"
        echo 'not found user';;
    }
// If our action DONT work - we'll do...
} else {
    echo "Query failed: " . $mysqli->error;
}

// Close connection with pur DB
$mysql->close();
