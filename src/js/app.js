if ("serviceWorker" in navigator){
  navigator.serviceWorker.register("src/js/sw.js")
    .then(reg => console.log("Успешная регистрация"))
    .catch(err => console.log("Произшла ошибка", err));
}