<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My project Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main" style="background-image: url(./images/backgrnd.jpg);">
        <nav>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>There is no sincerer love than the love of food</h1>
            <p>Food is essential to life, therefore make it good! Here in this website you will find all the simple and easy to make recipes. </p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/spring.jpg"/>
                </div>
                <div class="f-text">
                    <h4>spring</h4>
                    <p>Unexpectedly delightful little pops of sweet vinegar-soaked strawberries on grilled with cheese, thyme, and honey!</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/dinner.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Dinner</h4>
                    <p>Super easy salmon tacos loaded with a mango, sweet corn, and cucumber salsa!</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/salad.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Healthy</h4>
                    <p>Traditional lettuce-chomping salads but also noodley salads, grain salads, so many ways to salad!</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.jpeg">
        </div>
        <div class="about-text">
            <h2>Stop Tracking Calories</h2>
            <p>This food lover quote is an excellent reminder that there are endless ways to say, "I love you." One way that almost everyone appreciates is with a romantic home-cooked meal.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>FOR EMAIL UPDATES</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>