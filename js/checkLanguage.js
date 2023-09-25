let lang = localStorage.getItem('eit_lang');

let langFlag = 1;
// let langEng = 1;
lang = parseInt(lang);

if (!lang || parseInt(lang) > 3 || parseInt(lang) < 1) {
    localStorage.setItem('eit_lang', '1');
    lang = 1;
}

function chooseLangStart(el){
    localStorage.setItem('eit_lang', el);
    location.reload();
}

function chooseLang(el){
    // localStorage.setItem('eit_lang', el);
    lang = el;
    console.log(lang)
    changeFlagNum()
    // location.reload();
}

function saveLanguage(){
    console.log('el same like - ', lang);
    localStorage.setItem('eit_lang', lang);
    location.reload();
}





function defFlag(){
  if (lang == 2){
  document.querySelectorAll('.flag')[0].style.border="2px solid blue";
  }
  else if (lang == 3){
    document.querySelectorAll('.flag')[1].style.border="2px solid blue";
  }
  else {
    // document.querySelectorAll('.chooseAvatar')[3].style.border="2px solid blue";
  }
}

function changeFlagNum(){
    console.log('start  changeFlagNum func')
    console.log(lang)
    document.querySelectorAll('.flag')[0].style.border="0px";
    document.querySelectorAll('.flag')[1].style.border="0px";
//   document.querySelectorAll('.flag')[3].style.border="0px";
  defFlag();
}

// let trnsButton = document.getElementById('translateButton');



//     trnsButton.addEventListener("mousedown", function(event) {
//         console.log('yeap')
//         // intervalId = setInterval(startFunction, 100); // Adjust the interval as needed
//     });

    // lang = 2;
    // console.log('yeap')



// this.addEventListener("mousedown", function() {
//     startFunction();
//     intervalId = setInterval(startFunction, 100); // Adjust the interval as needed
// });

// button.addEventListener("mouseup", function() {
//     stopFunction();
// });