<!DOCTYPE html>
<html>
<head>
    <title><?php include("../lang.php"); echo $login[0]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">  
    <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../assets/js/script.js"></script>      
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <?php
    session_start();
    $valido=true;
          if(isset($_POST['entrar'])){
    		include "conexion/Alpha.php";  
             $Usuario=$_POST['usuario'];
             $Contrasena=$_POST['contrasena'];
             $consulta="SELECT ID, USUARIO,CONTRASENA FROM $CUENTAS WHERE USUARIO='$Usuario' AND CONTRASENA='$Contrasena'";
             $result=mysql_query($consulta) or die (mysql_error());
             $filasn= mysql_num_rows($result);
             if ($filasn<=0 || isset($_GET['nologin']) ){
                 $valido=false;
             }else{
            $rowsresult=mysql_fetch_array($result);          
            $_SESSION['idusuario']= $rowsresult['id'];
                 $valido=true;
                 $_SESSION["usuario"]=$Usuario;
                 header("location:panel.php?lang=".$lang."&login=true");
             }               
          }
    ?>

</head>
<body style="background: #fff">

    <div class="container">
        <div class="login-panel">
            <center>
                <img src="../images/logo.png" class="login-panel-logo">
            </center>
            <br><br>
            <?php
            	if( $lang == "es" || $lang == "") {
            		$recovery_url = "?lang=es";
            		$self_url = $recovery_url;
            	} else {
            		$recovery_url = "?lang=en";
            		$self_url = $recovery_url;
            	}
            ?>
            <form class="custom-form" action="<?php echo "index.php".$self_url; ?>" method="POST" >
                <div class="form-group">
                    <input class="form-control" type="text" name="usuario" required="" placeholder="<?php echo $login[1]; ?>" maxlength="10">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="contrasena" placeholder="<?php echo $login[2]; ?>">
                </div>
                <a class="text-info" style="color:#fff" href="<?php echo "recovery.php".$recovery_url; ?>"><?php echo $login[3]; ?></a>
                <button class="btn btn-default btn-block submit-button" name="entrar" type="submit"> <?php echo $login[4]; ?> </button>
                <?php if ($valido==false) {
                    echo '<script language="JavaScript"> alert("ERROR: '.$login[5].'."); </script>';
                }?> 
            </form>
        </div>
    </div>


</body>
</html>