<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Lunardo Cinema</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type='text/css' rel='stylesheet' href='../wireframe.css' disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href='style.css?t=<?= filemtime("style.css"); ?>'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='icon' href='../../media/logo.png' type='image/x-icon'>
    <script src='../wireframe.js'></script>
    <!-- Code sourced and adapted from: https://api.jquery.com/ready/ -->
    <script src='https://code.jquery.com/jquery-3.5.0.js'></script>
    <script src='lunardo.js'></script>
</head>

<body>
<div class='grid-container'>

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

    <nav id='topNav' class='top-nav'>
        <ul>
            <li><a href='#aboutUs' onclick='mobileNav()'>About Us</a></li>
            <li><a href='#seatsAndPrices' onclick='mobileNav()'>Seats & Prices</a></li>
            <li><a href="#nowShowing" onclick='mobileNav()'>Now Showing</a></li>
            <li><a href='booking.php' onclick='mobileNav()'>Booking</a></li>
        </ul>
    </nav>

    <main>
        <section id='aboutUs' class='about-us'>
            <img src='../../media/lunar.png' alt='Image of a dark moon'>
            <article>
                <h1>Welcome to LUNARDO Cinema</h1>
                <p>We are proud to bring you the best expirience when it comes to Cinema</p>
            </article>
            <article>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt augue nibh, nec
                    interdum purus venenatis nec. In fringilla lacinia metus quis efficitur. Nulla facilisi. Nunc
                    maximus eros a augue blandit, ut tempor tellus faucibus. Nunc vel gravida mi, sodales congue
                    justo. Proin lacinia finibus metus, vitae malesuada magna. Suspendisse pellentesque sem lectus,
                    vitae mollis metus pellentesque et. Aliquam ultricies pretium neque et ullamcorper. Ut sapien
                    metus, gravida a nibh vitae, convallis placerat tellus.
                </p>
            </article>
        </section>

        <section id='seatsAndPrices' class='seats-and-prices'>
            Seats and Prices
        </section>

        <section id='nowShowing' class='now-showing'>
            Now Showing
        </section>


    </main>

    <footer>
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
