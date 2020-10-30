<?php
  $conn = mysqli_connect("localhost","root","","referrals");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  $name =$_POST['name'];
  $number=$_POST['number'];
  $disease=$_POST['disease'];
  $doctor=$_POST['doctor'];

  $sql="INSERT INTO `patient` (`Patient Name`, `Mobile Number`, `Disease`, `Doctor Referred To`)
   VALUES ('$name', '$number', '$disease', '$doctor');";
  mysqli_query($conn,$sql);
  header("Location:success.php?Update=Success");
  //echo "Update Successfully";
  mysqli_close();
?>