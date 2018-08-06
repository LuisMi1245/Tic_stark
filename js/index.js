window.onscroll = function () {
    var ScrollY = window.scrollY;
    if (ScrollY > 300) {
        header.style.position = "fixed";
        header.style.background = "#040610";
    } else if (ScrollY < 300) {
        header.style.position = "";
        header.style.background = "";
    }
};
var header = document.getElementById("HEADER");
var fontSemilightSegoeWebkit = document.getElementsByClassName("f-segoe-sl-webkit");
var fontSemiBoldSegoeWebkit2 = document.getElementsByClassName("f-segoe-sb");
var navName = navigator.userAgent.toLowerCase().indexOf("chrome");

switch (navName) {
    case -1:
        // Es firefox, se aplica semilight.
        for (var i = 0; i => fontSemilightSegoeWebkit.length; i++) {
            fontSemilightSegoeWebkit[i].style.fontFamily = "segoe-semilight";
        }
        break;
    default:
        // Es Chrome, se aplica default.
        fontSemiBoldSegoeWebkit2[0].style.fontWeight = "900";
        for (var a = 0; a => fontWebkit.length; a++) {
            fontSemilightSegoeWebkit[a].style.fontFamily = "segoe-regular-new";
            fontSemilightSegoeWebkit[a].style.fontWeight = "300";
        }
}