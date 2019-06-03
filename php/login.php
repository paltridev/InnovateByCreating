<?php
session_start();
 ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>loginpage</title>
      <link rel="stylesheet" href="../css/styles.css" type="text/css">
      <link rel="stylesheet" type="text/css" href="../css/mystylecss.css">
      <link rel="stylesheet" type="text/css" href="../css/logstyle.css">
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

            </ul>
              </div>
            </div>
          </div>
        </div>

        <!--Navbar code ends-->

      <form action="validatelogin.php" class="box" method="post" onsubmit="return vali()">
        <h1>Login</h1>
        <input type="text" name="user" placeholder="Username" id="u">
        <input type="password" name="pass" placeholder="Password" id="p">
        <input type="submit" name="login" value="Login">
        <span id="spn"> </span>
      </form>


      <div id="footer">
          <p align="center">Copyright @ 2019 By Prithvi & Sesh</p>
      </div>

      <script>
      function vali(){
        var us = document.getElementById('u').value;
        var pa = document.getElementById('p').value;

        if(us==""){
          document.getElementById('spn').innerHTML="**Fill in the username field";
          return false;
        }
        else if(pa==""){
          document.getElementById('spn').innerHTML="**Fill in the password field";
          return false;
        }
      }
      </script>
    </body>
  </html>
