<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Registration Page</title>
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
                if(isset($_POST["submit"])){
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $age = $_POST["age"];
                    $password = $_POST["password"];

                    // verifying unique email 
                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");
                    
                    if(mysqli_num_rows($verify_query) !=0){
                        echo "<div class='message'>
                            <p>This email already exists!</p>
                        </div>";
                        echo "<button><a href='register.php'>Register Now!</a></button>";
                    } else {
                        mysqli_query($con, "INSERT INTO users(Username, EMail, Age, Password) VALUES ('$username', '$email', '$age', '$password')") or die("Error");

                        echo "<div class='message'>
                            <p>Registred succesfully!</p>
                        </div>";
                        echo "<button><a href='login.php'>Login Now</a></button>";

                    }
                } else {


            ?>

            <header>Registration Form</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Sign Up!" required>
                </div>

                <div class="field form-reg">
                    Already have account?<a href="login.php">Sign in now!</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>