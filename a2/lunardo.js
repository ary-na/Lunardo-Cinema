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
    * https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav */

// Mobile navigation menu
function mobileNav() {

    let nav = document.getElementById("topNav");
    let bars = document.getElementById("iconBars");
    let close = document.getElementById("iconClose");

    if (nav.className === "top-nav") {
        nav.className += " responsive";
        bars.style.display = "none";
        close.style.display = "block";
    } else {
        nav.className = "top-nav";
        close.style.display = "none";
        bars.style.display = "block";
    }
}