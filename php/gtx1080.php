<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>php
<!DOCTYPE html>
    <html>
        <head>
            <title>ZOTAC GeForce GTX 1080 Ti AMP Extreme Core Edition</title>
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
				<li>ZOTAC GeForce GTX 1080 Ti AMP Extreme Core Edition</li>
			 </ul>
			</div>
             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>ZOTAC GeForce GTX 1080 Ti AMP Extreme Core Edition</h1>
                <div id="contentimage" align="center"><img src="../images/gtx1080.png" alt="gpu" class="gpu-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 20";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=20">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="20">
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
            ?>20
              <div id="describ">
              <h2 id="abtmb">About the Graphics Card<br></h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">we have the most powerful mainstream graphics card of them all: the GTX 1080 Ti. This GPU was designed by Nvidia as a means of taking on 4K gaming. Zotac then packed it into the highly aesthetic and efficient graphics card that we are taking a look at here, ZOTAC GeForce GTX 1080 Ti AMP Extreme Core Edition.
              In terms of external appearance, this card has all the signature traits of Zotac design: dark grey metal exterior and backplate, complemented with yellow highlights. It is a massive graphics card with a triple-fan cooler which allows you to push this card’s already high limits even further.<br></p>

              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table" align="center"><img src="../images/table1.png"></div><br>
              <ul>
                <li>GDDR5X Memory - Currently, the only card to employ this technology, GDDR5X VRAM has a much higher bandwidth than regular GDDR5.</li>
              </ul>
              <br>
              <h2 id="abtmb">What Performance to Expect</h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">Just like the 1070 Ti, the 1080 Ti improves on the original model in every regard. It is the only card adequately priced graphics card capable of running games in 4K and with 60 FPS. If that is your ultimate goal, then the GTX 1080 Ti is your only real choice.<br></p>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Full 4K gaming capability</li>
                  <li>Great overclocking potential</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Expensive</li>
                  <li>Very large</li>
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
