/*  * Code sourced and adapted from:
    * https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_smooth_scroll_jquery
    * https://api.jquery.com/ready/ */

// Scroll behaviour
$(function () {
    $("a").on('click', function (event) {

        if (this.hash !== "") {
            event.preventDefault();
            let hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });
});

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