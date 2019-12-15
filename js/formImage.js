
	var form = document.forms[ document.forms.length - 1 ];

	form.image.onchange = function(){
		form.text.value = this.value;
	}

	form.text.onclick = form.button.onclick = function(){
		form.image.click();
	}
