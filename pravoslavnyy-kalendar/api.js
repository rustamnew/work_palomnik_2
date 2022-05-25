(function(w) {
  var config = w.___azcfg;
  class_name = 'azbyka-saints';
  var el_arr = getElementsByClassName(document,'div',class_name);
  var req;
  if(config.css != undefined) {
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = config.css;
    link.media = 'all';
    head.appendChild(link);
  }
  var param = '';
  if(config.image != undefined && config.image) {
    param = '?image=1';
  }
  ///
  var data = getData(config.api+'/presentations.json'+param);
  
  presentations = data.presentations;
  inner = '';
  if(typeof data.imgs !== 'undefined' && data.imgs.length > 0) {
    img = data.imgs/*[Math.floor(Math.random()*data.imgs.length)]*/;
    inner = '<div class="days-image calendar-slider">'+img+'</div>';
	console.log(data.imgs);
	console.log(inner);
  }

  ///
  for (key in el_arr) {
    element = el_arr[key];
    element.innerHTML = inner+presentations;

	console.log(element);
	console.log(data.imgs);
  }
})(window);

function getElementsByClassName(oElm, strTagName, strClassName){
  var arrElements = (strTagName == "*" && document.all)? document.all : oElm.getElementsByTagName(strTagName);
	 var arrReturnElements = new Array();
	 strClassName = strClassName.replace(/\-/g, "\\-");
	 var oRegExp = new RegExp("(^|\\s)" + strClassName + "(\\s|$)");
	 var oElement;
	 for(var i=0; i<arrElements.length; i++){
	   oElement = arrElements[i];
	   if(oRegExp.test(oElement.className)){
	     arrReturnElements.push(oElement);
	   }
	 }
	 return (arrReturnElements)
}

function createRequest() {
	// Создание объекта XMLHttpRequest отличается для Internet Explorer и других обозревателей, поэтому для совместимости эту операцию приходиться дублировать разными способами
	if (window.XMLHttpRequest) req = new XMLHttpRequest();		// normal browser
	else if (window.ActiveXObject) {							// IE
		try {
			req = new ActiveXObject('Msxml2.XMLHTTP');			// IE разных версий
		} catch (e){}											// может создавать
		try {													// объект по разному
			req = new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e){}
	}
	return req;
}

function getData(handlerPath, parameters) {
	// Создаем запрос
	req = createRequest();
	if (req) {
		// Отправляем запрос методом POST с обязательным указанием файла обработчика (true - асинхронный режим включен)
		req.open("GET", handlerPath, false);
		// При использовании объекта XMLHttpRequest с методом POST требуется дополнительно отправлять header
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		// Передаем необходимые параметры (несколько параметров разделяются амперсандами)
		req.send(parameters);

		// Для статуса "OK"
		if (req.status == 200) {
			// Получаем ответ функции в виде строки
			var rData = req.responseText;
			// Проверяем данные с помощью регулярных выражений, после выполняем функцию eval()
			var eData = !(/[^,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]/.test(rData.replace(/"(\\.|[^"\\])*"/g, ''))) && eval('(' + rData + ')');
			// Создаем массив данных
			var eArray = new Object(eData);
			console.log(eArray)
		}
	}
	return eArray;
}

$('.calendar-slider').owlCarousel({
	loop: false,
	nav: false,
	dots: false,
	autoplay: true,
	autoplayTimeout: 4000,
	smartSpeed: 1000,
	margin: 10,
	center: false,
	autoplayHoverPause: true,
	mouseDrag: true,
	touchDrag: true,
	responsive: {
		0: {
			items: 1
		},
		768: {
			items: 3
		},
		991: {
			items: 5
		}
	}
});

