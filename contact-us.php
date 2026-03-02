<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/contact-us.css">

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
        
            <div class="body">
                <div class="message-box">
                    <h1>Message Us</h1>
                    <hr>

                    <div class="box-content">

                        <div class="left-sec">
                            <div class="fill">
                                <label for="Full-Name">Full Name</label>
                                <input type="text" id="Name" class="info" 
                                placeholder="Enter your Name" required>
                            </div>
                            <div class="fill">
                                <label for="Email">Email Address</label>
                                <input type="email" id="Email" class="info" 
                                placeholder="Enter your Email Address" required>
                            </div>
                            <div class="fill-text">
                                <label for="Message">Your Message</label>
                                <textarea name="message" id="message" rows="8"></textarea>
                            </div>

                            <div>
                                <input type="checkbox" name="policy" id="policy" required>
                                <label for="policy"><a href="./legislation-and-guidance.php">Agree Our Policy</a></label>
                            </div>

                            <div class="button-sec">

                                <form action="" method="post">
                                <input type="submit" value="Send" class="send-btn" name="send">               
                                </form>

                            </div>
                        </div>

                        <hr class="divide">

                        <div class="right-sec">

                            <div class="company-contact">
                                <div>
                                    <img class="contact-icon" src="./pic/icon/email.png" alt="email-icon">
                                </div>
                                <div class="content">
                                    <h5>Company Email</h5>
                                    <p>smc.ltd@gmail.com</p>
                                </div>
                            </div>

                            <div class="company-contact">
                                <div>
                                    <img class="contact-icon" src="./pic/icon/telephone.png" alt="phone-icon">
                                </div>
                                <div class="content">
                                    <h5>Company Phone</h5>
                                    <p>+959 1234567</p>
                                </div>
                            </div>

                            <div class="company-contact">
                                <div>
                                    <img class="contact-icon" src="./pic/icon/location.png" alt="location-icon">
                                </div>
                                <div class="content">
                                    <h5>Location</h5>
                                    <p>Yangon, Myanmar</p>
                                </div>
                            </div>

                            <div class="company-contact">
                                
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="map">
                <h2>Find Us Offline</h2>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244399.1590480169!2d96.01676338629113!3d16.83940535828606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2sth!4v1724576681690!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        <?php
            include("./nav_footer/footer.php");
        ?>
    </section>


</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo '<script>alert("Message Sent Successfully! We will reply as soon as possible!")</script>';
    }


?>