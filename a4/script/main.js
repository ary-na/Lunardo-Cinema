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

/*  * Code sourced and adapted from:
    * https://rmit.instructure.com/courses/85177/external_tools/546
    */

// Maximum number of seats
const maxQty = 10;

// Increment the number of seats
function increment(seatID) {
    let qtySeat = document.getElementById("qty" + seatID);
    let qty = parseInt(qtySeat.value);
    if (isNaN(qty) || ++qty < 1) {
        qtySeat.value = "1";
    } else {
        qtySeat.value = (qty < maxQty) ? qty : maxQty
    }
}

// Decrement number of seats
function decrement(seatID) {
    let qtySeat = document.getElementById("qty" + seatID);
    let qty = parseInt(qtySeat.value);
    if (isNaN(qty) || --qty < 1) {
        qtySeat.value = "";
    } else {
        qtySeat.value = (qty < maxQty) ? qty : maxQty
    }
}

/*  * Code sourced and adapted from:
    * https://www.w3schools.com/js/tryit.asp?filename=tryjs_string_substring
    * https://rmit.instructure.com/courses/85177/pages/workshop-wk07?module_item_id=3565022
    * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    * https://stackoverflow.com/questions/16985841/how-can-i-select-all-elements-with-the-same-class-name
    * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
    */

// Calculate the ticket price and display to document
function priceCalc() {

    let valid = validateScreeningAndSeat();
    let subtotalSeat = document.getElementsByClassName("subtotal-seat");
    if (valid === false) {
        // Set display style to none if not valid
        document.getElementById("ticketContainer").style.display = "none";
        for (let i = 0; i < subtotalSeat.length; i++) {
            subtotalSeat[i].style.display = "none";
        }
    } else {
        let pricingType, priceSTA, priceSTP, priceSTC, priceFCA, priceFCP, priceFCC, subtotalSTA, subtotalSTP,
            subtotalSTC, subtotalFCA, subtotalFCP, subtotalFCC;
        let total = 0;

        // let selectedDay = (screeningDay === null) ? "" : screeningDay.value;
        // let screeningDay = selectedDayTime.slice(0, 3);
        // let screeningTime = selectedDayTime.slice(-4);

        let STA = document.getElementById("qtySTA").value;
        //let qtySTA = isNaN(STA) ? 0 : STA;

        let STP = document.getElementById('qtySTP').value;
        //let qtySTP = isNaN(STP) ? 0 : STP;

        let STC = document.getElementById('qtySTC').value;
        //let qtySTC = isNaN(STC) ? 0 : STC;

        let FCA = document.getElementById('qtyFCA').value;
        //let qtyFCA = isNaN(FCA) ? 0 : FCA;

        let FCP = document.getElementById('qtyFCP').value;
        //let qtyFCP = isNaN(FCP) ? 0 : FCP;

        let FCC = document.getElementById('qtyFCC').value;
        //let qtyFCC = isNaN(FCC) ? 0 : FCC;


        const screeningDay = document.querySelector('input[name="day"]:checked').value;
        const movieScreening = moviesJS[movie_GET["movieID"]]["movieScreening"];

        pricingType = isFullDiscountedOrNotShowing(screeningDay, movieScreening[screeningDay]);
        // console.log(pricingType);

        // Return price on price type for each seat
        priceSTA = pricesJS["STA"]["Standard Adult"][pricingType];
        priceSTP = pricesJS["STP"]["Standard Concession"][pricingType];
        priceSTC = pricesJS["STC"]["Standard Child"][pricingType];
        priceFCA = pricesJS["FCA"]["First Class Adult"][pricingType];
        priceFCP = pricesJS["FCP"]["First Class Concession"][pricingType];
        priceFCC = pricesJS["FCC"]["First Class Child"][pricingType];

        // Calculate total per seat
        subtotalSTA = STA * priceSTA;
        subtotalSTP = STP * priceSTP;
        subtotalSTC = STC * priceSTC;
        subtotalFCA = FCA * priceFCA;
        subtotalFCP = FCP * priceFCP;
        subtotalFCC = FCC * priceFCC;

        // Calculate total
        total += STA * priceSTA;
        total += STP * priceSTP;
        total += STC * priceSTC;
        total += FCA * priceFCA;
        total += FCP * priceFCP;
        total += FCC * priceFCC;


        // Set display style to block if valid
        for (let i = 0; i < subtotalSeat.length; i++) {
            subtotalSeat[i].style.display = "block";
        }

        // Display details
        document.getElementById("subtotalSTA").innerHTML = `Total: $${subtotalSTA.toFixed(2)}`;
        document.getElementById("subtotalSTP").innerHTML = `Total: $${subtotalSTP.toFixed(2)}`;
        document.getElementById("subtotalSTC").innerHTML = `Total: $${subtotalSTC.toFixed(2)}`;
        document.getElementById("subtotalFCA").innerHTML = `Total: $${subtotalFCA.toFixed(2)}`;
        document.getElementById("subtotalFCP").innerHTML = `Total: $${subtotalFCP.toFixed(2)}`;
        document.getElementById("subtotalFCC").innerHTML = `Total: $${subtotalFCC.toFixed(2)}`;
        document.getElementById("ticketContainer").style.display = "block";
        document.getElementById("movieTitle").innerHTML = moviesJS[movie_GET["movieID"]]["movieTitle"];
        document.getElementById("movieRating").innerHTML = moviesJS[movie_GET["movieID"]]["movieRating"];
        document.getElementById("screening").innerHTML = `Screening: ${screeningDay} ${movieScreening[screeningDay]}`;
        document.getElementById("total").innerHTML = `Total: $${total.toFixed(2)}`;
    }
}

// Return pricing type
function isFullDiscountedOrNotShowing(day, time) {
    if (typeof pricingPolicyJS[day][time] !== undefined) {
        return pricingPolicyJS[day][time];
    }
}


/*  * Code sourced and adapted from:
    * https://www.w3schools.com/jsref/prop_checkbox_checked.asp
    * https://www.javascripttutorial.net/javascript-dom/javascript-checkbox/
    * https://blog.logrocket.com/localstorage-javascript-complete-guide/
    * https://stackoverflow.com/questions/5085567/what-is-the-hasclass-function-with-plain-javascript
    * https://codetogo.io/how-to-check-if-element-has-class-in-javascript/
    * https://titan.csit.rmit.edu.au/~e54061/wp/lectures/
    * https://www.codegrepper.com/code-examples/javascript/how+to+check+if+localstorage+is+empty
    * https://www.w3schools.com/js/js_window.asp
    */

// Check for the class localStorage
const main = document.querySelector("main");
if (main.classList.contains('localStorage')) {
    //console.log("Inside this if block");
    // Check if local storage contains data
    if ("userName" in localStorage) {
        // Set local storage values to text fields using window function
        document.getElementById("rememberMe").checked = true;
        document.getElementById("rememberMeLabel").innerHTML = "Forget me";
        document.getElementById("fullName").value = window.localStorage.getItem("userName");
        document.getElementById("email").value = window.localStorage.getItem("userEmail");
        document.getElementById("mobileNo").value = window.localStorage.getItem("userMobile");
    }
}

// Store user details using local storage
function rememberUser() {
    // console.log(document.querySelector('input[name="remember-me"]:checked'));
    const rememberMeLabel = document.getElementById("rememberMeLabel");
    const rememberMe = document.getElementById("rememberMe")
    // console.log(rememberMe.checked);

    // Set checkbox to display none when web storage is undefined
    if (typeof (Storage) === "undefined") {
        rememberMeLabel.style.display = "none";
    } else {
        // Uncheck the checkbox if details are invalid
        if (!validatePersonalInfo()) {
            rememberMe.checked = false;
        } else {
            if (rememberMe.checked) {
                // Store user details to local storage
                document.getElementById("rememberMeLabel").innerHTML = "Forget me";
                let userName = document.getElementById("fullName").value;
                let userEmail = document.getElementById("email").value;
                let userMobile = document.getElementById("mobileNo").value;
                localStorage.setItem('userName', userName);
                localStorage.setItem('userEmail', userEmail);
                localStorage.setItem('userMobile', userMobile);
            } else {
                // Remove user details from local storage
                document.getElementById("rememberMeLabel").innerHTML = "Remember me";
                localStorage.removeItem('userName');
                localStorage.removeItem('userEmail');
                localStorage.removeItem('userMobile');
            }
        }
    }
}