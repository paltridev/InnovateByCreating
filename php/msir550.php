<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>MSI Radeon RX 560 AERO</title>
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
                    <li><a href="homepage.html"><img src="../images/home.png" id="homebtn" title="Home"></a></li>
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
				<li>MSI Radeon RX 560 AERO</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>MSI Radeon RX 560 AERO</h1>
                <div id="contentimage" align="center"><img src="../images/rx550.png" alt="gpu" class="gpu-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 18";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=18">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="18">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">We will start off with the Radeon RX 560, a very cost-efficient entry-level gaming solution. The specific model comes from the well-known hardware manufacturer MSI, in the form of the Radeon RX 560 AERO.
              Living up to the “Aero” moniker, this graphics card is light and compact, able to fit into the smallest computer cases or external GPU enclosures.
              That said, it is not much to look at and the plain exterior will not capture anyone’s eye, but in terms of cost-effectiveness,
              this little graphics card is unmatched.<br></p>

              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table" align="center"><img src="../images/table2.png"></div><br>
              <ul>
                <li>MSI Afterburner - The MSI Afterburner is some of the most popular overclocking software out there, and for a good reason.
It is very stable and comes with a breadth of features that go beyond overclocking, such as benchmarking, video recording and the customization of fan profiles.</li>
              </ul>
              <br>
              <h2 id="abtmb">What Performance to Expect</h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">As stated in the introduction, the RX 560 is an entry-level gaming GPU. That said, it targets primarily 1080p resolutions. It is also quite capable of running the latest AAA titles at a stable 30 FPS, possibly more depending on how much you overclock it, if at all.
              The only reason you might want to drop the settings down would be to achieve 60 FPS, but that is a matter of preference.<br></p>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Good value for money</li>
                  <li>30+ FPS 1080p performance in latest games</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Limited overclocking potential due to single-fan cooling</li>
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
