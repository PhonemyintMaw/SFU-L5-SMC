<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/signup_login.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <?php
    include("./nav_footer/nav.php");
    ?>

    <section id="content">

    <?php
    include("./database/dbConn.php");
    ?>

    <div class="body">
        <div class="sign_up_box">

            <h1>Sign Up</h1>
            
            <div class="content_box">

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

                <div class="fill_sec">

                    <div class="fill">
                        <label for="F_name">First Name</label>
                        <input type="text" id="F_name" class="info" name="firstname"
                        placeholder="Enter your First Name" required>
                    </div>

                    <div class="fill">
                        <label for="L_name">Last Name</label>
                        <input type="text" id="L_name" class="info" name="lastname"
                        placeholder="Enter your Last Name" required>
                    </div>

                    <div class="fill">
                        <label for="Email">Email Address</label>
                        <input type="email" id="Email" class="info" name="email"
                        placeholder="Enter your Email Address" required>
                    </div>

                    <div class="fill">
                        <label for="Password">Password</label>
                        <input type="password" id="password" class="info" name="password"
                        placeholder="Enter the Password" required>
                    </div>

                    <div class="agree">
                        <input type="checkbox" name="policy" id="policy" required>
                        <label for="policy"><a href="./legislation-and-guidance.php">Agree Our Policy</a></label>
                    </div>

                    <div class="fill submit-btn">
                        <input type="submit" value="Sign Up" class="create-btn" name="submit">
                        <p class="login-sec">Already have an account? Log In&nbsp;<a href="login.php">here</a></p>
                    </div>
                    
                </div>

            </form>

            </div>
            
        </div>
    </div>

    <?php
        include("./nav_footer/footer.php");
    ?>

    </section>

</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($firstname)){
            echo "Please enter your First Name.";
        }
        elseif(empty($lastname)){
            echo "Please enter your Last Name";
        }
        elseif(empty($email)){
            echo "Please enter Email Address";
        }
        elseif(empty($password)){
            echo "Please enter Password";
        }
        else{
            $sql = "INSERT INTO user_table (f_name, l_name, email, password) 
            VALUES ('$firstname', '$lastname', '$email', '$password')";
            try{
                mysqli_query($conn, $sql);
                echo '<script>alert("Registered Successfully!")</script>';
                header("location: your-porfile.php");
            }
            catch(mysqli_sql_exception){
                echo '<script>alert("Error Occured!")</script>';
            }
        }
    }

    mysqli_close($conn);
?>


