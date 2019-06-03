<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>AMD RYZEN 5 2600X</title>
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
				<li><a href="swipeContents3.php">Processors</a></li>
				<li>AMD RYZEN 5 2600X</li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>AMD RYZEN 5 2600X</h1>
                <div id="contentimage" align="center"><img src="../images/r5.jpg" alt="processors" class="processors-img"></div>
              </div>

              <?php
                $query= "SELECT * FROM product WHERE id = 2";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

            <div class="productadd" align="center">
            <form method="post" action="cart.php?action=$id=<?php echo $row["id"] ?>">

            <div class="product1">

            <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
            <input type="hidden" name="id" value="2">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The Ryzen 5 2600X is the successor to one of the earliest Ryzen models to be released. It delivers a moderate performance boost compared to the older model, but doesn’t introduce any revolutionary new technology.

                  The most notable feature remains the same one that was available with its predecessor: 6 physical cores and 12 logical cores. As such, this CPU offers twice the thread count of its similarly-priced Intel counterpart. Combine that with the relatively high base clock speed, and it becomes clear as to why this CPU is one of the top picks for gaming PCs.<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>RAM support – The Ryzen 5 2600X also supports DDR4 RAM in single or dual-channel configurations and a total maximum capacity of 64 GB.</li><br>
                <li>AMD SenseMI Technology</li><br>
                <li>AMD StoreMI Technology – StoreMI is a new technology developed by AMD that is designed to fulfill the same function as Intel’s Optane tech. It uses an SSD to optimize the performance of an HDD by relying on the former to cache data.</li>
              </ul><br>
              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table4" align="center"><img src="../images/table4.png"></div>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Performance still lagging behind – While the many threads give the 2600X an upper hand when it comes to multi-threaded tasks, the single-core performance is lacking compared to the competing models made by Intel.</li><br>

                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Most affordable 6-core 12-thread CPU</li>
                  <li>Unprecedented value for money</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>In-game performance not as good as Intel’s competing models</li>

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
