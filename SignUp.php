<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Sign-Up-Form">
        <img src="user.png">;
        <h1> Sign up Now!</h1>
        <form action="SignUpSubmit.php" method="post">
            <input type="email" class="input-box" placeholder="Your Email" name="email" required>
            <input type="password" class="input-box" placeholder="Your Password" name="password"required>
            <p><span><input type="checkbox"></span>I agree to the terms of services.</p>
            <button type="submit"class="signupbtn">Sign Up</button>
            <hr>
            <p>Already have an account?</p>
            <button type="submit" class="signupbtn" onclick="location.href='SignIn.php';">Sign In</button>





        </form>
    </div>
    
</body>
</html>