<?php

/*  * Code sourced and adapted from:
    * https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_complete
    * https://stackoverflow.com/questions/30191521/check-if-a-variable-is-undefined-in-php
    * https://www.w3schools.com/Php/func_string_substr.asp
    * https://www.w3schools.com/php/func_array_search.asp
    * https://www.php.net/manual/en/function.array-key-exists.php
    * https://stackoverflow.com/questions/16469947/how-to-check-if-an-associative-array-has-an-empty-or-null-value
    */

// Validate user input
function validateBooking()
{
    global $movies;
    $errors = [];

    $nameRGEX = "#^[a-zA-Z '.-]{1,255}$#";
    $mobileRGEX = "#^(\(04\)|04|\+614)( ?\d){8}$#";
    $seatNoRGEX = "#^[0-9\b]+$#";


    $seatSTA = filter_var($_POST['seats']['STA'], FILTER_SANITIZE_NUMBER_INT);
    $seatSTP = filter_var($_POST['seats']['STP'], FILTER_SANITIZE_NUMBER_INT);
    $seatSTC = filter_var($_POST['seats']['STC'], FILTER_SANITIZE_NUMBER_INT);
    $seatFCA = filter_var($_POST['seats']['FCA'], FILTER_SANITIZE_NUMBER_INT);
    $seatFCP = filter_var($_POST['seats']['FCP'], FILTER_SANITIZE_NUMBER_INT);
    $seatFCC = filter_var($_POST['seats']['FCC'], FILTER_SANITIZE_NUMBER_INT);

    $name = sanitizeData($_POST['user']['name']);
    $email = sanitizeData($_POST['user']['email']);
    $mobile = sanitizeData($_POST['user']['mobile']);

    $movie = "";

    // Check movie code validity
    if (isset($_POST['movie']) && isset($_GET['movieID'])) {

        $movieID = sanitizeData($_GET['movieID']);
        $movie = sanitizeData($_POST['movie']);

        if (!array_key_exists($movie, $movies) || $movie !== $movieID) {
            header('Location: index.php');
        }
    }

    // Check selected day and time validity
    if (isset($_POST['day-time'])) {

        $screening = $movies[$movie]->getMovieScreening();
        $dayTime = sanitizeData($_POST['day-time']);

        $screeningDay = substr($dayTime, 0, 3);
        $screeningTime = substr($dayTime, -4);

        if (!array_key_exists($screeningDay, $screening)) {
            header('Location: index.php');
        } else if ($screening[$screeningDay] === "No Screenings") {
            $errors['day-time'] = "Not Showing";
        } else if (!array_search(trim($screeningTime), $screening)) {
            header('Location: index.php');
        } else {
            $errors['day-time'] = "";
        }
    } else {
        $errors['day-time'] = "Please select a screening session";
    }

    // Check number of seats validity
    if (empty($seatSTA) && empty($seatSTP) && empty($seatSTC) && empty($seatFCA) && empty($seatFCP) && empty($seatFCC)) {
        $errors['seat'] = "Please enter number of seats";
    } else if (!(empty($seatSTA) && empty($seatSTP) && empty($seatSTC) && empty($seatFCA) && empty($seatFCP) && empty($seatFCC))) {
        $seats = [$seatSTA, $seatSTP, $seatSTC, $seatFCA, $seatFCP, $seatFCC];
        foreach ($seats as $seatID => $seatNumber) {
            if (!preg_match($seatNoRGEX, $seatNumber) || $seatNumber <= 0 || $seatNumber > 10) {
                $errors['seat'] = "Please enter a valid seat number";
            } else {
                $errors['seat'] = "";
                break;
            }
        }
    } else {
        $errors['seat'] = "";
    }

    // Check full name validity
    if (empty($name) || !(preg_match($nameRGEX, $name))) {
        $errors['user']['name'] = "Please enter your name";
    } else {
        $errors['user']['name'] = "";
    }

    // Check email validity
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['user']['email'] = "Please enter your email";
    } else {
        $errors['user']['email'] = "";
    }

    // Check Australian mobile number validity
    if (empty($mobile) || !(preg_match($mobileRGEX, $mobile))) {
        $errors['user']['mobile'] = "Please enter your Australian mobile number";
    } else {
        $errors['user']['mobile'] = "";
    }
    return $errors;
}

// Redisplay user input
function redisplayUserInput()
{
    $userInput = [];

    $seatSTA = filter_var($_POST['seats']['STA'], FILTER_SANITIZE_NUMBER_INT);
    $seatSTP = filter_var($_POST['seats']['STP'], FILTER_SANITIZE_NUMBER_INT);
    $seatSTC = filter_var($_POST['seats']['STC'], FILTER_SANITIZE_NUMBER_INT);
    $seatFCA = filter_var($_POST['seats']['FCA'], FILTER_SANITIZE_NUMBER_INT);
    $seatFCP = filter_var($_POST['seats']['FCP'], FILTER_SANITIZE_NUMBER_INT);
    $seatFCC = filter_var($_POST['seats']['FCC'], FILTER_SANITIZE_NUMBER_INT);

    $name = filter_var($_POST['user']['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['user']['email'], FILTER_SANITIZE_EMAIL);
    $mobile = filter_var($_POST['user']['mobile'], FILTER_SANITIZE_NUMBER_INT);

    $userInput['seats']['STA'] = $seatSTA;
    $userInput['seats']['STP'] = $seatSTP;
    $userInput['seats']['STC'] = $seatSTC;
    $userInput['seats']['FCA'] = $seatFCA;
    $userInput['seats']['FCP'] = $seatFCP;
    $userInput['seats']['FCC'] = $seatFCC;

    $userInput['user']['name'] = $name;
    $userInput['user']['email'] = $email;
    $userInput['user']['mobile'] = $mobile;

    return $userInput;
}

// Sanitize data
function sanitizeData($userInput)
{
    $userInput = trim($userInput);
    $userInput = stripslashes($userInput);
    $userInput = htmlspecialchars($userInput);
    return $userInput;
}