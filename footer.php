  <style>
      /* Your existing styles for larger screens here */

      /* Media query for mobile view */
      @media only screen and (max-width: 767px) {
          h2 a {
              display: block;
              margin-top: 10px;
              /* Add some vertical spacing between the text and the link */
          }

          /* ipad style for quicklinks */
          #ipad_links {
              display: flex;
              flex-direction: column;
              align-items: center;
              /* Center items in mobile view */
          }

          @media (min-width: 992px) {
              #ipad_links {
                  align-items: flex-start;
                  /* Align items at the start in desktop view */
              }
          }
        }
  </style>



  <div class="container-fluid  text-secondary p-5" style="margin-top: 3px; background-image: radial-gradient(at center center, #DFFAFF 50%, #55B6C7 100%);">
      <div class="row g-5">
          <div class="col-12 text-center">
              <!-- <h2 class="mb-4" style="color: black; font-size: 35px; font-weight:bold;">
        Looking for a job? -->
              <a href="book_appointment.php" style="color: #495057; font-size: 42px; font-weight:bold; text-decoration: none; display: inline-block; /* Added this line */">
                  Book an Appointment
              </a>
              </h2>
          </div>
      </div>
  </div>


  <div class="container-fluid bg-dark text-secondary p-5">
      <div class="row g-5">
          <div class="col-lg-4 col-md-6" id="ipad_links">
              <h3 class="text-white mb-4">Quick Links</h3>
              <div class="d-flex flex-column justify-content-start">
                  <a class="text-white mb-2" style="text-decoration: none;" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                  <a class="text-white mb-2" style="text-decoration: none;" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                  <a class="text-white mb-2" style="text-decoration: none;" href="services.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                  <!-- <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a> -->
                  <a class="text-white mb-2" style="text-decoration: none;" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                  <a class="text-white" style="text-decoration: none;" href="photo.php"><i class="bi bi-arrow-right text-primary me-2"></i>Gallery</a>
              </div>
          </div>


          <div class="col-lg-4 col-md-6 text-center ">
              <h3 class="text-white mb-4 ">Areas We Serve</h3>
              <!--<p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>A9, 1st floor, Malcha Marg, Chanakyapuri,</br> New Delhi- 110021</p>-->
              <p class="mb-2 text-white">
                  <i class="bi bi-geo-alt text-primary me-2" style="vertical-align: text-top;"></i>
                  Indiranagar Bangalore, Whitefield Bangalore,</br> HSR Layout Bangalore, Koramanagala Bangalore,</br>J P Nagar Bangalore,
                  Rajaji Nagar Bangalore, </br> Vijayanagar Bangalore, Yeshwantpur Bangalore, </br> Tumkur, Mysore, Chitradurga, Davanagere, Shimoga<br>
                  <span style="display: inline-block; margin-left: 0px;"></span>
              </p>


          </div>

          <style>
              .social-icons .btn {
                  margin-right: -15px;
                  /* Adjust the margin value as per your preference */
              }
          </style>

          <div class="col-lg-4 col-md-9 text-center text-md-center">
              <h3 class="text-white mb-4">Follow Us</h3>
              <div class="d-flex justify-content-center justify-content-md-center social-icons">
                  <a class="btn" href="" target="_blank">
                      <img class="twitter-icon" src="img/whatsapp.png" alt="Twitter Icon" style="width: 45px; height: 45px;">
                  </a>
                  <a class="btn" href="https://www.facebook.com/drspineclinic/" target="_blank">
                      <img class="facebook-icon" src="img/facebook.png" alt="Facebook Icon" style="width: 45px; height: 46px;">
                  </a>
                  <a class="btn" href="https://www.youtube.com/channel/UCbUVemOwXbSiTEmWrBVhSlQ/" target="_blank">
                      <img class="youtube-icon" src="img/youtube.png" alt="youtube Icon" style="width:50px; height: 50px;">
                  </a>
                  <a class="btn" href="https://www.instagram.com/drspineclinic/" target="_blank">
                      <img class="instagram-icon" src="img/instagram.png" alt="Instagram Icon" style="width: 45px; height: 46px;">
                  </a>
              </div>
              <div class="p-3">
                  <i class="fa fa-phone phone-icon pt-2"></i> <a href="tel:(+91)-7550705070" style="color:white">(+91)-7550705070</a><br>
                  <i class="fa fa-phone phone-icon pt-2"></i> <a href="tel:(+91)-9353316370" style="color:white">(+91)-9353316370</a><br>
                  <i class="fa fa-phone phone-icon pt-2"></i> <a href="tel:(+91)-9901087597" style="color:white">(+91)-9901087597</a><br>
              </div>
          </div>


      </div>
  </div>

  <!-- <a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top" style="border-color: white !important; background-color: #0d6efd; color: white; border-style: solid; position: fixed; bottom: 80px; right: 50px; border-radius: 55%;">
 <i class="bi bi-arrow-up" style="border-color: white !important;"></i> -->
  </a>
  <!-- <div class="container-fluid bg-dark text-white text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
      <p class="m-0">&copy; <a class="text-white border-bottom" href="">Dr Spine</a>. All Rights Reserved. </p>
     
  </div> -->
  <div class="text-center" style="margin-bottom:0px" id="copyright">

      <p style="color:black;font-size:18px;font-weight: bold;">Copyright &copy;
          <script>
              document.write(new Date().getFullYear());
          </script> Dr Spine, All Rights Reserved. <br>Designed with <i class="fa fa-heart"></i> by <a href="https://www.iiiqbets.com/" target="_blank">iiiqbets.</a>
      </p>
  </div>