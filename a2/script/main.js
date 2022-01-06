/*  * Code sourced and adapted from:
    * https://css-tricks.com/snippets/javascript/showhide-element/
    * https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav
    * https://www.javascripttutorial.net/dom/css/check-if-an-element-contains-a-class/
    * https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_remove_class */

// Mobile navigation menu - Add responsive class to Nav
function addResponsive() {

    let nav = document.getElementById("topNav");
    let bars = document.getElementById("iconBars");
    let close = document.getElementById("iconClose");

    if (!nav.classList.contains("responsive")) {
        nav.classList.add("responsive");
        bars.style.display = "none";
        close.style.display = "block";
    } else {
        nav.classList.remove("responsive");
        close.style.display = "none";
        bars.style.display = "block";
    }
}

// Mobile navigation menu - Remove responsive class from Nav
function removeResponsive() {
    document.getElementById("topNav").classList.remove("responsive");
    document.getElementById("iconClose").style.display = "none";
    document.getElementById("iconBars").style.display = "block";
}

/*  * Code sourced and adapted from:
    * https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_toggle_hide_show */

// Toggle (Hide/Show) Paragraph
function toggleParagraph() {
    let moreDiv = document.getElementById("readMoreDiv");
    let moreAnchor = document.getElementById("readMoreAnchor");
    if (moreDiv.style.display === "block") {
        moreDiv.style.display = "none";
        moreAnchor.innerText = "Read more";
    } else {
        moreDiv.style.display = "block";
        moreAnchor.innerText = "Read less";

    }
}

// Toggle (Hide/Show) Debug
function toggleDebug() {
    let debug = document.getElementById("debugArea");
    let debugAnchor = document.getElementById("showDebugAnchor");
    if (debug.style.display === "block") {
        debug.style.display = "none";
        debugAnchor.innerText = "show";
    } else {
        debug.style.display = "block";
        debugAnchor.innerText = "hide";
    }
}