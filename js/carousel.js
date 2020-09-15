"use strict";
window.addEventListener("load", () => {
  const items = document.querySelectorAll(".carousel-body-item");
  let contador = 0;
  setInterval(() => {
    contador++;
    items.forEach((element) => {
      element.style.transform = `translate(-${contador}00%)`;
      element.style.transition = "transform 400ms";
    });
    if (contador == 9) {
      items.forEach((element) => {
        element.style.transform = `translate(0%)`;
        element.style.transition = "transform 0ms";
      });
      contador = 0;
    }
  }, 3000);
  const itemsmovil = document.querySelectorAll(".carouselmovil-body-item");
  let contadormovil = 0;
  setInterval(() => {
    contadormovil++;
    itemsmovil.forEach((element) => {
      element.style.transform = `translate(-${contadormovil}00%)`;
      element.style.transition = "transform 400ms";
    });
    if (contadormovil == 9) {
      itemsmovil.forEach((element) => {
        element.style.transform = `translate(0%)`;
        element.style.transition = "transform 0ms";
      });
      contadormovil = 0;
    }
  }, 3000);
  const items2 = document.querySelectorAll(".carousel2-body-item");
  let contador2 = 0;
  setInterval(() => {
    contador2++;
    items2.forEach((element) => {
      element.style.transform = `translate(-${contador2}00%)`;
      element.style.transition = "transform 400ms";
    });
    if (contador2 == 3) {
      items2.forEach((element) => {
        element.style.transform = `translate(0%)`;
        element.style.transition = "transform 0ms";
      });
      contador2 = 0;
    }
  }, 3000);
  const itemsmovil2 = document.querySelectorAll(".carouselmovil2-body-item");
  let contadormovil2 = 0;
  setInterval(() => {
    contadormovil2++;
    itemsmovil2.forEach((element) => {
      element.style.transform = `translate(-${contadormovil2}00%)`;
      element.style.transition = "transform 400ms";
    });
    if (contadormovil2 == 2) {
      itemsmovil2.forEach((element) => {
        element.style.transform = `translate(0%)`;
        element.style.transition = "transform 0ms";
      });
      contadormovil2 = 0;
    }
  }, 2000);
});
