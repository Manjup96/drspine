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
                <h2>Pain Relief by Chiropractor Treatment</h2>
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
        font-size: 60px;
        color: transparent; /* Set the text color to transparent to make the background visible */
        margin-bottom: 50px;
        margin-top: 50px;
        }
        #texts h4{
            font-size: 35px;
            color: grey;
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
            <h2>Pain Relief by Chiropractor Treatment</h2>
            <h4>Are you in Pain</h4>
            <p>Back and neck pain, migraines, and headaches, disc bulge, sciatica are best treated by chiropractors.</p>
            <p>Additionally, scoliosis, spinal conditions, fibromyalgia and many more conditions are treated by chiropractors. While it’s often perceived that the chiropractor is only able to treat back and neck pain, this is just</p>
            <h4>Chiropractic And The Slipped Disc</h4>
            <p>A disc herniation commonly referred to as a slipped or bulged disc is a condition of the spine that can cause a tremendous amount of pain. Patients often complain of severe back pain that can radiate down the arms or legs. Many times people with this condition are referred to undergo costly and risky surgery to relieve the symptoms. Chiropractic care is a medical profession developed over 100 years ago in the United States that offers a safe and effective cure for conditions of the spine such as a slipped disc.</p>
            <p>Chiropractic care is unique in its approach to treating conditions of the spine. It is safer and much cheaper alternative to the surgical approach. It works by making simple adjustments to the spine and allowing the body to heal itself. It is safe and effective only when done by a trained Dr. of Chiropractic.</p>
            <p>Dr. Spine Chiropractic clinic employs a licensed Dr. of Chiropractic who has successfully treated many slipped discs. A slipped disc is best treated using a combination of light manual adjustments to the vertebrae with the addition of a technique known as flexion and distraction. The manual adjustments are very specific to the misaligned vertebrae that are commonly found in spines that have slipped discs. After the vertebrae are aligned to their normal positions the patient will often undergo flexion and distraction. This painless technique helps to decompress the spine and allows the slipped disc to return to its normal alignment. Once this has been done the pressure on the surrounding nerves is relieved and the pain disappears.</p>
            <p>During the treatment plan, a patient with a slipped disc will also be given a series of small exercises to help strengthen the back or neck in order to avoid a reoccurrence in the future. This is done in conjunction with postural and nutritional advice all aimed at treating the body as a whole. Each of these pieces together helps to facilitate the speed and effectiveness of the treatment and allows for faster healing time and pain-free patients.</p>
        </div>
    </div>
</div>
<!-- Paragraph Section Ends -->

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
                <button><i class="fas fa-phone-alt me-2"></i>CALL +91 7550705070</button>
            </div>
        </div>
    </div>

<!-- Banner Ends-->











   <!-- Footer Start -->
   <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>