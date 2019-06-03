<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Hyper X Predator</title>
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

			<div class="breadcrumb">
             <ul>
				<li><a href="homepage.php">Home</a></li>
				<li><a href="swipeContents1.php">RAM</a></li>
				<li>Hyper X Predator</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>Hyper X Predator</h1>
                <div id="contentimage" align="center"><img src="../images/kfram.jpg" id="motherboard-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 13";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=13">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="13">
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
              <h2 id="abtmb">About the product<br></h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px"> Kingston’s HyperX brand, although this one is
			  not quite as popular as the Fury Black series. It is, however, definitely a better performer. Meet the HyperX Predator Black.
			  The Predator Black follows a similar design philosophy as the rest of the HyperX RAM cards: a black exterior, built-in heatsink and high overclocking potential. It sports
			  a much more aggressive appearance than other HyperX RAM products, which clearly establishes it as the very peak of the brand’s overclocking game.<br></p>

              <h2 id="abtmb">Features<br></h2>
                <h2>Performance</h2>
				<p  style="text-align: justify; font-size: 18px">Unlike most DDR4 RAM cards, the Predator Black does not start at 2133 MHz as the base clock speed. Instead, it starts at 2400 MHz. However, it is the other end of this scale where it truly
				shines: a maximum speed of 3600 MHz.</p>
                <h2>Capacity</h2>
				<p  style="text-align: justify; font-size: 18px">The individual Predator Black RAM modules have a capacity of either 4, 8 or 16 GB, just like the Fury Black. And just like Fury Black, they can be combined in dual channel or quad channel setups
				in order to reach a capacity as high as 128 GB. Although, it is worth noting that the 128 GB (8×16 GB) variant is hardly popular, given that it requires 8 RAM slots which few desktop motherboards support.</p>
				<br>


                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Excellent overclocking potential.</li>
                  <li>Durable and well-built.</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>No customize options</li>
                  <li>Not the best high-end RAM solution around</li>
                </ul></div>
            </div>
              </ul>
              </div>
            </div>
             </div>


            <div id="footer" align="center">
                <p>Copyright @ 2019 By Prithvi & Sesh</p>
            </div>

        </body>
    </html>
