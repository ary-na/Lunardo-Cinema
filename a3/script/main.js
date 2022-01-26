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

/*  * Code sourced and adapted from:
    * https://www.youtube.com/watch?v=ytNCJc6atVs&t=1414s
    * https://stackoverflow.com/questions/9578348/best-way-to-execute-js-only-on-specific-page
    */

// Adds a class to nav links on scroll, highlighting the current link
window.onscroll = function () {

    // console.clear();
    // console.log("Win Y: " + window.scrollY);
    let navLinks = document.getElementsByTagName("nav")[0].getElementsByTagName("ul")[0].getElementsByTagName("a");
    // console.log(navLinks);
    let sections = document.getElementsByTagName("main")[0].getElementsByTagName("section");
    // console.log(sections);
    // console.log(sections[0].offsetTop + " " + (sections[0].offsetTop+sections[0].offsetHeight));

    if (navLinks.length >= 4) {

        for (let i = 0; i < sections.length; i++) {

            // console.log(sections[i].offsetTop + " " + (sections[i].offsetTop+sections[i].offsetHeight));
            let sectionTop = sections[i].offsetTop - 1;
            let sectionBottom = sections[i].offsetTop + sections[i].offsetHeight - 1;

            if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                // console.log(sections[i].id + ": current");
                navLinks[i + 1].classList.add('current');
            } else {
                navLinks[i + 1].classList.remove('current');
            }
        }
    }
}
