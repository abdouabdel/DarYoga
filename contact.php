<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <style>
        #map {
            height: 400px;
            width: 100%
        }
    </style>
    <title>DarYoga - Pour une vie citadine plus épanouie !</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!--[if lte IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/selectric.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/adaptive.css" media="screen" />


    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectric.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body class="contact">
<?php  include('include/header.php');?>
<section class="container">
    <div class="pageHeader" style="background-image: url(images/content/bg-parallax2.jpg);">
        <h1>Nous contactez</h1>
    </div>
    <div class="ourContact">
        <div class="wrapper clear">
            <div class="contactGallery">
                <ul>
                    <li><img src="images/content/gallery.jpg" alt=""></li>
                    <li><img src="images/content/story.jpg" alt=""></li>
                </ul>

            </div>
            <div class="contactInfo">
                <h3>Contact</h3>
                <p><i class="contactPhone"></i> 06 70 99 18 25 <br>   05 22 36 27 19</p>
                <p><i class="contactEmail"></i> contact@daryoga.com</p>
                <p><i class="contactLocation"></i> DARYOGA Ecole de Hatha Yoga <br>
                    Atelier Vitalis <br>
                    Rue Jabal Saghrou, quartier CIL <br>
                    Casablanca
                </p>
            </div>
        </div>
    </div>
    <div class="locationMap">
        <!-- Map -->

        <div id="map"></div>

        <script>

            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: {lat: 33.431525, lng:-7.638837},
                    gestureHandling: 'cooperative',
                    scrollwheel: false,
                    /*
                     styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#87e050"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]
                     */
                });

                var contentString = ''+
                    " "+
                    '';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                var image = '1.png';
                var marker = new google.maps.Marker({
                    position: {lat: 33.431525, lng: -7.638837},
                    map: map
                    //icon: image
                });


                infowindow.open(map, marker);

            }

        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNmsteWgzYXurooIRyFRh-IqQFPPNPH7g&libraries&signed_in=true&callback=initMap"
                async defer></script>
    </div>
</section>

<?php  include('include/footer.php');?>
<?php  include('include/mobileMenu.php');?>
</body>

</html>