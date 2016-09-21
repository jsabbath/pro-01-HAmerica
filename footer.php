    <footer class="footer" style="padding-top: 10px;">
      <div class="container">
        <p class="text-muted">Hospedaje America ©2016 - Developed by Enigma ♚</p>
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

        $('#myTooltip').on('hidden.bs.tooltip', function () {
          // do something…
        })
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>


<style>
    *{
       /* transition: .5s;*/
    }
    .row{
       /* background: white;
        margin-top: 50px;*/
    }
    .carousel .item.left img{
        width: 100% !important;
    }
    .blur{
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);
    }

    .tittle-ha{
        margin-top: 50px
    }
    .text-information{
        margin-right: 20%;
        margin-left: 20%;
        text-align: center;
    }
    /*animation button down*/
    .btn-down-nmtn{
        /*animation: btndownanimate;*/
        animation: btndownanimate 1.5s infinite;
        position: absolute;
        margin-right: -20px;
        margin-left: -20px;
    }
    @keyframes btndownanimate{
        0% {margin-top: -50px;}
        100%{margin-top: -1px;}
    }
    .card-img-top{
        width: 100%;
        height: 100%;
        min-height: 200px;
        max-height: 200px;
    }
    .intro-section{
       /* background-color: #e9ebee;*/
    }
    body{
        unicode-bidi: embed;
        font-family: helvetica, arial, sans-serif;
    }
    
    @media screen and (min-width: 381px){
        .img-logo-ha{
            height: 90px; 
            margin-top: -10px;
            transition: all .3s;
        }
    }
    @media screen and (max-width: 380px){
        .card{
             margin: 10 5 10 5;
        }
        .img-logo-ha{
            height: 60px;
            margin-top: -6px;
            transition: all .3s;
        }
        .text-information{
            margin-right: 9%;
            margin-left: 9%;
        }
    }

    *{
        margin: 0 auto;
        text-align: center;
    }
    @media screen (max-width:610px) and (min-width: 0px;){
       *{overflow-x:hidden;}
    }
    /*aditionals*/
    .button-blue{
        color: #2196F3;
        background-color: white;
        border: solid 2px #2196F3;
    }
    .button-blue:hover{
        color: white;
        background-color: #2196F3;
        border: solid 2px #2196F3;
    }
    .button-blue:pressed{
        color: white;
        background-color: #2196F3;
        border: solid 2px #2196F3;   
    }
</style>