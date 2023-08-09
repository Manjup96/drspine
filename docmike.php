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
    .carousel-item {
    position: relative;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity here */
    z-index: 1; /* Place overlay above the image */
}


</style>
  <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="overlay"></div>
            <img src="img/doctorbanner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>DOCMIKE</h2>
            </div>

        </div>
    </div>
    

    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <p class="text-center font-weight-bold">MANILA’S WELLNESS GURU AND CHIROPRACTOR</p>
                <p style="font-size: 35px; font-weight:bold" class="text-center">OUR CHIROPRACTIC DIRECTOR -</p>
                <p style="font-size: 35px; font-weight:bold" class="text-center">DOCMIKE</p>
                
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 20px;" class="text-center">Now, the Director at Dr.Spine Chiropractic Clinic,
                    Bangalore Michel Yves Tetrault entered an 8-year formal course of the university toward the final
                    degree as Doctor of Chiropractic, graduating summa cum laude in 1979.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                <img src="img/doc1.jpg" alt="doc" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mt-5 bg-white rounded border" style="box-shadow: 0px 0px 5px 2px lightgray; padding: 15px; overflow-wrap: break-word;">

        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 20px; text-align: justify;">There are some individuals who are destined into
                    their life’s work and docMIKE is such an individual. After personally experiencing the disabling
                    effects of a spinal injury and finding recovery through Chiropractic, following years of
                    mismanagement by allopathic medicine, Michel Yves Tetrault entered an 8-year formal course of the
                    university toward the final degree as Doctor of Chiropractic, graduating Suma cum laude in
                    1979.</p>

                    <p class="mt-5" style="font-size: 20px; text-align: justify;">The lessons learned on the “Wellness” topic come from
                        a long and active holistic practice and from exposure to both scientific studies and traditional
                        healing encountered from travels to over 30 countries in all continents; frequently being published
                        with a propensity for educating people and an analytic mind that simply won’t quit; the outcome is an
                        individual with a creative mastermind affectionately known as docMIKE, Manila’s Wellness Guru and
                        Chiropractor in Makati, Philippines.</p>
            </div>
        </div>

       


        <div class="video">
            <div id="video-container" class="container text-center" >
              <div class="row">
                <div class="col-md-12">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bfOLdDEMIIs" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            </div>
    </div>


    <!-- Video Section Starts -->
  <style>

    .video .video-container {
      padding: 20px;
      background-color: #f2f2f2;
      margin-top: 30px;
    }
  
    .video .embed-responsive {
      position: relative;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden;
      border-radius: 10px;
      margin-top: 80px;
    }
  
    .video .embed-responsive::before {
      content: "";
      display: block;
      padding-top: 56.25%;
    }
  
    .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
  
  </style>
  
  <!-- Footer Start -->
<?php include("footer.php"); ?>
    <!-- Footer End -->
  
      
 
</body>

</html>
