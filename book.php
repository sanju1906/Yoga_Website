<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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

    <div class="heading" style="background:url(./images/Real/about1.png) no-repeat">
        <h1>Book Now</h1>
    </div>

    <div class="booking">
        <h1 class="heading-title">Request A Call Back!</h1>
        <form action="book_form.php" method="post" class="book-form" onSubmit="alert('Thank you for visiting, and I look forward to being a part of your yoga journey!');">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Contact No :</span>
                    <input type="tel" placeholder="Enter your contact no" name="phone" pattern="[0-9]{10}" required>
                </div>
                <div class="inputBox">
                    <span>Date Of Birth :</span>
                    <input type="date" placeholder="Enter your date of birth" name="date_of_birth"pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" required>
                </div>
                <div class="inputBox">
                    <span>Gender :</span><br>
                    <select class="dropdown_select" name="gender" required>
                        <option value="" selected disabled>select option</option>
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>Looking For :</span><br>
                    <select class="dropdown_select" name="looking_for" required>
                        <option value="" selected disabled>select option</option>
                        <option value="Offline yoga (group) batch" >Offline yoga (group) batch</option>
                        <option value="Online yoga (group) batch">Online yoga (group) batch</option>
                        <option value="Offline yoga private class">Offline yoga private class</option>
                        <option value="Online yoga private class">Online yoga private class</option>
                        <option value="Advance yoga class">Advance yoga class</option>
                        <option value="Meditation Batch">Meditation Batch</option>
                        <option value="Pranayam batch">Pranayam batch</option>
                        <option value="Yoga Workshop">Yoga Workshop</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Any Suggestion :</span>
                    <textarea rows="3" cols="55" name="suggestion"></textarea>
                </div>
                
                <input type="submit" value="submit" class="btn" name="send">
    
            </div>
        </form>
    </div>




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