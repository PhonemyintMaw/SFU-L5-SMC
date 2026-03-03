<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/home.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title id="page_name">Home</title>
</head>
<body>
    <section id="content-body">
    
        <?php
        include("./nav_footer/nav.php");

        $content = [
            "<a class='search-link' href='#sm-sect'> What is Social Media </a>",
            "<a class='search-link' href='#tb'> Impacts of Social Media on Teenagers' brain </a>",
            "<a class='search-link' href='#ss'> Safe usage of Social Media: A right way to use them! </a>",
            "<a class='search-link' href='#sb'> Subscirbe to Our Newsletter </a>"
        ];
        
        $searchTerm = '';
        $searchResults = [];
        if (isset($_POST['search-content'])) {
            $searchTerm = trim($_POST['search-content']);
            
            if (!empty($searchTerm)) {
                foreach ($content as $line) {
                   
                    if (stripos($line, $searchTerm) !== false) {
                        
                        $highlightedLine = str_ireplace($searchTerm, "<span class='highlight'>{$searchTerm}</span>", $line);
                        $searchResults[] = $highlightedLine;
                    }
                }
            }
        }
        ?>
        
        <div id="head">
                    
            <div class="head-title">
                            
                <h2>Staying Safe on Social Media</h2>
                        
                <h2>A Guide for All Teenagers</h2>
                            
            </div>
                    
        </div>
        
        <div id="content">
        
            <div class="searchbar">
                    
                <form class="form-inline" method="post">

                    <input class="form-control mr-sm-2" name="search-content" type="search" placeholder="Search for Contents" aria-label="Search">

                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>

                </form>
        
            </div>

            <div class="search-results">
                
                    <h2 class="result-message" >Search Results Will Appear Down Here</h2>
                    <?php if (!empty($searchTerm)):?>
                        <h3>Search Results for "<?php echo htmlspecialchars($searchTerm); ?>"</h3>
                        <?php if (!empty($searchResults)): ?>
                            <ul>
                                <?php foreach ($searchResults as $result): ?>
                                    <li><?php echo $result; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p>No results found.</p>
                        <?php endif; ?>
                    <?php endif; ?>
    
            </div>
        
            <hr>

            <div id="sm-sect" class="segment">
                <div class="social-media">

                    <h2>What is Social Media?</h2>

                    <p class="sect">
                    <span class="p-span"></span> Social media is a collective term for websites and applications that focus on communication, community-based input, interaction, content-sharing and collaboration.People use social media 
                    to stay in touch and interact with friends, family and various communities. Businesses use social applications to market and promote their products and track customer concerns. The most popular social media apps are Facebook, Instagram and X (Formerly Twitter).
                    </p>

                    <div class="social-media-icons">

                        <div class="s-icon">
                            <img src="./pic/logos/facebook.png" alt="Facebook">
                        </div>

                        <div class="s-icon">
                            <img src="./pic/logos/instagram.png" alt="Instagram">
                        </div>

                        <div class="s-icon">
                            <img src="./pic/logos/x.jpg" alt="X">
                        </div>

                        <div class="s-icon">
                            <img src="./pic/logos/linkedin.png" alt="Linked In">
                        </div>
                        
                        <div class="s-icon">
                            <img src="./pic/logos/youtube.png" alt="Youtube">
                        </div>
                        
                        <div class="s-icon">
                            <img src="./pic/logos/tiktok.png" alt="Tik Tok">
                        </div>
                        
                    </div>

                    <a class="content-link" href="./social-media.php">For more read</a>

                </div>
            </div>

            <hr>

            <div id="tb" class="segment">

                <div class="teenage-brain-content">
                    <h2>
                        What impacts could Social Media have to the Teenagers' Brains
                    </h2>
                    <p>
                    <span class="p-span"></span> Social media can have both positive and negative effects on teenage brains. While it can foster connection, creativity, and learning, it also poses risks to mental health, emotional well-being, and cognitive development. The impact largely depends on how much time is spent online, the type of content consumed, and how it is integrated into a teen's daily life.
                    </p>
                    <a class="content-link" target="_blank" href="https://www.apa.org/news/apa/2022/social-media-children-teens">For more read</a>
                </div>

            </div>
            
            <div id="ss" class="segment">

                <div class="safe">

                    <h2>Right way to use Social Media: How to Stay Safe Using it</h2>
                    
                    <p class="sect">
                    <span class="p-span"></span> In the age of digital technology, the usage of smart phones has become a necessity for almost daily-life activities. As most of the people, from teenagers and adults to the aged people, are using smartphones, the overall user population of the internet is increasing day by day, and so does the user population of social media. For your safety socail media usage, here's the basic safety practices for your daily internet/social media usage.
                    </p>

                    <br>

                    <section class="safe-list">

                        <div class="safe-list-item">
                            <h5>1. Use Strong Passwords</h5>
                            <img src="./pic/icon/1.png" alt="lock-icon">
                        </div>

                        <div class="safe-list-item">
                            <h5>2. Use Two Factor Authentication (2FA)</h5>
                           <img src="./pic/icon/2.png" alt="double-lock">
                        </div>


                        <div class="safe-list-item">
                            <h5>3. Keep your Personal Info Private</h5>
                            <img src="./pic/icon/3.png" alt="info-lock">
                        </div>


                        <div class="safe-list-item">
                            <h5>4. Lock your device / application</h5>
                            <img src="./pic/icon/4.png" alt="phone-lock">
                        </div>


                        <div class="safe-list-item">
                            <h5>5. Do not go into suspecious links</h5>
                            <img src="./pic/icon/5.png" alt="device-lock">
                        </div>


                        <div class="safe-list-item">
                            <h5>6. Cautious chatting with other people</h5>
                            <img src="./pic/icon/6.png" alt="chat">
                        </div>

                    </section>
                
                </div>

            </div>

            <hr>

            <div id="sb" class="segment">
                <div class="subscribe">

                    <h2>Subscribe to Our Newsletter</h2>
                    <p>
                        Are you interested in newsletter about safety usage of Social Media? Sign Up and you will be automatically subscribed! Click the button down below to Sign Up.
                    </p>

                    <form class="sub-btn" action="./sign_up.php">
                        <button class="btn btn-outline-light btn-lg">
                            Sign Up to Subscribe     
                        </button>
                    </form>

                </div>
            </div>

            <div class="weather">
    
                <a class="weatherwidget-io" 
                href="https://forecast7.com/en/21d9295d96/myanmar-burma/" 
                data-label_1="MYANMAR (BURMA)" data-label_2="WEATHER" 
                data-theme="original" data-basecolor="#000000" 
                data-accent="rgba(0, 0, 0, 0.02)" >MYANMAR (BURMA) WEATHER
                </a>

                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
                js.src='https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
        
            </div>
    
        </div>

        <?php
        include("./nav_footer/footer.php");
        ?>

    </section>
</body>
</html>