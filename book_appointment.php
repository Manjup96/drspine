<!DOCTYPE html>
<html lang="en">
<?php
include 'links.php';
?>

<body>
    <?php
    include 'menu.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <style>
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
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

        padding: 20px;

        color: white;

    }

    /* inner banner ends */
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

    <body>




        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Book Appointment</h2>
            </div>

        </div>
    </div>



        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="font-size:50px;font-weight:bold;color:#34B6DE">
                        Book Consultation

                    </h2>
                    <p style="font-size: 22px;" class="text-center">
                        Schedule a Consultation with Dr.Spine Chiropractic Clinic
                        Fill in the Form or call us directly at
                        <a href="tel:+917550705070">(+91) 75 5070 5070</a>,
                        <a href="tel:+919353316370">(+91) 93533 16370</a>,
                        <a href="tel:+919901087597">(+91) 99010 87597</a>
                    </p>

                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pt-5">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name" class="form-label">First Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name" class="form-label">Last Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="mobile" class="form-label" >Mobile Number<span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="mobile"  name="mobile" placeholder="Enter your mobile number" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label" >Email address<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Choose your nearest clinic (3 clinics in Bangalore)</label>
                                        <select class="form-select" id="location" name="location">
                                           
                                            <option  selected value="Indiranagar clinic">Indiranagar clinic</option>
                                            <option value="Whitefield clinic">Whitefield clinic</option>
                                            <option value="New BEL Road clinic">New BEL Road clinic</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Write your message below</label>
                                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 pt-5">
                                <div>
                                    <div class="card-body">
                                        <img src="img/book_appointment.jpg" alt="Image" class="img-fluid" style="height: 400px; width: 400px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- </section> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZLP3C5lYYIVJIDIq0T3SqrV4Vp9/K0/KJp7GmpeWPe1nv3Ih0hAtKtfw1p7jIQvV" crossorigin="anonymous"></script>

        <!-- Footer Start -->
        <?php include("footer.php"); ?>
        <!-- Footer End -->

        <script>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require_once "config.php"; // Include the database connection file

                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $mobile = $_POST["mobile"];
                $email = $_POST["email"];
                $location = $_POST["location"];
                $message = $_POST["message"];
                $entry_time = date("Y-m-d H:i:s"); // Current date and time

                $sql = "INSERT INTO booking_data (first_name, last_name, mobile, email, location, message, entry_time)
            VALUES ('$first_name', '$last_name', '$mobile', '$email', '$location', '$message', '$entry_time')";

                if ($conn->query($sql) === TRUE) {
                    echo "Booking data stored successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
            ?>
        </script>
    </body>

    </html>