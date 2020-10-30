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
        <form action="Submit.php" method="POST">
            <input type="text" class="input-box" placeholder="Enter the name of patient" name="name" required>
            <input type="number" class="input-box" placeholder="Mobile number of patient" name="number" required>
            <select name="doctor" required>
                <option value="No Doctor Selected">[Choose Doctor Below]</option>
                <option value="Dr.Soul Mortal">Dr.Soul Mortal</option>
                <option value="Dr.Scout">Dr.Scout</option>
                <option value="Dr.Jonathan ">Dr.Jonathan</option>
            </select>
            <input type="text" class="input-box" placeholder="Disease"id="Disease" name="disease">
            <button type="submit"class="signupbtn" name="submit" >Submit</button>
        </form>
    </div>
    <br>
    <p align='center'><a href="homepage.php">Go back to homepage</a></p>
    
</body>
</html>