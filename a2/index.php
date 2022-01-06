<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Lunardo Cinema</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type='text/css' rel='stylesheet' href='../wireframe.css' disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href='css/style.css?t=<?= filemtime("css/style.css"); ?>'>
    <link id='stylecssTablet' type="text/css" rel="stylesheet" href='css/tablet.css?t=<?= filemtime("css/tablet.css"); ?>'>
    <link id='stylecssDesktop' type="text/css" rel="stylesheet" href='css/desktop.css?t=<?= filemtime("css/desktop.css"); ?>'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='icon' href='../../media/lunardo-cinema-logo-primary.png' type='image/x-icon'>
    <script src='../wireframe.js'></script>
    <script src='script/main.js'></script>
</head>

<body>
<div class='container-body'>
    <header>
        <img src='../../media/lunardo-cinema-logo-primary.png' alt='Lunardo Cinema Logo'/>
        <h1>LUNARDO</h1>
        <div class='icon'>
            <a href='javascript:void(0);' id='iconBars' onclick='addResponsive()'>
                <i class='fa fa-bars'></i>
            </a>
            <a href='javascript:void(0);' id='iconClose' onclick='addResponsive()'>
                <i class='fa fa-close'></i>
            </a>
        </div>
    </header>

    <nav id='topNav'>
        <ul>
            <li><a href='index.php' onclick='removeResponsive()'>Home</a></li>
            <li><a href='#aboutUs' onclick='removeResponsive()'>About Us</a></li>
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

        <section id='seatsAndPrices' class='seats-and-prices'>
            <h1>Seats</h1>
            <article>
                <p>
                    Cinema halls are glorified with our new seats to ensure your comfort and the luxury of the cinematic
                    experience. Watch your favourite movies from the comfort of our new standard leather seats, or
                    upgrade to our new first-class recliner seats for maximum comfort and ergonomic to take your cinema
                    experience to the next level.
                </p>
            </article>

            <article>
                <div class='container-seats'>
                    <h2>Standard Seats</h2>
                    <img src='../../media/standard-seat.png' alt='Picture of standard seat'/>
                    <p>
                        Our brand new <span>Standard Seats</span> are spaced out generously to provide broader legroom
                        and are ergonomically designed with a foldable armrest and a cupholder for convenience and peace
                        of mind.
                    </p>

                    <h2>First-Class Seats</h2>
                    <img src='../../media/first-class-seat.png' alt='Picture of first-class seat'/>
                    <p>
                        Our brand new <span>First-class Seats</span> provide an ergonomic design, full leather, fully
                        reclinable motor-operated seats that take your cinematic experience to the next level.
                    </p>
                </div>
            </article>

            <h1>Prices</h1>
            <article>
                <p>We offer discounted pricing during weekdays afternoons and all day on Mondays.</p>
                <table>
                    <thead>
                    <tr>
                        <th>Seat Type</th>
                        <th>Discounted Price</th>
                        <th>Price</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Standard Adult</td>
                        <td>$15.00</td>
                        <td>$20.50</td>
                    </tr>

                    <tr>
                        <td>Standard Concession</td>
                        <td>$13.50</td>
                        <td>$18.00</td>
                    </tr>

                    <tr>
                        <td>Standard Child</td>
                        <td>$12.00</td>
                        <td>$16.50</td>
                    </tr>

                    <tr>
                        <td>First Class Adult</td>
                        <td>$24.00</td>
                        <td>$30.00</td>
                    </tr>

                    <tr>
                        <td>First Class Concession</td>
                        <td>$22.50</td>
                        <td>$27.00</td>
                    </tr>

                    <tr>
                        <td>First Class Child</td>
                        <td>$21.00</td>
                        <td>$24.00</td>
                    </tr>
                    </tbody>
                </table>
            </article>
        </section>

        <section id='nowShowing' class='now-showing'>
            <h1>NOW SHOWING</h1>
            <p>For more information interact with the movie cover.</p>
            <div class='container-now-showing'>
                <!-- Code sourced and adapted from: https://stackoverflow.com/questions/41302918/css-hover-focus-vs-click-event-on-mobile-touch-devices?rq=1 -->
                <div class='card' tabindex='1'>
                    <article>
                        <img src='../../media/cyrano-2021-movie-poster.png' alt='Cyrano 2021 movie poster'>
                        <h2>Cyrano (2021)</h2>
                        <h3>PG-13 | Drama, Musical, Romance</h3>
                        <h4>Times</h4>
                        <ul>
                            <li>Mon - Tue</li>
                            <li>6pm</li>
                            <li>Wed - Fri</li>
                            <li>-</li>
                            <li>Sat - Sun</li>
                            <li>3pm</li>
                        </ul>
                    </article>

                    <article>
                        <h2>Cyrano (2021)</h2>
                        <p>
                            A man ahead of his time, Cyrano de Bergerac dazzles whether with ferocious wordplay at a
                            verbal joust or with brilliant swordplay in a duel. But, convinced that his appearance
                            renders him unworthy of the love of a devoted friend, the luminous Roxanne, Cyrano has yet
                            to declare his feelings for her and Roxanne has fallen in love, at first sight, with
                            Christian.
                        </p>
                        <a href='content/booking.php?movie=RMC'>Book Ticket</a>
                    </article>
                </div>

                <div class='card' tabindex='1'>
                    <article>
                        <img src='../../media/dune-2021-movie-cover.png' alt='Dune 2021 movie poster'>
                        <h2>Dune (2021)</h2>
                        <h3>M | Action, Adventure, Drama, Sci-Fi</h3>
                        <h4>Times</h4>
                        <ul>
                            <li>Mon - Tue</li>
                            <li>9pm</li>
                            <li>Wed - Fri</li>
                            <li>9pm</li>
                            <li>Sat - Sun</li>
                            <li>6pm</li>
                        </ul>
                    </article>

                    <article>
                        <h2>Dune (2021)</h2>
                        <p>
                            A mythic and emotionally charged hero's journey, "Dune" tells the story of Paul Atreides, a
                            brilliant and gifted young man born into a great destiny beyond his understanding, who must
                            travel to the most dangerous planet in the universe to ensure the future of his family and
                            his people. As malevolent forces explode into conflict over the planet's exclusive supply of
                            the most precious resource in existence-a commodity capable of unlocking humanity's greatest
                            potential-only those who can conquer their fear will survive.
                        </p>
                        <a href='content/booking.php?movie=ACT'>Book Ticket</a>
                    </article>
                </div>

                <div class='card' tabindex='1'>
                    <article>
                        <img src='../../media/silent-night-2021-movie-poster.png' alt='Silent Night 2021 movie poster'>
                        <h2>Silent Night (2021)</h2>
                        <h3>MA15+ | Drama, Horror</h3>
                        <h4>Times</h4>
                        <ul>
                            <li>Mon - Tue</li>
                            <li>-</li>
                            <li>Wed - Fri</li>
                            <li>12pm</li>
                            <li>Sat - Sun</li>
                            <li>9pm</li>
                        </ul>
                    </article>

                    <article>
                        <h2>Silent Night (2021)</h2>
                        <p>
                            Nell, Simon and their son Art host a yearly Christmas dinner at their country estate for
                            their former school friends and their spouses. It is gradually revealed that there is an
                            imminent environmental catastrophe and that this dinner will be their last night alive.
                        </p>
                        <a href='content/booking.php?movie=AHF'>Book Ticket</a>
                    </article>
                </div>

                <div class='card' tabindex='1'>
                    <article>
                        <img src='../../media/spider-man-no-way-home-2021-movie-poster.png'
                             alt='Spider-Man No Way Home 2021 movie poster'>
                        <h2>Spider-Man: No Way Home (2021)</h2>
                        <h3>M | Action, Adventure, Fantasy, Sci-Fi</h3>
                        <h4>Times</h4>
                        <ul>
                            <li>Mon - Tue</li>
                            <li>12pm</li>
                            <li>Wed - Fri</li>
                            <li>6pm</li>
                            <li>Sat - Sun</li>
                            <li>12pm</li>
                        </ul>
                    </article>

                    <article>
                        <h2>Spider-Man: No Way Home (2021)</h2>
                        <p>
                            Peter Parker's secret identity is revealed to the entire world. Desperate for help, Peter
                            turns to Doctor Strange to make the world forget that he is Spider-Man. The spell goes
                            horribly wrong and shatters the multiverse, bringing in monstrous villains that could
                            destroy the world.
                        </p>
                        <a href='content/booking.php?movie=FAM'>Book Ticket</a>
                    </article>
                </div>
            </div>
            <img src='../../media/lunardo-cinema-logo-tertiary.png' alt='Lunardo Cinema Logo'>
        </section>
    </main>

    <footer>

        <div class='container-footer'>
            <h1>LUNARDO <span>Cinema</span></h1>
            <div>
                <h2>CONTACT</h2>
                <ul>
                    <li><i class='fa fa-map-marker'></i> 8 Lunar Street Lu Vic 1234</li>
                    <li><i class='fa fa-phone'></i> (03) 4321 9876</li>
                    <li><i class='fa fa-envelope'></i> info@lunardo.com.au</li>
                    <li><a href='https://github.com/aryna93/wp' target='_blank'><i class='fa fa-github'></i> Website Repository</a></li>
                </ul>
            </div>
        </div>

        <div>&copy;<script>
                document.write(new Date().getFullYear());
            </script>
            Arian Najafi Yamchelo, s3910902. Last
            modified <?= date('Y F d  H:i', filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
        </div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of
            Science Web
            Programming course at RMIT University in Melbourne, Australia.
        </div>
        <div>
            <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
        </div>
    </footer>
</div>
</body>
</html>
