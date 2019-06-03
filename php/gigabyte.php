<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>GIGABYTE X299 AORUS</title>
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
				<li>GIGABYTE X299 AORUS</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>GIGABYTE X299 AORUS</h1>
                <div id="contentimage" align="center"><img src="../images/gigabyte.jpg" id="motherboard-img"></div>
              </div>

                            <?php
                              $query= "SELECT * FROM product WHERE id = 9";
                              $result=mysqli_query($con1,$query);

                              if (mysqli_num_rows($result)>0){
                                while ($row=mysqli_fetch_array($result)){


                               ?>

                          <div class="productadd" align="center">
                          <form method="post" action="cart.php?action=$id=<?php echo $row["id"]; ?>">

                          <div class="product1">

                          <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
                          <input type="hidden" name="id" value="9">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The Gigabyte X299 AORUS Ultra Gaming is just as grandiose as its name
			  implies.IT is one of the most advanced and expensive motherboards current on the market. The mian is black and adorned with dark grey
			  patterns<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>CPU – With its LGA2066 socket and X299 chipset, the Aorus Ultra Gaming motherboard is designed with the 7<sup>th</sup> generation of Intel’s X-series CPUs, the most powerful processors currently on the market.
                What’s more, it supports Intel Turbo Boost Max Technology 3.0, thus allowing you to get the absolute maximum out of these already powerful CPUs.</li><br>
                <li>GPU – The motherboard has a total of 5PCle 30 slots, and is capable of running 2 or 3 GPUs in SLI or CrossFireX with PCIe speed
				 and number of supported GPUs depending on the CPU model .</li><br>
                <li>RAM – As expected from a high-end motherboard, it has a total of 8 RAM slots, meaning that it supports a maximum RAM capacity of 128 GB. Moreover, it supports speeds of up to 4400 MHz.</li>
              </ul><br>
              <h2 id="abtmb">Additional Features<br></h2>
              <ul>
                <li>RGB Fusion - The Auros Ultra Gaming motherboard comes with some of the more advanced lightning out there.The LED lights can be customized
				in great detail, it can also be cycled between a variety of presents.</li><br>
                <li>Top-quality Sound Card- The soud card can also comes wiith a smart headphone amplifier and the Creative Sound Blaster 720
				audio engine.</li><br>
                <li>Advanced cooling - The motherboard boasts SmartFam 5 technology designed to optimize cooling and optimize your gaming experience
				with the help of a total of nine temperatures sensors. It has 8 additional pin headers that allow up to six fans and two water pumps to be installed</li>
                <li>Intel Optane Technology – It is only natural that a motherboard designed to work with some of Intel’s most powerful CPUs would also support
                the company’s Optane technology. As always, it provides a great alternative to SSDs, although it cannot quite match them in terms of performance.</li>
				</li>
              </ul>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>High Price Tag - Since we're talking about one of the best motherboards made to work with Intel i9 buck processors,
				in addition to all of its features, it is quite obvious from the get to that it is going to cost quite a few.</li><br>
                <li>Dubios Forward compablilty - The 8<sup>th</sup> generation of Intel processors is on the way, and it is unclear if the new
				i9 CPUs will be compatible wuth the X299 chipsets or if they will require a newer version instead.</li><br>
                   <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Intel X-series supproted</li>
                  <li>Optimize smart cooling for best gaming and overclocking experience.</li>
                  <li>2-way and 3-way SLI/CrossFireX</li>
                  <li>Maximum RAM capacity</li>

                </ul>
              </div>
                <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Expensive</li>
                  <li>Might not be compatible with 8th generation i9 CPUs</li>
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
