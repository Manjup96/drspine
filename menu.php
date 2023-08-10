<style>
    /* Styles for desktop view */
    @media (min-width: 1025px) {

        /* Add your desktop-specific styles here */
        #navbarNav {
            margin-left: 300px;
        }
    }

    /* Styles for ipad view */
    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        .navbar-toggler {
            margin-left: 280px;
            font-size: 20px;
        }

    }

    /* Styles for mobile view */
    @media (max-width: 767px) {
        .navbar-toggler {
            margin-left: 60px;
            margin-bottom: 10px;
        }
    }

    /* Styles for iPad View */
    @media (max-width: 1024px) {
        #padding {
            padding-top: 20px;
        }
    }

    /* Styles for Mobile View */
    @media (max-width: 767px) {
        #padding {
            padding-top: 20px;
        }
    }

    /* Reset CSS */
    ul,
    li {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    /* Your existing styles */
    .pt-3 {
        font-size: 17px;
        text-align: justify;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 500px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: #333;
        padding: 10px 15px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    body,
    html {
        overflow-x: hidden;
    }


    #content {
        font-size: 18px;
        min-width: 800px;
        /* Adjust the width as needed */
    }

    #content .col-md-4 {
        display: inline-block;
        width: 30%;
        /* This will make each column take one-third of the width */
        padding: 5px;
        vertical-align: top;
    }


    /* Default style for the logo image */
    .logo_image {
        max-width: 100%;
        height: auto;
    }

    /* Media query for mobile screens (adjust the breakpoint as needed) */
    @media (max-width: 767px) {
        .logo_image {
            max-width: 60%;
            /* Adjust the width as needed */
        }
    }

    @media (min-width: 992px) {

        /* Apply the style only for desktop view */
        .custom-dropdown {
            left: 50%;
            transform: translateX(-50%);
            width: 700px;
        }
    }
    
    ul {
    list-style-type: none;
  }
  ul li {
    list-style-type: disc;
   
  }
</style>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-light">-->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" style="box-shadow: 10px 10px 10px 10px #007bff;">




    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="logo" width="70%" style="max-width: 600px; background-color: transparent;">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </a>






        <div class="collapse navbar-collapse " id="navbarNav" style=" transition: all 0s ease;" style="padding-right:100px;">
            <ul class="navbar-nav" style="font-size:20px; margin-right: 70px;">

              
                <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link text-center <?php echo ($page == 'index') ? 'active' : ''; ?>" style="<?php echo ($page == 'index') ? 'background-color:#34B6DE;olor:white' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link text-center <?php echo ($page == 'about') ? 'active' : ''; ?>" style="<?php echo ($page == 'about') ? 'background-color:#34B6DE;color:white' : ''; ?>" href="about.php">About</a>
                </li>

                <li class="nav-item" style="margin-left: 15px;">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-center <?php if ($page == 'services') echo 'active' ?>" style="<?php echo ($page == 'services') ? 'background-color:#34B6DE;color:white' : ''; ?>" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0 custom-dropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="backpain.php" class="dropdown-item">Back Pain</a>
                                        <a href="neckpain.php" class="dropdown-item">Neck Pain</a>
                                        <a href="sciatica.php" class="dropdown-item">Sciatica</a>
                                        <a href="physiotherapy.php" class="dropdown-item">Physiotherapy</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="migraine.php" class="dropdown-item">Migraine</a>
                                        <a href="coccydynia.php" class="dropdown-item">Coccydynia</a>
                                        <a href="spinal_decompression.php" class="dropdown-item">Spinal Decompression</a>
                                        <a href="spinalcanel.php" class="dropdown-item">Spinal Canal Stenosis</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="disc_buldge.php" class="dropdown-item">Disc Bulge and Slipped Disc</a>
                                        <a href="piriformis_syndrome.php" class="dropdown-item">Piriformis Syndrome</a>
                                        <a href="fibromyalgia.php" class="dropdown-item">Fibromyalgia</a>
                                        <a href="kyphosis.php" class="dropdown-item">Kyphosis</a>
                                        <a href="pelvic_girdle_pain.php" class="dropdown-item">Pelvic Girdle Pain</a>
                                        <a href="sacrolic_joint_dysfunction.php" class="dropdown-item">Sacroiliac Joint Dysfunction</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link text-center <?php echo ($page == 'homeservices') ? 'active' : ''; ?>" style="<?php echo ($page == 'homeservices') ? 'background-color:#34B6DE;color:white' : ''; ?>" href="homeservices.php">Home Services</a>

                </li>


                <li class="nav-item" style="margin-left: 15px;">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-center <?php if ($page == 'gallery') echo 'active' ?>" style="<?php echo ($page == 'gallery') ? 'background-color:#34B6DE;color:white' : ''; ?>" data-bs-toggle="dropdown">Gallery</a>
                        <div class="dropdown-menu m-0">
                            <a href="photo.php" class="dropdown-item">Photo Gallery</a>
                            <a href="video.php" class="dropdown-item">Video Gallery</a>
                        </div>
                    </div>
                </li>



                <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link text-center <?php echo ($page == 'contact') ? 'active' : ''; ?>" style="<?php echo ($page == 'contact') ? 'background-color:#34B6DE;color:white' : ''; ?>" href="contact.php">Contact Us</a>
                </li>
                <!-- <li class="nav-item" style="margin-right: 10px;" id="padding">
                    <a href="book_appointment.php" class="text-center btn btn-primary px-md-4 rounded-pill pt-2" style="height: 48px; width: 150px; font-size: 18px; display: block; margin:  0px;">
                        Book an Appointment
                    </a>
                </li>  -->
                <div class="col-sm-2 col-lg-1  appoint" style="font-size:23px;">
                        <a class="btn btn-success" href="book_appointment.php">Book an Appointment</a>
                    </div>

            </ul>
        </div>
    </div>
</nav>