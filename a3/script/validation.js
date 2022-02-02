/*  * Code sourced and adapted from:
    * https://www.w3schools.com/js/tryit.asp?filename=tryjs_validation_js
    * https://rmit.instructure.com/courses/85177/pages/webinar-wk06?module_item_id=3565008
    * https://html.form.guide/snippets/javascript-form-validation-using-regular-expression/
    * https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_email_pattern
    * https://bobbyhadz.com/blog/javascript-check-if-all-array-values-null
    * https://stackoverflow.com/questions/1151032/javascript-blank-space-validation
    * https://www.codegrepper.com/code-examples/javascript/input+type+number+only+whole+numbers+react
    * https://stackoverflow.com/questions/16250915/how-to-call-two-functions-on-a-form-submit
    */

function validateForm() {
    let valid = true;
    valid = validateScreeningAndSeat() && validatePersonalInfo();
    return valid;
}

// Personal Information validations
function validatePersonalInfo() {

    let name = document.forms["booking"]["user[name]"].value;
    let email = document.forms["booking"]["user[email]"].value;
    let mobile = document.forms["booking"]["user[mobile]"].value;

    const nameRGEX = /^[a-zA-Z '.-]{1,255}$/;
    const emailRGEX = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    const mobileRGEX = /^(\(04\)|04|\+614)( ?\d){8}$/;

    let valid = true;

    if (mobile === "" || !mobile.match(mobileRGEX)) {
        document.getElementById("noError").innerHTML = "Please enter your Australian mobile number.";
        document.getElementById("mobileNo").focus();
        document.getElementById("mobileNo").select();
        valid = false;
    } else {
        document.getElementById("noError").innerHTML = "";
    }

    if (email === "" || !email.match(emailRGEX)) {
        document.getElementById("emailError").innerHTML = "Please enter your email.";
        document.getElementById("email").focus();
        document.getElementById("email").select();
        valid = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
    }

    if (name === "" || !name.match(nameRGEX)) {
        document.getElementById("nameError").innerHTML = "Please enter your name.";
        document.getElementById("fullName").focus();
        document.getElementById("fullName").select();
        valid = false;
    } else {
        document.getElementById("nameError").innerHTML = "";
    }

    return valid;
}

// Screening and Seat validations
function validateScreeningAndSeat() {

    const ticketRGEX = /^[0-9\b]+$/;
    const dayTime = document.querySelector('input[name="day-time"]:checked');
    const seats = document.getElementsByClassName('seats');
    const seatsVal = [seats[0].value, seats[1].value, seats[2].value, seats[3].value, seats[4].value, seats[5].value];

    // Check all values for an empty string
    const seatsEmpty = seatsVal.every(seatNo => seatNo.trim() === "");

    let valid = true;

    if (seatsEmpty === true) {
        document.getElementById("seatError").innerHTML = "Please enter number of seats.";
        seats[0].focus();
        seats[0].select();
        valid = false;
    } else {
        document.getElementById("seatError").innerHTML = "";
    }

    for (let i = 0; i < seatsVal.length; i++) {
        if (seatsVal[i].trim() !== "") {
            if (isNaN(seatsVal[i])) {
                seats[i].value = "";
                document.getElementById("seatError").innerHTML = "Please enter a number.";
                valid = false;
            } else if (!seatsVal[i].match(ticketRGEX) || (parseInt(seatsVal[i]) <= 0 || parseInt(seatsVal[i]) > 10)) {
                seats[i].value = "";
                document.getElementById("seatError").innerHTML = "Please enter a valid number.";
                valid = false;
            } else {
                document.getElementById("seatError").innerHTML = "";
            }
        }
    }

    if (dayTime === null) {
        document.getElementById("screeningError").innerHTML = "Please select a screening session.";
        valid = false;
    } else {
        document.getElementById("screeningError").innerHTML = "";
    }

    return valid;
}
