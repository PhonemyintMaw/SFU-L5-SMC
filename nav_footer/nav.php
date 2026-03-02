<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navigation</title>

     <!-- CSS -->
     <link rel="stylesheet" href="./css/nav-foot.css">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap" rel="stylesheet">
  
</head>
<body>

<section id="navigation">

    <div class="sidebar">

      <div class="navbar-expand-lg">

        <div>
          <ul class="sidebar-nav-li">

            <li onclick= hideSidebar() class="close-btn">
              <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#ffffff"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </li>

            <li>
              <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
            </li>

            <li>
              <a class="nav-link active" href="./livestreaming.php">Livestreaming</a>
            </li>

            <li>
              <a class="nav-link active" href="./how-parents-can-help.php">How Parents Can Help</a>
            </li>

            <li>
              <a class="nav-link active" href="./legislation-and-guidance.php">Legislation and Guidance</a>
            </li>

            <li class="dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Social Media Contents
              </a>

            <ul class="dropdown-menu .sidebar-nav-li" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="./social-media.php">Social Media</a></li>
              <li><a class="dropdown-item" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
              <li><a class="dropdown-item" href="https://www.instagram.com/" target="_blank">Instagram</a></li>
              <li><a class="dropdown-item" href="https://x.com/?lang=en" target="_blank">Twitter / X</a></li>
              <li><a class="dropdown-item" href="https://www.youtube.com/" target="_blank">Youtube</a></li>
              <li><a class="dropdown-item" href="https://www.linkedin.com/" target="_blank">Linked In</a></li>
              <li><a class="dropdown-item" href="https://www.tiktok.com/en/" target="_blank">Tik Tok</a></li>
            </ul>

            </li>

            <li class="">
              <a class="nav-link" href="./contact-us.php">Contact Us</a>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
                Sign In / Log In
                
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  <li class="">
                    <a class="nav-link" href="./sign_up.php">Sign Up</a>
                  </li>

                  <li class="">
                    <a class="nav-link" href="./login.php">Log In</a>
                  </li>
                </ul>
            </li>

          </ul>
        </div>
  
        <div class="sidebar-nav-li">

          <ul>
            <li>
            <a class="nav-link" href="./about-us.php">About Us</a>
            </li>
          </ul>

        </div>

      </div>

    </div>

    
    <div id="nav-upper">

        <div class="right-section">

          <a class="brand" href="./home.php">SMC LTD</a>
    
        </div>

        <div class="left-section  navbar-expand-lg">

              <ul class="navbar-nav">

                <li class="nav-item hideOnMobile">
                  <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
                </li>

                <li class="nav-item hideOnMobile">
                  <a class="nav-link active" href="./livestreaming.php">Livestreaming</a>
                </li>

                <li class="nav-item hideOnMobile">
                  <a class="nav-link active" href="./how-parents-can-help.php">How Parents Can Help</a>
                </li>

                <li class="nav-item hideOnMobile">
                  <a class="nav-link active" href="./legislation-and-guidance.php">Legislation and Guidance</a>
                </li>

                <li class="nav-item dropdown hideOnMobile">

                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Social Media Contents
                  </a>

                  <ul class="dropdown-menu hideOnMobile" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="./social-media.php">Social Media</a></li>
                    <li><a class="dropdown-item" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                    <li><a class="dropdown-item" href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                    <li><a class="dropdown-item" href="https://x.com/?lang=en" target="_blank">Twitter / X</a></li>
                    <li><a class="dropdown-item" href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                    <li><a class="dropdown-item" href="https://www.linkedin.com/" target="_blank">Linked In</a></li>
                    <li><a class="dropdown-item" href="https://www.tiktok.com/en/" target="_blank">Tik Tok</a></li>
                  </ul>

                </li>

                <li class="nav-item hideOnMobile">
                  <a class="nav-link" href="./contact-us.php">Contact Us</a>
                </li>

                <li class="nav-item dropdown hideOnMobile">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                    Sign In / Log In
                    
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li class="nav-item">
                        <a class="nav-link" href="./sign_up.php">Sign Up</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="./login.php">Log In</a>
                      </li>
                    </ul>
                </li>

                <li class="about-us hideOnMobile">

                  <a class="about-link" href="./about-us.php">About Us</a>

                </li>

                <li class="menu-button" onclick= showSidebar()>
                  <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                </li>

              </ul>

        </div>
      
    </div>
               

</section>

<script>
  function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex';
  }
  function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none';
  }
</script>

</body>
</html>