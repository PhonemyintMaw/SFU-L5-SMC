<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/your-profile.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <?php
    session_start();
    
    include("./database/dbConn.php");
    include_once './nav_footer/nav.php'; 

    if(!empty($_SESSION['id'])){

        $userid = $_SESSION['id'];
        $result = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$userid'");
        $info = mysqli_fetch_assoc($result);      

    }
    else{
        header("location: login.php");
    }
    
    ?>

    <div class="body">
        <div class="profile-card">
            <h1>Your Registered Account</h1>
            <div class="profile-body">
                <div class="profile-pic">
                    <img src="./pic/icon/profile.png" class="profile-avatar mb-3" alt="User Profile Pic">
                </div>
                <div class="profile-content">
                    <p>User ID: <?php echo $info['id'] ?></p>
                    <p>First Name: <?php echo $info['f_name'] ?></p>
                    <p>Last Name: <?php echo $info['l_name'] ?></p>
                    <p>Email: <?php echo $info['email'] ?></p>
                </div>
            </div>
            <div class="profile-end">
                <a href="logout.php">
                    <button>
                        Log Out
                    </button>
                </a>
            </div>
            
        </div>
    </div>

    <?php
    include_once './nav_footer/footer.php'; 
    ?>

</body>
</html>
