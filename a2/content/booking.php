<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Lunardo Cinema - Booking</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type='text/css' rel='stylesheet' href='../../wireframe.css' disabled>
    <link id='stylecss' type='text/css' rel='stylesheet' href='../css/style.css?t=<?= filemtime("../css/style.css"); ?>'>
    <link id='stylecssTablet' type="text/css" rel="stylesheet" href='../css/tablet.css?t=<?= filemtime("../css/tablet.css"); ?>'>
    <link id='stylecssDesktop' type="text/css" rel="stylesheet" href='../css/desktop.css?t=<?= filemtime("../css/desktop.css"); ?>'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='icon' href='../../../media/lunardo-cinema-logo-primary.png' type='image/x-icon'>
    <script src='../../wireframe.js'></script>
    <script src='../script/main.js'></script>
</head>

<body>
<header>
    <img src='../../../media/lunardo-cinema-logo-primary.png' alt='Lunardo Cinema Logo'/>
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

<nav class='top-nav' id='topNav'>
    <ul>
        <li><a href='../index.php'>Home</a></li>
    </ul>
</nav>

<main>
    <section id='movieTrailer' class='movie-trailer'>
        <h1>DUNE</h1>
        <!-- Code sourced and adapted from: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_video -->
        <video controls>
            <source src='../../../media/ACT-trailer.mov' type='video/mp4'>
            Your browser does not support the video tag.
        </video>
        <h2>The synopsis below may give away important plot points.</h2>
        <article>
            <h3>Synopsis</h3>
            <p>
                The story opens with a woman telling a portion of her people's history on the desert planet, Arrakis.
                The woman, Chani, is a Fremen. She explains that since before she was born the planet has been ruled by
                the cruel Harkonnens who have grown enormously rich harvesting the psychogenic substance "melange" also
                known as the spice. The Fremen have been trying to expel the Harkonnens, but to no avail. Recently,
                however, the Padishah Emperor Shaddam IV has ordered the Harkonnens to leave Arrakis. Chani wonders who
                the new rulers will be.
            </p>
            <p>
                On the planet Caladan, Paul Atreides eats breakfast with his mother the Lady Jessica. A member of the
                quasi-religious order of the Bene Gesserit, Jessica has been trying to teach her son the special powers
                of her order. She tests Paul by having him try to compel her to pass him a glass of water. Paul is only
                partially successful. Paul learns about the planet Arrakis and its people. It is the only source of the
                psychoactive spice, which extends life and perception. Spice is necessary for interstellar travel since
                it makes possible the expanded consciousness of the navigators who plot faster than light jumps,
                "folding" space time to travel instantly from one planet to another.
            </p>
            <p>

                Paul's father, Duke Leto Atreides, along with soldier Gurney Halleck and mentat Thufir Hawat, receive an
                imperial envoy who formalizes the awarding of Arrakis to House Atreides. The emperor fears Leto's
                growing political power and popularity in the Landsraad, a conclave of noble houses. Leto recognizes
                that his appointment to oversee Arrakis is a trap of some kind, but cannot refuse an imperial offer.
                Paul asks his friend, the elite soldier Duncan Idaho to take him along when Duncan goes to Arrakis weeks
                ahead of time to scout things out. Duncan refuses. Paul confides that he's been having dreams about
                Arrakis and the Fremen, including one where Duncan falls in battle. Duncan dismisses this as merely a
                dream, telling Paul that "Everything important happens when we're awake".
            </p>
            <p>
                Paul discusses his wish to travel to Arrakis early with his father, but Leto refuses, saying that he
                needs Paul by his side. He explains the political situation: the emperor has set up a conflict between
                House Atreides and House Harkonnen, a war which will weaken them both, to the benefit of the Emperor.
                Leto instead intends to strike an alliance with the Fremen in order to harness their "desert power" to
                his own and outwit the Emperor. Paul expresses his doubts about his ability to succeed his father as a
                leader. Leto confides his own doubts when he was young and insists that Paul will find his way to
                leadership, just as he did.
            </p>
            <div id='readMoreDiv'>
                <p>
                    Gurney has a sparring session with Paul, insisting that the young ducal heir must be more wary about
                    the
                    danger posed by the Harkonnens and more ruthless in battle. Paul begins to have dreams of Chani.
                    Jessica's Bene Gesserit superior, Reverend Mother Gaius Helen Mohiam arrives on Caladan to test
                    Paul.
                    Before the meeting he is inspected by Suk doctor Wellington Yueh, who warns Paul that the Bene
                    Gesserit
                    have their own agenda. Mohiam puts Paul through the test of the Gom Jabbar, using a poisoned needle
                    and
                    a pain-inflicting box to judge his character. After the test, Mohiam asks Paul about his dreams and
                    whether they sometimes come true. Afterward, Mohiam berates Jessica for producing a son for Duke
                    Leto,
                    rather than the daughters she had been ordered to produce. She accuses Jessica of thinking that her
                    son
                    might be the Kwisatz Haderach, the fulfillment of a Bene Gesserit messianic prophecy. Jessica
                    confirms
                    this belief and Mohiam warns her that Paul's abilities are not fully developed and that he might die
                    in
                    the coming trials. When Mohiam leaves, Paul confronts his mother about what Mohiam meant. Jessica
                    explains that the Bene Gesserit have spent hundreds of years engaged in a selective breeding program
                    to
                    produce an unparalleled mind who can see both the past and the future.
                </p>
                <p>
                    The Atreides arrive on Arrakis. When they disembark their ship, locals begin chanting a phrase Paul
                    cannot recognize. Paul asks his mother and she explains that it's a local prophecy of the
                    Lisan-al-Gaib,
                    the "voice from outer world", a prophesied messiah on Arrakis. Jessica says that they think Paul
                    might
                    be this figure, but Paul dismisses it as mere superstition spread by the Bene Gesserit. Jessica
                    hires a
                    Fremen servant, Shadout Mapes. Mapes sees Jessica and Paul as a fulfillment of the Lisan-al-Gaib and
                    gives Jessica a dagger made from the tooth of Shai-halud, the immense sandworms which make the
                    desert of
                    Arrakis so dangerous. That night, Paul survives an assassination attempt by a hunter seeker drone
                    when
                    Mapes enters the room, distracting it.
                </p>
                <p>
                    Leto surveys his new domain and discovers that the Harkonnens have sabotaged much of the needed
                    infrastructure. They decide to take the issue to the imperial arbiter of the transition, an
                    ecologist
                    named Liet Kynes, who has resided on Arrakis for years. Duncan Idaho returns from several weeks
                    living
                    with the Fremen. He reports to the Duke that the Fremen are unparalleled fighters who live in
                    communities known as "sietchs" in the caverns beneath the desert. Duncan confirms Thufir Hawat's
                    belief
                    that there are many more Fremen than previously believed. The leader of one of these sietchs,
                    Stilgar,
                    has come to meet with Leto. Stilgar demands that the outworlders not travel beyond the city except
                    to
                    mine spice. Leto refuses but insists that the sietchs will remain inviolate and that Fremen will not
                    be
                    hunted while the Atreides rule. Paul invites Stilgar to stay, but he leaves. Duncan introduces the
                    Atreides to some Fremen technology, including the moisture saving stillsuits and thumpers which are
                    used
                    to attract sandworms.
                </p>
                <p>
                    Leto's party meets with Liet Kynes to investigate the spice mining operations. She inspects their
                    stillsuits and finds that Paul has intuitively fitted his stillsuit in the Fremen manner. In the
                    native
                    language she says "He shall know your ways as if born to them". The party flies out to observe a
                    spice
                    mining operation. The mining vehicle -- a "sandcrawler" -- has attracted a worm, which is drawn by
                    the
                    rhythmic vibrations of the crawler as it collects the spice. When a flying carry-all fails to remove
                    the
                    mining vehicle, Duke Leto lands his small squad of ornithopters nearby to rescue the miners. When
                    Paul
                    gets out to guide the miners inside, he is hit with a massive dose of spice and has a series of
                    visions
                    including one of himself with Chani. He is nearly sucked down into the sand with the crawler when
                    Gurney
                    grabs him and hauls him aboard his father's ornithopter. The two watch as the worm's enormous,
                    toothed
                    maw opens and swallows the sandcrawler whole. Later, Paul is examined by Dr Yueh who informs Paul
                    and
                    his mother that the spice is psychoactive but shouldn't harm Paul.
                </p>
                <p>
                    Duke Leto awakes at night with the sense that something is wrong. He calls security but gets no
                    answer.
                    He finds Mapes stabbed to death and is shot with a paralytic dart that burrows its way through his
                    body
                    shield and into his back, paralyzing him. Yueh reveals himself as a traitor. He has lowered the
                    shields
                    and cut off Atreides communications. Gurney is awakened and leads the counter attack as the
                    Harkonnen
                    forces, aided by the imperial Sardukar troops, begin their assault. The Atreides troops, caught
                    unprepared and outnumbered by Harkonnen troops and the Sardukar, find themselves quickly
                    overwhelmed.
                    Duncan kills several Sardukar and tries to rescue Paul and Jessica but finds them already gone.
                    Baron
                    Vladimir Harkonnen has promised the Bene Gesserit that he will not harm Paul or Jessica so he sends
                    some
                    of his men to take them and leave them in the desert to die of exposure. Paul, not fully secure in
                    his
                    Bene Gesserit abilities, is still able to use the Voice to order one of the men to remove his
                    mother's
                    gag. Jessica orders one of the men to kill his comrade. When she's fully freed, she kills two of
                    them
                    personally. Their ornithopter crashes and Paul and Jessica see the devastation of Arrakeen from a
                    distance.
                </p>
                <p>
                    Yueh reveals to Leto that the Harkonnens secured his compliance because they have his wife held
                    captive.
                    He replaces one of Duke Leto's teeth with a poison capsule which he hopes the Duke will use to kill
                    the
                    Baron. Yueh meets with Baron Harkonnen and demands that the Baron honor his end of the deal. The
                    Baron
                    promises that Yueh will be reunited with his wife and then slits his throat. The Baron then gloats
                    over
                    a paralyzed Leto, who bites down on his fake tooth and expels the poison, killing everyone in the
                    room
                    except for the Baron who is gravely injured. Medical technicians nurse the Baron back to health.
                </p>
                <p>
                    Riding out a storm in a survival tent, Paul continues to have visions from his spice exposure. They
                    are
                    first of Chani. However, they quickly change to visions of bloody conflict and religious zealots,
                    operating beneath and Atreides flag and under Duke Leto's name, spreading across the galaxy "like
                    and
                    unquenchable fire". Paul is horrified by what he sees and blames his mother and the Bene Gesserit
                    but is
                    eventually comforted by his mother.
                </p>
                <p>
                    Paul and Jessica are rescued by Duncan Idaho, who managed to escape the slaughter. Duncan brings
                    them to
                    Kynes, who has set up in an abandoned terraforming station occupied by Fremen. The Sardukar track
                    them
                    there and attack, with the Fremen killing many of them. Duncan sacrifices himself in a last stand to
                    allow Paul, Jessica, and Kynes, to escape. Paul and Jessica flee in an ornithopter. Kynes sets up a
                    thumper, intending to call a sandworm and ride it away, but she is mortally wounded by the Sardukar.
                    Before they can deliver the killing blow, a sandworm arrives and Kynes attracts it to her by
                    pounding a
                    patch of drumsand. While piloting the ornithopter through a powerful sand storm, Paul has a vision
                    of a
                    Fremen man giving him advice. They survive the sandstorm but with the ornithopter damaged they must
                    set
                    out on foot through the desert. As they do, they are observed by Fremen.
                </p>
                <p>
                    Jessica and Paul make their way toward where they believe the Fremen sietch is. Their movements
                    attract
                    a sandworm and make a run for some nearby rocks. The sandworm pauses, seemingly looking at Paul, who
                    realizes that someone used a thumper to draw it away. A group of Fremen capture them. Stilgar is
                    with
                    them and recognizes Paul, saying that they can't touch him. Another Fremen, Jamis, dismisses
                    Stilgar's
                    belief and wants to kill Paula and Jessica and loot their bodies. Paul recognizes Jamis as the man
                    from
                    his visions. Jessica asks for help returning to Caladan, saying that they will be well rewarded, but
                    Stilgar dismisses any reward they'd give as pointless. Stilgar offers to allow Paul, who is still
                    young,
                    to join their sietch, but says that Jessica, who he deems too old to learn to fight, must be left
                    behind. Jessica and Paul use their Bene Gesserit training to disarm most of the Fremen and hold
                    Stilgar
                    at knife point. Stilgar, realizing that Jessica is a Bene Gesserit, relents and decides to take both
                    of
                    them to the sietch. Jamis objects, and challenges Jessica to a duel. Paul agrees to stand as
                    Jessica's
                    champion. Chani, who is part of the party, takes pity on Paul, who she believes will die at Jamis
                    hand,
                    and gives him a dagger made from the tooth of the sandworm, a moment from one of Paul's visions. In
                    the
                    duel, Paul outclasses Jamis, repeatedly holding a knife to his throat and demanding that he yield.
                    Stilgar informs him that Fremen duels are to the death, and Jessica says that Paul has never killed
                    anyone before. Reluctantly, Paul kills Jamis. Satisfied, the Fremen take Paul and Jessica back to
                    their
                    sietch. Paul and Jessica see a Fremen impossibly riding a live worm. As they arrive, Chani tells
                    Paul
                    that "this is only the beginning".
                </p>
            </div>
            <a id='readMoreAnchor' onclick='toggleParagraph()'>Read more</a>
        </article>
    </section>

    <section id='bookTicket' class='book-ticket'>
        <h1>Booking Form</h1>
        <!-- Code sourced and adapted from: https://titan.csit.rmit.edu.au/~e54061/wp/lectures/ -->
        <form action='booking.php' method='post'>
            <!-- Code sourced and adapted from: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_hidden -->
            <input type='hidden' id='movie' name='movie' value='ACT'>
            <!-- Code sourced and adapted from: https://rmit.instructure.com/courses/85177/pages/workshop-wk05?module_item_id=3564997 -->
            <fieldset>
                <legend>Times</legend>
                <input type='radio' id='mon-time' name='day-time' value='Mon 9pm' checked>
                <label for='mon-time'>Mon 9pm</label>

                <input type='radio' id='tue-time' name='day-time' value='Tue 9pm'>
                <label for='tue-time'>Tue 9pm</label>

                <input type='radio' id='wed-time' name='day-time' value='Wed 9pm'>
                <label for='wed-time'>Wed 9pm</label>

                <input type='radio' id='thu-time' name='day-time' value='Thu 9pm'>
                <label for='thu-time'>Thu 9pm</label>

                <input type='radio' id='fri-time' name='day-time' value='Fri 9pm'>
                <label for='fri-time'>Fri 9pm</label>

                <input type='radio' id='sat-time' name='day-time' value='Sat 6pm'>
                <label for='sat-time'>Sat 6pm</label>

                <input type='radio' id='sun-time' name='day-time' value='Sun 6pm'>
                <label for='sun-time'>Sun 6pm</label>
            </fieldset>


            <div class='grid-container-book-seat'>
                <!-- Code sourced and adapted from: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/number -->
                <fieldset>
                    <legend>Standard Seat</legend>
                    <label for='seatSTA'>Standard Adult</label><input type='number' id='seatSTA' name='seats[STA]' min='1' max='10'>
                    <label for='seatSTP'>Standard Concession</label><input type='number' id='seatSTP' name='seats[STP]' min='1' max='10'>
                    <label for='seatSTC'>Standard Child</label><input type='number' id='seatSTC' name='seats[STC]' min='1' max='10'>
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
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
        Programming course at RMIT University in Melbourne, Australia.
    </div>
    <div>
        <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </div>
</footer>

<aside id='debug'>
    <hr>
    <h3>Debug Area <a id='showDebugAnchor' onclick='toggleDebug()'>show</a></h3>
    <pre id='debugArea'>
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
