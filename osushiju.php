<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushiplace</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <div class="main">
        <h2>O sushiju</h2>
        <p>Sushi, naziv je za japansko jelo koje se sastoji iz dva suštinska dela: kuvanog pirinča sa dodatkom pirinčanog sirćeta (šari) i dodataka pirinču (neta). Neta dodaci (najčešće riba i morski plodovi), kao i oblik sušija mogu se dosta razlikovati; međutim, jedna stvar koju svi sušiji imaju je šari (pirinač sa sirćetom). </p>
        <br>
        <div class="infoimg">
            <img src="img/narezusi.jpg" alt="" ><br>
            <span>Narezusi, originalni sushi</span><br>
        </div>
        <br>
        <p>Moderni oblik sušija stvorio je Hanaja Johej (1799–1858) na kraju Edo perioda u gradu Edo. Ovakav vid sušija je preteča savremenog oblika fast fuda, koji nije bio fermentisan (samim tim prže spreman) i spreman za jelo i van objekta gde je skuvan. Naziv savremenog edomae nigirizušija potiče od naziva tokijske obale Edomaea gde je sveža riba lovljena za pripremu sušija. Iako se za pripremu današnjeg sušija više ne koristi riba ulovljena kod Edomaea, naziv edomae nigirizuši ostao je nepromenjen.</p>
        <br>
        <div class="infoimg">
            <img src="img/nigirizushi.jpg" alt="" ><br>
            <span>Nigirizushi, moderni oblik sushija</span><br>
        </div>
        <h2>Vrste sushija</h2>
        <p><b>Čirašizuši</b> ili u bukvalnom prevodu razasuti suši, se sastoji iz činije suši pirinča pokrivenog sa sirovom ribom i povrćnim dodacima barazuši.<br>
        <b>Inarizuši</b> se sprema u vidu tofu pohovane vrećice, ispunjene samo suši pirinčem. Naziv potiče od imena šintoističkog boga Inari, za koga se smatra da voli tofu.<br>
        <b>Makizuši</b> u bukvalnom prevodu rolovani suši ili norimaki u bukvalnom prevodu nori rolnica ili još makimono u bukvalnom prevodu raznovrsni rol je cilindrični oblik sušija, stvoren pomoću bambusovog podmetača makisua. Makizuši se najčešće umotava morskom algom nori, mada je često i umotavanje tankim omletom, papirom od soje, krastavcem ili peršunom. Makizuši se najčešće seče na manje kolutove, određenog sleda namotaja.<br>  
        <div class="infoimg">
            <img src="img/chirashizushi.jpg" alt="" >
            <img src="img/inarizushi.jpg" alt="" ><br>
            <span>Chirashizushi i inarizushi</span><br>
        </div>
    </p>
    </div>
    <script src="js/music.js"></script>
    <script src="js/navBtn.js" defer></script>
</body>
</html>