<html>
    <head>
        <title>Voofo!</title>
        <link href="../css/voofo.css" rel="stylesheet">
        <link rel="icon" href="../images/Voofo!icon.png" type="image/png">
    </head>
    <body class="sign-uppage">
        <div class="login-form1">
            <form class="login-page1" method="POST" action="../connect.php">
                <div class="inside-login-form">  
                <h1 id="sign-up">Sign-Up</h1>
                <div class="email-password1"><input type="email" placeholder="Enter Email-id" autofocus required name="email"></div>
                <div class="email-password1"><input type="password" placeholder="Enter Password" required id="password" name="password"></div>
                <div class="email-password1"><input type="password" placeholder="Re-enter Password" required id="confirm_password" name="re_password"></div>
                <button type="submit" class="submit-button1" name="submit">Submit</button></div>
                <div id="aldredy_a_member">Aldredy a member? <strong><a href="../index.php" class="sign-uplink">Sign-In Now</a></strong></div>
                </div>
        </form>
            </div>
            <div class="whole_slide">
                <div class="slider-container">
                    <div class="slider">
                      <div class="slide"><img src="../images/ORDER FOOD  NOW.png" alt="Image 1"></div>
                      <div class="slide"><img src="../images/SEARCH.png" alt="Image 2"></div>
                      <div class="slide"><img src="../images/bbq.png" alt="Image 3"></div>
                      <div class="slide"><img src="../images/Top 10 foods.png" alt="Image 4"></div>
                      <div class="slide"><img src="../images/best.png" alt="Image 5"></div>
                      <div class="slide"><img src="../images/CUISINE.png" alt="Image 6"></div>
                      <div class="slide"><img src="../images/Cloud kitchen.png" alt="Image 7"></div>
                      <div class="slide"><img src="../images/Catering.png" alt="Image 8"></div>
                    </div>
                    <div class="arrow prev" onclick="prevSlide()">&#10094;</div>
                    <div class="arrow next" onclick="nextSlide()">&#10095;</div>
                  </div>
                </div>
                <script src="../js/Voofo.js"></script>
    </body>
</html>