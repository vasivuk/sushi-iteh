<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Sushi</title>
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
    <div class="main_content">
        <h2>Izaberite sushi koji želite da napravite</h2>
        <div class="flex_container">
            <div class="flex_item">
                <h3>Salmon Roll</h3>
                <a href="rolne/sushi1.html"><img src="img/maki-salmon.png" alt=""></a>
            </div>
            <div class="flex_item">
                <h3>California Avocado</h3>
                <a href="rolne/sushi2.html"><img src="img/california-avocado.png" alt=""></a>
            </div>
            <div class="flex_item">
                <h3>Spicy Tuna Crunch</h3>
                <a href="rolne/sushi3.html"><img src="img/spicy-tuna-crunch.png" alt=""></a>
            </div>
            <div class="flex_item">
                <h3>Dragon Roll</h3>
                <a href="rolne/sushi4.html"><img src="img/dragon-roll.png" alt=""></a>
            </div>
            <div class="flex_item">
                <h3>Spicy Crab Roll</h3>
                <a href="rolne/sushi5.html"><img src="img/spicy-crab-roll.png" alt=""></a>
            </div>
            <div class="flex_item">
                <h3>Rainbow Roll</h3>
                <a href="rolne/sushi6.html"><img src="img/rainbow-roll.png" alt=""></a>
            </div>
        </div>
    </div>
    <script src="js/music.js"></script>
    <script src="js/navBtn.js" defer></script>
</body>

</html>