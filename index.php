<?php
    $name = 'david'
?>
<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset='utf-8'> -->
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <title>Page Title</title>
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'> -->
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>

</head>
<body>

<div class="topMenuDiv">
   <a href="/imqa">English-IT</a>
   
    <div class="topMenu">
        <div class="topMenuButton" onclick="showBoard('videoBoard')">Video</div>
        <div class="topMenuButton" onclick="showBoard('daylicBoard')">Daylic</div>
        <div class="topMenuButton" onclick="showBoard('wordsBoard')">Words</div>
        <div class="topMenuButton" onclick="showBoard('searchBoard')">Search</div>
    </div>

    <div class="loginButtonDiv">
        <div class="loginButton" onclick="showBoard('loginBoard')">LogIn</div>
    </div>
</div>

<div class="bigBoardDiv">
    <div class="loginBoard disNone" >
        LOGIN
        <br>
        <input type="email" placeholder="Your Email">
        <input type="text" placeholder="Your Pass">
    </div>
    <div class="videoBoard disNone" >
    LOGIN
    <form action="checkLogin.php" method="post" class="checkUser logRegNone">
        <br><br>
        <input type="email" name="Nickname" placeholder="Your Nickname">
        <br><br>
        <input type="text" name="Password" placeholder="Your Password">
        <br><br>
        <button type="submit" name="loginButton">LogIn</button>
        <br><br>
        <div class="" onclick="changeLogReg('registUser')">Go to Registration</div>
    </form>


    <form action="registrationUser.php" method="post" class="registUser logRegNone">
        <br><br>
        <input type="email" name="Nickname" placeholder="Your Nickname">
        <br><br>
        <input type="email" name="Email" placeholder="Your Email">
        <br><br>
        <input type="text" name="Password" placeholder="Your Password">
        <br><br>
        <input type="text" name="RepeatPassword" placeholder="Repeat Password">
        <br><br>    
        <button type="submit" name="loginButton">Registration</button>
        <br><br>
        <div class="" onclick="changeLogReg('checkUser')">Login</div>
    </form>

    </div>
    <div class="daylicBoard disNone" >Daylic Board</div>
    <div class="wordsBoard disNone" >Words Board</div>
    <div class="searchBoard disNone" >Search Board</div>
</div>


</body>
<script src='js/main.js'></script>
<script src='js/bigBoard.js'></script>
</html>