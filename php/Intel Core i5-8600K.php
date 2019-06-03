<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>INTEL CORE I5-8600K</title>
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
				<li>INTEL CORE I5-8600K</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>INTEL CORE I5-8600K</h1>
                <div id="contentimage" align="center"><img src="../images/i5.jpg" alt="processors" class="processors-img"></div>
              </div>


                            <?php
                              $query= "SELECT * FROM product WHERE id = 4";
                              $result=mysqli_query($con1,$query);

                              if (mysqli_num_rows($result)>0){
                                while ($row=mysqli_fetch_array($result)){


                               ?>

                          <div class="productadd" align="center">
                          <form method="post" action="cart.php?action=$id=<?php echo $row["id"] ?>">

                          <div class="product1">

                          <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
                          <input type="hidden" name="id" value="4">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The Core i5 models were gamers’ favorites for a long time, as they did a remarkable job of balancing performance and price. And true enough, the most powerful 8th generation i5 CPU, the i5-8600K, continues this tradition.

                        Much like the i3 models, the i5 ones have also received an upgraded core count compared to the previous generation. Where we previously had 4, we now have 6 physical cores. Of course, it has been upgraded in almost every regard and is one of the most viable mid to high-end gaming processors.<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>RAM support – Much like the i3-8100, the i5-8600K supports single channel or dual-channel RAM configurations, up to a maximum capacity of 64 GB.</li><br>
                <li>Integrated graphics – Again, like the i3 model above, this i5 CPU uses the Intel UHD Graphics 630 chip, albeit it has a slightly higher clock. The performance remains mostly the same.</li><br>
                <li>Intel Optane Technology</li>
              </ul><br>
              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table1" align="center"><img src="../images/table1.png"></div>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Somewhat expensive – While they may have offered a great balance of performance and price, as stated in the intro, the i5 CPUs could never be called affordable. In this case, the processor is much closer to an 8th generation i7 model, and there are more affordable Ryzen CPUs in this range.</li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Six physical cores</li>
                  <li>Good overclocking potential</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>More cost-effective solutions exist</li>
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
