<!DOCTYPE html>

<html>
<head>

    <title>Innovate By Creating - registration</title>
	<link rel="stylesheet" href="../css/formstyle.css" type="text/css">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
</head>

<body>

<div id=col><p id="page-title" align="center"> Create a new account</p></div>


<form class="center" action="processform.php" method="post" id="registration" onsubmit="return val()">

    <table id="table" width="500" height="600" align="center">
        <tr><td>First name:</td><td><input type="text" id="first" name="fname" placeholder="First name only" maxlength="12" class="field"</td></tr>
        <tr><td>Last name: </td><td><input type="text" id="last" name="lname" placeholder="Last name only" maxlength="12" class="field"></td></tr>
        <tr><td>Username:</td><td><input type="text" id="usern" name="uname" placeholder="Username only" maxlength="12" class="field"></td></tr>
        <tr><td>Email:</td><td> <input type="email"id="mail" name="email" placeholder="Valid email address" class="field"></td></tr>
        <tr><td>Password:</td><td> <input type="password" id="pass1" placeholder="At least 8 characters" name="password" class="field"></td></tr>
        <tr><td>Confirm Password:</td><td> <input type="password" id="pass2" placeholder="At least 8 characters" class="field"></td></tr>
        <tr><td><span id="spann"> </span></td></tr>
        <tr><td><div id="checkbox" align="center"><input type="checkbox" name="check">By creating an account, you agree to Innovate's Conditions of Use and Privacy Note</div></td></tr>
        <tr><td><button class="btn" type="reset" name="reset" value="Reset">Reset</button></td>
        <td><button class="btn" type="submit" name="submit" value="Submit">Submit</button></td></tr>



    </table>
</form>


    <div id="footer">
        <p align="center">Copyright @ 2019 By Prithvi & Sesh</p>
    </div>

    <script>
    function val(){
      var a = document.getElementById('first').value;
      var b = document.getElementById('last').value;
      var c = document.getElementById('usern').value;
      var d = document.getElementById('mail').value;
      var e = document.getElementById('pass1').value;
      var f = document.getElementById('pass2').value;


      if(a==""){
        document.getElementById('spann').innerHTML="**Fill in the first name field";
        return false;
      }
      else if(b==""){
        document.getElementById('spann').innerHTML="**Fill in the last name field";
        return false;
      }
      else if(c==""){
        document.getElementById('spann').innerHTML="**Fill in the username field";
        return false;
      }
      else if(d==""){
        document.getElementById('spann').innerHTML="**Fill in the email field";
        return false;
      }
      else if(e==""){
        document.getElementById('spann').innerHTML="**Fill in the password field";
        return false;
      }
      if(e.length<8){
        document.getElementById('spann').innerHTML="**Your password needs to be at least 8 characters";
        return false;
      }
      else if(f==""){
        document.getElementById('spann').innerHTML="**Confirm your password";
        return false;
      }
      else if(e!=f){
        document.getElementById('spann').innerHTML="**Your password does not match";
        return false;
      }

    }
    </script>

</body>
</html>
