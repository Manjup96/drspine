<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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

        font-size: 35px;

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
            <img src="img/career.jpg" class="d-block w-100" alt="..." style="filter: brightness(0.6); ">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Careers</h2>
            </div>

        </div>
    </div>
<!-- Banner Ends -->


<!-- Content Section Starts -->
<style>
#content {
    padding: 20px;
}

#content .row {
    margin: 0 auto;
    max-width: 800px;
}

#content .col-md-12 {
    text-align: center;
    padding: 20px;
}

#content h2 {
    color: #666666;
    font-size: 45px;
}

#content h4 {
    color: #55b6c7;
    font-size: 25px;
    margin-top: 20px;
    padding: 10px;
}

#content h3 {
    color: #666666;
    font-size: 35px;
    margin-top: 40px;
}

/* Media Query for Mobile */
@media (max-width: 767px) {
    #content .row {
        max-width: 500%;
        margin-right: 200px;
    }
    
    #content .col-md-12 {
        padding: 10px;
    }
    
    #content h2 {
        font-size: 20px;
        width: 330px;
    }
    
    #content h4 {
        font-size: 13px;
        margin-top: 10px;
        width: 330px;
    }
    
    #content h3 {
        font-size: 18px;
        margin-top: 20px;
        width: 330px;
    }
}
</style>

<div class="container-fluid" id="content">
    <div class="row">
        <div class="col-md-12">
            <h2>Dr. Spine Chiropractic Clinics – Careers</h2>
            <h4 style="background-color: rgba(140,214,236,.15);">We invite you to browse our openings and apply online today!</h4>
            <h3>Full Time or Part Time | Apply Today!</h3>
        </div>
    </div>
</div>   
<!-- Content Section Ends -->


<!-- Dropdown Section starts -->
<style>
        /* Customize the accordion appearance */
        #dropdown .accordion {
            width: 100%;
            padding: 50px;
            margin-top: -80px;
        }
        
        #dropdown .card {
            border: none;
            margin-bottom: 1px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }
        
        #dropdown .card-header {
            background-color: #137121;
            padding: 10px 15px;
            cursor: pointer;
            text-decoration: none;
            border: none; /* Remove border from card header */
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 50px;
            
        }
       
        #dropdown .icon {
            transition: transform 0.3s ease-in-out;
        }
        
        #dropdown .icon-opened {
            transform: rotate(180deg);
        }
        
        #dropdown .card-body {
            padding: 10px 15px;
            background-color: #ffffff;
            border-top: 1px solid #e3e6e8;
            font-size: 20px;
            text-align: justify;
            
        }
        
        #dropdown .read-more {
            color:  #55b6c7;
            text-decoration: none;
        }
        #dropdown .read-more:hover {
            color: #6EC1E4;
        }
    </style>
    
    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.card-header').click(function() {
            $(this).find('.icon').toggleClass('icon-opened');
            
            // Toggle the angle icons within the clicked card-header
            $(this).find('.fa-angle-double-down, .fa-angle-double-up').toggleClass('d-none');
            
            // Hide angle-double-up icon in other card-headers
            $('.card-header').not(this).find('.fa-angle-double-up').addClass('d-none');
            // Show angle-double-down icon in other card-headers
            $('.card-header').not(this).find('.fa-angle-double-down').removeClass('d-none');
        });
    });
</script>



<div class="container-fluid" id="dropdown">
    <div class="row">
        <div class="col-md-12">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5 class="mb-0">
                        <span class="icon"><i class="fas fa-angle-double-down"></i></span>
                        <span class="icon"><i class="fas fa-angle-double-up d-none"></i></span>
                            &nbsp; Clinic Representative
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Qualifications: Position requires college graduate or at least college level. Preferably have sales experience specializing in the wellness/healthcare industry. Greet customers and offer assistance. Ensure to sell out services and act as a front-line customer service to walk-in customers. Must know how to educate and inform customers of innovations and technologies by promoting its features,….</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h5 class="mb-0">
                        <span class="icon"><i class="fas fa-angle-double-down"></i></span>
                        <span class="icon"><i class="fas fa-angle-double-up d-none"></i></span>
                            &nbsp; Acupuncturist
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>We are looking for an acupuncturist to be responsible for performing acupuncture on patients. The responsibilities of an acupuncturist include preparing herbal treatments, collecting the medical history of patients, and treating patients using needles and other tools.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h5 class="mb-0">
                        <span class="icon"><i class="fas fa-angle-double-down"></i></span>
                        <span class="icon"><i class="fas fa-angle-double-up d-none"></i></span>
                            &nbsp; Osteopaths
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>As an osteopath, you’ll use your expert knowledge of the musculoskeletal system to treat various health issues. You will take a holistic approach to the patient’s health, assessing their symptoms along with their medical history and lifestyle to find the right treatment plan for them.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <h5 class="mb-0">
                        <span class="icon"><i class="fas fa-angle-double-down"></i></span>
                        <span class="icon"><i class="fas fa-angle-double-up d-none"></i></span>
                            &nbsp; Chiropractor
                        </h5>
                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Looking for an opportunity to treat critical conditions with passion and delivering quality chiropractic care?
                               The right adjustment is all it takes with passion and empathy.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Dropdown Section starts -->


<!-- Form Section Starts -->



<!-- Form Section Ends -->















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