// -------------------  LOGIN  -------------------

$(document).ready(function () {
  $('#loginForm').submit(function (e) {
    e.preventDefault(); // Prevent the default form submission

    console.log('login try');

    // Get the VALUE from the input field
    let login = $('input[name="log-login"]').val();
    let password = $('input[name="log-password"]').val();

    console.log('login - ' + login)
    console.log('pass - ' + password)


    // for dont show OLD messages, and reCheck after button click
    document.querySelector('.warnSymb').style.display = "none";
    document.querySelector('.warnLenLog').style.display = "none";
    document.querySelector('.warnLenPass').style.display = "none";
    document.querySelector('.warnNotUser').style.display = "none";


    // For check value on this speccial symbols
    let symb = /['";\-\/':<>|,^()!*_{}=%\\&+#$]|echo/g;

    // Check values on match with special symbols
    var matchesLogin = login.match(symb);
    var matchesPassword = password.match(symb);
    // var matchesEmail = email.match(symb);

    console.log(login + ' - ' + login.length)
    // If we founded special symbols on any of input fields, show ATANCION div
    if (matchesLogin || matchesPassword ) {
      console.log("Matches found:", matchesLogin);
      console.log("Matches found:", matchesPassword);
      // console.log("Matches found:", matchesEmail);

      document.querySelector('.warnSymb').style.display = "block";
    }
    else if (login.length < 4 || login.length > 20) {
      document.querySelector('.warnLenLog').style.display = "block";
    }
    else if (password.length < 4 || password.length > 20) {
      document.querySelector('.warnLenPass').style.display = "block";
    }
    // If we DIDNT found special symbols, do a POST action
    else {
      console.log("No matches found");

      // Make an AJAX request to your PHP script
      $.ajax({
        url: 'php/checkLogin.php',
        type: 'POST',
        data: { login: login, password: password },

        success: function (response) {
          console.log('OK ');
          
          if (response == 'not found user'){
            document.querySelector('.warnNotUser').style.display = "block";
          }
          else{
            location.reload();
          }
        },

        error: function () {
          console.log('Error occurred during AJAX request.');
        }
      });
    };
  });
});










// ------------------- REGISTRATION -------------------

$(document).ready(function () {
  $('#registarionForm').submit(function (e) {
    e.preventDefault(); // Prevent the default form submission

    console.log('registration try');

    // Get the VALUE from the input field
    let login = $('input[name="reg-login"]').val();
    let password = $('input[name="reg-password"]').val();
    let email = $('input[name="reg-email"]').val();
    let repeatPassword = $('input[name="reg-repeatPassword"]').val();
    let userAvatar = avatar;

    // for dont show OLD messages, and reCheck after button click
    document.querySelector('.warnSymb').style.display = "none";
    document.querySelector('.warnLenLog').style.display = "none";
    document.querySelector('.warnLenPass').style.display = "none";
    document.querySelector('.warnRep').style.display = "none";
    document.querySelector('.warnUserExist').style.display = "none";

    // For check value on this speccial symbols
    let symb = /['";\-\/':<>|,^()!*_{}=%\\&+#$]|echo/g;

    // Check values on match with special symbols
    var matchesLogin = login.match(symb);
    var matchesPassword = password.match(symb);
    var matchesEmail = email.match(symb);

    console.log(login + ' - ' + login.length)
    // If we founded special symbols on any of input fields, show ATANCION div
    if (matchesLogin || matchesPassword || matchesEmail) {
      console.log("Matches found:", matchesLogin);
      console.log("Matches found:", matchesPassword);
      console.log("Matches found:", matchesEmail);

      document.querySelector('.warnSymb').style.display = "block";
    }
    else if (login.length < 4 || login.length > 20) {
      document.querySelector('.warnLenLog').style.display = "block";
    }
    else if (password.length < 4 || password.length > 20) {
      document.querySelector('.warnLenPass').style.display = "block";
    }
    else if (password != repeatPassword) {
      document.querySelector('.warnRep').style.display = "block";
    }
    // If we DIDNT found special symbols, do a POST action
    else {
      console.log("No matches found");

      // Make an AJAX request to your PHP script
      $.ajax({
        url: 'php/registrationUser.php',
        type: 'POST',
        data: { login: login, email: email, password: password, userAvatar: userAvatar },

        success: function (response) {
          console.log('OK ');
          if (response == 'Already exist'){
            document.querySelector('.warnUserExist').style.display = "block";
          }
          else{
            location.reload();
          }

          // location.reload();
        },

        error: function () {
          console.log('Error occurred during AJAX request.');
        }
      });
    };
  });
});










let avatar = 1;

function defAvatar(){
  if (avatar == 1){
  document.querySelectorAll('.chooseAvatar')[1].style.border="2px solid blue";
  }
  else if (avatar == 2){
    document.querySelectorAll('.chooseAvatar')[2].style.border="2px solid blue";
  }
  else {
    document.querySelectorAll('.chooseAvatar')[3].style.border="2px solid blue";
  }
}

function changeAvatarNum(el){
  avatar = el;
  document.querySelectorAll('.chooseAvatar')[1].style.border="0px";
  document.querySelectorAll('.chooseAvatar')[2].style.border="0px";
  document.querySelectorAll('.chooseAvatar')[3].style.border="0px";
  defAvatar();
}


function openAccSetting(){

}