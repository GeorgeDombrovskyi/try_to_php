let lang = localStorage.getItem('eit_lang');
let langFlag = 1;
lang = parseInt(lang);

if (!lang || parseInt(lang) > 3 || parseInt(lang) < 1) {
    localStorage.setItem('eit_lang', '1');
    lang = 1;
};


function chooseLangStart(el){
    localStorage.setItem('eit_lang', el);
    location.reload();
};


function chooseLang(el){
    lang = el;
    console.log(lang)
    changeFlagNum()
};


function saveLanguage(){
    console.log('el same like - ', lang);
    localStorage.setItem('eit_lang', lang);
    location.reload();
};


function defFlag(){
  if (lang == 2){
  document.querySelectorAll('.flag')[0].style.border="2px solid blue";
  } else if (lang == 3){
    document.querySelectorAll('.flag')[1].style.border="2px solid blue";
  } 
};


function changeFlagNum(){
    console.log('start  changeFlagNum func')
    console.log(lang)
    document.querySelectorAll('.flag')[0].style.border="0px";
    document.querySelectorAll('.flag')[1].style.border="0px";
//   document.querySelectorAll('.flag')[3].style.border="0px";
  defFlag();
};

