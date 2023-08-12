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
            <img src="img/career-banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>   Acupuncturist </h2>
            </div>

        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-12">
                <h2 style="font-size: 45px;font-weight:bold;text-align:center; color:#666666">CHIROPRACTIC HELPS</h2>
                <center><img src="img/career1.png" alt=""  ></center><br>
                <h2 style="font-size: 45px;font-weight:bold;text-align:center; color:gray">WE ARE HIRING!!!
                </h2>
                <h2 style="font-size: 35px;font-weight:bold;text-align:center; color:#666666">Full Time or Part Time | Apply Today!
                </h2>
            </div>
        </div>
    </div>


   

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2 style="font-size:35px;font-weight:bold;color:#666666">Acupuncturist</h2>
                <p style="font-size: 20px; font-weight:bold;color:gray">Qualifications:</p>
                <p style="font-size: 20px;text-align:justify">An acupuncturist who can treat a variety of physical and psychological problems. Acupuncturists consult with patients about symptoms, perform diagnoses, and treat ailments using acupuncture needles. Acupuncturist Job Description Template</p>
                <p style="font-size: 20px;text-align:justify">We are looking for an acupuncturist to be responsible for performing acupuncture on patients. The responsibilities of an acupuncturist include preparing herbal treatments, collecting the medical history of patients, and treating patients using needles and other tools.</p>
                <p style="font-size: 20px;text-align:justify">To be successful as an acupuncturist, you should demonstrate compassion, possess knowledge of laws and regulations, and a strong interest in alternative medicine. Ultimately, a top-notch acupuncturist should be accredited, equipped with proven acupuncturist experience, and strong analytical skills.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p  style="font-size: 20px; font-weight:bold;color:gray">Acupuncturist Responsibilities:</p>
                <ul style="padding: 28px;font-size:18px; list-style-type:none;margin-top:-30px;margin-bottom:-20px">
                    <li style="list-style-type: disc;">Treating patients with needles, cups, ear balls, seeds, pellets, and supplements.</li>
                    <li  style="list-style-type: disc;">Preparing herbal treatments to treat patients.</li>
                    <li  style="list-style-type: disc;">Assessing patients to make diagnoses.</li>
                    <li  style="list-style-type: disc;">Collating medical histories.</li>
                    <li  style="list-style-type: disc;">Developing treatment plans.</li>
                    <li  style="list-style-type: disc;">Analyzing physical findings and medical records to make a diagnosis.</li>
                    <li  style="list-style-type: disc;">Monitoring progress.</li>
                    <li  style="list-style-type: disc;">Ensuring a safe and healthy environment.</li>
                    <li  style="list-style-type: disc;">Abiding by laws and regulations.</li>
                </ul>
                <p  style="font-size: 20px; font-weight:bold;color:gray">Acupuncturist Requirements:</p>
                <ul style="padding: 28px;font-size:18px; list-style-type:none;margin-top:-30px">
                     <li  style="list-style-type: disc;">Accreditation as an acupuncturist.</li>
                     <li  style="list-style-type: disc;">License to practice acupuncture.</li>
                     <li  style="list-style-type: disc;">Good analytical skills.</li>
                     <li  style="list-style-type: disc;">Compassion for patients.</li>
                     <li  style="list-style-type: disc;">Administrative skills.</li>
                     <li  style="list-style-type: disc;">Good communication skills.</li>
                </ul>
                    `
            </div>
            <div class="col-md-6">
                <div class="container mb-3 mt-3" style="box-shadow: 0px 0px 5px 2px lightgray; padding: 15px; overflow-wrap: break-word;">
                    <div class="row mb-3">
                        <div class="text-center mb-3 mt-3">
                        <h2 style="font-size:30px;font-weight:30px;color:#666666">Contact us for more details</h2>
                        </div>
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
                <button type="submit" class="btn btn-primary form-control mt-3 mb-3">Submit</button>
                
                  </form>
                </div>  
            </div>
        </div>
    </div>

     <!-- Footer Start -->
<?php include("footer.php"); ?>
    <!-- Footer End -->

    </body>
    </html>