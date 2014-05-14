//Script que se encarga de mover elementos para el responsive
$(document).on('ready', function(){
	$(window).resize(function(event) {
		if($(window).width() <= 990){
			$("#networksList").appendTo('#mainMenu')
			$("#logo").appendTo('header')
			$("#logo").attr('src', 'assets/images/distintivoHorizontal.png')
			$("header .container").appendTo('header')
		} else {
			$("#logo").appendTo('#headerInformation')
			$("#logo").attr('src', 'assets/images/distintivoVertical.png')
			$("#info").appendTo('#headerInformation')
			$("#networksList").appendTo('#headerInformation')
		}
	});

	$(window).resize()
})