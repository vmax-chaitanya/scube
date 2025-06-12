<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Welcome </title>

    <?php include("includes/styles.php"); ?>
    <style type="text/css">
        .fs-200 {
            font-size: 20px !important;
        }

        /* .h1,
        h1 {
            font-size: 5.5rem;
        }

        .carousel-caption {
            text-align: left;
        } */
        /* .carousel-caption h1 {
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
           
        } */

        /* .carousel-image-wrapper {
            position: relative;
        }

        .carousel-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        } */

        .dark-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(48, 48, 48, 0.5);
            /* Adjust opacity here */
            z-index: 1;
        }

        .carousel-caption {
            position: absolute;
            z-index: 2;
            bottom: 20%;
            left: 10%;
            text-align: left;
            color: #fff;
        }

        .carousel-item {
            height: 120vh;
            /* Full viewport height */
            overflow: hidden;
        }

        .carousel-image-wrapper {
            height: 100%;
            position: relative;
        }

        .carousel-image-wrapper img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            object-position: top;

        }
    </style>

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!--<div class="preloader"></div>-->

        <!--/////////////////////// header start ////////////////////////-->
        <?php $page = 'make_active';
        include("includes/header.php"); ?>
        <!--/////////////////////// header end ////////////////////////-->

        <!--==================================================================== 
            Start Hero Section
        =====================================================================-->
        <!-- <section class="hero-section overlay">
            <div class="container">
                <div class="hero-inner">
                    <span class="sub-title wow fadeInUp" data-wow-duration="1s">SINCE 1996.</span>
                    <h1><span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Professional </span><br>
                     <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">HR Consulting</span><br>
                      <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Solutions</span></h1>
                    <a href="<?php echo base_url(); ?>contact.php" class="theme-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Contact Us <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Hero Section
        =====================================================================-->
        <!-- <section class="hero-section overlay"> -->
        <!-- <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000"> 
                    <img src="<?php echo base_url(); ?>assets/home/images/hero/hero-bg.jpg" class="d-block w-100" alt="...">

                    <div class="carousel-caption text-start custom-caption">
                        <h1>Professional.</h1>
                        <h1>HR Consulting.</h1>
                        <h1>Solutions.</h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="<?php echo base_url(); ?>assets/home/images/hero/pvg.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption text-start custom-caption">

                        <h1>Professional</h1>
                        <h1>HR Consulting</h1>
                        <h1>Solutions</h1>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="<?php echo base_url(); ?>assets/home/images/banner/service.jpg" class="d-block w-100" alt="...">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div> -->

        <!-- </section> -->


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
                <?php $i = 1;
                foreach ($banners as $banner) : ?>
                    <div class="carousel-item <?php echo $i == 1 ? 'active' : ''; ?>">
                        <div class="carousel-image-wrapper">
                            <img loading="lazy" class="d-block w-100" src="<?php echo base_url('' . $banner['image']); ?>" alt="Slide image">
                            <div class="dark-overlay"></div>
                            <div class="carousel-caption">
                                <h1><?php echo $banner['name']; ?></h1>
                            </div>
                        </div>
                    </div>

                <?php $i++;
                endforeach; ?>
            </div>

            <!-- Navigation Arrows -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!--==================================================================== 
            Start Our Success Section
        =====================================================================-->
        <div class="our-success pb-30 rpb-0 wow fadeInUp" data-wow-duration="2s">
            <div class="container">
                <div class="success-wrap bg-orange">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-people"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="150">100</span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-edit"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="5000">0</span>
                                    <p>Recruitments closures</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-computer"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="65">0</span>
                                    <p>Compliance Cases solved</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-review"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="200">0</span>
                                    <p>Training Programs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================================================== 
            End Our Success Section
        =====================================================================-->

        <!--==================================================================== 
            Start About Us Section
        =====================================================================-->
        <section class="about-us pb-100 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>ONE STOP SOLUTION FOR ALL YOUR <span>HR NEEDS.</span></h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image rmb-50">
                            <img class="wow fadeInBottomLeft" data-wow-duration="2s" src="<?php echo base_url(); ?>assets/home/images/about/abbout.png" alt="About Image">
                            <!-- <div class="about-border"></div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-right rmb-50">
                            <!-- <div class="about-border"></div> -->
                            <img class="wow fadeInBottomLeft" data-wow-duration="2s" src="<?php echo base_url(); ?>assets/home/images/about/abbout1.png" alt="About Image">

                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-25 wow fadeInUp" data-wow-duration="2s">
                                <h2>ONE STOP SOLUTION <br> FOR ALL YOUR <span>HR NEEDS.</span></h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-duration="2s">Over the years, we have built our credibility and have emerged as a service partner of choice with many multinationals and Indian organizations alike.
                            </p>

                            <a href="<?php echo base_url(); ?>about.php" class="theme-btn wow fadeInUp" data-wow-duration="2s">Explore More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End About Us Section
        =====================================================================-->

        <!--==================================================================== 
            Start Service Section
        =====================================================================-->
        <section class="services-section bg-snow pt-10 rpt-90 pb-50 rpb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>Our Service <span>Offerings</span></h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $i = 1;
                    foreach ($services as $row) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item wow fadeInUp" data-wow-duration="2s">
                                <div class="service-icon d-flex">
                                    <img src="<?php echo base_url(); ?>assets/home/images/services/icon1.png" alt="Services">
                                    <a href="<?php echo base_url(); ?>services/<?php echo $row['service_url']; ?>" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="service-content">
                                    <h4><a href="<?php echo base_url(); ?>services/<?php echo $row['service_url']; ?>"><?php echo $row['name']; ?></a></h4>
                                    <p><?php echo substr($row['description'], 0, 140); ?>
                                    </p>
                                    <a href="<?php echo base_url(); ?>services/<?php echo $row['service_url']; ?>" class="ml-auto"> Read More...<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>

                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Service Section
        =====================================================================-->

        <!--==================================================================== 
            Star Partners Section
        =====================================================================-->
        <section class="partners-section pt-50 rpt-85 pb-50 rpb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="section-title wow fadeInUp" data-wow-duration="2s">
                            <h2>Why<br>Value HR First
                                <span>?</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="<?php echo base_url(); ?>assets/home/images/1.png" alt="Partner Image">
                                <!-- <p class="p_bold">HR & Compliance Experts</p> -->
                            </div>
                            <div class="partner-item">
                                <img src="<?php echo base_url(); ?>assets/home/images/2.png" alt="Partner Image">
                                <!-- <p class="p_bold">End-to-End HR Solutions at one place Matter Experts</p> -->

                            </div>
                            <div class="partner-item">
                                <img src="<?php echo base_url(); ?>assets/home/images/3.png" alt="Partner Image">
                                <!-- <p class="p_bold">Experienced Lead & Teams </p> -->

                            </div>
                            <div class="partner-item">
                                <img src="<?php echo base_url(); ?>assets/home/images/4.png" alt="Partner Image">
                                <!-- <p class="p_bold">Budget friendly customized HR Solutions</p> -->

                            </div>
                            <!-- <div class="partner-item">
                                <img src="assets/images/partners/partner2.png" alt="Partner Image">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Partners Section
        =====================================================================-->

        <!--==================================================================== 
            Star Cases Section
        =====================================================================-->
        <!-- <section class="cases-section bg-black pt-140 rpt-90 pb-150 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>Consultancy Cases</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="case-wrap">
                    <div class="case-item wow fadeInUp" data-wow-duration="2s">
                        <div class="case-image">
                            <img src="assets/images/cases/case1.jpg" alt="Case Image">
                            <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="case-content">
                            <span>HOME / LAND</span>
                            <h4><a href="case-details.html">Mortgage Advisor</a></h4>
                        </div>
                    </div>
                    <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="case-image">
                            <img src="assets/images/cases/case2.jpg" alt="Case Image">
                            <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="case-content">
                            <span>BUSINESS SOLUTION</span>
                            <h4><a href="case-details.html">Online Consulting</a></h4>
                        </div>
                    </div>
                    <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="case-image">
                            <img src="assets/images/cases/case3.jpg" alt="Case Image">
                            <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="case-content">
                            <span>CORPORATE SERVICES</span>
                            <h4><a href="case-details.html">Planning & Management</a></h4>
                        </div>
                    </div>
                    <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
                        <div class="case-image">
                            <img src="assets/images/cases/case2.jpg" alt="Case Image">
                            <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                        <div class="case-content">
                            <span>BUSINESS SOLUTION</span>
                            <h4><a href="case-details.html">Online Consulting</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Cases Section
        =====================================================================-->

        <!--==================================================================== 
            Start Team Section
        =====================================================================-->
        <section class="team-section pt-50 rpt-90 pb-50 rpb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">

                            <!--<h2> <span>Team HR First</span></h2>-->
                            <h2>Team<span> HR First</span></h2>

                            <!--     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-wrap">

                <?php $j = 1;
                foreach ($team as $row) : ?>
                    <div class="team-item wow fadeInUp" data-wow-duration="<?php echo $j; ?>s">
                        <div class="item-image">
                            <img src="<?php echo base_url('' . $row['image']); ?>" alt="Team Image">
                            <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                          
                        </div> -->
                        </div>
                        <div class="team-desc">
                            <h3 style="text-align: center;"> <?php echo $row['title']; ?></h3>
                            <p class="fs-200 " style="text-align: center;"> <?php echo $row['short_text']; ?></p>
                            <p class="fs-200 " style="text-align: center;"> <?php echo $row['description']; ?></p>
                        </div>
                    </div>
                <?php $j++;
                endforeach; ?>


                <!-- <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="item-image">
                        <img src="<?php echo base_url(); ?>assets/home/images/team/team02.png" alt="Team Image">
                       <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> 
                    </div>
                    <div class="team-desc">
                        <h3>Ms.Kumud, MBA-HR </h3>
                        <p class="fs-200">Sr. HR Business Partner</p>
                    </div>
                </div> -->


            </div>
        </section>
        <!--==================================================================== 
            End Team Section
        =====================================================================-->

        <!--==================================================================== 
            Start Call Back Section
        =====================================================================-->
        <!-- <section class="call-back-section text-white py-150 rpt-90 rpb-100">
            <div class="call-back-shap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInUp"  data-wow-duration="2s">
                            <h2>Request A Call Back.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do labore et dolore magna aliqua enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="call-back-form" class="call-back-form" name="call-back-form" action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="full-name" class="form-control" value="" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email-address" class="form-control" value="" placeholder="Email Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone-number" class="form-control" value="" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-10">        
                                    <div class="form-group">
                                        <input type="text" name="short-text" class="form-control" value="" placeholder="Short Text">
                                    </div>
                                </div>                                               
                            </div>
                            <div class="form-group call-submit text-center">
                                <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Call Back Section
        =====================================================================-->

        <!--==================================================================== 
            Start Testimonial Section
        =====================================================================-->
        <!-- <section class="testimonial-section pt-50 rpt-85 pb-50 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8 col-sm-9">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>What Clients Say <span>About Us!</span></h2>
                          
                        </div>
                    </div>
                </div>

                <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <?php $i = 1;
                        foreach ($testimonial as $row) : ?>
                            <div class="carousel-item <?php echo $i == 1 ? 'active' : ''; ?>">
                                <div class="testimonial-card">
                                  
                                    <?php if ($row['gender'] == 1) { ?>
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonials/male.jpg" class="profile-img" width="80px" height="80px">
                                    <?php } else { ?>
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonials/female.jpg" class="profile-img" width="80px" height="80px">
                                    <?php } ?>
                                    <h5><?php echo $row['name']; ?></h5>
                                    <p class="testimonial-text"><?php echo $row['description']; ?></p>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                        <div class="carousel-item">
                        <div class="testimonial-card">
                            <img src="<?php echo base_url(); ?>assets/home/images/team/team02.png" class="profile-img" alt="Jane Smith">
                            <h5>Jane Smith</h5>
                            <p class="testimonial-text">"Amazing experience! The team was professional and delivered on time."</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <img src="<?php echo base_url(); ?>assets/home/images/team/team02.png" class="profile-img" alt="Michael Johnson">
                            <h5>Michael Johnson</h5>
                            <p class="testimonial-text">"Absolutely loved their work! Will definitely use their services again."</p>
                        </div>
                    </div> 

                    </div>

                   
                    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Testimonials Section
        =====================================================================-->

        <!--==================================================================== 
            Start Call To Action Section
        =====================================================================-->
        <!--  <section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                            <h3>You Want To Work With Best Consulting Solutions Company?</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <a href="contact.php" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Call To Action Section
        =====================================================================-->
        <section class="cta-section  pt-50 rpt-80 pb-50 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>Partial List of our <span>Clientele..</span></h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="owl-carousel client-logo-carousel">
                    <?php $i = 1;
                    foreach ($clients as $row) : ?>
                        <div class="item"><img src="<?php echo base_url('' . $row['image']); ?>" alt="Client 1" class="img-fluid"></div>
                    <?php $i++;
                    endforeach; ?>
                </div>
            </div>
        </section>


        <!--/////////////////////// footer start ////////////////////////-->

        <?php include("includes/footer.php"); ?>
        <!--/////////////////////// footer end ////////////////////////-->
    </div>
    <!--End pagewrapper-->

    <?php include("includes/scripts.php"); ?>
</body>

<!-- Mirrored from live.envalab.com/html/conset/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:21:17 GMT -->

</html>