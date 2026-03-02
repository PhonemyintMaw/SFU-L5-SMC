<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/about-us.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <section id="about-content">

        <?php
        include("./nav_footer/nav.php");  
        ?>

            <div id="head">
                <div class="about-head">
                    <h1>ABOUT US</h1>
                </div>
            </div>

            <div id="about-body">

                <div class="left-side">
                    <h1>Our Goal</h1>
                    <p>
                        Our Company's Goal is educating and organizing campaigns about safety usage of the social media to the teenagers. 
                        We believe that being safe online is as important as being safe offline and having presence on the internet has 
                        become dramatically large compared to last few decades, especially for the teen internet users. So, we believe that 
                        our mission provides valuable knowledge to not only teenagers but to the people of all ages.
                    </p>
                    <form action="./contact-us.php">
                        <button class="create-btn">Contact Us for more Info</button>
                    </form>
                    
                </div>

                <div class="right-side">
                    <img class="about-pic" src="./pic/wave.jpg" alt="">
                </div>
    
            </div>

        <?php
        include("./nav_footer/footer.php");
        ?>

    </section>


</body>
</html>