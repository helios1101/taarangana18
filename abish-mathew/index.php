<!DOCTYPE html>
<html lang="en">
<head>
<title>Pronight | Taarangana'18</title>
<?php include('../module/head.php') ?>
<style type="text/css">

@media (max-width: 767px){
.title-45 {
    font-size: 26px;
    /* margin-bottom: 1px; */
    margin-top: 100px;
}}

</style>
</head>
    <body class="bg">
<?php include('../module/navbar.php') ?>
<?php include('../module/form.php') ?>
        <div id="fullpage">
            <section id="venue-opening" class="section bg">
                <img class="pro3">
                 <div class="container narrow">
                    <h3 class="title-45 proni wow fadeInUp" style="font-weight: 900 ;"><strong>Abish Mathew</strong></h3>
                </div>
            </section>
            <section id="how-to-get" class="section bg">
                <div class="side-wrap clearfix">
                    <div class="left-side">
                        <div class="inner-content center">
                            <div class="left-middle no-xs">
                             <h3 class="title-38"><strong>2nd February</strong><br>5pm onwards</br></h3>
                                <p>
How emabarrasssment is caught in 25 frames per second during pre-wedding videos, how Malayalam sounds like a beautiful Tabla while Punjabi like a Dholak - nobody explains better than him. His stand-up has made you laugh, till tears came to your eyes.<br>
His comedy YouTube show, Son of Abish, is like a mini talk show which often features the best of Indian stand-up stars. His collabs with AIB have left you hooked to his charm, humour and acting chops. The amazing, the one, the ONLY, Abish Mathew !<p>
                                   <h3>Venue</h3>
                                <p>Main Stage, IGDTUW</p>
                           </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="inner-content center">
                            <div class="left-middle no-xs">
<iframe class="vid" src="https://www.youtube.com/embed/qEpdEJNrLqc" frameborder="0" allowfullscreen></iframe><br><br>
<iframe class="vid" src="https://www.youtube.com/embed/kLcs2Z1FsiM" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
            <?php include('../module/footer.php') ?>
         </div>
        <script>
            $(function(){
                $(window).resize(function(){
                    if($(window).width()<768){
                        if($('#fullpage').hasClass('fullpage-wrapper')) $.fn.fullpage.destroy('all');
                        $('#venue-opening').height('100%')
                    } else {
                        $('#fullpage').fullpage({
                            scrollBar:true
                        });
                    }
                }).trigger('resize');
                
                var lat = 28.6652, lng = 77.2324
                var mapOption = {
                    styles: [
                        {
                            "featureType": "all",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "saturation": "-100"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 40
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#032635"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#3c5f58"
                                },
                                {
                                    "saturation": "0"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#0a3c52"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#1c4b5f"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#fa2e70"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#2b3638"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#2b3638"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#62f1d2"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#24282b"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ],
                    zoom: 17, 
                    center: {lat: lat, lng: lng}
                }
                var map = new google.maps.Map(document.getElementById('google-map'), mapOption);
                var marker = new google.maps.Marker({
                    position: {lat: lat, lng: lng},
                    map: map,
                    icon: '../assets/img/mapm.png'
                });
            });
        </script>
        
    </body>
    </html>