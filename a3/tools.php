<?php
session_start();

/*  * Code sourced and adapted from:
    * https://rmit.instructure.com/courses/85177/pages/workshop-wk08?module_item_id=3565034
    */

// Error reporting level
error_reporting(E_ERROR | E_WARNING | E_PARSE);

/*  * Code sourced and adapted from:
    * https://rmit.instructure.com/courses/85177/pages/workshop-wk08?module_item_id=3565034
    */

// Takes structured PHP variables and outputs the equivalent variable in a self-contained JavaScript element
function php2js($arr, $arrName)
{
    $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
    echo <<<"CDATA"
  <script>
    let $arrName = $arrJSON;
  </script>
CDATA;
}

/*  * Code sourced and adapted from:
    * https://stackoverflow.com/questions/50018014/passing-a-php-class-object-to-javascript-and-accessing-its-properties-in-javascr
    */

class Movie implements JsonSerializable
{
    protected $movieID;
    protected $movieTitle;
    protected $movieShortSynopsis;
    protected $movieSynopsis;
    protected $movieRating;
    protected $movieScreening = [];

    function __construct($movieID, $movieTitle, $movieShortSynopsis, $movieSynopsis, $movieRating, $movieScreening)
    {
        $this->movieID = $movieID;
        $this->movieTitle = $movieTitle;
        $this->movieShortSynopsis = $movieShortSynopsis;
        $this->movieSynopsis = $movieSynopsis;
        $this->movieRating = $movieRating;
        $this->movieScreening = $movieScreening;
    }

    function getMovieTitle(){
        return $this->movieTitle;
    }

    function movieModule()
    {
        echo <<<CDATA
             <div class='card' tabindex='1'>
                <article>
                    <img src='../../media/$this->movieID.png' alt='$this->movieTitle movie poster'>
                    <h2>$this->movieTitle</h2>
                    <h3>$this->movieRating</h3>
                    <h4>Screenings</h4>
                    <ul>
CDATA;
        foreach ($this->movieScreening as $day => $time) {
            echo "<li>$day</li><li>$time</li>";
        }
        echo <<<CDATA
                    </ul>
                </article>
                <article>
                    <h2>$this->movieTitle</h2>
                    <p>$this->movieShortSynopsis</p>
                    <a href='booking.php?movieID=$this->movieID'>Book Ticket</a>
                </article>
             </div>
CDATA;
    }

    function movieTrailerModule()
    {
        echo <<<CDATA
        <h1>$this->movieTitle</h1>
        <!-- Code sourced and adapted from: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_video -->
        <video controls>
            <source src='../../media/$this->movieID-trailer.mov' type='video/mp4'>
            Your browser does not support the video tag.
        </video>
        <h2>The synopsis below may give away important plot points.</h2>
        <article>
            <h3>Synopsis</h3>
            $this->movieSynopsis
        </article>
CDATA;
    }

    function radioButtonModule()
    {
        echo "<fieldset><legend>Screenings</legend>";
        foreach ($this->movieScreening as $day => $time) {
            if ($this->movieScreening[$day] === "No Screenings") {
                continue;
            } else {
                echo "<input type='radio' id='$day' class='radio-day-time' name='day-time' value='$day $time' onclick='priceCalc();' required>";
                echo "<label for='$day'>$day $time</label>";
            }
        }
        echo "</fieldset>";
    }

    function jsonSerialize()
    {
        return [
            'movieID' => $this->movieID,
            'movieTitle' => $this->movieTitle,
            'movieRating' => $this->movieRating
        ];
    }
}

/*  * Movies information sourced from:
    * https://www.imdb.com/title/tt12889404/plotsummary?ref_=tt_stry_pl
    * https://www.flickeringmyth.com/2022/01/movie-review-cyrano-2021/
    * https://www.imdb.com/title/tt1160419/plotsummary?ref_=tt_stry_pl#synopsis
    * https://www.imdb.com/title/tt11628854/plotsummary?ref_=tt_stry_pl#synopsis
    * https://www.imdb.com/title/tt10872600/plotsummary?ref_=tt_stry_pl#synopsis
    */

$cyrano = new Movie("RMC",
    "CYRANO",
    "A man ahead of his time, Cyrano de Bergerac dazzles whether with ferocious wordplay at a
                      verbal joust or with brilliant swordplay in a duel. But, convinced that his appearance
                      renders him unworthy of the love of a devoted friend, the luminous Roxanne, Cyrano has yet
                      to declare his feelings for her and Roxanne has fallen in love, at first sight, with
                      Christian.",
    "<p>Cyrano is in love with his longtime friend Roxanne (played by Haley Bennett with more than enough energy and
            liveliness to match the unabashed melodramatic lovefest tone) but seemingly will always be deathly terrified
            of confessing those feelings for fear of rejection over his appearance. He is a competent fighter, although
            what he’s really got going for him is a deep vocabulary and poetic prowess, especially when writing letters.
            The question then becomes how far words can take someone in romance when love understandably comes from
            aesthetic preference and sexual attraction in some cases as much as personality. Maybe Roxanne doesn’t care
            about any of that.</p>
            <p> To us, it’s evident that she would probably reciprocate his emotions (she is headstrong not to fall for
            someone for superficial reasons such as wealth). Still, the well of self-deprecation and insecurity is
            never-ending, rendering Cyrano’s hurt incredibly sympathetic. Complicating matters, Roxanne also has eyes
            for a soldier friend of Cyrano, the handsome and well-meaning Christian (Kelvin Harrison Jr., capable of
            everything from drama to singing to the occasional comedic relief) unable to articulate himself verbally or
            on the page correctly.</p>
            <p>And if there is one thing Roxanne values from a potential love interest above all else, it’s flattering love
            letters. As a result, Cyrano makes the tough choice of writing letters for Christian, imbuing them with his
            own thoughts and soul, effectively wooing her vicariously. Christian has no idea that Cyrano loves Roxanne,
            so he’s more than willing to go along with the charade. Although, it does bring up the point that at times,
            it’s hard to believe any of these characters are oblivious to what each other truly think or are doing.</p>",
    "PG-13 | Drama, Musical, Romance",
    ["MON" => "6PM", "TUE" => "6PM", "WED" => "No Screenings", "THU" => "No Screenings", "FRI" => "No Screenings", "SAT" => "3PM", "SUN" => "3PM"]);

$dune = new Movie("ACT",
    "DUNE",
    "A mythic and emotionally charged hero's journey, \"Dune\" tells the story of Paul Atreides, a
                      brilliant and gifted young man born into a great destiny beyond his understanding, who must
                      travel to the most dangerous planet in the universe to ensure the future of his family and
                      his people.",
    "<p>The story opens with a woman telling a portion of her people's history on the desert planet, Arrakis. The
            woman, Chani, is a Fremen. She explains that since before she was born the planet has been ruled by the
            cruel Harkonnens who have grown enormously rich harvesting the psychogenic substance \"melange\" also known as
            the spice. The Fremen have been trying to expel the Harkonnens, but to no avail. Recently, however, the
            Padishah Emperor Shaddam IV has ordered the Harkonnens to leave Arrakis. Chani wonders who the new rulers
            will be.</p>
            <p>On the planet Caladan, Paul Atreides eats breakfast with his mother the Lady Jessica. A member of the
            quasi-religious order of the Bene Gesserit, Jessica has been trying to teach her son the special powers of
            her order. She tests Paul by having him try to compel her to pass him a glass of water. Paul is only
            partially successful. Paul learns about the planet Arrakis and its people. It is the only source of the
            psychoactive spice, which extends life and perception. Spice is necessary for interstellar travel since it
            makes possible the expanded consciousness of the navigators who plot faster than light jumps, \"folding\"
            space time to travel instantly from one planet to another.</p>
            <p>Paul's father, Duke Leto Atreides, along with soldier Gurney Halleck and mentat Thufir Hawat, receive an
            imperial envoy who formalizes the awarding of Arrakis to House Atreides. The emperor fears Leto's growing
            political power and popularity in the Landsraad, a conclave of noble houses. Leto recognizes that his
            appointment to oversee Arrakis is a trap of some kind, but cannot refuse an imperial offer. Paul asks his
            friend, the elite soldier Duncan Idaho to take him along when Duncan goes to Arrakis weeks ahead of time to
            scout things out. Duncan refuses. Paul confides that he's been having dreams about Arrakis and the Fremen,
            including one where Duncan falls in battle. Duncan dismisses this as merely a dream, telling Paul that
            \"Everything important happens when we're awake\".</p>",
    "M | Action, Adventure, Drama, Sci-Fi",
    ["MON" => "9PM", "TUE" => "9PM", "WED" => "9PM", "THU" => "9PM", "FRI" => "9PM", "SAT" => "6PM", "SUN" => "6PM"]);

$silentNight = new Movie("AHF",
    "SILENT NIGHT",
    "Nell, Simon and their son Art host a yearly Christmas dinner at their country estate for
                      their former school friends and their spouses. It is gradually revealed that there is an
                      imminent environmental catastrophe and that this dinner will be their last night alive.",
    "<p>Married couple Nell and Simon host a yearly Christmas dinner at their country estate for their former school
            friends and their spouses. This Christmas is a special occasion with everyone dressing in formal wear and
            the children being allowed to swear. It is gradually revealed that because of an imminent environmental
            catastrophe in which a rolling gas cloud is killing most life forms the British government has issued
            suicide pills for a quick and easy death before the cloud hits Britain.</p>
            <p>Nell, Simon and the rest of their friends have made a suicide pact to take the pills and give them to their
            children. However while James agrees with his friends over the decision his young wife Sophie has recently
            discovered she is pregnant and is still unsure whether to take the pill. Nell, Simon and their children
            video chat with Nell's mother, who is abroad, to say goodbye. The conversation leaves their eldest, Art,
            distressed. He begins to speculate that the government and the scientists are wrong.</p>
            <p>Art approaches James and Sophie with his fears. Sophie reveals that though she knows the poison will kill her
            she does not want to take the pill. Art then tells his mother that he wants to stay with Sophie and hold her
            hand until they both die. Nell and Simon are distressed and try to explain to Art that he must take the pill
            with the rest of the family. He refuses and runs away but discovers a family on the side of the road that
            are dead revealing the poison is already close. Returning home the group realizes it is past midnight and
            time to take their pills. They divide into their separate rooms to say goodbye. Before the family can take
            their pills Art, who has swallowed some of the poison, dies. James pressures Sophie to take the pill saying
            he will not unless she does too. The following morning everyone has died, except Arthur who opens his
            eyes.</p>",
    "MA15+ | Drama, Horror",
    ["MON" => "No Screenings", "TUE" => "No Screenings", "WED" => "12PM", "THU" => "12PM", "FRI" => "12PM", "SAT" => "9PM", "SUN" => "9PM"]);

$spiderManNoWayHome = new Movie("FAM",
    "SPIDER-MAN: NO WAY HOME",
    "Peter Parker's secret identity is revealed to the entire world. Desperate for help, Peter
                      turns to Doctor Strange to make the world forget that he is Spider-Man. The spell goes
                      horribly wrong and shatters the multiverse, bringing in monstrous villains that could
                      destroy the world.",
    "<p>One week after Quentin Beck's attacks in Europe and subsequent framing of Spider-Man for his murder,
            Spider-Man's civilian identity as Peter Parker is revealed to the world. Parker and MJ flee to his
            apartment, reuniting with his aunt May and Happy Hogan. With the apartment surrounded by the Department of
            Damage Control, Parker, MJ, Aunt May, and Ned Leeds are interrogated but ultimately released without charge
            with Peter's name being eventually cleared with the help of Matt Murdock. Parker, MJ, and Leeds return to
            high school but their university applications are rejected due to the recent controversy.</p>
            <p>Parker consults with Stephen Strange in the Sanctum Sanctorum, asking him to cast a spell to make people
            forget he is Spider-Man. Despite Wong's warning of the consequences that could be incurred, Strange casts
            the spell anyway. However, the spell is damaged when Peter's constantly changing requirements destabilize
            it. Strange then berates Peter, after finding out that Peter didn't even try to contact the MIT acceptance
            board before coming to him to request a potentially universe-ending spell. Parker goes to the Alexander
            Hamilton Bridge and tries to convince an MIT administrator to accept Leeds' and MJ's applications. Suddenly,
            the bridge is attacked by Otto Octavius, who rips Parker's nanotechnology from his Iron Spider suit, causing
            it to bond with his mechanical tentacles. Upon discovering that this isn't the Peter Parker he had
            previously fought, Octavius has his robotic arms disabled by the nanotechnology, before being captured and
            placed in a holding cell in the Sanctum Sanctorum, along with Curt Connors who has been captured by Strange.
            Strange reveals that his spell has begun bringing everybody from every part of the multiverse who knows
            Peter Parker is Spider-Man into their world. With the help of MJ and Leeds, Parker decides to help capture
            any other possible \"visitors\". They find and capture Max Dillon and Flint Marko.</p>
            <p>Elsewhere, Norman Osborn is retrieved after going to a F.E.A.S.T. building seeking help. Strange wants to
            send the villains back to their respective universes and meet their fates. However, Parker wants to cure and
            help them before sending them back in order to prevent their fated deaths. He frees them and confines
            Strange in the Mirror Dimension after a brief fight, taking the villains to Happy's apartment. Parker
            successfully cures Octavius by using Stark Industries technology to replace his broken inhibitor chip. When
            cures are developed for Osborn and Dillon, the Green Goblin persona takes over Osborn before the cure can be
            administered. Goblin then manipulates Dillon into removing the device that Parker put on him to cure him
            and, despite the best efforts of Parker and Octavius, the other four escape. In the ensuing battle, May is
            critically injured by the Goblin, with Parker unable to save her as she succumbs to her wounds. MJ and Leeds
            accidentally learn how to open portals using Strange's sling ring, which they use in an attempt to find
            Parker, but instead summon an alternate Peter Parker from a different universe. A second attempt brings
            through another alternative.</p>",
    "M | Action, Adventure, Fantasy, Sci-Fi",
    ["MON" => "12PM", "TUE" => "12PM", "WED" => "6PM", "THU" => "6PM", "FRI" => "6PM", "SAT" => "12PM", "SUN" => "12PM"]);

// Array containing movie objects
$movies = ["RMC" => $cyrano,
    "ACT" => $dune,
    "AHF" => $silentNight,
    "FAM" => $spiderManNoWayHome];

// Prices and seats
$prices = [
    "STA" => ["Standard Adult" => ["Discount" => 15.00, "Normal" => 20.50]],
    "STP" => ["Standard Concession" => ["Discount" => 13.50, "Normal" => 18.00]],
    "STC" => ["Standard Child" => ["Discount" => 12.00, "Normal" => 16.50]],
    "FCA" => ["First Class Adult" => ["Discount" => 24.00, "Normal" => 30.00]],
    "FCP" => ["First Class Concession" => ["Discount" => 22.50, "Normal" => 27.00]],
    "FCC" => ["First Class Child" => ["Discount" => 21.00, "Normal" => 24.00]]
];

// Include validation on POST request
//if ($_SESSION["REQUEST_METHOD"] === "POST"){
//    include_once('post-validation.php');
//}

// Redirect home if Get contains the wrong Movie ID
function redirectHome()
{
    global $movies;
    if (!isset($_GET['movieID']) || !isset($movies[$_GET['movieID']])) {
        header("Location: index.php");
    }
}

// Head module
function headModule($title)
{
    echo <<<CDATA
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>$title</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type='text/css' rel='stylesheet' href='../wireframe.css' disabled>
CDATA;

    echo "<link id='stylecss' type='text/css' rel='stylesheet' href='css/main.css?t=" . filemtime("css/main.css") . "'>";
    echo "<link id='stylecssScreenMedium' type='text/css' rel='stylesheet' href='css/media-screen-medium.css?t=" . filemtime("css/media-screen-medium.css") . "'>";
    echo "<link id='stylecssScreenLarge' type='text/css' rel='stylesheet' href='css/media-screen-large.css?t=" . filemtime("css/media-screen-large.css") . "'>";

    echo <<<CDATA
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='icon' href='../../media/lunardo-cinema-logo-primary.png' type='image/x-icon'>
    <script src='../wireframe.js' defer></script>
    <script src='script/main.js' defer></script>
    <script src='script/validation.js' defer></script>
CDATA;
}

// Header module
function headerModule()
{
    echo <<<CDATA

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
CDATA;
}

// Price table module
function priceTableModule()
{
    global $prices;
    echo <<<CDATA
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
CDATA;
    foreach ($prices as $seatID => $seatsAndPrices) {
        foreach ($seatsAndPrices as $seatType => $price)
            echo "<tr><td>$seatType</td><td>\$${price["Discount"]}</td><td>\$${price["Normal"]}</td></tr>";
    }
    echo "</tbody></table>";


}

// Footer module
function footerModule()
{
    echo <<<CDATA
<div class='container-footer'>
            <h1>LUNARDO <span>Cinema</span></h1>
            <div>
                <h2>CONTACT</h2>
                <ul>
                    <li><i class='fa fa-map-marker'></i> 8 Lunar Street Lu Vic 1234</li>
                    <li><i class='fa fa-phone'></i> (03) 4321 9876</li>
                    <li><i class='fa fa-envelope'></i> info@lunardo.com.au</li>
                    <li><a href='https://github.com/aryna93/wp' target='_blank'><i class='fa fa-github'></i> Website
                            Repository</a></li>
                </ul>
            </div>
        </div>

        <div>&copy;<script>
                document.write(new Date().getFullYear());
            </script>
CDATA;

    echo " Arian Najafi Yamchelo, s3910902. Last
            modified " . date('Y F d  H:i', filemtime($_SERVER["SCRIPT_FILENAME"])) . ".";

    echo <<<CDATA
        </div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of
            Science Web
            Programming course at RMIT University in Melbourne, Australia.
        </div>
        <div>
            <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
        </div>

CDATA;
}

/*  * Code sourced and adapted from:
    * https://rmit.instructure.com/courses/85177/pages/workshop-wk08?module_item_id=3565034
    */

// Prints GET/POST/SESSION global arrays contents
function debugModule()
{
    echo "<h3>Debug Area</h3><pre>";
    echo "GET Contains:\n";
    print_r($_GET);
    echo "POST Contains:\n";
    print_r($_POST);
    echo "SESSION Contains:\n";
    print_r($_SESSION);
    echo "</pre>";
}

/*  * Code sourced and adapted from:
    * https://rmit.instructure.com/courses/85177/pages/workshop-wk08?module_item_id=3565034
    */

// Prints an output of PHP code using an ordered list
function printCodeModule()
{
    $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
    echo "<h3>PHP Code</h3><pre><ol>";
    foreach ($allLinesOfCode as $oneLineOfCode) {
        echo "<li>" . rtrim(htmlentities($oneLineOfCode)) . "</li>";
    }
    echo "</ol></pre>";
}
