<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Sapphire Radeon NITRO+ RX 570</title>
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
				<li>Sapphire Radeon NITRO+ RX 570</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>Sapphire Radeon NITRO+ RX 570</h1>
                <div id="contentimage" align="center"><img src="../images/rtx2080.jpg" alt="gpu" class="gpu-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 16";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=16">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="16">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">Sapphire are often hailed as one of the best Radeon graphics card manufacturers
              today, so it’s no wonder that one of their products has found its way onto this list: the Sapphire Radeon NITRO+ RX 570.
              You can tell you’re dealing with a well-made graphics card by the high-quality plastic exterior, its rounded corners, as well as
              the black-and-white metal backplate which all give it remarkable aesthetic appeal. This is all topped off with an RGB-lit Sapphire logo.
              It’s not all about the looks, though, as the NITRO+ is equipped with two powerful ball-bearing 95mm fans which were built to last
              and provide excellent cooling with minimal noise.<br></p>
              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table" align="center"><img src="../images/table5.png"></div><br>
              <ul>
                <li>VR Ready - VR is the next big thing in gaming, coming hand in hand with 2K and 4K resolutions, and this card is ready to take on VR
                rendering. Not only is it powerful enough to do so, but it also incorporates two HDMI ports into its design with the sole
                purpose of enabling users to have a monitor and a VR headset connected at the same time.</li>
              </ul>
              <br>
              <h2 id="abtmb">What Performance to Expect</h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">The RX 570 aims to deliver nothing less than 60 FPS in all the
              latest games when running them in Full HD. Moreover, it is also one quite
              reliable card when it comes to 2K performance, as it will manage to consistently achieve over 30 FPS in these resolutions
              with the more demanding titles.<br></p>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Rock-solid 1080p performance</li>
                  <li>Decent performance in 2K</li>
                  <li>Very quiet cooling</li>
                  <li>Versatile in terms of connectivity</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>High power consumption</li>
                  <li>Only slightly cheaper than the better-performing RX 580</li>
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
