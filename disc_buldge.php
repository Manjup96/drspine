<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

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

    }

    /* inner banner ends */
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
</style>

<body>
    <?php
    include 'menu.php';
    ?>



    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Disc Bulge Slipped Disc – Causes Symptoms and Treatment</h2>
            </div>

        </div>
    </div>



    <!-- banner ends -->






    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <p style="text-align:center;"><span style="background-color: #bdc3c7 ">&nbsp;&nbsp;Dr Spine Chiropractic Clinic In Bangalore &nbsp;&nbsp;</span></p>
                <p style="text-align:center;color:#34B6DE;font-size:50px;" class="pt-4">Treating a Bulging Disc </br>
                    the Dr. Spine Way!</p>
            </div>
        </div>
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
                                        <p><span style="background-color: #bdc3c7 ">&nbsp;&nbsp;Dr. Spine Clinic &nbsp;&nbsp;</span></p>
                                        <p style="font-size:50px;">Disc Bulge or Slipped Disc</p>
                                        <p style="font-size:20px;text-align: justify;">The so-called “slipped disc” is a very common complaint, and is often mis-diagnosed by some health professionals not specifically trained to diagnose and treat bio-mechanical stress on the spine and the affects this has on spinal nerve roots.</p>
                                        <p style="font-size:20px;text-align: justify;">At Dr. Spine, our doctors have treated thousands of patients suffering from bulging discs in the spine (or “slipped disc”) using a combination of gentle chiropractic adjustments and specific treatment modalities. Our spine specialists are well trained to accurately assess your condition, then use a variety of chiropractic and other non-invasive methods to bring about lasting relief.</p>
                                    </div>
                                    <div class="col-md-6 pt-5 border border-dark" style="border-radius:10px;">
                                        <div>
                                            <div class="card-body">
                                                <img src="img/disc_buldge.jpg" alt="Image" class="img-fluid" style="height: 400px; width: 400px;">
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


    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>