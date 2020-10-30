<?php
  $insert=false;
  // connecting to db
  $conn = mysqli_connect("localhost","root","");
  if(!$conn){
      die("Connection Failed".mysqli_connect_error());
  }
  $name=$_POST['name'];
  $mobile_number=$_POST['mobilenumber'];
  $disease=$_POST['disease'];
  $doctor=$_POST['doctor'];
  $sql =INSERT INTO 'referrals'.'patient'(`Patient Name`, `Mobile Number`, `Disease`, `Doctor Referred To`) 
  VALUES ('$name', '$mobile_number', '$disease', '$doctor');

  if($conn->query($sql)==true){
    echo"Patient added successfully";
  }
  else{
    echo "ERROR: $sql <br> $conn->error";
  }
  $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refer Patient</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Sign-Up-Form">
        <h1> Enter Patient Details</h1>
        <form action="patient.php" method="POST">
            <input type="text" class="input-box" placeholder="Enter the name of patient" id="name" name="name">
            <input type="number" class="input-box" placeholder="Mobile number of patient" id="number" name="number">
            <select id="Doctor">
                <option value="Choose a doctor">Choose a doctor</option>
                <option value="Dr.Ambani">Dr.Ambani</option>
                <option value="Dr.Ryzen">Dr.Ryzen</option>
            </select>
            <input type="text" class="input-box" placeholder="Disease"id="Disease" name="disease">
            <button type="button"class="signupbtn" >Submit</button>
        </form>
    </div>
    <br>
    <p align='center'><a href="homepage.htm">Go back to homepage</a></p>
    <!--INSERT INTO `patient` (`Patient Name`, `Mobile Number`, `Disease`, `Doctor Referred To`) VALUES ('Vikas Singh', '1354235136', 'Tumer', 'Dr Bhisma');-->
</body>
</html>