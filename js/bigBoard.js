// ----------------- BIG BOARD -----------------
function showBoard(classNaming) {
    
    // Hide all div elements in bigBoard
    const divs = document.querySelectorAll('.disNone');

    divs.forEach(div => {
      div.style.display = 'none';
    });
  
    // Show the selected div element
    document.querySelector(`.${classNaming}`).style.display = 'block';
}

function showLoginBoard(classNaming){
  showBoard(classNaming);
  changeFlagNum()
}



// ----------------- LOGIN - REGISTRATION form -----------------
function changeLogReg(classNaming) {

    // Hide all div elements in LoginPage
    const divs = document.querySelectorAll(".logRegNone")

    divs.forEach(div => {
        div.style.display = 'none';
      });

    // Show the selected div element
    document.querySelector(`.${classNaming}`).style.display = 'block';
}