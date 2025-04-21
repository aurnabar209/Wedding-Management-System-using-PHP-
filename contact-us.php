
<?php
include('connection.php');

$query = $sql= "select  concat(firstname,' ',lastname) as name ,email,address from admin where id=4";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No contact information found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Aishwarya Wedding Planner</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('image/front.jpg'); /* Replace '1331188.png' with the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            color: #fff;
        }
       .contact-container {
            background-color: rgba(255, 255, 255, 0.9); /* White background with some transparency */
            color: #333;
            padding: 100px;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       .contact-container h2 {
            text-align: center;
            color: #000;
        }
       .contact-info {
            margin-top: 20px;
        }
       .contact-info p {
            margin: 10px 0;
        }
       .contact-info p i {
            margin-right: 10px;
        }
       .social-icons {
            text-align: center;
            margin-top: 20px;
        }
       .social-icons a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
            font-size: 24px;
        }
       .social-icons a:hover {
            color: #0056b3;
        }
       .footer {
            text-align: center;
            margin-top: 50px;
            color: #fff;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="contact-container">
    <h2>Get in Touch</h2>
    <div class="contact-info">
        <p><strong>Wedding Management System</strong></p>
        <p><i class="fas fa-map-marker-alt"></i><?php echo $row['address'];?></p>
        <p><i class="fas fa-phone-alt"></i>0154158533</p>
        <p><i class="fas fa-envelope"></i><?php echo $row['email'];?></p>
    </div>
    <div class="social-icons">
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
    </div>
</div>

<div class="footer">
    <p>&copy; Copyright <strong>Wedding Management System</strong>. All Rights Reserved</p>
    <p>Designed by Ameer and Sunehra</p>
</div>

</body>
</html>