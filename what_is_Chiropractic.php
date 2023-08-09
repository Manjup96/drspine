<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

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
            <img src="img/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>What is Chiropractic ?</h2>
            </div>

        </div>
    </div>
<!-- Banner Ends -->


<!-- Paragraph Section Starts -->
<style>
        #texts {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 20px;
        }

        #texts h2 {
        background-image: linear-gradient(to right, #000000, #34b6de, #000000);
        background-clip: text;
        -webkit-background-clip: text; /* For compatibility with some browsers */
        text-align: center;
        font-size: 60px;
        color: transparent; /* Set the text color to transparent to make the background visible */
        margin-bottom: 50px;
        margin-top: 50px;
        }

        #texts p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
        }

        #texts img {
            max-width: 70%;
            height: auto;
            margin: 20px auto;
            display: block;
        }

        #texts .row {
            margin-left: 0;
            margin-right: 0;
        }

        @media (max-width: 768px) {
            #texts h2 {
                font-size: 24px;
            }
            
            #texts p {
                font-size: 16px;
            }
            
            #texts img {
                max-width: 100%;
                margin: 30px auto;
            }
        }
    </style>

<div class="container-fluid" id="texts">
    <div class="row">
        <div class="col-md-12">
            <h2>Chiropractic Care</h2>
            <p>When seeking a pain management physician, it is often advantageous to find one that practices in a multidisciplinary and multimodal manner. These physicians can offer their patients more options and can provide them with an array of services, allowing an individualized treatment plan to be created. Chiropractic care can tie in closely with pain management. With the rise in the abuse of prescription pain medications, many patients are wary of managing their pain with medications. Chiropractic care is minimally invasive, non-pharmacological, and can be repeated with minimal if any side-effects.</p>
            
            <img src="img/chiropractic_img.jpg" alt="Spinal Decompression Image">

            <p>Back pain is extremely common; it is estimated that as many as 70% of the population will experience this type of pain at some time in their lives1. Further, half of all working Americans admit to having back pain symptoms each year2, and back pain is the second most common reason for visits to the doctor’s office, outnumbered only by upper-respiratory infections3.</p>
            <p>One way to combat back pain is through chiropractic care. According to the American Chiropractic Association (ACA), chiropractic is a health care profession that focuses on disorders of the musculoskeletal and nervous systems, and the effects of these disorders on general health4. It is used most often to treat neuromusculoskeletal complaints such as back pain, neck pain, joint pain of the arms or legs, and headaches5. Chiropractic is typically considered a form of complementary and alternative medicine (CAM). It is well established in the US, Canada, and Australia and is the third largest health profession, behind medicine and dentistry6. Further, it is covered by most insurance carriers. </p>
            <p>The most common reason people seek chiropractic treatment is for low back pain7. Although back pain can be caused by certain serious conditions such as inflammatory arthritis, infection, fracture and cancer, most cases of back pain are mechanical in nature8. Mechanical means the source of the pain may originate from the spine or surrounding tissues, including spinal joints, discs, vertebrae, or soft tissues, which can become damaged, irritated and inflamed9. According to the Cleveland Clinic, a specific trauma or strenuous activity may cause mechanical back pain; however, 80% of the time, the specific source of the pain is not found10.</p>
            <p>Chiropractors are concerned with the biomechanics, structure, and function of the spine along with its effects on the musculoskeletal and nervous systems and what they believe to be its role in health and disease11. Most assert that the spine and health are fundamentally related and that this relationship is mediated through the nervous system12. In addition, most endorse conservative management of the neuromusculoskeletal system without the use of medicines or surgery13.</p>
            <p>Chiropractic treatment primarily involves manual therapy, including manipulation of the spine and other joints, soft tissue therapies, rehabilitative exercises, health promotion, electrical modalities, complementary procedures, and lifestyle counseling14. The chiropractor may also employ certain diagnostic methods including skeletal imaging, observational and tactile assessments, and orthopedic and neurological evaluation15. As in other branches of healthcare, a chiropractor may also refer a patient to a specialist, or co-manage a patient with another health care provider16.</p>
            <p>A term heard often in chiropractic care is “subluxation.” The World Health Organization (WHO) definition of chiropractic vertebral subluxation is: “A lesion or dysfunction in a joint or motion segment in which alignment, movement integrity and/or physiological function are altered, although contact between joint surfaces remains intact. It is essentially a functional entity, which may influence biomechanical and neural integrity.” The chiropractic subluxation is not necessarily large enough to be perceptible on imaging studies such as a X-rays. It therefore differs from the common medical definition of a spinal subluxation which, according to the WHO, is a “significant structural displacement” that is visible on X-rays. One of the chief goals of chiropractic is to correct subluxations, which is thought to reduce pain and improve overall health. This is achieved mainly through chiropractic “adjustment,” which is another term for spinal manipulation.</p>
            <p>In many people, chiropractic care provides an excellent, conservative solution to back pain and may improve overall health. It is a well-known, established branch of health care, and is safe when performed by a certified, experienced practitioner. Many individuals find chiropractic reduces their pain and improves functionality, leading to a better quality of life.</p>
            <h4 style="font-size: 35px; color: grey;">References</h4>
            <p>1. Vallfors B. Acute, Subacute and Chronic Low Back Pain: Clinical Symptoms, Absenteeism and Working Environment. Scan J Rehab Med Suppl 1985; 11: 1-98. <br>
            2. Vallfors B. Acute, Subacute and Chronic Low Back Pain: Clinical Symptoms, Absenteeism and Working Environment. Scan J Rehab Med Suppl 1985; 11: 1-98. <br>
            3. “Back Pain Facts & Statistics.” American Chiropractic Association (ACA). American Chiropractic Association (ACA), 2011. Web. 30 Jun 2011. www.acatoday.org/level2_css.cfm. <br>
            4. “Back Pain Facts & Statistics.” American Chiropractic Association (ACA). American Chiropractic Association (ACA), 2011. Web. 30 Jun 2011. www.acatoday.org/level2_css.cfm. <br>
            5. “Back Pain Facts & Statistics.” American Chiropractic Association (ACA). American Chiropractic Association (ACA), 2011. Web. 30 Jun 2011. www.acatoday.org/level2_css.cfm. <br>
            6. Smith M, Morschhauser S. (2008). “Establishing a database of U.S. chiropractic health manpower data: furthering the development of research infrastructure.”. National Library of Medicine. gateway.nlm.nih.gov/MeetingAbstracts/. Retrieved 2011-06-30. <br>
            7. Homola S. (2006). “Chiropractic: history and overview of theories and methods”. Clin Orthop Relat Res., 444, 236–42. <br>
            8. “Back Pain Facts & Statistics.” American Chiropractic Association (ACA). American Chiropractic Association (ACA), 2011. Web. 30 Jun 2011. www.acatoday.org/level2_css.<br>
            9. “Acute Mechanical Back Pain.” Cleveland Clinic. Cleveland Clinic, 2009. Web. 30 Jun 2011.my.clevelandclinic.org/disorders/Back_Pain/hic_Acute_Mechanical_Back_Pain.<br>
            10. “Acute Mechanical Back Pain.” Cleveland Clinic. Cleveland Clinic, 2009. Web. 30 Jun 2011.my.clevelandclinic.org/disorders/Back_Pain/hic_Acute_Mechanical_Back_Pain.<br>
            11. “History of Chiropractic Care.” American Chiropractic Association (ACA). American Chiropractic Association (ACA), 2011. Web. 30 Jun 2011. www.acatoday.org/level2_css. <br>
            12. Gay RE, Nelson CF (2003). “Chiropractic philosophy”. In Wainapel SF, Fast A (eds.). Alternative Medicine and Rehabilitation: a Guide for Practitioners. New York: Demos Medical Publishing. <br>
            13. “History of Chiropractic Care.” American Chiropractic Association (ACA). American Chiropractic Association (ACA), 2011. Web. 30 Jun 2011. www.acatoday.org/level2_css <br>
            14. Mootz RD, Shekelle PG (1997). “Content of practice”. In Cherkin DC, Mootz RD (eds.). Chiropractic in the United States: Training, Practice, and Research. Rockville, MD: Agency for Health Care Policy and Research. pp. 67–91. OCLC 39856366. chiroweb.com/archives/ahcpr/chapter3. Retrieved 2008-10-10. AHCPR Pub No. 98-N002. <br>
            15. World Health Organization (2005). WHO guidelines on basic training and safety in chiropractic. ISBN 92-4-159371-7. [PDF]www.who.int/medicines/areas/traditional/Chiro-Guidelines.pdf. Retrieved 2011-06-30. <br>
            16. Meeker WC, Haldeman S (2002). “Chiropractic: a profession at the crossroads of mainstream and alternative medicine”. Ann Intern Med., 136 (3), 216– <br>
            </p>
        </div>
    </div>
</div>


<!-- Paragraph Section Ends -->

<!-- Form Section Starts -->
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

<!-- Form Section Starts -->



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