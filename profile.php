<?php

    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Profile Page</title>
</head>
<body>
    <nav class="nav-bar">
        <a href="index.html"><img src="images/logo.png" alt="Error"></a>
        <ul>
            <li class="nav-item"><a href="history-page.html">History Page</a></li>
            <li class="nav-item"><a href="rental-terms.html">Rental Terms</a></li>
            <li id="special"><a href="car-list.html">Our Car List</a></li>
            <li class="nav-item"><a href="prices.html">Prices</a></li>
            <li class="nav-item"><a href="profile.php">Profile Page</a></li>
            <li class="nav-item"><a href="login.php">Log in</a></li>
        </ul>
    </nav>

        <div class="right-links">

            <?php
                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id = $id");
            
                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_id = $result['Id'];
                }
            ?>
            <a href="php/logout.php"><button>Log Out</button></a>
        </div>


    <div class="main-box">
        <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, welcome!</p>
                <p>Your emial is: <b><?php echo $res_Email ?></b></p>
                <p>Age <b><?php echo $res_Age ?></b> years</p>
            </div>
            <div class="rent-history">
                <h1>Your car rent history</h1>
            </div>
        </div>
    </div>
</body>
</html>