<?php
	if( isset($_GET["lang"]) )
		$lang = $_GET["lang"];
	else
		$lang = "es"; //Si no se especifica el idioma, se carga en automático el español
	if( $lang == "es" ) {
		$LANG="es";
		$recaptcha_lang = "hl=es";
		$navbar = array(
			"INICIO",
			"ARIES TOURS",
			"SERVICIO",
			"CONTACTO",
			"RESERVACIONES"
		);
		/* HOME */
		$info = "<br>
			Cancún es uno de los destinos favoritos a nivel mundial que se encuentra ubicado en el sureste de
			México en el estado de Quintana Roo. Caracterizado por sus playas color turquesa, de blanca
			arena y la famosa hospitalidad mexicana que hacen que Cancún sea un lugar único.
			<br><br>
			Cancún ofrece diversos servicios como hoteles, restaurantes, campos de golf, sitios arqueológicos,
			parques naturales, grandes centros comerciales con las mejores marcas, e infinidad de entretenimiento.";
		/*ARIES TOURS*/
		$slide2 = array (
			"ARIES TOURS",
			"Somos una empresa dedicada al transporte terrestre de turismo individual y grupal, tenemos el 
			conocimiento del destino, experiencia y capacitación necesarias para proveer un servicio profesional, 
			puntual, de calidad, personalizado y confiable, en donde sus deseos y expectativas se satisfacen desde 
			el primer contacto y hasta el momento de proveer el servicio.
			<br><br>
			Nuestra mejor publicidad son los comentarios de nuestros clientes:"
		);
		/*COMENTARIOS*/
		$feedback = array(
			"Excelente servicio, las unidades muy cómodas, limpias y seguras, los recomiendo ampliamente",
			"Gabriel Blanco, México D.F.",
			"El servicio y la atención, muy profesional, excelente choferes, disfruté mucho mi viaje",
			"Diana Nallely Sánchez, Guadalajara Jalisco",
			"Danos tu opinión",
			"Tu opinión es importante",
			"Nombre",
			"Correo",
			"Tu comentario",
			"Enviar"
		);
		/*SERVICIOS*/
		$slide3 = array(
			"SERVICIOS",
			"Traslados aeropuerto - hotel - aeropuerto",
			"Ya sea que visite nuestro destino por placer o por negocios, la mejor
			manera de continuar su viaje es que al momento de llegar al
			Aeropuerto de Cancún, sea usted recibido por personal amable y 
			profesional que lo dirija al vehículo que lo llevará hacia su hotel o 
			lugar de hospedaje.
			<br><br>
			Asimismo, para concluir su estancia en este destino de una manera 
			satisfactoria, le ofrecemos programar su viaje de regreso al 
			Aeropuerto de Cancún.",
			"Traslados a sitios arqueológicos, excursiones, parques, clubes nocturnos etc.",
			"Parte de la diversión durante su estancia es conocer los lugares más
			distintivos que han hecho de Cancún un destino inigualable, para
			disfrutarlos de la mejor manera, sin horarios pre establecidos y en 
			completa privacidad, le ofrecemos traslados sencillos y redondos,
			vehículos en servicio abierto, etc.",
			"¡RESERVE AHORA!",
			"¡CONTÁCTENOS PARA MÁS INFORMACIÓN!",
			"IMPORTANTE",
			"Nuestros servicios de transportación turística incluyen el área de Cancún, Riviera Maya, Tulum y Yucatán* (solo excursiones).
			<br>
			Todos nuestros vehículos y pasajeros están protegidos con seguros de responsabilidad civil y coberturas de gastos médicos de acuerdo a los requisitos de la SCT."
		);
		/*RESERVACIONES*/
		$reserv = array(
			"Reservaciones",
			"Tipo de traslado",
			"Aerolínea: desplegar opcion para elegir",
			"Origen",
			"Hotel",
			"Hotel > Aeropuerto",
			"Aeropuerto > Hotel",
			"Fecha de llegada",
			"Fecha de salida",
			"Adultos",
			"Niños",
			"Tipo de vehículo",
			"Obtener cotización",
			"Cerrar",
			"Aeropuerto - Hotel - Aeropuerto",
			"Reservar ahora",
			"Seleccionar",
			"Nueva búsqueda"
		);
		$trip = array(
			"Viaje sencillo",
			"Viaje redondo"
		);
		$price = array(
			"Destino (HOTEL)",
			"Fecha de llegada",
			"Fecha de salida",
			"Hora de llegada",
			"Hora de salida",
			"Titular de reservación",
			"Nombre",
			"Apellido",
			"Correo",
			"Teléfono",
			"Ciudad",
			"Pais",
			"Seleccione el tipo de pago",
			"Tarjeta",
			"PayPal",
			"Número de tarjeta",
			"Código de seguridad",
			"Origen",
			"Aerolínea",
			"No. de vuelo",
			"Reservar",
			"Total a pagar",
			"Fecha de expiración (MM/AA)",
			"Año",
			"Mes",
			"Total pasajeros",
			"Total vehiculos",
			"Tipo vehiculo",
			"Nombre del titular",
			"Confirmar reservación"
		);
		/*DATOS COTIZACION*/
		$cot = array(
			"Costo",
			"Personas",
			"Tipo de servicio",
			"Inclusiones",
			"Servicio privado",
			"Staff bilingüe",
			"Seguro de viajero",
			"Cambios sin cargo, con 24 horas de anticipación",
			"Partida inmediata",
			"Letrero personalizado con su nombre",
			"Vehículo designado exclusivamente para su uso",
			"Tipo de vehiculo",
			"Vehiculos"
		);
		/*PAGO*/
		$payment = array(
			"ESTAS SIENDO REDIRECCIONADO A PAYPAL PARA PROCEDER CON EL PAGO",
			"Presione aqui para volver a ariestours.sistembux.com >>",
			"Pagar con paypal",
			"Compra completada",
			"Folio",
			"Estimado",
			"Pasajeros",
			"Adultos",
			"Niños",
			"Hotel",
			"Fecha y hora de llegada",
			"Total vehículos",
			"Tipo de vehículos",
			"Tipo de servicio",
			"Total",
			"Por favor inserta los nombres de los pasajeros",
			"Para consultar tu reservacion da clic",
			"Imprimir",
			"Salida",
			"Requerimiento",
			"aquí",
			"Aerolínea llegada",
			"Aerolínea salida",
			"Serás redireccionado a paypal, da clic en continuar",
			"Continuar con la compra",
			"Regresar",
			"Tipo de pago",
			"Tipo de traslado",
			"Origen",
			"Destino",
			"Teléfono",
			"Ciudad",
			"País",
			"Estatus",
			"Pagado",
			"Numero de vuelo llegada",
			"Numero de vuelo salida",
			"Ir a página de inicio",
			"Vuelo de llegada",
			"Vuelo de salida",
			"Contacto",
			"Aerolínea",
			"Vuelo",
			"Tipo de pago",
			"Fecha y hora de salida"
		);

		/*Correo confirmación de pago*/
		$mail_payment = array(
			"Detalles de la reservación",
			"Gracias por elegir ARIES TOURS como su proveedor de servicio de transporte terrestre.",
			"A continuación encontrará los datos de su reservación:"
		);

		/*MENSAJES DE ERROR EN PROCESO DE PAGO*/
		$msg_error = array(
			"El pago no fue completado, por favor contacta a tu banco.",
			"El tipo de pago no está presente o es inválido. Los tipos de pago aceptados son card, bank, and cash.",
			"El número de la tarjeta es inválido.",
			"El mes de expiración de la tarjeta es inválido.",
			"El año de expiración de la tarjeta es inválido.",
			"El código de seguridad de la tarjeta es inválido.",
			"La tarjeta ha expirado.",
			"La tarjeta ha sido declinada.",
			"Ha habido un error al momento de procesar la tarjeta. Ningún cargo ha sido realizado.",
			"El cargo no ha sido procesado porque la tarjeta no tiene fondos suficientes.",
			"Se ha detectado un comportamiento sospechoso en la transacción."
		);
		
		/*CONTÁCTENOS*/
		$slide4 = array(
			"CONTÁCTENOS",
			"UTILICE EL SIGUIENTE FORMULARIO PARA CONTACTARNOS",
			"NOMBRE",
			"CORREO ELECTRÓNICO",
			"TELÉFONO",
			"MENSAJE",
			"ENVIAR"
		);
		/*MENSAJE PARA RESERVAR*/
		$msg = "Si quiere reservar más de 8 pasajeros en VAN o más de 5 pasajeros en SUV, el sistema automáticamente le cotizará el número de vehículos necesarios para acomodar el número total de personas que quiere reservar. Para grupos de más de 16 personas favor de contactarnos en: info@aries-tours.com";
		/*PAGO*/
		$payment_lang = array(
			"Pago Exitoso",
			"Pago Rechazado"
		);
		/*MAIL DE CONTACTO*/
		$contact = array(
			"Hola",
			"Recibimos tu información de manera exitosa",
			"Nombre",
			"Correo electrónico",
			"Teléfono",
			"Mensaje",
			"En breve uno de nuestros ejecutivos te contactara.",
			"Hola Web Master.",
			"Recientemente te contactaron desde Aries Tours, Abajo encontraras la información recibida.",
			"Nombre",
			"Correo electrónico",
			"Teléfono",
			"Mensaje",
			"Gracias por su interés en nuestros servicios, su mensaje ha sido recibido!<br>Uno de nuestros representantes lo contactará en menos de 24 horas.",
			"Gracias por contactarnos :)."
		);
		/*MODULO ADMINISTRACION*/
		$admin = array(
			"Administración",
			"MODULO DE ADMINISTRACIÓN",
			"Cuentas de usuario",
			"Nombre",
			"Apellido",
			"Correo",
			"Contraseña",
			"Reservaciones",
			"Folio",
			"Nombre",
			"Correo",
			"Telefono",
			"Pasajeros",
			"Tipo vehículos",
			"Total vehículos",
			"Total $",
			"Estado",
			"Detalles de reservación de",
			"Opiniones",
			"Folio",
			"Nombre",
			"Correo",
			"Comentario",
			"Estatus",
			"Publicado",
			"No publicado",
			"Precios/Hoteles",
			"HOTEL",
			"SENCILLO VAN /USD",
			"SENCILLO VAN /MXN",
			"REDONDO VAN /USD",
			"REDONDO VAN /MXN",
			"SENCILLO SUBURBAN /USD",
			"SENCILLO SUBURBAN /MXN",
			"REDONDO SUBURBAN /USD",
			"REDONDO SUBURBAN /MXN",
			"AerolÍneas",
			"AEROLÍNEAS",
			"Actualizar cuenta",
			"Actualizar",
			"Cerrar",
			"ID",
			"Nombre",
			"Apellido",
			"Correo",
			"Usuario",
			"Contrasena",
			"Tipo de cuenta",
			"Datos de usuario",
			"Información de contratante",
			"Nombre",
			"Apellido",
			"Correo",
			"Telefono",
			"Ciudad",
			"Pais",
			"Información de servicio",
			"Tipo de translado",
			"Origen",
			"Hotel",
			"Fecha de llegada",
			"# No. de vuelo",
			"Aerolinea",
			"Fecha de salida",
			"Aerolinea",
			"# No. de vuelo",
			"Adultos",
			"Niños",
			"Total pasajeros",
			"Total de vehiculos",
			"Tipo de vehiculo",
			"Información de pago",
			"Monto",
			"Divisa",
			"Tipo de pago",
			"Estatus",
			"Opinión",
			"FOLIO",
			"Nombre",
			"Correo",
			"Comentario",
			"Estatus",
			"ID",
			"HOTEL",
			"VAN SENCILLO USD",
			"VAN SENCILLO MXN",
			"VAN REDONDO USD",
			"VAN REDONDO MXN",
			"SUBURBAN SENCILLO USD",
			"SUBURBAN SENCILLO MXN",
			"SUBURBAN REDONDO USD",
			"SUBURBAN REDONDO MXN",
			"Aerolínea",
			"Nombre",
			"Apellido",
			"Correo",
			"Usuario",
			"Contraseña",
			"Estado actual",
			"Mostrar",
			"Ocultar",
			"Bienvenido",
			"Cerrar sesión"
		);

		/*CARGO A TARJETA*/
		$card = array(
			"El cargo a tu tarjeta por",
			"Se ha realizado con exito",
			"Da clic en continuar",
			"Continuar"
		);



		$login = array(
			"Panel de administración",
			"Usuario",
			"Contraseña",
			"Recuperar contraseña",
			"Entrar",
			"Usuario o contraseña incorrecto, por favor intentalo de nuevo"
		);

		$recovery = array(
			"Recuperación",
			"Usuario",
			"Correo",
			"Recuperar",
			"ATENCIÓN: No se encontró ninguna cuenta asociada con los siguientes datos",
			"Usuario",
			"Correo",
			"Por favor verifica la información",
			"Hola",
			"Recientemente solicitaste el reenvio de tu usuario y contraseña de acceso único",
			"Contraseña",
			"Entrar a PANEL",
			"Si no fuiste tu por favor contacta a",
			"ATENCIÓN: La Contraseña fue enviada de manera exitosa",
			"Por favor verifica tu bandeja de entrada"
		);
	}





	if( $lang == "en" ) {
		$navbar = array(
			"HOME",
			"ARIES TOURS",
			"SERVICES",
			"CONTACT US",
			"RESERVATION"
		);
		$LANG="en";
		$recaptcha_lang = "hl=en";
		/* HOME */
		$info = "<br>
			Cancun is considered one of the top worldwide destinations, situated on the south-east coast of Mexico in 
			the state of Quintana Roo on the Yucatan Peninsula.
			<br><br>
			Warm white powdery sand beaches and turquoise crystal clear waters together with the famous Mexican 
			hospitality make this a place like no other!
			<br><br>
			Cancun offers a wide variety of services such as, hotel, restaurants, golf courses, archeological sites, natural 
			parks, shopping malls -featuring the best brands-, and endless entertainment. A place that has it all!!";
		/*ARIES TOURS*/
		$slide2 = array (
			"ARIES TOURS",
			"<div style='margin-top:-35px;'> We are a ground transportation Company dedicated to conduct transportation services for groups, FIT's 
			(families, couples, etc) with over 11 years of professional experience within the tourism industry.
			<br><br>
			We have the knowledge of the destination, experience and necessary training, to provide a personalized, 
			reliable and professional service right on time, where your expectations and wishes are satisfied from the 
			moment you contact us for the first time to the moment we conclude our service.
			<br><br>
			What a best way to recommend ourselves but by reading some testimonials from previous clients:</div>"
		);
		/*FEEDBACK*/
		$feedback = array(
			"Excellent service, confortably units, safe and clean, it's very pleasure to travel with Aries Tours.",
			"Gabriel Blanco, México D.F.",
			"A good service, with excellent drivers, the best part of my trip.",
			"Diana Nallely Sánchez, Guadalajara Jalisco",
			"Give feedback",
			"Your feedback is important",
			"Name",
			"E-Mail",
			"Comment",
			"Send"
		);
		/*SERVICIOS*/
		$slide3 = array(
			"SERVICES",
			"Private transfers Airport - Hotel/Venue - Airport",
			"If you are planning to visit Cancun, Riviera Maya or Tulum on a 
			business or pleasure trip, the best way to continue your journey is to
			have a friendly, reliable and professional representative ready to 
			greet you at the airport, who will make sure you board your vehicle 
			that will take you to your hotel/venue.
			<br><br>
			In addition, to complete your stay in a satisfactory manner, we offer
			you to schedule your trip back to the airport.",
			"Private transfers Archeological sites, natural parks, tours, golf courses, night clubs, etc.",
			"Part of the fun during your stay is to know all the places that have
			made of Cancun, Riviera Maya and Tulum a unique destination, to
			enjoy them in the best way, whithout pre established schedules and in
			complete privacy, we offer you private transfers (one way, round 
			trip) to all these venues, as well as vehicles in open service, etc.",
			"RESERVE NOW!",
			"CLICK HERE FOR MORE INFO",
			"IMPORTANT",
			"Our ground transportation services include Cancun, Riviera Maya and Tulum area (Yucatan, excursions only).
			<br>
			According to the Mexican federal authority (SCT) all our vehicles and passengers are protected in the event of a mishap with civil liability insurance 
			<br>
			and coverage of medical expenses."
		);
		/*RESERVATIONS*/
		$reserv = array(
			"Reservations",
			"Type of trip",
			"Airline: slide option to choose",
			"Leaving from",
			"Hotel",
			"Hotel > Airport",
			"Airport > Hotel",
			"Arrival date",
			"Departure date",
			"Adults",
			"Children",
			"Vehicle",
			"Get price",
			"Close",
			"Airport - Hotel - Airport",
			"Reserve now",
			"Choose",
			"Start over"
		);
		$trip = array(
			"One-way",
			"Round trip"
		);
		$price = array(
			"Destination (HOTEL)",
			"Arrival date",
			"Departure date",
			"Arrival time",
			"Departure time",
			"Reservation holder",
			"Name",
			"Last name",
			"E-Mail",
			"Phone",
			"City",
			"Country",
			"Choose a payment method",
			"Card",
			"PayPal",
			"Card number",
			"Security code",
			"Leaving from",
			"Airline",
			"Flight number",
			"Reserve",
			"Total amount",
			"Expiration date (MM/YY)",
			"Year",
			"Month",
			"Total passengers",
			"Total vehicles",
			"Vehicle type",
			"Cardholder",
			"Confirm reservation"
		);
		
		/*DATOS COTIZACION*/
		$cot = array(
			"Cost",
			"People",
			"Type of service",
			"Inclusions",
			"Private service",
			"Bilingual staff",
			"Traveler insurance",
			"Changes without charge, 24 hours before",
			"Immediate departure",
			"Personalized sign with your name",
			"Designated vehicle for use only",
			"Vehicle type",
			"Vehicle"
		);
		/*PAGO*/
		$payment = array(
			"YOU ARE BEING REDIRECTED TO PAYPAL TO PROCEED WITH THE PAYMENT",
			"Press here to return to ariestours.sistembux.com >>",
			"Continue with shopping",
			"Purchase completed",
			"Folio",
			"Dear",
			"Passengers",
			"Adults",
			"Children",
			"Hotel",
			"Arrival",
			"Total vehicles",
			"Type of vehicles",
			"Type of servicie",
			"Total",
			"Please insert the name of passengers",
			"To check your reservation click",
			"Print",
			"Departure",
			"Requirement",
			"here",
			"Arrival Airline",
			"Departure Airline",
			"You will be redirected to paypal, click on continue",
			"Continue shopping",
			"Return",
			"Payment method",
			"Movement type",
			"Leaving from",
			"Destination",
			"Phone",
			"City",
			"Country",
			"Status",
			"Paid",
			"Arrival flight number",
			"Departure flight number",
			"Go to Home Page",
			"Arrival flight",
			"Departure flight",
			"Contact",
			"Airline",
			"Flight",
			"Payment method",
			"Departure"
		);

		/*Correo confirmación de pago*/
		$mail_payment = array(
			"Reservation details",
			"Thank you so much for choosing ARIES TOURS as your ground transportation supplier!",
			"Below please find the details of your reservation:",
		);

		/*MENSAJES DE ERROR EN PROCESO DE PAGO*/
		$msg_error = array(
			"Payment was not completed, please contact your bank.",
			"The payment method does not exists or is invalid. The payment method accepted are card, bank, and cash.",
			"The card number is invalid.",
			"The expiration month of card is invalid.",
			"The expiration year of card is invalid.",
			"The security code of card is invalid.",
			"The card has expired.",
			"The card has been declined.",
			"An error has occured when processing card. No charge has been made.",
			"The charge has not been processed because the card has not enough fund.",
			"Detected suspicius behavior in the transaction."
		);
		/*CONTACT US*/
		$slide4 = array(
			"CONTACT US",
			"FILL THE FORM TO CONTACT US",
			"NAME",
			"E-MAIL",
			"PHONE",
			"MESSAGE",
			"SEND"
		);
		/*MENSAJE PARA RESERVAR*/
		$msg = "If you would like to book more than 8 passengers for a VAN or more than 5 passengers for a SUV, the system will automatically quote you the number of vehicles needed in order to accomodate the total number of passengers you want to reserve. For groups over 16 people please contact us at: info@aries-tours.com";
		/*PAGO*/
		$payment_lang = array(
			"Payment Successfull",
			"Payment Declined"
		);
		/*CONTACT MAIL*/
		$contact = array(
			"Hello",
			"We receive your information successfully",
			"Name",
			"E-Mail",
			"Phone",
			"Message",
			"Soon one of our executives will contact you.",
			"Hello Web Master.",
			"Recently we will contact you from Aries Tours, below you will find the received information.",
			"Name",
			"E-Mail",
			"Phone",
			"Message",
			"Thank you for your interest in our services, your message has been received!<br>One of our representatives will contact you within the next 24 hours.",
			"Thank you for contact us :)."
		);
		/*MODULO ADMINISTRACION*/
		$admin = array(
			"Administration",
			"ADMINISTRATION MODULE",
			"User accounts",
			"Name",
			"Last name",
			"E-Mail",
			"Password",
			"Reservations",
			"Folio",
			"Name",
			"E-Mail",
			"Phone",
			"Passengers",
			"Vehicle type",
			"Total vehicle",
			"Total $",
			"Status",
			"Reservation details for",
			"Feedback",
			"Folio",
			"Name",
			"E-Mail",
			"Commentary",
			"Status",
			"Posted",
			"Not posted",
			"Price/Hotels",
			"HOTEL",
			"ONE-WAY VAN /USD",
			"ONE-WAY VAN /MXN",
			"ROUND TRIP VAN /USD",
			"ROUND TRIP VAN /MXN",
			"ONE-WAY SUBURBAN /USD",
			"ONE-WAY SUBURBAN /MXN",
			"ROUND TRIP SUBURBAN /USD",
			"ROUND TRIP SUBURBAN /MXN",
			"Airlines",
			"AIRLINES",
			"Update account",
			"Update",
			"Close",
			"ID",
			"Name",
			"Last name",
			"E-Mail",
			"User",
			"Password",
			"Account type",
			"User data",
			"Contractor information",
			"Name",
			"Last name",
			"E-Mail",
			"Phone",
			"City",
			"Country",
			"Service information",
			"Movement type",
			"Leaving from",
			"Hotel",
			"Arrival date",
			"# Flight number",
			"Airline",
			"Departure date",
			"Airline",
			"# Flight number",
			"Adults",
			"Children",
			"Total passeners",
			"Total vehicles",
			"Vehicle type",
			"Payment information",
			"Amount",
			"Badge",
			"Payment type",
			"Status",
			"Feedback",
			"FOLIO",
			"Name",
			"E-Mail",
			"Commentary",
			"Status",
			"ID",
			"HOTEL",
			"VAN ONE-WAY USD",
			"VAN ONE-WAY MXN",
			"VAN ROUND TRIP USD",
			"VAN ROUND TRIP MXN",
			"SUBURBAN ONE-WAY USD",
			"SUBURBAN ONE-WAY MXN",
			"SUBURBAN ROUND TRIP USD",
			"SUBURBAN ROUND TRIP MXN",
			"Airline",
			"Name",
			"Last name",
			"E-Mail",
			"User",
			"Password",
			"Actual status",
			"Show",
			"Hide",
			"Welcome",
			"Logout"
		);

		/*CARGO A TARJETA*/
		$card = array(
			"The charge to your card for",
			"Has been successfully completed",
			"Click in continue",
			"Continue"
		);



		$login = array(
			"Administration panel",
			"User",
			"Password",
			"Recover password",
			"Enter",
			"Incorrect user of password, please try it again"
		);

		$recovery = array(
			"Recovery",
			"User",
			"E-Mail",
			"Recover",
			"ATTENTION: No account associated with the follofing data",
			"User",
			"E-Mail",
			"Please check information",
			"Hello",
			"Recently you requested forwarding your user name and your password only access",
			"Password",
			"Enter to PANEL",
			"If it was not you, please contact",
			"ATTENTION: The password was sent successfully",
			"Please check your inbox"
		);
	}
?>