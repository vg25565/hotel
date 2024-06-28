<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goibino </title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>H</span>otel</a>
        <nav class="navbar">
             <a href="#home">home</a>
             <a href="#packages">packages</a>
             <a href="#services">services</a>
             <a href="#gallery">gallery</a>
             <a href="#review">review</a>
             <a href="#contact">contact</a>
             <a href="#packages">book</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>





    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="login.php" method="post">
            <h3>Mona ka Tona</h3>
            <a href="signup.php"><input type="button" value="Signup now" class="btn"></a>
            <input type="submit" value="Login now" class="btn">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="signup.php">register now</a></p>
        </form>
    </div>
    
    
    



<section class="home" id="home">
    <div class="content">
        <h3>welcome to A Mona ka tona</h3>
        <p>dicover new places with us, luxury awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="img/vid-1.mp4"></span>
        <span class="vid-btn" data-src="img/vid-1.mp4"></span>
        <span class="vid-btn" data-src="img/vid-1.mp4"></span>
        <span class="vid-btn" data-src="img/vid-1.mp4"></span>
        <span class="vid-btn" data-src="img/vid-1.mp4"></span>
    </div>

    <div class="video-container">
        <video src="img/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>








<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>

    </h1>

    <div class="box-container">
        <div class="box">
            <img decoding="async" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/103705059.jpg?k=9e078265b31ad1815a573da8ed2a665f863e3925e1efd730df703421868a2ada&o=&hp=1" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Taj Hotel-mumbai </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹15,000.00 <span>₹22,000.00</span></div>
                <?php
                if (isset($_SESSION['user_id'])) {
        // User is logged in, provide booking link
        echo '<a href="mumbai.php" class="btn">Book Now</a>';
    } else {
        // User is not logged in, show login message
        echo '<p>Please <a href="login.php">login</a> to book.</p>';
    }
    ?>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/31764031.jpg?k=b409ab3b015a22fe0375b6e8acd2f64a8b9e61cd70cf16019bba33c5ada36c39&o=&hp=1" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>The-K Hotel Seoul --South Korea </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹10,000.00 <span>₹20,000.00</span></div>
               <?php
                if (isset($_SESSION['user_id'])) {
        // User is logged in, provide booking link
        echo '<a href="korea.php" class="btn">Book Now</a>';
    } else {
        // User is not logged in, show login message
        echo '<p>Please <a href="login.php">login</a> to book.</p>';
    }
    ?>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/10/2f/5c/exterior.jpg?w=700&h=-1&s=1" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> USA grand hotel </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹9,000.00 <span>₹18,000.00</span></div>
                <?php
                if (isset($_SESSION['user_id'])) {
        // User is logged in, provide booking link
        echo '<a href="usa.php" class="btn">Book Now</a>';
    } else {
        // User is not logged in, show login message
        echo '<p>Please <a href="login.php">login</a> to book.</p>';
    }
    ?>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/d/da/H%C3%B4tel_Lutetia%2C_Paris_6e.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Hôtel Lutetia-paris </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹8,000.00 <span>₹12,000.00</span></div>
                <?php
    if (isset($_SESSION['user_id'])) {
        // User is logged in, provide booking link
        echo '<a href="paris.php" class="btn">Book Now</a>';
    } else {
        // User is not logged in, show login message
        echo '<p>Please <a href="login.php">login</a> to book.</p>';
    }
    ?>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/07/eb/ab/exterior.jpg?w=1200&h=-1&s=1" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Hotel Century Southern Tower
-tokyo </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹5,000.00 <span>₹10,000.00</span></div>
               <?php
    if (isset($_SESSION['user_id'])) {
        // User is logged in, provide booking link
        echo '<a href="tokyo.php" class="btn">Book Now</a>';
    } else {
        // User is not logged in, show login message
        echo '<p>Please <a href="login.php">login</a> to book.</p>';
    }
    ?>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/d/d5/The_Majestic_Hotel_Kuala_Lumpur_-_Facade.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>The Hotel Majestic- Malaysia. </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹7,000.00 <span>₹12,000.00</span></div>
                <?php
    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // User is logged in, provide booking link
        echo '<a href="malaysia.php" class="btn">Book Now</a>';
    } else {
        // User is not logged in, show login message
        echo '<p>Please <a href="login.php">login</a> to book.</p>';
    }
    ?>
            </div>
        </div>
    </div>
</section>






<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
    </div>
</section>






<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img decoding="async" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/07/eb/ab/exterior.jpg?w=1200&h=-1&s=1" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/d/d5/The_Majestic_Hotel_Kuala_Lumpur_-_Facade.jpg"  alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/10/2f/5c/exterior.jpg?w=700&h=-1&s=1" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/d/da/H%C3%B4tel_Lutetia%2C_Paris_6e.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/103705059.jpg?k=9e078265b31ad1815a573da8ed2a665f863e3925e1efd730df703421868a2ada&o=&hp=1" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/31764031.jpg?k=b409ab3b015a22fe0375b6e8acd2f64a8b9e61cd70cf16019bba33c5ada36c39&o=&hp=1" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://theluxurytravelexpert.com/wp-content/uploads/2019/07/header4.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://media.timeout.com/images/105232045/image.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="https://www.specialholidays.com/blog/wp-content/uploads/2021/05/Radisson-Blu-Plaza-New-Delhi.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
</div>
</section>
<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img decoding="async" src="https://scdn.aro.ie/Sites/50/imperialhotels2022/uploads/images/FullLengthImages/Small/SB12129735_Bedford_Hotel_Interior__Reception._4500x3000.jpg" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name" required>
                <input type="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number"required>
                <input type="text" placeholder="subject" required>
            </div>
            <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message" required>
        </form>
    </div>
</section>





<section class="brand-container">
    <div class="swiper mySwiper brand-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide"><img decoding="async" src="https://scdn.aro.ie/Sites/50/imperialhotels2022/uploads/images/FullLengthImages/Small/SB12129735_Bedford_Hotel_Interior__Reception._4500x3000.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="https://media.timeout.com/images/105232045/image.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/3.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/5.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/6.jpg" alt=""></div>
        </div>
    </div>
</section>








<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Totam natus asperiores voluptas aliquam vitae odio. Beatae doloribus facere nostrum magni.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">USA</a>
            <a href="#">india</a>
            <a href="#">japan</a>
            <a href="#">philippines</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">package</a>
            <a href="#">service</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">book</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">likedin</a>
        </div>
    </div>
    <h1 class="credit"> all rights reserved!! </h1>
</script>  <script src="main.js" defer data-deferred="1"></script> </body>
</html>
