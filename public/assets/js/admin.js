$(document).on('ready', function(){
	/* El siguiente codigo se relaciona con los fake file inputs usados para reemplazar 
	los inputs files normales*/

	//Simular el hover sobre el fakeInput
	$("input[type=file]").hover(function() {
		$("#fileFakeInput, #fileFakeText").addClass('hover')
	}, function() {
		$("#fileFakeInput, #fileFakeText").removeClass('hover')
	});

	//Al cambiar el calor del verdadero input file, cambia el texto en el fake
	$("input[type=file").change(function(event) {
		var fileName =$("input[type=file").val().split('\\').pop();
		 $("#fileFakeText").val(fileName).addClass('class_name');
	});

	//Quitamos la clase de validación
	$("input[type=file").click(function(){
		$(".fileFake").removeClass('has-error')
	})

	//Se ejecuta al enviar un formulario con input File
	$(".fileForm input[type=submit").click(function(event) {
		if($(".fileForm #fileFakeText").val() == ""){
			$(".fileFake").addClass('has-error')
			event.preventDefault()
			return false
		}
	});
})