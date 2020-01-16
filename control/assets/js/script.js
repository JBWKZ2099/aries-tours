$(document).ready(function(e) {

	//$("[data-target='#reservations']").click();

	var theHref = window.location.href;
	var pro_pay = "process_payment.php";

	if( theHref.split("?")[1] == "lang=es" || theHref.split("?")[1] == null ) {
		pro_pay+="?lang=es";
	} else if( theHref.split("?")[1] == "lang=en" ) {
		pro_pay+="?lang=en";
	}


	/*Formulario de reservacion (VIAJE SENSILLO)*/
	$("#vs_btn").click(function(){
		var t_viaje = $("[name='tipo_viaje']").val();
		//alert(t_viaje);
		if( t_viaje=="S" ){

			/*Datos usuario*/
			var codigo_servicio = $("[name='codigo_servicio']").val();
			var tipo_viaje = $("[name='tipo_viaje']").val();
			var origen = $("[name='origen']").val();
			var destino = $("[name='destino']").val();
			var fecha_llegada = $("[name='fecha_llegada']").val();
			var hora_llegada = $("[name='hora_llegada']").val();
			var minuto_llegada = $("[name='minuto_llegada']").val();
			var aerolinea_llegada = $("[name='aerolinea_llegada']").val();
			var n_vuelo_llegada = $("[name='n_vuelo_llegada']").val();
			var t_pasajeros = $("[name='t_pasajeros']").val();
			var t_vehiculos = $("[name='t_vehiculos']").val();
			var tipo_vehiculos = $("[name='tipo_vehiculos']").val();
			var adultos = $("[name='adultos']").val();
			var ninos = $("[name='ninos']").val();
			var nombre_r = $("[name='nombre_r']").val();
			var apellido_r = $("[name='apellido_r']").val();
			var correo_r = $("[name='correo_r']").val();
			var telefono_r = $("[name='telefono_r']").val();
			var ciudad_r = $("[name='ciudad_r']").val();
			var pais_r = $("[name='pais_r']").val();
			var monto = $("[name='monto']").val();
			var divisa = $("[name='divisa']").val();
			var montoShow = $("[name='montoShow']").val();


			/*datos paypal*/
			var cmd = $("[name='cmd']").val();
			var cbt = $("[name='cbt']").val();
			var add = $("[name='add']").val();
			var rm = $("[name='rm']").val();
			var business = $("[name='business']").val();
			var bn = $("[name='bn']").val();
			var item_name = $("[name='item_name']").val();
			var item_number = $("[name='item_number']").val();
			var amount = $("[name='amount']").val();
			var shipping = $("[name='shipping']").val();
			var shipping2 = $("[name='shipping2']").val();
			var handling = $("[name='handling']").val();
			var currency_code = $("[name='currency_code']").val();
			var t_pago = $("[name='t_pago']").val();
			var folio = $("[name='folio']").val();
			var tipo_viaje = $("[name='tipo_viaje']").val();
			var var_return = $("[name='return']").val();
			var cancel_return = $("[name='cancel_return']").val();


			if( codigo_servicio == "" || tipo_viaje == "" || origen == "" || destino == "" || fecha_llegada == "" || hora_llegada == "" || minuto_llegada == "" || aerolinea_llegada == "" || n_vuelo_llegada == "" || t_pasajeros == "" || t_vehiculos == "" || tipo_vehiculos == "" || adultos == "" || ninos == "" || nombre_r == "" || apellido_r == "" || correo_r == "" || telefono_r == "" || ciudad_r == "" || pais_r == "" || monto == "" || divisa == "" || montoShow == "" ) {
				alert("Debes llenar los campos");
			} else {
				var dataString = "codigo_servicio="+codigo_servicio+"&tipo_viaje="+tipo_viaje+"&origen="+origen+"&destino="+destino+"&fecha_llegada="+fecha_llegada+"&hora_llegada="+hora_llegada+"&minuto_llegada="+minuto_llegada+"&aerolinea_llegada="+aerolinea_llegada+"&n_vuelo_llegada="+n_vuelo_llegada+"&t_pasajeros="+t_pasajeros+"&t_vehiculos="+t_vehiculos+"&tipo_vehiculos="+tipo_vehiculos+"&adultos="+adultos+"&ninos="+ninos+"&nombre_r="+nombre_r+"&apellido_r="+apellido_r+"&correo_r="+correo_r+"&telefono_r="+telefono_r+"&ciudad_r="+ciudad_r+"&pais_r="+pais_r+"&monto="+monto+"&divisa="+divisa+"&montoShow="+montoShow+"&cmd="+cmd+"&cbt="+cbt+"&add="+add+"&rm="+rm+"&business="+business+"&bn="+bn+"&item_name="+item_name+"&item_number="+item_number+"&amount="+amount+"&shipping="+shipping+"&shipping2="+shipping2+"&handling="+handling+"&currency_code="+currency_code+"&t_pago="+t_pago+"&folio="+folio+"&tipo_viaje="+tipo_viaje+"&var_return="+var_return+"&cancel_return="+cancel_return
				//alert(dataString);

				$.ajax({
					url: 'sesion_sencillo.php',
					type: 'POST',
					data: dataString,
					success: function() {
						//alert("Las variables de sesion han sido seteadas");
						window.location=pro_pay;
					},
		            error: function(jqXHR, textStatus, errorThrown, exception) {
		                if (jqXHR.status === 0) {
		                    alert('Not connect.\n Verify Network.');
		                } else if (jqXHR.status == 404) {
		                    alert('Requested page not found. [404]');
		                } else if (jqXHR.status == 500) {
		                    alert('Internal Server Error [500].');
		                } else if (exception === 'parsererror') {
		                    alert('Requested JSON parse failed.');
		                } else if (exception === 'timeout') {
		                    alert('Time out error.');
		                } else if (exception === 'abort') {
		                    alert('Ajax request aborted.');
		                } else {
		                    alert('Uncaught Error.\n' + jqXHR.responseText);
		                }
		            }
				});
				
			}
		}
		if( t_viaje=="R" ) {
			//alert("VIAJE REDONDO");
			/*Datos usuarios*/
			var tipo_viaje = $("[name='tipo_viaje']").val();
			var codigo_servicio = $("[name='codigo_servicio']").val();
			var origen = $("[name='origen']").val();
			var destino = $("[name='destino']").val();
			var fecha_llegada = $("[name='fecha_llegada']").val();
			var hora_llegada = $("[name='hora_llegada']").val();
			var minutos_llegada = $("[name='minutos_llegada']").val();
			var aerolinea_llegada = $("[name='aerolinea_llegada']").val();
			var n_vuelo_llegada = $("[name='n_vuelo_llegada']").val();
			var f_salida = $("[name='f_salida']").val();
			var hora_salida = $("[name='hora_salida']").val();
			var minuto_salida = $("[name='minuto_salida']").val();
			var aerolinea_salida = $("[name='aerolinea_salida']").val();
			var n_vuelo_salida = $("[name='n_vuelo_salida']").val();
			var t_pasajeros = $("[name='t_pasajeros']").val();
			var t_vehiculos = $("[name='t_vehiculos']").val();
			var tipo_vehiculos = $("[name='tipo_vehiculos']").val();
			var adultos = $("[name='adultos']").val();
			var ninos = $("[name='ninos']").val();
			var nombre_r = $("[name='nombre_r']").val();
			var apellido_r = $("[name='apellido_r']").val();
			var correo_r = $("[name='correo_r']").val();
			var telefono_r = $("[name='telefono_r']").val();
			var ciudad_r = $("[name='ciudad_r']").val();
			var pais_r = $("[name='pais_r']").val();
			var divisa = $("[name='divisa']").val();
			var monto = $("[name='monto']").val();
			var montoShow = $("[name='montoShow']").val();

			/*datos paypal*/
			var cmd = $("[name='cmd']").val();
			var cbt = $("[name='cbt']").val();
			var add = $("[name='add']").val();
			var rm = $("[name='rm']").val();
			var business = $("[name='business']").val();
			var bn = $("[name='bn']").val();
			var item_name = $("[name='item_name']").val();
			var item_number = $("[name='item_number']").val();
			var amount = $("[name='amount']").val();
			var shipping = $("[name='shipping']").val();
			var shipping2 = $("[name='shipping2']").val();
			var handling = $("[name='handling']").val();
			var currency_code = $("[name='currency_code']").val();
			var t_pago = $("[name='t_pago']").val();
			var folio = $("[name='folio']").val();
			var tipo_viaje = $("[name='tipo_viaje']").val();
			var var_return = $("[name='return']").val();
			var cancel_return = $("[name='cancel_return']").val();

			if( tipo_viaje == "" || codigo_servicio == "" || origen == "" || destino == "" || fecha_llegada == "" || hora_llegada == "" || minutos_llegada == "" || aerolinea_llegada == "" || n_vuelo_llegada == "" || f_salida == "" || hora_salida == "" || minuto_salida == "" || aerolinea_salida == "" || n_vuelo_salida == "" || t_pasajeros == "" || t_vehiculos == "" || tipo_vehiculos == "" || adultos == "" || ninos == "" || nombre_r == "" || apellido_r == "" || correo_r == "" || telefono_r == "" || ciudad_r == "" || pais_r == "" || divisa == "" || monto == "" || montoShow == "" || cmd == "" || cbt == "" || add == "" || rm == "" || business == "" || bn == "" || item_name == "" || item_number == "" || amount == "" || shipping == "" || shipping2 == "" || handling == "" || currency_code == "" || t_pago == "" || folio == "" || tipo_viaje == "" || var_return == "" || cancel_return == "" ) {
				alert("Debes llenar los campos");
			} else {
				var dataString = "tipo_viaje="+tipo_viaje+"&codigo_servicio="+codigo_servicio+"&origen="+origen+"&destino="+destino+"&fecha_llegada="+fecha_llegada+"&hora_llegada="+hora_llegada+"&minutos_llegada="+minutos_llegada+"&aerolinea_llegada="+aerolinea_llegada+"&n_vuelo_llegada="+n_vuelo_llegada+"&f_salida="+f_salida+"&hora_salida="+hora_salida+"&minuto_salida="+minuto_salida+"&aerolinea_salida="+aerolinea_salida+"&n_vuelo_salida="+n_vuelo_salida+"&t_pasajeros="+t_pasajeros+"&t_vehiculos="+t_vehiculos+"&tipo_vehiculos="+tipo_vehiculos+"&adultos="+adultos+"&ninos="+ninos+"&nombre_r="+nombre_r+"&apellido_r="+apellido_r+"&correo_r="+correo_r+"&telefono_r="+telefono_r+"&ciudad_r="+ciudad_r+"&pais_r="+pais_r+"&divisa="+divisa+"&monto="+monto+"&montoShow="+montoShow+"&cmd="+cmd+"&cbt="+cbt+"&add="+add+"&rm="+rm+"&business="+business+"&bn="+bn+"&item_name="+item_name+"&item_number="+item_number+"&amount="+amount+"&shipping="+shipping+"&shipping2="+shipping2+"&handling="+handling+"&currency_code="+currency_code+"&t_pago="+t_pago+"&folio="+folio+"&tipo_viaje="+tipo_viaje+"&var_return="+var_return+"&cancel_return="+cancel_return;
				//alert(dataString);
				$.ajax({
					url: 'sesion_redondo.php',
					type: 'POST',
					data: dataString,
					success: function() {
						//alert("Las variables de sesion han sido seteadas");
						window.location=pro_pay;
					},
		            error: function(jqXHR, textStatus, errorThrown, exception) {
		                if (jqXHR.status === 0) {
		                    alert('Not connect.\n Verify Network.');
		                } else if (jqXHR.status == 404) {
		                    alert('Requested page not found. [404]');
		                } else if (jqXHR.status == 500) {
		                    alert('Internal Server Error [500].');
		                } else if (exception === 'parsererror') {
		                    alert('Requested JSON parse failed.');
		                } else if (exception === 'timeout') {
		                    alert('Time out error.');
		                } else if (exception === 'abort') {
		                    alert('Ajax request aborted.');
		                } else {
		                    alert('Uncaught Error.\n' + jqXHR.responseText);
		                }
		            }
				});
			}
		}
		
	});

	/*Vaciar sesiones cuando se de click en regresar*/
	$("#regresar_home").click(function(e) {
		e.preventDefault();
		dataString = "vaciar=vaciar_array";
		$.ajax({
			url: 'sesion_destruir.php',
			type: 'POST',
			success: function() {
				//alert("Las variables de sesion han sido seteadas");
				window.location="http://ariestours.sistembux.com";
			},
            error: function(jqXHR, textStatus, errorThrown, exception) {
                if (jqXHR.status === 0) {
                    alert('Not connect.\n Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found. [404]');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error [500].');
                } else if (exception === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (exception === 'timeout') {
                    alert('Time out error.');
                } else if (exception === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error.\n' + jqXHR.responseText);
                }
            }
		});
	});


	$("#start-over").click(function(event) {
		$("[name='tviaje']").focus();
		$("#datos_cot").remove();
		$("#solicitar_cot").remove();
	});

	var win_size;

	$(window).resize(function(e) {
		win_size = $(window).width();
		//alert(win_size);
		if( win_size <= 767 ) {
			//alert("Llego al tamaño "+win_size);
			$("#la-navbar").removeClass("navbar-fixed-top");
			$("#la-navbar").addClass("navbar-default");
		} else {
			$("#la-navbar").removeClass("navbar-default");
			$("#la-navbar").addClass("navbar-fixed-top");			
		}
	});

	$('.with-hover-text, .regular-link').click(function(e){
		e.stopPropagation();
	});
	
	/*If card radiobutton is checked when user refresh the page*/
	if( $("#card").is(":checked") ) {
		$("#card-payment").show();
		$("#reservar_btn").show();
	}

	if( $("#paypal").is(":checked") ) {
		$("#paypal-payment").show();
		$("#reservar_btn").hide();
	}

	/*Show card payment formulario viaje sencillo*/
	$("#card").click(function(e) {
		$("#card-payment").slideDown(500);
		$("#paypal-payment").slideUp(500);
		$("#reservar_btn").slideDown(500);
	});

	$("#paypal").click(function(e){
		$("#card-payment").slideUp(500);
		$("#paypal-payment").slideDown(500);
		$("#reservar_btn").slideUp(500);
		//window.open("https://www.paypal.com", "_blank");
	});
	

	/*If card radiobutton is checked when user refresh the page*/
	if( $("#card2").is(":checked") ) {
		$("#card-payment2").show();
		$("#reservar_btn2").show();
	}

	if( $("#paypal2").is(":checked") ) {
		$("#paypal-payment2").show();
		$("#reservar_btn2").hide();
	}

	/*Show card payment formulario viaje redondo*/
	$("#card2").click(function(e) {
		$("#card-payment2").slideDown(500);
		$("#paypal-payment2").slideUp(500);
		$("#reservar_btn2").slideDown(500);
	});

	$("#paypal2").click(function(e){
		$("#card-payment2").slideUp(500);
		$("#paypal-payment2").slideDown(500);
		$("#reservar_btn2").slideUp(500);
		//window.open("https://www.paypal.com", "_blank");
	});

	$("#phone").keydown(function(e) {
		if ($.inArray(e.keyCode, [8, 9, 27, 13, 110]) !== -1 ||
           (e.keyCode == 65 && e.ctrlKey === true) || 
           (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
         }
         if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
           e.preventDefault();
	});	

	$("#crd").keydown(function(e) {
		if ($.inArray(e.keyCode, [8, 9, 27, 13, 110]) !== -1 ||
           (e.keyCode == 65 && e.ctrlKey === true) || 
           (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
         }
         if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
           e.preventDefault();
	});

	$("#year_exp").keydown(function(e) {
		if ($.inArray(e.keyCode, [8, 9, 27, 13, 110]) !== -1 ||
           (e.keyCode == 65 && e.ctrlKey === true) || 
           (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
         }
         if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
           e.preventDefault();
	});

	$("#mnt_exp").keydown(function(e) {
		if ($.inArray(e.keyCode, [8, 9, 27, 13, 110]) !== -1 ||
           (e.keyCode == 65 && e.ctrlKey === true) || 
           (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
         }
         if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
           e.preventDefault();
	});

	$("#cvc").keydown(function(e) {
		if ($.inArray(e.keyCode, [8, 9, 27, 13, 110]) !== -1 ||
           (e.keyCode == 65 && e.ctrlKey === true) || 
           (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
         }
         if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
           e.preventDefault();
	});

	/*Control para cuando se seleccione el tipo de viaje (sencillo o redondo)*/
	$("[name='tviaje']").change(function(event) {
		if( $(this).val() == "S" ) {
			$("#traslado2").slideUp(500);
			$("#f-llegada").slideUp(500);
			$("#traslado").slideDown(500);

			$("#f-salida").removeClass("col-sm-6");
			$("#f-llegada").removeClass("col-sm-6");
			$("#child").removeClass("col-sm-6");
			$("#adult").removeClass("col-sm-6");

			$("#f-salida").addClass("col-sm-6");
			$("#f-llegada").addClass("col-sm-5");
			$("#child").addClass('col-sm-3');
			$("#adult").addClass('col-sm-3')


		} else if( $(this).val() == "R" ) {
			var txt_date_dep = $("#date-text-salida").text();

			if( theHref.split("?")[1] == "lang=es" || theHref.split("?")[1] == null ) {
				if( txt_date_dep == "Fecha de salida" )
					$("#date-text-salida").text("Fecha de llegada");
			} else if( theHref.split("?")[1] == "lang=en" ) {
				if( txt_date_dep == "Departure date" )
					$("#date-text-salida").text("Arrival date");				
			}

			$("#traslado").slideUp(500);
			$("#traslado2").slideDown(500);
			$("#f-llegada").slideDown(500);

			$("#f-salida").removeClass("col-sm-6");
			$("#f-llegada").removeClass("col-sm-5");
			$("#child").removeClass('col-sm-3');
			$("#adult").removeClass('col-sm-3')

			$("#f-salida").addClass("col-sm-6");
			$("#f-llegada").addClass("col-sm-6");
			$("#child").addClass("col-sm-6");
			$("#adult").addClass("col-sm-6");
		}
	});


	if( theHref.split("?")[1] == "lang=es" || theHref.split("?")[1] == null ) {
		//alert("ESPAÑOL");
		var tras = $("#traslado").val();
		//alert(tras);
		if( tras=="aeropuerto_hotel" ) {
			$("#date-text-salida").text("Fecha de llegada");
		} else if( tras=="hotel_aeropuerto") {
			$("#date-text-salida").text("Fecha de salida");
		}

		$("#traslado").change(function(event) {
			var traslado = $(this).val();

			if( traslado=="aeropuerto_hotel" ) {
				$("#date-text-salida").text("Fecha de llegada");
			} else if( traslado=="hotel_aeropuerto") {
				$("#date-text-salida").text("Fecha de salida");
			}
		});
	} else if( theHref.split("?")[1] == "lang=en" ) {
		//alert("ENG");
		var tras = $("#traslado").val();
		//alert(tras);
		if( tras=="aeropuerto_hotel" ) {
			$("#date-text-salida").text("Arrival date");
		} else if( tras=="hotel_aeropuerto") {
			$("#date-text-salida").text("Departure date");
		}

		$("#traslado").change(function(event) {
			var traslado = $(this).val();

			if( traslado=="aeropuerto_hotel" ) {
				$("#date-text-salida").text("Arrival date");
			} else if( traslado=="hotel_aeropuerto") {
				$("#date-text-salida").text("Departure date");
			}
		});
	}

	/*/. Control para el formulario cuando se selecciona el tipo de origen*/

	/*SUV o VAN*/
	$("#veh").change(function(event){
		var veh = $(this).val();
		var passengers = $("#sel-disp").val();
		if( veh == "SUB" ) {
			$("#sel-disp").removeAttr("required");
			$("#sel-disp").removeAttr("name");
			$("#sel-disp").hide();
			if( passengers == "8" ) {
				$("#sel-hidd").val("5");
			}
			$("#sel-hidd").show();
			$("#sel-hidd").attr("required", "");
			$("#sel-hidd").attr("name", "adultos");
		} else {
			$("#sel-hidd").removeAttr("required");
			$("#sel-hidd").removeAttr("name");
			$("#sel-hidd").hide();
			$("#sel-disp").show();
			$("#sel-disp").attr("required", "");
			$("#sel-disp").attr("name", "adultos");
		}
	});
	/*/. SUV o VAN*/

	$("#round").click(function(event) {
		$("#picker1").show();
		$("#picker2").show();
	});

	$("#single").click(function(event) {
		$("#picker2").hide();
	});
	
	/***************
	* = Hover text *
	* Hover text for the last slide
	***************/
	$('.with-hover-text').hover(
		function(e) {
			$(this).css('overflow', 'visible');
			$(this).find('.hover-text')
				.show()
				.css('opacity', 0)
				.delay(200)
				.animate(
					{
						paddingTop: '25px',
						opacity: 1
					},
					'fast',
					'linear'
				);
		},
		function(e) {
			var obj = $(this);
			$(this).find('.hover-text')
				.animate(
					{
						paddingTop: '0',
						opacity: 0
					},
					'fast',
					'linear',
					function() {
						$(this).hide();
						$( obj ).css('overflow', 'hidden');
					}
				);
		}
	);
	
	var img_loaded = 0;
	var j_images = [];
	
	/*************************
	* = Controls active menu *
	* Hover text for the last slide
	*************************/
	$('#slide-3 img').each(function(index, element) {
		var time = new Date().getTime();
		var oldHref = $(this).attr('src');
		var myImg = $('<img />').attr('src', oldHref + '?' + time );
		
		myImg.load(function(e) {
			img_loaded += 1;;
			if ( img_loaded == $('#slide-3 img').length ) {
				$(function() {
					var pause = 10;
					$(document).scroll(function(e) {
						delay(function() {
							
							var tops = [];
							
							$('.story').each(function(index, element) {
								tops.push( $(element).offset().top - 200 );
							});
				
							var scroll_top = $(this).scrollTop();
							
							var lis = $('.nav > li');
							
							for ( var i=tops.length-1; i>=0; i-- ) {
								if ( scroll_top >= tops[i] ) {
									menu_focus( lis[i], i+1 );
									break;
								}
							}
						},
						pause);
					});
					$(document).scroll();
				});
			}
		});
	});


	$('#cont-01').click(function() {
		
		$('.overlay-container').fadeIn(function() {
			
			window.setTimeout(function(){
				$('.window-container').addClass('window-container-visible');
			}, 100);
			
		});
	});

	$('#cont-02').click(function() {
		
		$('.overlay-container-2').fadeIn(function() {
			
			window.setTimeout(function(){
				$('.window-container-2').addClass('window-container-visible-2');
			}, 100);
			
		});
	});
	
	$('button#close').click(function() {
		$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
	});

	$('button#close-02').click(function() {
		$('.overlay-container-2').fadeOut().end().find('.window-container-2').removeClass('window-container-visible-2');
	});

	$('div#datepicker').datetimepicker({
      pickTime: false
    });
	
});

/******************
* = Gallery width *
******************/
/*$(function() {
	var pause = 50; // will only process code within delay(function() { ... }) every 100ms.
	$(window).resize(function() {
		delay(function() {
				var gallery_images = $('#slide-3 img');
				
				var images_per_row = 0;
				if ( gallery_images.length % 2 == 0 ) {
					images_per_row = gallery_images.length / 2;
				} else {
					images_per_row = gallery_images.length / 2 + 1;
				}
				
				var gallery_width = $('#slide-3 img').width() * $('#slide-3 img').length;
				gallery_width /= 2;
				if ( $('#slide-3 img').length % 2 != 0 ) {
					gallery_width += $('#slide-3 img').width();
				}
				
				$('#slide-3 .row').css('width', gallery_width );
				
				var left_pos = $('#slide-3 .row').width() - $('body').width();
				left_pos /= -2;
				
				$('#slide-3 .row').css('left', left_pos);
			
			},
			pause
		);
	});
	$(window).resize();
});

var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

function menu_focus( element, i ) {
	if ( $(element).hasClass('active') ) {
		if ( i == 6 ) {
			if ( $('.navbar').hasClass('inv') == false )
				return;
		} else {
			return;
		}
	}
	
	enable_arrows( i );
		
	
	$('.nav > li').removeClass('active');
	$(element).addClass('active');
	
	var icon = $(element).find('.icon');
	
	var left_pos = icon.offset().left - $('.nav').offset().left;
	var el_width = icon.width() + $(element).find('.text').width() + 10;
	
	$('.active-menu').stop(false, false).animate(
		{
			left: left_pos,
			width: el_width
		},
		1500,
		'easeInOutQuart'
	);
}

function enable_arrows( dataslide ) {
	$('#arrows div').addClass('disabled');
	if ( dataslide != 1 ) {
		$('#arrow-up').removeClass('disabled');
	}
	if ( dataslide != 6 ) {
		$('#arrow-down').removeClass('disabled');
	}
	if ( dataslide == 3 ) {
		$('#arrow-left').removeClass('disabled');
		$('#arrow-right').removeClass('disabled');
	}
}*/

/*************
* = Parallax *
*************/
jQuery(document).ready(function ($) {
	//Cache some variables
	var links = $('.nav').find('li');
	slide = $('.slide');
	button = $('.button');
	mywindow = $(window);
	htmlbody = $('html,body');
	
	//Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
	//easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
	function goToByScroll(dataslide) {
		var offset_top;

		if( dataslide == 1 )
			offset_top = "-10px";
		else if( dataslide == 2 )
				offset_top = "900px";
		else if( dataslide == 4 )
				offset_top = "1870px";
		else if( dataslide == 5 )
				offset_top = "2650px";
		else if( dataslide == 6 )
				offset_top = "900px";
		
		htmlbody.stop(false, false).animate({
			scrollTop: offset_top
		}, 1800, 'easeInOutQuart');
	}
	
	//When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
	/*links.click(function (e) {
		e.preventDefault();
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		$(".nav-collapse").collapse('hide');
	});
*/
	$("#go-to-info").click(function(e) {
		e.preventDefault();
		//alert("Dio click en boton info =)");
		dataslide = $("div#slide-5").attr("data-slide");
		goToByScroll(dataslide);
		$(".nav-collapse").collapse('hide');
	});
	
	//When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
	/*$('.navigation-slide').click(function (e) {
		e.preventDefault();
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		$(".nav-collapse").collapse('hide');
	});*/


	/*Scroll on mobile*/

	var size;

	size = $(window).width();

	if( size <= 767 ) {
		$("#menu-link-1").click(function(event) {
			$("#elementos").slideUp(500);
			var slide01 = $("#slide-1").offset().top;
			$("html, body").animate({
				scrollTop: slide01
			},1800);
		});

		$("#menu-link-2").click(function(event) {
			$("#elementos").slideUp(500);
			var slide02 = $("#slide-2").offset().top;
			slide02-="160";
			$("html, body").animate({
				scrollTop: slide02
			},800);
		});

		$("#menu-link-4").click(function(event) {
			$("#elementos").slideUp(500);
			var slide03 = $("#slide-4").offset().top;
			slide03-="160";
			$("html, body").animate({
				scrollTop: slide03
			},800);
		});

		$("#menu-link-5").click(function(event) {
			$("#elementos").slideUp(500);
			var slide04 = $("#slide-5").offset().top;
			slide04-="200";
			$("html, body").animate({
				scrollTop: slide04
			},800);
		});

		$("#menu-link-6").click(function(event) {
			$("#elementos").slideUp(500);
			var slide04 = $("#slide-4").offset().top;
			slide04-="160";
			$("html, body").animate({
				scrollTop: slide04
			},800);
		});
	} else {
		$("#menu-link-1").click(function(event) {
			var slide01 = $("#slide-1").offset().top;
			slide01-="80";
			$("html, body").animate({
				scrollTop: slide01
			},1800);
		});

		$("#menu-link-2").click(function(event) {
			var slide02 = $("#slide-2").offset().top;
			slide02-="100";
			$("html, body").animate({
				scrollTop: slide02
			},800);
		});

		$("#menu-link-4").click(function(event) {
			var slide03 = $("#slide-4").offset().top;
			$("html, body").animate({
				scrollTop: slide03
			},800);
		});

		$("#menu-link-5").click(function(event) {
			var slide04 = $("#slide-5").offset().top;
			slide04-="100";
			$("html, body").animate({
				scrollTop: slide04
			},800);
		});

		$("#menu-link-6").click(function(event) {
			var slide04 = $("#slide-4").offset().top;
			$("html, body").animate({
				scrollTop: slide04
			},800);
		});
	}

});

/***************
* = Menu hover *
***************/
/*jQuery(document).ready(function ($) {
	//Cache some variables
	var menu_item = $('.nav').find('li');
	
	menu_item.hover(
		function(e) {
			var icon = $(this).find('.icon');
			
			var left_pos = icon.offset().left - $('.nav').offset().left;
			var el_width = icon.width() + $(this).find('.text').width() + 10;
			
			var hover_bar = $('<div class="active-menu special-active-menu"></div>')
				.css('left', left_pos)
				.css('width', el_width)
				.attr('id', 'special-active-menu-' + $(this).data('slide') );
			
			$('.active-menu').after( hover_bar );
		},
		function(e) {
			$('.special-active-menu').remove();
		}
	);
});*/

/******************
* = Gallery hover *
******************/
jQuery(document).ready(function ($) {
	//Cache some variables
	var images = $('#slide-3 a');
	
	images.hover(
		function(e) {
			var asta = $(this).find('img');
			$('#slide-3 img').not( asta ).stop(false, false).animate(
				{
					opacity: .5
				},
				'fast',
				'linear'
			);
			var zoom = $('<div class="zoom"></div>');
			if ( $(this).hasClass('video') ) {
				zoom.addClass('video');
			}
			$(this).prepend(zoom);
		},
		function(e) {
			$('#slide-3 img').stop(false, false).animate(
				{
					opacity: 1
				},
				'fast',
				'linear'
			);
			$('.zoom').remove();
		}
	);
});

/******************
* = Arrows click  *
******************/
/*jQuery(document).ready(function ($) {
	//Cache some variables
	var arrows = $('#arrows div');
	
	arrows.click(function(e) {
		e.preventDefault();
		
		if ( $(this).hasClass('disabled') )
			return;
		
		var slide = null;
		var datasheet = $('.nav > li.active').data('slide');
		var offset_top = false;
		var offset_left = false;
		
		
		switch( $(this).attr('id') ) {
			case 'arrow-up':
				offset_top = ( datasheet - 1 == 1 ) ? '0px' : $('.slide[data-slide="' + (datasheet-1) + '"]').offset().top;
				break;
			case 'arrow-down':
				offset_top = $('.slide[data-slide="' + (datasheet+1) + '"]').offset().top;
				break;
			case 'arrow-left':
				offset_left = $('#slide-3 .row').offset().left + 452;
				if ( offset_left > 0 ) {
					offset_left = '0px';
				}
				break;
			case 'arrow-right':
				offset_left = $('#slide-3 .row').offset().left - 452;
				if ( offset_left < $('body').width() - $('#slide-3 .row').width() ) {
					offset_left = $('body').width() - $('#slide-3 .row').width();
				}
				break;
		}
		
		if ( offset_top != false ) {
			htmlbody.stop(false, false).animate({
				scrollTop: offset_top
			}, 1500, 'easeInOutQuart');
		}
		
		if ( offset_left != false ) {
			if ( $('#slide-3 .row').width() != $('body').width() ) {
				$('#slide-3 .row').stop(false, false).animate({
					left: offset_left
				}, 1500, 'easeInOutQuart');
			}
		}
	});
});*/