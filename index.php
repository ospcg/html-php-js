<!DOCTYPE html>
<html lang="en">
<!-- incluimos el encabezado en el archivo header.php-->
<?php
	include_once('header.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Quilamapu</title>
   <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  
</head>

<body>
<!-- inicio del slider de movimiento -->
<div class="slider">
		<ul class="slides">
			<li>
				<img src="images/huevos.jpg"> <!-- imagenes del slider -->
				<div class="caption center-align">
					<h3>Huevos de campo</h3>
					<h5 class="light grey-text text-lighten-4">Biodiversificación</h5>
				</div>
			</li>
			<li>
				<img src="images/lechuga1.jpg"> <!-- image local agricultura -->
				<div class="caption right-align">
					<h3>Libre de Pesticidas</h3>
					<h5 class="light grey-text text-lighten-3">Lechugas sanas para una salud más prolongada</h5>
				</div>
			</li>
			 <li>
				<img src="images/abejorro.jpg"> <!-- image local agricultura -->
				<div class="caption left-align">
					<h3>Polinización</h3>
					<h5 class="light grey-text text-lighten-3">Conozca el proceso de polinización de la flor</h5>
				</div>
			</li>
			 <li>
				<img src="images/limachino2.jpg"> <!-- image local agricultura -->
				<div class="caption right-align">
					<h3>Tomates Limachinos</h3>
					<h5 class="light grey-text text-lighten-3">Recuperados despues de mas de 30 años </h5>
				</div>
			</li>
		</ul>
 </div>


 <div class="section">
    <div class="row container">

      <h5 class="header align-center">Conociendo la agricultura orgánica</h5>
      <p class="">De la tierra a su mesa. Los productos que ofrecemos son de nuestro campo cuidando su desarrollo desde la siembra a la cosecha sin pesticidas.</p>
    </div>
  

<div class="container">
<div class="row">
			<div class="col m4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/limachino1.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Tomates Limachinos</span>
						<p><a href="limachinos.php">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Sabias que...<i class="material-icons right">X</i></span>
						<p>Los colonos Italianos trajeron la semilla del tomate limachino a chile, a la comuna de Limache, donde su clima era perfecto para su cultivo...</p>
					</div>
				</div>
			</div>

			<div class="col m4 l4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/huevos.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Huevos de Campo</span>
						<p><a href="huevos.php">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Sabias que...<i class="material-icons right">X</i></span>
						<p>El huevo es un ingrediente basico en la nutricion de nuestra familia, aporta proteínas, vitaminas, minerales y aminoácidos esenciales, que son aquellos que nuestro organismo no fabrica por sí solo y por lo tanto deben ser aportados en la dieta...</p>
					</div>
				</div>
			</div>

			<div class="col m4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/lechuga1.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Lechugas</span>
						<p><a href="lechugas.php">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Sabías que...<i class="material-icons right">X</i></span>
						<p >Lechuga una de las hortalizas mas sanas ricas y nutritivas... en Quilamapu no preocupamos de que nustras Lechugas sean Organicas ya qu ela lechuga junto al pepino...</p>
					</div>
				</div>
			</div>

    </div>
		<!--abajo fin container -->
</div>
<!-- fin de la section -->
</div>



	
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.parallax').parallax();
		$('.slider').slider({
			indicators: false
		});
	});

</script> 
</body>

<?php
	include_once('footer.php');
?>

</html>