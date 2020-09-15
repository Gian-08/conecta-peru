"use strict";

window.addEventListener("load", () => {
  const btnRegistro = document.querySelector("#btnRegistro");
  const btnTiendaNueva = document.querySelector("#btnTiendaNueva");
  const modalScreen = document.querySelector(".screen-modal");
  const xModal = document.querySelectorAll(".modal-head i");
  btnRegistro.addEventListener("click", () => {
    modalScreen.style.display = "flex";
  });
  xModal[0].addEventListener("click", () => {
    modalScreen.style.display = "none";
  });
  btnTiendaNueva.addEventListener("click", () => {
    modalScreen.style.display = "flex";
  });
  window.addEventListener("click", (e) => {
    if (e.target == modalScreen) {
      modalScreen.style.display = "none";
    }
  });

  const btnSesion = document.querySelector("#btnSesion");
  const modalScreen1 = document.querySelector(".screen-modal-1");
  btnSesion.addEventListener("click", () => {
    modalScreen1.style.display = "flex";
  });
  xModal[1].addEventListener("click", () => {
    modalScreen1.style.display = "none";
  });
  window.addEventListener("click", (e) => {
    if (e.target == modalScreen1) {
      modalScreen1.style.display = "none";
    }
  });
});
