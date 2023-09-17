<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 4 || mb_strlen($login) > 20 || mb_strlen($password) < 4 || mb_strlen($password) > 20) {
    echo 'something wrong with login or password length';
    exit();
} else {

    $password = md5($password."eitforfree");
    
    $mysql = new mysqli('localhost', 'root', 'root', 'eit_db');
    $mysql->query("INSERT INTO `users` (`login`, `email`, `password`)
        VALUES('$login', '$email', '$password')");
    $mysql->close();
    
}
;

echo ($login);
echo ($password);
