<!DOCTYPE html>
<html lang="en">
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

    <div class="container-fluid p-0">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <h2>Spinal Canal Stenosis:  Causes, Symptoms & Treatment</h2>
                </div>
    
            </div>
        </div>
    </div> 

    <style>

#texts {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 20px;
        }

#texts h2 {
        background-image: linear-gradient(to right, #000000, #34b6de, #000000);
        background-clip: text;
        -webkit-background-clip: text; 
        text-align: center;
        font-size: 45px;
        color: transparent; 
        margin-bottom: 50px;
        }

        #texts p {
            font-size: 20px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
            
        }

        #texts .row {
            margin-left: 0;
            margin-right: 0;
        }

</style>

<div class="container" id="texts">
    <div class="row">
        <div class="col-md-12">
<h6 class="mx-auto text-center mt-5" style="font-size:20px"><span style="background-color: #bdc3c7 ">Dr Spine Chiropractic Clinic In Bangalore</span></h6>
<h2 class="mx-auto text-center">Treating Spinal Stenosis the Dr. Spine Way!</h2>
<p class="mt-3" style="text-align: justify;">Spinal Canal stenosis is a general term that best describes the “pinched nerve” feeling some patients have when their back starts paining or aching. When spinal vertebral joints become misaligned due to accidents, improper exercises, or poor working or sleeping conditions, this can cause acute pressure on spinal nerve roots that then cause considerable pain.</p>
<p class="mt-3" style="text-align: justify;">At Dr. Spine, our doctors have treated hundreds of patients suffering from spinal stenosis using a combination of chiropractic care and specific treatment modalities. Our spine specialists are well trained to accurately assess your condition, then use a variety of chiropractic and other non-invasive methods to bring about lasting relief.</p> 
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