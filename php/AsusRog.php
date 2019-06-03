<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ASUS ROG ZENITH EXTREME</title>
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
				<li>ASUS ROG ZENITH EXTREME</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>ASUS ROG ZENITH EXTREME</h1>
                <div id="contentimage" align="center"><img src="../images/asuszenith.jpg" id="motherboard-img"></div>
              </div>

                                          <?php
                                            $query= "SELECT * FROM product WHERE id = 10";
                                            $result=mysqli_query($con1,$query);

                                            if (mysqli_num_rows($result)>0){
                                              while ($row=mysqli_fetch_array($result)){


                                             ?>

                                        <div class="productadd" align="center">
                                        <form method="post" action="cart.php?action=$id=<?php echo $row["id"]; ?>">

                                        <div class="product1">

                                        <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
                                        <input type="hidden" name="id" value="10">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The RoG Zenith Extreme.Like most gaming motherboards, it is predominantly black in color,
              with prominent heatsinks and RGB lighting. But the area where this motherboard truly shines is not RGB,
              but its technical capabilities.<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>CPU – The RoG Zenith Extreme comes with AMD’s massive TR4 socket and the X399 chipset,
                both designed to host the company’s Ryzen Threadripper CPUs, the most powerful processors that AMD had built so far.</li><br>
                <li>GPU – The motherboard truly takes its PCIe x16 slot count to an extreme, as it has a total of four of them. Furthermore,
                it supports both CrossFireX and SLI, thus allowing for 4-way GPU setups for all graphics cards supporting the aforementioned technologies.</li><br>
                <li>RAM – The Zenith Extreme has eight RAM slots,
                utilizes quad-channel memory and is capable of supporting up to 128 GB of RAM. Moreover, the supported clock speeds range up to 3600 MHz.</li>
              </ul><br>
              <h2 id="abtmb">Additional Features<br></h2>
              <ul>
                <li>Aura Sync – The RoG Zenith Extreme comes with the Aura RGB lighting found in almost every piece of hardware branded by RoG.
                As always, it provides the user with a high degree of customization and a variety of dynamic effects to breathe life into their gaming rig.</li><br>
                <li>RoG Areion – Coming bundled with the motherboard is the Areion, a high-quality Ethernet adapter that plugs into one of the board’s
                PCIe expansion slots. It is extremely fast,supporting a maximum throughput of up to 10 GbE.
                That said, people with high demands for their local network will surely appreciate this addition.</li><br>
                <li>Advanced cooling – As expected from a motherboard of this caliber, it not only supports smart cooling, additional fans,
                and water-cooling solutions but even has one fan already built into its upper left heatsink.
                All of this makes it a great motherboard for overclocking.</li>
              </ul>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Extremely expensive - Needless to say, with extreme performance also comes an extreme price. At the moment, the Zenith Extreme
                sports a price tag becoming that of a mid-high range GPU,but for people who are determined to
                make full use of this motherboard’s capabilities, this shouldn’t prove too much of an expense.</li><br>
                <li>Large - In order to accommodate all the PCIe slots required in order to support 4-way SLI/CrossFireX,
                the motherboard had to have an E-ATX design.This means that the Zenith Extreme is quite a bit larger than your average ATX motherboard
                and will require a Full Tower computer case in order to fit.</li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Ryzen Threadripper supported</li>
                  <li>4-way SLI/CrossFireX</li>
                  <li>Up to 128 GB of RAM</li>
                  <li>Great overclocking potential</li>
                  <li>RoG Areion</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Incredibly high price</li>
                  <li>E-ATX format will require a Full Tower case</li>
                </ul></div>





            <div id="footer" align="center">
                <p>Copyright @ 2019 By Prithvi & Sesh</p>
            </div>

        </body>
    </html>
