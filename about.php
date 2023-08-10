<!DOCTYPE html>
<html lang="en">


<?php
include 'links.php';
?>



    <style>
        @media only screen and (max-width: 767px) {
            .carousel-inner .carousel-item img {
                height: 200px;
                max-width: 100%;
            }

            .carousel-caption h2 {
                font-size: 18px;
                padding-top: 20%;

            }
        }

        .carousel-caption {
            display: grid;
            place-items: center;
            height: 100%;
            text-align: center;

        }

        .carousel-caption h2 {
            max-width: 80%;

            margin: 0;

            padding-top: 35px;

            color: white;

        }

  </style>



<style>
        /* Extra image in ipad view */

        .ipad-image-class {
            display: none;
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1180px) and (-webkit-min-device-pixel-ratio: 1) {
            .ipad-image-class {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        }

        #toggleButton {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 25px;
            font-size: 16px;
            cursor: pointer;

        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: rgb(63, 153, 182);
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        /* Extra image in ipad view */
       .a_card {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a_card:hover {
            opacity: 0.7;
        }
    </style>
  


<body>
    <?php
    $page = 'about';
    include 'menu.php';
    ?>




    <div class="container-fluid p-0">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <h2>About Us</h2>
                </div>

            </div>
        </div>
    </div>

    <div style="text-align: center;" class="container pt-4">
        <p><span style="background-color: gray">&nbsp;&nbsp;Best Chiropractic Clinic In Bangalore&nbsp;&nbsp;</span></p>
        <h1>About Us</h1>
        <p style="font-size: 18px;">Dr. Spine Clinic is India’s first Chiropractic Chain of a Clinic</p>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <p><span style="background-color: gray;">&nbsp;&nbsp;Dr. Spine Clinic&nbsp;&nbsp;</span></p>
                <h1>Top Rated Chiropractic Clinic Heal Your Back Pain Without Surgery</h1>
                <p style="text-align: justify; font-size: 18px;">Dr. Spine Clinic is India’s first Chiropractic chain of a clinic that brings a revolutionary technology for treating back pain, neck, and a wide range of ailments through chiropractic spinal adjustment and alternative methods to treat spine-related issues.</p>
            </div>
            <div class="col-md-6">
                <img src="img/about2.png" alt="" class="img-fluid desktop-image-class">
                <img src="img/about-ipad1.png" alt="" style=" margin-top: 10px;" class="img-fluid ipad-image-class">
            </div>
        </div>
    </div>

    <div style="text-align: justify;" class="container pt-5">
        <div class="row">
            <div class="col-md-6 order-md-0">
                <img src="img/about3.png" alt="" class="img-fluid">
                <img src="img/about-ipad2.png" alt="" style="margin-top: 10px;" class="img-fluid ipad-image-class">
            </div>
            <div class="col-md-6 order-md-1">
                <h1 style="text-align: justify;">Treated over 25000<br>happy patients</h1>
                <p style="text-align: justify; font-size: 18px;">During the past 11 years, Dr.Spine has become a trusted and preferred clinic for patients suffering from spine-related issues. Conditions that Dr.Spine can treat with non-invasive methods are A back pain, Headache / Migraines Neck Pain, Disc Bulge, Slip Disc Disc Herniation, Sciatica, leg pain, Scoliosis, Spondylitis, Postural Deformities Ear infection, Colic High Blood Pressure, PMS, and related issues. You can reach us at our Indira Nagar Clinic or Whitefield Clinic located in Bangalore, India.</p>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <p><span style="background-color: gray">&nbsp;&nbsp;Dr. Spine - Chiropractic India &nbsp;&nbsp;</span></p>
                <h1>Has been Assessed to meet the Quality In Business standard set by the International Trade Council</h1><br>
                <center>
                    <button id="toggleButton_certificate">QIB Certificate</button>
                </center>
                <img id="image" src="img/about5.jpg" alt="Your Image" style="display: none;">
            </div>
            <div class="col-md-6">
                <img src="img/about4.png" alt="" class="img-fluid">
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
    <div style="text-align: center;" class="container pt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4" style="text-align:center;">

                <div class="card m-3">
                    <img src="img/doctor_5.png" alt="John" style="width:100%">
                    <h1>DocMike</h1>
                    <p>Manila’s Wellness Guru and Chiropractor in Makati, Philippines.</p>

                    <a href="docmike.php" class="a_card"><button>View More</button></a>

                </div>
            </div>
            <div style="text-align:center;" class="col-md-4 ">
                <div class="card m-3">
                    <img src="img/doctor_1.png" alt="John" style="width:100%">
                    <h1>Dr.John Clark</h1>
                    <p>A highly specialized chiropractor from canada with 28 years experience</p>

                    <a href="john_clark.php" class="a_card"><button>View More</button></a>
                </div>
            </div>
        </div>
    </div>


    <div style="text-align:center;" class="container pt-5">
        <div class="row">

            <div class="col-md-4" style="text-align:center;">
                <div class="card m-3">
                    <img src="img/doctor_3.png" alt="John" style="width:100%">
                    <h1>Dr. Troy <br>Scheible</h1>
                    <a href="troy_scheible.php" class="a_card"><button>View More</button></a>
                </div>
            </div>
            <div class="col-md-4" style="text-align:center;">
                <div class="card m-3">
                    <img src="img/doctor_2.png" alt="John" style="width:100%">
                    <h1>Dr. Michael Wohlgemuth</h1>
                    <a href="michael_wohlgemuth.php" class="a_card"><button>View More</button></a>
                </div>
            </div>
            <div class="col-md-4" style="text-align:center;">

                <div class="card m-3">
                    <img src="img/doctor_4.png" alt="John" style="width:100%">
                    <h1>Dr. Chetan <br> Upadhyaya</h1>
                    <a href="chetan_upadhyaya.php" class="a_card"><button>View More</button></a>
                </div>

            </div>
        </div>

    </div>

    <!-- Banner Ends-->
    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>