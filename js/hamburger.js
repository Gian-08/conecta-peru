'use strict'
window.addEventListener("load" , ()=>{
    const hamburger = document.querySelector(".hamburger");
    const lista = document.querySelector(".nav-list");
    hamburger.addEventListener("click" , ()=>{
        lista.classList.toggle("open-nav");
    })

})