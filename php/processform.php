<?php

session_start();

if(isset($_POST['submit'])){
  $servername = "localhost";
  $username = "root";
  $password = "";

  //Create connection
  $conn = mysqli_connect($servername,$username,$password);

  //Check connection
  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }
  else{
    echo "Connected successfully"."<br>";
  }

//Create database
$sql = "CREATE DATABASE loginsystem";

if(mysqli_query($conn,$sql)){
  echo "Database created successfully"."<br>";
}

$logintable = "CREATE TABLE login(
userId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
username VARCHAR(20) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL );";

//Selecting the created database
if(mysqli_select_db($conn,"loginsystem")){
  echo "Successfully selected database"."<br>";

}
if(mysqli_query($conn,$logintable)){
  echo "Table created successfully";
}

//Executing create table query in database




  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //Error handlers
  //Check for empty fields
  if(empty($fname) || empty($lname) || empty($uname) || empty($email) || empty($password)){
    header("Location: register.php?Register=empty");
    exit();
  }
  else{
    //Check validity of input elements
    if(!preg_match("/^[a-zA-Z]*$/",$fname) || !preg_match("/^[a-zA-Z]*$/",$lname) || !preg_match("/^[a-zA-Z]*$/",$uname) ){
      header("Location: register.php?Register=invalid character in names");
      exit();
    }
    else{
      //Check validity of email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: register.php?Register=email");
        exit();
      }
      else{
        $sql = "SELECT * FROM login WHERE username = '$uname' OR email='$email';";
        $res = mysqli_query($conn,$sql);
        $checkRes = mysqli_num_rows($res);

        if($checkRes > 0){
          header("Location: register.php?Register=usertaken");
          exit();
        }
        else{
          //Hashing the password
          //$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
          //Insert the user into the database
          $insertsql = "INSERT INTO login (fname,lname,username,email,password) VALUES ('$fname','$lname','$uname','$email','$password')";
          mysqli_query($conn,$insertsql);
          header("Location: homepage.php?Register=registration successful");
          exit();
        }
      }
    }
  }
}
//if user enter name of next page directly in url, they are returned back to the form
else{
  header("Location: register.php");
  exit();
}

//Closing all connections with the database
mysqli_close($conn);

?>
