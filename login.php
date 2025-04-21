<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1> Admin Login </h1>
        <form name="form" action="guest_action.php" method="POST">
            <lebel> Email </lebel>
            <input type = "text" id="email" name="email"></br></br>
            <lebel> Password </lebel>
            <input type ="password" id="pass" name="pass"></br> </br>
			<input type = "submit" id="btn" value="Login" name="guest_submit"/>
			<button type="button" id="signup-btn" onclick="location.href='signup.php';">Sign Up</button>
        </form>
    </div>
</body>
</html>