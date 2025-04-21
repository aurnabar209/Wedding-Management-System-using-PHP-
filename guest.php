<!DOCTYPE html>
<html>
<head>
    <title>Website with PHP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('image/front.jpg'); /* Replace 'background_image.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
        }
       .header {
            background-color: rgba(51, 51, 51, 0.5); /* Adding some transparency to the header background */
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
       .logo img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
       .button-container {
            display: flex;
            justify-content: center; /* Center the buttons horizontally */
            align-items: center;
        }
       .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
        }
       .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="logo.jpg" alt="Company Logo"> <!-- Replace "company_logo.png" with your company logo image -->
    </div>
    <div class="button-container">
   
        <a href="guest.php"><button class="button">Home</button></a>
        <a href="pricing.php"><button class="button">Pricing</button></a>
        <a href="view_gallary.php"><button class="button">Gallery</button></a>
        <a href="contact-us.php"><button class="button">Contact Us</button></a>
        <a href="booking.php"><button class="button">Book Now</button></a>
    </div>
    <div>
        <a href="aboutus.php"><button class="button">About Us</button></a>
        <a href="admin_login.php"><button class="button">Admin</button></a>
        <a href="joinus.php"><button class="button">Join Us</button></a>
        <a href="logout.php"><button class="button">Log out</button></a>
    </div>
</div>

</body>
</html>