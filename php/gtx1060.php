<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ZOTAC GTX 1060 AMP Edition</title>
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
                            <li><a href="swipeContents3.php">processors</a></li>
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

				<div class="breadcrumb">
             <ul>
				<li><a href="homepage.php">Home</a></li>
				<li><a href="swipeContents2.php">Graphics Card</a></li>
				<li>ZOTAC GeForce GTX 1060 Ti AMP Extreme Core Edition</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>ZOTAC GeForce GTX 1060 Ti AMP Extreme Core Edition</h1>
                <div id="contentimage" align="center"><img src="../images/gtx1060.jpg" alt="gpu" class="gpu-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 17";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=17">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="17">
            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
            <input type="hidden" name="hidden_desc" value="<?php echo $row["description"] ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top: 5px;" class="add-to-cart" value="Add to Cart(RS <?php echo $row["price"] ?>)">
            </div>

            </form>
            </div>
            <?php
            }
            }
            ?>
              <div id="describ">
              <h2 id="abtmb">About the Graphics Card<br></h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">we have the 1050’s big brother, the GTX 1060. It is a powerful,
              2K-capable mid-range GPU. The model we have picked is made by Zotac, the same company who manufactured the GTX 1050 we listed above.
              Unlike the GTX 1050 Mini, the Zotac GTX 1060 AMP Edition is anything but small.
              For the most part, the card follows Zotac’s general design philosophy, with a good-looking black and silver cooler, albeit without any sort of backplate. It also utilizes the company’s
              Icestorm cooling technology which, as they put it, relies on “brute force” as a means of keeping the graphics card at an optimal temperature.<br></p>

              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table" align="center"><img src="../images/table4.png"></div><br>
              <br>
              <h2 id="abtmb">What Performance to Expect</h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">Like the Radeon RX 580, which is its primary competitor,
              the GTX 1060 aims to deliver framerates as close to the 60 FPS mark in 2K as possible. And much like the RX 580,
              it can also produce decent 4K framerates.The only real difference in performance between the two cards
              is the very same one that we always see when comparing Nvidia and AMD: the AMD card offers better memory performance
              but the Nvidia card does better when it comes to shading, physics etc.The difference is, once again, mostly negligible and
              the choice between the two cards comes down to personal preference and/or pricing.<br></p>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Flawless 1080p performance</li>
                  <li>Excellent 2K performance</li>
                  <li>Limited 4K capability</li>
                  <li>Very low power consumption</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Lack of backplate makes the card look cheap</li>
                  <li>Not the best value when compared to RX 580</li>
                </ul></div>
            </div>
              </ul>
              </div>
            </div>
             </div>


            <div id="footer" align="center">
                <p>Copyright @ 2019 By Prithvi & Sesh</p>
            </div>
      php
        </body>
    </html>
