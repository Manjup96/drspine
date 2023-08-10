<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

<body>
    <?php
    $page = 'index';
    include 'menu.php';
    ?>

    <!-- Carousel Start -->
    <style>
        @media (max-width: 767px) {

            /* Styles for mobile view */
            #header-carousel .carousel-inner .carousel-item .carousel-caption a {
                /* Customize button styles for mobile view */
                margin-bottom: -150px;
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {

            /* Styles for iPad view */
            #header-carousel .carousel-inner .carousel-item .carousel-caption {
                /* Customize caption styles for iPad view */
                margin-bottom: -100px;
            }

        }
    </style>



    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/slider_1.jpg" alt="Image" style="filter: brightness(0.7); ">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="margin-bottom: 60px;">
                            <h5 class="text-white text-uppercase text-center hide-on-mobile"></h5>
                            <h5 class="display-5 mb-md-4 text-center hide-on-mobile " id="ipad_display" style="color:white;font-weight:bold;">Adding Life to Years and Years to Life!</h5>
                            <h5 class="display-8 mb-md-4 text-center hide-on-mobile " id="ipad_display" style="color:white;font-weight:bold;">Heal Your Spine, Heal Your Life. India's 1st Chain of American Chiropractic</h5>
                            <a href="contact.php" class="btn btn-primary px-md-4 fs-5" style="height:48px; background-color: #55b6c7; border-radius: 30px;">Consult Today</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/slider_3.jpg" alt="Image" style="filter: brightness(0.7);">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; margin-bottom: 60px;">
                            <h5 class="text-white text-uppercase text-center hide-on-mobile"></h5>
                            <h5 class="display-5 mb-md-4 text-center hide-on-mobile " id="ipad_display" style="color:white;font-weight:bold;">Adding Life to Years and Years to Life!</h5>
                            <h5 class="display-8 mb-md-4 text-center hide-on-mobile " id="ipad_display" style="color:white;font-weight:bold;">Heal Your Spine, Heal Your Life. India's 1st Chain of American Chiropractic</h5>
                            <a href="contact.php" class="btn btn-primary px-md-4 fs-5" style="height:48px; background-color: #55b6c7; border-radius: 30px;">Consult Today</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <!-- Carousel End -->


    <!-- Para1 Starts -->
    <style>
        /* Custom CSS for para1 section */

        #para1 h1 {
            color: #55b6c7;
            font-size: 45px;
            /* Adjusted font size */
            margin-top: 10px;
            padding: 40px;
            /* Adjusted padding */
            text-align: center;
        }

        #para1 p {
            font-size: 20px;
            /* Adjusted font size */
            text-align: justify;
            padding: 50px;
            /* Adjusted padding */
            margin-top: -80px;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para1 h1 {
                font-size: 28px;
                /* Adjusted font size */
                padding: 20px 0;
                /* Adjusted padding */

            }

            #para1 p {
                font-size: 16px;
                /* Adjusted font size */
                padding: 20px;
                /* Adjusted padding */
                margin-top: 10px;
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para1 h1 {
                font-size: 30px;
                /* Adjusted font size */
                padding: 30px 0;
                /* Adjusted padding */
            }

            #para1 p {
                font-size: 17px;
                /* Adjusted font size */
                padding: 30px;
                /* Adjusted padding */
                margin-top: -20px;

            }
        }
    </style>

    <div class="container-fluid" id="para1">
        <div class="row">
            <div class="col-md-12">
                <h1>Dr Spine Clinic - #1 American Chiropractic Clinic in Bangalore</h1>

                <div>
                    <p>Our Chiropractic team serves Bangalore and the surrounding areas such as Mysore, Tumkur, Haasan, Mandya to name a few. Our Chiropractors at Dr. Spine clinic are dedicated to chiropractic solutions to target your unique needs, whether you are suffering from lower back pain, upper back pain, cervical neck pain, headaches, or even just plain old muscular tightness and tension. Dr Spine is trusted and perceived as best chiropractic clinic in Bangalore.</p>
                    <p>You may need pain relief after suffering an accident, experiencing an injury, or if you have a specific condition such as chronic back pain or a spinal condition; even if you just want to improve your overall health, our chiropractors can help you achieve your wellness goals! Please visit the <a href="#" style="color: #55b6c7;">testimonials page</a> to see what our patients are saying about our chiropractors in Bangalore clinic and getting regular chiropractic treatments.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Para1 Ends -->



<<<<<<< HEAD
    <!-- Doctors images Start -->
    <style>
        /* Custom CSS for centering and spacing images */
        #doctors .row {
            justify-content: center;
            margin-top: 20px;
        }
=======
<!-- Doctors images Start -->
<style>
    /* Custom CSS for centering and spacing images */
    #doctors .row {
        justify-content: center;
        margin-top: 20px;
    }

    #doctors img {
        width: 350px;
        margin: 0 80px 20px; /* Adjust the margin as needed */
    }

    #doctors .col-md-12 {
        text-align: center; /* Center the text */
        font-size: 25px;
        color: #55b6c7;
        font-weight: bold;
    }

    /* Custom CSS for button color */
    #doctors .custom-btn {
        background-color: #55b6c7; /* Change to your desired color */
        color: white; /* Text color */
        border: none; /* Remove border */
        border-radius: 5px; /* Add border radius */
        padding: 15px 20px; /* Adjust padding */
        width: 350px;
        font-size: 23px;
        font-weight: bold;
        margin-top: 40px;
        text-decoration: none;
    }

    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {

        #doctors img {
            width: 100%;
            max-width: 200px; /* Adjust maximum width for smaller screens */
            margin: 0 10px 20px;
        }

        #doctors .d-flex.justify-content-center {
                flex-direction: column;
                align-items: center;
        }

        #doctors .custom-btn {
            width: 100%;
            font-size: 18px;
            margin-top: 20px;
        }
        #doctors .ml-3 {
            margin-right: 25px;
        }
    }
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34

        #doctors img {
            width: 350px;
            margin: 0 80px 20px;
            /* Adjust the margin as needed */
        }

        #doctors .col-md-12 {
<<<<<<< HEAD
            text-align: center;
            /* Center the text */
            font-size: 25px;
            color: #55b6c7;
            font-weight: bold;
=======
            font-size: 22px;
            text-align: center;
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        /* Custom CSS for button color */
        #doctors .custom-btn {
            background-color: #55b6c7;
            /* Change to your desired color */
            color: white;
            /* Text color */
            border: none;
            /* Remove border */
            border-radius: 5px;
            /* Add border radius */
            padding: 15px 20px;
            /* Adjust padding */
            width: 350px;
            font-size: 23px;
            font-weight: bold;
            margin-top: 40px;
            text-decoration: none;
        }

<<<<<<< HEAD
        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {

            #doctors img {
                width: 100%;
                max-width: 200px;
                /* Adjust maximum width for smaller screens */
                margin: 0 10px 20px;
            }

            #doctors .col-md-12 {
                font-size: 20px;
            }

            #doctors .custom-btn {
                width: 100%;
                font-size: 18px;
                margin-top: 20px;
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #doctors img {
                width: 100%;
                max-width: 250px;
                /* Adjust maximum width for iPad screens */
                margin: 0 20px 20px;
            }

            #doctors .col-md-12 {
                font-size: 22px;
            }

            #doctors .custom-btn {
                width: 100%;
                font-size: 20px;
                margin-top: 30px;
            }
        }
    </style>

    <div class="container-fluid" id="doctors">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div class="mr-3">
                        <img src="img/doctor_1.png" alt="">
                        <p>Dr. John Clark</p>
                    </div>
                    <div class="ml-3">
                        <img src="img/doctor_3.png" alt="">
                        <p>Dr. Troy Scheible</p>
                    </div>
=======
<div class="container-fluid" id="doctors">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="mr-3">
                    <img src="img/doctor_1.png" alt="" >
                    <p>Dr. John Clark</p>
                </div>
                <div class="ml-3">
                <img src="img/doctor_3.png" alt="">
                    <p>Dr. Troy Scheible</p>
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
                </div>
            </div>

            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div class="mr-3">
                        <img src="img/doctor_2.png" alt="">
                        <p>Dr. Michael Wohlgemuth</p>
                    </div>
                    <div class="ml-3">
                        <img src="img/doctor_4.png" alt="">
                        <p>Dr. Chetan Upadhyaya</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div class="mx-auto">
                        <img src="img/doctor_5.png" alt="">
                        <p>docMike</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="doctors">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="contact.php" class="custom-btn">
                    <i class="fas fa-phone-alt me-2"></i> <!-- Phone icon from Font Awesome -->
                    Book an Appointment
                </a>
            </div>
        </div>
    </div>


    <!-- Doctors images End-->

    <!-- Testimonial section Start-->

    <style>
        /* Custom CSS for testimonials section */
        #testimonials {
<<<<<<< HEAD
            margin-top: 40px;
            background-color: #F4F4F4;
            /* Grey background color */
            padding: 50px 0;
            /* Add some padding for spacing */
        }

        #testimonials h1 {
            color: #55b6c7;
=======
            display: none;
        }
        .testimonial-card {
            display: none; /* Hide cards in mobile view */
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #testimonials {
            display: none;
        }
        .testimonial-card {
            display: none; /* Hide cards in iPad view */
        }
    }
</style>

<div class="container-fluid" id="testimonials">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Our Chiropractic Care</h1>
        </div>
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_1.png" alt="Person 1">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">OUR CHIROPRACTORS</h4>
                        <p class="testimonial-paragraph">Highly trained, specialist American chiropractors who mastered the art of spinal adjustments.</p>
                        <a href= "about.php" class="read-more-btn">Read More> </a>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_2.png" alt="Person 2">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">95% SUCCESS RATE</h4>
                        <p class="testimonial-paragraph">At our Bangalore spine clinic, we have treated 1000s of patients with a very high success rate.</p>
                        <a href= "services.php" class="read-more-btn" >Read More> </a>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_3.png" alt="Person 3">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">CONDITIONS TREATED</h4>
                        <p class="testimonial-paragraph">We treat a wide range of spine-related issues. Back pain, neck pain, disc degeneration, etc.</p>
                        <a href= "pain_relief_chiropractor.php" class="read-more-btn">Read More> </a>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_4.png" alt="Person 4">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">WHAT'S CHIROPRACTIC?</h4>
                        <p class="testimonial-paragraph">Chiropractic is natural health care that involves treating patients without the use of medicines.</p>
                        <a href= "what_is_chiropractic.php" class="read-more-btn">Read More> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section End-->


<!-- Para2 Starts-->
<style>
    /* Custom CSS for para2 section */
    #para2 {
        margin-top: 10px;
        padding: 40px 70px; /* Add some padding for spacing */
    }
    
    #para2 img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    #para2 h4 {
        
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 20px;
        background-color: #bdc3c7;
        text-align:center;
    }

    #para2 h2 {
        color: #55b6c7;
        font-size: 32px;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    #para2 p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: justify;
    }
    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {
        #para2 {
            padding: 20px; /* Adjusted padding for spacing */
        }

        #para2 h4 {
            font-size: 17px; /* Adjusted font size */
            margin-top: 10px; /* Adjusted margin */
        }

        #para2 h2 {
            font-size: 26px; /* Adjusted font size */
            margin-top: 20px; /* Adjusted margin */
        }

        #para2 p {
            font-size: 16px; /* Adjusted font size */
        }
        #para2 img:last-child {
            display: none;
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #para2 h4 {
            font-size: 20px; /* Adjusted font size */
            margin-top: 80px; /* Adjusted margin */
        }

        #para2 h2 {
            font-size: 30px; /* Adjusted font size */
            margin-top: 23px; /* Adjusted margin */
        }

        #para2 p {
            font-size: 17px; /* Adjusted font size */
        }
        #para2 img {
            margin-top: 40px;
            width: 100%;
            height: 50%;
        }
    }
    /* Hide the image in desktop and mobile views */
    @media (min-width: 992px) {
        #para2 img:last-child {
            display: none;
        }
    }
</style>

<div class="container-fluid" id="para2">
    <div class="row">
        <div class="col-md-6">
            <img src="img/img-1.png" alt="">
            <img src="img/gallery15.png" alt="" style= "width: 350px; height:350px; margin-top: 5px;">
        </div>
        <div class="col-md-6">
            <h4>Get Relief from Pain Without Surgery</h4>
            <h2>We are Specialists As Chiropractors</h2>
            <p>Our team of experienced chiropractors in Bangalore, India are spine specialists in treating musculoskeletal and connected neurological conditions using the latest chiropractic techniques available for the first time in Bangalore and India.</p>
            <p>The advantage of our Bangalore Chiropractors is that they treat the cause of the lower & upper back pain or ailment and not just the symptom. Unlike drugs that mask the pain and surgery, which can be avoided in 95% of the cases through experienced and advanced chiropractic treatment.</p>
            <p>Our Chiropractors achieve your health goals by eliminating the misalignments in the spine and offer a range of spine treatments without surgery.</p>
        </div>
    </div>
</div>
<!-- Para2 Ends-->




<!-- Para3 Starts-->
<style>
    /* Custom CSS for para3 section */
    #para3 {
        margin-top: 50px;
        padding: 40px 70px; /* Add some padding for spacing */
        background-color: #F4F4F4;
    }
    #para3 .row {
        align-items: center; /* Vertically align items in the center */
    }

    #para3 img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    #para3 h2 {
        font-size: 32px;
        margin-top: 0;
        margin-bottom: 15px;
        color: #55b6c7;
    }

    #para3 p {
        font-size: 20px;
        line-height: 2.0;
        margin-bottom: 15px;
    }
    #para3 p1 {
        font-size: 70px;
    }
    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {
        #para3 {
            padding: 20px 20px; /* Adjust padding for spacing */
            margin-top: -20px;
        }
        #para3 h2 {
            font-size: 24px; /* Adjust font size for better readability */
            margin-bottom: 10px; /* Adjust margin for better spacing */
            margin-top:20px;
        }
        #para3 p {
            font-size: 16px; /* Adjust font size for better readability */
        }
        #para3 p.p1 {
            font-size: 36px; /* Adjust font size for better readability */
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #para3 {
            padding: 40px; /* Adjust padding for spacing */
        }
        #para3 h2 {
            font-size: 26px; /* Adjust font size for better readability */
        }
        #para3 p {
            font-size: 17px; /* Adjust font size for better readability */
        }
        #para3 p.p1 {
            font-size: 42px; /* Adjust font size for better readability */
        }
    }
</style>

<div class="container-fluid" id="para3">
    <div class="row">
        <div class="col-md-6">
            <img src="img/img-2.png" alt="">
        </div>
        <div class="col-md-6">
            <h2>Heal Your Spine, Heal Your Life!</h2>
            <p>During the past 11 years, Dr.Spine has become a trusted and preferred clinic for patients suffering from spine-related issues. Conditions that Dr.Spine can treat with non-invasive methods are back pain, headache / migraines, neck pain, disc bulge, slip disc, disc herniation, sciatica, leg pain, scoliosis, spondylitis, postural deformities, ear infection, colic, high blood pressure, PMS, and related issues.</p>
        </div>
    </div>
</div>

<!-- Para3 Ends-->


<!-- Para4 Starts-->
<style>
    /* Custom CSS for para4 section */
    #para4 {
        margin-top: 10px;
        padding: 40px 70px; /* Add some padding for spacing */
    }
    #para4 .row {
        align-items: center; /* Vertically align items in the center */
    }
    
    #para4 img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    #para4 h4 {
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 20px;
        text-align:center;
        background-color: #bdc3c7;
    }

    #para4 h2 {
        color: #55b6c7;
        font-size: 32px;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    #para4 p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: justify;
    }

    #para4 .custom-btn {
        background-color: #55b6c7;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 23px;
        cursor: pointer;
        display: inline-block;
        width: 550px;
        text-align: center;
        text-decoration: none;
    }

    #para4 .btn-icon {
        margin-right: 10px;
    }
    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {
        #para4 {
            padding: 40px 20px;
        }
        #para4 .custom-btn {
            width: 100%; /* Fill the container width */
            margin-top: 20px; /* Add margin for spacing */
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
            margin-bottom: 20px;
        }
<<<<<<< HEAD
=======
        #para4 h4 {
            margin-top: -20px;
            font-size: 17px;
        }
        #para4 p {
            font-size: 16px;
        }
    }
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34

        #testimonials .row {
            justify-content: center;
            margin-top: 20px;
        }

        .testimonial-card {
            border: none;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
            /* Add box shadow to all sides */
            min-width: 250px;
        }

        .testimonial-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .testimonial-content {
            margin-top: 20px;
        }

        .testimonial-heading {
            margin-bottom: 30px;
            color: #55b6c7;
        }

        .testimonial-paragraph {
            margin-bottom: 40px;
            font-size: 18px;
        }

        .read-more-btn {
            background-color: #55b6c7;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 7px 10px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #testimonials {
                display: none;
            }

            .testimonial-card {
                display: none;
                /* Hide cards in mobile view */
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #testimonials {
                display: none;
            }

            .testimonial-card {
                display: none;
                /* Hide cards in iPad view */
            }
        }
    </style>

    <div class="container-fluid" id="testimonials">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Our Chiropractic Care</h1>
            </div>
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div class="testimonial-card">
                        <img class="testimonial-image" src="img/testimonial_1.png" alt="Person 1">
                        <div class="testimonial-content">
                            <h4 class="testimonial-heading">OUR CHIROPRACTORS</h4>
                            <p class="testimonial-paragraph">Highly trained, specialist American chiropractors who mastered the art of spinal adjustments.</p>
                            <a href="about.php" class="read-more-btn">Read More> </a>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <img class="testimonial-image" src="img/testimonial_2.png" alt="Person 2">
                        <div class="testimonial-content">
                            <h4 class="testimonial-heading">95% SUCCESS RATE</h4>
                            <p class="testimonial-paragraph">At our Bangalore spine clinic, we have treated 1000s of patients with a very high success rate.</p>
                            <br>
                            <a href="about.php" class="read-more-btn">Read More> </a>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <img class="testimonial-image" src="img/testimonial_3.png" alt="Person 3">
                        <div class="testimonial-content">
                            <h4 class="testimonial-heading">CONDITIONS TREATED</h4>
                            <p class="testimonial-paragraph">We treat a wide range of spine-related issues. Back pain, neck pain, disc degeneration, etc.</p>
                            <br>
                            <a href="about.php" class="read-more-btn">Read More> </a>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <img class="testimonial-image" src="img/testimonial_4.png" alt="Person 4">
                        <div class="testimonial-content">
                            <h4 class="testimonial-heading">WHAT'S CHIROPRACTIC?</h4>
                            <p class="testimonial-paragraph">Chiropractic is natural health care that involves treating patients without the use of medicines.</p>
                            <a href="about.php" class="read-more-btn">Read More> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section End-->


    <!-- Para2 Starts-->
    <style>
        /* Custom CSS for para2 section */
        #para2 {
            margin-top: 10px;
            padding: 40px 70px;
            /* Add some padding for spacing */
        }

        #para2 img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        #para2 h4 {

            font-size: 23px;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        #para2 h2 {
            color: #55b6c7;
            font-size: 32px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        #para2 p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para2 {
                padding: 20px;
                /* Adjusted padding for spacing */
            }

            #para2 h4 {
                font-size: 20px;
                /* Adjusted font size */
                margin-top: 10px;
                /* Adjusted margin */
            }

            #para2 h2 {
                font-size: 26px;
                /* Adjusted font size */
                margin-top: 20px;
                /* Adjusted margin */
            }

            #para2 p {
                font-size: 16px;
                /* Adjusted font size */
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para2 h4 {
                font-size: 21px;
                /* Adjusted font size */
                margin-top: 12px;
                /* Adjusted margin */
            }

            #para2 h2 {
                font-size: 30px;
                /* Adjusted font size */
                margin-top: 23px;
                /* Adjusted margin */
            }

            #para2 p {
                font-size: 17px;
                /* Adjusted font size */
            }

            #para2 img {
                margin-top: 250px;
                width: 100%;
                height: 50%;
            }
        }
    </style>

    <div class="container-fluid" id="para2">
        <div class="row">
            <div class="col-md-6">
                <img src="img/img-1.png" alt="">
            </div>
            <div class="col-md-6">
                <h4>Get Relief from Pain Without Surgery</h4>
                <h2>We are Specialists As Chiropractors</h2>
                <p>Our team of experienced chiropractors in Bangalore, India are spine specialists in treating musculoskeletal and connected neurological conditions using the latest chiropractic techniques available for the first time in Bangalore and India.</p>
                <p>The advantage of our Bangalore Chiropractors is that they treat the cause of the lower & upper back pain or ailment and not just the symptom. Unlike drugs that mask the pain and surgery, which can be avoided in 95% of the cases through experienced and advanced chiropractic treatment.</p>
                <p>Our Chiropractors achieve your health goals by eliminating the misalignments in the spine and offer a range of spine treatments without surgery.</p>
            </div>
        </div>
    </div>
    <!-- Para2 Ends-->




    <!-- Para3 Starts-->
    <style>
        /* Custom CSS for para3 section */
        #para3 {
            margin-top: 50px;
            padding: 40px 70px;
            /* Add some padding for spacing */
            background-color: #F4F4F4;
        }

        #para3 .row {
            align-items: center;
            /* Vertically align items in the center */
        }

        #para3 img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        #para3 h2 {
            font-size: 32px;
            margin-top: 0;
            margin-bottom: 15px;
            color: #55b6c7;
        }

        #para3 p {
            font-size: 20px;
            line-height: 2.0;
            margin-bottom: 15px;
        }

        #para3 p1 {
            font-size: 70px;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para3 {
                padding: 20px 20px;
                /* Adjust padding for spacing */
                margin-top: -20px;
            }

            #para3 h2 {
                font-size: 24px;
                /* Adjust font size for better readability */
                margin-bottom: 10px;
                /* Adjust margin for better spacing */
                margin-top: 20px;
            }

            #para3 p {
                font-size: 16px;
                /* Adjust font size for better readability */
            }

            #para3 p.p1 {
                font-size: 36px;
                /* Adjust font size for better readability */
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para3 {
                padding: 40px;
                /* Adjust padding for spacing */
            }

            #para3 h2 {
                font-size: 26px;
                /* Adjust font size for better readability */
            }

            #para3 p {
                font-size: 17px;
                /* Adjust font size for better readability */
            }

            #para3 p.p1 {
                font-size: 42px;
                /* Adjust font size for better readability */
            }
        }
    </style>

    <div class="container-fluid" id="para3">
        <div class="row">
            <div class="col-md-6">
                <img src="img/img-2.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>Heal Your Spine, Heal Your Life!</h2>
                <p>During the past 11 years, Dr.Spine has become a trusted and preferred clinic for patients suffering from spine-related issues. Conditions that Dr.Spine can treat with non-invasive methods are back pain, headache / migraines, neck pain, disc bulge, slip disc, disc herniation, sciatica, leg pain, scoliosis, spondylitis, postural deformities, ear infection, colic, high blood pressure, PMS, and related issues.</p>
            </div>
        </div>
    </div>

    <!-- Para3 Ends-->


    <!-- Para4 Starts-->
    <style>
        /* Custom CSS for para4 section */
        #para4 {
            margin-top: 10px;
            padding: 40px 70px;
            /* Add some padding for spacing */
        }

        #para4 .row {
            align-items: center;
            /* Vertically align items in the center */
        }

        #para4 img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        #para4 h4 {
<<<<<<< HEAD
            font-size: 23px;
            margin-bottom: 10px;
            margin-top: 20px;
=======
            margin-top: -20px;
            font-size: 20px;
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        #para4 h2 {
            color: #55b6c7;
            font-size: 32px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        #para4 p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }

        #para4 .custom-btn {
            background-color: #55b6c7;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 23px;
            cursor: pointer;
            display: inline-block;
            width: 550px;
            text-align: center;
            text-decoration: none;
        }

        #para4 .btn-icon {
            margin-right: 10px;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para4 {
                padding: 40px 20px;
            }

            #para4 .custom-btn {
                width: 100%;
                /* Fill the container width */
                margin-top: 20px;
                /* Add margin for spacing */
                margin-bottom: 20px;
                text-align: center;
                /* Center align button text */
            }

            #para4 h4 {
                margin-top: -20px;
                font-size: 24px;
            }

            #para4 p {
                font-size: 16px;
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para4 {
                padding: 40px 70px;
            }

            #para4 .row {
                align-items: center;
            }

            #para4 .custom-btn {
                width: 100%;
            }

            #para4 p {
                font-size: 17px;
            }

            #para4 h4 {
                margin-top: -20px;
                font-size: 26px;
            }
        }
    </style>

    <div class="container-fluid" id="para4">
        <div class="row">
            <div class="col-md-6">
                <h4>Expect the Best Chiropractic Care</h4>
                <h2>Let us Heal you today!</h2>
                <p>You can expect the best chiropractic care, which includes spinal adjustments, neck manipulation, and various other techniques for your health.</p>
                <a class="custom-btn" href="backpain.php">
                    <i class="fas fa-book-open btn-icon"></i> Our Treatment Approach
                </a>
            </div>
            <div class="col-md-6">
                <img src="img/img-3.png" alt="">
            </div>
        </div>
    </div>

    <!-- Para4 Ends-->


    <!-- Para5 Starts-->

<<<<<<< HEAD
    <style>
        /* Custom CSS for para5 section */
=======
<style>
    /* Custom CSS for para5 section */
    #para5 {
        margin-top: 10px;
        padding: 40px 70px; /* Add some padding for spacing */
        background-color: #F4F4F4;
    }
    
    #para5 img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    #para5 h4 {
        
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 20px;
        text-align:center;
        background-color: #bdc3c7;
    }

    #para5 h2 {
        color: #55b6c7;
        font-size: 32px;
        margin-top: 30px;
        margin-bottom: 15px;
    }

    #para5 p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: justify;
    }
    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        #para5 {
            margin-top: 10px;
            padding: 40px 70px;
            /* Add some padding for spacing */
            background-color: #F4F4F4;
        }
<<<<<<< HEAD
=======
        #para5 h2 {
            font-size: 24px; /* Adjust font size for better readability */
            margin-bottom: 10px; /* Adjust margin for better spacing */
        }
        #para5 p {
            font-size: 16px; /* Adjust font size for better readability */
        }
        #para5 h4 {
            font-size: 17px;
        }
        #para5 img:last-child {
            display: none;
        }
    }
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34

        #para5 img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
<<<<<<< HEAD

        #para5 h4 {

            font-size: 23px;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        #para5 h2 {
            color: #55b6c7;
            font-size: 32px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        #para5 p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para5 {
                padding: 30px 20px;
                /* Adjust padding for spacing */
            }

            #para5 h2 {
                font-size: 24px;
                /* Adjust font size for better readability */
                margin-bottom: 10px;
                /* Adjust margin for better spacing */
            }

            #para5 p {
                font-size: 16px;
                /* Adjust font size for better readability */
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para5 {
                padding: 40px 50px;
                /* Adjust padding for spacing */
            }

            #para5 h2 {
                font-size: 26px;
                /* Adjust font size for better readability */
            }

            #para5 p {
                font-size: 17px;
                /* Adjust font size for better readability */
            }

            #para5 img {
                margin-top: 150px;
            }
        }
    </style>

    <div class="container-fluid" id="para5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/img-4.png" alt="">
            </div>
            <div class="col-md-6">
                <h4>Top Chiropractic Clinic In Bengaluru</h4>
                <h2>Conditions that benefit from Chiropractic</h2>
                <p>We have successfully treated patients with our gentle, natural chiropractic care. They got relief from issues like,</p>
                <p><i class="fas fa-check" style="color: green;"></i> Back & Neck Pain</p>
                <p><i class="fas fa-check" style="color: green;"></i> Knee Pain</p>
                <p><i class="fas fa-check" style="color: green;"></i> Headaches</p>
                <p><i class="fas fa-check" style="color: green;"></i> Sciatica</p>
                <p><i class="fas fa-check" style="color: green;"></i> Sports Injuries</p>
                <p><i class="fas fa-check" style="color: green;"></i> Disc Bulging</p>
                <br>
                <p>We also treat:</p>
                <p><i class="fas fa-check" style="color: green;"></i> Shoulder Pain
                    <i class="fas fa-check" style="color: green;"></i> Slipped Disc
                    <i class="fas fa-check" style="color: green;"></i> Scoliosis
                    <i class="fas fa-check" style="color: green;"></i> Wrist Tendonitis
                    <i class="fas fa-check" style="color: green;"></i> Carpal Tunnel Syndrome
                    <i class="fas fa-check" style="color: green;"></i> Postural Deformities
                    <i class="fas fa-check" style="color: green;"></i> Balance Issues
                </p>
            </div>
=======
        #para5 h2 {
            font-size: 26px; /* Adjust font size for better readability */
        }
        #para5 p {
            font-size: 17px; /* Adjust font size for better readability */
        }
        #para5 img{
            
        }
        #para5 h4 {
            font-size: 20px;
        }
    }
        /* Hide the image in desktop and mobile views */
        @media (min-width: 992px) {
        #para5 img:last-child {
            display: none;
        }
    }

</style>

<div class="container-fluid" id="para5">
    <div class="row">
        <div class="col-md-6">
            <img src="img/img-4.png" alt="">
            <img src="img/gallery6.png" alt="" style= "width: 350px; margin-top: 5px;">
        </div>
        <div class="col-md-6">
            <h4>Top Chiropractic Clinic In Bengaluru</h4>
            <h2>Conditions that benefit from Chiropractic</h2>
            <p>We have successfully treated patients with our gentle, natural chiropractic care. They got relief from issues like,</p>
            <p><i class="fas fa-check" style="color: green;"></i> Back & Neck Pain</p>
            <p><i class="fas fa-check" style="color: green;"></i> Knee Pain</p>
            <p><i class="fas fa-check" style="color: green;"></i> Headaches</p>
            <p><i class="fas fa-check" style="color: green;"></i> Sciatica</p>
            <p><i class="fas fa-check" style="color: green;"></i> Sports Injuries</p>
            <p><i class="fas fa-check" style="color: green;"></i> Disc Bulging</p>
             <br>
            <p>We also treat:</p>
            <p><i class="fas fa-check" style="color: green;"></i> Shoulder Pain
            <i class="fas fa-check" style="color: green;"></i> Slipped Disc
             <i class="fas fa-check" style="color: green;"></i> Scoliosis
             <i class="fas fa-check" style="color: green;"></i> Wrist Tendonitis
             <i class="fas fa-check" style="color: green;"></i> Carpal Tunnel Syndrome
             <i class="fas fa-check" style="color: green;"></i> Postural Deformities
             <i class="fas fa-check" style="color: green;"></i> Balance Issues</p>
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        </div>
    </div>

    <!-- Para5 Ends-->



    <!-- Banner Starts-->

    <style>
        /* Custom CSS for banner section */
        #banner {
            background-image: radial-gradient(at center center, #DFFAFF 50%, #55B6C7 100%);
            /* Background gradient */
            padding: 40px 0;
            /* Adjusted padding */
            text-align: center;
        }

        #banner h1 {
            font-size: 36px;
            /* Slightly reduced font size */
            margin-bottom: 15px;
            color: #495057;
            margin-left: 20px;
        }

        #banner p {
            font-size: 18px;
            /* Slightly reduced font size */
            color: #495057;
            margin-bottom: 20px;
            /* Slightly reduced margin */
            margin-left: 5px;
        }

        #banner button {
            background-color: #55b6c7;
            color: white;
            border: none;
            border-radius: 20px;
            /* Slightly reduced border radius */
            padding: 20px 20px;
            /* Adjusted padding */
            font-size: 20px;
            /* Slightly reduced font size */
            font-weight: bold;
            cursor: pointer;
            margin-right: 20px;
            /* Reduced margin */
        }

        @media (max-width: 768px) {
            #banner {
                padding: 20px 0;
                /* Adjusted padding for smaller screens */
            }

            #banner button {
                padding: 10px 15px;
                /* Further reduced padding for smaller screens */
                margin-left: 20px;
                /* Remove margin for centering */
                
            }
        }
    </style>

    <div class="container-fluid mb-5" id="banner">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h1>Call Us Today for Consultation</h1>
                <p>3 Convenient Clinic Locations in Bangalore | Indiranagar | Whitefield | New BEL Road</p>
            </div>
            <div class="col-md-4 col-sm-12 text-center" style="padding-top:20px;">
                <button><i class="fas fa-phone-alt me-2"></i>CALL +91 7550705070</button>
            </div>
        </div>
    </div>

    <!-- Banner Ends-->


<<<<<<< HEAD
    <!-- Para6 Starts-->
    <style>
        /* Custom CSS for para6 section */
=======
<!-- Para6 Starts-->
<style>
    /* Custom CSS for para6 section */
    #para6 {
        margin-top: 100px;
        padding: 40px 80px; /* Add padding for spacing */
        text-align: center; /* Center align text */
    }

    #para6 h4 {
        font-size: 23px;
        margin-bottom: 10px;
        color: #333; /* Text color */
        text-align:center;
        background-color: #bdc3c7;
    }

    #para6 h2 {
        font-size: 42px;
        margin-top: 20px;
        margin-bottom: 15px;
        color: #55b6c7; /* Text color */
    }

    #para6 p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 30px;
        margin-top: 40px;
    }

    #para6 img {
        max-width: 50%;
        height: auto;
        border-radius: 5px;
    }

    #para6 .d-flex {
        margin-top: 30px;
    }

    #para6 .d-flex .mr-3,
    #para6 .d-flex .ml-3 {
        flex: 1;
    }

    #para6 .d-flex p {
        font-size: 30px;
        font-weight: bold;
        color: #55b6c7; /* Text color */
    }

    #para6 .d-flex p1 {
        font-size: 18px;
        line-height: 1.9;
    }

    /* Custom CSS for Read More button */
    #para6 .read-more-btn {
            font-size: 16px; /* Adjusted font size */
            padding: 10px 20px; /* Adjusted padding */
            display: block; /* Make the button an inline-block element */
            margin-top: 0; /* Remove top margin */
            margin-left: 205px;
            max-width: 120px; /* Remove max width */
        }
     /* Responsive adjustments for mobile view */
     @media (max-width: 767.98px) {
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        #para6 {
            margin-top: 100px;
            padding: 40px 80px;
            /* Add padding for spacing */
            text-align: center;
            /* Center align text */
        }

        #para6 h4 {
<<<<<<< HEAD
            font-size: 23px;
            margin-bottom: 10px;
            color: #333;
            /* Text color */
=======
            font-size: 17px; /* Adjusted font size */
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        #para6 h2 {
            font-size: 42px;
            margin-top: 20px;
            margin-bottom: 15px;
            color: #55b6c7;
            /* Text color */
        }

        #para6 p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
            margin-top: 40px;
        }

<<<<<<< HEAD
        #para6 img {
            max-width: 30%;
            height: auto;
            border-radius: 5px;
=======
        #para6 .read-more-btn {
            font-size: 14px; /* Adjusted font size */
            padding: 7px 14px; /* Adjusted padding */
            display: block; /* Make the button a block element */
            margin: 0 auto; /* Center the button */
            max-width: 110px; /* Set max width to limit button width */
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #para6 h4 {
            font-size: 20px; /* Adjusted font size */
            margin-top: -80px;
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        #para6 .d-flex {
            margin-top: 30px;
        }

        #para6 .d-flex .mr-3,
        #para6 .d-flex .ml-3 {
            flex: 1;
        }

        #para6 .d-flex p {
            font-size: 30px;
            font-weight: bold;
            color: #55b6c7;
            /* Text color */
        }

        #para6 .d-flex p1 {
            font-size: 18px;
            line-height: 1.9;
        }

        /* Custom CSS for Read More button */
        #para6 .read-more-btn {
<<<<<<< HEAD
            font-size: 16px;
            /* Adjusted font size */
            padding: 10px 20px;
            /* Adjusted padding */
            display: block;
            /* Make the button an inline-block element */
            margin-top: 0;
            /* Remove top margin */
            margin-left: 120px;
            max-width: 300px;
            /* Remove max width */
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para6 {
                margin-top: 30px;
                /* Adjusted margin */
                padding: 15px;
                /* Adjusted padding for spacing */
                justify-self: center;
            }

            #para6 h4 {
                font-size: 20px;
                /* Adjusted font size */
            }

            #para6 h2 {
                font-size: 24px;
                /* Adjusted font size */
            }

            #para6 p {
                font-size: 16px;
                /* Adjusted font size */
                margin-bottom: 15px;
                /* Adjusted margin */
                margin-top: 20px;
                /* Adjusted margin */
            }

            #para6 .d-flex .mr-3,
            #para6 .d-flex .ml-3 {
                flex-basis: 100%;
                /* Full width on smaller screens */
                margin-bottom: 15px;
                /* Adjusted margin */
            }

            #para6 .d-flex p {
                font-size: 22px;
                /* Adjusted font size */
                margin-bottom: 5px;
                /* Adjusted margin */
            }

            #para6 .d-flex p1 {
                font-size: 16px;
                /* Adjusted font size */
                line-height: 1.6;

            }

            #para6 .read-more-btn {
                font-size: 14px;
                /* Adjusted font size */
                padding: 7px 14px;
                /* Adjusted padding */
                display: block;
                /* Make the button a block element */
                margin: 0 auto;
                /* Center the button */
                max-width: 200px;
                /* Set max width to limit button width */
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para6 h4 {
                font-size: 21px;
                /* Adjusted font size */
                margin-top: -80px;
            }

            #para6 h2 {
                font-size: 26px;
                /* Adjusted font size */
            }

            #para6 p {
                font-size: 17px;
                /* Adjusted font size */
                margin-bottom: 15px;
                /* Adjusted margin */
                margin-top: 25px;
                /* Adjusted margin */
            }

            #para6 .d-flex .mr-3,
            #para6 .d-flex .ml-3 {
                flex: 1;
                margin-bottom: 15px;
                /* Adjusted margin */
            }

            #para6 .d-flex p {
                font-size: 23px;
                /* Adjusted font size */
            }

            #para6 .d-flex p1 {
                font-size: 15px;
                /* Adjusted font size */
                line-height: 1.6;
            }

            #para6 .read-more-btn {
                font-size: 15px;
                /* Adjusted font size */
                padding: 8px 16px;
                /* Adjusted padding */
                display: block;
                /* Make the button a block element */
                margin: 0 auto;
                /* Center the button */
                max-width: 200px;
                /* Set max width to limit button width */
            }
=======
            font-size: 15px; /* Adjusted font size */
            padding: 8px 16px; /* Adjusted padding */
            display: block; /* Make the button a block element */
            margin: 0 auto; /* Center the button */
            max-width: 110px; /* Set max width to limit button width */
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        @media (max-width: 767px) {

            /* Styles for mobile view */
            #para6 .col-md-12 {
                margin-bottom: 20px;
            }

            #para6 .d-flex.justify-content-center {
                flex-direction: column;
                align-items: center;
            }

            #para6 .d-flex.justify-content-center>div {
                margin: 0;
                text-align: center;
            }

            #para6 .col-md-12 .d-flex .ml-3 {
                margin-top: 30px;
                margin-right: 33px;
            }
        }
    </style>
    </style>

    <div class="container-fluid" id="para6">
        <div class="row">
            <div class="col-md-12">
                <h4>Internationally Trained Experts</h4>
                <h2>Meet Our Expert Chiropractors</h2>
                <p>Meet our expert team at Dr. Spine Chiropractic Treatment in Bangalore. <br><br> Our team is internationally trained and has deep knowledge in Chiropractic and <br> alternate therapy-based treatments.</p>
            </div>

            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div class="mr-3">
                        <img src="img/doctor_1.png" alt="">
                        <p>Dr. John Clark</p>
                        <p1>Chiropractic Specialist</p1><br><br>
                        <p1>A highly specialised Chiropractor from Canada <br> with 28 years of rich experience in <br>spine treatment.</p1><br><br>
                        <a href="john_clark.php" class="read-more-btn">Read More</a>
                    </div>
                    <div class="ml-3">
                        <img src="img/doctor_3.png" alt="">
                        <p>Dr. Troy Scheible</p>
                        <p1>Chiropractic Specialist</p1><br><br>
                        <p1>Doctorate in Chiropractic Medicine and a<br> Doctor of Chiropractic in the State of <br> Arizona for over 27 years.</p1><br><br>
                        <a href="troy_scheible.php" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <div class="mr-3">
                        <img src="img/doctor_2.png" alt="">
                        <p>Dr. Michael Wohlgemuth</p>
                        <p1>Scoliosis Specialist</p1><br><br>
                        <p1>Dr. Michael Wohlgemuth is an expert in the <br> field of Scoliosis and Postural <br>Rehabilitation.</p1><br><br>
                        <a href="michael_wohlgemuth.php" class="read-more-btn">Read More</a>
                    </div>

                    <div class="ml-3">
                        <img src="img/doctor_4.png" alt="">
                        <p>Dr. Chetan Upadhyaya</p>
                        <p1>Ayurvedic Doctor</p1><br><br>
                        <p1>Ayurvedic treatment for spine-related issues by <br> Dr. Chetan Upadhyaya</p1><br><br><br>
                        <a href="chetan_upadhyaya.php" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Para6 Ends-->

    <!-- Logo Section Starts-->
    <style>
        /* Custom CSS for logo section */
        #logo {
            background-color: #f7f7f7;
            /* Background color */
            padding: 80px 0;
            /* Add padding for spacing */
            text-align: center;
            /* Center align text */
        }

        #logo img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            /* Add margin to separate image from text */
        }

        #logo h1 {
            font-size: 42px;
            color: #333;
            /* Text color */
            margin-top: 10px;
            /* Add margin for spacing */
            background-color: #f7f7f7;
            /* Background color for the border */
        }

        @media (min-width: 768px) {

            /* Adjust styles for iPad view and larger */
            #logo {
                padding: 80px 0;
                /* Revert to original padding for larger screens */
            }

            #logo h1 {
                font-size: 40px;
                /* Revert to original font size for larger screens */
            }
        }
    </style>

    <div class="container-fluid" id="logo">
        <div class="row">
            <div class="col-md-12">
                <img src="img/trust_logo.png" alt="">
                <h1>In Service Since 2012</h1>
            </div>
        </div>
    </div>

    <!-- Logo Section Starts-->

    <!-- Para7 Starts-->
    <style>
        /* Custom CSS for para7 section */
        #para7 {
            background-color: #f7f7f7;
            /* Background color */
            padding: 30px 80px;
            /* Add padding for spacing */
            text-align: center;
            /* Center align text */
        }

        #para7 img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            /* Add margin to separate image from text */
        }

        #para7 h4 {
<<<<<<< HEAD
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
            /* Text color */
            margin-top: 50px;
=======
            font-size: 20px; /* Revert to original font size for larger screens */
            margin-top: 50px; /* Revert to original margin for larger screens */
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        #para7 h2 {
            font-size: 42px;
            color: #495057;
            /* Text color */
            margin-top: 50px;
            margin-bottom: 15px;
        }

        /* Custom CSS for underlining effect */
        .underline {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .underline::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: gold;
        }

        .underline:hover::after {
            transform: scaleX(1);
            /* Scale to 100% on hover */
        }

        /* Custom CSS for button */
        #para7 button {
            background-color: #55b6c7;
            /* Button background color */
            color: white;
            /* Button text color */
            border: none;
            /* Remove border */
            padding: 10px 20px;
            /* Add padding */
            font-size: 25px;
            border-radius: 30px;
            cursor: pointer;
        }

        #para7 button:hover {
            background-color: #449da3;
            /* Button background color on hover */
        }

        @media (min-width: 768px) {
            /* Adjust styles for iPad view and larger */

            #para7 h4 {
                font-size: 28px;
                /* Revert to original font size for larger screens */
                margin-top: 50px;
                /* Revert to original margin for larger screens */
            }

            #para7 h2 {
                font-size: 42px;
                /* Revert to original font size for larger screens */
                margin-top: 50px;
                /* Revert to original margin for larger screens */
            }

            #para7 button {
                font-size: 25px;
                /* Revert to original font size for larger screens */
                margin-top: 0;
                /* Revert to original margin for larger screens */
            }
        }
    </style>

    <div class="container-fluid" id="para7">
        <div class="row">
            <div class="col-md-6">
                <img src="img/certificate_logo.png" alt="">
                <button id="toggleButton"><i class="fas fa-certificate"></i> QIB Certificate</button>
            </div>
            <div class="col-md-6">
                <h4>Dr. Spine - Chiropractic In Bangalore</h4>
                <h2>Has been Assessed to meet the <span class="underline">Quality In Business</span>
                    standard set by the <span class="underline">International Trade Council</span></h2>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("toggleButton");

            toggleButton.addEventListener("click", function() {
                // Redirect to the new page with the image
                window.open("img/about5.jpg", "_blank");
            });
        });
    </script>


    <!-- Para7 Ends-->

    <!-- Para8 Starts-->
    <style>
        /* Custom CSS for para8 section */
        #para8 {
            background-color: #F4F4F4;
            /* Background color */
            padding: 20px 80px;
            /* Add padding for spacing */
            text-align: center;
            /* Center align text */
        }

        #para8 h2 {
            font-size: 42px;
            color: #55b6c7;
            /* Text color */
            margin-top: 40px;
            margin-bottom: 20px;
        }

        #para8 p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        #para8 p1 {
            font-size: 20px;
            font-weight: bold;
        }

        /* Background color for h4 in col-md-4 */
        #para8 .col-md-4 h4 {
            background-image: linear-gradient(to right, #000000, #34b6de, #000000) !important;
            -webkit-background-clip: text;
            color: transparent;
            font-size: 90px;
        }

        .image-section {
            text-align: center;
            /* Center align the image */
            background-color: #F4F4F4;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
        }

        /* Responsive adjustments for mobile view */
        @media (max-width: 767.98px) {
            #para8 {
                padding: 15px;
                /* Adjusted padding for spacing */
            }

            #para8 h2 {
                font-size: 24px;
                /* Adjusted font size */
                margin-top: 20px;
                /* Adjusted margin */
            }

            #para8 p {
                font-size: 16px;
                /* Adjusted font size */
                margin-bottom: 15px;
                /* Adjusted margin */
            }

            #para8 p1 {
                font-size: 16px;
                /* Adjusted font size */
            }

            #para8 .col-md-4 h4 {
                font-size: 40px;
                /* Adjusted font size */
                margin-top: 15px;
                /* Adjusted margin */
            }
        }

        /* Responsive adjustments for iPad view */
        @media (min-width: 768px) and (max-width: 991.98px) {
            #para8 h2 {
                font-size: 30px;
                /* Adjusted font size */
            }

            #para8 p {
                font-size: 17px;
                /* Adjusted font size */
            }

            #para8 p1 {
                font-size: 17px;
                /* Adjusted font size */
            }

            #para8 .col-md-4 h4 {
                font-size: 50px;
                /* Adjusted font size */
                margin-top: 25px;
                /* Adjusted margin */
            }
        }
    </style>

    <div class="container-fluid" id="para8">
        <div class="row">
            <div class="col-md-12">
                <h2>Patient Success Stories</h2>
                <p>At Dr. Spine Chiropractic Clinic Bangalore, we love when patients share their feedback and <br> appreciation for the life-changing results attributed to our treatment and care.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h4>+30K</h4>
                <p1>Patients Treated</p1>
            </div>
            <div class="col-md-4">
                <h4>11</h4>
                <p1>Years Experience</p1>
            </div>
            <div class="col-md-4">
                <h4>95%</h4>
                <p1>Satisfaction</p1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 image-section">
                <img src="img/happy_patients.png" alt="">
            </div>
        </div>
    </div>

    <!-- Para8 Ends-->

    <!-- Review Section Starts-->
    <style>
        /* Custom CSS for reviews section */
        #reviews {
            background-color: #F4F4F4;
            /* Background color */
            padding: 40px 80px;
            /* Add padding for spacing */
            text-align: center;
            /* Center align text */
            margin-top: 40px;
        }

<<<<<<< HEAD
        #reviews h4 {
            font-size: 23px;
            margin-bottom: 10px;
            color: #333;
            /* Text color */
        }
=======
    #reviews h4 {
        font-size: 23px;
        margin-bottom: 10px;
        color: #333; /* Text color */
        text-align:center;
        background-color: #bdc3c7;
    }
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34

        #reviews h2 {
            font-size: 42px;
            color: #55b6c7;
            /* Text color */
            margin-bottom: 20px;
            margin-top: 30px;
        }

        #reviews h5 {
            font-size: 32px;
            margin-bottom: 50px;
            color: #333;
            /* Text color */
        }


        .carousel-item {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carousel-card {
            max-width: 550px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            transition: transform 0.5s, opacity 0.5s;
            transform-origin: bottom;

        }

        .carousel-img {
            max-width: 80px;
            height: auto;
            margin: 0 auto 10px;
        }

        .carousel-rating {
            font-size: 24px;
            color: #55b6c7;
            margin-bottom: 5px;
        }

        .carousel-stars {
            color: #f2b01e;
            /* Star color */
        }

        .carousel-name {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .carousel-source {
            font-size: 16px;
            color: #999;
        }

        /* Custom CSS for carousel controls */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            /* Black color for next and previous icons */
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: auto;
            padding: 10px;
        }

        .carousel-item.active .carousel-card {
            transform: translateY(0);
            opacity: 1;
        }

        .carousel-item:not(.active) .carousel-card {
            transform: translateY(100%);
            opacity: 0;
        }
<<<<<<< HEAD

        @media (max-width: 767px) {

            /* Adjust styles for mobile view */
            #reviews {
                margin-top: -5px;
            }

            .carousel-img {
                max-width: 40px;
                /* Adjust image size */
            }

            .carousel-rating {
                font-size: 18px;
                /* Adjust font size for better readability */
            }

            .carousel-name {
                font-size: 16px;
                /* Adjust font size for better readability */
            }

            .carousel-source {
                font-size: 12px;
                /* Adjust font size for better readability */
            }
=======
    
    @media (max-width: 767px) {
        /* Adjust styles for mobile view */
        #reviews {
            margin-top: -5px;
        }
        #reviews h4 {
            font-size: 17px;
        }
        
        .carousel-img {
            max-width: 40px; /* Adjust image size */
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        }

        @media (min-width: 768px) and (max-width: 991px) {

            /* Adjust styles for iPad view */
            #reviews {
                padding: 30px;
                /* Adjust padding for spacing */
            }

            .carousel-card {
                max-width: 80%;
                /* Adjust card width for better fit */
                padding: 20px;
                /* Adjust padding for spacing */
            }
        }
<<<<<<< HEAD
    </style>

    <div class="container-fluid" id="reviews">
        <div class="row">
            <div class="col-md-12">
                <h4>Top Reviewed Chiropractic Clinic in Bangalore</h4>
                <h2>Patient Reviews</h2>
                <h5>4.8/5 Average Ratings</h5>
            </div>
=======
    
    }
    @media (min-width: 768px) and (max-width: 991px) {
        /* Adjust styles for iPad view */
        #reviews {
            padding: 30px; /* Adjust padding for spacing */
        }

        .carousel-card {
            max-width: 80%; /* Adjust card width for better fit */
            padding: 20px; /* Adjust padding for spacing */
        }
        #reviews h4 {
            font-size: 20px;
        }
    }
</style>

<div class="container-fluid" id="reviews">
    <div class="row">
        <div class="col-md-12">
            <h4>Top Reviewed Chiropractic Clinic in Bangalore</h4>
            <h2>Patient Reviews</h2>
            <h5>4.8/5 Average Ratings</h5>
>>>>>>> 3f3cc1af7a630bb6cfe7420e03c6fafcd2fd3b34
        </div>


        <div class="row">
            <div class="col-md-12">
                <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-card">
                                <img src="img/google-logo.png" class="carousel-img" alt="Google">
                                <p>I was asked to go for surgery by a top neuro which my family was against and me too. I had a bike accident two years back and my lower back L5 S1 had issues. I didnt know what to do as I was sure that my sport career was over. I was referred to Dr Craig by my neighbor and I was skeptical. Also some negative reviews scared me but I wanted to give it a try and see if it works. The staff was very helpful and made me comfortable and Dr Craig was just so warm and caring. He got the root cause and advised me 18 sessions. I believed him and his treatment as he was so honest that my pain will come and no surgery will be required if my body responds well to his treatment. First three sessions I only felt 10 percent and he told me that's a great percentage improvement. I completed 14 sessions and I felt as if nothing had happened. Finally I completed all my sessions and I did my scans today again and there is no need of any surgery. He is a magician and filled with warmth and passionate caring for patients like us. God bless him. I strongly believe in Dr Craig and strongly recommend Dr Craig to everyone.</p>
                                <div class="carousel-rating">
                                    <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Five stars -->
                                </div>
                                <div class="carousel-name">YASMIN MAKATI</div>
                                <div class="carousel-source">via Google.com</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-card">
                                <img src="img/google-logo.png" class="carousel-img" alt="Google">
                                <p>I was asked to go for surgery by a top neuro which my family was against and me too. I had a bike accident two years back and my lower back L5 S1 had issues. I didnt know what to do as I was sure that my sport career was over. I was referred to Dr Craig by my neighbor and I was skeptical. Also some negative reviews scared me but I wanted to give it a try and see if it works. The staff was very helpful and made me comfortable and Dr Craig was just so warm and caring. He got the root cause and advised me 18 sessions. I believed him and his treatment as he was so honest that my pain will come and no surgery will be required if my body responds well to his treatment. First three sessions I only felt 10 percent and he told me that's a great percentage improvement. I completed 14 sessions and I felt as if nothing had happened. Finally I completed all my sessions and I did my scans today again and there is no need of any surgery. He is a magician and filled with warmth and passionate caring for patients like us. God bless him. I strongly believe in Dr Craig and strongly recommend Dr Craig to everyone.</p>
                                <div class="carousel-rating">
                                    <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Five stars -->
                                </div>
                                <div class="carousel-name">YASMIN MAKATI</div>
                                <div class="carousel-source">via Google.com</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-card">
                                <img src="img/google-logo.png" class="carousel-img" alt="Google">
                                <p>I was asked to go for surgery by a top neuro which my family was against and me too. I had a bike accident two years back and my lower back L5 S1 had issues. I didnt know what to do as I was sure that my sport career was over. I was referred to Dr Craig by my neighbor and I was skeptical. Also some negative reviews scared me but I wanted to give it a try and see if it works. The staff was very helpful and made me comfortable and Dr Craig was just so warm and caring. He got the root cause and advised me 18 sessions. I believed him and his treatment as he was so honest that my pain will come and no surgery will be required if my body responds well to his treatment. First three sessions I only felt 10 percent and he told me that's a great percentage improvement. I completed 14 sessions and I felt as if nothing had happened. Finally I completed all my sessions and I did my scans today again and there is no need of any surgery. He is a magician and filled with warmth and passionate caring for patients like us. God bless him. I strongly believe in Dr Craig and strongly recommend Dr Craig to everyone.</p>
                                <div class="carousel-rating">
                                    <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Five stars -->
                                </div>
                                <div class="carousel-name">YASMIN MAKATI</div>
                                <div class="carousel-source">via Google.com</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-card">
                                <img src="img/google-logo.png" class="carousel-img" alt="Google">
                                <p>I was asked to go for surgery by a top neuro which my family was against and me too. I had a bike accident two years back and my lower back L5 S1 had issues. I didnt know what to do as I was sure that my sport career was over. I was referred to Dr Craig by my neighbor and I was skeptical. Also some negative reviews scared me but I wanted to give it a try and see if it works. The staff was very helpful and made me comfortable and Dr Craig was just so warm and caring. He got the root cause and advised me 18 sessions. I believed him and his treatment as he was so honest that my pain will come and no surgery will be required if my body responds well to his treatment. First three sessions I only felt 10 percent and he told me that's a great percentage improvement. I completed 14 sessions and I felt as if nothing had happened. Finally I completed all my sessions and I did my scans today again and there is no need of any surgery. He is a magician and filled with warmth and passionate caring for patients like us. God bless him. I strongly believe in Dr Craig and strongly recommend Dr Craig to everyone.</p>
                                <div class="carousel-rating">
                                    <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Five stars -->
                                </div>
                                <div class="carousel-name">YASMIN MAKATI</div>
                                <div class="carousel-source">via Google.com</div>
                            </div>
                        </div>
                        <!-- Add more carousel items here -->
                    </div>
                    <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviewCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize the carousel
        $(document).ready(function() {
            $('#reviewCarousel').carousel();
        });
    </script>


    <!-- Review Section Ends-->



<!-- Form Section Starts -->
<div class="container mt-5 mb-5 ">
        <div class="row justify-content-center">
            <div class="card" style="border-radius: 15px; border: 5px solid #55b6c7;">
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-md-6 pt-5">
                            <form action=" " method="POST">
                                <div class="row">
                                    <h2 class="text-center pb-5" style="color:#55b6c7; padding-top: 10px; font-size: 35px;">Book an Appointment</h2>
                                    <div class="col-md-6 mb-3">

                                        <label for="firstName" class="form-label">First Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="mobile" class="form-label">Mobile Number<span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="mobile" placeholder="Enter your mobile number" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="chooseOption" class="form-label">Choose your nearest clinic (3 clinics in Bangalore)</label>
                                    <select class="form-select" id="chooseOption">
                                        <option selected>none</option>
                                        <option value="option1">Indiranagar clinic</option>
                                        <option value="option2">Whitefield clinic</option>
                                        <option value="option3">New BEL Road clinic</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="textarea" class="form-label">Write your message below</label>
                                    <textarea class="form-control" id="textarea" rows="3"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn fs-4" style="background-color: #55b6c7; color: white; width:80%;">Book Appointment</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 pt-5 border border-dark" style="border-radius:10px;">
                            <div>
                                <div class="card-body">
                                    <img src="img/book_appointment.jpg" alt="Image" class="img-fluid" style="height: 400px; width: 400px;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Form Section Starts -->












    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>