let trnsButton = document.getElementById('translateButton');


// ----------- For IMAGE button -----------
trnsButton.addEventListener("mousedown", function(event) {

    let disN = document.querySelectorAll('.disN');
    let disB = document.querySelectorAll('.disB');

    for ( var i=0; i <disN.length; i++){
        disN[i].style.display='block';
        disB[i].style.display='none';
    }
}); 

trnsButton.addEventListener("mouseup", function(event) {

    let disN = document.querySelectorAll('.disN');
    let disB = document.querySelectorAll('.disB');

    for ( var i=0; i <disN.length; i++){
        disN[i].style.display='none';
        disB[i].style.display='block';
    }
});


// ----------- For CONTRL button -----------
document.addEventListener("keydown", function(event) {
    if (event.key === "Control") {

        console.log('you cclick CNTRL')

        let disN = document.querySelectorAll('.disN');
        let disB = document.querySelectorAll('.disB');

        for ( var i=0; i <disN.length; i++){
            disN[i].style.display='block';
            disB[i].style.display='none';
        }
    }
});

document.addEventListener("keyup", function(event) {
    if (event.key === "Control") {

        console.log('you cclick CNTRL')
        
        let disN = document.querySelectorAll('.disN');
        let disB = document.querySelectorAll('.disB');

        for ( var i=0; i <disN.length; i++){
            disN[i].style.display='none';
            disB[i].style.display='block';
        }
    }
});