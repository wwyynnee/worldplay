/***************************************
                Слайдер
****************************************/

// Все фоны
let images = [
  `https://cdn.worldplay.tk/cdn/slider/bg2.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg3.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg4.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg5.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg6.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg7.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg8.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg9.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg10.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg11.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg12.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg13.webp`,
  `https://cdn.worldplay.tk/cdn/slider/bg14.webp`
];

let num = 0;

// Вперёд
function next() { 
    let slider = document.getElementById("slider");
    num++;
  
    if (num >= images.length) {
      num = 0;
    }
  
    slider.src = images[num];
}

// Назад
function prev() {
    let slider = document.getElementById("slider");
    num--;
  
    if (num < 0) {
      num = images.length - 1;
    }
  
    slider.src = images[num];
}
// Время автоматического пролистывания [ 7 секунд ]
setInterval(next, 7000);