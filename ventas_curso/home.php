<?php

   require_once("class/config.php");

   if(isset($_SESSION["backend_id"])){
   
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php require_once("head.php");?>

</head>
<body>
     
     <div class="container-fluid">
     	
     	<?php require_once("menu_principal.php");?>

     	<div class="container-fluid">
     		<div class="row">
     			  <div class="col-sm-3">
     				
     				<?php require_once("menu_lateral.php");?>
     			  </div>

     			<div class="col-sm-8">
     				
     				<h2>Sistema de control de  ventas.usuarios, productos </h2>
     				<p class="justify">El control de ventas y/o empleados es uno de los factores mas importantes dentro de una empresa el cual se debe de tener bajo control ya de que ho ser asi sera muy dificil mantener arriba a la empresa, </p>
     			</div>
     		</div><!--row-->
     	</div><!--container-->

     	<?php require_once("footer.php");?>
     </div><!--container-fluid-->
    
</body>
</html>

<?php
  } else {

  	 header("Location:".Conectar::ruta()."index.php");
  }
?>