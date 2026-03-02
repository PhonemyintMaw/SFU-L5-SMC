<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/signup_login.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    

<section id="content">

    <?php
    session_start();
    $max_attempts = 3;
    $lockout_duration = 10 * 60;

    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
    }

    if (!isset($_SESSION['lockout_time'])) {
        $_SESSION['lockout_time'] = 0;
    }

    if ($_SESSION['lockout_time'] > time()) {
        echo "You are currently locked out. Try again in " . 
             ceil(($_SESSION['lockout_time'] - time()) / 60) . " minutes.";
        exit;
    }

    if(isset($_POST["login"])){
    
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "./database/dbConn.php";
        $sql = "SELECT * FROM user_table WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0){
            if($password == $row["password"]){
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];

                $_SESSION['login_attempts'] = 0;
                $_SESSION['lockout_time'] = 0;
                
                header("location: your-profile.php");
                
            }else{

                $_SESSION['login_attempts']++;

                if ($_SESSION['login_attempts'] >= $max_attempts) {
                    $_SESSION['lockout_time'] = time() + $lockout_duration;
                    echo '<script>alert("Too many failed attempts. You are locked out for 10 minutes.")</script>';
                } else {
                    echo '<script>alert("Password. You have ' . 
                        ($max_attempts - $_SESSION['login_attempts']) . ' attempts left.")</script>';
                }
            }
        }
        else{
            echo '<script>alert("Invalid Email")</script>';}
    }

    include("./nav_footer/nav.php"); 
    ?>

    <div class="body">
        <div class="sign_up_box">

                <h1>Log In</h1>

                <div class="content_box">

                    <form method="post" class="fill-sec">
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

                        <div class="fill submit-btn">

                            <input type="submit" class="create-btn" value="Log In" name="login">

                        </div>
                        
                    </form>
                
                </div>
                <div>
                        <p>Don't Have your Account?</p>
                        <p>Create one now!</p>

                        <form action="sign_up.php">
                            <div class="fill">
                                <button class="create-btn">Create Account</button>
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