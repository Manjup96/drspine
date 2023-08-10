<!DOCTYPE html>
<html lang="en">


<?php
include 'links.php';
?>



    <style>

        /* Banner style start for all 3 views */
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
  /* Banner style start end for all 3 views*/


  </style>



<style>
#image1 {
  margin-top: 35px;
}

/* Styles for smaller screens */
@media (max-width: 768px) {
  #image1 {
    margin-top: 0px; /* Adjust the value for smaller screens */
  }
}


        /* Extra image in ipad view start*/

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
     /* Extra image in ipad view end */


     /* QIB Button style */
        #Button1 {
        background-color: #55b6c7; /* Button background color */
        color: white; /* Button text color */
        border: none; /* Remove border */
        padding: 10px 20px; /* Add padding */
        font-size: 25px;
        border-radius: 30px;
        cursor: pointer;
    }
/* QIB Button style */

/* card button style */
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

        
       .a_card {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a_card:hover {
            opacity: 0.7;
        }

        /* card button style */
        
        #texts {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 20px;
        }

        #text h1 {
        background-image: linear-gradient(to right, #000000, #34b6de, #000000);
        background-clip: text;
        -webkit-background-clip: text; /* For compatibility with some browsers */
        text-align: center;
        font-size: 45px;
        color: transparent; /* Set the text color to transparent to make the background visible */
        margin-bottom: 50px;
        margin-top: 50px;
        }
    </style>
  


<body>
    <?php
    include 'menu.php';
    ?>




    <div class="container-fluid p-0" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <h2>About Us</h2>
                </div>

            </div>
        </div>
    </div>

    <div style="text-align: center;" class="container pt-4" id="text">
        <p style="font-size:20px;"><span style="background-color: gray ">&nbsp;&nbsp;Best Chiropractic Clinic In Bangalore&nbsp;&nbsp;</span></p>
        <h1>About Us</h1>
        <p style="font-size:20px;text-align: center;">Dr. Spine Clinic is India’s first Chiropractic Chain of a Clinic</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pt-5" style="font-family:Open Sans, sans-serif;">
                                        <p style="font-size:20px;"><span style="background-color: gray;">&nbsp;&nbsp;Dr. Spine Clinic&nbsp;&nbsp;</span></p>
                                        <h1>Top Rated Chiropractic Clinic Heal Your Back Pain Without Surgery</h1>
                                        <p style="font-size:20px;text-align: justify;">Dr. Spine Clinic is India’s first Chiropractic chain of a clinic that brings a revolutionary technology for treating back pain, neck, and a wide range of ailments through chiropractic spinal adjustment and alternative methods to treat spine-related issues.</p>
                                        
                                    </div>
                                    <div class="col-md-6 pt-4" style="border-radius:10px; padding: 20px; text-align:end;">
                                        <div>
                                            <div class="card-body">
                                                <img src="img/aboutm.jpg" alt="Image" class="img-fluid" style="max-height: 400px; width: 400px; " >
                                                <img src="img/about-ipad1.jpg" alt="" style="margin-top: 80px; max-height: 800px; width: 400px;" class="img-fluid ipad-image-class">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container mt-4 mb-5">
                <div class="row justify-content-center">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 pt-4" style="border-radius:10px;">
                                    <img src="img/about3.png" alt="" class="img-fluid" id="image1" >
                                    <img src="img/about-ipad1.jpg" alt="" style="margin-top: 25px;" class="img-fluid ipad-image-class">
                                    <img src="img/about-ipad2.jpg" alt="" style="margin-top: 25px;" class="img-fluid ipad-image-class">
                                </div>
                                <div class="col-md-6 mt-2" style="font-family:Open Sans, sans-serif;">
                                    <h1>Treated over 25000 happy patients</h1>
                                    <p style="font-size:20px;text-align: justify;">During the past 11 years, Dr.Spine has become a trusted and preferred clinic for patients suffering from spine-related issues. Conditions that Dr.Spine can treat with non-invasive methods are A back pain, Headache / Migraines Neck Pain, Disc Bulge, Slip Disc Disc Herniation, Sciatica, leg pain, Scoliosis, Spondylitis, Postural Deformities Ear infection, Colic High Blood Pressure, PMS, and related issues. You can reach us at our Indira Nagar Clinic or Whitefield Clinic located in Bangalore, India.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container mt-3 mb-5">
                    <div class="row justify-content-center">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pt-4" style="font-family:Open Sans, sans-serif;">
                                        <p style="font-size:20px;"><span style="background-color: gray">&nbsp;&nbsp;Dr. Spine - Chiropractic India &nbsp;&nbsp;</span></p>
                                        <h1>Has been Assessed to meet the Quality In Business standard set by the International Trade Council</h1><br>
                                        <center>
                                        <button id="Button1"><i class="fas fa-certificate"></i> QIB Certificate</button><br><br>
                                        </center>
                                        <img id="image" src="img/about5.jpg" alt="Your Image" style="display: none;">
                                        
                                    </div>

                                    <div class="col-md-6 pt-8" style="border-radius:10px;">
                                        <div>
                                            <div class="card-body">
                                                <img src="img/about4.png" alt="Image" class="img-fluid" style="height: 400px; width: 400px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("Button1");

            toggleButton.addEventListener("click", function() {
                // Redirect to the new page with the image
                window.open("img/about5.jpg", "_blank");
            });
        });
    </script>
    <div style="text-align: center;" class="container pt-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4" style="text-align:center;">

                <div class="card m-3">
                    <img src="img/doctor_5.png" alt="John" style="width:100%">
                    <h2 class="fs-3">DocMike</h2>
                    <p>Manila’s Wellness Guru and Chiropractor in Makati, Philippines.</p>

                    <a href="docmike.php" class="a_card"><button>View More</button></a>

                </div>
            </div>
            <div style="text-align:center;" class="col-md-4">
                <div class="card m-3">
                    <img src="img/doctor_1.png" alt="John" style="width:100%">
                    <h2 class="fs-3">Dr.John Clark</h2>
                    <p>A highly specialized chiropractor with 28 years experience</p>

                    <a href="john_clark.php" class="a_card"><button>View More</button></a>
                </div>
            </div>
        </div>
    </div>


    <div style="text-align:center;" class="container pt-3">
        <div class="row">

            <div class="col-md-4 " style="text-align:center;">
                <div class="card m-3" >
                    <img src="img/doctor_3.png" alt="John" style="width:100%">
                    <h2>Dr.Troy <br> Scheible</h2>
                    <a href="troy_scheible.php" class="a_card"><button>View More</button></a>
                </div>
            </div>
            <div class="col-md-4  " style="text-align:center;">
                <div class="card m-3" >
                    <img src="img/doctor_2.png" alt="John" style="width:100%">
                    <h2>Dr. Michael Wohlgemuth</h2>
                    <a href="michael_wohlgemuth.php" class="a_card"><button>View More</button></a>
                </div>
            </div>
            <div class="col-md-4" style="text-align:center;">

                <div class="card m-3">
                    <img src="img/doctor_4.png" alt="John" style="width:100%">
                    <h2>Dr. Chetan <br> Upadhyaya</h2>
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