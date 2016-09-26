<?php
	include_once('header.php');
	//habitaciones.php
	$contenido = 'Este es la descripcion de cada una de estas habitaciones';
?>

<section>
	<div id="carousel-example" class="carousel slide" data-ride="carousel">
	  <!--ol class="carousel-indicators">
	    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example" data-slide-to="1"></li>
	    <li data-target="#carousel-example" data-slide-to="2"></li>
	  </ol-->

	  <div class="carousel-inner">
	    <div class="item active">
	      <a href="#"><img src="http://www.wentbridgehouse.co.uk/uploads/images/resized-accommodation-banner-superior-room-1409588620.jpg" /></a>
	      <div class="carousel-caption">
	      	<img class='img-logo-ha' src="img/logoha.png" alt="Hospedaje America" style='height: 120px; width: 110px; min-width:110px'>
	        <h3>Hospedaje America</h3>
	        <p>Comodidad</p>
	      </div>
	    </div>
	    <div class="item">
	      <a href="#"><img src="http://www.wentbridgehouse.co.uk/uploads/images/resized-rsz_afternoon-tea-1680x570-1451921987.jpg" /></a>
	      <div class="carousel-caption">
	      	<img class='img-logo-ha' src="img/logoha.png" alt="Hospedaje America" style='height: 120px; width: 110px; min-width:110px'>
	        <h3>Hospedaje America</h3>
	        <p>Seguridad</p>
	      </div>
	    </div>
	    <div class="item">
	      <a href="#"><img src="http://www.bocabeachclub.com/assets/img/MEET/_Meet_Header-image_1%20(1).jpg" /></a>
	      <div class="carousel-caption">
	      	<img class='img-logo-ha' src="img/logoha.png" alt="Hospedaje America" style='height: 120px; width: 110px; min-width:110px'>
	        <h3>Hospedaje America</h3>
	        <p>Confort</p>
	      </div>
	    </div>
	  </div>

	  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
</section>

<!--Habitacion simple list-->
<section class="backgroundwhite" style="margin:50 0 0 0; padding-top: 50px" id="habitacionsimple">
	<div class="container">
		<div class="row">
			<div class="page-header tittle-ha">
	  			<h1 class="titlediv" style="text-align:center;">Habitación Simple</h1>
	  			<div class="underline-tittle"></div>
			</div>
			<div class="card-text text-information" style="padding-bottom: 70px">
				<p><pin>L</pin>as habitaciones simples, comprenden de una habitacion individual, ideal para personas solteras que disfrutan de la tranquilidad y serenidad y/o gozen del silencio para leer un libro o disfrutar de sus pasatiempos favoritos.</p>
				<br>
				<p><img class="btn-down-nmtn" src="img/down2.png" alt="" width="80px"></p>
			</div>
		</div>
	</div>
</section>
<section class="backgrounddegrade" style="margin:0 0 50 0; padding: 15px;">
	<div class="container">
	  <div class="card-deck-wrapper">
		  <div class="card-deck">
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		  </div>
	  </div>
	</div>
</section>
<!--END Habitacion simple list-->

<!--Habitacion doble list-->
<section class="backgroundwhite" style="margin:50 0 0 0;" id="habitaciondoble">
	<div class="container">
		<div class="row" style="margin-top:70px;">
			<div class="page-header tittle-ha">
	  			<h1 style="text-align:center;">Habitación Doble</h1>
	  			<div class="underline-tittle"></div>
			</div>
			<div class="card-text text-information" style="padding-bottom: 70px">
				<p>Las habitaciones simples, comprenden de una habitacion individual, ideal para personas solteras que disfrutan de la tranquilidad y serenidad y/o gozen del silencio para leer un libro o disfrutar de sus pasatiempos favoritos.</p>
				<br>
				<p><img class="btn-down-nmtn" src="img/down2.png" alt="" width="80px"></p>
			</div>
		</div>
	</div>
</section>
<section class="backgrounddegrade" style="margin:0 0 50 0; padding: 15px;">
	<div class="container">
	  <div class="card-deck-wrapper">
		  <div class="card-deck">
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		  </div>
	  </div>
	</div>
</section>
<!--END Habitacion doble list-->

<!--Habitacion triple list-->
<section class="backgroundwhite" style="margin:50 0 0 0;" id="habitaciontriple">
	<div class="container">
		<div class="row" style="margin-top:70px;">
			<div class="page-header tittle-ha">
	  			<h1 style="text-align:center;">Habitación Triple</h1>
	  			<div class="underline-tittle" style=""></div>
			</div>
			<div class="card-text text-information" style="padding-bottom: 70px">
				<p>Las habitaciones simples, comprenden de una habitacion individual, ideal para personas solteras que disfrutan de la tranquilidad y serenidad y/o gozen del silencio para leer un libro o disfrutar de sus pasatiempos favoritos.</p>
				<br>
				<p><img class="btn-down-nmtn" src="img/down2.png" alt="" width="80px"></p>
			</div>
		</div>
	</div>
</section>
<section class="backgrounddegrade" style="margin:0 0 50 0; padding: 15px;">
	<div class="container">
	  <div class="card-deck-wrapper">
		  <div class="card-deck">
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		  </div>
	  </div>
	</div>
</section>
<!--END Habitacion triple list-->

<!--Habitacion Matrimonial list-->
<section class="backgroundwhite" style="margin:50 0 0 0;" id="habitacionmatrimonial">
	<div class="container">
		<div class="row" style="margin-top:70px;">
			<div class="page-header tittle-ha">
	  			<h1 style="text-align:center;">Habitación Matrimonial</h1>
	  			<div class="underline-tittle"></div>
			</div>
			<div class="card-text text-information" style="padding-bottom: 70px">
				<p>Las habitaciones simples, comprenden de una habitacion individual, ideal para personas solteras que disfrutan de la tranquilidad y serenidad y/o gozen del silencio para leer un libro o disfrutar de sus pasatiempos favoritos.</p>
				<br>
				<p><img class="btn-down-nmtn" src="img/down2.png" alt="" width="80px"></p>
			</div>
		</div>
	</div>
</section>
<section class="backgrounddegrade" style="margin:0 0 50 0; padding: 15px;">
	<div class="container">
	  <div class="card-deck-wrapper">
		  <div class="card-deck">
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left"><?php echo $contenido; ?></p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		    <div class="card">
		      <img class="card-img-top img-responsive" src="https://martinsprague.files.wordpress.com/2014/02/rooms-deluxe-single.jpg" alt="Card image cap">
		      <div class="card-block">
		        <h4 class="card-title">Simple</h4>
		        <p class="card-text" style="text-align: left">
		        	<?php echo $contenido; ?>
		        </p>
		        <p class="card-text">
	                <a href="#" class="btn button-blue" data-toggle="tooltip" data-placement="bottom" title="Reservar esta habitación">Reservar</a>
		        </p>
		      </div>
		    </div>
		  </div>
	  </div>
	</div>
</section>
<!--END Habitacion Matrimonial list-->

<?php include('footer.php'); ?>
