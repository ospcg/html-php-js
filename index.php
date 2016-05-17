<!DOCTYPE html>
<html lang="en">
<!-- incluimos el encabezado en el archivo header.php-->
<?php
	include_once('header.php');
?>

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
					<h5 class="light grey-text text-lighten-3"><---- Descripción breve ----></h5>
				</div>
			</li>
			 <li>
				<img src="images/abejorro.jpg"> <!-- image local agricultura -->
				<div class="caption left-align">
					<h3>Polinización</h3>
					<h5 class="light grey-text text-lighten-3">---> probando texto descriptivo</h5>
				</div>
			</li>
			 <li>
				<img src="images/lechuga4.jpg"> <!-- image local agricultura -->
				<div class="caption right-align">
					<h3>Lechugas</h3>
					<h5 class="light grey-text text-lighten-3">lo orgánico de la tierra</h5>
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
						<span class="card-title grey-text text-darken-4">Sabias que...<i class="material-icons right">close</i></span>
						<h5><p>Los colonos Italianos trajeron la semilla del tomate limachino a chile, a la comuna de Limache, donde su clima era perfecto para su cultivo </p></h5>
					</div>
				</div>
			</div>

			<div class="col m4 l4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/huevos.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Huevos de Campo<i class="material-icons right">more_vert</i></span>
						<p><a href="huevos.php">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Sabias que...<i class="material-icons right">close</i></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae similique suscipit. Architecto iusto sapiente eligendi omnis neque maiores a libero. Vitae, nostrum. Iusto labore illo, repellendus sed tempora cumque?</p>
					</div>
				</div>
			</div>

			<div class="col m4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/lechuga1.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Lechugas<i class="material-icons right">more_vert</i></span>
						<p><a href="lechugas.php">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Sabías que...<i class="material-icons right">close</i></span>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae similique suscipit. Architecto iusto sapiente eligendi omnis neque maiores a libero. Vitae, nostrum. Iusto labore illo, repellendus sed tempora cumque?</p>
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