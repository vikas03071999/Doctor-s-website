<?php
  $conn = mysqli_connect("localhost","root","","referrals");
  $email =$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM user WHERE Email=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:SignIn.php?error=sqlerror");
      exit();
  }
  else{
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
      $result=mysqli_stmt_get_result($stmt);
      if($row=mysqli_fetch_assoc($result)){
      //  $pwdCheck=password_verify($password,$row['Password']);
        /*if($pwdCheck==true){
          session_start();
          header("Location:homepage.php?login=success");
          exit();
        }
        else if($pwdCheck==false){
          header("Location:SignIn.php?error=wrongpassword");
          exit();
        }*/
        if($row['Email']==$email && $row['Password']==$password){
          session_start();
          header("Location:homepage.php?login=success");
          exit();
        }
        else{
          header("Location:wrongpassword.php?error=wrongpassword");
          exit();
        }

      }
  }
  mysqli_close();

/*  $result=mysqli_query($conn,$query);
  if($row=mysqli_fetch_assoc($result)){
    header("Location:homepage.php?login=success");
  }
  else{
    header("Location:SignIn.php?login=failed");
  }*/
