let on = 0;
let music = new Audio("Sushi_Restaurant.mp3");

function muzika(){
    if(on==0){
        music.play();
        music.volume = 0.1;
        on=1;
    }
    else{
        music.pause();
        on=0;
    }
}

const bt = document.getElementById("muzika");
bt.addEventListener("click", muzika);