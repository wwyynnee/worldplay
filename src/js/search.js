let input, search, pr, result, result_arr, locale_HTML, result_store;

function func() {
 	locale_HTML = document.body.innerHTML;
}
setTimeout(func, 1000);

function FindOnPage(name, status) {
  input = document.getElementById(name).value;
  if (input.length < 3 && status == true) {
		alert("Для поиска вы должны ввести три или более символов");
		function FindOnPageBack() {
      document.body.innerHTML = locale_HTML;
    }
	}
	
	if (input.length >= 3) {
		function FindOnPageGo() {
			search = '/'+input+'/g';
			pr = document.body.innerHTML;
			result = pr.match(/>(.*?)</g);
			result_arr = [];

			let warning = true;
			for (let i = 0; i<result.length; i++) {
				if (result[i].match(eval(search)) != null) {
					warning = false;
				}
			}
			if (warning == true) {
				alert("Не найдено ни одного совпадения");
			}
			for (let i = 0; i < result.length; i++) {
        result_arr[i] = result[i].replace(eval(search), '<p class="game__content game-border" style="border-radius: 25px; width: 100%;">'+input+'</p>');
      }
			for (let i = 0; i < result.length; i++) {
				pr = pr.replace(result[i],result_arr[i])
			}
			document.body.innerHTML = pr;
		}
	}
	function FindOnPageBack() {
    document.body.innerHTML = locale_HTML;
  }
	if (status) {
    FindOnPageBack();
    FindOnPageGo();
  }
	if (!status) {
    FindOnPageBack();
  }
}