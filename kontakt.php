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
    </div>

    <div>
        <h3>Kontaktirajte nas</h3>
        <p>Ako imate bilo kakve sugestije ili primedbe, slobodno nam pošaljite poruku</p>
    
        <form id="form" class="form" method="post" action="" novalidate>
            
            <div class="form-group">
                <div class="input-group">
                    <input type="radio" name="radio" id="Primedba" checked>Primedba
                    <input type="radio" name="radio" id="Sugestija">Sugestija
                </div>
            </div>           
           
            <div class="form-group">
                <label class="label">Ime</label>
                <div class="input-group">
                    <input type="text" id="Name" name="Name">
                </div>
            </div>

            <div class="form-group">
                <label class="label">Email</label>
                <div class="input-group">
                    <input type="email" id="Email" name="Email" required>
                </div>
            </div>

            <div class="form-group">
                <label class="label">Telefon</label>
                <div class="input-group">
                    <input type="tel" id="Phone" name="Phone">
                </div>
            </div>
    
            <div class="form-group">
                <label class="label">Poruka</label>
                <div class="input-group">
                    <textarea id="Message" name="Message" class="form-control" rows="6" maxlength="3000" required></textarea>
                </div>
            </div>
    
            <div class="form-group">
                <button type="submit" class="form_btn">Pošalji</button>
            </div>
            <div id="greska" class="greska"> </div>
        </form>
    </div>
    <script src="js/music.js"></script>
    <script src="js/navBtn.js" defer></script>
    <script src="js/formval.js"></script>
</body>
</html>