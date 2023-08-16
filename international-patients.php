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
     .carousel-inner .carousel-item {
        position: relative;
    }

    .carousel-inner .carousel-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3); /* Adjust the opacity as needed */
        z-index: 1;
    }
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
    
        
  .sciatica_heading {
        background-image: linear-gradient(to right, #000000, #34b6de, #000000);
        background-clip: text;
        -webkit-background-clip: text; /* For compatibility with some browsers */
        text-align: center;
        font-size: 45px;
        color: transparent; /* Set the text color to transparent to make the background visible */
        /* margin-bottom: 50px;
        margin-top: 50px; */
        }

        .card {
            position: relative;
            width: 100%;
            max-width: 1140px;
            margin: 40px auto 30px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        } 
        .custom-button {
    background-color: #55B6C7;
    color: white;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }

  .homepage-container {
     max-width: 1150px; 
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    line-height: 1.6;
  }

  /* Center the heading */
  .text-heading-default {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  /* Add some spacing between paragraphs */
  p {
    margin-bottom: 15px;
  }


    </style>
   <div class="container-fluid p-0">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <h2>International Patients at Dr Spine </h2>
                </div>
    
            </div>
        </div>
    </div>
    
    <br>

    <center> <h6 class="badge font-weight-bold secondary-font bg-gray-2  " style=" background-color: lightgray; ">
    <span class="text-heading-default" 
    style="color:black">Best Chiropractic Clinic In Bangalore</span></h6></center>
<center><h2 class= "sciatica_heading">International Patients Welcome at Dr Spine    </h2></center>

<div class="card">
    <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-6">
            <h2 style="font-size: 35px; color: #55b6c7">We Offer International Patients American Chiropractic & Wellness Care</h2>
                   <p style="font-size: 20px; text-align: justify; padding: 10px;">Dr Spine Chiropractic Clinics are located in one of the world’s most beautiful travel destinations – Bangalore, India – where the doctors and staff welcome patients from all over the world. We offer treatment for both acute and chronic conditions, both medical and Chiropractic, and can often diagnose and treat complex conditions that evade regular medical diagnoses. Our team of internationally acclaimed doctors and healthcare specialists have given new hope to thousands who have come to us, and can offer you the same level of expertise.</p>
                   
                </div>
                <div class="col-md-12 col-lg-6">
    <img src="img/image1.jpg" alt="" class="img-fluid desktop-image-class" style="max-width: 100%; height: 500px;">
</div>
<br>
<div class="pt-3"><button class="custom-button" onclick="window.location.href='book_appointment.php'">Book Appointment</button></div>

        </div>
    </div>
</div>


<div class="homepage-container pt-5">

  
  <center><h2 style="color : black;" >International Patient Care at Dr Spine is a complete end to end service for international patients visiting the centre.</h2></center>


  <p style="font-size:20px;text-align: justify;padding:5px;">The International Healthcare Services team coordinates all aspects of patient visits to the centre, including right from an initial video medical consultation, coordinating appointments and their schedules bookings, coordinating the accommodations, interpreter services (Interpreter Service: Multilingual personnel for providing professional translation service to patients) and any specific food requirements, and assisting with travel (Travel Desk: In-house Travel desk assisting in all travel needs including Airport Transfers) and hotel arrangements.</p>
  <p style="font-size:20px;text-align: justify;padding:5px;">Our exceptional medical and chiropractic doctors and staff have been treating over 25000 patients since 2012. Our commitment is to provide the best possible personalized care, service and expertise – something you would expect from an International provider. If you a patient travelling to India from overseas with a chiropractic or medical condition, you may have some anxiety about where to get the best help possible. We are here. From initial inquiries into your condition through to all follow-ups, we will document all exams, treatments and findings. Our International Healthcare Services Team acts as a single point of contact until you as our patient successfully complete the medical or chiropractic care needed, and are ready to go back to your home country.</p>
  </div>
<!-- 
  <center>
    <div style="background-color: #495057; background-image: radial-gradient(at center center, #DFFAFF 50%, #55B6C7 100%); display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="row" style="align-items: center;">
            <div class="col-md-12 col-lg-6 pt-5 pb-5">
                <p style="font-size: 25px; text-align: justify; padding: 5px; font-weight: bold; color: black; margin: 0;">
                    We have an exclusive International Help Desk for any assistance you may need.</p>
                <p style="font-size: 25px; text-align: justify; padding: 5px; font-weight: bold; color: black; margin: 0;">
                    Contact Person: Ms. Anjali Rabecca (Phone: +91 7550705070)</p>
                <p style="font-size: 25px; text-align: justify; padding: 5px; font-weight: bold; color: black; margin: 0;">
                    Email: care@drspine.in</p>
            </div>
            <div class="col-md-12 col-lg-6">
                <img src="img/image-3.png" alt="" class="img-fluid desktop-image-class" style="max-width: 100%; height: 400px;">
            </div>
        </div>
    </div>
</center> -->


    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .custom-container {
            background-color: #495057;
            background-image: radial-gradient(at center center, #DFFAFF 50%, #55B6C7 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .row {
            align-items: center;
            justify-content: center; /* Center horizontally */
            margin: 0;
            padding: 0;
        }
        .col-md-12,
        .col-lg-6 {
            padding: 0;
        }
        .content {
            font-size: 25px;
            text-align: justify;
            padding: 5px;
            font-weight: bold;
            color: black;
            margin: 0;
        }
        .img-container {
            max-width: 100%;
            height: 400px;
            padding: 0;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;
        }
        .img-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Adjust this property as needed */
        }
    </style>

    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-md-6 col-lg-6 text-container">
                    <h5 class="text-heading-default font-weight-bold heading-text el-title_custom_color mb-10 pix-waiting animated" style="" data-anim-type="slide-in-up" data-anim-delay="0">We have an exclusive International Help Desk for any assistance you may need.  </h5>
                    <h5 class="text-heading-default font-weight-bold heading-text el-title_custom_color mb-10 pix-waiting animated" style="" data-anim-type="slide-in-up" data-anim-delay="0"> Contact Person: Ms. Anjali Rabecca (Phone: +91 7550705070)</h5>
                    <h5 class="text-heading-default font-weight-bold heading-text el-title_custom_color mb-10 pix-waiting animated" style="" data-anim-type="slide-in-up" data-anim-delay="0"> Email: care@drspine.in </h5>
            </div>
            <div class="col-md-6 col-lg-6 img-container">
                <img src="img/image-3.png" alt="" class="img-fluid desktop-image-class">
            </div>
        </div>
    </div>
    

    <div class="homepage-container pt-5">

  
<center><h2 style="color : black;" >Healthcare Opinion & Appointment – How To Get Started</h2></center>
<h5 class="text-heading-default font-weight-bold heading-text el-title_custom_color mb-10 pix-waiting animated" style="text-align:left;" data-anim-type="slide-in-up" data-anim-delay="0">Step 1. Request an Online Video Consultation.</h5>
 <!-- <p style="font-size:20px;text-align: justify;padding:5px;font-weight: bold; color:black">Step 1. Request an Online Video Consultation.</p> -->

<p style="font-size:20px;text-align: justify;padding:5px;">We do understand that you may have the choice of best medical and chiropractic attention in your country, If you choose to request a second opinion we will be more than glad to assist you. All you need to do is fill out the form below and you will be contacted by our Healthcare Services Executive who will ensure you receive an online health and medical history evaluation. The form will give us information about your medical or chiropractic concerns, how to contact you, and the preferred date for your appointment. It is important that you complete all the information requested in order to expedite this process.</p>
<p style="font-size:20px;text-align: justify;padding:5px;">Our doctors are from the USA and Canada and have a combined 60+ years of experience in treating Spinal, cranial and other problems related to spine, brain or nerve and joint dysfunction.</p>
<div class="pt-3"><button class="custom-button" onclick="window.location.href='services.php'">View All Our Services</button></div>
<p class="pt-4" style="font-size:20px;text-align: justify;padding:5px;">On receipt of your healthcare evaluation form, we will have the right specialist to evaluate your condition and process an appointment towards your video consultation. Our Healthcare Executive will communicate the same with you and schedule your consultation. A normal schedule for a complete evaluation on your medical or chiropractic condition is between 25 – 30 Minutes and a prognosis is also estimated and prescribed. You will then receive a medical/chiropractic report (in English), related films (X-ray, MRI, CT scan, ultrasound) and pathology slides, as may be required for diagnosis and treatment.</p>


<h5 class="text-heading-default font-weight-bold heading-text el-title_custom_color mb-10 pix-waiting animated" style="text-align:left;" data-anim-type="slide-in-up" data-anim-delay="0">Step 2: Post Diagnosis, Pending Arrival and Treatment.</h5>
<!-- <p style="font-size:20px;text-align: justify;padding:5px;font-weight: bold; color:black">Step 2: Post Diagnosis, Pending Arrival and Treatment.</p> -->
<p style="font-size:20px;text-align: justify;padding:5px;">Post evaluation, your Healthcare Executive will share the anticipated cost of treatment for your approval. The cost will be tentative as the prognosis has not been finalized by the doctor to this point. After your arrival, complete orthopaedic and neurological tests will be performed, and further X-rays order, if needed. The Healthcare Executive will then be in a position to share the complete cost of treatment. In matters of care, our tentative estimates are usually 99% accurate to the final costs originally quoted (the rare exceptions would be that findings on X-rays or other tests or exams reveal hidden conditions that were unknown or unreported).</p>
<p style="font-size:20px;text-align: justify;padding:5px;">After the final diagnosis is completed and a care program recommended, we will ask for your other travel plans, the number of days in India (Bangalore), and recommend a treatment plan to fit your Visa allowances and travel Itinerary. We can also provide further documentation to the immigration authorities should you need to get permission to stay longer on your Visa, and can recommend the best hotel accommodations near our centre.</p>
<p style="font-size:20px;text-align: justify;padding:5px;">Once all documentations are completed and served to you, you may make arrangements towards your travel and keep your Healthcare Executive posted about your needs for airport pick-up or delivery, and travel to and from your hotel.</p>
<p style="font-size:20px;text-align: justify;padding:5px;">The Healthcare Executive will also assist you with all details and appointments during your stay with us. We look forward to serving you!</p>

<h5 class="text-heading-default font-weight-bold heading-text el-title_custom_color mb-10 pix-waiting animated" style="text-align:left;" data-anim-type="slide-in-up" data-anim-delay="0">Step 3 – After Your Treatment</h5>
<!-- <p style="font-size:20px;text-align: justify;padding:5px;font-weight: bold; color:black">Step 3 – After Your Treatment</p> -->
<p style="font-size:20px;text-align: justify;padding:5px;">Once you complete your treatment program, your doctor will prescribe a home follow-up regimen, such as tips on nutrition, spinal or back exercises, and Do’s and Don’ts once you arrive back home. All suggestions are usually based on natural healing methods, and can be quite effective if followed as prescribed.</p>
<p style="font-size:20px;text-align: justify;padding:5px;">If further care is need, your doctor may recommend you return to India or see a local practitioner in your own country. In all cases, however, he will provide needed self-care instructions that minimize any recurring pain, discomfort or dysfunction.</p>
<p style="font-size:20px;text-align: justify;padding:5px;">If you have any further needs or questions, please contact our International Healthcare Services Team or your Healthcare Executive.</p>


<h2>We look forward to serving you at Dr. Spine!</h2>
</div>


<div class="container  ">
    <div class="row justify-content-center">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-6 pt-5 border border-dark" style="border-radius:10px;">
                        <div>
                            <div class="card-body">
                                <img src="img/img1.jpg" alt="Image" class="img-fluid" style="height: 400px; width: 400px;">
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



<!-- Footer Start -->
<?php include("footer.php"); ?>
    <!-- Footer End -->
</body>

</html>