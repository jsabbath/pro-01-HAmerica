<?php 
    include_once('header.php'); 
    $buttonText = 'Ver detalles';
?>
    
    <section class="hidden" style="margin-top: 100px;
    text-align: center;">
        <img src="img/HAlogo2.png" alt="" style="width: 300px;">
    </section>

    <!-- intro Section -->
    <section id='intro'>
        <div id="carousel-example" class="carousel slide" data-ride="carousel" style='margin-top:50px;'>
              <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                <div class="item active">
                  <a href="#"><img src="http://www.anantahotels.com/content/UdaipurImages/bannerRoom.jpg" /></a>
                  <div class="carousel-caption">
                    <h3>Comodidad</h3>
                    <p>Las mejores siuts al alcance de tu bolsillo</p>
                  </div>
                </div>
                <div class="item">
                  <a href="#"><img src="http://no98boutiquehotel.com/wp-content/uploads/Top-Image-Room-7-1400-x-500-No98-Boutique-Hotel-Weymouth-860.jpg" /></a>
                  <div class="carousel-caption">
                    <h3>Seguridad</h3>
                    <p>Vigilancia y camaras de seguridad las 24 horas del día.</p>
                  </div>
                </div>
                <div class="item">
                  <a href="#"><img src="http://www.anantahotels.com/content/UdaipurImages/bannerRoom.jpg" /></a>
                  <div class="carousel-caption">
                    <h3>Confiabilidad</h3>
                    <p>Tu solo preocupate de cuantas horas quieres dezcansar, del resto nos encargamos nosotros</p>
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

    <!-- Section -->
    <section id="" class="intro-section" style='padding-top: 90px'>
        <div class="container">
            <div class="row hidden">
                <div class="col-lg-12">
                    <h1>Reseña Hospedaje América</h1>
                    <p>Nuestro Hospedaje se encuentra en la Ciudad de Huancayo, estamos a 6 cuadras de la Plaza de Armas y 3 Cuadras de la Municipalidad de Huancayo, en una zona bastante concurrida y con personal de seguridad permanente</p>
                    <p>El confort no solamente lo sentirá en nuestras instalaciones, sino que también en la calidez y asesoramiento por parte nuestra, en cuestión gastronómica, cultural, turística y de diversión, asistiéndolo también en cuestiones de ubicación institucional en caso de personal ejecutivo.</p>
                    <p>Contando también entre nuestros servicios a su disposición con una cabina de internet en caso de que no cuenten con Laptop; así como los breakfast & Cocteles. Agradeciendo de antemano su confianza y preferencia, cual sea su decisión Hospedaje América le da la bienvenida a la Incontrastable Ciudad de Huancayo.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
            <div class="row">
                <div class="row" style='margin-bottom: 30px'>
                    <h1>Combos AmericROOM</h1>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="card">
                      <img class="card-img-top" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap" width='350px'>
                      <div class="card-block">
                        <h4 class="card-title">Habitación Simple</h4>
                        <p class="card-text">En esta habitacion puedes masturbarte como quieras cuantas veces quieras con la mano que quieras.</p>
                        <a href="#" class="btn btn-primary"><?php echo $buttonText; ?></a>
                      </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="card">
                      <img class="card-img-top" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap" width='350px'>
                      <div class="card-block">
                        <h4 class="card-title">Habitación Doble</h4>
                        <p class="card-text">Aqui ya valiste madres si hay un sambo al lado, pero cierra los ojos y disfruta nada mas.</p>
                        <a href="#" class="btn btn-primary"><?php echo $buttonText; ?></a>
                      </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="card">
                      <img class="card-img-top" src="img/LIBROS-MOCKUP.jpeg" alt="Card image cap" width='350px'>
                      <div class="card-block">
                        <h4 class="card-title">Habitación Triple</h4>
                        <p class="card-text">En esta habitacion puedes hacer todas las orgias que desees con quienes desees, pero cuida tu culo con la luz apagada.</p>
                        <a href="#" class="btn btn-primary"><?php echo $buttonText; ?></a>
                      </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--h1>Maps</h1-->
                    <section><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1950.7818793676597!2d-75.20617308731079!3d-12.07350774562882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x951f2c3eba45f1cb!2sHospedaje+Am%C3%A9rica!5e0!3m2!1ses!2sus!4v1473758343832" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                </div>
            </div>
        </div>
    </section>


<?php include('footer.php'); ?>