<!DOCTYPE html>
    <html>
        <head>
            <title>processors</title>
             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
            <link rel="stylesheet" type="text/css" href="../css/swipestyle.css">
        </head>
        <body>

             <!-- Swiper -->
            <div class="swiper-container">

              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="imgBx"><a href="Intel core i3-8100.php" title="Click picture to learn more"><img src="../images/core13.jpg" alt="processors" class="processors-img"></a></div>
                    <div class="details"><h3>Intel Core i3-8100</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="Intel Core i5-8600K.php" title="Click picture to learn more"><img src="../images/i5.jpg" alt="processors" class="processors-img"></a></div>
                    <div class="details"><h3>Intel Core i5-8600K</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="Intel Core i7-8700K.php" title="Click picture to learn more"><img src="../images/i7.jpeg" alt="processors" class="processors-img"></a></div>
                    <div class="details"><h3>Intel Core i7-8700K</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="AMD Ryzen 3 2200G.php" title="Click picture to learn more"> <img src="../images/r3.jpg" alt="processors" class="processors-img"> </a></div>
                    <div class="details"><h3>AMD Ryzen 3 2200G</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="AMD Ryzen 5 2600X.php" title="Click picture to learn more"><img src="../images/r5.jpg" alt="processors" class="processors-img"></a></div>
                    <div class="details"><h3>AMD Ryzen 5 2600X</h3></div>
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
