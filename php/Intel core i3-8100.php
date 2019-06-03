<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>INTEL CORE I3-8100</title>
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
				<li><a href="swipeContents3.php">Processor</a></li>
				<li>INTEL CORE I3-8100</li>
			 </ul>
			</div>


             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>INTEL CORE I3-8100</h1>
                <div id="contentimage" align="center"><img src="../images/core13.jpg" alt="processors" class="processors-img"></div>
              </div>

              <?php
                $query= "SELECT * FROM product WHERE id = 3";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=3">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="3">
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
              <h2 id="abtmb">About the Processor<br></h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">The first entry on this list is also the first 8th generation Intel Core i3 CPU in the series. Unlike the previous generation i3 models which were all dual-core processors that relied on hyperthreading as the means of matching quad-core performance, the latest i3 CPUs all have 4 physical cores.

                    This is Intel’s response to AMD’s new Ryzen 3 CPUs which dethroned the previous generation’s i3 processors mid-2017, which is evident from the increased physical core count. All in all, the Core i3-8100 is an excellent entry to mid-range solution for gaming, and we will see exactly why.<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>RAM support – The i3-8100 supports up to 64 GB of DDR4 RAM memory in single or dual-channel setups.</li><br>
                <li>Integrated graphics – The CPU also utilizes the latest Intel UHD Graphics 630, a 4K-capable integrated graphics chip.</li><br>
                <li>Intel Optane Technology – A technology introduced with the 7th gen CPUs, it relies on an additional PCIe module to optimize HDD performance and help it match SSDs. Keep in mind that both the CPU and the motherboard need to support Optane in order for it to work.</li>
              </ul><br>
              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table" align="center"><img src="../images/table.png"></div>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Not cost-effective for overclocking – Indeed, the i3-8100 can be overclocked but the problem does not lie with it. Rather, it lies in the motherboard. Namely, there are no affordable Z370 motherboards currently available, and Z370 is the only 8th generation Intel chipset that supports overclocking. Needless to say, not many will be keen on spending roughly an equal amount of money on their CPU and their motherboard.</li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Low power consumption</li>
                  <li>Affordable</li>
                  <li>Great value for money</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>No affordable motherboards for overclocking at the moment</li>
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
