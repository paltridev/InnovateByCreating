<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>MSI H270 GAMING M3</title>
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
            </div>

            <!--Navbar code ends-->

			<div class="breadcrumb">
             <ul>
				<li><a href="homepage.php">Home</a></li>
				<li><a href="swipeContents.php">Motherboard</a></li>
				<li>MSI H270 GAMING M3</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>MSI H270 GAMING M3</h1>
                <div id="contentimage" align="center"><img src="../images/msih270.jpg" id="motherboard-img"></div>
              </div>

              <?php
                $query= "SELECT * FROM product WHERE id = 8";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=<?php echo $row["id"]; ?>">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="8">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The first motherboard comes from MSI, one of the four best established
			  motherboard manufacturers. The model in question is the MSI H270 Gaming M3, an affordable yet powerful and well-designed motherboard <br><br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>CPU – The motherboard has a LGA1151 socket and the previous generation H270 chipset, which allows it to fully support the 6 <sup>th</sup>
				and 7 <sup>th</sup>generation of Intel CPUs.Unfortunately, it is not forward compatible with the latest 8<sup>th</sup> generation</li><br>
                <li>GPU – With the two PCIe X16 slots, the motherboard can accomodate two full-sized graphics cards. However, it only supports AMD's CrossFireX but not
				Nvidia's SLI, the latter being quite uncommon among the more affordable motherboards.</li><br>
                <li>RAM – The H270 Gaming M£ motherboard has four RAM slots and supports dual-channel configurations.Furthermore, it supports DDR4 RAM modules with speeds of up to 2400 MHz and
				a total RAM capacity of up to 64 GB</li>
              </ul><br>
              <h2 id="abtmb">Additional Features<br></h2>
              <ul>
                <li>Mystic Light Sync- The RGB lightning can work in a number,can be contolled remotely and is even extendable via additional RBG strips.</li><br>
                <li>Advanced cooling options - A total of six fan headers allows for a number of iptions when it comes to customizing ypur computer case's cooling. Moreover,
				it even supports water-cooling solutions.</li><br>
                <li>Intel Optane Technology Ready - As long as you have a 7<sup>th</sup> generation Intel CPU, you will be able to take advantage of this features,
				which is a great way to boost your HDD's performance if you can't afford an SSD </li></li></li>
              </ul>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Not very future-proof- The H270 chipset does not support the lastest 8 <sup>th</sup> generation Coffee Lake Intel CPUs. There is still
				a chance that Intel might make it forward compabitle via a BIOS update, as they did with some of the HIXX chipsets, but that seems highly unlikely</li><br>
                <li>The chipset does not support CPU overclocking- Another shortcoming of the H270 chipset is that it takes also does not support CPU overclocking. This also ties in
				with the previous point as overclocking your 6<sup>th</sup> or 7<sup>th</sup>generation CPU might be a good way its performance up to par with the newer and superior processors.</li><br>
                 <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Supports dual AMD GPU setups.</li>
                  <li>Customizable and extendable RBG.</li>
                  <li>Great value for money.</li>


                </ul>
              </div>
                <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Not future proof</li>
                  <li>No CPU overclocking</li>
                </ul></div>

              </ul>
              </div>
            </div>
             </div>


            <div id="footer" align="center">
                <p>Copyright @ 2019 By Prithvi & Sesh</p>
            </div>

        </body>
    </html>
