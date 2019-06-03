<?php

session_start();

if(isset($_POST['login'])){


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

    mysqli_select_db($conn,"loginsystem");

    $uname = $_POST['user'];
    $password = $_POST['pass'];


    if(empty($uname) || empty($password)){
      header("Location: login.php?Login=empty");
      exit();
    }
    else{
      $sql = "SELECT * FROM login WHERE username = '$uname' AND password ='$password';";
      $result = mysqli_query($conn,$sql);
      $checkRes = mysqli_num_rows($result);

      if($checkRes == 1){
        $_SESSION['u_id'] = $row['userId'];
        $_SESSION['u_fname'] = $row['fname'];
        $_SESSION['u_lname'] = $row['lname'];
        $_SESSION['u_email'] = $row['email'];
        $_SESSION['u_pass'] = $row['password'];
        $_SESSION['u_name'] = $row['username'];
        header("Location: homepage.php?Login=successful");
      }
      else{
        header("Location: login.php?Login=error");
      }
    }
  }
else{
  header("Location: login.php?Login=error");
  exit();
}
    mysqli_close($conn);
?>
