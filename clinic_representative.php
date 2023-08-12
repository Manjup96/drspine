<!DOCTYPE html>
<html lang="en">


<?php
include 'links.php';
$page = 'about';
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
.overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity here */
z-index: 1; /* Place overlay above the image */
}

.bluish-green-btn {
        background-color: #00BFFF; /* Bluish-green color */
        color: white; /* Text color */
        /* Add any additional styling you want */
    }

    .bluish-green-btn:hover {
        background-color: #00BFFF; /* Bluish-green color on hover */
        /* Add any additional styling for hover state */
    }
</style>

<body>
    <?php
    include 'menu.php';
    ?>


<div class="container-fluid p-0">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="overlay"></div>
            <img src="img/career-banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Clinic Representative</h2>
            </div>

        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row">
        <center>
      <div class="col-md-12">
        <h2 style="font-size:45px; color:gray;">CHIROPRACTIC HELPS</h2>
        <img src="img/career1.png" alt=""><br><br>
        <h2 style="font-size:45px; color:gray;"> WE ARE HIRING!!!</h2>
        <h4 style="font-size:35px; color:gray;">Full Time or Part Time | Apply Today!</h4>
    </center>
       
      </div>
    </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
        <h2 style="text-align:justify; color:gray;">Clinic Representative</h2>
        <p style="font-size:20px; text-align:justify;">Qualifications: Position requires college graduate or at least college level. Preferably have sales experience specializing in the wellness/healthcare industry. Greet customers and offer assistance. Ensure to sell out services and act as a front-line customer service to walk-in customers. Must know how to educate and inform customers of innovations and technologies by promoting its features.</p>
    <ul style="padding: 28px;font-size:18px; list-style-type:none; margin-top:-30px;" >
        <li style="list-style-type: disc;">Position requires college graduate or at least college level.</li>
        <li style="list-style-type: disc;">Preferably have sales experience specializing in the wellness/healthcare industry.</li>
        <li style="list-style-type: disc;">Empathy towards patents – This is zero tolerance.</li>
        <li style="list-style-type: disc;">Greet customers and offer assistance.</li>
        <li style="list-style-type: disc;">Ensure to sell out services and act as a front-line customer service to walk-in customers.</li>
        <li style="list-style-type: disc;">Must know how to educate and inform customers of innovations and technologies by promoting its features, difference, and benefits with good convincing quality.</li>
        <li style="list-style-type: disc;">Confident with English written and verbal communications, Kanada, Tamil.<br>Goal-oriented, hospitable, and customer-oriented.</li>
        <li style="list-style-type: disc;">Ability to understand customer needs and handle different types of personalities.</li>
        <li style="list-style-type: disc;">Must be a fast learner and can adapt to a fast-paced environment.</li>
        <li style="list-style-type: disc;">Can communicate effectively with people.</li>
        <li style="list-style-type: disc;">Responsible for attaining sales targets.</li>
        <li style="list-style-type: disc;">Neat, with a pleasing personality.</li>
        <li style="list-style-type: disc;">No visible tattoo.</li>
        <li style="list-style-type: disc;">Passion to learn.</li>
    </ul>
    
    
    </div>
 <div class="col-md-6">
    <div class="container mb-3 mt-3" style="box-shadow: 0px 0px 5px 2px lightgray; padding: 15px; overflow-wrap: break-word;">
    <div class="row mb-3">
    <h3 style="font-size:30px;text-align:center; color:gray;" class="mt-3 mb-3">Contact us for more details</h3>
      <div class="col-md-6">
        <label for="full-name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="full-name" name="full-name"  placeholder="Full Name" required>
      </div>
      <div class="col-md-6">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject"  placeholder="Subject" required>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
      </div>
      <div class="col-md-6">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="tel" class="form-control" id="mobile" name="mobile"  placeholder="Mobile" required>
      </div>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Write your message below</label>
      <textarea class="form-control" id="message" name="message" rows="4"  placeholder="Briefly describe your problem" required></textarea>
    </div>
    <div class="mt-3">
    <label class="w-100">Resume: <span class="wpcf7-form-control-wrap" data-name="Resume"><input size="40" class="wpcf7-form-control wpcf7-file" id="resume" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt" aria-invalid="false" type="file" name="Resume"></span> </label>
</div >
<button type="submit" class="btn btn-primary form-control mt-3 mb-3 bluish-green-btn">Submit</button>

  </form>
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