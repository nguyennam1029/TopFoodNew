<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- ---aos-- -->
    <!-- <link rel="stylesheet" href="aos-2/dist/aos.css"> -->
    <!-- APP CSS -->
    <!-- <link rel="stylesheet" href="form/form_style.css"> -->
    <link rel="stylesheet" href="./grid.css">
    <link rel="stylesheet" href="./app.css">
</head>

<body>
    <style>
        .container {}

        .contact-img {
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
            margin-top: -19px;

        }

        .contact-img>img {
            height: 90vh;

        }

        .contact {
            text-align: center;
        }

        .contact-titel {
            position: relative;

        }

        .contact-name {
            font-size: 26px;
            margin: 10px 0;
            transition: all 0.25s ease-in;
            background: linear-gradient(to right, #c5ff00, #ff2070);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        .contact-input {
            padding: 16px;
            outline: none;
            border: none;
            border-radius: 20px;
            border: 1px solid #61ac2b4d;
            width: 80%;
            margin-top: 14px;
            background-color: rgb(237, 235, 235);
            overflow: hidden;
            background: linear-gradient(to right, #ff880019, #ff207211);
            color: #fff;
        }

        .contact-input.textarea {
            resize: none;
        }

        .contact-sub {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="app">
        <!-- NAV -->
        <?php require 'menu.php' ?>
        <!-- END NAV -->


        <div class="container">
            <div class="row">
                <!-- <div class="col-6 col-md-6 col-sm-0">
                    <div class="contact-img">
                        <img src="./images/Group 2041.png" alt=">
                    </div>
                </div> -->
                <div class="col-6 col-o-3 col-md-6 col-md-o-0 col-sm-12">
                    <div class="contact">
                        <form>

                            <h3 class="contact-name">Contact us</h3>


                            <input class="contact-input" type="text" placeholder="Name">
                            <input class="contact-input" type="email" placeholder="Email">
                            <input class="contact-input" type="text" placeholder="Phone">
                            <textarea class="contact-input textarea" rows="10" cols="50" name="comment" placeholder="Message"></textarea>
                            <div class="contact-sub">
                                <a href="../form/form_login.html" class="custom-btn btn-11 hover-active contact-sub" style="width: 120px;">
                                    Gửi
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="contact-footer">

        </div>
    </div>


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script src="./contact.js"></script>


</body>

</html>