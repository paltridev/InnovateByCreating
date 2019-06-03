<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
﻿<!DOCTYPE html>
    <html>
        <head>
            <title>Corsair Dominator</title>
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
				<li>Corsair Dominator</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>Corsair Dominator</h1>
                <div id="contentimage" align="center"><img src="../images/cdram.jpg" id="motherboard-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 15";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=15">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="15">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The next product also comes from Corsair, but it is a far cry from your regular gaming RAM cards. In fact, the Corsair Dominator Platinum is truly worthy of its name,
			  as it dominates the high-end RAM market.It is a bit bulkier than the average RAM module, sporting a dark grey exterior and a metal bar on top that can easily be changed and customized. Furthermore, it also comes in two better
			  performing variants: Torque and SE. The former sports a more dynamic color scheme and the latter comes with either a black or chrome exterior.<br></p>
              <h2 id="abtmb">Features<br></h2>
                <h2>Performance</h2>
				<p  style="text-align: justify; font-size: 18px">The Dominator Platinum covers speeds from 2133 MHz to 4000 MHz. Due to its high-quality aluminum heatsink, these RAM cards have the highest overclocking potential out of all the
				models currently available.</p>
                <h2>Capacity</h2>
				<p  style="text-align: justify; font-size: 18px">The Corsair Dominator Platinum comes with either 4, 8 or 16 GB per individual module, although Corsair doesn’t sell individual modules separately. Rather, the Dominator Platinum only comes in kits of two or four modules, and
				those kits’ capacities range from 8 to 128 GB.</p>
              <br>

                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Unprecedented overclocking potential</li>
                  <li>Sleek design.</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>A bit bulky</li>
                  <li>Expensive</li>
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
