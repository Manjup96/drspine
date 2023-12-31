<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

<body>
    <?php
     $page = 'services';
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
                    <h2>Neck Pain Treatment Bangalore</h2>
                </div>
    
            </div>
        </div>
    </div>

    
<style>
.card {
            position: relative;
            width: 100%;
            max-width: 1100px;
            margin: 40px auto 30px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
        
        #image1 {
  margin-top: 25px;
}

/* Styles for smaller screens */
@media (max-width: 768px) {
  #image1 {
    margin-top: 0px; /* Adjust the value for smaller screens */
  }
}

          /* CSS for desktop view */
    #hide_img {
        display:none;
    } 

    /* CSS for mobile view */
    @media only screen and (max-width: 767px) {
        #hide_img {
            display: none;
        }
    } 
  
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
  #hide_img {
    display: block;
  }
}

#video {
 padding-bottom: 60px;
}

@media (max-width: 768px) {
  #video {
    padding: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    #video {
        padding-bottom: 60px;
    }
}
</style>


    <div class="container mt-3 mb-3">
      <div class="row">
         <div class="card">
         <div class="card-body">
         <div class="row mb-5">
          <div class="col-md-6">
                <h6 class="mx-auto text-center mt-5" style="font-size:20px"><span style="background-color: #bdc3c7">Non-Invasive Treatment For Neck Pain Sufferers</span></h6>
                  <p style="font-size:20px">Dr. Spine with the primary focus of pain management in your spine provides the most effective treatment for Neck and lower back areas with right Chiropractic care. People with older ages also develop these issues that are characterized by precise gentle care and recommended solutions.</p>
            
         </div>
      <div class="col-md-6" id="image1">
        <div>
          <div class="card-image">
            <img src="img/neck.png" alt="">
            <img src="img/about3.png" alt="" style="margin-top: 10px; width: 500px; height: 350px;" id="hide_img" class="img-fluid ipad-image-class">
          </div>
        </div>
      </div>
     </div>
   </div>
  </div>
 </div>
</div>

<div class="container card" id="video">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;" class="border rounded border-dark">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/JDIWSBm4hVo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
</div>
 </div>
</div>

        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
                 <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;" class="border rounded border-dark">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/x3yDLHdVY6A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
</div>
 </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
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

    <!-- Banner Ends-->

       <!-- Footer Start -->
       <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>
</html>