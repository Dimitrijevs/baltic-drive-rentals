<?php
    session_start();
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
    <title>Login Page</title>
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
    
    <div class="container">
        <div class="box form-box">

        <?php
            include("php/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND Password = '$password'") or die("Select errorss.");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                    } else {
                        echo "<div class='message'>
                            <p>Wrong username or password</p>
                        </div>";
                        echo "<button><a href='register.php'>Register Now!</a></button>";
                    }

                    if(isset($_SESSION["valid"])){
                        header("Location: profile.php");
                    }
                } else {
            ?>

            <header>Log In Form</header>
            <form action="" method="post">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Log In!" required>
                </div>

                <div class="field form-reg">
                    Don't have account?<a href="register.php">Sign up now!</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>