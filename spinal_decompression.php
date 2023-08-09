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
                <h2>Spinal Decompression Treatment</h2>
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
                font-size: 24px;
            }
            
            #texts p {
                font-size: 16px;
            }
            
            #texts img {
                max-width: 100%;
                margin: 30px auto;
            }
        }
    </style>

<div class="container-fluid" id="texts">
    <div class="row">
        <div class="col-md-12">
            <h2>Spinal Decompression Therapy</h2>
            <p>No matter how severe your low back disc problem may appear, we can often bring relief using a specific de-compression chiropractic adjustment on a Cox table.  This table was especially designed for chiropractors to use on patients with moderate-to-severe disc-related problems.</p>
            <p>The doctor can apply manual traction to the low back or thoracic disc areas without danger of more injury to the spine, and to decrease pain and discomfort.  This special adjustment is usually done in conjunction with other pain reduction modalities such as electrical TNS units (trans-cutaneous nerve stimulation), ice or ultrasound.</p>
            
            <img src="img/spinal_decompression_img.jpg" alt="Spinal Decompression Image">

            <p>The effects can often be dramatic.  Such treatments have often helped patients avoid expensive and intrusive low back surgery that otherwise would have been their only option.</p>
            <p>There are also gentle chiropractic manual adjustments that are done without needing the special Cox table.  These “side posture” movements are designed to decompress the pelvis and spine in patients whose cases are deemed less chronic or severe.  Manual adjustments are quick, easy, mostly painless, and can correct most problems not associated with advanced disc problems, age or degeneration, such as constant sciatic pain. </p>
        </div>
    </div>
</div>


<!-- Paragraph Section Ends -->



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