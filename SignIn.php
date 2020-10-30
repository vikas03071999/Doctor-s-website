<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Sign-Up-Form">
        <img src="user.png">;
        <h1> Sign In Now!</h1>
        <form action="SignInSubmit.php" method="post">
            <input type="email" class="input-box" placeholder="Your Email" name="email" required>
            <input type="password" class="input-box" placeholder="Your Password" name="password" required>
            <button type="submit"class="signupbtn" name="submit">Sign In</button>
            <p><a href="ResetPassword.php">Forgot your password...?</a></p>
            <hr>
            <p>Don't have an account ?</p>
            <button type="submit" name="submit" class="signupbtn" onclick="location.href='SignUp.php';">Sign Up Now</button>





        </form>
    </div>
    
</body>
</html>