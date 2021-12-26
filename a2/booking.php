<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Lunardo Cinema - Booking</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type='text/css' rel='stylesheet' href='../wireframe.css' disabled>
    <link id='stylecss' type='text/css' rel='stylesheet' href='style.css?t=<?= filemtime("style.css"); ?>'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='icon' href='../../media/logo.png' type='image/x-icon'>
    <script src='../wireframe.js'></script>
    <script src='https://code.jquery.com/jquery-3.5.0.js'></script>
    <script src='lunardo.js'></script>
</head>

<body>

<header>
    <img src='../../media/logo.png' alt='Lunardo Cinema Logo'/>
    <h1>LUNARDO</h1>
    <div class='icon'>
        <a href='javascript:void(0);' id='iconBars' onclick='mobileNav()'>
            <i class='fa fa-bars'></i>
        </a>
        <a href='javascript:void(0);' id='iconClose' onclick='mobileNav()'>
            <i class='fa fa-close'></i>
        </a>
    </div>
</header>

<nav class='top-nav' id='topNav'>
    <ul>
        <li><a href='index.php' onclick='mobileNav()'>Home</a></li>
    </ul>
</nav>

<main>
    <section id='movieTrailer' class='movie-trailer'>
        Movie trailer
    </section>

    <section id='bookTicket' class='book-ticket'>
        Book ticket
    </section>


</main>
<footer>
    <div>&copy;<script>
            document.write(new Date().getFullYear());
        </script>
        Arian Najafi Yamchelo, s3910902. Last
        modified <?= date('Y F d  H:i', filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
        Programming course at RMIT University in Melbourne, Australia.
    </div>
    <div>
        <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </div>
</footer>

<aside id='debug'>
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
</aside>


</body>
</html>
