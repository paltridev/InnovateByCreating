 <!DOCTYPE html>
    <html>
        <head>
            <title>rams</title>
             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
            <link rel="stylesheet" type="text/css" href="../css/swipestyle.css">
        </head>
        <body>

             <!-- Swiper -->
            <div class="swiper-container">

              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="imgBx"><a href="gskillram.php" title="Click picture to learn more"><img src="../images/gskillram.png" alt="ram" class="ram-img"></a></div>
                    <div class="details"><h3>G.Skill Trident Z RGB</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="xfury.php" title="Click picture to learn more"><img src="../images/hfram.jpg" alt="ram" class="ram-img"></a></div>
                    <div class="details"><h3>Kingston HyperX Fury</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="xpredator.php" title="Click picture to learn more"><img src="../images/kfram.jpg" alt="ram" class="ram-img"></a></div>
                    <div class="details"><h3>HyperX Predator</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="cvengeance.php" title="Click picture to learn more"> <img src="../images/cvram.jpg" alt="ram" class="ram-img"> </a></div>
                    <div class="details"><h3>Corsair Vengeance</h3></div>
                </div>

                <div class="swiper-slide">
                    <div class="imgBx"><a href="Corsairdominator.php" title="Click picture to learn more"><img src="../images/cdram.jpg" alt="ram" class="ram-img"></a></div>
                    <div class="details"><h3>Corsair Dominator</h3></div>
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
