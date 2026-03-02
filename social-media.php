<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/social_media.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <section id="body">
        <?php
        include("./nav_footer/nav.php");  
        ?>

        <section id="content">

            <div class="head-pic">

                <div class="searchbar">
                        
                    <form class="form-inline" id="search-list">
                        <div class="searchbar-header">
                            <h1>Search For Popular Social Media Apps</h1>
                        </div>
                        <div class="searchbar-sec">
                            <input id="input" class="form-control mr-sm-2" type="search" placeholder="Twitter, Facebook, Youtube, etc." aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </div>        
                    </form>

                    <div id="result">
                        Results will appear here
                    </div>
                
                </div>

            </div>

            <script>
                $(document).ready(function() {
                $('#search-list').submit(function(event) {
                    event.preventDefault();
                    var searchTerm = $('#input').val();
                    searchGoogle(searchTerm);
                });

                function searchGoogle(searchTerm) {
                    var url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyAuE6U8mzdrMGxdnftR5bJ7tmONzCeXW38&cx=009e88d781d3045ba&q=' + searchTerm;
                    $.get(url, function(data) {
                    var results = data.items;
                    var output = '<ul>';
                    $.each(results, function(index, result) {
                        output += '<li><a class="result-link" target="_blank" href="' + result.link + '">' + result.title + '</a></li>';
                    });
                    output += '</ul>';
                    $('#result').html(output);
                    });
                }
                });
            </script>

            <div class="social-content">
                
                <div class="header">
                    <h1>Most Popular Social Media Applications</h1>
                </div>

                <div class="social-apps">

                    <div class="social-apps-content">
                        <div class="socialapp-head">
                            <h2 class="facebook">Facebook</h2>
                        </div>
                        <div class="socialapp-body">
                            <div class="what-is">

                                <div class="image-sec">
                                    <img src="./pic/logos/facebook.png" alt="">
                                </div>
                                <div>
                                    <h4>What is <span class="facebook">Facebook</span> ?</h4>
                                    <p>
                                    Facebook is a social media platform that was created by Mark Zuckerberg and his college roommates in 2004. 
                                    Initially intended as a network for Harvard students, it quickly expanded to other universities and 
                                    eventually to the general public. Users can create profiles, connect with friends, share updates, photos, 
                                    and videos, and engage with content through likes, comments, and shares. In addition to personal profiles, 
                                    Facebook has business pages, groups, and various other features designed for community building, marketing, 
                                    and communication. It also owns other major platforms like Instagram and WhatsApp, making it a significant 
                                    player in the social media landscape. Over the years, Facebook has faced various controversies and 
                                    challenges related to privacy, data security, and its impact on society, but it remains one of the most 
                                    widely used social networking sites globally.
                                    </p>
                                </div>

                            </div>
                            <hr>
                            <div class="how-safe">
                                <h4>How to be Safe on <span class="facebook">Facebook</span></h4>
                                <br>
                                <div>
                                    <ol>
                                        <li><b class="facebook">Use Strong Passwords</b>: Create a unique and complex password by combining letters, numbers, and special characters alltogether.</li>
                                        <br>
                                        <li><b class="facebook">Enable Two-Factor Authentication</b>: Add an extra layer of security by enaling a second form of verification when logging into your account.</li>
                                        <br>
                                        <li><b class="facebook">Review Privacy Settings</b>: Adjust your privacy settings to control who can see your posts, personal information, and friend list.</li>
                                        <br>
                                        <li><b class="facebook">Be Cautious with Handling Personal Information</b>: Avoid sharing sensitive information such as your address, phone number, or financial details.</li>
                                        <br>
                                        <li><b class="facebook">Be Wary of Suspicious Links</b>: Avoid clicking on unknown links that may lead to phishing scams or malware.</li>
                                        <br>
                                        <li><b class="facebook">Keep Your Software Updated</b>: Ensure that your browser or your Facebook app is up-to-date.</li>
                                        <br>
                                        <li><b class="facebook">Educate Yourself About Scams</b>: Stay informed about common online scams and fraud tactics to recognize and avoid them.</li>
                                        <br>
                                        <li><b class="facebook">Be Mindful of Friend Requests</b>: Only accept friend requests from people you know personally to avoid connecting with potentially malicious individuals.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="social-apps-content">
                        <div class="socialapp-head">
                            <h2 class="instagram">Instagram</h2>
                        </div>
                        <div class="socialapp-body">
                            <div class="what-is">

                                <div class="image-sec">
                                    <img src="./pic/logos/instagram.png" alt="">
                                </div>
                                <div>
                                    <h4>What is <span class="instagram">Instagram</span> ?</h4>
                                    <p>
                                    Instagram is a social media platform focused on sharing photos and videos. Launched in 2010 by Kevin Systrom and Mike Krieger, 
                                    it was acquired by Facebook in 2012. Instagram allows users to create profiles, post images and videos, and interact with 
                                    others through likes, comments, and direct messages. Instagram is popular for its visual-centric approach and has become a 
                                    major platform for influencers, brands, and individuals to share and engage with content.
                                    </p>
                                </div>

                            </div>
                            <hr>
                            <div class="how-safe">
                                <h4>How to be Safe on <span class="instagram">Instagram</span></h4>
                                <br>
                                <div>
                                    <ol>
                                        <li><b class="instagram">Use a Strong Password</b>: Choose a complex, unique password that combines letters, numbers, and special characters.</li>
                                        <br>
                                        <li><b class="instagram">Enable Two-Factor Authentication</b>: Add an extra layer of security by requiring a second form of verification to log in.</li>
                                        <br>
                                        <li><b class="instagram">Monitor Tagged Photos and Posts</b>: Regularly check and manage photos and posts you're tagged in to ensure they reflect your preferences and privacy settings.</li>
                                        <br>
                                        <li><b class="instagram">Review App Permissions</b>: Regularly check which third-party apps have access to your Instagram account and remove any that you no longer use or trust.</li>
                                        <br>
                                        <li><b class="instagram">Educate Yourself About Scams</b>: Stay informed about common scams and tactics to recognize and avoid them.</li>
                                        <br>
                                        <li><b class="instagram">Manage Comments and Messages</b>: Use comment and message filters to help control and moderate interactions on your posts and direct messages.</li>
                                        <br>
                                        <li><b class="instagram">Keep Your App Updated</b>: Ensure that your Instagram app is updated to benefit from the latest security patches and features.</li>
                                        <br>
                                        <li><b class="instagram">Avoid Posting Sensitive Information</b>: Check the pictures and posts which you are going to upload as they may contain sensitive infromation unbeknownst to you</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="social-apps-content">
                        <div class="socialapp-head">
                            <h2 class="twitter">Twitter / X</h2>
                        </div>
                        <div class="socialapp-body">
                            <div class="what-is">

                                <div  class="image-sec">
                                    <img src="./pic/logos/x.jpg" alt="">
                                </div>
                                <div>
                                    <h4>What is <span class="twitter">Twitter / X</span> ?</h4>
                                    <p>
                                    X, formerly known as Twitter, is a social media platform that allows users to post and interact with short messages called
                                     "tweets." It was rebranded from Twitter to X in 2023, following its acquisition by Elon Musk. The platform is used for a 
                                     wide range of activities, including sharing news, updates, and personal thoughts, as well as participating in discussions 
                                     and engaging with other users. X is known for its role in real-time news, public discourse, and social commentary, with 
                                     significant influence on politics, entertainment, and global events.
                                    </p>
                                </div>

                            </div>
                            <hr>
                            <div class="how-safe">
                                <h4>How to be Safe on <span class="twitter">Twitter / X</span></h4>
                                <br>
                                <div>
                                    <ol>
                                        <li><b class="twitter">Use a Strong Password</b>: Create a unique, complex password that combines letters, numbers, and special characters.</li>
                                        <br>
                                        <li><b class="twitter">Enable Two-Factor Authentication</b>: Add an extra layer of security by requiring a second form of verification to log in.</li>
                                        <br>
                                        <li><b class="twitter">Be Cautious with Personal Information</b>: Avoid sharing sensitive details such as your address, phone number, or financial information in your tweets or profile.</li>
                                        <br>
                                        <li><b class="twitter">Monitor Your Interactions</b>: Regularly review who is following you and who you follow. Be cautious of unsolicited direct messages or interactions from unknown users.</li>
                                        <br>
                                        <li><b class="twitter">Be Mindful of Public Posts</b>: Remember that tweets can be seen by anyone if your account is public. Think carefully before sharing personal or sensitive information.</li>
                                        <br>
                                        <li><b class="twitter">Review Third-Party App Permissions</b>: Regularly check and manage the apps and services that have access to your X account.</li>
                                        <br>
                                        <li><b class="twitter">Stay Updated with your app</b>: Keep your app and software updated to benefit from the latest security features and patches.</li>
                                        <br>
                                        <li><b class="twitter">Review Privacy Settings</b>: Adjust your settings to control who can see your tweets, follow you, and send you messages. Consider setting your account to private if you want more control over your audience.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="social-apps-content">
                        <div class="socialapp-head">
                            <h2 class="youtube">YouTube</h2>
                        </div>
                        <div class="socialapp-body">
                            <div class="what-is">

                                <div class="image-sec">
                                    <img src="./pic/logos/youtube.png" alt="">
                                </div>
                                <div>
                                    <h4>What is <span class="youtube">YouTube</span> ?</h4>
                                    <p>
                                    YouTube is a widely used online video-sharing platform where users can upload, view, share, 
                                    and interact with videos. Launched in 2005 by Steve Chen, Chad Hurley, and Jawed Karim, it 
                                    has grown to become one of the largest and most popular video platforms globally. In 2006, 
                                    YouTube was acquired by Google, and it now operates as part of the Google ecosystem. 
                                    YouTube serves as a platform for a wide range of content, including educational videos, 
                                    entertainment, music, vlogs, and more. It has a significant impact on media and culture, 
                                    offering both a space for professional creators and an outlet for individual users.
                                    </p>
                                </div>

                            </div>
                            <hr>
                            <div class="how-safe">
                                <h4>How to be Safe on <span class="youtube">YouTube</span></h4>
                                <br>
                                <div>
                                    <ol>
                                        <li><b class="youtube">Use a Strong Password</b>: Choose a unique and complex password for your Google account that includes a mix of letters, numbers, and special characters.</li>
                                        <br>
                                        <li><b class="youtube">Enable Two-Factor Authentication</b>: Add an extra layer of security to your Google account by requiring a second form of verification when logging in.</li>
                                        <br>
                                        <li><b class="youtube">Monitor Comments and Messages</b>: Review and manage comments on your videos and be cautious with direct messages from unknown users.</li>
                                        <br>
                                        <li><b class="youtube">Use Restricted Mode</b>: Enable Restricted Mode to filter out potentially inappropriate content if you're concerned about the suitability of videos for younger viewers.</li>
                                        <br>
                                        <li><b class="youtube">Report and Block Inappropriate Content</b>: Use YouTube's reporting and blocking features to address content or users that violate community guidelines or engage in harassment.</li>
                                        <br>
                                        <li><b class="youtube">Be Mindful of Copyright</b>: Ensure that you have the right to use any content (like music or clips) included in your videos to avoid copyright violations.</li>
                                        <br>
                                        <li><b class="youtube">Review Content Before Posting</b>: Double-check your videos for any sensitive or personal information before making them public.</li>
                                        <br>
                                        <li><b class="youtube">Keep Your App Updated</b>: Ensure that your YouTube app and any related software are up-to-date to benefit from the latest security features and patches.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="social-apps-content">
                        <div class="socialapp-head">
                            <h2 class="linkedin">Linked In</h2>
                        </div>
                        <div class="socialapp-body">
                            <div class="what-is">

                                <div class="image-sec">
                                    <img src="./pic/logos/linkedin.png" alt="">
                                </div>
                                <div>
                                    <h4>What is <span class="linkedin">Linked In</span> ?</h4>
                                    <p>
                                    LinkedIn is a professional networking platform designed for career development and business 
                                    connections. Launched in 2003, LinkedIn allows users to create professional profiles, connect 
                                    with colleagues and industry peers, and showcase their skills and experience. It is used for 
                                    job searching, recruiting, and building professional relationships. LinkedIn is widely used 
                                    for networking, career development, and professional growth, making it a key tool for 
                                    individuals looking to advance their careers and for businesses seeking to connect with talent.
                                    </p>
                                </div>

                            </div>
                            <hr>
                            <div class="how-safe">
                                <h4>How to be Safe on <span class="linkedin">Linked In</span></h4>
                                <br>
                                <div>
                                    <ol>
                                        <li><b class="linkedin">Use a Strong Password</b>: Choose a unique, complex password that includes letters, numbers, and special characters.</li>
                                        <br>
                                        <li><b class="linkedin">Enable Two-Factor Authentication</b>: Add an extra layer of security by requiring a second form of verification to log in.</li>
                                        <br>
                                        <li><b class="linkedin">Be Cautious with Personal Information</b>: Avoid sharing sensitive personal details like your home address or phone number. Provide only the necessary professional information.</li>
                                        <br>
                                        <li><b class="linkedin">Monitor Profile Visibility</b>: Regularly review what information is visible to your connections and the public. Adjust settings as needed to maintain privacy.</li>
                                        <br>
                                        <li><b class="linkedin">Be Mindful of Endorsements and Recommendations</b>: Only endorse or recommend people you genuinely know and trust. Ensure your own endorsements and recommendations are accurate and professional.</li>
                                        <br>
                                        <li><b class="linkedin">Be Wary of Suspicious Links and Messages</b>: Avoid clicking on unfamiliar links or responding to unsolicited messages that could be phishing attempts or scams.</li>
                                        <br>
                                        <li><b class="linkedin">Verify Job Listings and Recruiters</b>: Be cautious with job offers or recruiting messages. Verify the legitimacy of job postings and the identity of recruiters before sharing personal information.</li>
                                        <br>
                                        <li><b class="linkedin">Be Discreet with Learning and Development Activities</b>: When using LinkedIn Learning or similar tools, be mindful of how much you share about your learning activities and goals.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="social-apps-content">
                        <div class="socialapp-head">
                            <h2 class="tiktok">Tik Tok</h2>
                        </div>
                        <div class="socialapp-body">
                            <div class="what-is">

                                <div class="image-sec">
                                    <img src="./pic/logos/tiktok.png" alt="">
                                </div>
                                <div>
                                    <h4>What is <span class="tiktok">Tik Tok</span> ?</h4>
                                    <p>
                                    TikTok is a popular social media platform known for its short-form video content. 
                                    Launched internationally in 2018 by the Chinese company ByteDance, TikTok allows 
                                    users to create, share, and discover videos that typically range from 15 seconds 
                                    to 3 minutes long. The platform has become known for its wide variety of content, 
                                    including dance challenges, lip-syncs, comedy sketches, and educational videos.
                                    </p>
                                </div>

                            </div>
                            <hr>
                            <div class="how-safe">
                                <h4>How to be Safe on <span class="tiktok">Tik Tok</span></h4>
                                <br>
                                <div>
                                    <ol>
                                        <li><b class="tiktok">Use a Strong Password</b>: Create a unique, complex password that includes a combination of letters, numbers, and special characters.</li>
                                        <br>
                                        <li><b class="tiktok">Enable Two-Factor Authentication</b>: Add an extra layer of security by requiring a second form of verification to log in.</li>
                                        <br>
                                        <li><b class="tiktok">Be Mindful of What You Share</b>: Think carefully before sharing personal details or content that could compromise your privacy or security.</li>
                                        <br>
                                        <li><b class="tiktok">Understand TikTok's Community Guidelines</b>: Familiarize yourself with TikTok's rules and guidelines to ensure your content complies with their policies and to avoid issues related to content moderation.</li>
                                        <br>
                                        <li><b class="tiktok">Use Family Pairing</b>: If you're a parent, use TikTok's Family Pairing feature to set restrictions and manage your child's account settings, including privacy, screen time, and content controls.</li>
                                        <br>
                                        <li><b class="tiktok">Educate About Online Safety</b>: Talk to younger users about online safety, the importance of privacy, and how to handle unwanted interactions or content.</li>
                                        <br>
                                        <li><b class="tiktok">Report and Block Inappropriate Content</b>: Use TikTok's reporting and blocking features to address harassment, spam, or other inappropriate behavior.</li>
                                        <br>
                                        <li><b class="tiktok">Be Cautious with Trends and Challenges</b>: Participate in trends and challenges mindfully, ensuring that they do not encourage harmful or unsafe behavior.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        
        </section>

        <?php
        include("./nav_footer/footer.php");
        ?>
    </section>



</body>
</html>