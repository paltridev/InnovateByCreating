<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title> Kingston Hyper X Fury</title>
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
      				<li> Kingston Hyper X Fury</li>
      			 </ul>
      			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>Kingston Hyper X Fury</h1>
                <div id="contentimage" align="center"><img src="../images/hfram.jpg" id="motherboard-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 12";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=12">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="12">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px"> Kingston is one of the longest-standing and most trustworthy names when it comes to any memory-related products, be it hard drives, solid-state drives, RAM, or anything in between. The first entry on this list is coming straight from them,
			    and it is from their gaming-oriented HyperX brand.
				The HyperX Fury Black series of RAM cards constitutes some of the best and most affordable products in this category that you could possibly get. They are all equipped with sleek heatsinks that are both practical and aesthetic while allowing users a choice between black, red, and white color.
				That way, these HyperX cards can blend well with almost any gaming rig.<br></p>

              <h2 id="abtmb">Features<br></h2>
                <h2>Performance</h2>
				<p  style="text-align: justify; font-size: 18px">The HyperX series’ clock speed starts at 2133 MHz but also includes 2400 MHz and 2666 MHz models. The latter two speeds are achievable via automatic overclocking, and this sort of performance is made possible with the heatsinks that each Fury Black RAM module is equipped with.</p>
                <h2>Capacity</h2>
				<p  style="text-align: justify; font-size: 18px">Individual HyperX Fury Black RAM modules come with a capacity of either 4, 8 or 16 GB. However, these individual modules can easily be paired up in either twos and fours, which leads to a maximum capacity of 64 GB.</p>
				<br>


                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Quality built.</li>
                  <li>Appealing design.</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Only three color options</li>
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
