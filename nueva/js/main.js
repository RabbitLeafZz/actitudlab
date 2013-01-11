$(document).ready(function() {
	var width = $(window).width();
	var height = $(window).height();
	var min_width = 1024;
	var min_height = 800;
	var ejecucion = false;

	var slider = $('#slider').bxSlider({
    	controls: false,
    	mode: 'fade',
    	adaptiveHeight: true,
    	onBeforeSlide: function() {
    		ejecucion = true;
    	},
    	onAfterSlide: function() {
    		ejecucion = false;
    	}
  	});

	if (width > 1024) {
		$("header, body, .secciones").css('width', width);
	} else {
		$("header, body, .secciones").css('width', 1024);
	}
	if (height > 2000) {
		$('.contenido, .bx-window').css('height', height-150);
	} else {
		$('.contenido, .bx-window').css('height', 650);
	}

	altoCuerpo('home');

	$(window).resize(function() {
		width = $(window).width();
		height = $(window).height();
		if (width > 1024) {
			$("header, body, .secciones").css('width', width);
		} else {
			$("header, body, .secciones").css('width', 1024);
		}
		if (height > 800) {
			$('.contenido, .bx-window').css('height', height-150);
		} else {
			$('.contenido, .bx-window').css('height', 650);
		}

		altoCuerpo('home');
	});

	/* Menú */
	$('.menu').click(function(e) {
		e.preventDefault();
		if (ejecucion) {
			return false;
		}

		actual = slider.getCurrentSlide();
		slider.goToSlide($(this).attr('data-index'));

		var clase = $(this).attr('class');
		clase = clase.replace('menu ', '');
		$(this).removeClass(clase);
		$(this).addClass(clase + '-activo');

		altoCuerpo(clase);

		clase = $('span[data-index="' + actual + '"]').attr('class');
		clase = clase.replace('menu ', '');
		$('span[data-index="' + actual + '"]').removeClass(clase);
		clase = clase.replace('-activo', '');
		$('span[data-index="' + actual + '"]').addClass(clase);
		
		return false;
	});

	/* Lightbox */
	$('a.masnoticias').colorbox({
		maxHeight: '100%',
		width: '90%'
	});


	/* Video */
	$("a[rel='pop-up']").click(function () {
      	var caracteristicas = "height=450,width=815,scrollTo,resizable=no,scrollbars=no,location=no,toolbar=no,directories=no,status=no,menubar=no";
      	nueva=window.open(this.href, 'Popup', caracteristicas);
      	return false;
 	});
	
	/* Esconde y muestra menu de Experiencia */

	$("#toggle-liceos").click(function () {		
		$(".liceos").toggle();
		$(".profesores").hide();
		$("#profesores").hide();
		$("#alumnos").hide();
		altoCuerpo('escuela');
	});    
	$("#toggle-profesores").click(function () {
		$(".profesores").toggle();
		$(".liceos").hide();
		$("#profesores").hide();
		$("#alumnos").hide();
		altoCuerpo('escuela');
	});    
	$("#toggle-alumnos").click(function () {
		$("#profesores").toggle();
		$("#alumnos").toggle();
		$(".profesores").hide();
		$(".liceos").hide();
		altoCuerpo('escuela');
	});    

});

function altoCuerpo(seccion) {
	if (seccion == 'home') {
		home = 400;
	} else {
		home = 0;
	}
	alto_menu = $('header').height();
	alto_cuerpo = $('div#' + seccion).height();

	$(".bx-window").css('height', 50 + alto_cuerpo + home);
	$(".body").css('height', alto_menu + alto_cuerpo + home);
}