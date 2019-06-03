<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
﻿<!DOCTYPE html>
    <html>
        <head>
            <title>MSI B350 TOMAHAWK</title>
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
				<li><a href="swipeContents.php">Motherboard</a></li>
				<li>MSI B350 TOMAHAWK</li>
			</ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>MSI B350 TOMAHAWK</h1>
                <div id="contentimage" align="center"><img src="../images/u8.png" id="motherboard-img"></div>
              </div>

              <?php
                $query= "SELECT * FROM product WHERE id = 6";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=<?php echo $row["id"]; ?>">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="6">
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
              <h2 id="abtmb">About the Motherboard<br></h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">The B350 Tomahawk adheres to the overall look and feel of MSI's gaming prodcuts, with a black/dark grey body and subtle red lightning, in additional to red LED lightning. <br><br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul><li>CPU- The B350 Tomahawk is anotch above the previous ASRock motherboard when it comes to the chipset. This chipset, which also supports all the Ryzen series and A-series AMD CPU's, also supports overclocking unlike the abovementioned A320 chipset.</li><br>
                <li>GPU – With two PCLe x16 slots, the B350 Tomahawk supports dual-GPU setups. However, it only supports Radeon cards coneected via CrossFireX, and Nvidia SLI is not supported. </li><br>
                <li>RAM- The motherboard leaves little to be desired in this regard, as it has four RAM slots, with a maximum capacity of 64 GB and overclocked speeds of over 3200MHz</li>
              </ul><br>
              <h2 id="abtmb">Additional Features<br></h2>
              <ul>
                <li>Smart and optimized cooling- the B350 Tomahawk's cooling capabilities are impressive, as it allows for additional fans and water-cooling to be installed. Moreover, it includes a highly accesssible and customizable control panel for its smart cooling system. </li><br>
                <li>VR Ready- Even though the more affordable motherboards have started implementing it, it should still be noted that the B350 Tomahawk isfully VR Ready.</li></li><br>

              </ul>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Limited RBG-The motherboard has RBG lightning true, althoug it only has a red LED stripe out of the box. AS such, if you want to make it flasher and give it an appearance of a more advanced gaming motherboard,
				you'll have to invest in extra RBG strips.</li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Excellent budget overclocking motherboard.</li>
                  <li>Supports CrossFireX.</li>
                  <li>High RAM capacity and speeds.</li>

                </ul>
              </div>

               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Highly limited RGB</li>

                </ul>
              </div>
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
