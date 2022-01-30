<?php
include_once('tools.php');
redirectHome();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Lunardo Cinema - Booking</title>
    <?php
    headModule();
    global $movies, $prices;
    php2js($movies, 'moviesJS');
    php2js($prices, 'pricesJS');
    php2js($_GET, 'movie_GET');
    ?>
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
        <?php
        $movies[$_GET["movieID"]]->movieTrailerModule();
        ?>
    </section>

    <section id='bookTicket' class='book-ticket'>
        <h1>BOOKING FORM</h1>
        <!-- Code sourced and adapted from: https://titan.csit.rmit.edu.au/~e54061/wp/lectures/ -->
        <form action='booking.php?movieID=<?= $_GET["movieID"] ?>' method='post'>
            <!-- Code sourced and adapted from: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_hidden -->
            <input type='hidden' id='movie' name='movie' value='<?= $_GET["movieID"] ?>'>
            <!-- Code sourced and adapted from: https://rmit.instructure.com/courses/85177/pages/workshop-wk05?module_item_id=3564997 -->
            <?php
            $movies[$_GET["movieID"]]->radioButtonModule();
            ?>

            <div class='grid-container-book-seat'>
                <!-- Code sourced and adapted from:
                https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/number
                https://stackoverflow.com/questions/16025138/call-two-functions-from-same-onclick
                -->
                <fieldset>
                    <legend>Standard Seat</legend>
                    <label for='qtySTA'>Standard Adult</label>
                    <p>
                        <input type="button" value="-" onclick="decrement('STA'); priceCalc();">
                        <input type='text' id='qtySTA' name='seats[STA]' onchange="priceCalc()" pattern="[1-9]|10">
                        <input type="button" value="+" onclick="increment('STA'); priceCalc();">
                    </p>

                    <label for='qtySTP'>Standard Concession</label>
                    <p>
                        <input type="button" value="-" onclick="decrement('STP'); priceCalc();">
                        <input type='text' id='qtySTP' name='seats[STP]' onchange="priceCalc()" pattern="[1-9]|10">
                        <input type="button" value="+" onclick="increment('STP'); priceCalc();">
                    </p>
                    <label for='qtySTC'>Standard Child</label>
                    <p>
                        <input type="button" value="-" onclick="decrement('STC'); priceCalc();">
                        <input type='text' id='qtySTC' name='seats[STC]' onchange="priceCalc()" pattern="[1-9]|10">
                        <input type="button" value="+" onclick="increment('STC'); priceCalc();">
                    </p>
                </fieldset>

                <fieldset>
                    <legend>First-class Seat</legend>
                    <label for='qtyFCA'>First Class Adult</label>
                    <p>
                        <input type="button" value="-" onclick="decrement('FCA'); priceCalc();">
                        <input type='text' id='qtyFCA' name='seats[FCA]' onchange="priceCalc()" pattern="[1-9]|10">
                        <input type="button" value="+" onclick="increment('FCA'); priceCalc();">
                    </p>
                    <label for='qtyFCP'>First Class Concession</label>
                    <p>
                        <input type="button" value="-" onclick="decrement('FCP'); priceCalc();">
                        <input type='text' id='qtyFCP' name='seats[FCP]' onchange="priceCalc()" pattern="[1-9]|10">
                        <input type="button" value="+" onclick="increment('FCP'); priceCalc();">
                    </p>
                    <label for='qtyFCC'>First Class Child</label>
                    <p>
                        <input type="button" value="-" onclick="decrement('FCC'); priceCalc();">
                        <input type='text' id='qtyFCC' name='seats[FCC]' onchange="priceCalc()" pattern="[1-9]|10">
                        <input type="button" value="+" onclick="increment('FCC'); priceCalc();">
                    </p>
                </fieldset>
            </div>
            <!-- Code sourced and adapted from: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/text -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for='fullName'>Full Name:</label>
                <input type='text' id='fullName' name='user[name]' required>
                <label for='email'>Email:</label>
                <input type='text' id='email' name='user[email]' required>
                <label for='mobileNo'>Mobile Number</label>
                <input type='text' id='mobileNo' name='user[mobile]' required>
            </fieldset>

            <div id="ticketContainer" class="ticket-container">
                <div>
                    <h3 id="movieTitle"></h3>
                    <h5 id="movieRating"></h5>
                </div>
                <div>
                    <h4 id="screening"></h4>
                    <h4 id="total"></h4>
                </div>
            </div>

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
