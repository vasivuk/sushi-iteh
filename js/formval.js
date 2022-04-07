const f = document.getElementById('form');

f.addEventListener('submit', function (ev) {
    let polje;

    const greska = document.getElementById('greska');

    polje = document.getElementById('Name');
    const ime = polje.value.trim();

    const maxDuzina = 30;
    if(ime===''){
        greska.textContent = 'Polje za ime ne sme biti prazno!';
        polje.focus();
        ev.preventDefault();
        return false;
    }

    if(ime.length > maxDuzina){
        greska.textContent = 'Ime ne sme imati više od 30 karaktera!';
        polje.focus();
        ev.preventDefault();
        return false;
    }

    polje = document.getElementById('Email');
    const email = polje.value;
    const et = email.indexOf('@');
    const poslednjaTacka = email.lastIndexOf('.');

    if(email===''){
        greska.textContent = 'Polje za email adresu ne sme biti prazno!';
        polje.focus();
        ev.preventDefault();
        return false;
    }

    if(et === -1 || poslednjaTacka === -1 || poslednjaTacka < et){
        greska.textContent = 'Nekorektna vrednost u polju za email adresu!';
        polje.focus();
        ev.preventDefault();
        return false;
    }

    polje = document.getElementById('Phone');
    const broj = polje.value;
    console.log(broj);

    if(isNaN(broj) || broj!=''){
        greska.textContent = 'Vrednost u polju za telefon nije broj!';
        polje.focus();
        ev.preventDefault();
        return false;
    }

    polje = document.getElementById('Message');
    const poruka = polje.value;
    const maxDuzinaP = 255;
    if(poruka===''){
        greska.textContent = 'Polje za poruku ne sme biti prazno!';
        polje.focus();
        ev.preventDefault();
        return false;
    }
    if(poruka.length>maxDuzinaP){
        greska.textContent = 'Polje za poruku ne sme imati više od 255 karaktera!';
        polje.focus();
        ev.preventDefault();
        return false;
    }
});