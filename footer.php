    <div style='
    margin-top: 90px;
    '>

    <!--fb comments-->
    <?php include('commentfb.php'); ?>
    <!--end fb comments-->

    </div>
    <footer class="footer" style="">
      <div class="container">
        <p class="text-footer">
          Hospedaje America © 2016 - Developed by 
          <a href="" style="background:blue; color:white; padding: 3px; padding-right: 5px; padding-left: 5px; text-decoration: none; border-radius: 5px; font-size: 14px">Enigma TM</a>
        </p>
      </div>
    </footer>


    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!--script src="js/scrolling-nav.js"></script-->

    <!--Carrousel Js-->
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

    <script>
    //refrescar pagina con js
      /*(function(){
        setInterval(
          function(){
            document.location.reload()
          },1000)
          })()
    </script>
</body>
</html>

<style>
    footer{
        margin-top: 70px;
        margin-bottom: 10px;
    }
    .text-footer{
      font-size: 15px;
    }
    #habitacionmatrimonial{
      /*background-image: url('http://wallpapercave.com/wp/uUO50NS.jpg'), linear-gradient(red,yellow);*/
      background-size: cover;
    }
    .row{
       /* background: white;
        margin-top: 50px;*/
    }
    .card-text{
      font-family: verdana;
      /*border-bottom: solid 2px white;*/
      font-size: 15px;
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
        margin-top: 50px;
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
    .card:hover{
      -webkit-box-shadow: 4px 6px 19px 1px rgba(189,189,189,1);
      -moz-box-shadow: 4px 6px 19px 1px rgba(189,189,189,1);
      box-shadow: 4px 6px 19px 1px rgba(189,189,189,1);
      color:black;
      cursor: pointer;
      transition: all .3s;
    }
    .card-img-top{
        width: 100%;
        height: 100%;
        min-height: 200px;
        max-height: 200px;
        -webkit-filter: grayscale(20%);

        -webkit-transition: all 1s ease;
         -moz-transition: all 1s ease;
           -o-transition: all 1s ease;
          -ms-transition: all 1s ease;
              transition: all 1s ease;
    }
    .card-img-top:hover{
      transition: all .3s;
      -webkit-filter: grayscale(0%);
    }
    .intro-section{
       /* background-color: #e9ebee;*/
    }
    body{
        unicode-bidi: embed;
        /*font-family: helvetica, arial, sans-serif;*/
        font-family: 'Mandali', sans-serif;
    }
    .text-aside{
        font-family: 'Mandali', sans-serif;
        font-size: 20px;
    }

    *{
        margin: 0 auto;
        text-align: center;
    }

    /*Media querys*/
    /*@media screen (max-width:610px) and (min-width: 0px;){
       *{overflow-x:hidden;}
    }*/
    @media screen and (max-width: 365px){
      *{
        margin: 0 auto;
      }
      .card{
        margin: 0 auto;
        text-align: center;
      }
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
        .text-aside{
            font-size: 16px;
        }
        .titlediv{
            font-size:!important 26px;
            padding-right: 20px;
            padding-left: 20px;
        }
        .card{
            width: 250px;
            text-align: center;
        }
    }
    @media screen and (max-width:995px){
      #slider{
        visibility: hidden;
        height: 20px;
      }
      #headerinminix{
        visibility: visible;
        /*height: 100%;*/
        padding-top: 90px;
        background-color:#475e88;
        color:white;
        background-image: url('img/winhd.jpg');
        background-size: cover;
      }
    }
    @media screen and (min-width:996px){
        #slider{
          margin: 0 auto;
          visibility: visible;
          height: auto;
          margin-top: 70px;
        }
        #headerinminix{
          visibility: hidden;
          height: 0px;
          padding-top: 90px;
        }
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
    h1{
        /*font-family: 'Poiret One', cursive;*/
        font-family: 'Muli', sans-serif;
        font-size:27px;
        /*font-weight: bolt;*/
        color:rgba(255, 255, 255, 0.87);
        color:rgba(0, 0, 0, 0.69);
    }
    p{
      /*font-family: 'Cormorant Upright', serif;
      font-size: 23px;*/
      font-weight: bolt;
      color:rgba(0, 0, 0, 0.69);
    }
    .underline-tittle{
        border-bottom: solid 1px rgb(55, 58, 60);
        width: 40%;
    }
    pin{
        font-family: 'Text Me One', sans-serif;
        font-size: 29px;
    }
    /**/
    .acard, .acard:hover{
      text-decoration: none;
      color: gray;
    }
    .acard{
      border-bottom: solid 3px black;
    }
    .acard:hover{
      background-color: green;
    }
    .backgrounddegrade{
         background: -webkit-linear-gradient(#fff, #e9ebee);
         background: -o-linear-gradient(#fff, #e9ebee);
         background: linear-gradient(#fff, #e9ebee);
    }
    .backgroundwhite{
        background-color:#fff;
    }
    .navbar-nav>li>.dropdown-menu{
        border-radius: 0px 3px 8px 8px;
    }
</style>
<style media="screen">
  .box {
      background-color: skyblue;
      margin-top: 50px;
      /*padding: 5% 20px; */
      /* Added a percentage value for top/bottom padding to keep the wrapper inside of the parent */
      -webkit-transform: skewY(-5deg);
      -moz-transform: skewY(-5deg);
      -ms-transform: skewY(-5deg);
      -o-transform: skewY(-5deg);
      transform: skewY(-5deg);
  }
  .box > .wrapper {
      -webkit-transform: skewY(5deg);
      -moz-transform: skewY(5deg);
      -ms-transform: skewY(5deg);
      -o-transform: skewY(5deg);
      transform: skewY(5deg);
  }
  .card{
      margin-top: 15px;
  }
</style>