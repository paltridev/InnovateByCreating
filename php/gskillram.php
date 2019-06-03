<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title> G.Skill Trident ZRBG</title>
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
				<li><a href="swipeContents1.php">RAM</a></li>
				<li> G.Skill Trident ZRBG</li>
			 </ul>
			</div>
             <div id="contentpg" style="background-color:#dadfe1;">
              <div id="first_m">
                <h1> G.Skill Trident ZRBG</h1>
                <div id="contentimage" align="center"><img src="../images/gskillram.png" id="motherboard-img"></div>
              </div>
              <?php
                $query= "SELECT * FROM product WHERE id = 11";
                $result=mysqli_query($con1,$query);

                if (mysqli_num_rows($result)>0){
                  while ($row=mysqli_fetch_array($result)){


                 ?>

              <div class="productadd" align="center">
              <form method="post" action="cart.php?action=$id=11">

              <div class="product1">

              <input type="text" name="quantity" class="form-control" value="1" style="width: 100px; height: 50px;">
              <input type="hidden" name="id" value="11">
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
              <h2 id="abtmb">About the product<br></h2>
              <p id="indidetail" style="text-align: justify; font-size: 18px">G.Skill is perhaps not as well-known as Kingston or Corsair, but that certainly does not make them less reliable. This Taiwanese company specializes in memory-related hardware such as SSDs,
			    flash drives, and RAM, in addition to some gaming peripherals.
				The product that G.Skill brings us today is the Trident Z RGB, arguably the best-looking solution on this list, all thanks to that metallic exterior and beautifully implemented RGB lighting that you can see above. But of course, you are not buying RAM
				in order to look at it, so what does the Trident Z offer in practical terms?<br></p>

              <h2>Features<br></h2>
                <h2 id="abtmb">Performance</h2>
				<p  style="text-align: justify; font-size: 18px">The Trident Z RGB RAM modules operate on frequencies anywhere from 2400 MHz to 4233 MHz. The product does not strive to dominate in terms of overclocking capacity, so a number of variations with such high clock
				speeds are quite few.A more realistic maximum is around 3600 MHz, as most of the series’ products fall into that category.</p>
                <h2 id="abtmb">Capacity</h2>
				<p  style="text-align: justify; font-size: 18px">The Trident Z RGB series includes RAM cards with either an 8 GB or 16 GB capacity, which are then combined in kits to achieve a maximum capacity of 128 GB. The same story from before applies here, and 4×16 GB
				variation is a more realistic maximum for desktop configurations.</p>
				<br>


                <div id="likewrapper">
                  <div id="proscons">
                <h2 style="text-align: center;">What we loved</h2>
                <ul>
                  <li>High quality RGB lightning.</li>
                  <li>Great overall value.</li>

                </ul>
              </div>
               <div id="proscons1">
                <h2 style="text-align: center;">What we didn't like</h2>
                <ul>
                  <li>RBG implementation limits overclocking potential.</li>
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
