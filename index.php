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
    <!------------------------------  TOP MENU  ------------------------------>
    <div class="topMenuDiv">
        <a href="/imqa">English-IT</a>
    
        <div class="topMenu">
            <div class="topMenuButton" onclick="showBoard('videoBoard')">Video</div>
            <div class="topMenuButton" onclick="showBoard('dailyQBoard')">DailyQ</div>
            <div class="topMenuButton" onclick="showBoard('wordsBoard')">Words</div>
            <div class="topMenuButton" onclick="showBoard('searchBoard')">Search</div>
        </div>

        <div class="loginButtonDiv">
            <div class="loginButton" onclick="showBoard('loginBoard')">LogIn</div>
        </div>
    </div>

    <!------------------------------  BIG BOARD  ------------------------------>
    <div class="bigBoardDiv">
        <div class="loginBoard disNone" >
            LOGIN
            <br>
            <input type="text" placeholder="Your Email">
            <input type="text" placeholder="Your Pass">
        </div>

        <div class="videoBoard disNone" >

            LOGIN
            
            <form id="loginForm" class="checkUser logRegNone">
                <br><br>
                <input type="text" name="login" placeholder="Your Login">
                <br><br>
                <input type="text" name="password" placeholder="Your Password">
                <br><br>
                <button type="submit" name="loginButton">LogIn</button>
                <br><br>
                <div class="" onclick="changeLogReg('registUser')">Go to Registration</div>
                <div class="warnSymb" style="display:none"> You used symbols!</div>
                <div class="warnLenLog" style="display:none"> Login must be 4-20 symbols!</div>
                <div class="warnLenPass" style="display:none"> Password must be 4-20 symbols!</div>
            </form>

            <form id="registarionForm" class="registUser logRegNone">
                <br><br>
                <input type="text" name="login" placeholder="Your Login">
                <br><br>
                <input type="email" name="email" placeholder="Your Email">
                <br><br>
                <input type="text" name="password" placeholder="Your Password">
                <br><br>
                <input type="text" name="repeatPassword" placeholder="Repeat Password">
                <br><br>    
                <button type="submit" name="loginButton">Registration</button>
                <br><br>
                <div class="" onclick="changeLogReg('checkUser')">Go to Login</div>
                <div class="warnSymb" style="display:none"> WARNING!</div>
            </form>
        </div>

        <div class="dailyQBoard disNone" >DailyQ Board</div>
        <div class="wordsBoard disNone" >Words Board</div>
        <div class="searchBoard disNone" >Search Board</div>
    </div>
</body>

<!------------------------------  JS FILES  ------------------------------>

<script src='js/main.js'></script>
<script src='js/bigBoard.js'></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/login.js"></script>

</html>