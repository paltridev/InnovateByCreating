<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ASUS PRIME Z370A</title>
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
				<li>Asus Prime Z370-A</li>
			  </ul>
			</div>


             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>The ASUS Prime Z370-A</h1>
                <div id="contentimage" align="center"><img src="../images/asusprime.jpg" id="motherboard-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 7";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=<?php echo $row["id"]; ?>">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="7">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The ASUS Prime Z370-A is a powerful motherboard with a non-invasive and sleek designs. The man body is black and white highlights
			  and it has several metallic heatsinks that establish it as a high quality product.The Taiwanese tech giant may be one of the most versatile tech companies in existence today. <br><br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul><li>CPU- With the latest Z370 chipset, this Asus Prime motherboard fully supports Intel's 8<sub>th</sub> Coffee Lake CPUs. Morevoer, it also supports the Intel Turbo Boost
			  Technology 2.0, which optimizes CPU performance.</li><br>
                <li>GPU – Thanks to the three high-speed PCIe 3.o slots, the motherboard is great for multi- GPU configurations.It supports Nvidia GPUs in dual SLI and AMD GPUs in triplr CrossFireX setups. </li><br>
                <li>RAM The Asus Prime Z370- A has four RAM slots and supports dual-channel RAM configurations. More importantly, it allows for extreme RAM overclocking, with maximum speeds going over 4000MHz–</li>
              </ul><br>
              <h2 id="abtmb">Additional Features<br></h2>
              <ul>
                <li>Aura Sync- The lightning technolgy used with most of Asus' gaming products is present here as well, although to a much lesser extent than in their RoG motherboards.It still allows for additional RGB strips to be added</li><br>
                <li>Optimized cooling- Seeing as it is a motherboard focused on overcooking, it is only natural that it should be designed with optimal cooling in mind.It has an array of sensors that prevent the hardware from getting damaged by keeping both the temperature and voltage in check.</li><br>
                <li>High-quality sound card- built in sound cards in most motherboards are average at best, but the one included in the Asus Prime Z370-A utilize a more advanced codec and its DTS Headphone X technology.</li></li></li>
              </ul>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Limited RBG- As we already stated, the motherboard is quite in this regard and will not provide any impressive lightning without additional RBG strips. </li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Excellent overclocking potential.</li>
                  <li>Latest Z370 chipset.</li>
                  <li>Great value.</li>


                </ul>
                  </div>
              <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>RGB not quite impressive</li>

                </ul>
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
