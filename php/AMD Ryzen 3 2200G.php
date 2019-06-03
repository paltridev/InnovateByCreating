<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>AMD RYZEN 3 2200G</title>
            <meta name="viewport" content="width=device-width, initial-scale=1,
            user-scalable=no"> <!-- to match navbar and pages in all screen for responsiveness-->
            <link rel="stylesheet" href="../css/styles.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/mystylecss.css">
        <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
        <script src="../cart-xml/js/netart-xml-cart.js"></script>
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
				<li>AMD RYZEN 3 2200G</li>
			</ul>
			</div>

             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1>AMD RYZEN 3 2200G</h1>
                <div id="contentimage" align="center"> <img src="../images/r3.jpg" alt="processors" class="processors-img"></div>
              </div>
            <?php
              $query= "SELECT * FROM product WHERE id = 1";
              $result=mysqli_query($con1,$query);

              if (mysqli_num_rows($result)>0){
                while ($row=mysqli_fetch_array($result)){


               ?>

          <div class="productadd" align="center">
          <form method="post" action="cart.php?action=$id=1">

          <div class="product1">

          <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
          <input type="hidden" name="id" value="1">
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
              <p id="indidetail" style="text-align: justify; font-size: 18px">The Ryzen 3 2200G is the successor to the first generation Ryzen 3 1200. This second generation Ryzen CPU has made some big strides, and not just in the CPU department. It offers everything that its predecessor did, and more, all the while coming at the same price tag.

                        It still has the same four physical cores as the 1200 model, although the performance has improved a fair bit due to optimizations. The biggest addition, however, is the integrated Vega 8 graphics chip which simply dwarfs the performance of Intel’s integrated graphics and can even compete with some low-end dedicated graphics cards.<br></p>
              <h2 id="abtmb">Supported Hardware<br></h2>
              <ul>
                <li>RAM support – The Ryzen 3 2200G supports DDR4 RAM in single or dual-channel configurations and a total maximum capacity of 64 GB.</li><br>
                <li>AMD SenseMI Technology – SenseMI was introduced with Ryzen CPUs as a form of smart technology that optimized CPU performance on every level: power consumption, clock speed, etc.</li><br>
                <li>Vega 8 Integrated GPU – As mentioned above, AMD’s new integrated graphics solution is ahead of everything that Intel has to offer, making them a prime choice if you don’t intend on getting a dedicated graphics card.</li>
              </ul><br>
              <h2 id="abtmb">Specifications and Features<br></h2>
              <div id="table3" align="center"><img src="../images/table3.png"></div>
              <br>
              <h2 id="abtmb">Downsides<br></h2>
              <ul>
                <li>Needs a third-party cooler for overclocking – High heat generation of the AMD CPUs had been the running joke during the FX-series’ time, and while the Ryzen models are very well optimized in this department, this particular model’s high factory clock speed means that there is little room for overclocking unless you invest in an aftermarket cooler.</li><br>
                <li>May require BIOS updates – If you intend on installing this CPU on a motherboard with a previous generation chipset, make sure that it is compatible and update the BIOS ahead of time, if necessary.</li><br>
                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>Very affordable</li>
                  <li>Good performance</li>
                  <li>Excellent integrated graphics</li>
                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>Stock cooler won’t handle overclocking</li>
                  <li>Last gen motherboards may need BIOS updates</li>
                </ul></div>
            </div>
              </ul>
              </div>
            </div>

  <div id="popup" class="alert alert-warning"></div>

            <div id="footer" align="center" >
                <p>Copyright @ 2019 By Prithvi & Sesh</p>
            </div>

        </body>
    </html>
