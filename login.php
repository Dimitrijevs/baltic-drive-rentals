<?php
    session_start();
?>

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
<!-- html form -->
        <?php } ?>