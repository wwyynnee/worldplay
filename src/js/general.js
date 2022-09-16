// Начальное скрытие
$(".article").hide();
$(".nv2").hide();
// Открытие навигации
function nv() {
  $(".article").show();
  $(".nv2").show();
  $(".nv").hide();
  $(".main").css("width", "75vw");
}
// Закрытие навигации
function nv2() {
  $(".article, .aside, .nv2").hide();
  $(".nv, .block__nav, .block__container").show();
  $(".main").css("width", "100vw");
}

/***************************************
          Навигация world.html
****************************************/

// Начальное скрытие
$(".all__hover, .times").show();
$(".all__hover2, .all__hover3").hide(); // Скрытие блоков
$(".down, .times2, .times3").hide(); // Скрытие кнопки "закрыть"

// Открытие блока
function navsrchide1() {
  $(".all__hover").show();
  $(".times, .down2, .down3").show();
  $(".times2, .times3, .down").hide();
  $(".all__hover2, .all__hover3").hide();
}
function navsrchide2() {
  $(".all__hover2").show();
  $(".times2, .down, .down3").show();
  $(".times, .times3, .down2").hide();
  $(".all__hover, .all__hover3").hide();
}
function navsrchide3() {
  $(".all__hover3").show();
  $(".times3, .down, .down2").show();
  $(".times, .times2, .down3").hide();
  $(".all__hover, .all__hover2").hide();
}

// Закрытие блока
function navsrcshow1() {
  $(".all__hover2, .times2").show();
  $(".all__hover, .down2").hide();
  $(".times").hide();
  $(".down").show();
}
function navsrcshow2() {
  $(".all__hover, .times").show();
  $(".all__hover2, .down").hide();
  $(".times2").hide();
  $(".down2").show();
}
function navsrcshow3() {
  $(".all__hover, .times").show();
  $(".all__hover3, .down").hide();
  $(".times3").hide();
  $(".down3").show();
}

/***************************************
          Полноэкранный режим
****************************************/

/*$(".fs2").hide(); // Начальное скрытие
// Открытие полноэкранного режима
function fs() {
  let element = document.body;
  let req =
    element.requestFullScreen ||
    element.webkitRequestFullScreen ||
    element.mozRequestFullScreen;

  if (req) {
    req.call(element);
  } else {
    let wscript = new ActiveXObject("Wscript.shell");
    wscript.SendKeys("{F11}");
  }
  
  $(".fs2").show();
  $(".fs").hide();
        
  return false;
}
// Закрытие полноэкранного режима
function fs2() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
        
  $(".fs").show();
  $(".fs2").hide();
        
  return false;
}*/