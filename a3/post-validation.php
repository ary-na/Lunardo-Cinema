<?php

/*  * Code sourced and adapted from:
    * https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_complete
    * https://stackoverflow.com/questions/30191521/check-if-a-variable-is-undefined-in-php
    * https://www.w3schools.com/Php/func_string_substr.asp
    * https://www.w3schools.com/php/func_array_search.asp
    * https://www.php.net/manual/en/function.array-key-exists.php
    */

function sanitizeData($userInput)
{
    $userInput = trim($userInput);
    $userInput = stripslashes($userInput);
    $userInput = htmlspecialchars($userInput);
    return $userInput;
}

//function noScreening($day, $time)
//{
//    global $movies;
//    $movie = sanitizeData($_POST['movie']);
//    $screening = $movies[$movie]->getMovieScreening();
//    if($screening[$day] === "")
//
//}

function validateBooking()
{
    global $movies;
    $nameRGEX = "#^[a-zA-Z '.-]{1,255}$#";
    $mobileRGEX = "#^(\(04\)|04|\+614)( ?\d){8}$#";

    $errors = []; // new empty array to return error messages

    $movie = sanitizeData($_POST['movie']);
    $seats = filter_var($_POST['seats'], FILTER_SANITIZE_NUMBER_INT);
    $name = sanitizeData($_POST['user']['name']);
    $email = sanitizeData($_POST['user']['email']);
    $mobile = sanitizeData($_POST['user']['mobile']);

    $screeningDay = $screeningTime = "";
    if (isset($_POST['day-time'])) {
        $dayTime = $_POST['day-time'];

        $screeningDay = substr($dayTime, 0, 3);
        $screeningTime = substr($dayTime, -4);
    }

    $screening = $movies[$movie]->getMovieScreening();

    if (!array_key_exists($screeningDay, $screening)) {
        $errors['day-time'] = "key does not exists";
    } else if ($screening[$screeningDay] === "No Screenings") {
        $errors['day-time'] = "No Screening";
    } else {
        $errors['day-time'] = "key exists";
    }

//    if(array_search(trim($screeningTime), $screening)){
//        $errors['day-time'] = "in array";
//    } else {
//        $errors['day-time'] = "not in array";
//    }


//    if (!isset($_POST['day-time'])) {
//        $errors['day-time'] = "Please select a screening session";
//    } else {
//        $errors['day-time'] = "";
//    }

//    foreach ($screening as $day => $time){
//        if ($day == trim($screeningDay) && $time == trim($screeningTime)){
//            $errors['day-time'] = "3423423423423423";
//            break;
//        }
//    }

    if (empty($seats)) {
        $errors['seats'] = "Please select a screening session";
    } else {
        $errors['seats'] = "";
    }

    if (empty($name) || !(preg_match($nameRGEX, $name))) {
        $errors['user']['name'] = "Please enter your name";
    } else {
        $errors['user']['name'] = "";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['user']['email'] = "Please enter your email";
    } else {
        $errors['user']['email'] = "";
    }

    if (empty($mobile) || !(preg_match($mobileRGEX, $mobile))) {
        $errors['user']['mobile'] = "Please enter your Australian mobile number";
    } else {
        $errors['user']['mobile'] = "";
    }
    return $errors;
}

function redisplayUserInput()
{
    $userInput = [];

    $name = filter_var($_POST['user']['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['user']['email'], FILTER_SANITIZE_EMAIL);
    $mobile = filter_var($_POST['user']['mobile'], FILTER_SANITIZE_NUMBER_INT);

    $userInput['user']['name'] = $name;
    $userInput['user']['email'] = $email;
    $userInput['user']['mobile'] = $mobile;

    return $userInput;
}