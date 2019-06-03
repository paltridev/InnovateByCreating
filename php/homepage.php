<!DOCTYPE html>
    <html>
        <head>
            <title>Innovate By Creating</title>
            <meta name="viewport" content="width=device-width, initial-scale=1,
            user-scalable=no"> <!-- to match navbar and pages in all screen for responsiveness-->
            <link rel="stylesheet" href="../css/styles.css" type="text/css">
            <link rel="stylesheet" type="text/css" href="../css/mystylecss.css">
            <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">


        </head>
        <body>
          <!-- Navbar-->
            <div class="wrapper">
              <div class="nav">
               <div class="logo">
                    <img src="../images/logo.png" alt="Logo" class="logo-image">
                  </div>
                <div class="wrap-container">
                  <div class="menu">
                    <ul>
                    <li><a href="homepage.php"><img src="../images/home.png" id="homebtn" title="Home"></a></li>
                    <li><a href="#">Components</a>
                    <ul>
                            <li><a href="swipeContents.php">Motherboard</a></li>
                            <li><a href="swipeContents1.php">RAM</a></li>
                            <li><a href="swipeContents2.php">Graphics Card</a></li>
                            <li><a href="swipeContents3.php">Processors</a></li>
                        </ul>
                    </li>
                    <li><a href="tutorial.php">Tutorials</a></li>
                    <li><a href="aboutus.php">About us</a></li>

                   <li><a href="../cart-xml/cart-iframe.php"><img src="../images/cart.png" id="cartbtn" title="cart"></a>
                   </li>
                   <li><a href="../componentSearch/index.html"><img src="../images/musica-searcher.png" id="cartbtn" title="search"></a></li>
                    <a href="login.php" id="login">Login</a>
                    <a href="register.php" id="Register" >Register</a>
                    <a href="logout.php" id="logout" >Logout</a>

                </ul>
                  </div>
                </div>
              </div>
            </div>

            <!--Navbar code ends-->

            <!--welcome image-->
            <div id="welcomeintro">
              <img src="../images/5.jpg" alt="Welcome image" class="welcome-image">
             <img src="../images/os.png" alt="Welcome image" class="welcome-image">
            </div>
            <!--end off welcome image-->


            <!--new arrivals-->
            <div id="Arrivals">
              <p id="title-new-arrival">What's new ?</p>
			  <div><a href="filter.php" style="color: #5333ed;font-weight: bolder;">Filter by price</a></div>

             <div class="pic"><img src="../images/gigabyte.jpg" alt="motherboard" id="motherboard-img1" align="center"><a href="gigabyte.php" id="picpi">Gigabyte X299 AORUS</a></div>
              <div class="pic"><img src="../images/gskillram.png" alt="ram" id="ram-img1"><a href="gskillram.php" id="picpi">G.Skill Trident Z RGB</a></div>
              <div class="pic"><img src="../images/rtx2080.jpg." alt="gpu" id="gpu-img1"><a href="nitro.php" id="picpi">Radeon NITRO+ RX 570</a></div>
             <div class="pic"><img src="../images/i7.jpeg" alt="processor" id="processors-img1"><a href="Intel Core i7-8700K.php" id="picpi">Intel Core i7-8700K</a></div>
            </div>



            <div id="footer" align="center">
                <p>Copyright @ 2019 By Prithvi & Sesh</p>
            </div>
<!--add to cart code-->



      <script id="s">

      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("welcome-image");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1;}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 5000);// Change image every 2 seconds
      }
      </script>



        </body>
    </html>
