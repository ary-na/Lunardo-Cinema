<?php include_once('tools.php') ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Lunardo Cinema - Booking</title>
    <?php headModule(); ?>
</head>

<body>
<header><?php headerModule(); ?></header>

<nav class='top-nav' id='topNav'>
    <ul>
        <li><a href='index.php'>Home</a></li>
    </ul>
</nav>

<main>
    <section id='movieTrailer' class='movie-trailer'>
        <?php movieTrailerModule($_GET["movieID"]); ?>
    </section>

    <section id='bookTicket' class='book-ticket'>
        <h1>BOOKING FORM</h1>
        <!-- Code sourced and adapted from: https://titan.csit.rmit.edu.au/~e54061/wp/lectures/ -->
        <form action='booking.php' method='post'>
            <!-- Code sourced and adapted from: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_hidden -->
            <input type='hidden' id='movie' name='movie' value='<?= $_GET["movieID"] ?>'>
            <!-- Code sourced and adapted from: https://rmit.instructure.com/courses/85177/pages/workshop-wk05?module_item_id=3564997 -->
            <?php radioModule($_GET["movieID"]) ?>

            <div class='grid-container-book-seat'>
                <!-- Code sourced and adapted from: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/number -->
                <fieldset>
                    <legend>Standard Seat</legend>
                    <label for='seatSTA'>Standard Adult</label><input type='number' id='seatSTA' name='seats[STA]'
                                                                      min='1' max='10'>
                    <label for='seatSTP'>Standard Concession</label><input type='number' id='seatSTP' name='seats[STP]'
                                                                           min='1' max='10'>
                    <label for='seatSTC'>Standard Child</label><input type='number' id='seatSTC' name='seats[STC]'
                                                                      min='1' max='10'>
                </fieldset>

                <fieldset>
                    <legend>First-class Seat</legend>
                    <label for='seatFCA'>First Class Adult</label>
                    <input type='number' id='seatFCA' name='seats[FCA]' min='1' max='10'>
                    <label for='seatFCP'>First Class Concession</label>
                    <input type='number' id='seatFCP' name='seats[FCP]' min='1' max='10'>
                    <label for='seatFCC'>First Class Child</label>
                    <input type='number' id='seatFCC' name='seats[FCC]' min='1' max='10'>
                </fieldset>
            </div>
            <!-- Code sourced and adapted from: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/text -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for='fullName'>Full Name:</label>
                <input type='text' id='fullName' name='full-name' required>
                <label for='email'>Email:</label>
                <input type='text' id='email' name='email' required>
                <label for='mobileNo'>Mobile Number</label>
                <input type='text' id='mobileNo' name='mobile-no' required>
            </fieldset>

            <input type='submit' value='Book'>
        </form>
    </section>

</main>
<footer><?php footerModule() ?></footer>
<aside id='debug'>
    <?php
    debugModule();
    printCodeModule();
    ?>
</aside>
</body>
</html>
