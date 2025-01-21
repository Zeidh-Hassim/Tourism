<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete responsive flower website design tutorial</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>  
<body>
    <!-- header section starts -->
    <?php
    include 'navbar.php';
    ?>
    <!-- header section ends -->

    <!-- home section start  -->
    <section class="home" id="home">
        <div class="quote">"The earth has music for those who listen." <br>
            <span>- William Shakespeare</span></div>
    <div class="content">
        <h3>Sri Lanka</h3>
        <span>Pearl of the Indian Ocean</span>
        <p>Sri Lanka, a teardrop-shaped gem in the Indian Ocean, is a land of
            breathtaking beauty and captivating contrasts. With its lush tea plantations,
            golden beaches, ancient temples, and vibrant wildlife, this island paradise
            offers an enchanting blend of natural splendor and rich cultural heritage. 
            Whether exploring the misty highlands, relaxing on sun-kissed shores, 
            or discovering the remnants of ancient civilizations,
            Sri Lanka promises a journey filled with wonder and unforgettable memories.</p>
            <a href="#" class="btn">Book</a>
    </div>
    </section>
    <!-- home section ends  -->

    <!-- Packages section starts  -->
    <?php
    include 'packages.php';
    ?>
    <!-- Packages section ends  -->



    <!-- icons section starts -->
    <!-- <section class="icons-container">

        <div class="icons">
            <img src="images/delivery.png" alt="">
            <div class="info">
                <h3>free delivery</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/money.png" alt="">
            <div class="info">
                <h3>10 days returns</h3>
                <span>money back guarantee</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/gifts.png" alt="">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/payment.png" alt="">
            <div class="info">
                <h3>secure payment</h3>
                <span>protected by paypal</span>
            </div>
        </div>

    </section> -->
    <!-- icons section ends  -->

    <!-- about section starts  -->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span>us</h1>
        <div class="row">
            <div class="video-container">
                <video src="video/sunset.mp4" loop autoplay muted></video>
                <h3>SRI LANKA</h3>
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Welcome to Bon Voyage, your gateway to exploring the 
                    enchanting beauty of Sri Lanka. Our team of seasoned travel
                     professionals is dedicated to crafting unforgettable
                      journeys, ensuring your safety and comfort at every 
                      turn. Whether you're marveling at the island's stunning
                       landscapes or delving into its rich cultural heritage, 
                       we provide customized travel solutions to suit your every 
                       need. As a leading tour operator, we offer a wide array of
                        services, from budget-friendly options to luxurious getaways,
                         making your Sri Lankan adventure both accessible and extraordinary.
                </p>
                <p>With over a decade of experience in the travel industry, Bon Voyage
                     takes pride in delivering exceptional service and personalized itineraries.
                      Our offerings include bespoke holiday packages, exclusive villa bookings, 
                      incentive tours, and more, all tailored to your unique preferences. 
                      We prioritize your satisfaction, privacy, and convenience, ensuring 
                      no hidden costs and meticulous attention to detail. At 
                    Bon Voyage, we are committed to providing a royal experience that sets us 
                    apart, making every moment of your journey truly special.
                </p>
                <!-- <a href="#" class="btn">learn more</a> -->
            </div>
        </div>
    </section>
    <!-- about section ends  -->

    <!-- review section stars  -->
    <?php
    include 'review.php';
    ?>
    <!-- review section ends   -->

    <!-- contact section starts  -->



    <section class="contact" id="contact">
        <h1 class="heading">
            <div class="row">
                <form action="">
                    <input type="text" placeholder="Name" class="box">
                    <input type="email" placeholder="Email" class="box">
                    <input type="number" placeholder="Number" class="box">
                    <textarea name="" class="box" placeholder="Messsage" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="send messsage" class="btn">
                </form>

                <div class="image">
                    <img src="images/reviewimg.jpg" alt="contact">
                </div>
            </div>
        </h1>
    </section>
    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>quick links </h3>
                <a href="#">home</a>
                <a href="#">about </a>
                <a href="#">produts </a>
                <a href="#">review </a>
                <a href="#">contact </a>
                <a href="adminlogin.php">admin </a>
             </div>

             <div class="box">
                <h3>extra links </h3>
                <a href="#">my account</a>
                <a href="#">my order </a>
                <a href="#">my favourite </a>
             </div>

             <div class="box">  
                <h3>locations  </h3>
                <a href="#">india </a>
                <a href="#">USA  </a>
                <a href="#">japan </a>
                <a href="#">france </a>
             </div>
             
             <div class="box">  
                <h3>contact info  </h3>
                <a href="#">+94773278168 </a>
                <a href="#">zeidhhassim@gmail.com  </a>
                <a href="#">Kandy,sri lanka </a>
                <!-- <img src="2150787716.jpg" alt="contact info"> -->
             </div>

        </div>

        <div class="credit">
            created by <span>zeidh hassim</span>| all rights reserved
        </div>

    </section>


    <!-- footer section ends  -->




</body>
</html>