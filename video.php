
<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

<body>
    <?php
    include 'menu.php';
    ?>

<!-- 
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner.png" class="d-block w-100" alt="...">
    
    </div>
  </div> -->

  
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
    </style>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2 style="font-size: 50px; bold">Video Section</h2>
            </div>

        </div>
    </div>

 

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;" class="border rounded border-dark">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/h3y00bQKqsE?start=2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
 </div>
</div>

        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
                 <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;" class="border rounded border-dark">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/0cQWrLknKGM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
 </div>
        </div>
    </div>
</div>


  
  <div class="container">
    <!-- <div class="row">
        <div class="col-md-12 text-center pt-5">
            <h2 style=bold>VIDEO & PRESENTATIONS</h2>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
                 <!-- <iframe max-width="500" min-width="200" height="315" src="https://www.youtube.com/embed/qtYiXuh27_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;" class="border rounded border-dark">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube-nocookie.com/embed/rRhfb6Ncwyo?t=1s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
  </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="video-container pt-5">
                  <!-- <iframe max-width="500" min-width="200" height="315" src="https://www.youtube.com/embed/plBqTLGooAc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;" class="border rounded border-dark">
  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/h3y00bQKqsE?start=2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




            </div>
        </div>
    </div>
</div>


<div id="video-container" class="container text-center pt-5" class="border rounded border-dark">
            <div class="row">
                <div class="col-md-12  class=border rounded border-dark">
                <div class="embed-responsive embed-responsive-16by9" class="border rounded border-dark">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5AIqZik0Nwc" allowfullscreen></iframe>
</div>

                </div>
            </div>
        </div>
 <!-- Video Section Starts -->
        <style>
            #video-container {
                padding: 18px;
                /* background-color: #f2f2f2; */
            }

            .embed-responsive {
                position: relative;
                display: block;
                width: 100%;
                padding: 0;
                overflow: hidden;
            }

            .embed-responsive::before {
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