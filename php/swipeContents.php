<!DOCTYPE html>
    <html>
        <head>
            <title>Motherboards</title>
             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
            <link rel="stylesheet" type="text/css" href="../css/swipestyle.css">
        </head>
        <body>

             <!-- Swiper -->
            <div class="swiper-container">

              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="imgBx"><a href="msib350.php" title="Click picture to learn more"><img src="../images/u8.png" alt="motherboard" class="motherboard-img"></a></div>
                    <div class="details"><h3>MSI B350 TOMAHAWK</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="asusprime.php" title="Click picture to learn more"><img src="../images/asusprime.jpg" alt="motherboard" class="motherboard-img"></a></div>
                    <div class="details"><h3>ASUS PRIME Z370-A</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="MSI.php" title="Click picture to learn more"><img src="../images/msih270.jpg" alt="motherboard" class="motherboard-img"></a></div>
                    <div class="details"><h3>MSI H270 GAMING M3</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="gigabyte.php" title="Click picture to learn more"> <img src="../images/gigabyte.jpg" alt="motherboard" class="motherboard-img"> </a></div>
                    <div class="details"><h3>Gigabyte X299 AORUS</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="AsusRog.php" title="Click picture to learn more"><img src="../images/asuszenith.jpg" alt="motherboard" class="motherboard-img"></a></div>
                    <div class="details"><h3>ASUS ROG ZENITH EXT</h3></div>
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
