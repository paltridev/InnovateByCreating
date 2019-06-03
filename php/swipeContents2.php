<!DOCTYPE html>
    <html>
        <head>
            <title>gpus</title>
             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
            <link rel="stylesheet" type="text/css" href="../css/swipestyle.css">
        </head>
        <body>

             <!-- Swiper -->
            <div class="swiper-container">

              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="imgBx"><a href="nitro.php" title="Click picture to learn more"><img src="../images/rtx2080.jpg" alt="gpu" class="gpu-img"></a></div>
                    <div class="details"><h3>Radeon NITRO+ RX 570</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="gtx1060.php" title="Click picture to learn more"><img src="../images/gtx1060.jpg" alt="gpu" class="gpu-img"></a></div>
                    <div class="details"><h3>GeForce GTX1060</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="msir550.php" title="Click picture to learn more"><img src="../images/rx550.png" alt="gpu" class="gpu-img"></a></div>
                    <div class="details"><h3>Radeon RX 550</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="gtx1050mini.php" title="Click picture to learn more"> <img src="../images/gtx1050.jpg" alt="gpu" class="gpu-img"> </a></div>
                    <div class="details"><h3>GeForce GTX 1050 Mini</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="gtx1080.php" title="Click picture to learn more"><img src="../images/gtx1080.png" alt="gpu" class="gpu-img"></a></div>
                    <div class="details"><h3>GeForce GTX 1080 Ti</h3></div>
                </div>

              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>

             <!--Using jQuery-->
            <script type="text/javascript" src="../js/swiper.min.js"></script>
             <!-- Initialize Swiper -->
            <script>
              var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                  rotate: 50,
                  stretch: 0,
                  depth: 500,
                  modifier: 1,
                  slideShadows : true,
                },
                pagination: {
                  el: '.swiper-pagination',
                },
              });
            </script>


        </body>
    </html>
