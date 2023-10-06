<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #e74c3c;
            padding: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container-fluid {
            background-color: #f1c40f;
            border-radius: 20px;
            padding: 30px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 20px;
        }

        hr {
            border-color: rgb(118, 124, 248); 
            border-width: 3px;
            border-radius: 10px;
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        h3 {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
            display: flex;
            align-items: center;
        }

        img {
            width: 50px;
            margin-right: 10px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<?php
    $noHP = "087720926917";
    $email = "shevamilanowi@gmail.com";

?>
<body>
    <div class="container-fluid">
        <div class="page-header">
            <h1>Contact</h1>
        </div>
        <hr>
        <h3>
            <img src="telephone.png" alt=""> <?= $noHP ?>
        </h3>
        <h3>
            <img src="instagram.png" alt=""> <a href="https://www.instagram.com/milano_s.w/">Instagram</a>
        </h3>
        <h3>
            <img src="gmail.png" alt=""> <?= $email ?>
        </h3>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
