<?php
// filter data if we have straight connection (postman etc),
//for safety with SQL injection.

//use @ before filter_var - for ignore messages about depriccate method.

$login = @filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$password = @filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

$email = @filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

$userAvatar = @filter_var(trim($_POST['userAvatar']),
    FILTER_SANITIZE_STRING);


if (mb_strlen($login) < 4 || mb_strlen($login) > 20 || mb_strlen($password) < 4 || mb_strlen($password) > 20) {
    echo 'something wrong with login or password length';
    exit();
} else {


    // add to password little key for safety before we'll md5 It
    $password = md5($password . "eitforfree");

    // connect to DB
    $mysql = new mysqli('localhost', 'root', 'root', 'eit_db');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");

    // Go back the phrase, that give a signal to show message
    // about "User with this NickName already exist"
    if ($result->num_rows > 0) {

        echo 'Already exist';
        exit();
        
    } else {

        // Do SQL code for register new user
        $mysql->query("INSERT INTO `users` (`login`, `email`, `password`, `userAvatar`)
            VALUES('$login', '$email', '$password', '$userAvatar')");

        //  Search this new user in DB
        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

        // Fetch the first row as an associative array
        $row = $result->fetch_assoc();

        // We want user information push to cookie, so before this we REMOVE from this info
        // user email and password. Just in case.
        unset($row['email'], $row['password'] );   

        // Convert data from the $row to a string (example using JSON)
        $dataAsString = json_encode($row);

        // Set cookie for autorization pur user
        setcookie('userAvatar', $dataAsString, time() + 3600, "/");

        // close the connection with our DB
        $mysql->close();
    }
}
;
