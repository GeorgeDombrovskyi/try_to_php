<?php
// Remove space before and after Login and Password and remove any special symbols
// for more safety
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 4 || mb_strlen($login) > 20 || mb_strlen($password) < 4 || mb_strlen($password) > 20){
    echo 'something wrong with login or password length';
    exit();
}

$mysql = new mysql('localhost','root','root','eit-db')

echo ($login);
echo ($password);

// we need check for special symbols, if somebody try do straight request

// if ($login == 'kyky'){
//     echo('yeap');
// }
// else {
//     echo('nope');
// };
// header('Location: /imqa');
