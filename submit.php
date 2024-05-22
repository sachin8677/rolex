<?php

$conn = new mysqli("localhost","root","","rolex-watches");

if($conn->connect_error){
    echo "Connection failed";
}else{
    //echo "Connection Succeeded";
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO rolex (name, phone, email, message) VALUES ('$name','$phone','$email','$message')";
if($conn->query($sql)){
    // echo "Submission Succeeded";

    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - rolex</title>
    <link href="images/testimonial-bg.png" rel="icon">

    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-image: url('img/mq5-original-aspect.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .thank-you-message {
            background: rgba(0, 0, 0, 0.7); 
            padding: 30px 40px;
            border-radius: 10px;
        }
        .thank-you-message h1 {
            font-size: 2.5em;
            margin: 0 0 20px;
            color: white;
        }
        .thank-you-message p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .thank-you-message a {
            color: #ffffff;
            text-decoration: underline;
            font-size: 1.1em;
            /* justify-content:right;
            display: flex; */
        }
        .thank-you-message img {
            width: 100px;
            margin-bottom: 20px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap');

        body {
            font-family: Arial, sans-serif;
        }

        .cursive {
            font-family: 'Dancing Script', cursive;
        }
    </style>
</head>
<body>
    <div class="thank-you-message">
        <img src="images/testimonial-bg.png" alt=" Logo">
        <h1 class="cursive">Thank You!</h1>
        <p>Your submission has been received. stay in touch with rolex.</p>
        <p><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></p>
    </div>
</body>
</html>



    <?php
}else {
    // echo "Submission Failed";
    ?>

    <div class="success-message">
        <!-- <h2>Thank you for submitting!</h2> -->
        <p>Your form has not submitted. We will get back to you soon.</p>
        <p><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></p>
    </div>
    
    <?php
}
?>

