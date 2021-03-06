<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--<meta http-equiv="cache-control" content="no-cache" /> -->
 	 	<!--<meta http-equiv="pragma" content="no-cache" /> -->
        <meta name="description" content="just a small web project for Fun" />
        <meta name="author" content="Maximilian Mewes" />
        <title>Blubber Lounge</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/labs.css" rel="stylesheet" />
        <link href="css/additional_styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img class="img-fluid" width="140px" src="assets/img/logo/blubber_lounge.png" alt="" />
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Über uns</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gallery">Galerie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-white font-weight-bold">Hookah Lounge <br /> Plaue</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Guck dich gerne mal um. Wir haben viele wylde selbstgebaute Hookahs die wir hier zur schau stellen.</p>
                        <a class="btn c-btn-primary btn-xl js-scroll-trigger" href="#gallery">zur Bilder Galerie</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- About-->        
        <section class="page-section bg-primary" id="about">
            <div class="svg-border-angled">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor">
                    <polygon points="0,100 100,0 100,100"></polygon>
                </svg>            
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Genau so ist es... <b>ALLES</b> was du willst haben wir.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Was wir machen</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-soap text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Blubbern</h3>
                            <p class="text-muted mb-0">non-stop 24/7 ohne Ende Wochenende</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-glass-cheers text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Trinken</h3>
                            <p class="text-muted mb-0">Irgendwas mit Alkohol</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gifts text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Party</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Liebe machen</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery">
                <div class="container-fluid px-5" >
                    <div class="masonry">
                        <?php // some nice juicy in-line php hmmmm tasty yummy

                            // Display all Images from a given directory
                            // image directory
                            $dir = "assets/img/portfolio/";
                            // get only teh images
                            $images = preg_grep("/^.*\.(jpg|jpeg|png)$/i", scandir($dir));
                            foreach ($images as $image) : ?>
                                <div class="masonry-item">
                                    <img src="assets/img/portfolio/<?php echo $image ?>" class="masonry-content">
                                </div>
                            <?php endforeach; ?>
                    </div>
                </div>  
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Sie haben eine Projekt Idee für uns oder möchten selber ein Projekt starten? Schicken sie uns doch eine Email</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <a class="d-block" href="mailto:info@blubber-lounge.de">
                            info@blubber-lounge.de
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-dark py-4">
            <div class="container"><div class="small text-center text-white-75">Copyright © 2021 - Blubber Lounge</div>
            <div class="small text-muted">
                <!--<a href="https://www.cookiepolicygenerator.com/live.php?token=iVUGFGJ4hqMONgXefm1Kz9tV9oQJW1CS">cookie stuff</a>
            </div></div>-->
        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
