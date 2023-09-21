<!DOCTYPE html>
<html>

<head>
    <!-- <meta charset='utf-8'> -->
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <title>Page Title</title>
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'> -->
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='js/checkLanguage.js'></script>
    <script src='dictionaries/mainPageDict.js'></script>

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
            <?php if (@$_COOKIE['userAvatar'] == ''): ?>
                
                <div class="loginButton" onclick="showBoard('loginBoard')">LogIn</div>

            <?php else: ?>

                <div id="accArea" onclick="showBoard('loginBoard')"></div>

                <script>
                    let i = <?=$_COOKIE['userAvatar']?>;
                    document.getElementById('accArea').innerHTML = '<img src="images/avatar'+i.userAvatar+'.png" class="chooseAvatar">'

                </script>

            <?php endif;?>
        </div>
    </div>

    <!------------------------------  BIG BOARD  ------------------------------>
    <div class="bigBoardDiv">
        <div class="loginBoard disNone" >
            <?php if (@$_COOKIE['userAvatar'] == ''): ?>

                <div id="unknowAvatar"><img src="images/avatar0.png" class="chooseAvatar"></div>
                LOGIN

                <form id="loginForm" class="checkUser logRegNone">
                    <br><br>
                    <input type="text" name="log-login" placeholder="Your Login">
                    <br><br>
                    <input type="text" name="log-password" placeholder="Your Password">
                    <br><br>
                    <button type="submit" class="logBut" name="log-loginButton"><script>document.querySelector('.logBut').innerHTML=trns.logBut[lang]</script></button>
                    <br><br>
                    <a class="txtHoverLight goToReg" onclick="changeLogReg('registUser')"><script>document.querySelector('.goToReg').innerHTML=trns.goToReg[lang]</script></a>
                    <br><br>
                </form>

                <form id="registarionForm" class="registUser logRegNone">
                    <br><br>
                    <input type="text" name="reg-login" placeholder="Your Login">
                    <br><br>
                    <input type="email" name="reg-email" placeholder="Your Email">
                    <br><br>
                    <input type="text" name="reg-password" placeholder="Your Password">
                    <br><br>
                    <input type="text" name="reg-repeatPassword" placeholder="Repeat Password">
                    <br><br>

                    <img src="images/avatar1.png" class="chooseAvatar" onclick="changeAvatarNum(1)" alt="Avatar 1">
                    <img src="images/avatar2.png" class="chooseAvatar" onclick="changeAvatarNum(2)" alt="Avatar 2">
                    <img src="images/avatar3.png" class="chooseAvatar" onclick="changeAvatarNum(3)" alt="Avatar 3">
                        
                    <br><br>
                    <button type="submit" name="reg-loginButton">Registration</button>
                    <br><br>
                    <a class="txtHoverLight goToLog" onclick="changeLogReg('checkUser')"><script>document.querySelector('.goToLog').innerHTML=trns.goToLog[lang]</script></a>
                </form>


                <div class="warnSymb" style="display:none"> 
                    <script>document.querySelector('.warnSymb').innerHTML=trns.warnSymb[lang]</script> </div>

                <div class="warnLenLog" style="display:none"> Login must be 4-20 symbols!</div>

                <div class="warnLenPass" style="display:none"> Password must be 4-20 symbols!</div>
                <div class="warnRep" style="display:none"> Password does not match!</div>
                <div class="warnNotUser" style="display:none"> Didnt found this User!</div>
                <div class="warnUserExist" style="display:none"> This User Already Exist!</div>

            <?php else: ?>

                <div id="accAva" class="avatar">
                    <img src="images/uaFlag.png" style="width:100px; border-radius:50%">
                    <img src="images/avatar3.png " style="width:70px; border-radius:50%; position:absolute; border:solid 4px white;">
                </div>
                <div id="userLogin"></div>

                <a href="php/exitUser.php">Exit</a>

                <script>
                    // document.getElementById('accAva').innerHTML = '<img src="images/avatar'+i.userAvatar+'.png" class="chooseAvatar">'
                    document.getElementById('userLogin').innerHTML = i.login;
                </script>

            <?php endif;?>
        </div>

        <div class="videoBoard disNone toCenter" >VIDEO Board</div>
        <div class="dailyQBoard disNone" >DailyQ Board</div>
        <div class="wordsBoard disNone" >Words Board</div>
        <div class="searchBoard disNone" >Search Board</div>

    </div>



<div class="chooseLang">
    CHOOSE YOUR LANGUAGE<br>
    <img src="images/uaFlag.png" class="flag" onclick="chooseLang('2')">

</div>




</body>

<!------------------------------  JS FILES  ------------------------------>

<!-- <script src='js/main.js'></script> -->
<script src='js/bigBoard.js'></script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/login.js"></script>
<!-- <script src='js/translate.js'></script> -->
<script>
                        console.log('our lang ', lang)
                        if(lang == 1){
                            document.querySelector('.chooseLang').style.display="block"
                        }
</script>

</html>
