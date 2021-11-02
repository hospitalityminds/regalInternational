<!DOCTYPE html>
<html lang="en">

<head>

    <title>Deluxe Rooms at Hotel Traders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/mediaelement%404.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/parklane/logo/icon.ico" /> -->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {
            display: none;
        }

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <ion-icon src="/path/to/external/file.svg"></ion-icon>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/customhome.css">
</head>

<body>
    <div class="site-wrap">


        <!--navbar-->
        <?php include 'includes/navbar.php'; ?>



        <div class="slide-one-item home-slider owl-carousel">
            <div class="site-blocks-cover overlay" style="background-image: url(images/regal/13.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center" data-aos="fade">
                            <h1 class="mb-2">Deluxe Rooms</h1>
                            <!--<h2 class="caption">Hotel &amp; Resort</h2>-->
                        </div>
                    </div>
                </div>
            </div>
           <!-- <div class="site-blocks-cover overlay" style="background-image: url(images/parklane/slider/32.png);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center" data-aos="fade">
                            <h1 class="mb-2">Unique Experience</h1>
                            <h2 class="caption">Enjoy With Us</h2>--
                        </div>
                    </div>
                </div>
            </div>-->
           <!-- <div class="site-blocks-cover overlay" style="background-image: url(images/parklane/slider/33.png);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center" data-aos="fade">
                            <h1 class="mb-2">Relaxing Room</h1>
                            <h2 class="caption">Your Room, Your Stay</h2>--
                        </div>
                    </div>
                </div>
            </div>-->
        </div>


    </div>
    <br>
    <div class="container"><br>
        <div class="title-box  text-center">
            <h3 class="title-heading"> Deluxe Room </h3>
            <hr class="text-center mx-auto">
        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="w3-content w3-display-container">
                    <img class="mySlides" src="images/regal/7.jpg" style="width:100%">
                    <img class="mySlides" src="images/regal/10.jpg" style="width:100%">
                    <img class="mySlides" src="images/regal/13.jpg" style="width:100%">
                    <img class="mySlides" src="images/regal/21.jpg" style="width:100%">
                    <!-- <img class="mySlides" src="images/parklane/deluxe/17.JPG" style="width:100%"> -->
                    <!-- <img class="mySlides" src="images/parklane/deluxe/43.JPG" style="width:100%"> -->

                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>
            </div>
            <div class="col-md-6">
                <p class="abt-text">Deluxe Room is this hotel offers a homely abode to guests. Comfortable and soft beds with basic room amenities. Daily cleaned and sanitized by the housekeeping staff and are provided with all basic toiletries.</p><br>
                <div class="title-box  text-center">
                    <h3 class="title-heading"> Room Details </h3>
                </div>
                <ul class="abt-text">
                <li>Attached Bathroom</li>
                    <li>Wi-Fi</li>
                    <li>Bathroom Amenities</li>
                    <li>Safe</li>
                    <li>Air Condition</li>
                    <li>24/7 Food Delivery</li>
                    <li>Television </li>
                </ul>
            </div>
        </div>
    </div>


    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }

    </script>



    <br><br>

    <!--footer -->
    <?php include 'includes/footer.php'; ?>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'),
                total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function() {
                        var target = document.body.querySelectorAll('.player'),
                            targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });

    </script>

   
</body>


</html>
