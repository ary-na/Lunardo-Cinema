function mobileTopNav() {

    let nav = document.getElementById("topNav");
    let menu = document.getElementById("iconMenu");
    let close = document.getElementById("iconClose");

    if (nav.className === "top-nav") {
        nav.className += " responsive";
        menu.style.display = "none";
        close.style.display = "block";
    } else {
        nav.className = "top-nav";
        close.style.display = "none";
        menu.style.display = "block";
    }
}