document.addEventListener("DOMContentLoaded", function(){

    let otrosNoMtales = document.querySelectorAll(".otros-no-metales");
    let alcalinos = document.querySelectorAll(".alcalinos");
    let alcalinosTerreos = document.querySelectorAll(".alcalinos-terreos");
    let metalesDeTrancicion =document.querySelectorAll(".metales-de-transicion")
    let lantanidos = document.querySelectorAll(".lantanidos");
    let acdtinidos = document.querySelectorAll(".acdtinidos");
    let metaloide = document.querySelectorAll(".metaloide");
    let otrosMetales = document.querySelectorAll(".otros-metales");
    let halogenos = document.querySelectorAll(".halogenos");
    let gasesNobles = document.querySelectorAll(".gases-nobles");

    for(let i = 0; i < otrosNoMtales.length; i++){
        otrosNoMtales[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < alcalinos.length; i++){
        alcalinos[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < alcalinosTerreos.length; i++){
        alcalinosTerreos[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < metalesDeTrancicion.length; i++){
        metalesDeTrancicion[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < lantanidos.length; i++){
        lantanidos[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < acdtinidos.length; i++){
        acdtinidos[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < metaloide.length; i++){
        metaloide[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < otrosMetales.length; i++){
        otrosMetales[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < halogenos.length; i++){
        halogenos[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
    for(let i = 0; i < gasesNobles.length; i++){
        gasesNobles[i].addEventListener("click", function(){
            this.style.backgroundColor = "gray";
            this.innerHTML = "";
        })
    }
})