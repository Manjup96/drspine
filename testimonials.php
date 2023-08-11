<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

<body style="overflow-x: hidden;">
    <?php
    include 'menu.php';
    ?>

<!-- Banner Starts -->

<style>
/* inner banner style */
    .carousel-caption {
        display: grid;
        place-items: center;
        height: 100%;
        /* Make sure the container takes the full height */
        text-align: center;

    }

    .carousel-caption h2 {
        max-width: 80%;

        margin: 0;

        padding: 20px;

        color: white;

        margin-top: 50px;

    }

    /* inner banner ends */

    @media only screen and (max-width: 767px) {
        .carousel-inner .carousel-item img {
            height: 200px;

            max-width: 100%;


        }

        .carousel-caption h2 {
            font-size: 16px;
            padding-top: 20%;

        }
    }
    </style>


  <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Testimonials</h2>
            </div>

        </div>
    </div>
<!-- Banner Ends -->


<!-- Paragraph Section Starts -->
<style>
        #texts {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 20px;
        }

        #texts h2 {
        background-image: linear-gradient(to right, #000000, #34b6de, #000000);
        background-clip: text;
        -webkit-background-clip: text; /* For compatibility with some browsers */
        text-align: center;
        font-size: 45px;
        color: transparent; /* Set the text color to transparent to make the background visible */
        margin-bottom: 50px;
        margin-top: 50px;
        }

        #texts p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
        }

        #texts img {
            max-width: 70%;
            height: auto;
            margin: 20px auto;
            display: block;
        }

        #texts .row {
            margin-left: 0;
            margin-right: 0;
        }

        @media (max-width: 768px) {
            #texts h2 {
                font-size: 26px;
            }
            
            #texts p {
                font-size: 16px;
            }
            
            #texts img {
                max-width: 100%;
                margin: 30px auto;
            }
            @media (min-width: 768px) and (max-width: 1023px) {
    /* Your tablet styles here */
    #texts h2 {
        font-size: 30px;
    }
    #texts p {
        font-size: 17px;
    }
        }
    }
    </style>

<div class="container-fluid" id="texts">
    <div class="row">
        <div class="col-md-12">
        <h6 style="text-align: center; margin-top: 30px;">
           <span style="background-color: #bdc3c7; font-size: 20px; padding-right: 5px; padding-left: 5px;"> Dr Spine Chiropractic Clinic In Bangalore </span>
            </h6>
            <h2>DR SPINE CHIROPRACTIC REVIEWS</h2>
            <h3 style= "text-align: center; font-size: 40px;" >Patient Success Stories</h3><br>
            <p>At Dr. Spine Chiropractic, we love when patients share their feedback and appreciation for the life-changing results attributed to our treatment and care. Please go through below testimonials and reviews from our past patients to understand the impact we had on their lives.</p>
            <p>If you are suffering from back pain or related issues that are chronic in nature, we recommend you to <a href="contact.php" style="color: #55b6c7; text-decoration: none;">talk to us.</a>  Our expert Chiropractor <Strong>Dr.Micheal Craig</Strong> will provide valuable insights for your health condition.</p>
        </div>
    </div>
</div>

<!-- Paragraph Section Ends -->

<!-- images Section Starts -->
<style>
    #image {
        padding: 50px;
    }
    #image img {
        width: 90%;
        height: 90%;
        margin-left: 30px;
    }
    
</style>
<div class="container-fluid" id="image">
    <div class="row">
        <div class="col-md-6">
           <img src="img/Testimonials/testimonial_1.png" alt="">
        </div>
        <div class="col-md-6">
           <img src="img/Testimonials/testimonial_2.png" alt="">
        </div>
    </div>
</div>

<!-- images Section Ends -->

<!-- Video Section Starts -->
      

<style>
  #videos {
    padding: 50px;
    margin-top: -100px;
  }

  #videos .video-card {
    border: 1px solid #ccc;
    padding: 20px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    border-radius: 5px;
  }

  #videos .video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%;
  }

  #videos .video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  @media only screen and (max-width: 767px) {
    #videos .video-container {
        margin-top: 10px;
    }
  }
</style>


<div class="container-fluid" id="videos">
    <div class="row">
        <div class="col-md-12">
            <div class="video-card">
                <div class="row">
                    <div class="col-md-4">
                        <div class="video-container pt-5">
                            <div class="border rounded border-dark">
                                <iframe src="https://www.youtube.com/embed/rwU37jcwoPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-container pt-5">
                            <div class="border rounded border-dark">
                                <iframe src="https://www.youtube.com/embed/98iZ7ohGjPA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-container pt-5">
                            <div class="border rounded border-dark">
                                <iframe src="https://www.youtube.com/embed/6TL0ae60iEQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Section Starts -->

<!-- Card Section Starts -->
<style>
  #images {
    padding: 50px;
    margin-top: -50px;
  }

  #images  .card {
    border: 1px solid #ccc;
    padding: 20px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  #images .row {
    margin-bottom: 20px;
  }

  #images .col-md-4 {
    padding: 10px;
  }

  #images .col-md-4 img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
</style>
<div class="container-fluid" id="images">
    <div class="card">
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_3.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_4.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_5.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_6.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_7.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_8.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_9.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_10.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_11.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_12.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_13.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_14.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_15.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_16.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_17.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_18.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_19.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_20.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_21.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_22.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_23.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_24.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_25.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_26.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_27.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_28.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="img/Testimonials/testimonial_29.png" alt="">
            </div>
        </div>
    </div>
</div>




<!-- Card Section Ends -->

<!-- Form Section Starts -->
<div class="container mt-5 mb-5 ">
        <div class="row justify-content-center">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-md-6 pt-5 border border-dark" style="border-radius:10px;">
                            <div>
                                <div class="card-body">
                                    <img src="img/book_appointment.jpg" alt="Image" class="img-fluid" style="height: 400px; width: 400px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-5">
                            <form action=" " method="POST">
                                <div class="row">
                                    <h2 class="text-center pb-2" style="color:gray">Request a Callback</h2>
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
                                    <button type="submit" class="btn fs-4" style="background-color: #55b6c7; color: white; width:80%;">Request a callback</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Form Section Starts -->



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
                margin-left: 0;
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











   <!-- Footer Start -->
   <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>