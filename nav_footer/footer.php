<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navigation</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/nav-foot.css">

</head>
<body>

    <section id="foot">
        <h3>
            You are here: 
                <span>
                <?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>
                </span>
             Page
        </h3>
        <h2>Follow Us On Our Social Media</h2>
        <div class="media-list">
    
                <form action="https://www.facebook.com/" target="_blank">
                    <button class="media-btn">
                        <img class="media-icon" src="./pic/icon/fb100.png" 
                        alt="FB icon">
                    </button>
                </form>
    
                <form action="https://www.instagram.com/" target="_blank">
                    <button class="media-btn">
                        <img class="media-icon" src="./pic/icon/inst100.png" 
                        alt="Inst Icon">
                    </button>
                </form>
    
                <form action="https://www.twitter.com/" target="_blank">
                    <button class="media-btn">
                        <img class="media-icon" src="./pic/icon/twt100.png" 
                        alt="Twit Icon">
                    </button>
                </form>
    
                <form action="https://www.youtube.com/" target="_blank">
                    <button class="media-btn">
                        <img class="media-icon" src="./pic/icon/yt100.png" 
                        alt="YT Icon">
                    </button>
                </form>
    
        </div>
        
        <div class="copy-right">
            <p>&#169;2024 SMC Co., Ltd</p>
        </div>
    </section>
    
</body>
</html>