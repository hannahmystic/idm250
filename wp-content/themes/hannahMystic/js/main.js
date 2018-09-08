var menuClicked = new Boolean(false);
//var menu = document.getElementById("hamburger");
//var dropDown = document.getElementById(dropDown);
var dropDown = document.getElementById("dropDown");

dropDown.addEventListener("load", toggleMenu);

function toggleMenu() {
    if( !menuClicked){
        dropDown.style.display= "block";
        //dropDown.classList.toggle("show");
        menuClicked = true;
    }
    else{
        dropDown.style.display = "none";
        menuClicked = false;
    }
}

