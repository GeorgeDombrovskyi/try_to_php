let loginBoard = document.getElementsByClassName('loginBoard');
let videoBoard = document.getElementsByClassName('videoBoard');
let daylicBoard = document.getElementsByClassName('daylicBoard');
let wordsBoard = document.getElementsByClassName('wordsBoard');
let searchBoard = document.getElementsByClassName('searchBoard');

function showBoard(classNaming) {
    // Hide all div elements
    const divs = document.querySelectorAll('.disNone');
    divs.forEach(div => {
      div.style.display = 'none';
    });
  
    // Show the selected div element
    const selectedDiv = document.getElementsByClassName(`${classNaming}`)[0];
    // console.log(selectedDiv)
    selectedDiv.style.display = 'block';
  }