<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images\website_logo.png">
    <title>FurPamilya</title>
</head>

    <?php 
        include('db.php');
        // include('process.php'); 
    ?>

<body>
    <header>
        <a id="homepage-website-link" href="index.php">
            <div id="homepage-logo">
                <img src="images/website_logo.png">
                <h1><span style="color: #000000;">FUR</span><span style="color: #5F737B;">PAMILYA</span></h1>
            </div>
        </a>
        
        <div id="homepage-navigation-buttons">
            <div class="vertical-divider"></div>
            <button id="about">About</button>
            <a href="adopt.php">
                <button>Adopt</button>
            </a>
            <button id="sign-in">Login</button>
        </div>
    </header>
    <div id="about-modal" class="modal">
        <div class="about-modal-content">
            <span id="close-about" class="close">&times;</span>
            <h1>About</h1>
            <p>
                <strong>FurPamilya</strong> is a dedicated platform that brings together pet lovers and furry friends in need of a loving home. Our mission is to make the process of pet adoption as simple and convenient as possible, eliminating the need for potential adopters to visit multiple shelters or compounds.<br><br>
            
                At <strong> FurPamilya, </strong> we believe that every cat and dog deserves a loving home and a family that cherishes them. We provide detailed information about each pet, including their breed, age, health status, and personality traits, to help you find your perfect match.<br><br>
            
                Our user-friendly website allows you to browse through a wide variety of cats and dogs from the comfort of your home. Once you've found a pet you're interested in, you can easily go through the adoption process online.<br><br>
            
                By choosing to adopt a pet through <strong> FurPamilya, </strong> you're not just gaining a new family member; you're giving a second chance to a deserving animal and making a stand against puppy mills and animal cruelty.<br><br>
            
                Join us in our mission to make pet adoption easier and more accessible for everyone. Together, we can create a world where every pet has a loving home. <br><br><br>

                <strong> Developed by:  </strong> Lance Cerenio, Shawn Mayol, Carl Omega, and Klyde Perante
            </p>
        </div>
    </div>

    <div id="signin-modal" class="modal">
        <div class="modal-content">
            <span id="close-signin" class="close">&times;</span>
            <form>
                <h1>Login</h1>
                <input type="email" id="email" name="email", placeholder="Email"><br>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Login" id="login-button">
                <a href="">Need an account?</a>
                <a href="">Forgot Password?</a>
            </form><hr>
            <div id="social-media-buttons">
                <a href="">
                    <img id="facebook-favicon" src="images/facebook-favicon.png">
                </a>
                <a href="">
                    <img id="gmail-favicon" src="images/gmail-favicon.png">
                </a>
            </div>
            <!-- display: "No such account exists!" message here -->
        </div>
    </div>

    <main>
        <div id="homepage-main-image">
            <img src="images/girl-hug-dog-on-road.jpg">
        </div>

        <div id="text-on-image">"Love and loyalty in every paw."</div>

        <div id="homepage-doggy-adopt-me">
            <div id="corner-design">
                <img src="images/corner-design.png">
                <img src="images/corner-design.png">
                
                <!-- These 3 elements get overlapped by picture -->
                <img src="images/love-art.png">         
                <div class="circle"></div>
                <img src="images/heart-clipart.png">

            </div>
            <div id="homepage-doggy-adopt-me-description">
                <h1>"Slopyy kisses are necessary for happiness."</h1>
                <h2>“Embrace the joy of sloppy kisses; they’re the purest form of happiness.” </h2>
                <a href="adopt.php">
                    <button>ADOPT NOW!</button>
                </a>
            </div>
            <img src="images/dog-lying-down.jpg">
        </div>
    </main>

    <footer>
        <!-- Maybe add footer? -->
    </footer>

    <script src="script.js"></script>
</body>
</html>