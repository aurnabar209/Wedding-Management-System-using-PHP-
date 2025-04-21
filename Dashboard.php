
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Buttons</title>
    <style>
        body {
			background: url('pink.jpg') center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            border: 2px solid #000;
            padding: 20px;
            border-radius: 10px;
            width: 300px; /* Adjust the width as needed */
            text-align: center;
        }

        .box-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .button-container {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            display: block;
            width: 150px;
            height: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="box-title">Admin</div>
        <div class="button-container">
            <?php
            $buttons = array(
                "Account" => "account.php",
                "Clients" => "Clients.php",
                "Gallery" => "gallary.php",
                "Users" => "users.php",
                "Wedding category" => "Wedding_category.php",
                "Log Out" => "logout.php"
            );

            foreach ($buttons as $label => $url) {
                echo "<button onclick=\"location.href='$url'\">$label</button>";
            }
            ?>
        </div>
    </div>
</body>
</html>