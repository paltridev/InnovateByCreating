<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>GeForce GTX 1050 Mini</title>
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
				<li>GeForce GTX 1050 Mini</li>
			  </ul>
			</div>
             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>GeForce GTX 1050 Mini</h1>
                <div id="contentimage" align="center"><img src="../images/gtx1050.jpg" alt="gpu" class="gpu-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 19";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=19">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="19">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">As for the other entry-level option,
              we have Nvidia’s GTX 1050. This GPU is relatively on-par with the RX 560, although there are a couple of key differences.
              The model we have picked is the ZOTAC GTX 1050 Mini, yet another compact graphics card with a single fan that can fit into any case.
              Not many are likely to find the textured plastic exterior appealing, though, as it looks quite cheap at first glance.<br></p>

              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table" align="center"><img src="../images/table3.png"></div><br>
              <br>
              <h2 id="abtmb">What Performance to Expect</h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">In terms of performance, we have the same situation with the GTX 1050 and
              the RX 560 as with the pair of budget graphics cards above. The two are mostly on even terms, although the RX 560 leads in the memory department.
              Not only does it use more advanced memory, but the capacity is also twice that offered by the GTX 1050.
              Don’t be fooled, though! This Nvidia card can definitely hold its own even today, and it can achieve 60 FPS in a number of games,
              although it will stick to around 30 FPS with newer titles that require more VRAM.<br></p>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Decent 1080p performance</li>
                  <li>Compact</li>
                  <li>Very low power draw</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Only 2GB of VRAM can make it perform worse in newer games</li>
                  <li>Not as good value as the RX 560</li>
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
