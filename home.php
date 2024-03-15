<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header starts section -->
    <section class="header">
        <a href="home.php" class="logo">Yoga</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
    

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header ends section -->

    <!-- home swiper-section starts here -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background:url(./images/backgound_female.jpg) no-repeat">
                    <div class="content">
                        <span>Focus Up, Deep Breath, Access Peace, Shifting Anxiety</span>
                        <h3>Moment Of Calm In A Busy Day</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(./images/group_yoga1.jpg) no-repeat">
                    <div class="content">
                        <span>Focus Up, Deep Breath, Access Peace, Shifting Anxiety</span>
                        <h3>Deep Breaths To Reset</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(./images/mother_child_yoga.jpg) no-repeat">
                    <div class="content">
                        <span>Focus Up, Deep Breath, Access Peace, Shifting Anxiety</span>
                        <h3>Meditation To Release</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    
            <div class="swiper-scrollbar"></div>
        </div>
        
    </section>
    <!-- home section ends here -->

    <!-- services section starts here -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="./images/group_yoga1.jpg" alt="image_Group Yoga Class">
                <h3>Group Yoga Class</h3>
            </div>

            <div class="box">
                <img src="./images/female_yoga1.jpg" alt="image_Private Yoga Class">
                <h3>Private Yoga Class</h3>
            </div>

            <div class="box">
                <img src="./images/group_yoga3.jpg" alt="image_Yoga Workshops">
                <h3>Yoga Workshops</h3>
            </div>

            <div class="box">
                <img src="./images/couple_yoga2.jpg" alt="image_Meditation">
                <h3>Meditation</h3>
            </div>

            <div class="box">
                <img src="./images/face_yoga1.jpg" alt="image_Face Yoga">
                <h3>Advance Yoga</h3>
            </div>

            <div class="box">
                <img src="./images/pranayama.jpg" alt="image_Pranayam">
                <h3>Pranayam</h3>
            </div>

        </div>
    </section>
    <!-- services section ends here -->

    <!--Home about section starts here-->
    <section class="home-about">
        <div class="image">
            <img src="./images/Real/yoga1.png" alt="image_home-about">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Manish Kumbhar, BA in Yogashastra, is dedicated to sharing yoga's transformative power. Specializing in back-bending, forward bending, and flexibility, he offers resources and guidance for all levels. Embark on your yoga journey with him and experience its profound benefits firsthand!</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
        
    </section>
    <!--Home about section ends here-->

    <!--Home packages section starts here-->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="./images/group_yoga5.jpg" alt="img_home-package_Group_Yoga">
                </div>
                <div class="content">
                    <h3>Group Yoga Classes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/private_yoga3.jpg" alt="img_home-package_private_Yoga">
                </div>
                <div class="content">
                    <h3>private Yoga Classes</h3>
                    <p>Lorem sgdum ddbor sfdgh amfd ceviusnbtd rgtjbcdng elit</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/male_yoga1.jpg" alt="img_home-package_Meditation">
                </div>
                <div class="content">
                    <h3>Meditation</h3>
                    <p>Lorem sgdum ddbor sfdgh amfd ceviusnbtd rgtjbcdng elit</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>
    <!--Home pacakges section ends here-->

    <!--Home offers section starts here-->
    <div class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vel accusantium ducimus porro quam natus, mollitia sit magni consequuntur consectetur!
            </p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!--Home offers section ends here-->



    <!-- footer section starts here -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="book.php"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> Reviews</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book your session</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> Why Choose Us?</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +919168513000</a>
                <a href="#"><i class="fas fa-phone"></i> +919134567890</a>
                <a href="#"><i class="fas fa-envelope"></i>yoga9@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Gurugram, Haryana-122001</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.linkedin.com/in/sanjana-kumbhar"><i class="fab fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="https://youtube.com/@yogawithmanish07?si=UZbv7Pg8x5cAbMhR"><i class="fab fa-youtube"></i> YouTube</a>
                <a href="https://www.instagram.com/the_yogist_007?igsh=dzlnYXJjNGIzYjMy&utm_source=qr"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>
        

        <div class="credit">Created By <span>Sanjana Kumbhar</span> | all rights reserved! </div>
    </section>
    <!-- footer section ends here -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
    
</body>

</html>