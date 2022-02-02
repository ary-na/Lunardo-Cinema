<?php include_once('tools.php'); ?>
<!DOCTYPE html>
<html lang='en'>
<head><?php headModule("Lunardo Cinema"); ?></head>

<body>
<div class='container-body'>
    <header><?php headerModule(); ?></header>

    <nav id='topNav'>
        <ul>
            <li><a href='index.php' onclick='removeResponsive()'>Home</a></li>
            <li><a href='#aboutUs' onclick='removeResponsive()'>About</a></li>
            <li><a href='#seatsAndPrices' onclick='removeResponsive()'>Seats and Prices</a></li>
            <li><a href='#nowShowing' onclick='removeResponsive()'>Now Showing</a></li>
        </ul>
    </nav>

    <main>
        <section id='aboutUs' class='about-us'>
            <div>
                <h1>Welcome to <span>LUNARDO</span> Cinema</h1>
                <p>we are back, and we are better</p>
            </div>

            <article>
                <p>
                    We have been hard at work to bring you the best cinema experience, and we believe we have done just
                    that. Our team at Lunardo Cinema upgraded the seats with our new standard seats and reclinable
                    first-class seats. We have also overhauled the sound system with the latest technologies to bring
                    you the best Cinema experience.
                </p>
                <p>
                    Lunardo is a small local cinema located south-east of Melbourne. We honour ourselves for serving
                    residents for more than 15 years with entertainment and cinematic comfort, and we are thrilled to
                    bring you an uncompromising experience with our cinema.
                </p>
            </article>

            <article>
                <img src='../../media/dolby-atmos-logo.png' alt='Dolby Atmos Logo'>
                <p>
                    We are proud to provide premium connection and fuller multidimensional sound when you're watching
                    your movies with Dolby technology. Lunardo cinema halls are now fully equipped with 3D Dolby vision
                    and Atmos Dolby sound to elevate your cinema experience and bring you closer to the world the
                    filmmaker created for you.
                </p>
            </article>
        </section>

        <section id='seatsAndPrices'>
            <div class='seats-and-prices'>
                <h1>SEATS AND PRICES</h1>
                <article>
                    <p>
                        Cinema halls are glorified with our new seats to ensure your comfort and the luxury of the
                        cinematic
                        experience. Watch your favourite movies from the comfort of our new standard leather seats, or
                        upgrade to our new first-class recliner seats for maximum comfort and ergonomic to take your
                        cinema
                        experience to the next level.
                    </p>
                </article>

                <article>
                    <div class='container-seats'>
                        <h2>Standard Seats</h2>
                        <img src='../../media/standard-seat.png' alt='Picture of standard seat'/>
                        <p>
                            Our brand new <span>Standard Seats</span> are spaced out generously to provide broader
                            legroom
                            and are ergonomically designed with a foldable armrest and a cupholder for convenience and
                            peace
                            of mind.
                        </p>

                        <h2>First-Class Seats</h2>
                        <img src='../../media/first-class-seat.png' alt='Picture of first-class seat'/>
                        <p>
                            Our brand new <span>First-class Seats</span> provide an ergonomic design, full leather,
                            fully
                            reclinable motor-operated seats that take your cinematic experience to the next level.
                        </p>
                    </div>
                </article>

                <h2>PRICES</h2>
                <article>
                    <?php priceTableModule(); ?>
                </article>
            </div>
        </section>

        <section id='nowShowing' class='now-showing'>
            <h1>NOW SHOWING</h1>
            <p>For more information interact with the movie cover.</p>
            <div class='container-now-showing'>
                <!-- Code sourced and adapted from: https://stackoverflow.com/questions/41302918/css-hover-focus-vs-click-event-on-mobile-touch-devices?rq=1 -->
                <?php
                global $movies;
                $movies["RMC"]->movieModule();
                $movies["ACT"]->movieModule();
                $movies["AHF"]->movieModule();
                $movies["FAM"]->movieModule();
                ?>
            </div>
            <img src='../../media/lunardo-cinema-logo-tertiary.png' alt='Lunardo Cinema Logo'>
        </section>
    </main>

    <footer><?php footerModule(); ?></footer>
</div>
<aside id='debug'>
    <?php
    debugModule();
    printCodeModule();
    ?>
</aside>
</body>
</html>
