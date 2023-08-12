<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form Example</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php
include 'links.php';
?>
</head>
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

    <div class="container-fluid p-0">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="overlay"></div>
                <img src="img/careerbanner.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <h2>Osteopaths</h2>
                </div>
              
            </div>
        </div>
    </div>


    <div class="container pt-4">
    <div class="row">
        <center>
      <div class="col-md-12">
        <h2 style="font-size:45px; color:#666666;">CHIROPRACTIC HELPS</h2>
        <img src="img/career1.png" alt="">
        <h2 style="font-size:45px; margin-top:25px;"> WE ARE HIRING!!!</h2>
        <h4 style="font-size:35px; color:#666666">Full Time or Part Time | Apply Today!</h4>
    </center>
       <hr>
      </div>
    </div>
</div>

<div class="container">
    <h2 style="font-size:45px; color:#666666;">Osteopaths</h2>
    <p style="font-size:20px; text-align:justify;">As an osteopath, you’ll use your expert knowledge of the musculoskeletal system to treat various health issues. You will take a holistic approach to the patient’s health, assessing their symptoms along with their medical history and lifestyle to find the right treatment plan for them.</p>
    <p style="font-size:20px; text-align:justify;">You’ll use manual therapy, such as massage or physical manipulation, as well as giving health advice and sometimes exercises, to treat various conditions including:</p>
    <ul style="padding:30px; font-size:18px;list-style-type:none; margin-top:-30px;">
    <li style="list-style-type: disc;">back, joint or muscle pain <br>injuries</li>
    <li style="list-style-type: disc;">digestive disorders</li>
    <li style="list-style-type: disc;">arthritis</li>
    <li style="list-style-type: disc;">sciatica</li>
    <li style="list-style-type: disc;">headaches and migraines.</li>
    </ul>
<p style="font-size:20px; text-align:justify; margin-top:-30px;">Your work will be used for prevention, treatment and diagnosis. Work is usually carried out in private practices where you will be self-employed but you may also find work within the NHS.</p>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
    <p style="font-size:20px; text-align:justify; margin-top:-30px;">Osteopath is a protected title and you must be registered with the General Osteopathic Council (GOsC) to be able to practice in the UK.</p>
     <h5 style="color:gray;">Responsibilities</h5>
     <h5 style="color:gray;">As an osteopath, you’ll need to:</h5>
     <p style="font-size:20px; text-align:justify;">Take detailed case histories from new patients, including both general health (lifestyle and diet) and specific symptoms assess the patient’s general posture and check for restrictions or tensions in joints or muscles by asking them to perform a series of active movements undertake physical examinations by using a highly refined sense of touch (palpation) to identify any restricted, weak or strained areas of the body make a working diagnosis and plan treatment in partnership with the patient provide appropriate treatments using soft tissue techniques, gentle release techniques and other appropriate methods, such as cranial osteopathy make lifestyle and dietary recommendations to patients in areas such as posture, eating, exercise and relaxation refer patients to their GP or other specialists, if required maintain accurate and up-to-date patient records.</p>
    </div>
    <div class="col-md-6">
<div class="container-fluid mt-5 mb-5" id="form">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="col-md-6 pt-3">
                    <form action="" method="POST">
                        <h2 class="text-left mb-2" style="color: grey; font-size: 35px; text-align: justify;">Contact Us For More Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3 mt-3">
                                <label for="fullname" class="form-label">Full Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3 mt-3">
                                <label for="subject" class="form-label">Subject<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3 ">
                                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3 ">
                                <label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="mobile" placeholder="Mobile" required>
                            </div>
                        </div>
                
                        <div class="mb-3">
                            <label for="textarea" class="form-label">Write your message below</label>
                            <textarea class="form-control" id="textarea" rows="5" placeholder="Briefly describe your problem"></textarea>
                        </div>
                        <div class="mt-3">
                            <label class="w-100" style="color: grey">Resume: <span class="wpcf7-form-control-wrap" data-name="Resume"><input size="40" class="wpcf7-form-control wpcf7-file" id="resume" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt" aria-invalid="false" type="file" name="Resume"></span> </label>
                        </div >
                      
                        <div class="text-center">
                            <button type="submit" class="btn">SUBMIT</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div >



</div>
</div>

<!-- Form Styles -->
<style>

        #form .container-fluid {
            padding: 50px;
            
        }
        #form hr {
             border: 1px solid #ccc; /* Change 2px to the desired thickness */
             
         }

        #form .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 550px;
            margin-top: -80px;
           
        }

        #form .card-body {
            width: 1100px;
            margin-left: -20px;
            
        }

        #form .form-label {
            
            color: grey;
        }

        #form .form-control {
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            background-color: #f8f9fa;
        }
       

        #form .form-select {
            width: 100%;
            border-radius: 5px;
            padding: 8px;
        }
        #form .btn {
            background-color: #55b6c7;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 213px;
            cursor: pointer;
            font-size: 20px;
            font-weight: 600;
            margin-top: 10px; 
            margin-bottom: 10px;
        }
        /* Media query for mobile view */
        @media (max-width: 768px) {
            #form { 
                padding: 10px;
                max-width: 100%;
            }
            #form .card-body {
                max-width: 110%;
            }
            #form .btn {
                padding: 10px;
                width: 100%;
                
            }

            #form .card {
                margin-top:-20px;
            }
        }
        /* Responsive adjustments for iPad view */
    @media (min-width: 768px) and (max-width: 991.98px) {
      #form {
                padding: 10px;
                max-width: 100%;
            }
            #form .card-body {
                max-width: 710px;
                margin-left: -29px;
            }
            #form .btn {
                padding: 10px;
                width: 100%;
                
            }
        }
    </style>
  <!-- Form Styles -->

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

       <!-- Footer Start -->
       <?php include("footer.php"); ?>
    <!-- Footer End -->
</body>
</html>