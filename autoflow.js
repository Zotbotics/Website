//Micah Raney Copyright 2018
//Not to be used without permission
function autoflow(){

    var i;
    var maxID;
    var x = document.getElementsByClassName("autoflow");
    var min = 0;

    for (i = 0; i < x.length; i++) {
       x[i].style.height = "auto";
    }

    for (i = 0; i < x.length; i++) {
       if(x[i].scrollHeight > min){
         min = x[i].scrollHeight;
       }
    }
    for (i = 0; i < x.length; i++) {
       x[i].style.height = min + "px";
    }
}
window.onresize = autoflow;
