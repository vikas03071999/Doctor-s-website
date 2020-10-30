<?php
  $conn = mysqli_connect("localhost","root","","referrals");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
        }
  $email =$_POST['email'];
  $password=$_POST['password'];

  $sql="INSERT INTO `user` (`Email`, `Password`)
   VALUES ('$email', '$password');";
  mysqli_query($conn,$sql);
  header("Location:signupsuccess.php?Update=Success");
  mysqli_close();
?>