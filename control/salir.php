<?php 
    session_start(); 
    session_destroy(); 
  	
  	if( isset($_GET["lang"]) )
  		$index_url = "?lang=".$_GET["lang"];
  	else
  		$index_url = "?lang=es";

    header('location: index.php'.$index_url);
?>
