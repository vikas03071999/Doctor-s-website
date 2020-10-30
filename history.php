<?php
  $conn = mysqli_connect("localhost","root","","referrals");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referral History</title>
</head>
<link rel="stylesheet" href="history.css">
<body>
    <h1> Referral History </h1><hr><br>
    <table border="1" cellpadding="10%" align="center">
    <?php
       $sql="SELECT * from patient;";
       $result =mysqli_query($conn,$sql);
       $resultcheck = mysqli_num_rows($result);
       if($resultcheck>0){
        echo '<tr>';
            echo '<th>'.'Patient Name'.'</th>';
            echo '<th>'.'Mobile Number'.'</th>';
            echo '<th>'.'Disease'.'</th>';
            echo '<th>'.'Doctor Referred To'.'</th>';
        echo '</tr>';    

           while($row=mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<th>'.$row['Patient Name'].'</th>';
            echo '<th>'.$row['Mobile Number'].'</th>';
            echo '<th>'.$row['Disease'].'</th>';
            echo '<th>'.$row['Doctor Referred To'].'</th>';
            echo '</tr>';  
    
           }
       }
    ?>
    </table>
    <a href="homepage.php"><h3 align='center'>Back to homepage </h3></a>

    
  
</body>
</html>
