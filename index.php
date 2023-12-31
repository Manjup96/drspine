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
                    <div class="p-3" style= "margin-bottom: 60px;">
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
        font-size: 45px; /* Adjusted font size */
        margin-top: 10px;
        padding: 40px; /* Adjusted padding */
        text-align: center;
    }

    #para1 p {
        font-size: 20px; /* Adjusted font size */
        text-align: justify;
        padding: 50px; /* Adjusted padding */
        margin-top: -80px;
    }

    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {
        #para1 h1 {
            font-size: 28px; /* Adjusted font size */
            padding: 20px 0; /* Adjusted padding */
           
        }

        #para1 p {
            font-size: 16px; /* Adjusted font size */
            padding: 20px; /* Adjusted padding */
            margin-top: 10px;
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #para1 h1 {
            font-size: 30px; /* Adjusted font size */
            padding: 30px 0; /* Adjusted padding */
        }

        #para1 p {
            font-size: 17px; /* Adjusted font size */
            padding: 30px; /* Adjusted padding */
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
                <p>You may need pain relief after suffering an accident, experiencing an injury, or if you have a specific condition such as chronic back pain or a spinal condition; even if you just want to improve your overall health, our chiropractors can help you achieve your wellness goals! Please visit the <a href="testimonials.php" style="color: #55b6c7; text-decoration: none;">testimonials page</a> to see what our patients are saying about our chiropractors in Bangalore clinic and getting regular chiropractic treatments.</p>
            </div>
        </div>
    </div>
</div>

<!-- Para1 Ends -->



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

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #doctors img {
            width: 100%;
            max-width: 250px; /* Adjust maximum width for iPad screens */
            margin: 0 20px 20px;
        }

        #doctors .col-md-12 {
            font-size: 22px;
            text-align: center;
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
                    <img src="img/doctor_1.png" alt="" >
                    <p>Dr. John Clark</p>
                </div>
                <div class="ml-3">
                <img src="img/doctor_3.png" alt="">
                    <p>Dr. Troy Scheible</p>
                </div>
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
            <a href="book_appointment.php" class="custom-btn">
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
        margin-top: 40px;
        background-color: #F4F4F4; /* Grey background color */
        padding: 50px 0; /* Add some padding for spacing */
    }
    #testimonials h1 {
        color: #55b6c7;
        margin-bottom: 20px;
    }
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
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.2); /* Add box shadow to all sides */
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
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #testimonials {
            display: none;
        }
        .testimonial-card {
            display: none; 
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
                        <a href= "about.php" class="read-more-btn">Read More >> </a>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_2.png" alt="Person 2">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">95% SUCCESS RATE</h4>
                        <p class="testimonial-paragraph">At our Bangalore spine clinic, we have treated 1000s of patients with a very high success rate.</p><br>
                        <a href= "services.php" class="read-more-btn" >Read More >> </a>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_3.png" alt="Person 3">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">CONDITIONS TREATED</h4>
                        <p class="testimonial-paragraph">We treat a wide range of spine-related issues. Back pain, neck pain, disc degeneration, etc.</p><br>
                        <a href= "pain_relief_chiropractor.php" class="read-more-btn">Read More >> </a>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img class="testimonial-image" src="img/testimonial_4.png" alt="Person 4">
                    <div class="testimonial-content">
                        <h4 class="testimonial-heading">WHAT'S CHIROPRACTIC?</h4>
                        <p class="testimonial-paragraph">Chiropractic is natural health care that involves treating patients without the use of medicines.</p>
                        <a href= "what_is_chiropractic.php" class="read-more-btn">Read More >> </a>
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

    /* #para2 h4 {
        
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 20px;
        background-color: #bdc3c7;
        text-align:center;
    } */

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
        #para2 h6 {
            margin-top: 10px;
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
       

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
        #para2 h6 {
            margin-top: 50px;
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
            <h6>
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Get Relief from Pain Without Surgery </span>
            </h6>
            
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

  /*   #para4 h4 {
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 20px;
        text-align:center;
        background-color: #bdc3c7;
    } */

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
            margin-bottom: 20px;
            text-align: center; /* Center align button text */
        }
        /* #para4 h4 {
            margin-top: -20px;
            font-size: 17px;
        } */
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
        #para4 p{
            font-size: 17px;
        }
        /* #para4 h4 {
            margin-top: -20px;
            font-size: 20px;
        } */
    }
</style>

<div class="container-fluid" id="para4">
    <div class="row">
        <div class="col-md-6">
        <h6>
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Expect the Best Chiropractic Care </span>
            </h6>
            
            <h2>Let us Heal you today!</h2>
            <p>You can expect the best chiropractic care, which includes spinal adjustments, neck manipulation, and various other techniques for your health.</p>
            <a class="custom-btn" href= "backpain.php">
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

    /* #para5 h4 {
        
        font-size: 23px;
        margin-bottom: 10px;
        margin-top: 20px;
        text-align:center;
        background-color: #bdc3c7;
    } */

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
            padding: 30px 20px; /* Adjust padding for spacing */
        }
        #para5 h2 {
            font-size: 24px; /* Adjust font size for better readability */
            margin-bottom: 10px; /* Adjust margin for better spacing */
        }
        #para5 p {
            font-size: 16px; /* Adjust font size for better readability */
        }
       /*  #para5 h4 {
            font-size: 17px;
        } */
        #para5 img:last-child {
            display: none;
        }
        #para5 h6 {
            margin-top: 10px;
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #para5 {
            padding: 40px 50px; /* Adjust padding for spacing */
        }
        #para5 h2 {
            font-size: 26px; /* Adjust font size for better readability */
        }
        #para5 p {
            font-size: 17px; /* Adjust font size for better readability */
        }
        #para5 img{
            
        }
        #para5 h6 {
            margin-top: 10px;
        }
        /* #para5 h4 {
            font-size: 20px;
        } */
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
            <h6>
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Top Chiropractic Clinic In Bengaluru</span>
            </h6>
            
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
        </div>
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
            <a href="tel:+917550705070" style="text-decoration: none;">
               <button style="cursor: pointer;">
               <i class="fas fa-phone-alt me-2"></i>CALL +91 7550705070
               </button>
             </a>
            </div>

        </div>
    </div>

<!-- Banner Ends-->


<!-- Para6 Starts-->
<style>
    /* Custom CSS for para6 section */
    #para6 {
        margin-top: 100px;
        padding: 40px 80px; /* Add padding for spacing */
        text-align: center; /* Center align text */
    }

    /* #para6 h4 {
        font-size: 23px;
        margin-bottom: 10px;
        color: #333; 
        text-align:center;
        background-color: #bdc3c7;
    }
 */
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
        #para6 {
            margin-top: 30px; /* Adjusted margin */
            padding: 15px; /* Adjusted padding for spacing */
            justify-self: center;
        }

        /* #para6 h4 {
            font-size: 17px; 
        } */

        #para6 h2 {
            font-size: 24px; /* Adjusted font size */
        }

        #para6 p {
            font-size: 16px; /* Adjusted font size */
            margin-bottom: 15px; /* Adjusted margin */
            margin-top: 20px; /* Adjusted margin */
        }

        #para6 .d-flex .mr-3,
        #para6 .d-flex .ml-3 {
            flex-basis: 100%; /* Full width on smaller screens */
            margin-bottom: 15px; /* Adjusted margin */
        }

        #para6 .d-flex p {
            font-size: 22px; /* Adjusted font size */
            margin-bottom: 5px; /* Adjusted margin */
        }

        #para6 .d-flex p1 {
            font-size: 16px; /* Adjusted font size */
            line-height: 1.6;
            
        }

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
        /* #para6 h4 {
            font-size: 20px; 
            margin-top: -80px;
        } */

        #para6 h2 {
            font-size: 26px; /* Adjusted font size */
        }

        #para6 p {
            font-size: 17px; /* Adjusted font size */
            margin-bottom: 15px; /* Adjusted margin */
            margin-top: 25px; /* Adjusted margin */
        }

        #para6 .d-flex .mr-3,
        #para6 .d-flex .ml-3 {
            flex: 1;
            margin-bottom: 15px; /* Adjusted margin */
        }

        #para6 .d-flex p {
            font-size: 23px; /* Adjusted font size */
        }

        #para6 .d-flex p1 {
            font-size: 15px; /* Adjusted font size */
            line-height: 1.6;
        }

        #para6 .read-more-btn {
            font-size: 15px; /* Adjusted font size */
            padding: 8px 16px; /* Adjusted padding */
            display: block; /* Make the button a block element */
            margin: 0 auto; /* Center the button */
            max-width: 110px; /* Set max width to limit button width */
        }
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
            #para6 .d-flex.justify-content-center > div {
                margin: 0;
                text-align: center;
            }
            #para6 .col-md-12 .d-flex  .ml-3 {
                margin-top: 30px;
                margin-right: 33px;
            }
        }
    </style>
</style>

<div class="container-fluid" id="para6">
    <div class="row">
        <div class="col-md-12">
        <h6>
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Internationally Trained Experts</span>
            </h6>
            
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
                    <a  href= "john_clark.php" class="read-more-btn">Read More</a> 
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
                    <a href= "chetan_upadhyaya.php" class="read-more-btn">Read More</a>
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
        background-color: #f7f7f7; /* Background color */
        padding: 80px 0; /* Add padding for spacing */
        text-align: center; /* Center align text */
    }

    #logo img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px; /* Add margin to separate image from text */
    }

    #logo h1 {
        font-size: 42px;
        color: #333; /* Text color */
        margin-top: 10px; /* Add margin for spacing */
        background-color: #f7f7f7; /* Background color for the border */
    }
    @media (min-width: 768px) {
        /* Adjust styles for iPad view and larger */
        #logo {
            padding: 80px 0; /* Revert to original padding for larger screens */
        }

        #logo h1 {
            font-size: 40px; /* Revert to original font size for larger screens */
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
        background-color: #f7f7f7; /* Background color */
        padding: 30px 80px; /* Add padding for spacing */
        text-align: center; /* Center align text */
    }

    #para7 img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px; /* Add margin to separate image from text */
    }

    /* #para7 h4 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #333;
        margin-top: 50px;
    } */

    #para7 h2 {
        font-size: 42px;
        color: #495057; /* Text color */
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
        transform: scaleX(1); /* Scale to 100% on hover */
    }

    /* Custom CSS for button */
    #para7 button {
        background-color: #55b6c7; /* Button background color */
        color: white; /* Button text color */
        border: none; /* Remove border */
        padding: 10px 20px; /* Add padding */
        font-size: 25px;
        border-radius: 30px;
        cursor: pointer;
    }

    #para7 button:hover {
        background-color: #449da3; /* Button background color on hover */
    }
    @media (min-width: 768px) {
        /* Adjust styles for iPad view and larger */
       
       /*  #para7 h4 {
            font-size: 20px; 
            margin-top: 50px; 
        } */

        #para7 h2 {
            font-size: 42px; /* Revert to original font size for larger screens */
            margin-top: 50px; /* Revert to original margin for larger screens */
        }

        #para7 button {
            font-size: 25px; /* Revert to original font size for larger screens */
            margin-top: 0; /* Revert to original margin for larger screens */
        }
    }
    @media (max-width: 767.98px) { 
            #para7 h6 {
            margin-top:10px;
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
        <h6>
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Dr. Spine - Chiropractic In Bangalore</span>
            </h6>
            
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
        background-color: #F4F4F4; /* Background color */
        padding: 20px 80px; /* Add padding for spacing */
        text-align: center; /* Center align text */
    }

    #para8 h2 {
        font-size: 42px;
        color: #55b6c7; /* Text color */
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
        background-image: linear-gradient(to right,#000000,#34b6de,#000000)!important;
        -webkit-background-clip: text;
        color: transparent;
        font-size: 90px;
    }

    .image-section {
        text-align: center; /* Center align the image */
        background-color: #F4F4F4;
    }

    .image-section img {
        max-width: 100%;
        height: auto;
    }
    
    /* Responsive adjustments for mobile view */
    @media (max-width: 767.98px) {
        #para8 {
            padding: 15px; /* Adjusted padding for spacing */
        }

        #para8 h2 {
            font-size: 24px; /* Adjusted font size */
            margin-top: 20px; /* Adjusted margin */
        }

        #para8 p {
            font-size: 16px; /* Adjusted font size */
            margin-bottom: 15px; /* Adjusted margin */
        }

        #para8 p1 {
            font-size: 16px; /* Adjusted font size */
        }

        #para8 .col-md-4 h4 {
            font-size: 40px; /* Adjusted font size */
            margin-top: 15px; /* Adjusted margin */
        }
    }

    /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #para8 h2 {
            font-size: 30px; /* Adjusted font size */
        }

        #para8 p {
            font-size: 17px; /* Adjusted font size */
        }

        #para8 p1 {
            font-size: 17px; /* Adjusted font size */
        }

        #para8 .col-md-4 h4 {
            font-size: 50px; /* Adjusted font size */
            margin-top: 25px; /* Adjusted margin */
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
        background-color: #F4F4F4; /* Background color */
        padding: 40px 80px; /* Add padding for spacing */
        text-align: center; /* Center align text */
        margin-top: 40px;
    }

    /* #reviews h4 {
        font-size: 23px;
        margin-bottom: 10px;
        color: #333; 
        text-align:center;
        background-color: #bdc3c7;
    }
 */
    #reviews h2 {
        font-size: 42px;
        color: #55b6c7; /* Text color */
        margin-bottom: 20px;
        margin-top: 30px;
    }
    #reviews h5 {
        font-size: 32px;
        margin-bottom: 50px;
        color: #333; /* Text color */
    }


    #reviews .carousel-item {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #reviews .carousel-card {
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
        
    }

    #reviews .carousel-img {
        max-width: 80px;
        height: auto;
        margin: 0 auto 10px;
    }

    #reviews .carousel-rating {
        font-size: 24px;
        color: #55b6c7;
        margin-bottom: 5px;
    }

    #reviews .carousel-stars {
        color: #f2b01e; /* Star color */
    }

    #reviews .carousel-name {
        font-size: 20px;
        margin-bottom: 5px;
    }

    #reviews .carousel-source {
        font-size: 16px;
        color: #999;
    }

    /* Custom CSS for carousel controls */
    #reviews .carousel-control-prev-icon,
    #reviews .carousel-control-next-icon {
        background-color: #000 ; /* Black color for next and previous icons */
    }

    #reviews .carousel-control-prev,
    #reviews .carousel-control-next {
        width: auto;
        padding: 10px;
    }
    #reviews .carousel-item.active .carousel-card {
            transform: translateY(0);
            opacity: 1;
        }

        #reviews .carousel-item:not(.active) .carousel-card {
            transform: translateY(100%);
            opacity: 0;
        }
        /* dots */
    #reviews .carousel-indicators {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

#reviews .carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #ddd;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#reviews .carousel-indicators li.active {
    background-color: #55b6c7;
}

/* Add the rotating circle effect */
@keyframes rotateDots {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

#reviews .carousel-indicators.rotating {
    animation: rotateDots 2s linear infinite;
}
/* dots */
    
    @media (max-width: 767px) {
        /* Adjust styles for mobile view */
        #reviews {
            margin-top: -5px;
        }
       /*  #reviews h4 {
            font-size: 17px;
        } */
        
        
        #reviews .carousel-img {
            max-width: 40px; /* Adjust image size */
        }

        #reviews .carousel-rating {
            font-size: 18px; /* Adjust font size for better readability */
        }

        #reviews .carousel-name {
            font-size: 16px; /* Adjust font size for better readability */
        }

        #reviews .carousel-source {
            font-size: 12px; /* Adjust font size for better readability */
        }
        #reviews .carousel-control-prev{
            margin-left: -80px;
        }
        #reviews .carousel-control-next {
           margin-right: -80px;
           margin-top: 5px;
        }
        #reviews  .carousel-item {
               width: 230px;
               height: 100%;
               
        }
        #reviews .carousel-indicators {
            margin-top: -60px;
        }
       
    
    }
    @media (min-width: 768px) and (max-width: 991px) {
        /* Adjust styles for iPad view */
        #reviews {
            padding: 30px; /* Adjust padding for spacing */
        }

        #reviews .carousel-card {
            max-width: 80%; /* Adjust card width for better fit */
            padding: 20px; /* Adjust padding for spacing */
        }
       /*  #reviews h4 {
            font-size: 20px;
        } */
    }
    
</style>

<div class="container-fluid" id="reviews">
    <div class="row">
        <div class="col-md-12">
        <h6>
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Top Reviewed Chiropractic Clinic in Bangalore</span>
            </h6>
            <h2>Patient Reviews</h2>
            <h5>4.8/5 Average Ratings</h5>
        </div>
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
                        <div class="carousel-card" style= "margin-top: 150px;">
                        <img src="img/google-logo.png" class="carousel-img" alt="Google">
                            <p>Dr Michael Craig is good with what he does. He is really professional. Pain on my shoulders used to return back again and again. After few sessions he recommended me to go for liver supplement, looking at my situation. His suggestion worked and suited me well.</p>
                            <div class="carousel-rating">
                                <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <!-- Five stars -->
                            </div>
                            <div class="carousel-name">ABHINAY LAKRA</div>
                            <div class="carousel-source">via Google.com</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-card"  style= "margin-top: 60px;">
                        <img src="img/google-logo.png" class="carousel-img" alt="Google">
                            <p>Having had no prior experience with Chiropractic treatment, I visited Dr Spine only having exhausted all treatment options before surgery. I was suffering from extreme pain in my lower back and neck which prevented me from standing, walking, sitting for a long time or even sleeping at night. Dr Michael Craig has helped me get back on my feet (literally) within 6 sessions. He has been patient with my questions, understanding of my pain and, precise and efficient in his treatment. The staff have been also very supportive and courteous. The fee may be steep for some, but it is an investment towards your health. Dr Spine is highly recommended by me for everyone who understands what Chiropractic treatment can do for you.</p>
                            <div class="carousel-rating">
                                <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <!-- Five stars -->
                            </div>
                            <div class="carousel-name">YONUS MOHAMED</div>
                            <div class="carousel-source">via Google.com</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-card"  style= "margin-top: 160px;">
                        <img src="img/google-logo.png" class="carousel-img" alt="Google">
                            <p>I had severe neck pain for several months. but the doctors here were very talented enough and solved my problem withing 3-4 visits. I highly recommend this clinic to you all.</p>
                            <div class="carousel-rating">
                                <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> <!-- Five stars -->
                            </div>
                            <div class="carousel-name">SHOMIT BHATTACHARYA</div>
                            <div class="carousel-source">via Google.com</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-card"  style= "margin-top: 160px;">
                        <img src="img/google-logo.png" class="carousel-img" alt="Google">
                            <p>I am into gaming so I was suffering neck pain back pain and sciatica but with the help of doctor Mike treatment I am able to play again for hours without any pain.</p>
                            <div class="carousel-rating">
                                <span class="carousel-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <!-- Five stars -->
                            </div>
                            <div class="carousel-name">GOD GAMING</div>
                            <div class="carousel-source">via Google.com</div>
                        </div>
                    </div>
                    <!-- Add more carousel items here --> 

                </div>
                <!-- Previous and Next Controls -->
                <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#reviewCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
                 <!-- Dots -->
                 <ol class="carousel-indicators">
                     <li data-bs-target="#reviewCarousel" data-bs-slide-to="0" class="active"></li>
                     <li data-bs-target="#reviewCarousel" data-bs-slide-to="1"></li>
                     <li data-bs-target="#reviewCarousel" data-bs-slide-to="2"></li>
                     <li data-bs-target="#reviewCarousel" data-bs-slide-to="3"></li>
                     <li data-bs-target="#reviewCarousel" data-bs-slide-to="4"></li>
                      <!-- Add more dots as needed for additional slides -->
                    </ol>
                    <!-- Dots -->
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
<script>
    $(document).ready(function() {
        const $carousel = $('.carousel');

        $carousel.on('slide.bs.carousel', function() {
            const $indicators = $('.carousel-indicators');
            $indicators.addClass('rotating');
        });

        $carousel.on('slid.bs.carousel', function() {
            const $indicators = $('.carousel-indicators');
            $indicators.removeClass('rotating');
        });
    });
</script>



<!-- Review Section Ends-->



    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>