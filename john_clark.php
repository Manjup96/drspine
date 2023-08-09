<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dr.css">

    <title>Document</title>
</head>
<?php
include 'links.php';
?>

<body>
<?php
    include 'menu.php';
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

        padding-top: 35px;

        color: white;

    }

    /* inner banner ends */

</style>
  <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/doctorbanner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Dr. John Clark</h2>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5  col-sm-12">
                <p class="text-center font-weight-bold">
                    <span style="background-color: gray " class=" p-1 rounded">&nbsp;DR SPINE CHIROPRACTIC CLINIC BANGALORE&nbsp;</span>
                </p>
                
                <p style="font-size: 35px; font-weight:bold" class="text-center">Dr. John Clark</p>

            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="img/doc2.png" alt="doc" class="img-fluid">
            </div>
        </div>
    </div>


    <div class="container mt-5 bg-white rounded border" style="box-shadow: 0px 0px 5px 2px lightgray; padding: 15px; overflow-wrap: break-word;">
        <div class="row">
            <div class="col-md-12  col-sm-12">
                <p style="font-size: 20px; text-align: justify;">
                    Dr John Clark. A highly specialized Chiropractor from Canada with 28 years of rich experience in spine
                    treatment with various methodologies and one who has a deep connection with patients. Also having 25 years
                    of rich experience with Acupuncture and has treated various conditions right from Sciatica, Disk related
                    prolapse, sports injuries, Migraines, fibromyalgia, and much more. Available at Indira Nagar Clinic from
                    3rd week of December 2020.
                </p>
            </div>
        </div>
    </div>


    <style>
     /* Custom CSS for banner section */
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
            margin-left: 15px;
        }

        #banner p {
            font-size: 18px;
            /* Slightly reduced font size */
            color: #495057;
            margin-bottom: 20px;
            /* Slightly reduced margin */
            margin-left: 2px;
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
<div class="container-fluid mb-5 mt-5" id="banner">
    <div class="row">
        <div class="col-md-8">
            <h1>CONSULT DR. JOHN CLARK</h1>
            <p>Dr. John Clark is a Doctor of Chiropractic at Dr.Spine Indira Nagar Clinic</p>
        </div>
        <div class="col-md-4">
            <button data-bs-toggle="modal" data-bs-target="#bookingModal">&nbsp; Book NOW!&nbsp;</button>
        </div>
    </div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 35px;font-weight:bold" id="exampleModalLabel">Schedule Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form elements here -->
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg custom-input" id="firstName" placeholder="Enter your first name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg custom-input" id="lastName" placeholder="Enter your last name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-lg custom-input" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control form-control-lg custom-input" id="mobileNumber" placeholder="Enter your mobile number">
                    </div>
                    <div class="mb-3">
                    <textarea class="form-control form-control-lg custom-input" id="textarea" rows="4" placeholder="Message"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg">Request a Call Back</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom CSS to increase input text box size */
    .custom-input {
        font-size: 18px;
        padding: 18px;
    }
    
    /* Custom CSS to increase placeholder text size */
    .custom-input::placeholder {
        font-size: 18px;
        font-weight:bold;
    }
</style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Footer Start -->
 <?php include("footer.php"); ?>
    <!-- Footer End -->

</body>
</html>