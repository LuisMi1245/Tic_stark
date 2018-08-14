var header = document.getElementById("HEADER");
window.onscroll = function () {
    if (window.pageYOffset >= 90) {
        header.classList.add("header-back-change");
        header.classList.remove("header-back");
    } else if (window.pageYOffset <= 90){
        header.classList.add("header-back");
        header.classList.remove("header-back-change");
    }
}
var Webkit = document.getElementsByClassName("f-segoe-sl-webkit");
var Webkit2 = document.getElementsByClassName("f-segoe-sb");
var navName = navigator.userAgent.toLowerCase().indexOf("chrome");

switch (navName) {
    case -1:
        // Es firefox, se aplica semilight.
        for (var i = 0; i >= Webkit.length; i++) {
            Webkit[i].style.fontFamily = "segoe-semilight";
        }
        break;
    default:
        // Es Chrome, se aplica default.
        Webkit2[0].style.fontWeight = "900";
        for (var a = 0; a >= Webkit2.length; a++) {
            Webkit2[a].style.fontFamily = "segoe-regular-new";
            Webkit2[a].style.fontWeight = "300";
        }
}