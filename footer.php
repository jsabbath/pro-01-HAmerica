

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