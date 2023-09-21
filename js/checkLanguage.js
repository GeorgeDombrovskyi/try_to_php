let lang = localStorage.getItem('eit_lang');
lang = parseInt(lang);

if (!lang || parseInt(lang) > 2 || parseInt(lang) < 1) {
    localStorage.setItem('eit_lang', '1');
    lang = 1;
}

function chooseLang(el){
    localStorage.setItem('eit_lang', el);
    location.reload();
}