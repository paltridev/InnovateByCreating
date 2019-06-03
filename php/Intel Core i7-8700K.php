<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>INTEL CORE I7-8700K</title>
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
				<li>INTEL CORE I7-8700K </li>
			 </ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>INTEL CORE I7-8700K</h1>
                <div id="contentimage" align="center"><img src="../images/i7.jpeg" alt="processors" class="processors-img"></div>
              </div>
                                      <?php
                                            $query= "SELECT * FROM product WHERE id = 5";
                                            $result=mysqli_query($con1,$query);

                                            if (mysqli_num_rows($result)>0){
                                              while ($row=mysqli_fetch_array($result)){


                                             ?>

                                        <div class="productadd" align="center">
                                        <form method="post" action="cart.php?action=$id=<?php echo $row["id"] ?>">

                                        <div class="product1">

                                        <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
                                        <input type="hidden" name="id" value="5">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">And finally, we come to the mighty i7 models, the i7-8700K, to be exact. The i7 CPUs are some of the most powerful desktop processors, and this one is no different.

                    Like the rest of the Intel Core series, the i7 models have also received a core count bump. They have jumped to 6 physical and 12 logical cores, as opposed to the previous generation which has 4 physical and 8 logical cores. Moreover, the i7 CPUs are the only 8th generation Core CPUs to utilize Intel’s hyperthreading technology.

                    Ultimately, i7 processors are intended for demanding users, so they will not leave any gamer disappointed.<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>RAM support – Like the rest of the 8th generation Core series, the i7-8700K supports up to 64 GB of DDR4 RAM memory in single channel or dual-channel configurations.</li><br>
                <li>Integrated graphics – Once again, the i7-8700K utilizes Intel UHD Graphics 630 chip with a slightly higher clock speed when compared to the i5-8600K.</li><br>
                <li>Intel Optane Technology</li>
              </ul><br>
              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table2" align="center"><img src="../images/table2.png"></div>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Expensive – Seeing as the i7 processors are among the most powerful desktop CPUs, they naturally cost a lot. Therefore, make sure the performance offered by the i7-8700K is something that you truly need before investing several hundred dollars into this pricey piece of hardware.</li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Twelve logical cores</li>
                  <li>Remarkable overclocking performance</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>High price tag</li>
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
