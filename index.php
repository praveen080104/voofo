<html>
    <head>
        <title>Voofo!</title>
        <link href="./css/voofo.css" rel="stylesheet">
        <link rel="icon" href="./images/Voofo!icon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body class="sign-inpage">
    <div class="login-form">
        <form class="login-page" method="post" action="../connect.php">
            <div class="inside-login-form">
            <h1 id="sign-in">Sign-In</h1>
            <div class="email-password"><input type="email" placeholder="Enter Email-id" name="Email"required></div>
            <div class="email-password"><input type="password" id="myInput" placeholder="Enter Password" name="password" required></div>
            <div class="show_password" style="cursor:default"><input type="checkbox" onclick="myFunction()">Show Password</div>
            <div class="submit-button"><button type="submit" name="">Submit</button></div>
            <div id="new-to-Voofo">New to Voofo!? <strong><a href="./php/Sign-uppage.php" class="sign-uplink">Sign-Up Now</a></strong></div>
        </div>
        </form>
        </div>
        <div class="whole_slide">
        <div class="slider-container">
            <div class="slider">
              <div class="slide"><img src="./images/ORDER FOOD  NOW.png" alt="Image 1"></div>
              <div class="slide"><img src="./images/SEARCH.png" alt="Image 2"></div>
              <div class="slide"><img src="./images/bbq.png" alt="Image 3"></div>
              <div class="slide"><img src="./images/Top 10 foods.png" alt="Image 4"></div>
              <div class="slide"><img src="./images/best.png" alt="Image 5"></div>
              <div class="slide"><img src="./images/CUISINE.png" alt="Image 6"></div>
              <div class="slide"><img src="./images/Cloud kitchen.png" alt="Image 7"></div>
              <div class="slide"><img src="./images/Catering.png" alt="Image 8"></div>
            </div>
            <div class="arrow prev" onclick="prevSlide()">&#10094;</div>
            <div class="arrow next" onclick="nextSlide()">&#10095;</div>
          </div>
        </div>
        <script src="./js/Voofo.js"></script>
    </body>
</html>