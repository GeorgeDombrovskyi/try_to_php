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
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>
<body>

<div class="topMenuDiv">
   <a href="/imqa">English-IT</a>
   
    <div class="topMenu">
        <a href="#" class="topMenuButton" onclick="showBoard('videoBoard')">Video</a>
        <a href="#" class="topMenuButton" onclick="showBoard('daylicBoard')">Daylic</a>
        <a href="#" class="topMenuButton" onclick="showBoard('wordsBoard')">Words</a>
        <a href="#" class="topMenuButton" onclick="showBoard('searchBoard')">Search</a>
    </div>

    <div class="loginButtonDiv">
        <a href="#" class="loginButton" onclick="showBoard('loginBoard')">LogIn</a>
    </div>
</div>

<div class="bigBoardDiv">
    <div class="loginBoard disNone" >Login Board</div>
    <div class="videoBoard disNone" >Video Board</div>
    <div class="daylicBoard disNone" >Daylic Board</div>
    <div class="wordsBoard disNone" >Words Board</div>
    <div class="searchBoard disNone" >Search Board</div>
</div>


</body>
<script src='main.js'></script>
<script src='bigBoard.js'></script>
</html>