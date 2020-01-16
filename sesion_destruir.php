<?php
	session_start();
	/*Se vacía la variable de sesion*/
	session_unset();
	/*Se destruye la sesion*/
	session_destroy();
?>