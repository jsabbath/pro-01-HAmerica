<?php include_once('header.php'); ?>
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
    <section id="" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
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
                    <h1>Maps</h1>
                    <section><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1950.7818793676597!2d-75.20617308731079!3d-12.07350774562882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x951f2c3eba45f1cb!2sHospedaje+Am%C3%A9rica!5e0!3m2!1ses!2sus!4v1473758343832" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                </div>
            </div>
        </div>
    </section>






    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!--script src="js/scrolling-nav.js"></script-->

    <!--Carrouseñ-->
    <script>
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item").click(function(){
            $("#myCarousel").carousel(1);
        });

        // Enable Carousel Controls
        $(".left").click(function(){
            $("#myCarousel").carousel("prev");
        });
    </script>

</body>

</html>


<style>
    *{
        transition: .5s;
    }
    .carousel .item.left img{
        width: 100% !important;
    }

    
</style>