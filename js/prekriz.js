const ulista = document.getElementById("ulista").childNodes;
for(let i=0;i<ulista.length;i++){
    ulista[i].addEventListener("click",function(e){
        if(ulista[i].style.textDecoration=="line-through"){
            ulista[i].style.textDecoration="none";
            ulista[i].style.color="black";
        }
        else{
            ulista[i].style.textDecoration="line-through";
            ulista[i].style.color="gray";
        }
    });
}
