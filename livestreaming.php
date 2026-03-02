<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Streaming</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/livestreaming.css">

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
            <div class="head-section">
                <h1>Livestreaming</h1>
            </div>
            <div class="body-section">

                <h2>What is Livestreaming?</h2>

                <p>Live streaming is the real-time broadcasting of video content over the internet. 
                    It allows users to broadcast live video to an audience as it happens, enabling 
                    viewers to watch and interact with the content in real time. Live streaming can 
                    be done through various platforms and apps.
                </p>

                <div class="livestream-usage">
                    <h3>How it is used?</h3>
                    <div class="livestream-type">

                        <div class="livestream-card">
                            
                            <div class="live-up">
                                <img src="./pic/livestream/personal.jpg" alt="personal">
                            </div>

                            <div class="live-down">
                                <h4>Personal Events</h4>
                                <p>Personal events such as Weddings, Aniverseries and Birthday Parties.</p>
                            </div>
                            
                        </div>

                        <div class="livestream-card">
                            
                            <div class="live-up">
                                <img src="./pic/livestream/professional.jpg" alt="professional">
                            </div>

                            <div class="live-down">
                                <h4>Professional Events</h4>
                                <p>Events such as Business Meetings, Confrences.</p>
                            </div>
                            
                        </div>

                        <div class="livestream-card">
                            
                            <div class="live-up">
                                <img src="./pic/livestream/gaming.jpg" alt="">
                            </div>

                            <div class="live-down">
                                <h4>Streaming</h4>
                                <p>Game Streaming, Variety Entertainment Streaming</p>
                            </div>
                            
                        </div>

                        <div class="livestream-card">
                            
                            <div class="live-up">
                                <img src="./pic/livestream/movie.jpg" alt="">
                            </div>

                            <div class="live-down">
                                <h4>Movies / TV Shows</h4>
                                <p>Online Movies and TV shows streaming</p>
                            </div>
                            
                        </div>

                        <div class="livestream-card">
                            
                            <div class="live-up">
                                <img src="./pic/livestream/tournament.png" alt="">
                            </div>

                            <div class="live-down">
                                <h4>Concerts / Tournaments</h4>
                                <p>Events such as Game Events, Live Concerts, Online Tournaments.</p>
                            </div>
                            
                        </div>

                        <div class="livestream-card">
                            
                            <div class="live-up">
                                <img src="./pic/livestream/education.jpg" alt="">
                            </div>

                            <div class="live-down">
                                <h4>Education</h4>
                                <p>Events such as Webinars, online seminars.</p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

                <div class="video">

                    <h2>Popular Use of Livestreaming Technology</h2>

                    <div class="vid-section">
                        
                        <iframe class="sample-vid" width="560" height="315" src="https://www.youtube.com/embed/FOxWI6WYXmk?si=5u4NHvOn0XWDCUdw" 
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-
                            cross-origin" allowfullscreen>
                        </iframe>

                        <p>Livestreaming is widely used as hosting tournaments online, where anyone can watch from anywhere
                             as long as they are connected to the internet. 
                             <br><br>
                             One such example is the Vtuber Most Cooperative Tournament, which is a japanese tournament for Virtual Youtubers 
                             where they compete each other with 3-person-teams in the game called "<span>APEX LEGENDS</span>". It is one of the most 
                             popular online game tournament in Japan.
                            
                        </p>
                    
                    </div>

                </div>

                <div class="livestream-safety">
                    <h2>Practices for Safe Livestreaming</h2>
                    <div class="livestream-safety-list">
                        <ol>
                            <li>
                                <b>Protect Your Privacy: </b>Avoid sharing Personal Information such as Phone Number, 
                                Addresses or Financial information. Additionally, check your surroundings to ensure 
                                that there are no objects which can be used to identify personal information.
                            </li>
                            <br>
                            <li>
                                <b>Secure Your Account: </b>Use strong passwords and two factor authentication to make 
                                sure no one can access your account unbeknownst to you.
                            </li>
                            <br>
                            <li>
                                <b>Understand the terms of usages: </b>Each livestreaming platforms have their own rules 
                                and terms of usages. Make sure to read before using the platforms to avoid getting banned 
                                from the platform.
                            </li>
                            <br>
                            <li>
                                <b>Use Secure Connections: </b>As livestreaming heavily rely on the internet, make sure to 
                                have a strong and secure connection as people with malicious intents could use these 
                                unsecured networks to gain access to your account or device.
                            </li>
                            <br>
                            <li>
                                <b>Controlling the Content: </b>It is improtant to set rules and boundaries with the views 
                                in order to avoid unnecessary conflices and disclosure of personal information. Additionally, 
                                you need to plan what to stream before start streaming.
                            </li>
                            <br>
                            <li>
                                <b>Beware of Copyrights and intellectual properties: </b>Ensure that any music, video clips, 
                                or other content used in your live stream is properly licensed or falls under fair use 
                                guidelines.
                            </li>
                            <br>
                        </ol>
                    </div>
                </div>


            </div>
    </section>
<?php
      include("./nav_footer/footer.php");
?>

</body>
</html>