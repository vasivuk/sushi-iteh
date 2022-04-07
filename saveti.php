<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushiplace</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <button class="nav_toggle_button" aria-expanded="false"></button>
    <div class="navbar" data-visible="false">
        <a href="index.html"><img class="logo" src="img/logo.png" alt="Logo"></a>
        <ul class="nav_links">
            <li><a href="osushiju.html">O sushiju</a></li>
            <div class="dropdown">
                <li class="dropbtn"><a href="recepti.html">Recepti</a></li>
                <div class="dropdown-content">
                    <a href="rolne/sushi1.html">Salmon Roll</a>
                    <a href="rolne/sushi2.html">California Avocado</a>
                    <a href="rolne/sushi3.html">Spicy Tuna Crunch</a>
                    <a href="rolne/sushi4.html">Dragon Roll</a>
                    <a href="rolne/sushi5.html">Spicy Crab Roll</a>
                    <a href="rolne/sushi6.html">Rainbow Roll</a>
                </div>
              </div>
            <li><a href="saveti.html">Dodatni saveti</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
        <button id="muzika"><img class="soundButton" src="img/SoundButton.png"></button>
    </div>
    <div class="saveti">
        <h3>Kako obariti sushi pirinač?</h3>
    <p>Da bi mogla da se uspešno napravi rolna sushija, potrebno je da pirinač bude lepljiv i spremljen na specijalni način.
        U narednom snimku će vam biti pokazano kako to da uradite. 
    </p>
    <div class="videoDiv">
        <video  width="720" height="480" controls>
            <source src="how_to_make_rice.mp4">
        </video>
    </div>
    <hr>
    <h3>Kako napraviti dobru rolnu?</h3>
    <p>U narednom videu ćete dobiti instrukcije od šefa Seizi Imure, kako na najbolji način napraviti rolnu sushija.</p>
    <div class="videoDiv">
        <video  width="720" height="480" controls>
            <source src="how_to_roll.mp4">
        </video>
    </div>
    </div>
    <script src="js/music.js"></script>
    <script src="js/navBtn.js" defer></script>
</body>
</html>